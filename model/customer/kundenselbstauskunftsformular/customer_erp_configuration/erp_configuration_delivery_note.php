<?php

class Erp_configuration_delivery_note
{
    private $erp_configuration_delivery_note_id,
            $erp_configuration_delivery_note_month,	
            $erp_configuration_delivery_note_year,	
            $erp_configuration_delivery_note_first,	
            $erp_configuration_id;

    public function setErpConfigurationDeliveryNoteId($erp_configuration_delivery_note_id)
    {
        $this->erp_configuration_delivery_note_id = $erp_configuration_delivery_note_id;
    }

    public function getErpConfigurationDeliveryNoteId()
    {
        return $this->erp_configuration_delivery_note_id;
    }

    public function setErpConfigurationDeliveryNoteMonth($erp_configuration_delivery_note_month)
    {
        $this->erp_configuration_delivery_note_month = $erp_configuration_delivery_note_month;
    }

    public function getErpConfigurationDeliveryNoteMonth()
    {
        return $this->erp_configuration_delivery_note_month;
    }

    public function setErpConfigurationDeliveryNoteYear($erp_configuration_delivery_note_year)
    {
        $this->erp_configuration_delivery_note_year = $erp_configuration_delivery_note_year;
    }

    public function getErpConfigurationDeliveryNoteYear()
    {
        return $this->erp_configuration_delivery_note_year;
    }

    public function setErpConfigurationDeliveryNoteFirst($erp_configuration_delivery_note_first)
    {
        $this->erp_configuration_delivery_note_first = $erp_configuration_delivery_note_first;
    }

    public function getErpConfigurationDeliveryNoteFirst()
    {
        return $this->erp_configuration_delivery_note_first;
    }

    public function setErpConfigurationId( $erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }

    public function getErpConfigurationId()
    {
        return $this->erp_configuration_id;
    }

    public static function saveEntity($pdo,$erp_configuration_delivery_note)
    {
        try
        {
            $con = $pdo->connectToDb();

            $query = "UPDATE `erp_configuration_delivery_note` 
                         SET `erp_configuration_delivery_note_month` = :erp_configuration_delivery_note_month, 
                             `erp_configuration_delivery_note_year`  = :erp_configuration_delivery_note_year, 
                             `erp_configuration_delivery_note_first` = :erp_configuration_delivery_note_first 
                       WHERE `erp_configuration_delivery_note`.`erp_configuration_id` = :erp_configuration_id";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_delivery_note);

            echo 'Lieferschein aktualisiert';
        }
        catch(Exception $e)
        {
            echo 'Lieferschein nicht aktualisiert'.$e;
        }
        
        $pdo->closeConnection();

    }

    public static function createRecord($pdo,$erp_configuration_delivery_note)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "INSERT INTO `erp_configuration_delivery_note` 
                             (`erp_configuration_delivery_note_id`, 
                              `erp_configuration_delivery_note_month`, 
                              `erp_configuration_delivery_note_year`, 
                              `erp_configuration_delivery_note_first`, 
                              `erp_configuration_id`) 
                      VALUES  (:erp_configuration_delivery_note_id,
                               :erp_configuration_delivery_note_month,
                               :erp_configuration_delivery_note_year,
                               :erp_configuration_delivery_note_first,
                               :erp_configuration_id)";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_delivery_note);

            
           echo 'Lieferschein eingefügt';
        }
        catch(Exception $e)
        {
            echo 'Lieferschein nicht eingefügt'.$e;
        }
        $pdo->closeConnection();
    }
    

}