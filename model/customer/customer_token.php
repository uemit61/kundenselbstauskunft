<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

        class Customer_token
        {
            private $customer_token_id;
            private $customer_token_key;
            private $customer_token_used;
            private $customer_id;
            private $customer_token;

            public function getCustomer_token_key()
            {
                return $this->customer_token_key;
            }

            public function getCustomer_token_used()
            {
                return $this->customer_token_used;
            }

            public function getCustomer_id()
            {
                return $this->customer_id;
            }

            public static function getCustomer_token($pdo,$token)
            {
                try
                {
                    $con = $pdo->connectToDb();

                    $query = "SELECT * FROM `customer_token` where `customer_token_key` = :customer_token_key";

                    $stmt = $con->prepare($query);
                    $stmt->bindValue(':customer_token_key', $token, PDO::PARAM_STR);
                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
                    $customer_token = $stmt->fetch();

                    

                    echo '<script>console.log("Daten erfolgreich übermittelt.")</script>';
                    $pdo->closeConnection();
                }
                catch(PDOException $e)
                {
                    echo "Fehler token: " . $e->getMessage();
                    exit();
                }

                if(!$customer_token)
                {
                    echo "<script> console.log('Das Token ist nicht gültig. Umleitung zum Login_Formurla.');</script>";
                }
                else if($customer_token->getCustomer_token_used()==false)
                {
                    echo "<script> console.log('Das Token ist gültig. Passwortseite wird geöffnet.');</script>";

                    
                    session_start();
                        $_SESSION['customer_id'] = $customer_token->getCustomer_id();
                    session_write_close();
                    
                }
                else if ($customer_token->getCustomer_token_used()==1)
                {
                    echo "<script> console.log('Das Token wurde schon gebraucht. Weiter zum Login');</script>";
                }

                return $customer_token;
            }

            public function setCustomer_token_key($customer_token_key)
            {
                // TODO TOKEN_GENERIEREN VIA CUSTOMER_ID IN DIE DB
            }

            public function setCustomer_token_used($pdo,$val)
            {
                try
                {   
                    $con = $pdo->connectToDb();
                    $query = "UPDATE `customer_token` SET customer_token_used = :val  WHERE customer_token_id = :customer_token_id AND customer_id = :customer_id ;";
                    $stmt = $con->prepare($query);
                    $stmt->bindValue(':val', $val, PDO::PARAM_INT);
                    $stmt->bindValue(':customer_token_id', $this->customer_token_id, PDO::PARAM_INT);
                    $stmt->bindValue(':customer_id', $this->customer_id, PDO::PARAM_INT);
                    $stmt->execute();
                    $pdo->closeConnection();
                }
                catch(PDOException $e)
                {
                    echo "Error Token: ".$e->getMessage();
                    die();
                }
                echo "connection closed";
            }
        }