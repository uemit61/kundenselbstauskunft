<?php

class LoadController
{
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function handleRequest($load,$customer)
    {
        $this->model->setCustomer($customer);

        // var_dump($load);
        $formName = substr($load['load'], 5); 

        $this->model->loadForm($load['load']);
    }

    
   

}