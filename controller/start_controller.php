<?php

    class Start_Controller
    {
        private $model =null;

        function __construct($model)
        {
            $this->model = $model;
        }

        function handleRequest($feedback=false)
        {
           

            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $action = $_POST['btn'];

                if($action  === "Speichern")
                {
                    $this->model->save_password($_POST['Password']);
                    session_start();
                        $_SESSION['page']= 'form_page';
                    session_write_close();
                    header('Location: .');
                    exit();
                }
                else if($action === "Anmelden")
                {
                    
                    $this->model->check_password($_POST['Loginname'],$_POST['Password']); // 
                    header('Location: .');
                    exit();
                }
            }
            else
            {
                $this->model->check_token();
                $this->model->update_view(); 
                exit();
            }
            
            
            
        }
    }