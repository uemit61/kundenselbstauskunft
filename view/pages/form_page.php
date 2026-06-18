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
                    

                        <!-- Navigation -->
                        <div class="d-flex justify-content-center">
                            <button onclick="tap_back()" class="btn btn-outline-secondary rounded-5" id="prevBtn">Zurück</button>
                            <button onclick="save_tabFrom_to_Db()" class="btn btn-success rounded-5" id="btn">Kontaktdaten speichern</button>
                            <button onclick="tap_forward()" class="btn btn-primary rounded-5" id="nextBtn">Weiter</button>
                        </div>
                      
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
