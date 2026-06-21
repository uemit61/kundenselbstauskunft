<?php

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

            public static function saveEntity($pdo,$client_bank_details)
            {
            try
            {
                $con = $pdo->connectToDb();
                $query="UPDATE  `client_bank_details` 
                        SET     `client_bank_details_bankname` = :client_bank_details_bankname,
                                `client_bank_details_iban` = :client_bank_details_iban, 
                                `client_bank_details_bic` = :client_bank_details_bic
                        WHERE   `client_bank_details`.`client_id` = :client_id";
                $stmt = $con->prepare($query);
                $stmt->execute($client_bank_details);

                echo 'Bankdaten erfolgreich aktualisert.';
            }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren der Bankdaten'.$e;
        }
        $pdo->closeConnection();
    }

    public static function createRecord($pdo,$client_bank_details)
    {
        // var_dump($client_main_addres);
        // exit();
        try
        {
            $con = $pdo->connectToDb();
            $query='INSERT INTO  `client_bank_details` 
                            (`client_bank_details_id`, 
                            `client_bank_details_bankname`, 
                            `client_bank_details_iban`, 
                            `client_bank_details_bic`,
                            `client_id`) 
                    VALUES  (:client_bank_details_id, 
                            :client_bank_details_bankname, 
                            :client_bank_details_iban, 
                            :client_bank_details_bic,
                            :client_id)';

            $stmt = $con->prepare($query);
            $stmt->execute($client_bank_details);
            echo 'Bankdaten wurden erfolgreich eingefügt';
            $pdo->closeConnection();
        }
        catch(Exception $e)
        {
            echo 'Fehler beim einfügen der Bankdaten'.$e;
        }
    }
}