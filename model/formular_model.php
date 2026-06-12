<?php

/**
* @author      Ümit Yildirim <hopes61@icloud.com>
* @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
*/

require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer.php';


class CIModel
{
    private $view;
    private $pdo;
    private $customer;
    private $saved_data;
    private $main_id;

    private $numberClients;
    
    public function getMain_id()
    {
        return $this->main_id;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    public function getSaved_data()
    {
        return $this->saved_data;
    }

    
    public function getNumberClients()
    {
        return $this->numberClients;
    }

   
    public function setNumberClients($numberClients)
    {
        $this->numberClients = $numberClients;

        return $this;
    }

    function __construct($view,$pdo,$data=0)
    {
        $this->view=$view;
        $this->pdo=$pdo;
        if($data !=0)
        {
            $data['page'] = str_replace('form_','',$data['page']);
            foreach
            (glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/'.$data['page'].'/*.php') as $filename)
            {
                require_once $filename;
                $subEntity = pathinfo($filename, PATHINFO_FILENAME);
                
                $class_name = ucfirst($subEntity);
                if($class_name !='Db_transactions')
                    $this->$subEntity = new $class_name();
            }
        }
    }

    public function basic_info($entity)
    {
        var_dump($entity);
        // exit();

        $info = $this->$entity->basic_info($this->pdo,$this->customer);

        if($entity == 'customer_client')
        {
            $this->numberClients  = $info['numberClient'];
        }
        else
        {
            $this->main_id = $info['main_id'] ?? '';
            $this->saved_data = $info['saved_data'] ?? '0';
        }
      
        $this->pdo->closeConnection();
    }
    public function createRecordInformation($entity,$data = null)
    {
        
        if($entity == 'customer_host_configuration' || $entity == 'customer_import')
        {
            $this->$entity->createRecord($this->pdo,$this->getCustomer()->getCustomer_id());
        }
        else
        {  
            if($entity != 'contact_information')
                $this->$entity->createRecord($this->pdo,$data,$entity);
            else
                $this->$entity->createRecord($this->pdo,$data,'customer_contact_information');
        }
    }

    public function createRecords($data)
    {
        var_dump($data);
        $i=0;
        foreach($data as $entity_name => $entity)
        {
            if($i !=0 ||  key($data)  == 'host_configuration_virtualization' || key($data) == 'customer_client' || key($data) == 'import_customer_data')
                $this->$entity_name->createRecord($this->pdo,$entity,$entity_name);
            else
                $i=3;
        }
    }

    public function saveEntities($data)
    {
        var_dump($data);
        foreach($data as $entity_name => $entity)
        {
            $this->$entity_name->saveEntity($this->pdo,$entity,$entity_name);
        }
    }

    public function delete($id, $entity)
    {
        $this->$entity->delete($this->pdo,$id);
    }

    function updateView()
    {
        session_start();
            $logo = $_SESSION['Logo_Url'];
        session_write_close();
            $this->view->render($logo);
    }
}