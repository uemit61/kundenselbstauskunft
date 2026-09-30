<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

class LoadController
{
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function handleRequest($load)
    {
        $this->model->loadForm($load['load']);
    }
}