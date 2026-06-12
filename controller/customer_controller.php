<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

    // require '../utils/controllerUtils.php';

    class Customer_controller
    {
        private $model;

        function __construct($model)
        {
            $this->model = $model;
        }

        function start()
        {
            $this->model->updateView();
        }
    }
    