<?php

require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Import_accessories_item_data
{
    private $import_accessories_item_data_id,
            $import_accessories_item_data_item_number,	
            $import_accessories_item_data_import_accessories_number,	
            $import_accessories_item_data_from_quantity,	
            $import_id;

    /**
     * Get the value of import_accessories_item_data_id
     */ 
    public function getImport_accessories_item_data_id()
    {
        return $this->import_accessories_item_data_id;
    }

    /**
     * Set the value of import_accessories_item_data_id
     *
     * @return  self
     */ 
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
           
    public static function saveEntity($pdo,$data,$entity_name)
    {
        saveEntityToDB($pdo, $data, $entity_name);
    }

    public static function createRecord($pdo,$data,$entity_name)
    {
        createRecordToDB($pdo,$data, $entity_name);
    }

   

    
}