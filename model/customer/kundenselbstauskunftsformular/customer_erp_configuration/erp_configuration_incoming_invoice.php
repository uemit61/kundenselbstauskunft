<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class Erp_configuration_incoming_invoice extends DbModel
{
    protected   $erp_configuration_incoming_invoice_id,
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

}