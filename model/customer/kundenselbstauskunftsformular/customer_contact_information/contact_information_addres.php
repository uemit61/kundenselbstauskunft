<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
    class Contact_information_addres 
    {
        public $contact_information_addres_id, 
                $contact_information_addres_street,
                $contact_information_addres_house_number,
                $contact_information_addres_postcode,
                $contact_information_addres_city,
                $contact_information_id;

        
        public function getContact_information_addres_id()
        {
            return $this->contact_information_addres_id;
        }

        public function setContact_information_addres_id($contact_information_addres_id)
        {
            $this->contact_information_addres_id = $contact_information_addres_id;
            return $this;
        }

       
        public function getContact_information_addres_street()
        {
            return $this->contact_information_addres_street;
        }

      
        public function setContact_information_addres_street($contact_information_addres_street)
        {
            $this->contact_information_addres_street = $contact_information_addres_street;
            return $this;
        }

        public function getContact_information_addres_house_number()
        {
            return $this->contact_information_addres_house_number;
        }

    
        public function setContact_information_addres_house_number($contact_information_addres_house_number)
        {
            $this->contact_information_addres_house_number = $contact_information_addres_house_number;
            return $this;
        }

       
        public function getContact_information_addres_postcode()
        {
            return $this->contact_information_addres_postcode;
        }

       
        public function setContact_information_addres_postcode($contact_information_addres_postcode)
        {
            $this->contact_information_addres_postcode = $contact_information_addres_postcode;
            return $this;
        }

      
        public function getContact_information_addres_city()
        {
            return $this->contact_information_addres_city;
        }

      
        public function setContact_information_addres_city($contact_information_addres_city)
        {
            $this->contact_information_addres_city = $contact_information_addres_city;
            return $this;
        }

       
        public function getContact_information_id()
        {
            return $this->contact_information_id;
        }
        public function setContact_information_id($contact_information_id)
        {
            $this->contact_information_id = $contact_information_id;
            return $this;
        }

        public static function loadEntity($pdo,$contact_information_addres_id,$arg=0)
        {
             try
            {
                $con = $pdo->connectToDb();
                $query ="   SELECT  * 
                            FROM    `contact_information_addres`
                            WHERE   `contact_information_addres`.`contact_information_addres_id` =:contact_information_addres_id";
                $stmt = $con->prepare($query);
                $stmt->bindValue(':contact_information_addres_id',$contact_information_addres_id);
                $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
                $contact_information_addres = $stmt->fetch();
               
            }
            catch(Exception $e)
            {
                echo 'Fehler beim laden der Adresse'.$e;
            }
            $pdo->closeConnection();
            return $contact_information_addres;
        }

        public static function createRecord($pdo,$contact_information_addres)
        {
           
            try
            {
                $con = $pdo->connectToDb();
                $query='INSERT INTO `contact_information_addres` 
                                    (`contact_information_addres_id`, 
                                    `contact_information_addres_street`, 
                                    `contact_information_addres_house_number`, 
                                    `contact_information_addres_postcode`, 
                                    `contact_information_addres_city`, 
                                    `contact_information_id`) 
                            VALUES (:contact_information_addres_id, 
                                    :contact_information_addres_street , 
                                    :contact_information_addres_house_number, 
                                    :contact_information_addres_postcode, 
                                    :contact_information_addres_city, 
                                    :contact_information_id)';

                $stmt = $con->prepare($query);
                $stmt->execute($contact_information_addres);

                echo 'Kontaktadresse wurde gespeichert';
                $pdo->closeConnection();
            }
            catch(Exception $e) 
            {
                echo 'Kontaktadresse konnte nicht gespeichert werden.'.$e;
            }
    }

        public static function saveEntity($pdo, $contact_information_addres)
        {
            try
            {
                $con = $pdo->connectToDb();
                $query="UPDATE  `contact_information_addres` 
                        SET     `contact_information_addres_street` = :contact_information_addres_street, 
                                `contact_information_addres_house_number` = :contact_information_addres_house_number,
                                `contact_information_addres_postcode` = :contact_information_addres_postcode, 
                                `contact_information_addres_city` = :contact_information_addres_city 
                        WHERE   `contact_information_id` = :contact_information_id";

                $stmt = $con->prepare($query);
                $stmt->execute($contact_information_addres);

                echo 'Kontaktadress erfolgreich aktualisiert.';
                $pdo->closeConnection();
            }
            catch(Exception $e)
            {
                echo 'Kontaktadresse konte nicht aktualisiert werden.'.$e;
            }
        }

     public static function loadFromDB($pdo,$entity_name,$foreignKeyName,$parentEnity_id)
    {
        return loadFromDB($pdo,$entity_name,$foreignKeyName,$parentEnity_id);     
    }

    }