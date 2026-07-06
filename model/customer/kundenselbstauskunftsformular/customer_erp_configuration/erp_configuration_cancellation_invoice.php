<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
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

    public static function saveEntity($pdo,$data,$entity_name)
    {
        saveEntityToDB($pdo, $data, $entity_name);
    }

    public static function createRecord($pdo,$data,$entity_name)
    {
        createRecordToDB($pdo,$data, $entity_name);
    }

    public static function loadFromDB($pdo,$entity_name,$foreignKeyName,$parentEnity_id)
    {
        return loadFromDB($pdo,$entity_name,$foreignKeyName,$parentEnity_id);     
    }
    

}