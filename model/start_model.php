<?php

    class Start_Model
    {
        private $token = null;
        private $view = null;
        private $pdo = null;
        private $customer_id = null;
        private $legacy_customer_id = null;
        private $customer_token_id = null;
        private $internet_address = null;
        private $token_is_active = false;
        private $logo = null;
        private $password = null;

        function __construct($token = null,$view,$pdo=null)
        {
            $this->token = $token;
            $this->pdo = $pdo;
            $this->view = $view;
        }

        // function get_legacy_customer_id()
        // {
        //     try
        //     {
        //         $con=$this->pdo->connect_to_db();

        //         $query = "SELECT Legacy_customer_id FROM `customer`  WHERE customer_id = :customer_id;";

        //         $stmt = $con->prepare($query);
        //         $stmt->bindValue(':customer_id',$this->customer_id, PDO::PARAM_STR);
        //         $stmt->execute();

        //         $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //         $this->legacy_customer_id =$result['Legacy_customer_id'];

        //         session_start();
        //             $_SESSION['Legacy_customer_id'] = $this->legacy_customer_id;
        //         session_write_close();
                
        //     }
        //     catch(PDOException $e)
        //     {
        //         echo "Fehler Legacy_Customer_Abfrage: ".$e->getMessage();
        //         exit();
        //     }
        //     $con=$this->pdo->close_connection();
        // }
        
        function get_customer_id($user)
        {
            try
            {
                $con=$this->pdo->connect_to_db();

                $query = "SELECT customer_id,customer_password FROM `customer`  WHERE `customer_login_name` = :Loginname";

                $stmt = $con->prepare($query);
                $stmt->bindValue(':Loginname',$user, PDO::PARAM_STR);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                $this-> customer_id =$result['customer_id'];
                $this->password =$result['customer_password'];
                
            }
            catch(PDOException $e)
            {
                echo "Fehler Customer_Abfrage: ".$e->getMessage();
                exit();
            }
            $con=$this->pdo->close_connection();
        }

        function get_legacy_customer_logo()
        {
            
            $this->internet_address = explode('/',$_SERVER['REQUEST_URI'])[1]; // Später mit $_SERVER['HTTP_HOST'] arbeiten
            try
            {
                $con = $this->pdo->connect_to_db();

                $query = "SELECT website_configuration_logo
                            FROM `website_configuration` 
                            WHERE  website_configuration_internet_address = :Internet_Address"; // uri benutzten

                $stmt = $con->prepare($query);
                $stmt->bindValue(':Internet_Address',$this->internet_address);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                $base64_image =base64_encode($result['website_configuration_logo']);
                $this->logo = "data:image/png;base64," . $base64_image;

                session_start();
                    $_SESSION['Logo_Url'] = $this->logo;
                session_write_close();

                

            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                echo "Fehler Legacy_Logo: ".$e->getMessage();
                exit();
            }
            
            $con=$this->pdo->close_connection();
        }

        function get_json_data()
        {
            try
            {
                $con = $this->pdo->connect_to_db();

                $query = "  SELECT json_data
                            FROM `customer_json_cache` 
                            WHERE customer_id = :customer_id";

                $stmt = $con->prepare($query);
                $stmt->bindValue(':customer_id',$this->customer_id);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                $file = fopen("C:\\xampp\\htdocs\\kundenselbstauskunft\\temp\\session\\mySession","w+");

                echo var_dump($result['json_data']);
                
                fwrite($file, $result['json_data']);
                fclose($file);
                    

                echo "Zwichenspeicher wurde geladen.";
            }
            catch (PDOException $e)
            {
                echo "Fehler json_data, logo: " . $e->getMessage();
                exit();
            }
            $con=$this->pdo->close_connection();
        }

        function set_used_token()
        {
            try
            {   
                $con = $this->pdo->connect_to_db();
                $query = "UPDATE `customer_token` SET customer_token_used = '1'  WHERE customer_token_id = :customer_token_id AND customer_id = :customer_id ;";
                $stmt = $con->prepare($query);
                $stmt->bindValue(':customer_token_id', $this->customer_token_id, PDO::PARAM_INT);
                $stmt->bindValue(':customer_id', $this->customer_id, PDO::PARAM_INT);
                $stmt->execute();
            }
            catch(PDOException $e)
            {
                echo "Error Token: ".$e->getMessage();
                die();
            }
            $con = null;
            echo "connection closed";
        }

        function get_infos_from_database()
        {
            // $this->get_legacy_customer_id();
            $this->get_legacy_customer_logo();
            $this->get_json_data();
            
        }

        function check_token()
        {
            $result = '';

            try
            {
                $con = $this->pdo->connect_to_db();

                $query = "SELECT * FROM `customer_token` where `customer_token_key` = :Token";

                $stmt = $con->prepare($query);
                $stmt->bindValue(':Token', $this->token, PDO::PARAM_STR);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                echo '<script>console.log("Daten erfolgreich übermittelt.")</script>';
            }
            catch(PDOException $e)
            {
                echo "Fehler token: " . $e->getMessage();
                exit();
            }
            $con = $this->pdo->close_connection();

            if(!$result)
            {
               echo "<script> console.log('Das Token ist nicht gültig. Umleitung zum Login_Formular.');</script>";
            }
            else if($result['customer_token_used'] == 0)
            {
                echo "<script> console.log('Das Token ist gültig. Passwortseite wird geöffnet.');</script>";

                $this->token_is_active = true;
                session_start();
                    $_SESSION['customer_id'] = $result['customer_id'];
                    $_SESSION['customer_token_id'] = $result['customer_token_id'];
                session_write_close();
                $this->customer_id = $result['customer_id'];
                $this->customer_token_id = $result['customer_token_id'];
            }
            $this->get_legacy_customer_logo();
        }

        function check_password($user,$password)
        {
            $this->get_customer_id($user);

            // hexa random reinhauen 
            define('DECODE', 'maypass61'); // verstecken unsicher!!! siehe vorschlag chatgpt!!!
            $pepperPass = $password. DECODE;

            $bo = password_verify($pepperPass,'$argon2id$v=19$m=65536,t=4,p=1$'.$this->password);
            echo  'qq'.$bo;

            if(password_verify($pepperPass,'$argon2id$v=19$m=65536,t=4,p=1$'.$this->password))
            {
                session_start();
                    $_SESSION['page']= 'form_page';
                    $_SESSION['customer_id']= $this->customer_id;
                session_write_close();
                $this->get_infos_from_database();
            }
            else                         
            {
                $this->update_view(true);
            }
        }

        function save_password($password)
        {
            define('CODE', 'maypass61');
            $passwordWithPepper = $password . CODE;
            $hashedPassword = password_hash($passwordWithPepper, PASSWORD_ARGON2ID);
            $password = explode('p=1$', $hashedPassword)[1];
            session_start();
                $this->customer_id= $_SESSION['customer_id'];
            session_write_close();


            try
            {
                $con = $this->pdo->connect_to_db();
                $query = "UPDATE `customer` 
                            SET `customer_password` = :password  
                            WHERE `customer`.`customer_id` = :customer_id;";
                $stmt = $con->prepare($query);
                $stmt->bindValue(':password', $password, PDO::PARAM_STR);
                $stmt->bindValue(':customer_id', $this->customer_id, PDO::PARAM_STR);
                $stmt->execute();

                echo "<script>console.log('".$hashedPassword."');</script>";
                
                echo "<script>console.log('Passwort gespeichert');</script>";
                
                
            }
            catch (PDOException $e)
            {
                echo "Error: ".$e->getMessage();
            }
            
            $con = null;
            session_start();
               $this->customer_token_id =  $_SESSION['customer_token_id'];
            session_write_close();

            // $this->get_legacy_customer_id();
            $this->set_used_token();
            $this->token_is_active = false;
        }

        function update_view($login_failed=false)
        {
            $this->get_legacy_customer_logo();
            $this->view->render($this->token_is_active,$this->logo,$login_failed);
            die();
        }
    }
