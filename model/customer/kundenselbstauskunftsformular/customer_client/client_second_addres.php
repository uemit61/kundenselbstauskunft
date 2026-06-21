<?php

class Client_second_addres
{
    
    private $client_second_addres_id;
    private $client_second_addres_street;
    private $client_second_addres_house_Number;
    private $client_second_addres_postcode;
    private $client_second_addres_city;
    private $client_id;

      public function getclient_second_addres_id()
    {
        return $this->client_second_addres_id;
    }

    
    public function setclient_second_addres_id($client_second_addres_id)
    {
        $this->client_second_addres_id = $client_second_addres_id;

        return $this;
    }
     
    public function getclient_second_addres_street()
    {
        return $this->client_second_addres_street;
    }

    
    public function setclient_second_addres_street($client_second_addres_street)
    {
        $this->client_second_addres_street = $client_second_addres_street;

        return $this;
    }

     
    public function getclient_second_addres_house_Number()
    {
        return $this->client_second_addres_house_Number;
    }

     
    public function setclient_second_addres_house_Number($client_second_addres_house_Number)
    {
        $this->client_second_addres_house_Number = $client_second_addres_house_Number;

        return $this;
    }

    
    public function getclient_second_addres_postcode()
    {
        return $this->client_second_addres_postcode;
    }

    
    public function setclient_second_addres_postcode($client_second_addres_postcode)
    {
        $this->client_second_addres_postcode = $client_second_addres_postcode;

        return $this;
    }

    
    public function getclient_second_addres_city()
    {
        return $this->client_second_addres_city;
    }

   
    public function setclient_second_addres_city($client_second_addres_city)
    {
        $this->client_second_addres_city = $client_second_addres_city;

        return $this;
    }

    public function getClient_id()
    {
        return $this->client_id;
    }

     
    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }
    
     public static function saveEntity($pdo,$client_second_addres)
    {
        try
        {
                $con = $pdo->connectToDb();
                $query="UPDATE  `client_second_addres` 
                        SET     `client_second_addres_street` = :client_second_addres_street,
                                `client_second_addres_house_Number` = :client_second_addres_house_Number, 
                                `client_second_addres_postcode` = :client_second_addres_postcode,
                                `client_second_addres_city` = :client_second_addres_city
                        WHERE   `client_id` = :client_id";
        $stmt = $con->prepare($query);
        $stmt->execute($client_second_addres);

        echo 'Mandanten-ZweitAdresse erfolgreich aktualisert.';

        
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von der Mandanten-ZweitAdresse'.$e;
        }
        $pdo->closeConnection();
    }

    public static function createRecord($pdo,$client_second_addres)
    {
        // var_dump($client_second_addres);
        // exit();
        try
        {
            $con = $pdo->connectToDb();
            $query='INSERT INTO  `client_second_addres` 
                            (`client_second_addres_id`, 
                            `client_second_addres_street`, 
                            `client_second_addres_house_Number`, 
                            `client_second_addres_postcode`,
                            `client_second_addres_city`,
                            `client_id`) 
                    VALUES  (:client_second_addres_id, 
                            :client_second_addres_street, 
                            :client_second_addres_house_Number, 
                            :client_second_addres_postcode,
                            :client_second_addres_city,
                            :client_id)';

            $stmt = $con->prepare($query);
            $stmt->execute($client_second_addres);
            echo 'Mandanten-ZweitAdresse  wurde erfolgreich eingefügt';
            $pdo->closeConnection();
        }
        catch(Exception $e)
        {
            echo 'Fehler beim einfügen der Mandanten-ZweitAdresse'.$e;
        }
    }
}