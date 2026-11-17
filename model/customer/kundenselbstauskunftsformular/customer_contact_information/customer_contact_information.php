<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');

class Customer_contact_information extends DbModel
{
    protected   $contact_information_id,
                $contact_information_company_name,
                $contact_information_phone,
                $contact_information_email,
                $contact_information_saved_data,
                $contact_information_contact_person,
                $contact_information_addres;

    private  $pdo,$customer, $customerId,$foreignKeyId, $primaeryKeyId, $primaeryKeyName, $foreignKeyName =null, $entityName = 'customer_contact_information', $entityList,$formData;

    public function getContact_information_id()
    {
        return $this->contact_information_id;
    }

    public function setContact_information_id($contact_information_id)
    {
        $this->contact_information_id = $contact_information_id;
        return $this;
    }

    public function getContact_information_company_name()
    {
        return $this->contact_information_company_name;
    }
 
    public function setContact_information_company_name($contact_information_company_name)
    {
        $this->contact_information_company_name = $contact_information_company_name;
        return $this;
    }
 
    public function getContact_information_phone()
    {
        return $this->contact_information_phone;
    }
 
    public function setContact_information_phone($contact_information_phone)
    {
        $this->contact_information_phone = $contact_information_phone;
        return $this;
    }
 
    public function getContact_information_email()
    {
        return $this->contact_information_email;
    }

    public function setContact_information_email($contact_information_email)
    {
        $this->contact_information_email = $contact_information_email;
        return $this;
    }

    public function getContact_information_saved_data()
    {
        return $this->contact_information_saved_data;
    }

    public function setContact_information_saved_data($contact_information_saved_data)
    {
        $this->contact_information_saved_data = $contact_information_saved_data;
        return $this;
    }

     public function __construct($pdo=null,$customer=null, $primaeryKeyName = null,$foreignKeyName=null)
    {
        $this->pdo = $pdo;
        $this->customer = $customer;
        $this->foreignKeyName = $foreignKeyName;
        $this->primaeryKeyName = $primaeryKeyName;

        foreach(glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/customer_contact_information/*.php') as $path)
        {
            require_once $path;
            $filename = pathinfo($path, PATHINFO_FILENAME);
            $this->entityList[] =$filename;
        }       
    }

    public function loadFormData()
    {
        $this->foreignKeyId = $this->basic_info($this->pdo, $this->customer)['main_id'];
        $this->formData[$this->entityName] = $this->loadOwn();

        foreach($this->entityList as $entity)
        {
            if($entity !== 'customer_contact_information')
            {   
                $class = ucfirst($entity);
                $this->$entity =  new $class();
                $this->formData[$entity] = $this->$entity->loadFromDB($this->pdo,$entity,$this->foreignKeyName,$this->foreignKeyId);
            }
        }
        return $this->formData;
    }

      public function basic_info($pdo,$customer)
    {
        $retVal=[];
        try
        {
            $con = $pdo->connectToDb();
            $query='SELECT  `customer_contact_information`.`contact_information_id`,
                            `customer_contact_information`.`contact_information_saved_data`
                    FROM    `customer_contact_information`
                    WHERE   `customer_contact_information`.`customer_id` = :customer_id';


            $stmt = $con->prepare($query);
            $stmt->bindValue(':customer_id', $customer->getCustomer_id());
            $stmt->execute();
            $pdo->closeConnection();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $retVal['main_id']=$result['contact_information_id'];
            $retVal['saved_data']=$result['contact_information_saved_data'];
        }
        catch (Exception $e)
        {
            echo 'Fehler contact_informations_id'.$e->getMessage();
        }

        $pdo->closeConnection();

        return $retVal;
    }

    public function loadOwn()     // oder load() — Hauptsache anders als die statische
    {
        return  static::loadFromDB($this->pdo, $this->entityName, $this->foreignKeyName,
                $this->foreignKeyId);
    }
}