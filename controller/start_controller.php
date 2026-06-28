<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
   

    class Start_Controller
    {
        private $model;
        function __construct($model)
        {
            $this->model = $model;
        }
        function handleRequest()
        {
            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $action = $_POST['btn'];

                if($action  === "Speichern")
                {
                    $this->model->savePassword($_POST['password']);
                }
                else if($action === "Anmelden")
                {   
                    $this->model->login($_POST['username'],$_POST['password']); // 
                }
                header('Location: .');
                exit();
            }
            else
            {   
                $this->model->checkToken();
                $this->model->update_view(); 
                exit();
            }
        }
    }