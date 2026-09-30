<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class Erp_configuration_order extends DbModel
{
    protected $erp_configuration_order_id,
            $erp_configuration_order_month,	
            $erp_configuration_order_year,	
            $erp_configuration_order_first,	
            $erp_configuration_id;

    public function setErpConfigurationOrderId($erp_configuration_order_id)
    {
        $this->erp_configuration_order_id = $erp_configuration_order_id;
    }

    public function getErpConfigurationOrderId()
    {
        return $this->erp_configuration_order_id;
    }

    public function setErpConfigurationOrderMonth($erp_configuration_order_month)
    {
        $this->erp_configuration_order_month = $erp_configuration_order_month;
    }

    public function getErpConfigurationOrderMonth()
    {
        return $this->erp_configuration_order_month;
    }

    public function setErpConfigurationOrderYear($erp_configuration_order_year)
    {
        $this->erp_configuration_order_year = $erp_configuration_order_year;
    }

    public function getErpConfigurationOrderYear()
    {
        return $this->erp_configuration_order_year;
    }

    public function setErpConfigurationOrderFirst($erp_configuration_order_first)
    {
        $this->erp_configuration_order_first = $erp_configuration_order_first;
    }

    public function getErpConfigurationOrderFirst()
    {
        return $this->erp_configuration_order_first;
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