<?php

/**
* @file        main_form.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/


require './view/own_templates/heads.php';
require './view/own_templates/headers.php';
require './view/forms/customer_contact_information.php';
require './view/forms/customer_host_configuration.php';
require './view/forms/customer_client.php';
require './view/forms/customer_erp_configuration.php';
require './view/forms/customer_import_.php';
require './view/own_templates/footer.php';


class Form_Page
{
    private $logo;
    function render($logo,$saved_page='') 
    {
        $this->logo = $logo;
        $form_arrays = [customer_contact_information(), customer_host_configuration(), customer_client(), customer_erp_configuration(), 
                        customer_import()];
        
?>
            <!-- Head --> :
<?php 
        bootstrap_jquery(); 
?>
        <body >
            <!-- Header -->
<?php       
            logout_header($logo); 
?>
            <main id="main">
                <div class=" container bg-primary-subtle shadow-lg rounded-5  border border-primary-subtle border-5 p-4 w-100" >
                    <?php 
                    foreach($form_arrays as $form_infos): 
                        $step =$form_infos['form_body'];
                        $field_count=-1;
                        $tooltip=false;
                        $inputName ='';?>
                        <form id=<?= 'form_'.$form_infos['form_id'] ?> name=<?= 'form_'.$form_infos['form_id'] ?> method="post" class="step d-flex flex-column  needs-validation gap-3 d-none "  data-label=<?=$form_infos['form_label'] ?> novalidate>
                            <div class="d-flex justify-content-center flex-row">
                                <h3 class="text-center p-3"><?=$form_infos['form_label'] ?></h3>
                                <i class="bi bi-arrow-clockwise  text-success loadData d-none " ></i>
                                <i class="bi  bi-info-circle-fill text-danger loadData d-none " ></i>
                            </div>    

<?php
                            if($step[0][0]['field_name'] == 'Mandanteninformation'):
?>
                                <div class="d-flex text p-2 clientPlus" >
                                    <div class="client_total_text">Anzahl der Mandanten: 1</div>
                                    <i class="client_total bi bi-plus"  onclick="addClient(this)" data-total="1"></i>
                                </div>

                                <div class="body-group rounded-5 border  border-info p-2 mb-3" id="client_body1">
                                    <div class="client_header d-flex justify-content-between" >
                                        <div class="client_add d-flex text p-2" >
                                            <i class="client_no bi bi-chevron-down" onclick="openClose(this)"  name="client_no[]" data-no="1" ></i> 
                                            <h5 class="client_header_text">Mandant 1</h5>
                                        </div>

                                        <div class="client_delete d-flex p-2 d-none" >
                                            <h5 class="text-danger">Löschen <i class="bi bi-x-lg" id="delteBtn" onclick="deleteClient(this)"></i> </h5>
                                        </div>
                                    </div>

                                    <div class="client_main1 d-none" >
<?php
                            endif;
                            foreach ($step as $fieldgroup): $field_count++;
                                if($step[0][0]['field_name'] == 'User' && $field_count == 2 ): 
?>
                                    <div class="shadow rounded-5 p-2 gap-1">
                                        <div class="d-flex flex-row">
                                            <h5 class="d-flex gap-1 text p-2 fw-bold"> 
                                                Vorgänge  
                                                <i
                                                    class="bi bi-info-circle-fill" 
                                                    data-bs-toggle="tooltip" 
                                                    data-bs-placement="bottom"
                                                    data-bs-custom-class="custom-tooltip"
                                                    data-bs-html="true" 
                                                    data-bs-title=
                                                    "
                                                        <div class='d-flex flex-column'>
                                                            <p class=''>
                                                                Jahreszahl, Monatszahl und Die erste Vorgangsummer
                                                                (Bsp. Angebot)
                                                            </p>
                                                            <p>
                                                                AN202502-1001
                                                            </p>
                                                            <p>AN2025-1001 AN-1001</p>
                                                        </div>
                                                    ">
                                                </i>
                                            </h5>
                                        </div>
<?php       
                            endif; 
?>

                                    <div class="overflow-auto d-flex flex-fill flex-column flex-lg-row flex-wrap gap-1">

<?php       
                                        foreach($fieldgroup as $field):
?>
                                            <fieldset class="d-flex  flex-fill flex-column gap-1 shadow rounded-5 p-2 mb-3" id=<?=$field['dBName']?>>  
                                                <h5  class="text p-2 fw-bold"><?=$field['field_name']?></h5>
<?php   
                                                $subfield = array_slice($field,2,null,true);

                                                foreach($subfield as $form):
                                                    $vh =null;

                                                    if(isset($form["host_configuration_virtualization_product"]))
                                                    {
                                                        $vh ='virtualisationFields';
                                                    };

                                                    $divClass='';

                                                    if(isset($vh))
                                                    {
                                                        $divClass ='d-none';
                                                    }
?>
                                                    <div class="<?= $divClass. ' d-flex flex-column flex-lg-row  flex-lg-wrap flex-sm-column'?>"  id=<?=$vh ?> >
<?php                   
                                                        foreach($form as $id => $val): 
                                                            if ($val[2]=='Zusatz' || $val[2]=='Verkaufspreis' || $val[2]=='Aufschlag Verkaufspreis'):$tooltip = true; $inputName=$val[2];
?>
                                                                <div class="d-flex flex-row">
<?php                       
                                                            endif; 
?>
                                                                    <div class="<?=$val[0] ?>" >
<?php                                               
                                                                        if($val[1][0] != 'select'):
                                                                            if($val[1][0] == 'checkbox'):
?>                                                                          
                                                                                <input type='hidden' name=<?=$id ?> value="off" >
<?php                                                                       endif; 
?>

                                                                            <input 
                                                                                type=<?=$val[1][0]?>  
<?php 
                                                                                if($val[1][0] == 'checkbox'):  
                                                                                    $formClass ='form-check-input ';
                                                                                else: 
                                                                                    $formClass= 'form-control ';
                                                                                endif;
?> 
                                                                                class="<?=$formClass. 'rounded-5' ?>"          
                                                                                id=<?=$id ?> name=<?=$id ?> 
                                                                                placeholder=<?=$val[2] ?>
                                                                                requierd
                                                                            >
                                                                                                  
<?php                                                                                                                                                                                                                        
                                                                        else:
?>
                                                                            <select class="form-select rounded-5 " name=<?=$id ?> id=<?=$id ?> aria-label=<?=$val[2] ?> >
                                                                                <option value=""><?=$val[1][1][0] ?></option>
<?php   
                                                                                for($i=1; $i < count($val[1][1]); $i++):
?>
                                                                                    <option value="<?=$val[1][1][$i] ?>"><?=$val[1][1][$i] ?></option>
<?php   
                                                                                endfor;
?>
                                                                            </select>
<?php
                                                                        endif;
?>
                                                                            <label for="<?=$id ?>" class="form-label"><?=$val[2] ?></label>
                                                                            <div id=<?=$id."Feedback" ?> class="text invalid-feedback"></div>
                                                            
                                                                    </div>                                                    
<?php                   
                                                        endforeach; 
?>
                                                        
<?php                   
                                                        if ($tooltip == true): ?>
                                                                    <i
                                                                        class="bi bi-info-circle-fill" 
                                                                        data-bs-toggle="tooltip" 
                                                                        data-bs-placement="bottom"
                                                                        data-bs-custom-class="custom-tooltip"
                                                                        data-bs-html="true" 
                                                                        data-bs-title=
                                                                        "
                                                                            Bitte geben Sie die Nummern der <?php echo $inputName ?>felder <br>
                                                                            von 1 bis <?php if($inputName != 'Zusatz'){echo '6';}else{echo '20';}?> <br>
                                                                            getrennt von einem Leerzeichen ein. <br>
                                                                            z.B für die Felder 2,4,5,6 <br>
                                                                            2 4 5 6
                                                                        "
                                                                    >
                                                                    </i>
                                                                </div>
<?php       
                                                            $tooltip =false; 
                                                        endif; 
?>
                                                    </div>  
<?php   
                                                endforeach; 
?>
                                            </fieldset>
<?php   
                                        endforeach;?>
                                    </div>
<?php   
                            if($step[0][0]['field_name'] == 'User' && $field_count == 2): ?>
                                </div>
<?php 
                            endif; 
                        endforeach;
                        if($step[0][0]['field_name'] == 'Mandanteninformation'):
?>
                            </div>
                    </div>
<?php   
                endif; 
?>
                        </form>
                

<?php  
                endforeach; 
                ?>

            
        <!-- Navigation -->
        <div class="d-flex justify-content-between buttons">
            <button onclick="step_back()" class="btn btn-outline-secondary rounded-5 d-none" id="prevBtn">Zurück</button>
            <button onclick="save_FromPage_to_Db()" class="btn btn-success rounded-5" id="btn">Kontaktdaten speichern</button>
            <button onclick="load_data_from_db()" class=" btn btn-success rounded-5 d-none" id="ltn" data-formId="#form_customer_contact_information">Gespeicherte Daten laden</button>
            <button onclick="step_forward()" class="btn btn-primary rounded-5" id="nextBtn">Weiter</button>
        </div>
    </div>

                
                
            </main>
            
            

            <!-- DOMPurify enthält Funktionen die vor CSS schützen-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.4.0/purify.min.js"></script>
            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            
            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
            <script type="module" src='/kundenselbstauskunft/controller/javascript_main_form.js'></script>
            <script type="module" src='/kundenselbstauskunft/controller/jquery_self.js'></script>

        </body>
        </html>
<?php
    }
}
