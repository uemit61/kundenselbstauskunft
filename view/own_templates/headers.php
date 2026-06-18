
<?php

/*
* @file        header_login.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-22
*/
    function login_header($logo)
    
    {
?>
        <header class="p-2">
            <div class="d-flex justify-content-center bg-white">
                <img src="<?php echo $logo ?>" alt="Logo" class="logo " style="max-width: 150px;">
            </div>
        </header>

<?php
    }

    function logout_header($logo)
    {
?>      <header class="p-3">
            <div class=" d-flex  justify-content-between  align-items-center">
                <img src="<?php echo $logo ?>" alt="Logo" class="logo" style="max-width: 150px;"> // Logo des Kunden
                <button class="btn btn-outline-dark">Abmelden</button> <!-- Abmelden-Icon -->
            </div>
        </header>
<?php
    }