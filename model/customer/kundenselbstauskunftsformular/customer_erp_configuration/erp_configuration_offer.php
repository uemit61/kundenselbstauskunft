<?php
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Erp_configuration_offer
{
    // private $erp_configuration_offer_id,
    //         $erp_configuration_offer_month,	
    //         $erp_configuration_offer_year,	
    //         $erp_configuration_offer_first,	
    //         $erp_configuration_id;

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