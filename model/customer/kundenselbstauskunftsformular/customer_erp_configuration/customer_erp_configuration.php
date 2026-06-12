<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Customer_erp_configuration
{
    // private $erp_configuration_id,
    //         $erp_configuration_number_of_user,
    //         $customer_id;
        
    private $erp_configuration_service_order,
            $erp_configuration_order_conformation,
            $erp_configuration_order,
            $erp_configuration_offer,
            $erp_configuration_number_ranges,
            $erp_configuration_item_types,
            $erp_configuration_invoice,
            $erp_configuration_incoming_invoice,
            $erp_configuration_incoming_delivery_note,
            $erp_configuration_delivery_note,
            $erp_configuration_cancellation_invoice;

    public  $pdo,$customer, $customerId,$foreignKeyId, $primaeryKeyId, $primaeryKeyName, $foreignKeyName =null, $entityName = 'customer_erp_configuration', $entityList;

    public $formData;

    public function setErp_configuration_id($erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }

    public function setErp_configuration_number_of_user($erp_configuration_number_of_user)
    {
        $this->erp_configuration_number_of_user = $erp_configuration_number_of_user;
    }

    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    public function getErp_configuration_id()
    {
        return $this->erp_configuration_id;
    }

    public function getErp_configuration_number_of_user()
    {
        return $this->erp_configuration_number_of_user;
    }

    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    
    

    


    /**
     * Get the value of erp_configuration_service_order
     */ 
    public function getErp_configuration_service_order()
    {
        return $this->erp_configuration_service_order;
    }

    /**
     * Set the value of erp_configuration_service_order
     *
     * @return  self
     */ 
    public function setErp_configuration_service_order($erp_configuration_service_order)
    {
        $this->erp_configuration_service_order = $erp_configuration_service_order;

        return $this;
    }

            /**
             * Get the value of erp_configuration_order_conformation
             */ 
            public function getErp_configuration_order_conformation()
            {
                        return $this->erp_configuration_order_conformation;
            }

            /**
             * Set the value of erp_configuration_order_conformation
             *
             * @return  self
             */ 
            public function setErp_configuration_order_conformation($erp_configuration_order_conformation)
            {
                        $this->erp_configuration_order_conformation = $erp_configuration_order_conformation;

                        return $this;
            }

            /**
             * Get the value of erp_configuration_order
             */ 
            public function getErp_configuration_order()
            {
                        return $this->erp_configuration_order;
            }

            /**
             * Set the value of erp_configuration_order
             *
             * @return  self
             */ 
            public function setErp_configuration_order($erp_configuration_order)
            {
                        $this->erp_configuration_order = $erp_configuration_order;

                        return $this;
            }

            /**
             * Get the value of erp_configuration_offer
             */ 
            public function getErp_configuration_offer()
            {
                        return $this->erp_configuration_offer;
            }

            /**
             * Set the value of erp_configuration_offer
             *
             * @return  self
             */ 
            public function setErp_configuration_offer($erp_configuration_offer)
            {
                        $this->erp_configuration_offer = $erp_configuration_offer;

                        return $this;
            }

            /**
             * Get the value of erp_configuration_number_ranges
             */ 
            public function getErp_configuration_number_ranges()
            {
                        return $this->erp_configuration_number_ranges;
            }

            /**
             * Set the value of erp_configuration_number_ranges
             *
             * @return  self
             */ 
            public function setErp_configuration_number_ranges($erp_configuration_number_ranges)
            {
                        $this->erp_configuration_number_ranges = $erp_configuration_number_ranges;

                        return $this;
            }

            /**
             * Get the value of erp_configuration_item_types
             */ 
            public function getErp_configuration_item_types()
            {
                        return $this->erp_configuration_item_types;
            }

            /**
             * Set the value of erp_configuration_item_types
             *
             * @return  self
             */ 
            public function setErp_configuration_item_types($erp_configuration_item_types)
            {
                        $this->erp_configuration_item_types = $erp_configuration_item_types;

                        return $this;
            }

            /**
             * Get the value of erp_configuration_invoice
             */ 
            public function getErp_configuration_invoice()
            {
                        return $this->erp_configuration_invoice;
            }

            /**
             * Set the value of erp_configuration_invoice
             *
             * @return  self
             */ 
            public function setErp_configuration_invoice($erp_configuration_invoice)
            {
                        $this->erp_configuration_invoice = $erp_configuration_invoice;

                        return $this;
            }

            /**
             * Get the value of erp_configuration_incoming_invoice
             */ 
            public function getErp_configuration_incoming_invoice()
            {
                        return $this->erp_configuration_incoming_invoice;
            }

            /**
             * Set the value of erp_configuration_incoming_invoice
             *
             * @return  self
             */ 
            public function setErp_configuration_incoming_invoice($erp_configuration_incoming_invoice)
            {
                        $this->erp_configuration_incoming_invoice = $erp_configuration_incoming_invoice;

                        return $this;
            }

            /**
             * Get the value of erp_configuration_incoming_delivery_note
             */ 
            public function getErp_configuration_incoming_delivery_note()
            {
                        return $this->erp_configuration_incoming_delivery_note;
            }

            /**
             * Set the value of erp_configuration_incoming_delivery_note
             *
             * @return  self
             */ 
            public function setErp_configuration_incoming_delivery_note($erp_configuration_incoming_delivery_note)
            {
                        $this->erp_configuration_incoming_delivery_note = $erp_configuration_incoming_delivery_note;

                        return $this;
            }

            /**
             * Get the value of erp_configuration_delivery_note
             */ 
            public function getErp_configuration_delivery_note()
            {
                        return $this->erp_configuration_delivery_note;
            }

            /**
             * Set the value of erp_configuration_delivery_note
             *
             * @return  self
             */ 
            public function setErp_configuration_delivery_note($erp_configuration_delivery_note)
            {
                        $this->erp_configuration_delivery_note = $erp_configuration_delivery_note;

                        return $this;
            }

            /**
             * Get the value of erp_configuration_cancellation_invoice
             */ 
            public function getErp_configuration_cancellation_invoice()
            {
                        return $this->erp_configuration_cancellation_invoice;
            }

            /**
             * Set the value of erp_configuration_cancellation_invoice
             *
             * @return  self
             */ 
            public function setErp_configuration_cancellation_invoice($erp_configuration_cancellation_invoice)
            {
                        $this->erp_configuration_cancellation_invoice = $erp_configuration_cancellation_invoice;

                        return $this;
            }

      public function __construct($pdo=null,$customer=null, $primaeryKeyName = null,$foreignKeyName=null)
    {
        $this->pdo = $pdo;
        $this->customer = $customer;
        $this->foreignKeyName = $foreignKeyName;
        $this->primaeryKeyName = $primaeryKeyName;

        foreach(glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/customer_erp_configuration/*.php') as $path)
        {
            require_once $path;
            $filename = pathinfo($path, PATHINFO_FILENAME);
            $this->entityList[] =$filename;
        }       
    }

    public function loadFormData()
    {
        $this->foreignKeyId = $this->basic_info($this->pdo, $this->customer)['main_id'];
        $this->formData[$this->entityName] = $this->loadFromDB();

        foreach($this->entityList as $entity)
        {
            if($entity !== 'customer_erp_configuration')
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
        try
        {
            $con = $pdo->connectToDb();
            $query='SELECT  `customer_erp_configuration`.`erp_configuration_id`,
                            `customer_erp_configuration`.`erp_configuration_number_of_user`,
                            `customer_erp_configuration`.`erp_configuration_saved_data`
                    FROM    `customer_erp_configuration`
                    WHERE   `customer_erp_configuration`.`customer_id` = :customer_id';

            $stmt = $con->prepare($query);
            $stmt->bindValue(':customer_id', $customer->getCustomer_id());
            $stmt->execute();
            $pdo->closeConnection();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $retVal['main_id']=$result['erp_configuration_id'];
            $retVal['saved_data']=$result['erp_configuration_saved_data'];
        }
        catch (Exception $e)
        {
            echo 'Fehler erp_configuration_id'.$e->getMessage();
        }

        $pdo->closeConnection();

        return $retVal;
    }

       public static function saveEntity($pdo,$data,$entity_name)
    {
        saveEntityToDB($pdo, $data, $entity_name);
    }

    public static function createRecord($pdo,$data,$entity_name)
    {
        createRecordToDB($pdo,$data, $entity_name);
    }
    public function loadFromDB()
    {
        return loadFromDB($this->pdo,$this->entityName,$this->foreignKeyName,$this->customer->getCustomer_id());
    }
}