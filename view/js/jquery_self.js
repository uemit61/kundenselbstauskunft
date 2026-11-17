
/**
* @author      Ümit Yildirim <uemit611@outlook.de>
* @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
*/



$(document).ready
(
    
    function()
    {
        $('#ltn').data('formId', '#form_customer_contact_information');
        var login_failed = $('#login_failed').data('login-failed');

        $('input[type="checkbox"], select').on('change', function() 
        {
            $(this).closest('form').find('.loadData').removeClass('d-none');
            $('#ltn').removeClass('d-none');
        });

        if (login_failed == '1')
        {
            $('#passwordFeedback').text('Falsches Passwort').show();
        };

        var inputId;
        var inputForm;
        var inputEvent;
        var openQueue =false;
        var  client_main;
        const regex2 = /^.{1}$/;

        $('[data-bs-toggle="tooltip"]').tooltip(); // Tooltips

        $('#host_configuration_virtualization_').on
        (
            'click', 
            function() 
            {
                $('#virtualisationFields').toggleClass('d-none');
            }
        );

        function openClose(e) 
        {
            $(e).toggleClass('bi-chevron-down bi-chevron-right');
            client_main = '.client_main'+$(e).data('no');
            $('#form_customer_client').find(client_main).toggleClass('d-none');
        }

        function isChecked(value)
        {
            return value === 'on';
        }

        if($('#main').length)
        {
            insertCache();
        }


        function insertCache()
        {
            $.ajax
            (
            {
                url : '.',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({'page':'load_json_cache'}),
                dataType: 'json',
                success: function(data)
                {

                        Object.keys(data).forEach
                        (
                            function(formId)   
                            {
                                if(data[formId]['loadInfo'] === 'yes')
                                {
                                    $(formId).find('.loadData').removeClass('d-none');
                                }   

                                insertDataToForm(data[formId],formId);
                            }
                        );

                        if(!($('#form_customer_contact_information').find('.loadData').hasClass('d-none')))
                        {
                            $('#ltn').removeClass('d-none');
                        }

                },
                error: function(xhr,status,error)
                {
                    console.error('Fehler beim Laden des Zwischenspeichers:', status, error);
                }
            }
        );
    }
   
    function load_data_from_db(load=null)
    {
        let formId = $('#ltn').data('formId');
        
        $.ajax
        (
            {
                url: 'indexUtils.php',
                method: 'POST',
                contentType: 'application/json',
                data:  JSON.stringify({page:'load' , load: $(formId).attr('name')}),

                success: function (data)
                {
                    const j = $('#form_customer_client').find('.client_total').data('total');

                    for (let i= j; i >1 ; i--)
                    {
                        deleteClient($(`#form_customer_client #client_body${i} #delteBtn${i}`));
                    }

                    insertDataToForm(data,formId);

                    $(formId).find('.loadData').addClass('d-none');
                    $('.buttons').find('#ltn').addClass('d-none');

            
                    
                   
                
                   
                },
                error: function (error)
                {
                    
                },
                complete: function ()
                {

                },
            }
        )
        

    }

    function addClient(element) 
    {
        var total = $(element).data('total')+1;
        $('#form_customer_client').find('.client_total_text').text('Anzahl der Mandanten: '+total);
        var client_body = $($('#client_body1')[0].outerHTML);
        $(client_body).attr('id', 'client_body'+total);
        $(client_body).find('.client_main1').removeClass('client_main1').addClass('client_main'+total);
        
        $(client_body).find('.client_header_text').text('Mandant '+total);
        $(client_body).find('.client_delete').removeClass('d-none');
        $(client_body).find('.client_no').attr('data-no', total);
        $(element).data('total', total);
        
        changeIdNames(client_body,total);

        $('#form_customer_client').append(client_body);
        $(element).data('total', total);

        if(total>2)
        {
            $('#form_customer_client').find('.clientPlus').eq(1).remove();
        }

        $('.clientPlus').clone().appendTo('#form_customer_client');
        $('#form_customer_client').find('.clientPlus').eq(1).find('.client_total').data('total',total);
        $('#form_customer_client').find('.clientPlus').find('.client_total').data('total',total);

        $(inputForm).closest('form').find('.loadData').removeClass('d-none');
        $('#ltn').removeClass('d-none');
        
    }

    function insertDataToForm(formData,formId)
    {
        Object.keys(formData).forEach
        (
            function(inputId)
            {
                const match = inputId.match(/\d+$/);
                const numberClient = match ? parseInt(match[0]) : 1;

                if(numberClient >1 && inputId.includes('customer_client'))
                {
                    let $icon = $('#form_customer_client').find('.client_total');
                    addClient($icon);
                }

                //Fieldset
                const $input = $(`${formId} #${inputId}`);
                const value = formData[inputId];

                Object.keys(value).forEach
                (
                    function(input_form)
                    {
                        let lastChar = inputId.at(-1);

                        if(isNaN(lastChar))
                        {
                            lastChar = '';
                        }

                        const $inputForm = $(`${formId} #${inputId} #${input_form+lastChar}`);

                        if ($inputForm.is('input[type="checkbox"]'))
                        {
                            $inputForm.prop('checked', isChecked(value[input_form]));
                        }
                        else if($input.prop('tagName') ==='SELECT')
                        {
                            $inputForm.val(value[input_form]).change();
                        }
                        else
                        {
                            $inputForm.val(value[input_form]);
                        }
                    }
                )
            }
        )
    }
    

        function deleteClient(element)
        {
            var client_body =$(element).closest('.body-group');
            $('#form_customer_client').find(client_body).remove();

            var total = $('#form_customer_client').find($('.client_total')).data('total');
            if(total != 1)
            {
                total = total-1;
                $('#form_customer_client').find('.client_total_text').text('Anzahl der Mandanten: '+total);
                $('#form_customer_client').find('.client_total').data('total', total);
                updateIdNo();
            }
            
            if(total ===1 )
            {
                $('#form_customer_client').find('.clientPlus').eq(1).remove();
            }
            $(inputForm).closest('form').find('.loadData').removeClass('d-none');
            $('#ltn').removeClass('d-none');
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
        

        $(document).on('input paste change keypress', 'input',
             // Wenn in einem Eingabefeld etwas eingetippt oder eingefügt wird...
            function(event)  // ...wird die folgende Funktion ausgeführt
            {   
                inputId = '#'+ event.target.id; // die Id des Eingabefeldes wir ermittelt

                inputForm = event.target.form; // die Form des Eingabefeldes wir ermittelt
                inputEvent = event; // Das Ereignis wird zur Übergabe gespeichert

                let delInput = event.originalEvent.inputType;

             
                if(delInput  ==="deleteContentBackward" || delInput  ==="deleteByCut")
                {
                    $(inputForm).closest('form').find('.loadData').removeClass('d-none');
                    $('#ltn').removeClass('d-none');
                }


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

        function validateInputSqlInj(key,event,queue)
        {
            const regex = /[<>"'-()*#=\+?]/;
            inputId = '#'+event.target.id;
            inputForm = event.target.form;
            var feedback = inputId+'Feedback';

            if(regex.test(key)) // Ungültige Eingabe... // für email eine eigene regexEmail!!!
            {
                event.preventDefault(); // Eingabe aus dem Ereignis wird nicht eingefügt
                $(inputForm).find(feedback).text('Unzulässige Eingabe. '+key +' wurde nicht eingefügt.').show();
                $(inputForm).find(feedback).removeClass('d-none').addClass('invalid-feedback');

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
                $(inputForm).closest('form').find('.loadData').removeClass('d-none');
                $('#ltn').removeClass('d-none');
                // Stamm das Key aus der Warteschlange (queue) dann müssen diese eingefügt werden
                if(queue && key !== '')
                {
                    if(!($(inputForm).find(inputId).data('file') === 'file'))
                    {
                        $(inputForm).find(inputId).val(key);
                        password_input_validation(); 
                    }
                }

                // Zusätzliche Überprüfungen des Keys in einer eigenen Funktion erforderlich !!! MACHEN !!!

                let load = true;
                // Ereignis wird nicht ausgelöst, wenn die Daten aus der Warteschlange kommen.
                 $(document).on
                (
                    'input change','input', 
                    function()
                    {
                        if($(inputForm).find(inputId).val() !== '' )
                        {
                            if(load)
                            {
                                openQueue = false;
                                load = false;
                                password_input_validation();
                            }
                            else
                            {
                                // wenn während des Ereignisses, gespeicherte Formular-
                                // daten geladen werden wird, der Input-Event-Händler erneut aufgerufen
                                // damit die Daten in der Warteschlange landen, wird die Schlange
                                // geöffnet, so dass Event-Change  (s.U) geprüft werden kann.
                                openQueue = true;
                                load = true;
                                password_input_validation();
                            }
                           
                        }
                        else
                        {
                            $(inputForm).find(inputId).removeClass('is-valid is-invalid');
                            $(inputForm).find(feedback).addClass('d-none');
                          
                        }
                        // Feedback wird nicht mehr angezeigt, da entweder ein gültige Eingabe erfolgt ist
                        // oder das Feld wurde gelöscht
                    }
                )
            }
        }

        
        function password_input_validation()
        {

            const password = $(inputForm).find('#password').val();
            const confirmPassword = $(inputForm).find('#confirm_password').val();

            let regex = /^(?=.*[A-Z])(?=.*[!$%^&*(),.?:{}|])[a-zA-Z0-9!$%^&*(),.?:{}|]+$/ 
            let regex2 = /[@#'<>"=]/;  // Nur Zeichen, die nicht @#'<>= enthalten

            
            if(password.length <8)
            {   
                if(password.length > 0)
                {
                    $('#password').removeClass('is-valid').addClass('is-invalid');
                    $('#passwordFeedback').text('Das Passwort muss mindestens 8 Zeichen lang sein.').show();
                    $('#passwordFeedback').removeClass('d-none valid-feedback').addClass('invalid-feedback');
                    $('#save_password').prop('disabled', true);
                    
                }
                else
                {
                    $('#password').removeClass('is-invalid');
                    $('#password').removeClass('is-valid');
                    $('#passwordFeedback').text('').show();
                    $('#save_password').prop('disabled', true);
                }
                
            }
            else if(regex2.test(password))
                {
                    $('#password').removeClass('is-valid').addClass('is-invalid');
                    $('#passwordFeedback').text('Das Passwort darf keines der folgenden Zeichen enthalten: @ # \' < > " =').show();
                    $('#passwordFeedback').removeClass('d-none');
                    $('#save_password').prop('disabled', true);
                }
            else if(!regex.test(password))
            {
                $('#password').removeClass('is-valid').addClass('is-invalid');
       
                $('#passwordFeedback').text('Das Passwort muss mindestens einen Großbuchstaben und ein Sonderzeichen enthalten').show();
                $('#passwordFeedback').removeClass('d-none');
                $('#save_password').prop('disabled', true);
            }
            else
            {
                $('#password').removeClass('is-invalid').addClass('is-valid');
              

                $('#passwordFeedback').text('Is correct!').show();
                $('#passwordFeedback').removeClass('d-none invalid-feedback').addClass('valid-feedback');

                if(password !== confirmPassword)
                {
                    if(confirmPassword.length>0)
                    {
                        $('#confirm_password').removeClass('is-valid').addClass('is-invalid');
                        $('#confirm_passwordFeedback').removeClass('valid-feedback').addClass('invalid-feedback');
                        $('#confirm_passwordFeedback').text("Die Passwörter stimmen nicht überein.").show();
                        $('#confirm_passwordFeedback').removeClass('d-none');
                        $('#save_password').prop('disabled', true);
                    }
                    else
                    {
                        $('#confirm_password').removeClass('is-valid',);
                        $('#confirm_password').removeClass('is-invalid');
                        $('#confirm_passwordFeedback').text("").show();
                    }
                    
                }
                else
                {
                    $('#confirm_password').removeClass('is-invalid').addClass('is-valid');
                    $('#confirm_passwordFeedback').text('Is correct').show();
                    $('#confirm_passwordFeedback').removeClass('d-none invalid-feedback').addClass('valid-feedback');
                    $('#save_password').prop('disabled', false);
                }
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
                    const input = $(inputForm).find(inputId).val();
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

        window.addClient = addClient;
        window.openClose = openClose;
        window.deleteClient = deleteClient;
        window.password_input_validation = password_input_validation;
        window.load_data_from_db = load_data_from_db;
    }
);