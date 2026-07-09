<?php
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Erp_configuration_service_order
{
    // private $erp_configuration_service_order_id,
    //         $erp_configuration_service_order_month,	
    //         $erp_configuration_service_order_year,	
    //         $erp_configuration_service_order_first,	
    //         $erp_configuration_id;

    public function setErpConfigurationServiceOrderId($erp_configuration_service_order_id)
    {
        $this->erp_configuration_service_order_id = $erp_configuration_service_order_id;
    }

    public function getErpConfigurationServiceOrderId()
    {
        return $this->erp_configuration_service_order_id;
    }

    public function setErpConfigurationServiceOrderMonth($erp_configuration_service_order_month)
    {
        $this->erp_configuration_service_order_month = $erp_configuration_service_order_month;
    }

    public function getErpConfigurationServiceOrderMonth()
    {
        return $this->erp_configuration_service_order_month;
    }

    public function setErpConfigurationServiceOrderYear($erp_configuration_service_order_year)
    {
        $this->erp_configuration_service_order_year = $erp_configuration_service_order_year;
    }

    public function getErpConfigurationServiceOrderYear()
    {
        return $this->erp_configuration_service_order_year;
    }

    public function setErpConfigurationServiceOrderFirst($erp_configuration_service_order_first)
    {
        $this->erp_configuration_service_order_first = $erp_configuration_service_order_first;
    }

    public function getErpConfigurationServiceOrderFirst()
    {
        return $this->erp_configuration_service_order_first;
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

     public static function loadFromDB($pdo,$entity_name,$parentEnity_id)
    {
        loadFromDB($pdo,$entity_name,$parentEnity_id);
    }
}