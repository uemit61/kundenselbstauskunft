<?php
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Import_supplier_billing_addres_data
{
    private $import_supplier_billing_addres_data_id,	
            $import_supplier_billing_addres_data_number,	
            $import_supplier_billing_addres_data_company,	
            $import_supplier_billing_addres_data_name,	
            $import_supplier_billing_addres_data_surname,	
            $import_supplier_billing_addres_data_street,	
            $import_supplier_billing_addres_data_house_Number,	
            $import_supplier_billing_addres_data_postcode,	
            $import_supplier_billing_addres_data_city,	
            $import_supplier_billing_addres_data_country,	
            $import_supplier_billing_addres_data_additional_addres,	
            $import_supplier_billing_addres_data_email,	
            $import_supplier_billing_addres_data_phone,	
            $import_id;
            
    


    /**
     * Get the value of import_supplier_billing_addres_data_id
     */ 
    public function getImport_supplier_billing_addres_data_id()
    {
        return $this->import_supplier_billing_addres_data_id;
    }

    /**
     * Set the value of import_supplier_billing_addres_data_id
     *
     * @return  self
     */ 
    public function setImport_supplier_billing_addres_data_id($import_supplier_billing_addres_data_id)
    {
        $this->import_supplier_billing_addres_data_id = $import_supplier_billing_addres_data_id;
        return $this;
    }

            /**
             * Get the value of import_supplier_billing_addres_data_number
             */ 
            public function getImport_supplier_billing_addres_data_number()
            {
                        return $this->import_supplier_billing_addres_data_number;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_number
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_number($import_supplier_billing_addres_data_number)
            {
                        $this->import_supplier_billing_addres_data_number = $import_supplier_billing_addres_data_number;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_company
             */ 
            public function getImport_supplier_billing_addres_data_company()
            {
                        return $this->import_supplier_billing_addres_data_company;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_company
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_company($import_supplier_billing_addres_data_company)
            {
                        $this->import_supplier_billing_addres_data_company = $import_supplier_billing_addres_data_company;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_name
             */ 
            public function getImport_supplier_billing_addres_data_name()
            {
                        return $this->import_supplier_billing_addres_data_name;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_name
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_name($import_supplier_billing_addres_data_name)
            {
                        $this->import_supplier_billing_addres_data_name = $import_supplier_billing_addres_data_name;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_surname
             */ 
            public function getImport_supplier_billing_addres_data_surname()
            {
                        return $this->import_supplier_billing_addres_data_surname;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_surname
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_surname($import_supplier_billing_addres_data_surname)
            {
                        $this->import_supplier_billing_addres_data_surname = $import_supplier_billing_addres_data_surname;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_street
             */ 
            public function getImport_supplier_billing_addres_data_street()
            {
                        return $this->import_supplier_billing_addres_data_street;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_street
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_street($import_supplier_billing_addres_data_street)
            {
                        $this->import_supplier_billing_addres_data_street = $import_supplier_billing_addres_data_street;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_house_Number
             */ 
            public function getImport_supplier_billing_addres_data_house_Number()
            {
                        return $this->import_supplier_billing_addres_data_house_Number;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_house_Number
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_house_Number($import_supplier_billing_addres_data_house_Number)
            {
                        $this->import_supplier_billing_addres_data_house_Number = $import_supplier_billing_addres_data_house_Number;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_postcode
             */ 
            public function getImport_supplier_billing_addres_data_postcode()
            {
                        return $this->import_supplier_billing_addres_data_postcode;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_postcode
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_postcode($import_supplier_billing_addres_data_postcode)
            {
                        $this->import_supplier_billing_addres_data_postcode = $import_supplier_billing_addres_data_postcode;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_city
             */ 
            public function getImport_supplier_billing_addres_data_city()
            {
                        return $this->import_supplier_billing_addres_data_city;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_city
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_city($import_supplier_billing_addres_data_city)
            {
                        $this->import_supplier_billing_addres_data_city = $import_supplier_billing_addres_data_city;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_country
             */ 
            public function getImport_supplier_billing_addres_data_country()
            {
                        return $this->import_supplier_billing_addres_data_country;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_country
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_country($import_supplier_billing_addres_data_country)
            {
                        $this->import_supplier_billing_addres_data_country = $import_supplier_billing_addres_data_country;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_additional_addres
             */ 
            public function getImport_supplier_billing_addres_data_additional_addres()
            {
                        return $this->import_supplier_billing_addres_data_additional_addres;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_additional_addres
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_additional_addres($import_supplier_billing_addres_data_additional_addres)
            {
                        $this->import_supplier_billing_addres_data_additional_addres = $import_supplier_billing_addres_data_additional_addres;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_email
             */ 
            public function getImport_supplier_billing_addres_data_email()
            {
                        return $this->import_supplier_billing_addres_data_email;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_email
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_email($import_supplier_billing_addres_data_email)
            {
                        $this->import_supplier_billing_addres_data_email = $import_supplier_billing_addres_data_email;

                        return $this;
            }

            /**
             * Get the value of import_supplier_billing_addres_data_phone
             */ 
            public function getImport_supplier_billing_addres_data_phone()
            {
                        return $this->import_supplier_billing_addres_data_phone;
            }

            /**
             * Set the value of import_supplier_billing_addres_data_phone
             *
             * @return  self
             */ 
            public function setImport_supplier_billing_addres_data_phone($import_supplier_billing_addres_data_phone)
            {
                        $this->import_supplier_billing_addres_data_phone = $import_supplier_billing_addres_data_phone;

                        return $this;
            }

            /**
             * Get the value of import_id
             */ 
            public function getImport_id()
            {
                        return $this->import_id;
            }

            /**
             * Set the value of import_id
             *
             * @return  self
             */ 
            public function setImport_id($import_id)
            {
                        $this->import_id = $import_id;

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