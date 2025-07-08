<?php
    class customer_host_configuration
    {
        private $host_configuration_id,
                $customer_id;

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

                var_dump($result);
                
                $retVal['main_id']=$result['host_configuration_id'];
                $retVal['saved_data']=$result['host_configuration_saved_data'];
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
            $con->closeConnection();
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

    }