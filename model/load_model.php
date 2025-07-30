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
        var_dump($load);
        $formName = substr($load, 5); 
        var_dump($formName);

        
        $parts = explode("_", $formName);
        $mainForeignKey = array_shift($parts).'_id';
        $subForeignKey = implode("_", $parts).'_id';

        var_dump($mainForeignKey.' '.$subForeignKey);

        var_dump($this->getCustomer()->getCustomer_id());


        $filename ='C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/'.$formName.'/'.$formName.'.php';
        require_once $filename;

        $subEntity =pathinfo($filename, PATHINFO_FILENAME);
        $class = ucfirst($subEntity);
        $entity = new $class();
        $data = $entity->loadFromDB($this->pdo,$formName, $mainForeignKey,$this->getCustomer()->getCustomer_id());

        var_dump($data);

        // foreach
        // (glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/'.$formName.'/*.php') as $filename)
        // {

        //     require_once $filename;
        //     $subEntity =pathinfo($filename, PATHINFO_FILENAME);
        //     $class = ucfirst($subEntity);
        //     $entity = new $class();


        //     $entity->loadFromDB($this->pdo,$formName,$subForeignKey,$this->getCustomer()->getCustomer_id());
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