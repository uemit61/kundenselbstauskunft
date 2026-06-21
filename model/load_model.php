<?php

class LoadModel
{

    private $pdo;
    private $customer;
    
    public function __construct(Connection $pdo) 
    {
        $this->pdo = $pdo;
        
    
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

        var_dump($this->getCustomer()->getCustomer_id());

        exit();
        $filename ='C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/'.$formName.'/'.$formName.'.php';
        require_once $filename;

        $subEntity =pathinfo($filename, PATHINFO_FILENAME);
        $class = ucfirst($subEntity);
        $entity = new $class($primaeryKeyName,$foreignKeyName);
        $loadedForm = $entity->loadFromDB($this->pdo,$formName, $primaeryKeyName,$this->getCustomer()->getCustomer_id());
        
        ob_clean();
        header('Content-Type: application/json');
        echo json_encode($loadedForm);
        ob_end_flush();
        
        // foreach
        // (glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/'.$formName.'/*.php') as $filename)
        // {

        //     require_once $filename;
        //     $subEntity =pathinfo($filename, PATHINFO_FILENAME);
        //     $class = ucfirst($subEntity);
        //     $entity = new $class();


        //     $entity->loadFromDB($this->pdo,$formName,$foreignKeyName,$this->getCustomer()->getCustomer_id());
        // }
    }



    /**
     * Get the value of customer
     */ 
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */ 
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }
}