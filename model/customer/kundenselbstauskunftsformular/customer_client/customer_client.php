<?php 

class Customer_client
{
    public function basic_info($pdo,$customer)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query='SELECT  count(*) AS "numberClient"
                    FROM    `customer_client`';
                    
            $stmt = $con->prepare($query);
            $stmt->execute();
            $pdo->closeConnection();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $retVal['numberClient']=$result['numberClient'];
        }
        catch (Exception $e)
        {
            echo 'Fehler clients_id'.$e->getMessage();
        }

        $pdo->closeConnection();

        return $retVal;
    }

    public static function createRecord($pdo,$customer_client)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query='INSERT INTO `customer_client` 
                                (`client_id`, 
                                `client_name`, 
                                `client_company_name`, 
                                `client_phone_number`, 
                                `client_email`, 
                                `client_saved_data`, 
                                `customer_id`) 
                    VALUES 
                                (:client_id,
                                 :client_name,
                                 :client_company_name,
                                 :client_phone_number,
                                 :client_email,
                                 :client_saved_data, :customer_id)';
            $stmt = $con->prepare($query);
            $stmt->execute($customer_client);
        }
        catch(Exception $e)
        {
            echo 'Client wurde nicht gespeichert wurden nicht gespeichert'.$e;
        }
        $pdo->closeConnection();
    }

    public static function saveEntity($pdo,$customer_client)
    {
        try
        {
            // var_dump($customer_client);
            // exit();
            $con = $pdo->connectToDb();

            $query ='UPDATE `customer_client` 
                        SET `client_name` =  :client_name, 
                            `client_company_name` = :client_company_name, 
                            `client_phone_number` = :client_phone_number, 
                            `client_email` = :client_email, 
                            `client_saved_data` = :client_saved_data
                    WHERE  `customer_client`.`client_id` = :client_id AND `customer_client`.`customer_id` = :customer_id';

            $stmt = $con->prepare($query);
            $stmt->execute($customer_client);

            echo 'Clientinfo  wurden aktualisiert.';
            
        }
        catch(Exception $e)
        {
            echo 'ClientInfo konnten nicht aktualisiert werden.'.$e;
        }
            $pdo->closeConnection();
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

}
    