<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/sub_entity_interface.php';

class Customer
{
    private $customer_id,
            $customer_login_name,
            $customer_password,
            $customer_infos_imported,
            $customer_admin;

    private $customer_contact_information,
            $customer_host_configuration,
            $customer_import,
            $customer_client,
            $customer_erp_configuration,
            $customer_token;

    //Getter  Passwort ist privat!!!
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    public function getCustomer_login_name()
    {
        return $this->customer_login_name;
    }

    public function getCustomer_infos_imported()
    {
        return $this->customer_infos_imported;
    }

    public function getAdmin()
    {
        return $this->customer_admin;
    }

    private function getCustomer_password()
    {
        return $this->customer_password;
    }


    public static function createRecord($pdo,...$attr)
    {
        $con = $pdo->connectToDb();
        $query ='INSERT INTO `customer` 
                (`customer_id`, `customer_login_name`, `customer_password`,`customer_infos_imported`,`customer_admin`) 
                VALUES (NULL, :customer_login_name, :customer_password, :customer_infos_imported, 0)';
        $stmt = $con->prepare($query);
        $stmt->execute($attr);
    }

 
    //Statische Mehtode zum generieren von einem User
    public static function loadEntity($pdo,$login_name,$password=0)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query="SELECT  *
                    FROM    `customer`
                    WHERE   `customer_login_name` = :customer_login_name";

            $stmt = $con->prepare($query);
            $stmt->bindValue(':customer_login_name',$login_name);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
            $user = $stmt->fetch();


            if($user && $user->checkPassword($password,$user->getCustomer_password()))
            {
                session_start();
                    $_SESSION['page']= 'form_page';
                    $_SESSION['customer']= $user;
                session_write_close();

                $pdo->closeConnection();
            }
            else
            {
                $user = false;
            }
            return $user;
        }
        catch(PDOException $e)
        {
            error_log($e);
            return false;
        }
    }

    /*
    * $attr "-Dimensionale Arrys $attr =[attribut_name => value]
    * Der attribut_name muss wie der in der Datenbank sein!
    * wenn kein Attribut eingefügt wird, wird mit ReflectionClass gearbeitet,
    * die aktuellen Werte, werden in der Datenbank aktualisiert
    */
    public static function saveEntity($pdo,$customer,...$attr)
    {
        $con = $pdo->connectToDb();
        $arr = [];
    
        if(count($attr) != 0) 
        {
            $i=1;
            $query ='UPDATE `customer` SET ';
            foreach($attr as $name => $value)
            {
                if($i != count($attr))
                    $query = $query+'`'+$name+'` = :'+$name+',';
                else
                    $query = $query+'`'+$name+'` = :'+$name+'WHERE `customer_id` = :customer_id';
                $i = $i+1;
            }
            $stmt = $con->prepare($query);
            $stmt->execute($attr);
        }
        else
        {
            $query = "  UPDATE  `customer`
                        SET     `customer_login_name` = :customer_login_name, 
                                `customer_password` = :customer_password, 
                                `customer_infos_imported`= :customer_infos_imported, 
                                `customer_admin` =:customer_admin
                        WHERE   `customer_id = :customer_id ";

            $ref = new ReflectionClass($customer);
            $props = $ref->getProperties();
            foreach($props as $prop)
            {
                $arr[$prop->getName()] = $prop->getValue($customer);
            }
                $stmt = $con->prepare($query);
                /*
                * alle Attribute (Properties) einer Klasse anzeigen,
                * unabhängig davon, ob es Getter gibt oder ob sie public, 
                * protected oder private sind.
                */
                $stmt->execute($arr);
        }
    }

    private function addPepper($password)
    {
        $env=parse_ini_file(__DIR__ . '/../../.env');
        $retVal ='';
        
        if(!empty($env['PASSWORD_PEPPER']))
        {
            $retVal = $password.$env['PASSWORD_PEPPER'];
        }
        else
        {
            
            error_log('PASSWORD_PEPPER fehlt in der .env');
        }
        return $retVal;
    }
    private function checkPassword($password,$loadedPassword)
    {
        $retVal = false;
        $pepperPass = $this->addPepper($password);

        if(password_verify($pepperPass,$loadedPassword))
        {
            $retVal =true;
        }
        
        return $retVal;
    }
  
    public function setCustomer_password($customer_password,$pdo)
    {
        $passwordWithPepper =$this->addPepper( $customer_password);

        if(empty($passwordWithPepper))
            die();

        $customer_password = password_hash($passwordWithPepper, PASSWORD_ARGON2ID);
        
        session_start();
            $this->customer_id = $_SESSION['customer_id'];
        session_write_close();
            
        try
        {
            $con = $pdo->connectToDb();
            $query = "  UPDATE `customer` 
                        SET `customer_password` = :password  
                        WHERE `customer`.`customer_id` = :customer_id;";
            $stmt = $con->prepare($query);
            $stmt->bindValue(':password', $customer_password, PDO::PARAM_STR);
            $stmt->bindValue(':customer_id', $this->customer_id, PDO::PARAM_STR);
            $stmt->execute();
        
        }
        catch (PDOException $e)
        {
           error_log($e);
        }
    }

    /**
     * Get the value of customer_contact_information
     */ 
    public function getCustomer_contact_information()
    {
        return $this->customer_contact_information;
    }

    /**
     * Set the value of customer_contact_information
     *
     * @return  self
     */ 
    public function setCustomer_contact_information($customer_contact_information)
    {
        $this->customer_contact_information = $customer_contact_information;

        return $this;
    }

            /**
             * Get the value of customer_host_configuration
             */ 
            public function getCustomer_host_configuration()
            {
                        return $this->customer_host_configuration;
            }

            /**
             * Set the value of customer_host_configuration
             *
             * @return  self
             */ 
            public function setCustomer_host_configuration($customer_host_configuration)
            {
                        $this->customer_host_configuration = $customer_host_configuration;

                        return $this;
            }

            /**
             * Get the value of customer_import
             */ 
            public function getCustomer_import()
            {
                        return $this->customer_import;
            }

            /**
             * Set the value of customer_import
             *
             * @return  self
             */ 
            public function setCustomer_import($customer_import)
            {
                        $this->customer_import = $customer_import;

                        return $this;
            }

            /**
             * Get the value of customer_client
             */ 
            public function getCustomer_client()
            {
                        return $this->customer_client;
            }

            /**
             * Set the value of customer_client
             *
             * @return  self
             */ 
            public function setCustomer_client($customer_client)
            {
                        $this->customer_client = $customer_client;

                        return $this;
            }

            /**
             * Get the value of customer_erp_configuration
             */ 
            public function getCustomer_erp_configuration()
            {
                        return $this->customer_erp_configuration;
            }

            /**
             * Set the value of customer_erp_configuration
             *
             * @return  self
             */ 
            public function setCustomer_erp_configuration($customer_erp_configuration)
            {
                        $this->customer_erp_configuration = $customer_erp_configuration;

                        return $this;
            }

            /**
             * Get the value of customer_token
             */ 
            public function getCustomer_token()
            {
                        return $this->customer_token;
            }

            /**
             * Set the value of customer_token
             *
             * @return  self
             */ 
            public function setCustomer_token($customer_token)
            {
                        $this->customer_token = $customer_token;

                        return $this;
            }
}