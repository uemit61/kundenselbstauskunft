    <?php

$client=
[
    'field_name' => 'Mandanteninformation',
    ['client_name[]' => ['form-floating flex-fill',['text'],'Mandantenname'],
    'client_company_name[]' =>  ['form-floating flex-fill',['text'],'Firmenname']],
    ['client_phone_number[]' => ['form-floating flex-fill',['number'],'Telefon'],
    'client_email[]' =>  ['form-floating flex-fill',['email'],'Email']]
];

$client_main_address=
[
    'field_name' => 'Hauptanschrift',
    ['client_main_address_street[]' => ['form-floating flex-fill col-lg-9',['text'],'Straße'],
    'client_main_address_house_Number[]'=>['form-floating flex-fill col-lg-3',['number'],'Nr.']],
    ['client_main_address_postcode[]' =>['form-floating flex-fill col-lg-3',['text'],'PLZ'],
    'client_main_address_city[]' =>['form-floating flex-fill col-lg-9',['text'],'Ort']]
];

$client_second_address=
[
    'field_name' => 'Zweitanschrift',
    ['client_second_address_street[]' => ['form-floating flex-fill col-lg-9',['text'],'Straße'],
    'client_second_address_house_Number[]'=>['form-floating flex-fill col-lg-3',['number'],'Nr.']],
    ['client_second_address_postcode[]' =>['form-floating flex-fill col-lg-3',['text'],'PLZ'] ,
    'client_second_address_city[]' =>['form-floating flex-fill col-lg-9',['text'],'Ort'] ]
];

$client_director=
[
    'field_name' => 'Geschäftsführer',
    ['client_director_gender[]' =>['form-floating flex-fill col-lg-3',['select',['Bitte Auswählen','Frau','Herr']],'Anrede']],
    ['client_director_name[]' => ['form-floating flex-fill',['text'],'Vorname'], 
    'client_director_surname[]'=> ['form-floating flex-fill',['text'],'Nachname']]
];

$client_bank_details=
[
    'field_name' => 'Bankverbindung',
    ['client_bank_details_bankname[]'=>['form-floating flex-fill',['text'],'Bankname']], 	
    ['client_bank_details_iban[]'=> 	['form-floating flex-fill',['text'],'IBAN']],
    ['client_bank_details_bic[]' => 	['form-floating flex-fill',['text'],'BIC']],
];

$client_legal_information=
[
    'field_name' => 'Rechtliche Informationen',
    ['client_legal_information_ust_idnr[]' => ['form-floating flex-fill',['text'],'USt-IdNr']],
    ['client_legal_information_hr_number[]' => ['form-floating flex-fill',['text'],'Handelsregistern']],
    ['client_legal_information_juristication[]' => ['form-floating flex-fill',['text'],'USt-IdNr']]
];

$customer_client=
[
    [$client],
    [$client_main_address,$client_second_address],
    [$client_bank_details],
    [$client_legal_information]
];


        function mandanten_form()
        {
    ?>
        
       
    <?php
        }