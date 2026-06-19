<?php

/*
* @file        customerInfo_form.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/

   

   
   
    function contactInfo_form()
    {

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
            ['contact_information_contact_person_gender' => ['form-floating col-lg-3',['select', ['Bitte Auswählen','Frau','Herr']],'Anrede']],
            ['contact_information_contact_person_name'	=> ['form-floating flex-fill',['text'],'Vorname'],'contact_information_contact_person_surname' =>['form-floating flex-fill',['text'],'Nachname']],
        ];

        $customer_contact_informationen=
        [

            [$contact_information],
            [$contact_informationen_adress],
            [$contact_information_contact_person]
        ];



        return ['form_label'=>'Kontaktdaten','form_id' =>'customer_contact_informationen','form_body'=>$customer_contact_informationen];
    }
