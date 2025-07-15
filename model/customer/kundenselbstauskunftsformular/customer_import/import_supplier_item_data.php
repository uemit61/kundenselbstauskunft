<?php

class Import_supplier_item_data
{
    private $import_supplier_item_data_id,
    	    $import_supplier_item_data_number,
            $import_supplier_item_data_description,
            $import_supplier_item_data_purchase_price,
            $import_supplier_item_data_status,
            $import_supplier_item_data_standard_item,
            $import_supplier_item_data_item_description,
            $import_supplier_item_data_supplier_number,
            $import_supplier_item_data_item_number,
            $import_supplier_item_data_procurement_cost,
            $import_id;

            

    /**
     * Get the value of import_supplier_item_data_id
     */ 
    public function getImport_supplier_item_data_id()
    {
        return $this->import_supplier_item_data_id;
    }

    /**
     * Set the value of import_supplier_item_data_id
     *
     * @return  self
     */ 
    public function setImport_supplier_item_data_id($import_supplier_item_data_id)
    {
        $this->import_supplier_item_data_id = $import_supplier_item_data_id;

        return $this;
    }

    	    /**
    	     * Get the value of import_supplier_item_data_number
    	     */ 
    	    public function getImport_supplier_item_data_number()
    	    {
    	        	    return $this->import_supplier_item_data_number;
    	    }

    	    /**
    	     * Set the value of import_supplier_item_data_number
    	     *
    	     * @return  self
    	     */ 
    	    public function setImport_supplier_item_data_number($import_supplier_item_data_number)
    	    {
    	        	    $this->import_supplier_item_data_number = $import_supplier_item_data_number;

    	        	    return $this;
    	    }

            /**
             * Get the value of import_supplier_item_data_description
             */ 
            public function getImport_supplier_item_data_description()
            {
                        return $this->import_supplier_item_data_description;
            }

            /**
             * Set the value of import_supplier_item_data_description
             *
             * @return  self
             */ 
            public function setImport_supplier_item_data_description($import_supplier_item_data_description)
            {
                        $this->import_supplier_item_data_description = $import_supplier_item_data_description;

                        return $this;
            }

            /**
             * Get the value of import_supplier_item_data_purchase_price
             */ 
            public function getImport_supplier_item_data_purchase_price()
            {
                        return $this->import_supplier_item_data_purchase_price;
            }

            /**
             * Set the value of import_supplier_item_data_purchase_price
             *
             * @return  self
             */ 
            public function setImport_supplier_item_data_purchase_price($import_supplier_item_data_purchase_price)
            {
                        $this->import_supplier_item_data_purchase_price = $import_supplier_item_data_purchase_price;

                        return $this;
            }

            /**
             * Get the value of import_supplier_item_data_status
             */ 
            public function getImport_supplier_item_data_status()
            {
                        return $this->import_supplier_item_data_status;
            }

            /**
             * Set the value of import_supplier_item_data_status
             *
             * @return  self
             */ 
            public function setImport_supplier_item_data_status($import_supplier_item_data_status)
            {
                        $this->import_supplier_item_data_status = $import_supplier_item_data_status;

                        return $this;
            }

            /**
             * Get the value of import_supplier_item_data_standard_item
             */ 
            public function getImport_supplier_item_data_standard_item()
            {
                        return $this->import_supplier_item_data_standard_item;
            }

            /**
             * Set the value of import_supplier_item_data_standard_item
             *
             * @return  self
             */ 
            public function setImport_supplier_item_data_standard_item($import_supplier_item_data_standard_item)
            {
                        $this->import_supplier_item_data_standard_item = $import_supplier_item_data_standard_item;

                        return $this;
            }

            /**
             * Get the value of import_supplier_item_data_supplier_number
             */ 
            public function getImport_supplier_item_data_supplier_number()
            {
                        return $this->import_supplier_item_data_supplier_number;
            }

            /**
             * Set the value of import_supplier_item_data_supplier_number
             *
             * @return  self
             */ 
            public function setImport_supplier_item_data_supplier_number($import_supplier_item_data_supplier_number)
            {
                        $this->import_supplier_item_data_supplier_number = $import_supplier_item_data_supplier_number;

                        return $this;
            }

            /**
             * Get the value of import_supplier_item_data_item_description
             */ 
            public function getImport_supplier_item_data_item_description()
            {
                        return $this->import_supplier_item_data_item_description;
            }

            /**
             * Set the value of import_supplier_item_data_item_description
             *
             * @return  self
             */ 
            public function setImport_supplier_item_data_item_description($import_supplier_item_data_item_description)
            {
                        $this->import_supplier_item_data_item_description = $import_supplier_item_data_item_description;

                        return $this;
            }

            /**
             * Get the value of import_supplier_item_data_item_number
             */ 
            public function getImport_supplier_item_data_item_number()
            {
                        return $this->import_supplier_item_data_item_number;
            }

            /**
             * Set the value of import_supplier_item_data_item_number
             *
             * @return  self
             */ 
            public function setImport_supplier_item_data_item_number($import_supplier_item_data_item_number)
            {
                        $this->import_supplier_item_data_item_number = $import_supplier_item_data_item_number;

                        return $this;
            }

            /**
             * Get the value of import_supplier_item_data_procurement_cost
             */ 
            public function getImport_supplier_item_data_procurement_cost()
            {
                        return $this->import_supplier_item_data_procurement_cost;
            }

            /**
             * Set the value of import_supplier_item_data_procurement_cost
             *
             * @return  self
             */ 
            public function setImport_supplier_item_data_procurement_cost($import_supplier_item_data_procurement_cost)
            {
                        $this->import_supplier_item_data_procurement_cost = $import_supplier_item_data_procurement_cost;

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

             public static function createRecord($pdo,$import_supplier_item_data)
    {
        try
        {
            // var_dump($import_supplier_item_data);
            // exit();
            $con = $pdo->connectToDb();
            $query ='INSERT INTO `import_supplier_item_data`
                                 () VALUE ()';

             foreach ($import_supplier_item_data as $key => $value) 
            {
                $var = '`'.$key.'`,';

                // Die Positionen der schließenden Klammern werden ermittelt
                $firstIns = strpos($query,')');

                $query = substr($query,0,$firstIns).$var.substr($query,$firstIns);
                $firstIns = strpos($query,')');
                $secIns =  strpos($query,')',$firstIns+1);
                $query = substr($query,0,$secIns).':'.$key.','.substr($query,$secIns);
            }
                $firstIns = strpos($query,')');
                $query = substr($query,0,$firstIns-1).substr($query,$firstIns);
                $firstIns = strpos($query,')');
                $secIns =  strpos($query,')',$firstIns+1);
                $query = substr($query,0,$secIns-1).substr($query,$secIns);

           
            $stmt = $con->prepare($query);
            $stmt->execute($import_supplier_item_data);
            echo 'ImportsupITemData wurde erfolgreich eingefügt';
        }
        catch(Exception $e)
        {
            echo 'ImportsupITemData Fehler'.$e;
        }
        $pdo->closeConnection();
    }

    public static function saveEntity($pdo,$import_supplier_item_data)
    {
        try
        {
            // var_dump($import_supplier_item_data);
            // exit();

            $con = $pdo->connectToDb();
            $query="UPDATE `import_supplier_item_data` 
                    SET  WHERE `import_supplier_item_data`.`import_id` = :import_id";

            foreach ($import_supplier_item_data as $key => $value) 
            {
               $setPos = strpos($query,"WHERE")-1;
                $query = substr($query,0,$setPos).'`'.$key.'` = :'.$key.', '.substr($query,$setPos+1).' ';
            }
            
              $setPos = strpos($query,"WHERE");
                $query = substr($query,0,$setPos-2).substr($query,$setPos-1);
             
        $stmt = $con->prepare($query);
        $stmt->execute($import_supplier_item_data);

        echo 'supitem wurden aktualisiert.';
        
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von der supItem'.$e;
        }
        $pdo->closeConnection();
    }
}