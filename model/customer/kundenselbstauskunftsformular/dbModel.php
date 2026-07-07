<?php

require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
abstract class DbModel implements JsonSerializable
{ 
    


    #[Override]
    public function jsonSerialize(): mixed
    {   
        $vars =get_object_vars($this);
        unset($vars['pdo'],$vars['customer'],$vars['customerId'],
        $vars['foreignKeyId'],$vars['primaeryKeyId'],
        $vars['primaeryKeyName'],$vars['foreignKeyName'],
        $vars['entityName'],$vars['entityList'],
        $vars['formData']);
        return $vars;
    }

    public static function createRecord($pdo,$data,$e)
    {
        createRecordToDB($pdo,$data, $e);
    }

    public static function saveEntity($pdo,$data,$e)
    {
        saveEntityToDB($pdo, $data, $e);
    }

    public static function loadFromDB($pdo,$entity_name,$foreignKeyName,$parentEnity_id)
    {
        return loadFromDB($pdo,$entity_name,$foreignKeyName,$parentEnity_id);     
    }

}