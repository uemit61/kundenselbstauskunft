<?php

class Customer_contact_information
{
    private $contact_information_id;
    private $contact_information_company_name;
    private $contact_information_phone;
    private $contact_information_email;
    private $contact_information_saved_data;


    

    /**
     * Get the value of contact_information_id
     */ 
    public function getContact_information_id()
    {
        return $this->contact_information_id;
    }

    /**
     * Set the value of contact_information_id
     *
     * @return  self
     */ 
    public function setContact_information_id($contact_information_id)
    {
        $this->contact_information_id = $contact_information_id;

        return $this;
    }

    /**
     * Get the value of contact_information_company_name
     */ 
    public function getContact_information_company_name()
    {
        return $this->contact_information_company_name;
    }

    /**
     * Set the value of contact_information_company_name
     *
     * @return  self
     */ 
    public function setContact_information_company_name($contact_information_company_name)
    {
        $this->contact_information_company_name = $contact_information_company_name;

        return $this;
    }

    /**
     * Get the value of contact_information_phone
     */ 
    public function getContact_information_phone()
    {
        return $this->contact_information_phone;
    }

    /**
     * Set the value of contact_information_phone
     *
     * @return  self
     */ 
    public function setContact_information_phone($contact_information_phone)
    {
        $this->contact_information_phone = $contact_information_phone;

        return $this;
    }

    /**
     * Get the value of contact_information_email
     */ 
    public function getContact_information_email()
    {
        return $this->contact_information_email;
    }

    /**
     * Set the value of contact_information_email
     *
     * @return  self
     */ 
    public function setContact_information_email($contact_information_email)
    {
        $this->contact_information_email = $contact_information_email;

        return $this;
    }

    /**
     * Get the value of contact_information_saved_data
     */ 
    public function getContact_information_saved_data()
    {
        return $this->contact_information_saved_data;
    }

    /**
     * Set the value of contact_information_saved_data
     *
     * @return  self
     */ 
    public function setContact_information_saved_data($contact_information_saved_data)
    {
        $this->contact_information_saved_data = $contact_information_saved_data;

        return $this;
    }

      public function basic_info($pdo,$customer)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query='SELECT  `customer_contact_information`.`contact_information_id`,
                            `customer_contact_information`.`contact_information_saved_data`
                    FROM    `customer_contact_information`
                    WHERE   `customer_contact_information`.`customer_id` = :customer_id';

            $stmt = $con->prepare($query);
            $stmt->bindValue(':customer_id', $customer->getCustomer_id());
            $stmt->execute();
            $pdo->closeConnection();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $retVal['main_id']=$result['contact_information_id'];
            $retVal['saved_data']=$result['contact_information_saved_data'];
        }
        catch (Exception $e)
        {
            echo 'Fehler contact_informations_id'.$e->getMessage();
        }

        $pdo->closeConnection();

        return $retVal;
    }

    public static function createRecord($pdo,$customer_contact_information)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query='INSERT INTO `customer_contact_information` 
                                (`contact_information_id`, 
                                `contact_information_company_name`, 
                                `contact_information_phone`, 
                                `contact_information_email`, 
                                `contact_information_saved_data`, 
                                `customer_id`) 
                        VALUES  (:contact_information_id, 
                                :contact_information_company_name, 
                                :contact_information_phone, 
                                :contact_information_email, 
                                :contact_information_saved_data, 
                                :customer_id)';

            $stmt = $con->prepare($query);
            $stmt->execute($customer_contact_information);

            echo 'Kontaktinformationen wurden gespeichert';
            
        }
        catch(Exception $e)
        {
            echo 'Kontaktinformationen wurden nicht gespeichert'.$e;
        }
        $pdo->closeConnection();
    }

    public static function saveEntity($pdo,$customer_contact_information)
    {
        try
        {
            $con = $pdo->connectToDb();
            $query ="UPDATE `customer_contact_information` 
                    SET `contact_information_company_name` = :contact_information_company_name, 
                        `contact_information_phone` = :contact_information_phone, 
                        `contact_information_email` = :contact_information_email, 
                        `contact_information_saved_data` = :contact_information_saved_data 
                    WHERE `contact_information_id` = :contact_information_id
                    AND `customer_id` = :customer_id;";
            $stmt= $con->prepare($query);
            $stmt->execute($customer_contact_information);

            echo 'Kontaktinformationen wurden aktualisiert.';
           
        }
        catch(Exception $e)
        {
            echo 'Kontaktinformationen konnten nicht aktualisiert werden.'.$e;
        }
         $pdo->closeConnection();
    }


}