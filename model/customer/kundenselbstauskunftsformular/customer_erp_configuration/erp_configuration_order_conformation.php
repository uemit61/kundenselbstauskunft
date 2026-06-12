<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Erp_configuration_order_conformation
{
    // private $erp_configuration_order_conformation_id,
    //         $erp_configuration_order_conformation_month,	
    //         $erp_configuration_order_conformation_year,	
    //         $erp_configuration_order_conformation_first,	
    //         $erp_configuration_id;

    public function setErpConfigurationOrderConformationId($erp_configuration_order_conformation_id)
    {
        $this->erp_configuration_order_conformation_id = $erp_configuration_order_conformation_id;
    }

    public function getErpConfigurationOrderConformationId()
    {
        return $this->erp_configuration_order_conformation_id;
    }

    public function setErpConfigurationOrderConformationMonth($erp_configuration_order_conformation_month)
    {
        $this->erp_configuration_order_conformation_month = $erp_configuration_order_conformation_month;
    }

    public function getErpConfigurationOrderConformationMonth()
    {
        return $this->erp_configuration_order_conformation_month;
    }

    public function setErpConfigurationOrderYear($erp_configuration_order_conformation_year)
    {
        $this->erp_configuration_order_conformation_year = $erp_configuration_order_conformation_year;
    }

    public function getErpConfigurationOrderYear()
    {
        return $this->erp_configuration_order_conformation_year;
    }

    public function setErpConfigurationOrderConformationFirst($erp_configuration_order_conformation_first)
    {
        $this->erp_configuration_order_conformation_first = $erp_configuration_order_conformation_first;
    }

    public function getErpConfigurationOrderConformationFirst()
    {
        return $this->erp_configuration_order_conformation_first;
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