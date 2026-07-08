<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class Erp_configuration_offer extends DbModel
{
    protected   $erp_configuration_offer_id,
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
        return $this->erp_configuration_offer_year;
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

}