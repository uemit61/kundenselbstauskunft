<?php

class erp_configuration_item_types
{
    private $erp_configuration_item_types_id,
            $erp_configuration_item_types_item,	
            $erp_configuration_item_types_bom,	
            $erp_configuration_item_types_services,
            $erp_configuration_item_types_variant_item,
            $erp_configuration_id;

    public function setErpConfigurationOfferId($erp_configuration_item_types_id)
    {
        $this->erp_configuration_item_types_id = $erp_configuration_item_types_id;
    }

    public function getErpConfigurationOfferId()
    {
        return $this->erp_configuration_item_types_id;
    }

    public function setErpConfigurationOfferMonth($erp_configuration_item_types_item)
    {
        $this->erp_configuration_item_types_item = $erp_configuration_item_types_item;
    }

    public function getErpConfigurationOfferMonth()
    {
        return $this->erp_configuration_item_types_item;
    }

    public function setErpConfigurationOfferYear($erp_configuration_item_types_bom)
    {
        $this->erp_configuration_item_types_bom = $erp_configuration_item_types_bom;
    }

    public function getErpConfigurationOfferYear()
    {
        return $this->erp_configuration_year;
    }

    public function setErpConfigurationOfferFirst($erp_configuration_item_types_services)
    {
        $this->erp_configuration_item_types_services = $erp_configuration_item_types_services;
    }

    public function getErpConfigurationOfferFirst()
    {
        return $this->erp_configuration_item_types_services;
    }

    public function setErpConfigurationId( $erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }

    public function getErpConfigurationId()
    {
        return $this->erp_configuration_id;
    }

    public static function saveEntity($pdo,$erp_configuration_item_types)
    {
        try
        {
            $con = $pdo->connectToDb();

            $query = "UPDATE `erp_configuration_item_types` 
                         SET `erp_configuration_item_types_item` = :erp_configuration_item_types_item, 
                             `erp_configuration_item_types_bom`  = :erp_configuration_item_types_bom, 
                             `erp_configuration_item_types_services` = :erp_configuration_item_types_services,
                             `erp_configuration_item_types_variant_item` = :erp_configuration_item_types_variant_item
                       WHERE `erp_configuration_id` = :erp_configuration_id";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_item_types);

            echo 'ItemTypen aktualisiert';
        }
        catch(Exception $e)
        {
            echo 'ItemTypen nicht aktualisiert'.$e;
        }
        
        $pdo->closeConnection();

    }

    public static function createRecord($pdo,$erp_configuration_item_types)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "INSERT INTO `erp_configuration_item_types` 
                             (`erp_configuration_item_types_id`, 
                              `erp_configuration_item_types_item`, 
                              `erp_configuration_item_types_bom`, 
                              `erp_configuration_item_types_services`,
                              `erp_configuration_item_types_variant_item`,
                              `erp_configuration_id`) 
                      VALUES  (:erp_configuration_item_types_id,
                               :erp_configuration_item_types_item,
                               :erp_configuration_item_types_bom,
                               :erp_configuration_item_types_services,
                               :erp_configuration_item_types_variant_item,
                               :erp_configuration_id)";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_item_types);

            
           echo 'ItemTypen eingefügt';
        }
        catch(Exception $e)
        {
            echo 'ItemTypen nicht eingefügt'.$e;
        }
        $pdo->closeConnection();
    }
    


            /**
             * Get the value of erp_configuration_item_types_variant_item
             */ 
            public function getErp_configuration_item_types_variant_item()
            {
                        return $this->erp_configuration_item_types_variant_item;
            }

            /**
             * Set the value of erp_configuration_item_types_variant_item
             *
             * @return  self
             */ 
            public function setErp_configuration_item_types_variant_item($erp_configuration_item_types_variant_item)
            {
                        $this->erp_configuration_item_types_variant_item = $erp_configuration_item_types_variant_item;

                        return $this;
            }
}