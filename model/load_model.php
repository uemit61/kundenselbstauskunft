<?php

class LoadModel
{

    private $pdo;
    private $customer;
    
    public function __construct(Connection $pdo,$customer) 
    {
        $this->pdo = $pdo;
        $this->customer = $customer;
    }

    public function loadForm($load)
    {
        ob_start();
        ob_clean();
        var_dump($load);
        $formName = substr($load, 5); 
        var_dump($formName);

        
        $parts = explode("_", $formName);
        $primaeryKeyName = array_shift($parts).'_id';
        $foreignKeyName= implode("_", $parts).'_id';

        var_dump($primaeryKeyName.' '.$foreignKeyName);
        var_dump($this->getCustomer());

        
        $filename ='C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/'.$formName.'/'.$formName.'.php';
        require_once $filename;
        
        $subEntity =pathinfo($filename, PATHINFO_FILENAME);
        $class = ucfirst($subEntity);
        $entity = new $class($this->pdo,$this->customer,$primaeryKeyName,$foreignKeyName);
        
        $loadedForm = $entity->loadFormData();
        
        ob_clean();
        header('Content-Type: application/json');
        echo json_encode($loadedForm);
        ob_end_flush();
        
    }



    public function getCustomer()
    {
        return $this->customer;
    }

    
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }
}