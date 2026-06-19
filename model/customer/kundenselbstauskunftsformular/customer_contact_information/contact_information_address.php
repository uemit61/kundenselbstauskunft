<?php
    class Contact_information_address 
    {
        private $contact_information_address_id, 
                $contact_information_address_street,
                $contact_information_address_house_number,
                $contact_information_address_postcode,
                $contact_information_address_city,
                $contact_information_id;

        
        public function getContact_information_address_id()
        {
            return $this->contact_information_address_id;
        }

        public function setContact_information_address_id($contact_information_address_id)
        {
            $this->contact_information_address_id = $contact_information_address_id;
            return $this;
        }

       
        public function getContact_information_address_street()
        {
            return $this->contact_information_address_street;
        }

      
        public function setContact_information_address_street($contact_information_address_street)
        {
            $this->contact_information_address_street = $contact_information_address_street;
            return $this;
        }

        public function getContact_information_address_house_number()
        {
            return $this->contact_information_address_house_number;
        }

    
        public function setContact_information_address_house_number($contact_information_address_house_number)
        {
            $this->contact_information_address_house_number = $contact_information_address_house_number;
            return $this;
        }

       
        public function getContact_information_address_postcode()
        {
            return $this->contact_information_address_postcode;
        }

       
        public function setContact_information_address_postcode($contact_information_address_postcode)
        {
            $this->contact_information_address_postcode = $contact_information_address_postcode;
            return $this;
        }

      
        public function getContact_information_address_city()
        {
            return $this->contact_information_address_city;
        }

      
        public function setContact_information_address_city($contact_information_address_city)
        {
            $this->contact_information_address_city = $contact_information_address_city;
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

        public static function loadEntity($pdo,$contact_information_address_id,$arg=0)
        {
             try
            {
                $con = $pdo->connectToDb();
                $query ="   SELECT  * 
                            FROM    `contact_information_address`
                            WHERE   `contact_information_address`.`contact_information_address_id` =:contact_information_address_id";
                $stmt = $con->prepare($query);
                $stmt->bindValue(':contact_information_address_id',$contact_information_address_id);
                $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
                $contact_information_address = $stmt->fetch();
               
            }
            catch(Exception $e)
            {
                echo 'Fehler beim laden der Adresse'.$e;
            }
            $pdo->closeConnection();
            return $contact_information_address;
        }

        public static function createRecord($pdo,$contact_information_address)
        {
           
            try
            {
                $con = $pdo->connectToDb();
                $query='INSERT INTO `contact_information_address` 
                                    (`contact_information_address_id`, 
                                    `contact_information_address_street`, 
                                    `contact_information_address_house_number`, 
                                    `contact_information_address_postcode`, 
                                    `contact_information_address_city`, 
                                    `contact_information_id`) 
                            VALUES (:contact_information_address_id, 
                                    :contact_information_address_street , 
                                    :contact_information_address_house_number, 
                                    :contact_information_address_postcode, 
                                    :contact_information_address_city, 
                                    :contact_information_id)';

                $stmt = $con->prepare($query);
                $stmt->execute($contact_information_address);

                echo 'Kontaktadresse wurde gespeichert';
                $pdo->closeConnection();
            }
            catch(Exception $e) 
            {
                echo 'Kontaktadresse konnte nicht gespeichert werden.'.$e;
            }
    }

        public static function saveEntity($pdo, $contact_information_address)
        {
            try
            {
                $con = $pdo->connectToDb();
                $query="UPDATE  `contact_information_address` 
                        SET     `contact_information_address_street` = :contact_information_address_street, 
                                `contact_information_address_house_number` = :contact_information_address_house_number,
                                `contact_information_address_postcode` = :contact_information_address_postcode, 
                                `contact_information_address_city` = :contact_information_address_city 
                        WHERE   `contact_information_id` = :contact_information_id";

                $stmt = $con->prepare($query);
                $stmt->execute($contact_information_address);

                echo 'Kontaktadress erfolgreich aktualisiert.';
                $pdo->closeConnection();
            }
            catch(Exception $e)
            {
                echo 'Kontaktadresse konte nicht aktualisiert werden.'.$e;
            }
        }

    }