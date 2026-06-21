<?php

class Erp_configuration_number_ranges
{
    private $erp_configuration_number_ranges_id,	
            $erp_configuration_number_ranges_customer_number,	
            $erp_configuration_number_ranges_supplier_number,	
            $erp_configuration_number_ranges_item_number,	
            $erp_configuration_id;	

    
    public function setErpConfigurationNumberRangesId($erp_configuration_number_ranges_id)
    {
        $this->erp_configuration_number_ranges_id = $erp_configuration_number_ranges_id;
    }

    public function getErpConfigurationNumberRangesId()
    {
            return $this->erp_configuration_number_ranges_id;
    }

    public function setErpConfigurationNumberRangesCustomerNumber($erp_configuration_number_ranges_customer_number)
    {
        $this->erp_configuration_number_ranges_customer_number = $erp_configuration_number_ranges_customer_number;
    }
    public function getErpConfigurationNumberRangesCustomerNumber()
    {
        return $this->erp_configuration_number_ranges_customer_number;
    }

    public function setErpConfigurationNumberRangesItemNumber($erp_configuration_number_ranges_item_number)
    {
        $this->erp_configuration_number_ranges_item_number = $erp_configuration_number_ranges_item_number;
    }

    public function getErpConfigurationNumberRangesItemNumber()
    {
            return $this->erp_configuration_number_ranges_item_number;
    }

    public function setErpConfigurationId( $erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }
    public function getErpConfigurationId()
    {
        return $this->erp_configuration_id;
    }

    public static function saveEntity($pdo,$erp_configuration_number_ranges)
    {
        try
        {
            // var_dump($erp_configuration_number_ranges);
            // exit();
            $con = $pdo->connectToDb();
            $query="UPDATE  `erp_configuration_number_ranges` 
                    SET     `erp_configuration_number_ranges_customer_number` = :erp_configuration_number_ranges_customer_number,
                            `erp_configuration_number_ranges_supplier_number` = :erp_configuration_number_ranges_supplier_number,
                            `erp_configuration_number_ranges_item_number` = :erp_configuration_number_ranges_item_number
                    WHERE   `erp_configuration_id` = :erp_configuration_id";
            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_number_ranges);

            echo 'Nummernkreise erfolgreich aktualisert.';
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von Nummernkreise'.$e;
        }
        $pdo->closeConnection();
    }

    public static function createRecord($pdo,$erp_configuration_number_ranges)
    {
        // var_dump($erp_configuration_number_ranges);
        // exit();

        try
        {
            $con = $pdo->connectToDb();
            $query='INSERT INTO  `erp_configuration_number_ranges` 
                            (`erp_configuration_number_ranges_id`, 
                            `erp_configuration_number_ranges_customer_number`, 
                            `erp_configuration_number_ranges_supplier_number`, 
                            `erp_configuration_number_ranges_item_number`,
                            `erp_configuration_id`) 
                    VALUES  (:erp_configuration_number_ranges_id, 
                            :erp_configuration_number_ranges_customer_number, 
                            :erp_configuration_number_ranges_supplier_number, 
                            :erp_configuration_number_ranges_item_number,
                            :erp_configuration_id)';

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_number_ranges);

            echo 'Nummernkreise  wurde erfolgreich eingefügt';
            $pdo->closeConnection();
        }
        catch(Exception $e)
        {
            echo 'Fehler beim einfügen der Nummerkreise'.$e;
        }
    }

}