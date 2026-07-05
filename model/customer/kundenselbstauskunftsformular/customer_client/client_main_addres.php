<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Client_main_addres
{
    
    private $client_main_addres_id,
            $client_main_addres_street,
            $client_main_addres_house_Number,
            $client_main_addres_postcode,
            $client_main_addres_city,
            $client_id;

      public function getClient_main_addres_id()
    {
        return $this->client_main_addres_id;
    }

    
    public function setClient_main_addres_id($client_main_addres_id)
    {
        $this->client_main_addres_id = $client_main_addres_id;
        return $this;
    }
     
    public function getClient_main_addres_street()
    {
        return $this->client_main_addres_street;
    }

    
    public function setClient_main_addres_street($client_main_addres_street)
    {
        $this->client_main_addres_street = $client_main_addres_street;
        return $this;
    }

     
    public function getClient_main_addres_house_Number()
    {
        return $this->client_main_addres_house_Number;
    }

     
    public function setClient_main_addres_house_Number($client_main_addres_house_Number)
    {
        $this->client_main_addres_house_Number = $client_main_addres_house_Number;
        return $this;
    }

    
    public function getClient_main_addres_postcode()
    {
        return $this->client_main_addres_postcode;
    }

    
    public function setClient_main_addres_postcode($client_main_addres_postcode)
    {
        $this->client_main_addres_postcode = $client_main_addres_postcode;
        return $this;
    }

    
    public function getClient_main_addres_city()
    {
        return $this->client_main_addres_city;
    }

   
    public function setClient_main_addres_city($client_main_addres_city)
    {
        $this->client_main_addres_city = $client_main_addres_city;
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