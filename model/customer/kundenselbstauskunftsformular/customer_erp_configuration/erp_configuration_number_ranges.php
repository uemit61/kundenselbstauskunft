<?php
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Erp_configuration_number_ranges
{
    private $erp_configuration_number_ranges_id,	
            $erp_configuration_number_ranges_customer_number,	
            $erp_configuration_number_ranges_supplier_number,	
            $erp_configuration_number_ranges_item_number,	
            $erp_configuration_id;	

    
    public function setErpConfigurationNumberRangesId($erp_configuration_number_ranges_id)
    {
        $this->erp_configuration_number_ranges_id = $erp_configuration_number_ranges_id;
    }

    public function getErpConfigurationNumberRangesId()
    {
            return $this->erp_configuration_number_ranges_id;
    }

    public function setErpConfigurationNumberRangesCustomerNumber($erp_configuration_number_ranges_customer_number)
    {
        $this->erp_configuration_number_ranges_customer_number = $erp_configuration_number_ranges_customer_number;
    }
    public function getErpConfigurationNumberRangesCustomerNumber()
    {
        return $this->erp_configuration_number_ranges_customer_number;
    }

    public function setErpConfigurationNumberRangesItemNumber($erp_configuration_number_ranges_item_number)
    {
        $this->erp_configuration_number_ranges_item_number = $erp_configuration_number_ranges_item_number;
    }

    public function getErpConfigurationNumberRangesItemNumber()
    {
            return $this->erp_configuration_number_ranges_item_number;
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