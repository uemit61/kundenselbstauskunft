<?php

require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/sub_entity_interface.php';

class Customer implements SEInterface
{
    private $customer_id,
            $customer_login_name,
            $customer_password,
            $customer_infos_imported,
            $customer_admin,
            $customer_contact_information,
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

    // public function __construct()
    // {
    //     //
    // }
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

                // Sichtbar mit F12 Entwickler-Modus
                echo ' Kunde '.$user->customer_login_name.' wurde erfolgreich geladen';  
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
            echo 'Fehler beim laden vom Kunden'.$e;
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

    private function checkPassword($password,$loadedPassword)
    {
        echo "Checking password";
        $retVal = false;
        define('DECODE', 'maypass61'); // verstecken in env und random!! unsicher!
        $pepperPass = $password. DECODE;
        if(password_verify($pepperPass,'$argon2id$v=19$m=65536,t=4,p=1$'.$loadedPassword))
        {
            $retVal =true;
        }
        return $retVal;
    }


  
    public function setCustomer_password($customer_password,$pdo)
    {
        define('CODE', 'maypass61');
        $passwordWithPepper = $customer_password . CODE;
        $hashedPassword = password_hash($passwordWithPepper, PASSWORD_ARGON2ID);
        $customer_password = explode('p=1$', $hashedPassword)[1];
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

            echo "<script>console.log('".$hashedPassword."');</script>";
            
            echo "<script>console.log('Passwort gespeichert');</script>";
        }
        catch (PDOException $e)
        {
            echo "Error: ".$e->getMessage();
        }
    }
}