<?php

/*
* @file        customerInfo_form.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/

   
$website_configuration=
[
    'Logo' =>'website_configuration_logo',
    'Admin' => 'website_configuration_admin_name',
    'Admin-Passwort' =>	'website_configuration_admin_password',
    'Internet-Adresse' => 'website_configuration_internet_address' 	
];

//Fieldsets [id : [form and responsive_size,[type],gui_name]]  if type select -> ['select' :[optionen_namen]]

$contact_information=
[
    'field_name' => 'Firma',
    ['contact_information_company_name' => ['form-floating flex-fill',['text'],'Firmenname']],	
    ['contact_information_phone'	=>['form-floating flex-fill',['number'],'Telefon'],'contact_information_email' => ['form-floating flex-fill',['email'],'Email']],	
];

$contact_informationen_adress=
[
    'field_name' => 'Anschrift',
    ['contact_informationen_adress_street' => ['form-floating col-lg-9 flex-fill',['text'],'Straße'],'contact_informationen_adress_house_number' => ['form-floating col-lg-3 flex-fill',['text'],'Nr.']],	
    ['contact_informationen_adress_postcode'	=>['form-floating col-lg-3 flex-fill',['number'],'PLZ'],'contact_informationen_adress_city' => ['form-floating col-lg-9 flex-fill',['text'],'Ort']],
];

$contact_information_contact_person=
[
    'field_name' => 'Ansprechpartner',
    ['contact_information_contact_person_gender' => ['form-floating col-lg-5 flex-fill',['select', ['Bitte Auswählen','Frau','Herr']],'Anrede']],
    ['contact_information_contact_person_name'	=> ['form-floating flex-fill',['text'],'Vorname'],'contact_information_contact_person_surname' =>['form-floating',['text'],'Nachname']],
];

$customer_contact_informationen=
[
    [$contact_information],
    [$contact_informationen_adress],
    [$contact_information_contact_person]
];
   
   
    function contactInfo_form($customer_contact_informationen)
    {

?>
   
   <div class="container bg-primary-subtle shadow-lg rounded-5  border border-primary-subtle border-5 p-4 w-75" >
            <form id="form-tab1" name="customerInfo" method="post" action="" class="d-flex flex-column  needs-validation gap-3"  novalidate>
                    <h3 class="text-center p-3">Kontaktdaten</h3>
    
                    <?php   foreach ($customer_contact_informationen as $field): ?>
                                <fieldset class="d-flex  flex-column gap-1 shadow rounded-5 p-2 ">  
                                    <div class="text p-2 fw-bold"><?=$field['field_name']?></div>
                                   
                                <?php   $subfield = array_slice($field,1,null,true);
                                        foreach($subfield as $group => $form): 
                                            
                                ?>
                                            <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1">
                                            <?php   foreach($form as $id => $val): ?>
                                                        <div class="<?=$val[0]." flex-fill" ?>">
                                                        <?php   if($val[1][0] != 'select'):?>
                                                        
                                                                    <input type=<?=$val[1][0]?>  class="form-control rounded-5" id=<?=$id ?> name=<?=$id ?> placeholder=<?=$val[2] ?> requierd>
                                                        
                                                        <?php   else: ?>
                                                                    <select class="form-select rounded-5 " name=<?=$id ?> id=<?=$id ?> aria-label=<?=$val[2] ?> >
                                                                        <option value=""><?=$val[1][1][0] ?></option>
                                                                        <?php   for($i=1; $i < count($val[1][1]); $i++):?>
                                                                                    <option value="<?=$val[1][1][$i] ?>"><?=$val[1][1][$i] ?></option>
                                                                        <?php   endfor;?>
                                                                    </select>
                                                        <?php
                                                                endif;
                                                        ?>
                                                            <label for="<?=$id ?>" class="form-label"><?=$val[2] ?></label>
                                                            <div id=<?=$id."Feedback" ?> class="text invalid-feedback"></div>
                                                        </div>
                                            <?php   endforeach;?>
                                            </div>
                                <?php   endforeach; ?>
                                </fieldset>
                    <?php   endforeach; ?>
            </form>
        </div>
<?php
    }
