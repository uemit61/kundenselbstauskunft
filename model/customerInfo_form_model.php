<?php

/**
    * @file        index.php
    * @author      Ümit Yildirim hopes61@icloud.com
    * @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
    * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
    * @version     1.0.0
    * @since       2024-12-19
*/

class Customer_Model
{
    private $view;
    private $pdo;

    // private $legacy_customer_id = null;
    private $customer_id;
    private $contact_information_id;
    private $contact_person_id;
    private $contact_information_address_id;
    private $is_saved;
    private $customer_contact_information=[ 'contact_information_id'=>'',
                                            'contact_information_company_name'=>'',
                                            'contact_information_phone'=>'',
                                            'contact_information_email'=>'',
                                            'contact_information_saved_data' => false,
                                            'customer_id'=>'',];
    private $contact_information_contact_person=['contact_information_contact_person_id'=>'',
                                                'contact_information_contact_person_gender'=>'',
                                                'contact_information_contact_person_name'=>'',
                                                'contact_information_contact_person_surname'=>'',
                                                'contact_information_id'=>'',];
    private $contact_information_address=['contact_information_address_id'=>'',
                                            'contact_information_address_street'=>'',
                                            'contact_information_address_house_number'=>'',
                                            'contact_information_address_postcode'=>'',
                                            'contact_information_address_city'=>'',
                                            'contact_information_id'=>''];

    function __construct($view,$pdo)
    {
        $this->view=$view;
        $this->pdo=$pdo;
        session_start();
            $this->customer_id = $_SESSION['customer_id'];
            // $this->legacy_customer_id = $_SESSION['Legacy_customer_id'];
        session_write_close();
        $this->customer_contact_information['customer_id'] = $this->customer_id;
    }

    function create_database_infos($data)   // Über html id[]
    {
        
      
        foreach($data as $arrKey => $arrVal)
        {
          foreach($this->customer_contact_information as $key => $val) 
          {
                if($arrKey == $key)
                {
                    $this->customer_contact_information[$key] =$arrVal;
                }
          }
          foreach($this->contact_information_contact_person as $key => $val) 
          {
                if($arrKey == $key)
                {
                    $this->contact_information_contact_person[$key] =$arrVal;
                }
          }
          foreach($this->contact_information_address as $key => $val) 
          {
                if($arrKey == $key)
                {
                    $this->contact_information_address[$key] =$arrVal;
                }
          }
        }

        echo var_dump($this->customer_contact_information);
        echo var_dump($this->contact_information_contact_person);
        echo var_dump($this->contact_information_address);
        
    }

    function load_data_from_database()
    {
        try
        {
            $con = $this->pdo->connect_to_db();

            $query ="SELECT * 
                    FROM `customer_contact_information`
                    WHERE `customer_contact_information`.`customer_id` :customer_id;";

            $stmt = $con->prepare($query);

            $stmt->bindValue(':customer_id',$this->customer_id);

            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            echo "Daten wurden erfolgreich geladen. \n";

        }
        catch (PDOException $e)
        {
            echo "Feher load_from_db: ".$e->getMessage();
            die();
        }
    }
    function loading_infos()
    {
        try
        {
            $con = $this->pdo->connect_to_db();
            
            $query= "SELECT `contact_information_address`.`contact_information_address_id`, 
                            `contact_information_contact_person`.`contact_information_contact_person_id`, 
                            `customer_contact_information`.`contact_information_id`, 
                            `customer_contact_information`.`contact_information_saved_data` 
                    FROM    `customer_contact_information`
                    LEFT JOIN    `contact_information_contact_person` 
                            ON `contact_information_contact_person`.`contact_information_id` = `customer_contact_information`.`contact_information_id`
                    LEFT JOIN     `contact_information_address`
                            ON `contact_information_address`.`contact_information_id` = `customer_contact_information`.`contact_information_id`
                            
                    WHERE   `customer_contact_information`.`customer_id` = :customer_id;";

            $stmt = $con->prepare($query);
            $stmt->bindValue(':customer_id', $this->customer_id, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

           
           
            if($result['contact_information_saved_data'] == false || empty($result['contact_information_saved_data']))
            {
              
                $this->is_saved = false;
                $this->customer_contact_information['contact_information_saved_data'] = true;
            }
            else
            {
                $this->is_saved = true;
                $this->customer_contact_information['contact_information_saved_data'] = true;
                $this->contact_information_id = $result['contact_information_id'];
                $this->customer_contact_information['contact_information_id'] = $this->contact_information_id;

                $this->contact_person_id = $result['contact_information_contact_person_id'];
                $this->contact_information_contact_person['contact_information_contact_person_id'] = $this->contact_person_id;
                $this->contact_information_contact_person['contact_information_id'] = $this->contact_information_id;

                $this->contact_information_address_id = $result['contact_information_address_id'];
                $this->contact_information_address['contact_information_address_id'] = $this->contact_information_address_id;
                $this->contact_information_address['contact_information_id'] = $this->contact_information_id;
            }
            echo "Daten wurden erfolgreich geladen.\n";

            
        }
        catch (PDOException $e)
        {
            echo 'Fehler Loading: ' . $e->getMessage();
            die();
        }
        $con = $this->pdo->close_connection();
    }
    function save_to_database()
    {
        try
        {
            $con = $this->pdo->connect_to_db();
            $query='';

            if($this->is_saved)
            {
                $query ="UPDATE `customer_contact_information` 
                        SET `contact_information_company_name` = :contact_information_company_name, 
                            `contact_information_phone` = :contact_information_phone, 
                            `contact_information_email` = :contact_information_email, 
                            `contact_information_saved_data` = :contact_information_saved_data 
                        WHERE `contact_information_id` = :contact_information_id
                        AND `customer_id` = :customer_id;";
                $stmt= $con->prepare($query);
                $stmt->execute($this->customer_contact_information);

                $query ="UPDATE `contact_information_contact_person` 
                        SET `contact_information_contact_person_gender` = :contact_information_contact_person_gender,
                            `contact_information_contact_person_name` = :contact_information_contact_person_name, 
                            `contact_information_contact_person_surname` = :contact_information_contact_person_surname
                         WHERE `contact_information_contact_person_id` = :contact_information_contact_person_id 
                         AND `contact_information_id` = :contact_information_id ";
                $stmt = $con->prepare($query);
                $stmt->execute($this->contact_information_contact_person);

                $query ="UPDATE `contact_information_address` 
                        SET `contact_information_address_street` = :contact_information_address_street, 
                            `contact_information_address_house_number` = :contact_information_address_house_number,
                            `contact_information_address_postcode` = :contact_information_address_postcode, 
                            `contact_information_address_city` = :contact_information_address_city 
                        WHERE `contact_information_address_id` = :contact_information_address_id
                        AND `contact_information_id` = :contact_information_id";
                $stmt = $con->prepare($query);
                $stmt->execute($this->contact_information_address);
            }
            else
            {
                
                $con = $this->pdo->connect_to_db();
                $query ='INSERT INTO `customer_contact_information` (`contact_information_id`, `contact_information_company_name`, `contact_information_phone`, `contact_information_email`, `contact_information_saved_data`, `customer_id`) 
                        VALUES (:contact_information_id, :contact_information_company_name, :contact_information_phone, :contact_information_email, :contact_information_saved_data, :customer_id)';

                $stmt = $con->prepare($query);
                $stmt->execute($this->customer_contact_information);

                $query ='SELECT contact_information_id FROM `customer_contact_information` WHERE `customer_id` = :customer_id';
                $stmt = $con->prepare($query);
                $stmt->bindValue(':customer_id',$this->customer_id);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->contact_information_id = $result['contact_information_id'];
                $this->contact_information_contact_person['contact_information_id'] = $this->contact_information_id;
                $this->contact_information_address['contact_information_id'] = $this->contact_information_id;
                

            
                $query = 'INSERT INTO `contact_information_contact_person` (`contact_information_contact_person_id`, `contact_information_contact_person_gender`, `contact_information_contact_person_name`, `contact_information_contact_person_surname`, `contact_information_id`) 
                VALUES (:contact_information_contact_person_id, :contact_information_contact_person_gender , :contact_information_contact_person_name, :contact_information_contact_person_surname, :contact_information_id)';

                $stmt = $con->prepare($query);
                $stmt->execute($this->contact_information_contact_person);


                $query = 'INSERT INTO `contact_information_address` (`contact_information_address_id`, `contact_information_address_street`, `contact_information_address_house_number`, `contact_information_address_postcode`, `contact_information_address_city`, `contact_information_id`) 
                        VALUES (:contact_information_address_id, :contact_information_address_street , :contact_information_address_house_number, :contact_information_address_postcode, :contact_information_address_city, :contact_information_id)';

                $stmt = $con->prepare($query);
                $stmt->execute($this->contact_information_address);

                
            }
            echo "Daten wurden erfolgreich gespeichert.\n";
            
        }
        catch (PDOException $e)
        {
            $this->customer_contact_information['contact_information_saved_data'] = false;
            echo "Fehler ".$e->getMessage();
        }

        $con = $this->pdo->close_connection();
    }

    function updateView()
    {
        session_start();
            $logo = $_SESSION['Logo_Url'];
        session_write_close();
            $this->view->render($logo);
    }
}