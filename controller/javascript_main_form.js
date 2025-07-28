

/**
* @file        javascript_main_Form.js
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/


$(document).ready(function()
{
    console.log('Login erfolgreich.');
    $('#form_customer_contact_information').removeClass('d-none');

    let currentStepIndex = 0;
    var form_ids = ['#form_customer_contact_information','#form_customer_host_configuration','#form_customer_client','#form_customer_erp_configuration','#form_customer_import'];
    let formId =  form_ids[currentStepIndex];
    let btnTxt = '';

    function sanitizeInput(formId)
    {
        var formData ={};
        
        $(formId).find('fieldset').each(function()
        {
            var fieldsetId= $(this).attr('id');

            var fieldsetData = $(this).serializeArray().reduce
            (
                function(acc, field) 
                {
                    if($(`input[name="${field.name}']`).is(':checkbox'))
                    {
                        acc[field.name] = $(`input[name="${field.name}"]`).prop('checked') ? DOMPurify.sanitize(field.value.trim()) : 'off';
                    }
                    else
                    {
                        acc[field.name] = DOMPurify.sanitize(field.value.trim()) ?? '';
                    }
                    
                    return acc;
                }     
                ,
                {}
            )
            formData[fieldsetId] = fieldsetData;
        })
        
        console.log(formData);
       
        return formData;

    };
    
    function updateSteps() 
    {    
        $(form_ids[currentStepIndex]).removeClass('d-none');
        formId =  form_ids[currentStepIndex];
        btnTxt =  $(form_ids[currentStepIndex]).data('label') + ' speichern';
        $('#btn').text(btnTxt);
    };



    // Navigation "Weiter"
    function step_forward() 
    {
        if (currentStepIndex < 4) 
        {
            $(form_ids[currentStepIndex]).addClass('d-none');
            if(currentStepIndex == 3)
            {
                $('#nextBtn').addClass('d-none');
                
            }
            
            if(currentStepIndex == 0)
            {
                $('#prevBtn').removeClass('d-none');
            }    
            currentStepIndex++;
            updateSteps();
        }
    };

    

    // Navigation "Zurück"
    function step_back() 
    {
        if (currentStepIndex > 0) 
        {
            $(form_ids[currentStepIndex]).addClass('d-none');
            if(currentStepIndex == 1)
            {
                $('#prevBtn').addClass('d-none');
            }
            if(currentStepIndex == 4)
            {
                $('#nextBtn').removeClass('d-none');
            }
            currentStepIndex--;
            updateSteps();
        }
    };

    function save_FromPage_to_Db() 
    {
        
        const formData =sanitizeInput(formId);
        
        $.ajax
        ({
            url: 'indexUtils.php',
            method: 'POST',
            contentType: 'application/json',
            data:  JSON.stringify({ json_form_data: formData, page: $(formId).attr('name')}),
            success: function (response) 
            {
                $(formId).find('.loadData').addClass('d-none');
                console.log
                (
                    response,
                    // "Daten erfolgreich gesendet:"+
                    // response.split('\n')[11]+ "\n"+
                    // response.split('\n')[12]+"\n"+
                    // response.split('\n')[13]+"\n"+
                    // response.split('\n')[14]+"\n"+
                    // response.split('\n')[15]+"\n"+
                    // response.split('\n')[16]+"\n"+
                    // response.split('\n')[17]+"\n",
                );
            },
            error: function (error) 
            {
                console.error('Fehler bei der Anfrage:');
            },
            complete: function () 
            {
                console.log('Daten wurden erfolgreich in die Datenbank geschrieben.');
            }
        });
        
    };

    function load_data_from_db()
    {
        $.ajax
        (
            {
                url: '/kundenselbstauskunft/temp/session/mySession',
                type: 'GET',
                contentType: 'application/json',
                dataType: 'json',
                success: function (data)
                {

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

    // Alle 3 Sekunden wird zwischengespeichert
    setInterval
    (
        function()
        {
            var form_data ={};
            var saveInfo ={};
            $.each
            (
                //enumeration
                form_ids,  // alle Seiten(Formular) werden durchlaufen
                function(i,form_id)
                {
                    form_data[form_id] =sanitizeInput(form_id);
                    if($(form_id).find('.loadData').hasClass('d-none'))
                    {
                        form_data[form_id]["loadInfo"]="no";
                    }
                    else
                    {
                       form_data[form_id]["loadInfo"]="yes";
                    }
                }
                
            );

            
            // console.log(form_data);

            $.ajax
            (
                { 
                    url : '.',
                    method: 'POST',
                    contentType: 'application/json',
                    data:  JSON.stringify({json_form_data: JSON.stringify(form_data), 'page':'save_json_cache'} ),
                    success: function (response) 
                    {
                        var line = response.split('\n');
                        console.log
                        (
                           response
                        );
                    },
                    error: function (xhr, status, error) 
                    {
                        console.error
                        (
                            'Fehler bei der Anfrage:', 
                            error
                        );
                    },
                    complete: function ()
                    {
                        console.log
                        (
                            "Die Daten wurden nur in ein  Cache gespeichert,\n"
                            +"  um in die Datenbank zu speichern,\n"
                            +"drücken Sie auf die Speicherbuttons.\n"
                            +"Nächste Speicherung in 3 sekunden"
                        );
                    }
                }
            );
        },
        
        3000
    );  

    // $.ajax // könnte auch über eien $_SESSION verwirklicht werden Kommentar nicht vergessen!
    // ({
    //     url: './view/main_form.php',
    //     method: 'GET',
    //     /* 
    //         Die `success`-Funktion im bereitgestellten Codeausschnitt verarbeitet die Antwort, die von einer
    //         AJAX-GET-Anfrage an '/main_form.php' empfangen wurde. Hier ist eine Aufschlüsselung dessen, was sie tut: 
    //     */
    //     success: function (response) 
    //     {

    //         if (!response || Object.keys(response).length === 0)    
    //         {
    //             return;
    //         }
        
    //         /* Wenn Daten vorhanden sind, das Formular füllen */
    //         Object.entries(response).forEach(([key, value]) => {
    //             const sanitizedValue = $('<div>').text(value).html();
    //             $($formId + `[name=${key}]`).val(sanitizedValue);
    //         });
    //     },
    //     error: function () 
    //     {
    //         alert('Fehler beim Laden der Benutzerdaten.');
    //     }
    // });

    window.step_back = step_back;
    window.step_forward = step_forward;
    window.save_FromPage_to_Db = save_FromPage_to_Db;
    
});
 

