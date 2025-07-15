<?php

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
           

            public static function createRecord($pdo,$import_accessories_item_data)
    {
        try
        {
            // var_dump($ import_accessories_item_data);
            // exit();
            $con = $pdo->connectToDb();
            $query ='INSERT INTO `import_accessories_item_data`
                                 () VALUE ()';

             foreach ($import_accessories_item_data as $key => $value) 
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
            $stmt->execute($import_accessories_item_data);
            echo 'ImportAccessData wurde erfolgreich eingefügt';
        }
        catch(Exception $e)
        {
            echo 'ImportAccessData Fehler'.$e;
        }
        $pdo->closeConnection();
    }

             public static function saveEntity($pdo,$import_accessories_item_data)
    {
        try
        {
            // var_dump($ import_accessories_item_data);
            // exit();

            $con = $pdo->connectToDb();
            $query="UPDATE ` import_accessories_item_data` 
                    SET  WHERE ` import_accessories_item_data`.`import_id` = :import_id";

            foreach ($import_accessories_item_data as $key => $value) 
            {
               $setPos = strpos($query,"WHERE")-1;
                $query = substr($query,0,$setPos).'`'.$key.'` = :'.$key.', '.substr($query,$setPos+1).' ';
            }
            
              $setPos = strpos($query,"WHERE");
                $query = substr($query,0,$setPos-2).substr($query,$setPos-1);
             
        $stmt = $con->prepare($query);
        $stmt->execute($import_accessories_item_data);

        echo 'ImportAccessories wurden aktualisiert.';
        
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von der ImportAccessories'.$e;
        }
        $pdo->closeConnection();
    }

   

    
}