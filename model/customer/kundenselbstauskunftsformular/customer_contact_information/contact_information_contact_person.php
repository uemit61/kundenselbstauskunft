<?php

class Contact_information_contact_person
{
    public $contact_information_contact_person_id; 	
    public $contact_information_contact_person_gender;
    public $contact_information_contact_person_name;
    public $contact_information_contact_person_surname;
    public $contact_information_id;

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

    public static function saveEntity($pdo,$data,$entity_name)
    {
        saveEntityToDB($pdo, $data, $entity_name);
    }

    public static function createRecord($pdo,$data,$entity_name)
    {
        createRecordToDB($pdo,$data, $entity_name);
    }

    public static function loadFromDB($pdo,$entity_name,$parentEnity_id)
    {
        loadFromDB($pdo,$entity_name,$parentEnity_id);
    }


}