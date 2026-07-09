<?php

require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');

class Customer_contact_information
{
    public  $contact_information_id,
            $contact_information_company_name,
            $contact_information_phone,
            $contact_information_email,
            $contact_information_saved_data;

    public  $contact_information_contact_person,
            $contact_information_addres;

    public  $pdo,$customer, $customerId,$foreignKeyId, $primaeryKeyId, $primaeryKeyName, $foreignKeyName =null, $entityName = 'customer_contact_information', $entityList;

    public $formData;
  
    public function __construct($pdo=null,$customer=null, $primaeryKeyName = null,$foreignKeyName=null)
    {
        $this->pdo = $pdo;
        $this->customer = $customer;
        $this->foreignKeyName = $foreignKeyName;
        $this->primaeryKeyName = $primaeryKeyName;

        foreach(glob('C:/xampp/htdocs/Kundenselbstauskunft/model/customer/kundenselbstauskunftsformular/customer_contact_information/*.php') as $path)
        {
            require_once $path;
            $filename = pathinfo($path, PATHINFO_FILENAME);
            $this->entityList[] =$filename;
        }       
    }

    public function loadFormData()
    {
        $this->foreignKeyId = $this->basic_info($this->pdo, $this->customer)['main_id'];
        $this->formData[$this->entityName] = $this->loadFromDB();

        foreach($this->entityList as $entity)
        {
            if($entity !== 'customer_contact_information')
            {   
                $class = ucfirst($entity);
                $this->$entity =  new $class();
                $this->formData[$entity] = $this->$entity->loadFromDB($this->pdo,$entity,$this->foreignKeyName,$this->foreignKeyId);
            }
        }
        return $this->formData;
    }
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

    public static function saveEntity($pdo,$data)
    {
        saveEntityToDB($pdo, $data, 'customer_contact_information');
    }

    public static function createRecord($pdo,$data)
    {
        var_dump('what?');
        createRecordToDB($pdo,$data, 'customer_contact_information');
    }

    public function loadFromDB()
    {
        return loadFromDB($this->pdo,$this->entityName,$this->foreignKeyName,$this->customer->getCustomer_id());
    }
}