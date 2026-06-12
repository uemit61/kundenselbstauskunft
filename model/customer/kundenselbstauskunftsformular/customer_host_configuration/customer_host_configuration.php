<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */


    class Customer_host_configuration
    {
        private $host_configuration_id,
                $host_configuration_saved_data,
                $customer_id;

        private $host_configuration_ip_addres_connect_external_device,
                $host_configuration_ip_addres_data_backup,
                $host_configuration_ip_addres_erp,
                $host_configuration_virtualization;
            
        public  $pdo, $customer,$foreignKeyId, $primaeryKeyId, $primaeryKeyName, $foreignKeyName =null, $entityName = 'customer_host_configuration';

    public $formData, $entityList;

        
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

        public static function createRecord($pdo,$customer_id)
        {
            try
            {
                $con = $pdo->connectToDb();
                $query ='INSERT INTO `customer_host_configuration` 
                                    (`host_configuration_id`, 
                                    `host_configuration_saved_data`, 
                                    `customer_id`) 
                            VALUES  ("",
                                    1,
                                    :customer_id)';
                $stmt= $con->prepare($query);
                $stmt->bindValue(':customer_id', $customer_id);
                $stmt->execute();
            }
            catch (Exception $e)
            {
                echo 'Fehler Host_Configuration: ' .$e->getMessage();
            }
            $pdo->closeConnection();
        }

         public static function saveEntity($pdo,$customer_host_configuration)
        {
            try
            {
                $con = $pdo->connectToDb();
                $query ="UPDATE `customer_host_configuration` 
                        SET `host_configuration_saved_data` = :host_configuration_saved_data 
                        WHERE `customer_host_configuration`.`host_configuration_id` = :host_configuration_id
                        AND `customer_id` = :customer_id;";
                $stmt= $con->prepare($query);
                $stmt->execute($customer_host_configuration);

                echo 'Hostinformationen wurden aktualisiert.';
            }
            catch(Exception $e)
            {
                echo 'Hostinformationen konnten nicht aktualisiert werden.'.$e;
            }

            $pdo->closeConnection();
        }

        public static function loadFromDB($pdo,$entity_name,$parentEnity_id)
        {
            loadFromDB($pdo,$entity_name,$parentEnity_id);
        }


                /**
                 * Get the value of host_configuration_saved_data
                 */ 
                public function getHost_configuration_saved_data()
                {
                                return $this->host_configuration_saved_data;
                }

                /**
                 * Set the value of host_configuration_saved_data
                 *
                 * @return  self
                 */ 
                public function setHost_configuration_saved_data($host_configuration_saved_data)
                {
                                $this->host_configuration_saved_data = $host_configuration_saved_data;

                                return $this;
                }

        /**
         * Get the value of host_configuration_ip_addres_connect_external_device
         */ 
        public function getHost_configuration_ip_addres_connect_external_device()
        {
                return $this->host_configuration_ip_addres_connect_external_device;
        }

        /**
         * Set the value of host_configuration_ip_addres_connect_external_device
         *
         * @return  self
         */ 
        public function setHost_configuration_ip_addres_connect_external_device($host_configuration_ip_addres_connect_external_device)
        {
                $this->host_configuration_ip_addres_connect_external_device = $host_configuration_ip_addres_connect_external_device;

                return $this;
        }

                /**
                 * Get the value of host_configuration_ip_addres_data_backup
                 */ 
                public function getHost_configuration_ip_addres_data_backup()
                {
                                return $this->host_configuration_ip_addres_data_backup;
                }

                /**
                 * Set the value of host_configuration_ip_addres_data_backup
                 *
                 * @return  self
                 */ 
                public function setHost_configuration_ip_addres_data_backup($host_configuration_ip_addres_data_backup)
                {
                                $this->host_configuration_ip_addres_data_backup = $host_configuration_ip_addres_data_backup;

                                return $this;
                }

                /**
                 * Get the value of host_configuration_ip_addres_erp
                 */ 
                public function getHost_configuration_ip_addres_erp()
                {
                                return $this->host_configuration_ip_addres_erp;
                }

                /**
                 * Set the value of host_configuration_ip_addres_erp
                 *
                 * @return  self
                 */ 
                public function setHost_configuration_ip_addres_erp($host_configuration_ip_addres_erp)
                {
                                $this->host_configuration_ip_addres_erp = $host_configuration_ip_addres_erp;

                                return $this;
                }

                /**
                 * Get the value of host_configuration_virtualization
                 */ 
                public function getHost_configuration_virtualization()
                {
                                return $this->host_configuration_virtualization;
                }

                /**
                 * Set the value of host_configuration_virtualization
                 *
                 * @return  self
                 */ 
                public function setHost_configuration_virtualization($host_configuration_virtualization)
                {
                                $this->host_configuration_virtualization = $host_configuration_virtualization;

                                return $this;
                }
    }