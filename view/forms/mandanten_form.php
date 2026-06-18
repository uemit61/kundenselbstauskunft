<?php

    function mandanten_form()
    {
?>
    
     <div class="container bg-primary-subtle shadow-lg rounded-5  border border-primary-subtle border-5 p-4 w-25" >
        <form id="form-tab3" name="mandant" method="post" action="" class="d-flex flex-column  needs-validation gap-3" novalidate>
            <h3 class="text-center p-3">Mandanten</h3>

            <div class="d-flex text p-2" >
                <div class="client_total_text">Anzahl der Mandanten: 1</div>
                <i class="client_total bi bi-plus"  data-total="1"></i>
            </div>

            <div class="body-group rounded-5 border  border-info p-2" id="client_body1">
                <div class="client_header d-flex justify-content-between" >
                    <div class="client_add d-flex text p-2" >
                        <i class="client_no bi bi-chevron-down" onclick="openClose(this)"  name="client_no[]" data-no="1" ></i> 
                        <h5 class="client_header_text">Mandant 1</h5>
                    </div>

                    <div class="client_delete d-flex p-2 d-none" >
                        <h5 class="text-danger">Löschen <i class="bi bi-x-lg" onclick="deleteClient(this)"></i> </h5>
                    </div>
                </div>
              
                <div class="client_main1 d-none" >
                    <fieldset class="d-flex flex-column gap-1 p-2 rounded-5 shadow ">
                    <legend class="text p-2">Mandanteninformation</legend>

                    <div class="d-flex gap-1">
                        <div class="form-floating flex-fill">
                            <input type="text" class="form-control rounded-5" id="client_name"  name="client_name[]" placeholder="Mandantenname" require>
                            <label for="client_name" class="form-label">Mandantenname</label>
                            <div class="text invalid-feedback " id="client_nameFeedback"></div>
                        </div>

                        <div class="form-floating flex-fill">
                            <input type="text" class="form-control rounded-5" id="client_companyName" name="client_companyName[]" placeholder="Firmenname" require>
                            <label for="client_companyName" class="form-label">Firmenname</label>
                            <div class="text invalid-feedback" id="client_companyNameFeedback"></div>
                        </div>
                    </div>

                    <div class="d-flex gap-1">
                        <div class="form-floating flex-fill">
                            <input type="text"  class="form-control rounded-5" id="client_phone" name="client_phone[]" placeholder="Telefon" requierd>
                            <label for="client_phone">Telefon</label>
                            <div id="client_phoneFeedback" class="text invalid-feedback"></div>
                        </div>

                        <div class="form-floating flex-fill">
                            <input type="Email"  class="form-control rounded-5" id="client_email" name="client_email[]" placeholder="Email" requierd>
                            <label for="client_email">Email</label>
                            <div id="client_emailFeedback" class="text invalid-feedback"></div>
                        </div>
                    </div> 
                    </fieldset>
                
                

                    <fieldset class="d-flex flex-column p-2 shadow rounded-5">
                    <legend class="text p-2">Anschrift</legend>

                    <div class="d-flex gap-1 p-1">    
                        <fieldset class="d-flex flex-fill flex-column p-2 shadow rounded-5 gap-1">
                            <legend class="text p-2">Hauptanschrift</legend>

                            <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1"> 
                                <div class="form-floating flex-fill col-lg-9">
                                    <input type="text"  class="form-control rounded-5" id="streetMain" name="streetMain[]" placeholder="Straße" required>
                                    <label for="streetMain">Straße</label>
                                    <div id="streetMainFeedback" class="text invalid-feedback"></div>
                                </div>
                                    
                                <div class="form-floating flex-fill col-lg-3">
                                    <input type="text" class="form-control rounded-5" id="housenumberMain" name="housenumberMain[]" placeholder="Nr." required>
                                    <label for="housenumberMain">Nr.</label>
                                    <div id="housenumberMainFeedback" class="text invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1">
                                <div class="form-floating flex-fill col-lg-3">  
                                    <input type="text" class="form-control rounded-5" id="postcodeMain" name="housenumberMain[]" placeholder="PLZ" required>
                                    <label for="postcodeMain">PLZ</label>
                                    <div id="postcodeMainFeedback" class="text invalid-feedback"></div>
                                </div>

                                <div class="form-floating flex-fill col-lg-9"> 
                                    <input type="text" class="form-control rounded-5" id="cityMain" name="cityMain[]" placeholder="Ort" required>
                                    <label for="cityMain">Ort</label>
                                    <div id="cityMainFeedback" class="text invalid-feedback"></div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="d-flex flex-fill flex-column p-2 shadow rounded-5 gap-1">
                            <legend class="text p-2">Zweitanschrift</legend>

                            <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1"> 
                                <div class="form-floating flex-fill col-lg-9">
                                    <input type="text"  class="form-control rounded-5" id="streetSec" name="streetSec[]" placeholder="Straße" required>
                                    <label for="streetSec">Straße</label>
                                    <div id="streetSecFeedback" class="text invalid-feedback"></div>
                                </div>
                                    
                                <div class="form-floating flex-fill col-lg-3">
                                    <input type="text" class="form-control rounded-5" id="housenumberSec" name="housenumberSec[]" placeholder="Nr." required>
                                    <label for="housenumberSec">Nr.</label>
                                    <div id="housenumberSecFeedback" class="text invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1">
                                <div class="form-floating flex-fill col-lg-3">  
                                    <input type="text" class="form-control rounded-5" id="postcodeSec" name="postcodeSec[]" placeholder="PLZ" required>
                                    <label for="postcodeSec">PLZ</label>
                                    <div id="postcodeSecFeedback" class="text invalid-feedback"></div>
                                </div>

                                <div class="form-floating flex-fill col-lg-9"> 
                                    <input type="text" class="form-control rounded-5" id="citySec" name="citySec[]" placeholder="Ort" required>
                                    <label for="citySec">Ort</label>
                                    <div id="citySecFeedback" class="text invalid-feedback"></div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    </fieldset>

                    <fieldset class="p-2 shadow rounded-5 d-flex flex-column gap-1">
                    <legend class="text p-2">Geschäftsführer</legend> 
                    <div class="form-floating flex-fill col-lg-3 ">
                        <select class="form-select rounded-5 " id="director_gender" name="director_gender[]" aria-label="Anrede" >
                            <option value=""></option>
                            <option value="1">Herr</option>
                            <option value="2">Frau</option>
                        </select>
                        <label for="director_gender" class="form-label" >Anrede</label>
                    </div>
                
                    <div class="d-flex flex-column flex-lg-row  flex-sm-column gap-1">
                        <div class="form-floating flex-fill "  >
                            <input type="text"  class="form-control rounded-5" id="director_name" name="director_name[]"  placeholder="Vorname" required>
                            <label for="director_name" >Vorname</label>
                            <div id="director_nameFeedback" class="text invalid-feedback"></div>
                        </div>
                    
                        <div class="form-floating flex-fill">
                            <input type="text "  class="form-control rounded-5" id="director_surname" name="director_surname[]" placeholder="Nachname" required >
                            <label for="director_surname" >Nachname</label>
                            <div id="director_surnameFeedback" class="text invalid-feedback"></div>
                        </div>
                    </div>
                    </fieldset>

                    <fieldset class="d-flex flex-column p-2 shadow rounded-5">
                    <legend class="text p-2">Bankverbindungen</legend>

                    <div class="d-flex gap-1">
                        <fieldset class="d-flex flex-column flex-fill gap-1  rounded-5 p-2 shadow">
                            <legend class="text p-2">Bankverbindung 1</legend>

                            <div class="form-floating flex-fill">
                                <input class="form-control rounded-5" type="text" id="bank_name_1" name="bank_name_1[]" placeholder="Bankname" required>
                                <label for="bank_name_1" class="form-label" >Bankname</label>
                                <div class="text invalid-feedback" id="bank_name_1Feedback"></div>
                            </div>

                            <div class="form-floating flex-fill">
                                <input class="form-control rounded-5" type="text" id="bank_iban_1" name="bank_iban_1[]" placeholder="IBAN" required>
                                <label for="bank_iban_1" class="form-label">IBAN</label>
                                <div class="text invalid-feedback" id="bank_iban_1Feedback"></div>
                            </div>

                            <div class="form-floating flex-fill">
                                <input class="form-control rounded-5" type="text" id="bank_bic_1" name="bank_bic_1[]" placeholder="BIC" required>
                                <label for="bank_bic_1" class="form-label" >BIC</label>
                                <div class="text invalid-feedback" id="bank_bic_1Feedback"></div>
                            </div>
                        </fieldset>

                        <fieldset class="d-flex flex-column  flex-fill gap-1 rounded-5 shadow  p-2">
                            <legend class="text p-2">Bankverbindung 2</legend>

                            <div class="form-floating flex-fill">
                                <input class="form-control rounded-5" type="text" id="bank_name_2" name="bank_name_2[]"  placeholder="Bankname" required>
                                <label for="bank_name_2" class="form-label" >Bankname</label>
                                <div class="text invalid-feedback" id="bank_name_2Feedback"></div>
                            </div>

                            <div class="form-floating flex-fill">
                                <input class="form-control rounded-5" type="text" id="bank_iban_2" name="bank_iban_2[]" placeholder="IBAN" required>
                                <label for="bank_iban_2" class="form-label">IBAN</label>
                                <div class="text invalid-feedback" id="bank_iban_2Feedback"></div>
                            </div>

                            <div class="form-floating flex-fill">
                                <input class="form-control rounded-5" type="text" id="bank_bic_2" name="bank_bic_2[]" placeholder="BIC" required>
                                <label for="bank_bic_2" class="form-label" >BIC</label>
                                <div class="text invalid-feedback" id="bank_bic_2Feedback"></div>
                            </div>
                        </fieldset>

                        <fieldset class="d-flex flex-column flex-fill gap-1 rounded-5 shadow p-2 " >
                            <legend class="text p-2">Bankverbindung 3</legend>

                            <div class="form-floating">
                                <input class="form-control rounded-5" type="text" id="bank_name_3" name="bank_name_3[]" placeholder="Bankname" required>
                                <label for="bank_name_3" class="form-label" >Bankname</label>
                                <div class="text invalid-feedback" id="bank_name_3Feedback"></div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control rounded-5" type="text" id="bank_iban_3" name="bank_iban_3[]" placeholder="IBAN" required>
                                <label for="bank_iban_3" class="form-label">IBAN</label>
                                <div class="text invalid-feedback" id="bank_iban_3Feedback"></div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control rounded-5" type="text" id="bank_bic_3"  name="bank_bic_3[]" placeholder="BIC" required>
                                <label for="bank_bic_3" class="form-label" >BIC</label>
                                <div class="text invalid-feedback" id="bank_bic_3Feedback"></div>
                            </div>
                        </fieldset>
                    </div>
                    </fieldset>
                

                
                    <fieldset class="d-flex flex-column gap-1 rounded-5 shadow p-2">
                        <legend class="text p-2">Rechtliche Angaben</legend>

                        <div class="d-flex gap-1">
                            <div class="form-floating flex-fill">
                                <input class="form-control rounded-5" type="text" id="ust_id_nr" name="ust_id_nr[]" placeholder="USt-IdNr" required>
                                <label for="ust_id_nr" class="form-label" >USt-IdNr</label>
                                <div class="text invalid-feedback" id="ust_id_nrFeedback"></div>
                            </div>

                            <div class="form-floating flex-fill ">
                                <input class="form-control rounded-5" type="text" id="hr_nr" name="hr_nr[]" placeholder="Handelsregisternummer" required>
                                <label for="hr_nr" class="form-label" >Handelsregisternummer</label>
                                <div class="text invalid-feedback" id="hr_nrFeedback"></div>
                            </div>

                            <div class="form-floating flex-fill">
                                <input class="form-control rounded-5" type="text" id="juristication" name="juristication[]" placeholder="Gerichtsstand" required>
                                <label for="juristication" class="form-label" >Gerichtsstand</label>
                                <div class="text invalid-feedback" id="juristicationFeedback"></div>
                            </div>
                        </div>
                    </fieldset> 
            </div>
        </form>
    </div>
<?php
    }