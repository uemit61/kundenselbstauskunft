<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class import_customer_item_data extends DbModel
{
    protected $import_customer_item_data_id,
            $import_customer_item_data_customer_number,	
            $import_customer_item_data_item_number,	
            $import_customer_item_data_price,	
            $import_customer_item_data_from_Quantity,	
            $import_customer_item_data_description,	
            $import_id;

    /**
     * Get the value of import_customer_item_data_id
     */ 
    public function getimport_customer_item_data_id()
    {
        return $this->import_customer_item_data_id;
    }

    /**
     * Set the value of import_customer_item_data_id
     *
     * @return  self
     */ 
    public function setimport_customer_item_data_id($import_customer_item_data_id)
    {
        $this->import_customer_item_data_id = $import_customer_item_data_id;

        return $this;
    }

    /**
     * Get the value of import_customer_item_data_customer_number
     */ 
    public function getimport_customer_item_data_customer_number()
    {
                return $this->import_customer_item_data_customer_number;
    }

    /**
     * Set the value of import_customer_item_data_customer_number
     *
     * @return  self
     */ 
    public function setimport_customer_item_data_customer_number($import_customer_item_data_customer_number)
    {
                $this->import_customer_item_data_customer_number = $import_customer_item_data_customer_number;

                return $this;
    }

    /**
     * Get the value of import_customer_item_data_item_number
     */ 
    public function getimport_customer_item_data_item_number()
    {
                return $this->import_customer_item_data_item_number;
    }

    /**
     * Set the value of import_customer_item_data_item_number
     *
     * @return  self
     */ 
    public function setimport_customer_item_data_item_number($import_customer_item_data_item_number)
    {
                $this->import_customer_item_data_item_number = $import_customer_item_data_item_number;

                return $this;
    }

    /**
     * Get the value of import_customer_item_data_price
     */ 
    public function getimport_customer_item_data_price()
    {
                return $this->import_customer_item_data_price;
    }

    /**
     * Set the value of import_customer_item_data_price
     *
     * @return  self
     */ 
    public function setimport_customer_item_data_price($import_customer_item_data_price)
    {
                $this->import_customer_item_data_price = $import_customer_item_data_price;

                return $this;
    }

    /**
     * Get the value of import_customer_item_data_from_Quantity
     */ 
    public function getimport_customer_item_data_from_Quantity()
    {
                return $this->import_customer_item_data_from_Quantity;
    }

    /**
     * Set the value of import_customer_item_data_from_Quantity
     *
     * @return  self
     */ 
    public function setimport_customer_item_data_from_Quantity($import_customer_item_data_from_Quantity)
    {
                $this->import_customer_item_data_from_Quantity = $import_customer_item_data_from_Quantity;

                return $this;
    }

    /**
     * Get the value of import_customer_item_data_description
     */ 
    public function getimport_customer_item_data_description()
    {
                return $this->import_customer_item_data_description;
    }

    /**
     * Set the value of import_customer_item_data_description
     *
     * @return  self
     */ 
    public function setimport_customer_item_data_description($import_customer_item_data_description)
    {
                $this->import_customer_item_data_description = $import_customer_item_data_description;

                return $this;
    }

    /**
     * Get the value of import_id
     */ 
    public function getImport_id()
    {
                return $this->import_id;
    }

    /**
     * Set the value of import_id
     *
     * @return  self
     */ 
    public function setImport_id($import_id)
    {
                $this->import_id = $import_id;

                return $this;
    }


}