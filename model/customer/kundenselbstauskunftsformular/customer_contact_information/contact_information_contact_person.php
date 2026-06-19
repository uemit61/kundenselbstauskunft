<?php

class Contact_information_contact_person
{
    private $contact_information_contact_person_id; 	
    private $contact_information_contact_person_gender;
    private $contact_information_contact_person_name;
    private $contact_information_contact_person_surname;
    private $contact_information_id;

    public function getContact_information_contact_person_id()
    {
        return $this->contact_information_contact_person_id;
    }

    
    public function setContact_information_contact_person_id($contact_information_contact_person_id)
    {
        $this->contact_information_contact_person_id = $contact_information_contact_person_id;
        return $this;
    }

   
    public function getContact_information_contact_person_gender()
    {
        return $this->contact_information_contact_person_gender;
    }

  
    public function setContact_information_contact_person_gender($contact_information_contact_person_gender)
    {
        $this->contact_information_contact_person_gender = $contact_information_contact_person_gender;
        return $this;
    }

   
    public function getContact_information_contact_person_name()
    {
        return $this->contact_information_contact_person_name;
    }

 
    public function setContact_information_contact_person_name($contact_information_contact_person_name)
    {
        $this->contact_information_contact_person_name = $contact_information_contact_person_name;
        return $this;
    }

  
    public function getContact_information_contact_person_surname()
    {
        return $this->contact_information_contact_person_surname;
    }

  
    public function setContact_information_contact_person_surname($contact_information_contact_person_surname)
    {
        $this->contact_information_contact_person_surname = $contact_information_contact_person_surname;
        return $this;
    }

    public static function saveEntity($pdo,$contact_information_contact_person)
    {
        try
        {
                $con = $pdo->connectToDb();
                $query="UPDATE  `contact_information_contact_person` 
                        SET     `contact_information_contact_person_gender` = :contact_information_contact_person_gender,
                                `contact_information_contact_person_name` = :contact_information_contact_person_name, 
                                `contact_information_contact_person_surname` = :contact_information_contact_person_surname
                        WHERE     `contact_information_id` = :contact_information_id ";
        $stmt = $con->prepare($query);
        $stmt->execute($contact_information_contact_person);

        echo 'Kontakperson erfolgreich aktualisert.';

        
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von der Kontaktperson'.$e;
        }
        $pdo->closeConnection();
    }

    public static function createRecord($pdo,$contact_information_contact_person)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query='INSERT INTO `contact_information_contact_person` 
                            (`contact_information_contact_person_id`, 
                            `contact_information_contact_person_gender`, 
                            `contact_information_contact_person_name`, 
                            `contact_information_contact_person_surname`, 
                            `contact_information_id`) 
                    VALUES  (:contact_information_contact_person_id, 
                            :contact_information_contact_person_gender, 
                            :contact_information_contact_person_name, 
                            :contact_information_contact_person_surname, 
                            :contact_information_id)';
            $stmt = $con->prepare($query);
            $stmt->execute($contact_information_contact_person);
            echo 'Kontakperson wurde erfolgreich eingefügt';
            $pdo->closeConnection();
        }
        catch(Exception $e)
        {
            echo 'Fehler beim einfügen der Kontaktperson'.$e;
        }
    }

    public static function loadEntity($pdo)
    {
        //Später
    }
}