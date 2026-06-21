<?php

class erp_configuration_incoming_delivery_note
{
    private $erp_configuration_incoming_delivery_note_id,
            $erp_configuration_incoming_delivery_note_month,	
            $erp_configuration_incoming_delivery_note_year,	
            $erp_configuration_incoming_delivery_note_first,	
            $erp_configuration_id;

    public function setErpConfigurationIncomingDeliveryId($erp_configuration_incoming_delivery_note_id)
    {
        $this->erp_configuration_incoming_delivery_note_id = $erp_configuration_incoming_delivery_note_id;
    }

    public function getErpConfigurationIncomingDeliveryId()
    {
        return $this->erp_configuration_incoming_delivery_note_id;
    }

    public function setErpConfigurationIncomingDeliveryMonth($erp_configuration_incoming_delivery_note_month)
    {
        $this->erp_configuration_incoming_delivery_note_month = $erp_configuration_incoming_delivery_note_month;
    }

    public function getErpConfigurationIncomingDeliveryMonth()
    {
        return $this->erp_configuration_incoming_delivery_note_month;
    }

    public function setErpConfigurationIncomingDeliveryYear($erp_configuration_incoming_delivery_note_year)
    {
        $this->erp_configuration_incoming_delivery_note_year = $erp_configuration_incoming_delivery_note_year;
    }

    public function getErpConfigurationIncomingDeliveryYear()
    {
        return $this->erp_configuration_incoming_delivery_note_year;
    }

    public function setErpConfigurationIncomingDeliveryFirst($erp_configuration_incoming_delivery_note_first)
    {
        $this->erp_configuration_incoming_delivery_note_first = $erp_configuration_incoming_delivery_note_first;
    }

    public function getErpConfigurationIncomingDeliveryFirst()
    {
        return $this->erp_configuration_incoming_delivery_note_first;
    }

    public function setErpConfigurationId( $erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }

    public function getErpConfigurationId()
    {
        return $this->erp_configuration_id;
    }

    public static function saveEntity($pdo,$erp_configuration_incoming_delivery_note)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "UPDATE `erp_configuration_incoming_delivery_note` 
                         SET `erp_configuration_incoming_delivery_note_month` = :erp_configuration_incoming_delivery_note_month, 
                             `erp_configuration_incoming_delivery_note_year`  = :erp_configuration_incoming_delivery_note_year, 
                             `erp_configuration_incoming_delivery_note_first` = :erp_configuration_incoming_delivery_note_first 
                       WHERE `erp_configuration_incoming_delivery_note`.`erp_configuration_id` = :erp_configuration_id";
            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_incoming_delivery_note);
            echo 'Eingangslieferschein aktualisiert';
        }
        catch(Exception $e)
        {
            echo 'Eingangslieferschein nicht aktualisiert'.$e;
        }
        $pdo->closeConnection();
    }

    public static function createRecord($pdo,$erp_configuration_incoming_delivery_note)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "INSERT INTO `erp_configuration_incoming_delivery_note` 
                             (`erp_configuration_incoming_delivery_note_id`, 
                              `erp_configuration_incoming_delivery_note_month`, 
                              `erp_configuration_incoming_delivery_note_year`, 
                              `erp_configuration_incoming_delivery_note_first`, 
                              `erp_configuration_id`) 
                      VALUES  (:erp_configuration_incoming_delivery_note_id,
                               :erp_configuration_incoming_delivery_note_month,
                               :erp_configuration_incoming_delivery_note_year,
                               :erp_configuration_incoming_delivery_note_first,
                               :erp_configuration_id)";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_incoming_delivery_note);

            
           echo 'Eingangslieferschein eingefügt';
        }
        catch(Exception $e)
        {
            echo 'Eingangslieferschein nicht eingefügt'.$e;
        }
        $pdo->closeConnection();
    }
    

}