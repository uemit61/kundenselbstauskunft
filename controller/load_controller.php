<?php

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