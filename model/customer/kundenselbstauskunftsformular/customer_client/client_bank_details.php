<?php
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Client_bank_details
{
    private $client_bank_details_id,	
            $client_bank_details_bankname,	
            $client_bank_details_iban,	
            $client_bank_details_bic,	
            $client_id;

    /**
     * Get the value of client_bank_details_id
     */ 
    public function getClient_bank_details_id()
    {
return $this->client_bank_details_id;
    }

    /**
     * Set the value of client_bank_details_id
     *
     * @return  self
     */ 
    public function setClient_bank_details_id($client_bank_details_id)
    {
        $this->client_bank_details_id = $client_bank_details_id;

return $this;
    }

    /**
     * Get the value of client_bank_details_bankname
     */ 
    public function getClient_bank_details_bankname()
    {
        return $this->client_bank_details_bankname;
    }

    /**
     * Set the value of client_bank_details_bankname
     *
     * @return  self
     */ 
    public function setClient_bank_details_bankname($client_bank_details_bankname)
    {
                $this->client_bank_details_bankname = $client_bank_details_bankname;

        return $this;
    }

    /**
     * Get the value of client_bank_details_iban
     */ 
    public function getClient_bank_details_iban()
    {
        return $this->client_bank_details_iban;
    }

    /**
     * Set the value of client_bank_details_iban
     *
     * @return  self
     */ 
    public function setClient_bank_details_iban($client_bank_details_iban)
    {
                $this->client_bank_details_iban = $client_bank_details_iban;

        return $this;
    }

    /**
     * Get the value of client_bank_details_bic
     */ 
    public function getClient_bank_details_bic()
    {
        return $this->client_bank_details_bic;
    }

    /**
     * Set the value of client_bank_details_bic
     *
     * @return  self
     */ 
    public function setClient_bank_details_bic($client_bank_details_bic)
    {
                $this->client_bank_details_bic = $client_bank_details_bic;

        return $this;
    }

    /**
     * Get the value of client_id
     */ 
    public function getClient_id()
    {
        return $this->client_id;
    }

    /**
     * Set the value of client_id
     *
     * @return  self
     */ 
    public function setClient_id($client_id)
    {
                $this->client_id = $client_id;

        return $this;
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