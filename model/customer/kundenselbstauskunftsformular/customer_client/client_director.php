<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class Client_director extends DbModel
{
    protected $client_director_id,
            $client_director_gender,	
            $client_director_name,	
            $client_director_surname,	
            $client_id;	

    public function getClient_director_id()
    {
        return $this->client_director_id;
    }


    public function setClient_director_id($client_director_id)
    {
        $this->client_director_id = $client_director_id;
        return $this;
    }

    public function getClient_director_gender()
    {
        return $this->client_director_gender;
    }

    public function setClient_director_gender($client_director_gender)
    {
        $this->client_director_gender = $client_director_gender;
        return $this;
    }

  
    public function getClient_director_name()
    {
        return $this->client_director_name;
    }

 
    public function setClient_director_name($client_director_name)
    {
        $this->client_director_name = $client_director_name;
        return $this;
    }

 
    public function getClient_director_surname()
    {
        return $this->client_director_surname;
    }

    public function setClient_director_surname($client_director_surname)
    {
        $this->client_director_surname = $client_director_surname;
        return $this;
    }

    public function getClient_id()
    {
        return $this->client_id;
    }

   
    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

        
}