<?php

class Customer_erp_configuration
{
    private $erp_configuration_id,
            $erp_configuration_number_of_user,
            $customer_id;
    
    
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

    public static function createRecord($pdo,$customer_erp_configuration)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query='INSERT INTO `customer_erp_configuration` 
                                (`erp_configuration_id`, 
                                `erp_configuration_number_of_user`, 
                                `erp_configuration_saved_data`, 
                                `customer_id`) 
                    VALUES 
                                (:erp_configuration_id,
                                 :erp_configuration_number_of_user,
                                 :erp_configuration_saved_data,
                                 :customer_id)';
            $stmt = $con->prepare($query);
            $stmt->execute($customer_erp_configuration);
        }
        catch(Exception $e)
        {
            echo 'ERPUser wurde nicht gespeichert wurden nicht gespeichert'.$e;
        }
        $pdo->closeConnection();
    }

    public static function saveEntity($pdo,$customer_erp_configuration)
    {
        try
        {
            // var_dump($ustomer_erp_configuration);
            // exit();
            $con = $pdo->connectToDb();

            $query ='UPDATE `customer_erp_configuration` 
                        SET `erp_configuration_number_of_user` =  :erp_configuration_number_of_user, 
                            `erp_configuration_saved_data` = :erp_configuration_saved_data
                    WHERE   `erp_configuration_id` = :erp_configuration_id 
                    AND     `customer_id` = :customer_id';

            $stmt = $con->prepare($query);
            $stmt->execute($customer_erp_configuration);

            echo 'ERPUser  wurden aktualisiert.';
            
        }
        catch(Exception $e)
        {
            echo 'ERPUser konnten nicht aktualisiert werden.'.$e;
        }
            $pdo->closeConnection();
    }

    

}