<?php

class Erp_configuration_cancellation_invoice
{
    private $erp_configuration_cancellation_invoice_id,
            $erp_configuration_cancellation_invoice_month,	
            $erp_configuration_cancellation_invoice_year,	
            $erp_configuration_cancellation_invoice_first,	
            $erp_configuration_id;

    public function setErpConfigurationInvoiceId($erp_configuration_cancellation_invoice_id)
    {
        $this->erp_configuration_cancellation_invoice_id = $erp_configuration_cancellation_invoice_id;
    }

    public function getErpConfigurationInvoiceId()
    {
        return $this->erp_configuration_cancellation_invoice_id;
    }

    public function setErpConfigurationInvoiceMonth($erp_configuration_cancellation_invoice_month)
    {
        $this->erp_configuration_cancellation_invoice_month = $erp_configuration_cancellation_invoice_month;
    }

    public function getErpConfigurationInvoiceMonth()
    {
        return $this->erp_configuration_cancellation_invoice_month;
    }

    public function setErpConfigurationInvoiceYear($erp_configuration_cancellation_invoice_year)
    {
        $this->erp_configuration_cancellation_invoice_year = $erp_configuration_cancellation_invoice_year;
    }

    public function getErpConfigurationInvoiceYear()
    {
        return $this->erp_configuration_cancellation_invoice_year;
    }

    public function setErpConfigurationInvoiceFirst($erp_configuration_cancellation_invoice_first)
    {
        $this->erp_configuration_cancellation_invoice_first = $erp_configuration_cancellation_invoice_first;
    }

    public function getErpConfigurationInvoiceFirst()
    {
        return $this->erp_configuration_cancellation_invoice_first;
    }

    public function setErpConfigurationId( $erp_configuration_id)
    {
        $this->erp_configuration_id = $erp_configuration_id;
    }

    public function getErpConfigurationId()
    {
        return $this->erp_configuration_id;
    }

    public static function saveEntity($pdo,$erp_configuration_cancellation_invoice)
    {
        try
        {
            $con = $pdo->connectToDb();

            $query = "UPDATE `erp_configuration_cancellation_invoice` 
                         SET `erp_configuration_cancellation_invoice_month` = :erp_configuration_cancellation_invoice_month, 
                             `erp_configuration_cancellation_invoice_year`  = :erp_configuration_cancellation_invoice_year, 
                             `erp_configuration_cancellation_invoice_first` = :erp_configuration_cancellation_invoice_first 
                       WHERE `erp_configuration_cancellation_invoice`.`erp_configuration_id` = :erp_configuration_id";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_cancellation_invoice);

            echo 'Storno-Rechnung aktualisiert';
        }
        catch(Exception $e)
        {
            echo 'Storno-Rechnung nicht aktualisiert'.$e;
        }
        
        $pdo->closeConnection();

    }

    public static function createRecord($pdo,$erp_configuration_cancellation_invoice)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query = "INSERT INTO `erp_configuration_cancellation_invoice` 
                             (`erp_configuration_cancellation_invoice_id`, 
                              `erp_configuration_cancellation_invoice_month`, 
                              `erp_configuration_cancellation_invoice_year`, 
                              `erp_configuration_cancellation_invoice_first`, 
                              `erp_configuration_id`) 
                      VALUES  (:erp_configuration_cancellation_invoice_id,
                               :erp_configuration_cancellation_invoice_month,
                               :erp_configuration_cancellation_invoice_year,
                               :erp_configuration_cancellation_invoice_first,
                               :erp_configuration_id)";

            $stmt = $con->prepare($query);
            $stmt->execute($erp_configuration_cancellation_invoice);

            
           echo 'Storno-Rechnung eingefügt';
        }
        catch(Exception $e)
        {
            echo 'Storno-Rechnung nicht eingefügt'.$e;
        }
        $pdo->closeConnection();
    }
    

}