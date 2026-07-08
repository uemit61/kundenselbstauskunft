<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class erp_configuration_item_types extends DbModel
{
    protected   $erp_configuration_item_types_id,
                $erp_configuration_item_types_item,	
                $erp_configuration_item_types_bom,	
                $erp_configuration_item_types_services,
                $erp_configuration_item_types_variant_item,
                $erp_configuration_id;

    public function setErpConfigurationItemTypesId($erp_configuration_item_types_id)
    {
        $this->erp_configuration_item_types_id = $erp_configuration_item_types_id;
    }

    public function getErpConfigurationItemTypesId()
    {
        return $this->erp_configuration_item_types_id;
    }

    public function setErpConfigurationItemTypesItem($erp_configuration_item_types_item)
    {
        $this->erp_configuration_item_types_item = $erp_configuration_item_types_item;
    }

    public function getErpConfigurationItemTypesItem()
    {
        return $this->erp_configuration_item_types_item;
    }

    public function setErpConfigurationItemTypesbom($erp_configuration_item_types_bom)
    {
        $this->erp_configuration_item_types_bom = $erp_configuration_item_types_bom;
    }

    public function getErpConfigurationItemTypesbom()
    {
        return $this->erp_configuration_item_types_bom;
    }

    public function setErpConfigurationItemTypesServices($erp_configuration_item_types_services)
    {
        $this->erp_configuration_item_types_services = $erp_configuration_item_types_services;
    }

    public function getErpConfigurationItemTypesServices()
    {
        return $this->erp_configuration_item_types_services;
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
    
    public function getErp_configuration_item_types_variant_item()
    {
        return $this->erp_configuration_item_types_variant_item;
    }

    public function setErp_configuration_item_types_variant_item($erp_configuration_item_types_variant_item)
    {
        $this->erp_configuration_item_types_variant_item = $erp_configuration_item_types_variant_item;
        return $this;
    }

}