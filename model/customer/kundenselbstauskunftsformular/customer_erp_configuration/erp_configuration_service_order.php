<?php

class Erp_configuration_service_order
{
    private $erp_configuration_service_order_id,
            $erp_configuration_service_order_month,	
            $erp_configuration_service_order_year,	
            $erp_configuration_service_order_first,	
            $erp_configuration_id;

    public function setErpConfigurationServiceOrderId($erp_configuration_service_order_id)
    {
        $this->erp_configuration_service_order_id = $erp_configuration_service_order_id;
    }

    public function getErpConfigurationServiceOrderId()
    {
        return $this->erp_configuration_service_order_id;
    }

    public function setErpConfigurationServiceOrderMonth($erp_configuration_service_order_month)
    {
        $this->erp_configuration_service_order_month = $erp_configuration_service_order_month;
    }

    public function getErpConfigurationServiceOrderMonth()
    {
        return $this->erp_configuration_service_order_month;
    }

    public function setErpConfigurationServiceOrderYear($erp_configuration_service_order_year)
    {
        $this->erp_configuration_service_order_year = $erp_configuration_service_order_year;
    }

    public function getErpConfigurationServiceOrderYear()
    {
        return $this->erp_configuration_service_order_year;
    }

    public function setErpConfigurationServiceOrderFirst($erp_configuration_service_order_first)
    {
        $this->erp_configuration_service_order_first = $erp_configuration_service_order_first;
    }

    public function getErpConfigurationServiceOrderFirst()
    {
        return $this->erp_configuration_service_order_first;
    }

    public function setErpConfigurationId( $erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }

    public function getErpConfigurationId()
    {
        return $this->erp_configuration_id;
    }

    public static function saveEntity($pdo,$erp_configuration_service_order)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "UPDATE `erp_configuration_service_order` 
                         SET `erp_configuration_service_order_month` = :erp_configuration_service_order_month, 
                             `erp_configuration_service_order_year`  = :erp_configuration_service_order_year, 
                             `erp_configuration_service_order_first` = :erp_configuration_service_order_first 
                       WHERE `erp_configuration_service_order`.`erp_configuration_id` = :erp_configuration_id";
            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_service_order);
            echo 'Eingangsrechnung aktualisiert';
        }
        catch(Exception $e)
        {
            echo 'Eingangsrechnung nicht aktualisiert'.$e;
        }
        $pdo->closeConnection();
    }

    public static function createRecord($pdo,$erp_configuration_service_order)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "INSERT INTO `erp_configuration_service_order` 
                             (`erp_configuration_service_order_id`, 
                              `erp_configuration_service_order_month`, 
                              `erp_configuration_service_order_year`, 
                              `erp_configuration_service_order_first`, 
                              `erp_configuration_id`) 
                      VALUES  (:erp_configuration_service_order_id,
                               :erp_configuration_service_order_month,
                               :erp_configuration_service_order_year,
                               :erp_configuration_service_order_first,
                               :erp_configuration_id)";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_service_order);

            
           echo 'Eingangsrechnung eingefügt';
        }
        catch(Exception $e)
        {
            echo 'Eingangsrechnung nicht eingefügt'.$e;
        }
        $pdo->closeConnection();
    }
}