<?php
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Client_legal_information
{
    private $client_legal_information_id,	
            $client_legal_information_ust_idnr,	
            $client_legal_information_hr_number,
            $client_legal_information_juristication,	
            $client_id;

    

    /**
     * Get the value of client_legal_information_id
     */ 
    public function getClient_legal_information_id()
    {
        return $this->client_legal_information_id;
    }

    /**
     * Set the value of client_legal_information_id
     *
     * @return  self
     */ 
    public function setClient_legal_information_id($client_legal_information_id)
    {
        $this->client_legal_information_id = $client_legal_information_id;

        return $this;
    }

            /**
             * Get the value of client_legal_information_ust_idnr
             */ 
            public function getClient_legal_information_ust_idnr()
            {
                        return $this->client_legal_information_ust_idnr;
            }

            /**
             * Set the value of client_legal_information_ust_idnr
             *
             * @return  self
             */ 
            public function setClient_legal_information_ust_idnr($client_legal_information_ust_idnr)
            {
                        $this->client_legal_information_ust_idnr = $client_legal_information_ust_idnr;

                        return $this;
            }

            /**
             * Get the value of client_legal_information_hr_number
             */ 
            public function getClient_legal_information_hr_number()
            {
                        return $this->client_legal_information_hr_number;
            }

            /**
             * Set the value of client_legal_information_hr_number
             *
             * @return  self
             */ 
            public function setClient_legal_information_hr_number($client_legal_information_hr_number)
            {
                        $this->client_legal_information_hr_number = $client_legal_information_hr_number;

                        return $this;
            }

            /**
             * Get the value of client_legal_information_juristication
             */ 
            public function getClient_legal_information_juristication()
            {
                        return $this->client_legal_information_juristication;
            }

            /**
             * Set the value of client_legal_information_juristication
             *
             * @return  self
             */ 
            public function setClient_legal_information_juristication($client_legal_information_juristication)
            {
                        $this->client_legal_information_juristication = $client_legal_information_juristication;

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

    


}