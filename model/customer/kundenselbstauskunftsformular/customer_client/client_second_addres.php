<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class Client_second_addres extends DbModel
{
    
    protected  $client_second_addres_id,
            $client_second_addres_street,
            $client_second_addres_house_Number,
            $client_second_addres_postcode,
            $client_second_addres_city,
            $client_id;

    
    public function getclient_second_addres_id()
    {
        return $this->client_second_addres_id;
    }

    
    public function setclient_second_addres_id($client_second_addres_id)
    {
        $this->client_second_addres_id = $client_second_addres_id;
        return $this;
    }
     
    public function getclient_second_addres_street()
    {
        return $this->client_second_addres_street;
    }

    
    public function setclient_second_addres_street($client_second_addres_street)
    {
        $this->client_second_addres_street = $client_second_addres_street;
        return $this;
    }

     
    public function getclient_second_addres_house_Number()
    {
        return $this->client_second_addres_house_Number;
    }

     
    public function setclient_second_addres_house_Number($client_second_addres_house_Number)
    {
        $this->client_second_addres_house_Number = $client_second_addres_house_Number;
        return $this;
    }

    
    public function getclient_second_addres_postcode()
    {
        return $this->client_second_addres_postcode;
    }

    
    public function setclient_second_addres_postcode($client_second_addres_postcode)
    {
        $this->client_second_addres_postcode = $client_second_addres_postcode;
        return $this;
    }

    
    public function getclient_second_addres_city()
    {
        return $this->client_second_addres_city;
    }

   
    public function setclient_second_addres_city($client_second_addres_city)
    {
        $this->client_second_addres_city = $client_second_addres_city;
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