<?php

 class Customer_json_cache
 {
    private $pdo;

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function save_json_to_db($data)
    {
        try
        {
            // echo var_dump($data);
            $con = $this->pdo->connect_to_db();
            session_start();
                $customer_id = $_SESSION['customer_id'];
            session_write_close();

            $query = "UPDATE `customer_json_cache` SET `json_data` = :json_data WHERE `customer_json_cache`.`json_cache_id` = 1 AND `customer_json_cache`.`customer_id` = :customer_id; ";
    
            $stmt = $con->prepare($query);
            $stmt->bindValue(':json_data', $data);
            $stmt->bindValue(':customer_id',$customer_id);
            $stmt->execute();

            echo "Daten wurden erfolgreich zwischen gespeichert.";
    
            $con =null;
        }
        catch (PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }
 }