<?php

    class Start_Model
    {
        private $token = null;
        private $view = null;
        private $pdo = null;
        private $customer_id = null;
        private $legacy_customer_id = null;
        private $token_id = null;
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

        function get_legacy_customer_id()
        {
            try
            {
                $con=$this->pdo->connect_to_db();

                $query = "SELECT Legacy_Customer_ID FROM `customer`  WHERE Customer_ID = :Customer_ID;";

                $stmt = $con->prepare($query);
                $stmt->bindValue(':Customer_ID',$this->customer_id, PDO::PARAM_STR);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->legacy_customer_id =$result['Legacy_Customer_ID'];

                session_start();
                    $_SESSION['Legacy_Customer_ID'] = $this->legacy_customer_id;
                session_write_close();
                
            }
            catch(PDOException $e)
            {
                echo "Fehler Legacy_Customer_Abfrage: ".$e->getMessage();
                exit();
            }
            $con=$this->pdo->close_connection();
        }
        
        function get_customer_id($user)
        {
            try
            {
                $con=$this->pdo->connect_to_db();

                $query = "SELECT Customer_ID,`Password` FROM `customer`  WHERE `Loginname` = :Loginname";

                $stmt = $con->prepare($query);
                $stmt->bindValue(':Loginname',$user, PDO::PARAM_STR);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                $this-> customer_id =$result['Customer_ID'];
                $this->password =$result['Password'];
                
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

                $query = "SELECT Logo
                            FROM `legacy_customer` 
                            WHERE Internet_Address = :Internet_Address"; // uri benutzten

                $stmt = $con->prepare($query);
                $stmt->bindValue(':Internet_Address',$this->internet_address);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                $base64_image =base64_encode($result['Logo']);
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

                $query = "  SELECT Json_Data
                            FROM `json_cache` 
                            WHERE Customer_ID = :Customer_ID";

                $stmt = $con->prepare($query);
                $stmt->bindValue(':Customer_ID',$this->customer_id);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                $file = fopen("C:\\xampp\\htdocs\\kundenselbstauskunft\\temp\\session\\mySession","w+");

                echo var_dump($result['Json_Data']);
                
                fwrite($file, $result['Json_Data']);
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
                $query = "UPDATE `token` SET Used = '1'  WHERE Token_ID = :Token_ID AND Customer_ID = :Customer_ID ;";
                $stmt = $con->prepare($query);
                $stmt->bindValue(':Token_ID', $this->token_id, PDO::PARAM_INT);
                $stmt->bindValue(':Customer_ID', $this->customer_id, PDO::PARAM_INT);
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
            $this->get_legacy_customer_id();
            $this->get_legacy_customer_logo();
            $this->get_json_data();
            
        }

        function check_token()
        {
            $result = '';

            try
            {
                $con = $this->pdo->connect_to_db();

                $query = "SELECT * FROM `token` where `Token_Key` = :Token";

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
            else if($result['Used'] == 0)
            {
                echo "<script> console.log('Das Token ist gültig. Passwortseite wird geöffnet.');</script>";

                $this->token_is_active = true;
                session_start();
                    $_SESSION['Customer_ID'] = $result['Customer_ID'];
                    $_SESSION['Token_ID'] = $result['Token_ID'];
                session_write_close();
                $this->customer_id = $result['Customer_ID'];
                $this->token_id = $result['Token_ID'];
            }
            $this->get_legacy_customer_logo();
        }

        function check_password($user,$password)
        {
            $this->get_customer_id($user);

            // hexa random reinhauen 
            define('DECODE', 'maypass61');
            $pepperPass = $password. DECODE;

            $bo = password_verify($pepperPass,'$argon2id$v=19$m=65536,t=4,p=1$'.$this->password);
            echo  'qq'.$bo;

            if(password_verify($pepperPass,'$argon2id$v=19$m=65536,t=4,p=1$'.$this->password))
            {
                session_start();
                    $_SESSION['page']= 'form_page';
                    $_SESSION['Customer_ID']= $this->customer_id;
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
                $this->customer_id= $_SESSION['Customer_ID'];
            session_write_close();


            try
            {
                $con = $this->pdo->connect_to_db();
                $query = "UPDATE `customer` 
                            SET `Password` = :Password  
                            WHERE `customer`.`Customer_ID` = :Customer_ID;";
                $stmt = $con->prepare($query);
                $stmt->bindValue(':Password', $password, PDO::PARAM_STR);
                $stmt->bindValue(':Customer_ID', $this->customer_id, PDO::PARAM_STR);
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
               $this->token_id =  $_SESSION['Token_ID'];
            session_write_close();

            $this->get_legacy_customer_id();
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
