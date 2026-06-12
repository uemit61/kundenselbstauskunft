<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

 class Customer_json_cache
 {
    private $pdo = null;
    private $customer_id, $json_data,$json_cache_id;
    
     public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */ 
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function save_json_to_db($data,$customer)
    {
        try
        {
           $this->setCustomer($customer);

           $customer_id = $this->customer->getCustomer_id();
            
            $con = $this->pdo->connectToDb();
;
           
            $query = "UPDATE `customer_json_cache` 
                         SET `json_data` = :json_data 
                       WHERE `customer_json_cache`.`customer_id` = :customer_id;";
            $stmt = $con->prepare($query);
            $stmt->bindValue(':json_data', $data);
            $stmt->bindValue(':customer_id',$customer_id);
            $stmt->execute();
            // echo "Daten wurden erfolgreich zwischen gespeichert.";
            $con =null;
        }
        catch (PDOException $e)
        {
            // echo "Error: " . $e->getMessage();
        }

        // $this->get_json_from_db();
    }

    public function get_json_from_db()
    {
        var_dump('methode wurde auf gerufen!');
        ob_clean();
        try
        {
            
            ob_clean();
            if($this->pdo == null)
            {
                var_dump('conection wird geladen');
                require_once 'C:\xampp\htdocs\kundenselbstauskunft\connection.php';
                $this->pdo = new Connection();
            }

                $con = $this->pdo->connectToDb();
            ob_clean();
            $query ="SELECT * FROM `customer_json_cache` WHERE customer_id = 1 ";
            $stmt = $con->prepare($query);
           
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, self::class);
            $result = $stmt->fetch();

            
            
                ob_clean();
                header('Content-Type: application/json');
                echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                ob_end_flush();
                
        }
        catch(PDOException $e)
        {
            echo "laden der Zwichenspeicherung". $e->getMessage();
        }
        ob_end_flush();
       
    }





   
   
 }