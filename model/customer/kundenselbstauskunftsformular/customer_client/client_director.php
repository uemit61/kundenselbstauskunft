<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Client_director
{
    // private $client_director_id,
    //         $client_director_gender,	
    //         $client_director_name,	
    //         $client_director_surname,	
    //         $client_id;	

    /**
     * Get the value of client_director_id
     */ 
    public function getClient_director_id()
    {
        return $this->client_director_id;
    }

    /**
     * Set the value of client_director_id
     *
     * @return  self
     */ 
    public function setClient_director_id($client_director_id)
    {
        $this->client_director_id = $client_director_id;

        return $this;
    }

            /**
             * Get the value of client_director_gender
             */ 
            public function getClient_director_gender()
            {
                        return $this->client_director_gender;
            }

            /**
             * Set the value of client_director_gender
             *
             * @return  self
             */ 
            public function setClient_director_gender($client_director_gender)
            {
                        $this->client_director_gender = $client_director_gender;

                        return $this;
            }

            /**
             * Get the value of client_director_name
             */ 
            public function getClient_director_name()
            {
                        return $this->client_director_name;
            }

            /**
             * Set the value of client_director_name
             *
             * @return  self
             */ 
            public function setClient_director_name($client_director_name)
            {
                        $this->client_director_name = $client_director_name;

                        return $this;
            }

            /**
             * Get the value of client_director_surname
             */ 
            public function getClient_director_surname()
            {
                        return $this->client_director_surname;
            }

            /**
             * Set the value of client_director_surname
             *
             * @return  self
             */ 
            public function setClient_director_surname($client_director_surname)
            {
                        $this->client_director_surname = $client_director_surname;

                        return $this;
            }

            /**
             * Get the value of client_id
             */ 
            public function getClient_id()
            {
                        return $this->client_id;
            }

            /**
             * Set the value of client_id
             *
             * @return  self
             */ 
            public function setClient_id($client_id)
            {
                        $this->client_id = $client_id;

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

     public static function loadFromDB($pdo,$entity_name,$foreignKeyName,$foreigenKeyId)
    {
        return loadFromDB($pdo,$entity_name,$foreignKeyName,$foreigenKeyId);     
    }

        
}