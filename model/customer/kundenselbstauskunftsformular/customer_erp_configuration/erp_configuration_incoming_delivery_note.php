<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class erp_configuration_incoming_delivery_note extends DbModel
{
    protected   $erp_configuration_incoming_delivery_note_id,
                $erp_configuration_incoming_delivery_note_month,	
                $erp_configuration_incoming_delivery_note_year,	
                $erp_configuration_incoming_delivery_note_first,	
                $erp_configuration_id;

    public function setErpConfigurationIncomingDeliveryId($erp_configuration_incoming_delivery_note_id)
    {
        $this->erp_configuration_incoming_delivery_note_id = $erp_configuration_incoming_delivery_note_id;
    }

    public function getErpConfigurationIncomingDeliveryId()
    {
        return $this->erp_configuration_incoming_delivery_note_id;
    }

    public function setErpConfigurationIncomingDeliveryMonth($erp_configuration_incoming_delivery_note_month)
    {
        $this->erp_configuration_incoming_delivery_note_month = $erp_configuration_incoming_delivery_note_month;
    }

    public function getErpConfigurationIncomingDeliveryMonth()
    {
        return $this->erp_configuration_incoming_delivery_note_month;
    }

    public function setErpConfigurationIncomingDeliveryYear($erp_configuration_incoming_delivery_note_year)
    {
        $this->erp_configuration_incoming_delivery_note_year = $erp_configuration_incoming_delivery_note_year;
    }

    public function getErpConfigurationIncomingDeliveryYear()
    {
        return $this->erp_configuration_incoming_delivery_note_year;
    }

    public function setErpConfigurationIncomingDeliveryFirst($erp_configuration_incoming_delivery_note_first)
    {
        $this->erp_configuration_incoming_delivery_note_first = $erp_configuration_incoming_delivery_note_first;
    }

    public function getErpConfigurationIncomingDeliveryFirst()
    {
        return $this->erp_configuration_incoming_delivery_note_first;
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