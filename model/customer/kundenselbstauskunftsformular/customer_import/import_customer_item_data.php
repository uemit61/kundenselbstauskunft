<?php

class import_customer_item_data
{
    private $import_customer_item_data_id,
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

    

    public static function createRecord($pdo,$import_customer_item_data)
    {
        try
        {
            // var_dump($import_customer_item_data);
            // exit();
            $con = $pdo->connectToDb();
            $query ='INSERT INTO `import_customer_item_data`
                                 () VALUE ()';

             foreach ($import_customer_item_data as $key => $value) 
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
            $stmt->execute($import_customer_item_data);
            echo 'ImportItemData wurde erfolgreich eingefügt';
        }
        catch(Exception $e)
        {
            echo 'ImportItemData Fehler'.$e;
        }
        $pdo->closeConnection();
    }

    public static function saveEntity($pdo,$import_customer_item_data)
    {
        try
        {
            // var_dump($import_customer_item_data);
            // exit();

            $con = $pdo->connectToDb();
            $query="UPDATE `import_customer_item_data` 
                    SET  WHERE `import_customer_item_data`.`import_id` = :import_id";

            foreach ($import_customer_item_data as $key => $value) 
            {
               $setPos = strpos($query,"WHERE")-1;
                $query = substr($query,0,$setPos).'`'.$key.'` = :'.$key.', '.substr($query,$setPos+1).' ';
            }
            
              $setPos = strpos($query,"WHERE");
                $query = substr($query,0,$setPos-2).substr($query,$setPos-1);
             
        $stmt = $con->prepare($query);
        $stmt->execute($import_customer_item_data);

        echo 'ImportItemData wurden aktualisiert.';
        
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von der ImportItemData'.$e;
        }
        $pdo->closeConnection();
    }

    
}