<?php
    class customer_import
    {
        private $import_id,
                $import_saved_data,
                $customer_id;

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

                $retVal['main_id']=$result['import_id'];
                $retVal['saved_data']=$result['import_saved_data'];
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


                /**
                 * Get the value of import_saved_data
                 */ 
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
    }