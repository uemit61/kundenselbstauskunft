<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

 class Customer_json_cache
 {
    private $pdo = null;
    private $customer, $customer_id,$json_data,$json_cache_id, $data;
    
    function __construct($pdo,$customer,$data)
    {
        $this->pdo = $pdo;
        $this->customer =$customer;
        $this->data = $data;
    }

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

    public function load_json_to_db()
    {
        ob_clean();
        try
        {
            
            ob_clean();
            $con = $this->pdo->connectToDb();
            $customer_id = $this->customer->getCustomer_id();
            ob_clean();
            $query ="SELECT * FROM `customer_json_cache` WHERE customer_id = :customer_id ";
            $stmt = $con->prepare($query);
            $stmt->bindValue(':customer_id',$customer_id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            var_dump($result[0]['json_data']);
            
                ob_clean();
                header('Content-Type: application/json');
                echo $result[0]['json_data'];  
                ob_end_flush();
                
        }
        catch(PDOException $e)
        {
            ob_clean();
            header('Content-Type: application/json');
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);  // landet in deinem error-Callback (xhr.responseText)
            exit;
            ob_end_flush();
        }
    }
    public function save_json_to_db()
    {
        try
        {
           $customer_id = $this->customer->getCustomer_id();
            
            $con = $this->pdo->connectToDb();
           
            $query = "UPDATE `customer_json_cache` 
                         SET `json_data` = :json_data 
                       WHERE `customer_json_cache`.`customer_id` = :customer_id;";
            $stmt = $con->prepare($query);
            $stmt->bindValue(':json_data', $this->data);
            $stmt->bindValue(':customer_id',$customer_id);
            $stmt->execute();
            // echo "Daten wurden erfolgreich zwischen gespeichert.";
            $con =null;
        }
        catch (PDOException $e)
        {
            // echo "Error: " . $e->getMessage();
        }

       
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