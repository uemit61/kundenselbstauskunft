<?php

class Erp_configuration_order_conformation
{
    private $erp_configuration_order_conformation_id,
            $erp_configuration_order_conformation_month,	
            $erp_configuration_order_conformation_year,	
            $erp_configuration_order_conformation_first,	
            $erp_configuration_id;

    public function setErpConfigurationOrderConformationId($erp_configuration_order_conformation_id)
    {
        $this->erp_configuration_order_conformation_id = $erp_configuration_order_conformation_id;
    }

    public function getErpConfigurationOrderConformationId()
    {
        return $this->erp_configuration_order_conformation_id;
    }

    public function setErpConfigurationOrderConformationMonth($erp_configuration_order_conformation_month)
    {
        $this->erp_configuration_order_conformation_month = $erp_configuration_order_conformation_month;
    }

    public function getErpConfigurationOrderConformationMonth()
    {
        return $this->erp_configuration_order_conformation_month;
    }

    public function setErpConfigurationOrderYear($erp_configuration_order_conformation_year)
    {
        $this->erp_configuration_order_conformation_year = $erp_configuration_order_conformation_year;
    }

    public function getErpConfigurationOrderYear()
    {
        return $this->erp_configuration_order_conformation_year;
    }

    public function setErpConfigurationOrderConformationFirst($erp_configuration_order_conformation_first)
    {
        $this->erp_configuration_order_conformation_first = $erp_configuration_order_conformation_first;
    }

    public function getErpConfigurationOrderConformationFirst()
    {
        return $this->erp_configuration_order_conformation_first;
    }

    public function setErpConfigurationId( $erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }

    public function getErpConfigurationId()
    {
        return $this->erp_configuration_id;
    }

    public static function saveEntity($pdo,$erp_configuration_order_conformation)
    {
        try
        {
            $con = $pdo->connectToDb();

            $query = "UPDATE `erp_configuration_order_conformation` 
                         SET `erp_configuration_order_conformation_month` = :erp_configuration_order_conformation_month, 
                             `erp_configuration_order_conformation_year`  = :erp_configuration_order_conformation_year, 
                             `erp_configuration_order_conformation_first` = :erp_configuration_order_conformation_first 
                       WHERE `erp_configuration_order_conformation`.`erp_configuration_id` = :erp_configuration_id";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_order_conformation);

            echo 'Aufrtragsbestätigung aktualisiert';
        }
        catch(Exception $e)
        {
            echo 'Aufrtragsbestätigung nicht aktualisiert'.$e;
        }
        
        $pdo->closeConnection();

    }

    public static function createRecord($pdo,$erp_configuration_order_conformation)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "INSERT INTO `erp_configuration_order_conformation` 
                             (`erp_configuration_order_conformation_id`, 
                              `erp_configuration_order_conformation_month`, 
                              `erp_configuration_order_conformation_year`, 
                              `erp_configuration_order_conformation_first`, 
                              `erp_configuration_id`) 
                      VALUES  (:erp_configuration_order_conformation_id,
                               :erp_configuration_order_conformation_month,
                               :erp_configuration_order_conformation_year,
                               :erp_configuration_order_conformation_first,
                               :erp_configuration_id)";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_order_conformation);

            
           echo 'Aufrtragsbestätigung eingefügt';
        }
        catch(Exception $e)
        {
            echo 'Aufrtragsbestätigung nicht eingefügt'.$e;
        }
        $pdo->closeConnection();
    }
    

}