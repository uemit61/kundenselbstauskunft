<?php
    /**
    * @author      Ümit Yildirim hopes61@icloud.com
    * @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
    * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
    */

    require 'C:/xampp/htdocs/kundenselbstauskunft/view/own_templates/heads.php';
    require 'C:/xampp/htdocs/kundenselbstauskunft/view/own_templates/headers.php';
    require 'C:/xampp/htdocs/kundenselbstauskunft/view/forms/login_form.php';
    require 'C:/xampp/htdocs/kundenselbstauskunft/view/forms/password_form.php';

    class Login_Page
    {
        private $logo = null;



        function render($is_token_valid=false,$logo,$login_failed)
        {

           
            $this->logo = $logo;
            // Head
            bootstrap_jquery();
?>
            <body>
<?php
                login_header($logo);
?>
                <main>
<?php
                        if($is_token_valid)
                        {
                            password_form();
                        }
                        else 
                        {
                            login_form($login_failed);
                        }
?>
                </main>
                    <!-- DOMPurify enthält Funktionen die vor CSS schützen-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.4.0/purify.min.js"></script>
                <!-- Eigene JavaScript  -->
                <!-- <script src="/kundenselbstauskunft/controller/javascript_password_form1.js"></script> -->
                <!-- Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
                <script type="module" src='/kundenselbstauskunft/controller/jquery_self.js'></script>
            </body>
            </html>
<?php     
        }
    }   