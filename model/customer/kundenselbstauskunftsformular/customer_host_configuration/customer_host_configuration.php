<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');

class Customer_host_configuration extends DbModel
{
    protected   $host_configuration_id,
                $host_configuration_saved_data,
                $customer_id, 
                $host_configuration_ip_addres_connect_external_device,
                $host_configuration_ip_addres_data_backup,
                $host_configuration_ip_addres_erp,
                $host_configuration_virtualization;
        
    private  $pdo, $customer,$foreignKeyId, $primaeryKeyId, $primaeryKeyName, $foreignKeyName =null, $entityName = 'customer_host_configuration',$formData, $entityList;

    
    public function getHost_configuration_id()
    {
        return $this->host_configuration_id;
    }

    public function setHost_configuration_id($host_configuration_id)
    {
        $this->host_configuration_id = $host_configuration_id;
        return $this;
    }

    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
    }

    public function getHost_configuration_saved_data()
    {
        return $this->host_configuration_saved_data;
    }

        
    public function setHost_configuration_saved_data($host_configuration_saved_data)
    {
        $this->host_configuration_saved_data = $host_configuration_saved_data;
        return $this;
    }

    public function getHost_configuration_ip_addres_connect_external_device()
    {
            return $this->host_configuration_ip_addres_connect_external_device;
    }

    public function setHost_configuration_ip_addres_connect_external_device($host_configuration_ip_addres_connect_external_device)
    {
        $this->host_configuration_ip_addres_connect_external_device = $host_configuration_ip_addres_connect_external_device;
        return $this;
    }

    public function getHost_configuration_ip_addres_data_backup()
    {
        return $this->host_configuration_ip_addres_data_backup;
    }

    
    public function setHost_configuration_ip_addres_data_backup($host_configuration_ip_addres_data_backup)
    {
        $this->host_configuration_ip_addres_data_backup = $host_configuration_ip_addres_data_backup;
        return $this;
    }

    
    public function getHost_configuration_ip_addres_erp()
    {
        return $this->host_configuration_ip_addres_erp;
    }

    
    public function setHost_configuration_ip_addres_erp($host_configuration_ip_addres_erp)
    {
        $this->host_configuration_ip_addres_erp = $host_configuration_ip_addres_erp;
        return $this;
    }

    public function getHost_configuration_virtualization()
    {
        return $this->host_configuration_virtualization;
    }


    public function setHost_configuration_virtualization($host_configuration_virtualization)
    {
        $this->host_configuration_virtualization = $host_configuration_virtualization;
        return $this;
    }
    
    public function __construct($pdo=null,$customer=null, $primaeryKeyName = null,$foreignKeyName=null)
    {

        $this->pdo = $pdo;
        $this->customer = $customer;
        $this->foreignKeyName = $foreignKeyName;
        $this->primaeryKeyName = $primaeryKeyName;
        
        
        foreach(glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/customer_host_configuration/*.php') as $path)
        {
            require_once $path;
            $filename = pathinfo($path, PATHINFO_FILENAME);
            $this->entityList[] =$filename;
        }       
    }

    public function loadFormData()
    {
        $this->foreignKeyId = $this->basic_info($this->pdo, $this->customer)['main_id'];
        foreach($this->entityList as $entity)
        {
            if($entity !== 'customer_host_configuration')
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
        $retVal = null;

        try
        {
            $con = $pdo->connectToDb();
            $query='SELECT  `customer_host_configuration`.`host_configuration_id`,
                            `customer_host_configuration`.`host_configuration_saved_data`
                    FROM    `customer_host_configuration`
                    WHERE   `customer_host_configuration`.`customer_id` = :customer_id';

            $stmt = $con->prepare($query);
            $stmt->bindValue(':customer_id', $customer->getCustomer_id());
            $stmt->execute();
            $pdo->closeConnection();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result)
            {
                $retVal['main_id']=$result['host_configuration_id'];
                $retVal['saved_data']=$result['host_configuration_saved_data'];
            }
            
        }
        catch (Exception $e)
        {
            echo 'Fehler host_configuration_id'.$e->getMessage();
            $pdo->closeConnection();
        }

        return $retVal;
    }

    // Sonderfall host_configuration: legt die "leere" Eltern-Zeile an,
    // bevor der Kunde das Formular ausfüllt. Baut das Daten-Array selbst
    // und delegiert dann an die geerbte generische createRecord —
    // kein Override möglich (Signatur $pdo,$customer_id ≠ $pdo,$data,$e).
    public static function createParentRow($pdo, $customer_id)
    {
        static::createRecord($pdo, [
            'host_configuration_saved_data' => 1,
            'customer_id'                   => $customer_id,
        ], 'customer_host_configuration');
    }
}