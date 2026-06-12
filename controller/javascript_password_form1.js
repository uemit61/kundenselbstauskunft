

/**
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
*/
$(document).ready(function () 
{
    console.log('loading');
    // Prüfung der Passwort Erstellung (mit jeder Buchtabeneingabe keyup)


        /**
        * The function `password_input_validation` checks the validity of a password input field based
        * on length, character requirements, and matching confirmation password.
        * @author      Ümit Yildirim hopes61@icloud.com
        * @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
        * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
        */
        function password_input_validation()
        {
            const password = $('#password').val();
            const confirmPassword = $('#confirm_password').val();
            let regex = /^(?=.*[A-Z])(?=.*[!$%^&*(),.?:{}|])[a-zA-Z0-9!$%^&*(),.?:{}|]+$/ 
            let regex2 = /[@#'<>"=]/;  // Nur Zeichen, die nicht @#'<>= enthalten

            if(password.length <8)
            {   
                if(password.length > 0)
                {
                    $('#password').removeClass('is-valid').addClass('is-invalid');
                    $('#passwordFeedback').text('Das Passwort muss mindesten 8 Zeichen lang sein.').show();
                    $('#passwordFeedback').removeClass('d-none valid-feedback').addClass('invalid-feedback');
                    $('#save_password').prop('disabled', true);
                }
                else
                {
                    $('#password').removeClass('is-invalid');
                    $('#password').addClass('is-valid');
                    $('#passwordFeedback').text('').show();
                    $('#save_password').prop('disabled', true);
                }
            }
            else if(regex2.test(password))
                {
                    $('#password').removeClass('is-valid').addClass('is-invalid');
                    $('#passwordFeedback').text('Das Passwort darf keines der folgenden Zeichen enthalten: @ # \' < > " =').show();
                    $('#passwordFeedback').removeClass('d-none');
                    $('#save_password').prop('disabled', true);
                }
            else if(!regex.test(password))
            {
                $('#password').removeClass('is-valid').addClass('is-invalid');
                $('#passwordFeedback').removeClass('valid-feedback',).addClass('invalid-feedback');
                $('#passwordFeedback').text('Das Passwort muss mindestens ein Großbuchtaben und ein Sonderzeichen enthalten').show();
                $('#passwordFeedback').removeClass('d-none');
                $('#save_password').prop('disabled', true);
            }
            else
            {
                $('#password').addClass('is-valid').removeClass('is-invalid');
                $('#passwordFeedback').text('Is correct!').show();
                $('#passwordFeedback').removeClass('d-none invalid-feedback').addClass('valid-feedback');
                if(password !== confirmPassword)
                {
                    if(confirmPassword.length>0)
                    {
                        $('#confirm_password').removeClass('is-valid').addClass('is-invalid');
                        $('#confirm_passwordFeedback').removeClass('valid-feedback');
                        $('#confirm_passwordFeedback').text("Die Passwörter stimmen nicht überein.").show();
                        $('#save_password').prop('disabled', true);
                    }
                    else
                    {
                        $('#confirm_password').removeClass('is-valid',);
                        $('#confirm_password').removeClass('is-invalid');
                        $('#confirm_passwordFeedback').text("").show();
                    }
                }
                else
                {
                    $('#confirm_password').removeClass('is-invalid').addClass('is-valid');
                    $('#confirm_passwordFeedback').text('Is correct').show('');
                    $('#confirm_passwordFeedback').removeClass('d-none invalid-feedback').addClass('valid-feedback');
                    $('#save_password').prop('disabled', false);
                }
            }
        }
        window.password_input_validation = password_input_validation;
       
});
