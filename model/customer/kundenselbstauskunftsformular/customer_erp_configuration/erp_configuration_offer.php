<?php

class Erp_configuration_offer
{
    private $erp_configuration_offer_id,
            $erp_configuration_offer_month,	
            $erp_configuration_offer_year,	
            $erp_configuration_offer_first,	
            $erp_configuration_id;

    public function setErpConfigurationOfferId($erp_configuration_offer_id)
    {
        $this->erp_configuration_offer_id = $erp_configuration_offer_id;
    }

    public function getErpConfigurationOfferId()
    {
        return $this->erp_configuration_offer_id;
    }

    public function setErpConfigurationOfferMonth($erp_configuration_offer_month)
    {
        $this->erp_configuration_offer_month = $erp_configuration_offer_month;
    }

    public function getErpConfigurationOfferMonth()
    {
        return $this->erp_configuration_offer_month;
    }

    public function setErpConfigurationOfferYear($erp_configuration_offer_year)
    {
        $this->erp_configuration_offer_year = $erp_configuration_offer_year;
    }

    public function getErpConfigurationOfferYear()
    {
        return $this->erp_configuration_year;
    }

    public function setErpConfigurationOfferFirst($erp_configuration_offer_first)
    {
        $this->erp_configuration_offer_first = $erp_configuration_offer_first;
    }

    public function getErpConfigurationOfferFirst()
    {
        return $this->erp_configuration_offer_first;
    }

    public function setErpConfigurationId( $erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }

    public function getErpConfigurationId()
    {
        return $this->erp_configuration_id;
    }

    public static function saveEntity($pdo,$erp_configuration_offer)
    {
        try
        {
            $con = $pdo->connectToDb();

            $query = "UPDATE `erp_configuration_offer` 
                         SET `erp_configuration_offer_month` = :erp_configuration_offer_month, 
                             `erp_configuration_offer_year`  = :erp_configuration_offer_year, 
                             `erp_configuration_offer_first` = :erp_configuration_offer_first
                       WHERE `erp_configuration_id` = :erp_configuration_id";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_offer);

            echo 'Bestellung aktualisiert';
        }
        catch(Exception $e)
        {
            echo 'Bestellung nicht aktualisiert'.$e;
        }
        
        $pdo->closeConnection();

    }

    public static function createRecord($pdo,$erp_configuration_offer)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "INSERT INTO `erp_configuration_offer` 
                             (`erp_configuration_offer_id`, 
                              `erp_configuration_offer_month`, 
                              `erp_configuration_offer_year`, 
                              `erp_configuration_offer_first`, 
                              `erp_configuration_id`) 
                      VALUES  (:erp_configuration_offer_id,
                               :erp_configuration_offer_month,
                               :erp_configuration_offer_year,
                               :erp_configuration_offer_first,
                               :erp_configuration_id)";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_offer);

            
           echo 'Bestellung eingefügt';
        }
        catch(Exception $e)
        {
            echo 'Bestellung nicht eingefügt'.$e;
        }
        $pdo->closeConnection();
    }
    

}