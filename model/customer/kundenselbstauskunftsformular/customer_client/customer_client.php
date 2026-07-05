<?php 
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');

class Customer_client
{

    private $client_second_addres,
            $client_director,
            $client_bank_details,
            $client_legal_information,
            $client_name,
            $client_company_name,
            $client_phone_number,
            $client_email,
            $client_saved_data,
            $client_id;

    public  $pdo,$customer, $customerId,$foreignKeyId,$primaeryKeyName, $foreignKeyName ='client_id', $entityName = 'customer_client', $entityList, $formData;

    public function __construct($pdo=null,$customer=null, $primaeryKeyName = null)
    {
        $this->pdo = $pdo;
        $this->customer = $customer;
        $this->primaeryKeyName = $primaeryKeyName;

        foreach(glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/customer_client/*.php') as $path)
        {
            require_once $path;
            $filename = pathinfo($path, PATHINFO_FILENAME);
            $this->entityList[] =$filename;
        }       
    }

    public function loadFormData($clientId)
    {
        
        $this->foreignKeyId = $clientId;
        $clientId = ($clientId == 1) ? '' : $clientId;
        $cnameModi = $this->entityName.$clientId;
        $this->formData[$cnameModi] = $this->loadFromDB();

        foreach($this->entityList as $entity)
        {
            if($entity !== 'customer_client')
            {   
                $class = ucfirst($entity);
                $this->$entity =  new $class();
                
                $this->formData[$entity.$clientId] = $this->$entity->loadFromDB($this->pdo,$entity,$this->foreignKeyName,$this->foreignKeyId);
            }
        }
        var_dump($this->formData);
        return $this->formData;
    }

    public function basic_info($pdo,$customer)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query='SELECT  count(*) AS "numberClient"
                    FROM    `customer_client`
                    WHERE  `customer_id` = :customer_id';
            $stmt = $con->prepare($query);
            $stmt->bindValue(':customer_id', $customer->getCustomer_id());
            $stmt->execute();
            $pdo->closeConnection();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($result);
        }
        catch (Exception $e)
        {
            echo 'Fehler clients_id'.$e->getMessage();
        }
        $pdo->closeConnection();
        return $result;
    }

    public static function saveEntity($pdo,$data,$entity_name)
    {
        saveEntityToDB($pdo, $data, $entity_name);
    }

    public static function createRecord($pdo,$data,$entity_name)
    {
        createRecordToDB($pdo,$data, $entity_name);
    }

    
    public static function delete($pdo,$id)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query= 'DELETE FROM `customer_client`
                     WHERE `customer_client`.`client_id` =  :client_id';

            $stmt = $con->prepare($query);
            $stmt->bindValue(':client_id', $id, PDO::PARAM_INT);
            $stmt->execute();
            echo 'Rechtinfo wurden erfolgreich gelöscht';
            $pdo->closeConnection();
        }
        catch(Exception $e)
        {
            echo 'Fehler beim löschen der Rechtinfo'.$e;
        }
    }


    /**
     * Get the value of client_id
     */ 
    public function getClient_id()
    {
        return $this->client_id;
    }

    /**
     * Set the value of client_id
     *
     * @return  self
     */ 
    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

    /**
     * Get the value of client_name
     */ 
    public function getClient_name()
    {
        return $this->client_name;
    }

    /**
     * Set the value of client_name
     *
     * @return  self
     */ 
    public function setClient_name($client_name)
    {
        $this->client_name = $client_name;
        return $this;
    }

    /**
     * Get the value of client_company_name
     */ 
    public function getClient_company_name()
    {
        return $this->client_company_name;
    }

    /**
     * Set the value of client_company_name
     *
     * @return  self
     */ 
    public function setClient_company_name($client_company_name)
    {
        $this->client_company_name = $client_company_name;
        return $this;
    }

    /**
     * Get the value of client_phone_number
     */ 
    public function getClient_phone_number()
    {
        return $this->client_phone_number;
    }

    /**
     * Set the value of client_phone_number
     *
     * @return  self
     */ 
    public function setClient_phone_number($client_phone_number)
    {
        $this->client_phone_number = $client_phone_number;
        return $this;
    }

    /**
     * Get the value of cient_email
     */ 
    public function getClient_email()
    {
        return $this->client_email;
    }

    /**
     * Set the value of cient_email
     *
     * @return  self
     */ 
    public function setClient_email($client_email)
    {
        $this->client_email = $client_email;
        return $this;
    }

    /**
     * Get the value of client_saved_data
     */ 
    public function getClient_saved_data()
    {
        return $this->client_saved_data;
    }

    /**
     * Set the value of client_saved_data
     *
     * @return  self
     */ 
    public function setClient_saved_data($client_saved_data)
    {
        $this->client_saved_data = $client_saved_data;
        return $this;
    }

    public function loadFromDB()
    {
        return loadFromDB($this->pdo, $this->entityName,$this->foreignKeyName,$this->foreignKeyId);
    }
}
    