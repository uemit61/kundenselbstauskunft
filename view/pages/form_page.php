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
require './view/forms/customerInfo_form.php';
require './view/forms/hostConfig_form.php';
require './view/forms/mandanten_form.php';
require './view/forms/erp_form.php';
require './view/forms/import_form.php';
require './view/own_templates/footer.php';


class Form_Page
{
    
    function render($logo)
    {
?>
        
            <!-- Head -->
            <?php bootstrap_jquery(); ?>
            
            <body>
                    <!-- Header -->
                    
                        <?php logout_header($logo); ?>

                    
                
                <main>
                <div class="container bg-primary-subtle shadow-lg rounded-5  border border-primary-subtle border-5 p-4 w-75" >
                    <form id="form-tab1" name="customerInfo" method="post" action="" class="d-flex flex-column  needs-validation gap-3"  novalidate>
                    <h3 class="text-center p-3">Kontaktdaten</h3>
    
                    <?php   foreach ($... as $fieldgroup): ?>
                                <div class="d-flex flex-fill flex-column flex-lg-row  gap-1">
                                <?php foreach($fieldgroup as $field):?>
                                    
                                        <fieldset class="d-flex  flex-fill flex-column gap-1 shadow rounded-5 p-2" id=<?=$field['field_name']?>>  
                                            <label for =<?=$field['field_name']?> class="text p-2 fw-bold"><?=$field['field_name']?></label>
                                        
                                        <?php   $subfield = array_slice($field,1,null,true);
                                                foreach($subfield as $form):
                                                    $vh =null;
                                                    if(isset($form["host_configuration_virtualization_produkt"]))
                                                    {
                                                        $vh ='virtualisationFields';
                                                    };         
                                        ?>
                                                    <div class="
                                                                    <?php if(isset($vh)){echo 'd-none';} ?> 
                                                                    d-flex flex-column flex-lg-row  flex-sm-column gap-1
                                                                    " id="<?=$vh ?>
                                                                ">
                                                    <?php   foreach($form as $id => $val): ?>
                                                                <div class="<?=$val[0] ?>" >
                                                                <?php   if($val[1][0] != 'select'):?>
                                                                
                                                                            <input 
                                                                                    type=<?=$val[1][0]?>  
                                                                                    class=  "
                                                                                                <?php if($val[1][0] == 'checkbox'): echo 'form-check-input'; else: echo 'form-control ';endif; ?> 
                                                                                                rounded-5
                                                                                            "
                                                                                    id=<?=$id ?> name=<?=$id ?> placeholder=<?=$val[2] ?> 
                                                                                    requierd
                                                                            >
                                                                
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
                                <?php       
                                    endforeach;
                                ?>
                     </div>
                        <?php
                            endforeach; 
                        ?>
                    </form>
                </div>

                    <!-- Navigation -->
                    <div class="d-flex justify-content-center">
                        <button onclick="tap_back()" class="btn btn-outline-secondary rounded-5" id="prevBtn">Zurück</button>
                        <button onclick="save_tabFrom_to_Db()" class="btn btn-success rounded-5" id="btn">Kontaktdaten speichern</button>
                        <button onclick="tap_forward()" class="btn btn-primary rounded-5" id="nextBtn">Weiter</button>
                    </div>
                    
                </main>
                <footer>
                </footer>
                

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
