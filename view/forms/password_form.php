<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

    function password_form()
    {
?>
    <div class="container-fluid" >
        <p class="text-center fs-4 fw-light">Passwort erstellen</p>
        <div class="container bg-primary-subtle shadow-lg rounded-5  border border-primary-subtle border-5 p-4 col-lg-3 " > 
            <form class="needs-validation" id="form_password"  name="password_set" method="post" action="" novalidate>
                <fieldset class="d-flex flex-column p-2 gap-3">
                    

                    <div class="form-floating mb-2 position-relative input-group ">
                        <span class="input-group-text rounded-start-5">
                            <i class="bi bi-lock-fill"></i>
                        </span>

                        <div class="form-floating">
                            <input  type="password" class="form-control rounded-end-5" id="password" name="password" placeholder="Password" required>
                            <label for="password" class="form-label">Neues Passwort</label>
                        </div>
                        <div class="invalid-feedback mb-3" id="passwordFeedback" ></div>
                        
                        
                    </div>
                    
                    <div class="mb-2 position-relative input-group">
                        <span class="input-group-text rounded-start-5">
                            <i class="bi bi-lock-fill "></i>
                        </span>
                        <div class="form-floating">
                            <input  type="password" name="confirm_password" class="form-control rounded-end-5" id="confirm_password" placeholder="Passwort Wiederholen"require>
                            <label for="confirm_password" class="form-label">Passwort Wiederholen</label>
                        </div>
                        <div class="invalid-feedback mb-2" id="confirm_passwordFeedback"></div>
                    </div>
                
                    <input type="submit" class="btn btn-success rounded-5" name="btn" value="Speichern" id="save_password" disabled>
                    
                </fieldset>
                
            </form>
        </div>
    </div>
<?php
    }