<?php

class Erp_configuration_incoming_invoice
{
    private $erp_configuration_incoming_invoice_id,
            $erp_configuration_incoming_invoice_month,	
            $erp_configuration_incoming_invoice_year,	
            $erp_configuration_incoming_invoice_first,	
            $erp_configuration_id;

    public function setErpConfigurationIncomingInvoiceyId($erp_configuration_incoming_invoice_id)
    {
        $this->erp_configuration_incoming_invoice_id = $erp_configuration_incoming_invoice_id;
    }

    public function getErpConfigurationIncomingInvoiceyId()
    {
        return $this->erp_configuration_incoming_invoice_id;
    }

    public function setErpConfigurationIncomingInvoiceyMonth($erp_configuration_incoming_invoice_month)
    {
        $this->erp_configuration_incoming_invoice_month = $erp_configuration_incoming_invoice_month;
    }

    public function getErpConfigurationIncomingInvoiceyMonth()
    {
        return $this->erp_configuration_incoming_invoice_month;
    }

    public function setErpConfigurationIncomingInvoiceyYear($erp_configuration_incoming_invoice_year)
    {
        $this->erp_configuration_incoming_invoice_year = $erp_configuration_incoming_invoice_year;
    }

    public function getErpConfigurationIncomingInvoiceyYear()
    {
        return $this->erp_configuration_incoming_invoice_year;
    }

    public function setErpConfigurationIncomingInvoiceyFirst($erp_configuration_incoming_invoice_first)
    {
        $this->erp_configuration_incoming_invoice_first = $erp_configuration_incoming_invoice_first;
    }

    public function getErpConfigurationIncomingInvoiceyFirst()
    {
        return $this->erp_configuration_incoming_invoice_first;
    }

    public function setErpConfigurationId( $erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }

    public function getErpConfigurationId()
    {
        return $this->erp_configuration_id;
    }

    public static function saveEntity($pdo,$erp_configuration_incoming_invoice)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "UPDATE `erp_configuration_incoming_invoice` 
                         SET `erp_configuration_incoming_invoice_month` = :erp_configuration_incoming_invoice_month, 
                             `erp_configuration_incoming_invoice_year`  = :erp_configuration_incoming_invoice_year, 
                             `erp_configuration_incoming_invoice_first` = :erp_configuration_incoming_invoice_first 
                       WHERE `erp_configuration_incoming_invoice`.`erp_configuration_id` = :erp_configuration_id";
            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_incoming_invoice);
            echo 'Eingangsrechnung aktualisiert';
        }
        catch(Exception $e)
        {
            echo 'Eingangsrechnung nicht aktualisiert'.$e;
        }
        $pdo->closeConnection();
    }

    public static function createRecord($pdo,$erp_configuration_incoming_invoice)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "INSERT INTO `erp_configuration_incoming_invoice` 
                             (`erp_configuration_incoming_invoice_id`, 
                              `erp_configuration_incoming_invoice_month`, 
                              `erp_configuration_incoming_invoice_year`, 
                              `erp_configuration_incoming_invoice_first`, 
                              `erp_configuration_id`) 
                      VALUES  (:erp_configuration_incoming_invoice_id,
                               :erp_configuration_incoming_invoice_month,
                               :erp_configuration_incoming_invoice_year,
                               :erp_configuration_incoming_invoice_first,
                               :erp_configuration_id)";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_incoming_invoice);

            
           echo 'Eingangsrechnung eingefügt';
        }
        catch(Exception $e)
        {
            echo 'Eingangsrechnung nicht eingefügt'.$e;
        }
        $pdo->closeConnection();
    }
    

}