<?php

/**
* @file        index.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-19
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
            foreach
            (glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/'.$data['page'].'/*.php') as $filename)
            {
                require_once $filename;
                $subEntity = pathinfo($filename, PATHINFO_FILENAME);
                $class_name = ucfirst($subEntity);
                $this->$subEntity = new $class_name();
            }
        }
    }

    public function createRecordInformation($entity,$data = null)
    {
        // var_dump($entity);
        // exit();

        if($entity == 'customer_host_configuration' || $entity == 'customer_import')
        {
            // var_dump(61);
            // exit();
            $this->$entity->createRecord($this->pdo,$this->getCustomer()->getCustomer_id());
        }
        else
        {
            // var_dump($data);
            // exit();
            $this->$entity->createRecord($this->pdo,$data);
        }
    }

    public function createRecords($data)
    {
        // var_dump($data);
        // exit();

            $i=0;
            foreach($data as $entity_name => $entity)
            {
                if($i !=0 ||  key($data)  == 'host_configuration_virtualization' || key($data) == 'customer_client')
                    $this->$entity_name->createRecord($this->pdo,$entity);
                else
                    $i=3;
            }
        

    }

    public function saveEntities($data)
    {
        foreach($data as $entity_name => $entity)
        {
            $this->$entity_name->saveEntity($this->pdo,$entity);
        }
    }

    public function basic_info($entity)
    {
        // var_dump($entity);
        // exit();

        $info = $this->$entity->basic_info($this->pdo,$this->customer);

        
       
        if($entity == 'customer_client')
        {
            $this->numberClients  = $info['numberClient'];
        }
        else
        {
            $this->main_id = $info['main_id'];
            $this->saved_data = $info['saved_data'];
        }
      
        $this->pdo->closeConnection();
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