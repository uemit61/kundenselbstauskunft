<?php

    function password_form()
    {
?>
      <div class="container-fluid" >
        <p class="text-center fs-4 fw-light">Passwort erstellen</p>
        <div class="container bg-primary-subtle shadow-lg rounded-5  border border-primary-subtle border-5 p-4 col-lg-3 " > 
                <form class="needs-validation" id="form_password"  name="password_set" method="post" action="">
                    <fieldset class="d-flex flex-column p-2 gap-3">
                        

                        <div class="form-floating mb-2 position-relative input-group ">
                            <span class="input-group-text rounded-start-5">
                                <i class="bi bi-lock-fill"></i>
                            </span>

                            <div class="form-floating">
                                <input onkeyup="password_input_validation()" type="password" class="form-control rounded-end-5" id="password" name="Password" placeholder="Password" required>
                                <label for="Loginname" class="form-label">Neues Passwort</label>
                            </div>
                            <div class="invalid-feedback mb-3" id="passwordFeedback" ></div>
                            
                        </div>
                        
                        <div class="mb-2 position-relative input-group">
                            <span class="input-group-text rounded-start-5">
                                <i class="bi bi-lock-fill "></i>
                            </span>
                            <div class="form-floating">
                                <input onkeyup="password_input_validation()" type="password" name="Password" class="form-control rounded-end-5" id="confirm_password" placeholder="Passwort Wiederholen">
                                <label for="Password" class="form-label">Passwort Wiederholen</label>
                            </div>
                            <div class="invalid-feedback mb-2" id="confirm_passwordFeedback"></div>
                        </div>
                    
                        <input type="submit" class="btn btn-success rounded-5" name="btn" value="Speichern" id="save_password" disabled>
                        
                    </fieldset>
                    
                </form>
        </div>
    </div>
                    
            </div>
        </div>

<?php
    }