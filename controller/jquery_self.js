
/**
* @file        jquery_self.js
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2025, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2025-01-25
*/



$(document).ready
(
    function()
    {
        var inputId;
        var inputForm;
        var inputEvent;
        var openQueue =true;
        var  client_main;
        const regex2 = /^.{1}$/;
        console.log('JavaScript is loaded successfully');

        const arr = $('.needs-validation'); // was-valid look doc 
        console.log(arr);

        $('[data-bs-toggle="tooltip"]').tooltip(); // Tooltips

        $('#virtualizationYes').on
        (
            'click', 
            function() 
            {
                $('#virtualisationFields').toggleClass('d-none');
            }
        );

       
        function openClose(e) 
        {
            console.log(e);
            $(e).toggleClass('bi-chevron-down bi-chevron-right');
            client_main = '.client_main'+$(e).data('no');
            $('#customer_client').find(client_main).toggleClass('d-none');
        }

        $('.bi-plus').on
        (
            'click',
            function() 
            {
                var total = $(this).data('total')+1;
                $('#customer_client').find('.client_total_text').text('Anzahl der Mandanten: '+total);
                var client_body = $($('#client_body1')[0].outerHTML);
                console.log(client_body);
                $(client_body).attr('id', 'client_body'+total);
                $(client_body).find('.client_main1').removeClass('client_main1').addClass('client_main'+total);
                
                $(client_body).find('.client_header_text').text('Mandant '+total);
                $(client_body).find('.client_delete').removeClass('d-none');
                $(client_body).find('.client_no').attr('data-no', total);
                $(this).data('total', total);
                

                changeIdNames(client_body,total);

                $('#customer_client').append(client_body);
                $(this).data('total', total);
                console.log(client_body);
            }
        )

        function deleteClient(element)
        {
            
            var client_body =$(element).closest('.body-group');
            $('#customer_client').find(client_body).remove();


            var total = $('#customer_client').find($('.client_total')).data('total');
            if(total != 1)
            {
                total = total-1;
                $('#customer_client').find('.client_total_text').text('Anzahl der Mandanten: '+total);
                $('#customer_client').find('.client_total').data('total', total);
                updateIdNo()
            }
        }

        function updateIdNo() 
        {
            $('.body-group').each
            (
                function(index)
                {
                    var currentNo = $(this).find('.client_no').data('no');
                    var newIndex = index + 1;

                    if(currentNo != newIndex)
                    {
                        $(this).attr('id', 'client_body'+newIndex);
                        var client_main = $(this).children().eq(1);
                        client_main = client_main.attr('class').split(' ').find(c => c.startsWith('client_main'));

                        $(this).find('.client_no').attr('data-no',newIndex);
                        $(this).find('.client_no').data('no',newIndex);
                        $(this).find('.client_header_text').text('Mandant '+newIndex);
                        $(this).find('.'+client_main).removeClass(client_main,'d-none').addClass('client_main'+newIndex, 'd-none');
                        changeIdNames($(this),newIndex);
                    }
                }
            )

        }

        function changeIdNames(client_body,total)
        {
            $(client_body).find('[id]').each
            (
                function() 
                {
                    
                    var oldId = $(this).attr('id');
                    var newId = oldId.replace(/^(.*?)(\d*)(Feedback)?$/,'$1'+total+'$3');

                    $(this).attr('id', newId);
                }
            );

            $(client_body).find('[for]').each
            (
                function()
                {
                    var oldFor = $(this).attr('for');
                    var newFor = oldFor.replace(/^(.*?)(\d*)?$/,'$1'+total);
                    $(this).attr('for', newFor);
                }
            );
        }
            
        



        
    

        // Eingaben werden vor bevor Sie eingefügt werden in die Felder überprüft.
        // Nicht eingefügt Buchstaben oder Wörter werden als negativ Feedback angezeigt.
        function validateInputSqlInj(key,event,queue)
        {
            const regex = /[<>"'-()*#=\+?]/;
            inputId = '#'+event.target.id;
            inputForm = event.target.form;
            var feedback = inputId+'Feedback';
            console.log(regex.test(key));

            if(regex.test(key)) // Ungültige Eingabe... // für email eine eigene regexEmail!!!
            {
                event.preventDefault(); // Eingabe aus dem Ereignis wird nicht eingefügt
                $(inputForm).find(feedback).text('Unzulässige Eingabe. '+key +' wurde nicht eingefügt.').show();
                $(inputForm).find(feedback).removeClass('d-none');

                if($(inputForm).find(inputId).val().length === 0)
                {
                    $(inputForm).find(inputId).removeClass('is-valid');
                }
                
                openQueue = true;

                if($(inputForm).find(inputId).data('file') === 'file')
                {
                    $(inputForm).find(inputId).val('');
                    $(inputForm).find(inputId).removeClass('is-valid');
                }
            }
            else // Gültitge Eingabe...
            {
                $(inputForm).find(feedback).addClass('d-none');

                // Stamm das Key aus der Warteschlange (queue) dann müssen diese eingefügt werden
                if(queue && key !== '')
                {
                    if(!($(inputForm).find(inputId).data('file') === 'file'))
                    {
                        $(inputForm).find(inputId).val(key);
                        $(inputForm).find(inputId).addClass('is-valid');
                    }
                    
                    
                }

                // Zusätzliche Überprüfungen des Keys in einer eigenen Funktion erforderlich !!! MACHEN !!!

                let load = true;
                console.log('Event-Input geöffnet!: '+load); // Verhalten Browser bedingt.
                // Ereignis wird nicht ausgelöst, wenn die Daten aus der Warteschlange kommen.
                if (inputForm.length) 
                {
                    console.log('existiert');
                }

                if(inputForm.checkValidity())
                {
                    $('#absenden').prop('disabled', false);
                }
                else
                {
                    $('#absenden').prop('disabled', true);
                } 

                $(inputId).on
                (
                    'input change', 
                    function()
                    {
                        console.log('anderer load-zustand: '+load);
                        if($(inputForm).find(inputId).val() !== '' )
                        {
                            if(load)
                            {
                                console.log('Input geprüft')
                                openQueue = false;  
                                load = false;
                                $(inputForm).find(inputId).addClass('is-valid');
   
                            }
                            else
                            {
                                console.log('Input wieder geladen   ');
                                // wenn während des Ereignisses, gespeicherte Formular-
                                // daten geladen werden wird, der Input-Event-Händler erneut aufgerufen
                                // damit die Daten in der Warteschlange landen, wird die Schlange
                                // geöffnet, so dass Event-Change  (s.U) geprüft werden kann.
                                openQueue = true;
                                load = true;
                                $(inputForm).find(inputId).addClass('is-valid');

                            }
                        }
                        else
                        {
                            $(inputForm).find(inputId).removeClass('is-valid');
                            $(inputForm).find(feedback).addClass('d-none');
                        }
                        // Feedback wird nicht mehr angezeigt, da entweder ein gültige Eingabe erfolgt ist
                        // oder das Feld wurde gelöscht

                        if (inputForm.length) 
                        {
                            console.log('existiert');
                        }
    
                        if(inputForm.checkValidity())
                        {
                            $('#absenden').prop('disabled', false);
                        }
                        else
                        {
                            $('#absenden').prop('disabled', true);
                        }

                          
                    }
                )
               
            }
        }

        // Die Felddaten Daten der gespeicherten Formulardaten, werden in eine Ereignis-Warteschlange
        // eingefügt. Die Warteschlange wird nach der ausführung aller Anweisungen des Javascripts ausgeführt.
        // Alle Eingabefelder die mit den Formulardaten gefüllt wurden, werden nach der Reihe gelöscht und der gelöschte
        // Inhalt zur Überprüfung weitergeleitet.
        // Dies kann nicht zur Laufzeit überprüft werden, weil der Browser ein anderes Skript verwendet, und die Eingaben
        // nicht lesbar sind (input = undefined  s.O). Nach dem die Eingaben gerendert worden sind, können die 
        // Felder gelesen und überprüft werden. Der letzte Parameter besagt, dass es sich um Daten aus der Warteschlange handelt.
        function mySetTimeout(inputForm,inputId,event)
        {
            setTimeout
            (
                function() 
                {
                    input = $(inputForm).find(inputId).val();
                    // Feldtext wird gespeichert.

                    if(!($(inputForm).find(inputId).data('file') === 'file'))
                    {
                        
                        $(inputForm).find(inputId).val(''); 
                    }
                    validateInputSqlInj(input,event,true); // Text wird zur Überprüfung weitergeleitet
                },
                0
            )
        } 

        $('input').on
        (
            // 
            'keypress paste change input', // Wenn in einem Eingabefeld etwas eingetippt oder eingefügt wird...
            function(event)  // ...wird die folgende Funktion ausgeführt
            {   
                console.log(event);
                inputId = '#'+ event.target.id; // die Id des Eingabefeldes wir ermittelt
                inputForm = event.target.form; // die Form des Eingabefeldes wir ermittelt
                inputEvent = event; // Das Ereignis wird zur Übergabe gespeichert

                if(event.type == 'paste') // Es wird überprüft, ob es sich beim Ereignis um eine Einfügung handelt.
                {
                   var input = event.originalEvent.clipboardData.getData('text'); // die Einfügung (input) wird ermittelt
                   validateInputSqlInj(input,event,false); 
                }
                else
                {
                    
                    var input = event.key; // der getippte Buchstabe (input) wird ermittelt
                }
                // Ist der Input nicht definiert, wurde eine gepeicherte Information aus dem Browserinformationen eingefügt
                // da die Felder über das Keydown-Ereignis sich angereiht haben, wurden Sie als validiert marikiert,
                // und somit wurde die Warteschlange geschlossen, mit dem Change-Ereignis wird das Feld nicht erneut angereiht.
                if((input==undefined) && openQueue)	  
                {
                    
                    // Diese Eingabefeld-Informationen werden in eine Ereignis-Warteschlange hinzugefügt
                    // Die mySetTimeout verarbeitet die Felder (nach der Reihenfolge der Übergabe), 
                    // wenn alle nachfolgenden Anweisungen ausgeführt wurden sind, also wenn die Seite komplett gerendert wurde.
                    mySetTimeout(inputForm,inputId,inputEvent); 
                }
                else if(event.type == 'change')
                {
                    console.log('es tat sich was');
                    console.log(event.type)
                    openQueue = true;  // Warteschlange wird freigegeben.  
                }
                // Es werden zunächst nur Zahlen, Buchstaben, und Sonderzeichen akzeptiert,
                // sonst würde bei jedem Keydown die Warteschlange geschlossen werden, und 
                // beim einfügen von gespeicherten Formulardaten, würde das entspechende Feld
                // nicht in die Warteschlange eingefügt werden, also nicht überprüft.
                else if(regex2.test(input) )
                {
                    // der Input wird zur Überprüfung weitergegeben
                    // der letzte Parameter gibt an, dass der Input nicht aus der Warteschlange stammt
                    validateInputSqlInj(input,event,false); 
                }

                
            }

        );

        window.openClose = openClose;
        window.deleteClient = deleteClient;
    }
);