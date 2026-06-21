<<<<<<< HEAD
<<<<<<< HEAD
<?php

/*
* @file        customerInfo_form.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/

    function customer_contact_information()
    {

        $website_configuration=
        [
            'Logo' =>'website_configuration_logo',
            'Admin' => 'website_configuration_admin_name',
            'Admin-Passwort' =>	'website_configuration_admin_password',
            'Internet-Adresse' => 'website_configuration_internet_addres' 	
        ];

        //Fieldsets [id : [form and responsive_size,[type],gui_name]]  if type select -> ['select' :[optionen_namen]]

        $contact_information=
        [
            'field_name' => 'Firma',
            'dBName' => 'customer_contact_information',
            ['contact_information_company_name' => ['form-floating flex-fill',['text'],'Firmenname']],	
            ['contact_information_phone'	=>['form-floating flex-fill',['number'],'Telefon'],'contact_information_email' => ['form-floating flex-fill',['email'],'Email']],	
            
        ];

        $contact_information_addres=
        [
            'field_name' => 'Anschrift',
            'dBName' => 'contact_information_addres',
            ['contact_information_addres_street' => ['form-floating col-lg-9 flex-fill',['text'],'Straße'],'contact_information_addres_house_number' => ['form-floating col-lg-3 flex-fill',['text'],'Nr.']],	
            ['contact_information_addres_postcode'	=>['form-floating col-lg-3 flex-fill',['number'],'PLZ'],'contact_information_addres_city' => ['form-floating col-lg-9 flex-fill',['text'],'Ort']],
            
        ];

        $contact_information_contact_person=
        [
            'field_name' => 'Ansprechpartner',
            'dBName' => 'contact_information_contact_person',
            ['contact_information_contact_person_gender' => ['form-floating col-lg-3',['select', ['Bitte Auswählen','Frau','Herr']],'Anrede']],
            ['contact_information_contact_person_name'	=> ['form-floating flex-fill',['text'],'Vorname'],'contact_information_contact_person_surname' =>['form-floating flex-fill',['text'],'Nachname']],
            
        ];

        $customer_contact_information=
        [
            [$contact_information],
            [$contact_information_addres],
            [$contact_information_contact_person]
        ];



        return ['form_label'=>'Kontaktdaten','form_id' =>'customer_contact_information','form_body'=>$customer_contact_information];
    }
=======
<?php

/*
* @file        customerInfo_form.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/

   

   
   
    function customer_contact_information()
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
            'dBName' => 'customer_contact_information',
            ['contact_information_company_name' => ['form-floating flex-fill',['text'],'Firmenname']],	
            ['contact_information_phone'	=>['form-floating flex-fill',['number'],'Telefon'],'contact_information_email' => ['form-floating flex-fill',['email'],'Email']],	
            
        ];

        $contact_information_address=
        [
            'field_name' => 'Anschrift',
            'dBName' => 'contact_information_address',
            ['contact_information_address_street' => ['form-floating col-lg-9 flex-fill',['text'],'Straße'],'contact_information_address_house_number' => ['form-floating col-lg-3 flex-fill',['text'],'Nr.']],	
            ['contact_information_address_postcode'	=>['form-floating col-lg-3 flex-fill',['number'],'PLZ'],'contact_information_address_city' => ['form-floating col-lg-9 flex-fill',['text'],'Ort']],
            
        ];

        $contact_information_contact_person=
        [
            'field_name' => 'Ansprechpartner',
            'dBName' => 'contact_information_contact_person',
            ['contact_information_contact_person_gender' => ['form-floating col-lg-3',['select', ['Bitte Auswählen','Frau','Herr']],'Anrede']],
            ['contact_information_contact_person_name'	=> ['form-floating flex-fill',['text'],'Vorname'],'contact_information_contact_person_surname' =>['form-floating flex-fill',['text'],'Nachname']],
            
        ];

        $customer_contact_information=
        [
            [$contact_information],
            [$contact_information_address],
            [$contact_information_contact_person]
        ];



        return ['form_label'=>'Kontaktdaten','form_id' =>'customer_contact_information','form_body'=>$customer_contact_information];
    }
>>>>>>> f708831 (beginn to save clinet)
=======
<?php

/*
* @file        customerInfo_form.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/

   

   
   
    function customer_contact_information()
    {

        $website_configuration=
        [
            'Logo' =>'website_configuration_logo',
            'Admin' => 'website_configuration_admin_name',
            'Admin-Passwort' =>	'website_configuration_admin_password',
            'Internet-Adresse' => 'website_configuration_internet_addres' 	
        ];

        //Fieldsets [id : [form and responsive_size,[type],gui_name]]  if type select -> ['select' :[optionen_namen]]

        $contact_information=
        [
            'field_name' => 'Firma',
            'dBName' => 'customer_contact_information',
            ['contact_information_company_name' => ['form-floating flex-fill',['text'],'Firmenname']],	
            ['contact_information_phone'	=>['form-floating flex-fill',['number'],'Telefon'],'contact_information_email' => ['form-floating flex-fill',['email'],'Email']],	
            
        ];

        $contact_information_addres=
        [
            'field_name' => 'Anschrift',
            'dBName' => 'contact_information_addres',
            ['contact_information_addres_street' => ['form-floating col-lg-9 flex-fill',['text'],'Straße'],'contact_information_addres_house_number' => ['form-floating col-lg-3 flex-fill',['text'],'Nr.']],	
            ['contact_information_addres_postcode'	=>['form-floating col-lg-3 flex-fill',['number'],'PLZ'],'contact_information_addres_city' => ['form-floating col-lg-9 flex-fill',['text'],'Ort']],
            
        ];

        $contact_information_contact_person=
        [
            'field_name' => 'Ansprechpartner',
            'dBName' => 'contact_information_contact_person',
            ['contact_information_contact_person_gender' => ['form-floating col-lg-3',['select', ['Bitte Auswählen','Frau','Herr']],'Anrede']],
            ['contact_information_contact_person_name'	=> ['form-floating flex-fill',['text'],'Vorname'],'contact_information_contact_person_surname' =>['form-floating flex-fill',['text'],'Nachname']],
            
        ];

        $customer_contact_information=
        [
            [$contact_information],
            [$contact_information_addres],
            [$contact_information_contact_person]
        ];



        return ['form_label'=>'Kontaktdaten','form_id' =>'customer_contact_information','form_body'=>$customer_contact_information];
    }
>>>>>>> a97ff25 (client saveing, delting, insert and change all ok)
