<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
    class Contact_information_addres extends DbModel
    {
        protected   $contact_information_addres_id, 
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

    }