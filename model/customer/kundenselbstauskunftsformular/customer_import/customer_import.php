<?php
    class customer_import
    {
        private $import_id,
                $import_saved_data,
                $customer_id;
        
        private $import_accessories_item_data,
                $import_customer_billing_addres_data,
                $import_customer_contact_person_data,
                $import_customer_data,
                $import_customer_item_data,
                $import_item_data,
                $import_supplier_billing_addres_data,
                $import_supplier_contact_person_data,
                $import_supplier_data,
                $import_supplier_item_data;
                
        public  $pdo, $customer,$foreignKeyId, $primaeryKeyId, $primaeryKeyName, $foreignKeyName =null, $entityName = 'customer_import';

        public $formData, $entityList;


        public function getimport_id()
        {
            return $this->import_id;
        }

        public function setimport_id($import_id)
        {
            $this->import_id = $import_id;
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

         public function getimport_saved_data()
                {
                    return $this->import_saved_data;
                }

                /**
                 * Set the value of import_saved_data
                 *
                 * @return  self
                 */ 
                public function setimport_saved_data($import_saved_data)
                {
                                $this->import_saved_data = $import_saved_data;

                                return $this;
                }

        /**
         * Get the value of import_accessories_item_data
         */ 
        public function getImport_accessories_item_data()
        {
                return $this->import_accessories_item_data;
        }

        /**
         * Set the value of import_accessories_item_data
         *
         * @return  self
         */ 
        public function setImport_accessories_item_data($import_accessories_item_data)
        {
                $this->import_accessories_item_data = $import_accessories_item_data;

                return $this;
        }

        /**
         * Get the value of import_customer_billing_addres_data
         */ 
        public function getImport_customer_billing_addres_data()
        {
                        return $this->import_customer_billing_addres_data;
        }

        /**
         * Set the value of import_customer_billing_addres_data
         *
         * @return  self
         */ 
        public function setImport_customer_billing_addres_data($import_customer_billing_addres_data)
        {
                        $this->import_customer_billing_addres_data = $import_customer_billing_addres_data;

                        return $this;
        }

        /**
         * Get the value of import_customer_contact_person_data
         */ 
        public function getImport_customer_contact_person_data()
        {
                        return $this->import_customer_contact_person_data;
        }

        /**
         * Set the value of import_customer_contact_person_data
         *
         * @return  self
         */ 
        public function setImport_customer_contact_person_data($import_customer_contact_person_data)
        {
                        $this->import_customer_contact_person_data = $import_customer_contact_person_data;

                        return $this;
        }

        /**
         * Get the value of import_customer_data
         */ 
        public function getImport_customer_data()
        {
                        return $this->import_customer_data;
        }

        /**
         * Set the value of import_customer_data
         *
         * @return  self
         */ 
        public function setImport_customer_data($import_customer_data)
        {
                        $this->import_customer_data = $import_customer_data;

                        return $this;
        }

        /**
         * Get the value of import_customer_item_data
         */ 
        public function getImport_customer_item_data()
        {
                        return $this->import_customer_item_data;
        }

        /**
         * Set the value of import_customer_item_data
         *
         * @return  self
         */ 
        public function setImport_customer_item_data($import_customer_item_data)
        {
                        $this->import_customer_item_data = $import_customer_item_data;

                        return $this;
        }

        /**
         * Get the value of import_item_data
         */ 
        public function getImport_item_data()
        {
                        return $this->import_item_data;
        }

        /**
         * Set the value of import_item_data
         *
         * @return  self
         */ 
        public function setImport_item_data($import_item_data)
        {
                        $this->import_item_data = $import_item_data;

                        return $this;
        }

        /**
         * Get the value of import_supplier_billing_addres_data
         */ 
        public function getImport_supplier_billing_addres_data()
        {
                        return $this->import_supplier_billing_addres_data;
        }

        /**
         * Set the value of import_supplier_billing_addres_data
         *
         * @return  self
         */ 
        public function setImport_supplier_billing_addres_data($import_supplier_billing_addres_data)
        {
                        $this->import_supplier_billing_addres_data = $import_supplier_billing_addres_data;

                        return $this;
        }

        /**
         * Get the value of import_supplier_contact_person_data
         */ 
        public function getImport_supplier_contact_person_data()
        {
                        return $this->import_supplier_contact_person_data;
        }

        /**
         * Set the value of import_supplier_contact_person_data
         *
         * @return  self
         */ 
        public function setImport_supplier_contact_person_data($import_supplier_contact_person_data)
        {
                        $this->import_supplier_contact_person_data = $import_supplier_contact_person_data;

                        return $this;
        }

        /**
         * Get the value of import_supplier_data
         */ 
        public function getImport_supplier_data()
        {
                        return $this->import_supplier_data;
        }

        /**
         * Set the value of import_supplier_data
         *
         * @return  self
         */ 
        public function setImport_supplier_data($import_supplier_data)
        {
                        $this->import_supplier_data = $import_supplier_data;

                        return $this;
        }

        /**
         * Get the value of import_supplier_item_data
         */ 
        public function getImport_supplier_item_data()
        {
                        return $this->import_supplier_item_data;
        }

        /**
         * Set the value of import_supplier_item_data
         *
         * @return  self
         */ 
        public function setImport_supplier_item_data($import_supplier_item_data)
        {
                        $this->import_supplier_item_data = $import_supplier_item_data;

                        return $this;
        }

        public function __construct($pdo=null,$customer=null, $primaeryKeyName = null,$foreignKeyName=null)
        {
            $this->pdo = $pdo;
            $this->customer = $customer;
            $this->foreignKeyName = $foreignKeyName;
            $this->primaeryKeyName = $primaeryKeyName;
            
            foreach(glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/customer_import/*.php') as $path)
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
                if($entity !== 'customer_import')
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
                $query='SELECT  `customer_import`.`import_id`,
                                `customer_import`.`import_saved_data`
                        FROM    `customer_import`
                        WHERE   `customer_import`.`customer_id` = :customer_id';

                $stmt = $con->prepare($query);
                $stmt->bindValue(':customer_id', $customer->getCustomer_id());
                $stmt->execute();
                $pdo->closeConnection();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                // var_dump($result);
                // exit();

                if($result)
                {
                    $retVal['main_id']=$result['import_id'];
                    $retVal['saved_data']=$result['import_saved_data'];
                }
            }
            catch (Exception $e)
            {
                echo 'Fehler import_id'.$e->getMessage();
                $pdo->closeConnection();
            }

            return $retVal;
        }

        public static function createRecord($pdo,$customer_id)
        {
            try
            {
                $con = $pdo->connectToDb();
                $query ='INSERT INTO `customer_import` 
                                    (`import_id`, 
                                    `import_saved_data`, 
                                    `customer_id`) 
                            VALUES  ("",
                                    1,
                                    :customer_id)';
                $stmt= $con->prepare($query);
                $stmt->bindValue(':customer_id', $customer_id);
                $stmt->execute();
                echo 'ImportInfo Ok';
            }
            catch (Exception $e)
            {
                echo 'Fehler import: ' .$e->getMessage();
            }
            $pdo->closeConnection();
        }

         public static function saveEntity($pdo,$customer_import)
        {
            try
            {
                $con = $pdo->connectToDb();
                $query ="UPDATE `customer_import` 
                        SET `import_saved_data` = :import_saved_data 
                        WHERE `customer_import`.`import_id` = :import_id
                        AND `customer_id` = :customer_id;";
                $stmt= $con->prepare($query);
                $stmt->execute($customer_import);

                echo 'ImportInfos  wurden aktualisiert.';
            }
            catch(Exception $e)
            {
                echo 'ImportInfos konnten nicht aktualisiert werden.'.$e;
            }

            $pdo->closeConnection();
        }

        public static function loadFromDB($pdo,$entity_name,$parentEnity_id)
        {
            loadFromDB($pdo,$entity_name,$parentEnity_id);
        }


             
               
    } 