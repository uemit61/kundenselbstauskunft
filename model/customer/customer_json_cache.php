<?php

 class Customer_json_cache
 {
    private $pdo;
    private $customer;
    
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
          ob_start(); 
        try
        {
            $con = $this->pdo->connectToDb();
            $query ="SELECT * FROM `customer_json_cache`";
            $stmt = $con->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

          
                header('Content-Type: application/json');
                echo $result[0]['json_data'];
           
        }
        catch(PDOException $e)
        {
            echo "laden der Zwichenspeicherung". $e->getMessage();
        }
         ob_end_flush();
    }





   
   
 }