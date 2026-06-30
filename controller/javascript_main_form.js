

/**
* @author      Ümit Yildirim <hopes61@icloud.com>
* @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
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

                    // Es werden nur angeklickte Checkboxen gespeichert, daher wird hier eine Behandlung vorgenommen
                   
                    const checkbox = $(`input[type="checkbox"][name="${field.name}"]`);
                    if (checkbox.length) 
                    {
                        acc[field.name] = checkbox.prop('checked') ? "on" : "off";
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
        $('#ltn').data('formId', formId);

        if(!($(form_ids[currentStepIndex]).find('.loadData').hasClass('d-none')))
        {
            $('#ltn').removeClass('d-none');
        }
        else
        {
            $('#ltn').addClass('d-none');
        }

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
            //
            method: 'POST',
            contentType: 'application/json',
            data:  JSON.stringify({ json_form_data: formData, page: $(formId).attr('name')}),
            success: function (response) 
            {
                $(formId).find('.loadData').addClass('d-none');
                $('.buttons').find('#ltn').addClass('d-none');
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
                form_ids,  
                // alle Seiten(Formular) werden durchlaufen
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

    

    window.step_back = step_back;
    window.step_forward = step_forward;
    window.save_FromPage_to_Db = save_FromPage_to_Db;
    
    
    
});
 

