<?php

/*
* @file        customerInfo_form.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/

    $contact_information=
    [
        'table_name' => 'Firma',
        'contact_information_company_name' => 'Firmenname',	
        'contact_information_phone'	=> 'Telefon',
        'contact_information_email' => 'Email',	
    ];

    $contact_informationen_adress=
    [
        'table_name' => '',
        'contact_informationen_adress_street' => '',
        'contact_informationen_adress_house_number' => '',	
        'contact_informationen_adress_postcode'	=> '',
        'contact_informationen_adress_city' => '',
    ];

    $contact_information_contact_person=
    [
        'contact_information_contact_person_gender' => '',
        'contact_information_contact_person_name'	=> '',
        'contact_information_contact_person_surname' =>'',
    ];
   
   
    function contactInfo_form()
    {

?>
   
    <div class="bg-primary-subtle shadow-lg rounded-5  border border-primary-subtle border-5 p-4 w-50" >
        <form id="form-tab1" name="customerInfo" method="post" action="" class="d-flex flex-column  needs-validation gap-3"  novalidate>
                <h3 class="text-center p-3">Kontaktdaten</h3>

                    <fieldset class="d-flex  flex-column gap-1 shadow rounded-5 p-2 ">  
                        <legend class="text p-2">Firma</legend>

                        <div class="form-floating flex-fill">
                            <input type="text"  class="form-control rounded-5" id="CompanyName" name="CompanyName" placeholder="Firmenname" required>
                            <label for="CompanyName" class="form-label">Firmenname</label>
                            <!-- Validation Error -->
                            <div id="CompanyNameFeedback" class="text invalid-feedback "></div>
                        </div>
                        
                        <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1">
                            <div class="form-floating flex-fill">
                                <input type="text"  class="form-control rounded-5" id="Phone" name="Phone" placeholder="Telefon" requierd>
                                <label for="Phone" class="form-label">Telefon</label>
                                <div id="PhoneFeedback" class="text invalid-feedback"></div>
                            </div>
            
                            <div class="form-floating flex-fill">
                                <input type="Email"  class="form-control rounded-5" id="Email" placeholder="Email" requierd>
                                <label for="Email" class="form-label">Email</label>
                                <div id="EmailFeedback" class="text invalid-feedback"></div>
                            </div>
                        </div>  
                    </fieldset>
                <!-- fieldset-Gruppierung Bentuzerfreundlicher (z.B Bildschirmlesegerät) -->

                <fieldset class="d-flex flex-column gap-1 p-2 shadow rounded-5 ">
                    <legend class="text p-2">Anschrift</legend>

                    <!-- form-inline  =^  5.3  d-flex -->
                    <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1"> 
                        <div class="form-floating flex-fill col-lg-9">
                            <input type="text"  class="form-control rounded-5" id="Street" name="Street" placeholder="Straße" required>
                            <label for="Street" class="form-label">Straße</label>
                            <div id="StreetFeedback" class="text invalid-feedback"></div>
                        </div>
                            
                        <div class="form-floating flex-fill col-lg-3">
                            <input type="text" class="form-control rounded-5" id="House_Number" name="House_Number" placeholder="Nr." required>
                            <label for="House_Number" class="form-label">Nr.</label>
                            <div id="House_NumberFeedback" class="text invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1">
                        <!-- 3 von 12 -->
                        <div class="form-floating flex-fill col-lg-3">  
                            <input type="text" class="form-control rounded-5" id="Postcode" name="Postcode" placeholder="PLZ" required>
                            <label for="Postcode" class="form-label">PLZ</label>
                            <div id="PostcodeFeedback" class="text invalid-feedback"></div>
                        </div>
    
                        <!-- füllt die restlichen 9, bei mehreren wird gelich verteilt -->
                        <div class="form-floating flex-fill col-lg-9"> 
                            <input type="text" class="form-control rounded-5" id="City" name="City" placeholder="Ort" required>
                            <label for="City">Ort</label>
                            <div id="CityFeedback" class="text invalid-feedback"></div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="d-flex flex-column gap-1 p-2 shadow rounded-5 ">
                    <legend class="text p-2">Ansprechpartner</legend> 

                    <div class="form-floating flex-fill col-lg-5 ">
                        <select class="form-select rounded-5 " name="Gender" id="Gender" aria-label="Anrede" >
                            <option value="">Bitte auswählen</option>
                            <option value="Herr">Herr</option>
                            <option value="Frau">Frau</option>
                        </select>
                        <label for="Gender" class="form-label">Anrede</label>
                    </div>
                
                    <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1">
                        <div class="form-floating flex-fill "  >
                            <input type="text"  class="form-control rounded-5" id="PersonName" name="PersonName"  placeholder="Vorname" required>
                            <label for="PersonName" class="form-label">Vorname</label>
                            <div id="PersonNameFeedback" class="text invalid-feedback"></div>
                        </div>
                    
                        <div class="form-floating flex-fill">
                            <input type="text "  class="form-control rounded-5" id="Surname" name="Surname" placeholder="Nachname" required >
                            <label for="Surname" class="form-label">Nachname</label>
                            <div id="SurnameFeedback" class="text invalid-feedback"></div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
<?php
    }
