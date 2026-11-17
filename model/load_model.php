<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer.php';

class LoadModel
{

    private $pdo;
    private $customer;
    
    public function __construct(Connection $pdo,$login_customer_id) 
    {
        $this->pdo = $pdo;
        $this->customer = Customer::loadEntityById($pdo,$login_customer_id);
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
        // var_dump($this->getCustomer());

        
        $filename ='C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/'.$formName.'/'.$formName.'.php';
        require_once $filename;
        
        $class = ucfirst($formName);
        $entity = new $class($this->pdo,$this->customer,$primaeryKeyName,$foreignKeyName);
        
        // Clients müsssen mehrere Objkete erzeugen
        // Daher basisInfo hier aufrufen oder im Controller
        // Schleife erstellen.
        if($formName == 'customer_client')
        {
            $numberClient =$entity->basic_info($this->pdo,$this->customer)['numberClient'];
            $loadedForm=[];

            for ($i=0; $i < $numberClient ; $i++) 
            { 
                $loadedForm = array_merge($loadedForm,$entity->loadFormData($i+1));
            }
            
        }
        else
        {
            $loadedForm = $entity->loadFormData();
        }
            
        
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