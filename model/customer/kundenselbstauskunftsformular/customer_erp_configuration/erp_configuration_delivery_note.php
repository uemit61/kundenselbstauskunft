<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class Erp_configuration_delivery_note extends DbModel
{
    protected   $erp_configuration_delivery_note_id,
                $erp_configuration_delivery_note_month,	
                $erp_configuration_delivery_note_year,	
                $erp_configuration_delivery_note_first,	
                $erp_configuration_id;

    public function setErpConfigurationDeliveryNoteId($erp_configuration_delivery_note_id)
    {
        $this->erp_configuration_delivery_note_id = $erp_configuration_delivery_note_id;
    }

    public function getErpConfigurationDeliveryNoteId()
    {
        return $this->erp_configuration_delivery_note_id;
    }

    public function setErpConfigurationDeliveryNoteMonth($erp_configuration_delivery_note_month)
    {
        $this->erp_configuration_delivery_note_month = $erp_configuration_delivery_note_month;
    }

    public function getErpConfigurationDeliveryNoteMonth()
    {
        return $this->erp_configuration_delivery_note_month;
    }

    public function setErpConfigurationDeliveryNoteYear($erp_configuration_delivery_note_year)
    {
        $this->erp_configuration_delivery_note_year = $erp_configuration_delivery_note_year;
    }

    public function getErpConfigurationDeliveryNoteYear()
    {
        return $this->erp_configuration_delivery_note_year;
    }

    public function setErpConfigurationDeliveryNoteFirst($erp_configuration_delivery_note_first)
    {
        $this->erp_configuration_delivery_note_first = $erp_configuration_delivery_note_first;
    }

    public function getErpConfigurationDeliveryNoteFirst()
    {
        return $this->erp_configuration_delivery_note_first;
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