<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class Import_accessories_item_data extends DbModel
{
    protected   $import_accessories_item_data_id,
                $import_accessories_item_data_item_number,	
                $import_accessories_item_data_import_accessories_number,	
                $import_accessories_item_data_from_quantity,	
                $import_id;

    public function getImport_accessories_item_data_id()
    {
        return $this->import_accessories_item_data_id;
    }

   
    public function setImport_accessories_item_data_id($import_accessories_item_data_id)
    {
        $this->import_accessories_item_data_id = $import_accessories_item_data_id;

        return $this;
    }

            /**
             * Get the value of import_accessories_item_data_item_number
             */ 
            public function getImport_accessories_item_data_item_number()
            {
                        return $this->import_accessories_item_data_item_number;
            }

            /**
             * Set the value of import_accessories_item_data_item_number
             *
             * @return  self
             */ 
            public function setImport_accessories_item_data_item_number($import_accessories_item_data_item_number)
            {
                        $this->import_accessories_item_data_item_number = $import_accessories_item_data_item_number;

                        return $this;
            }

            /**
             * Get the value of import_accessories_item_data_import_accessories_number
             */ 
            public function getImport_accessories_item_data_import_accessories_number()
            {
                        return $this->import_accessories_item_data_import_accessories_number;
            }

            /**
             * Set the value of import_accessories_item_data_import_accessories_number
             *
             * @return  self
             */ 
            public function setImport_accessories_item_data_import_accessories_number($import_accessories_item_data_import_accessories_number)
            {
                        $this->import_accessories_item_data_import_accessories_number = $import_accessories_item_data_import_accessories_number;

                        return $this;
            }

            /**
             * Get the value of import_accessories_item_data_from_quantity
             */ 
            public function getImport_accessories_item_data_from_quantity()
            {
                        return $this->import_accessories_item_data_from_quantity;
            }

            /**
             * Set the value of import_accessories_item_data_from_quantity
             *
             * @return  self
             */ 
            public function setImport_accessories_item_data_from_quantity($import_accessories_item_data_from_quantity)
            {
                        $this->import_accessories_item_data_from_quantity = $import_accessories_item_data_from_quantity;

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