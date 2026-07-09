<?php
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Erp_configuration_order
{
    private $erp_configuration_order_id,
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

    public static function saveEntity($pdo,$data,$entity_name)
    {
        saveEntityToDB($pdo, $data, $entity_name);
    }

    public static function createRecord($pdo,$data,$entity_name)
    {
        createRecordToDB($pdo,$data, $entity_name);
    }
}