<?php

class LoadController
{
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function handleRequest($load)
    {
        var_dump($load);
    }
}