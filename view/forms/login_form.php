<?php

    function login_form($login_failed=0)
    {
?>
    <div class="container-fluid d-flex flex-column col-md-3 col-sm-6 col-lg-3 col-12" >
    <h4 class="login-header text-center fw-light mb-3 p-2">Anmeldung</h4>
        <div class="container   bg-primary-subtle border border-primary-subtle border-5  shadow rounded-5 p-3" >
            <form method="post" id="form_login" name="login_page" action="">
                    
                <fieldset class="d-flex flex-column">
                    <div class="position-relative input-group mb-3 ">
                        <span class="input-group-text rounded-start-5 bg-info">
                            <i class="bi bi-person-circle bg-info"></i>
                        </span>

                        <div class="form-floating">
                            <input type="text" class="form-control rounded-end-5 " id="username" name="username" placeholder="email adresse">
                            <label for="username" class="form-label">email adresse</label>
                            
                        </div>
                        <div id="usernameFeedback" class="text invalid-feedback"></div>
                    </div> 

                    <div class="text-primary  d-flex p-2 justify-content-end ">Passwort vergessen?</div>

                    <div class="position-relative input-group mb-3">
                        <span class="input-group-text rounded-start-5 bg-info">
                            <i class="bi bi-person-fill-lock "></i>
                        </span>
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-end-5" id="password" name="password" placeholder="Password">
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="invalid-feedback mb-2" id="passwordFeedback"></div>
                    </div>

                    <div id="login_failed" data-login-failed="<?php echo $login_failed; ?>"></div>
                    <input type="submit" id="loginBtn" name="btn" value="Anmelden" class="btn btn-success rounded-5 ">
                </fieldset>
            </form>
        </div>
    </div>

<?php
    
    }