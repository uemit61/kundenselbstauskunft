<?php
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Import_supplier_data
{
    private $import_supplier_data_id,
            $import_supplier_data_status,
            $import_supplier_data_number,	
            $import_supplier_data_salutation,	
            $import_supplier_data_name,	
            $import_supplier_data_surname,	
            $import_supplier_data_street,	
            $import_supplier_data_house_number,	
            $import_supplier_data_postcode,	
            $import_supplier_data_city,	
            $import_supplier_data_country,	
            $import_supplier_data_email,	
            $import_supplier_data_hompage,	
            $import_supplier_data_phone,	
            $import_supplier_data_company_Name,	
            $import_supplier_data_sales_tax_id,	
            $import_supplier_data_fibu_account,	
            $import_supplier_data_own_customer_number,	
            $import_supplier_data_informations,	
            $import_supplier_data_tax_free_delivery,	
            $import_supplier_data_addition_number,	
            $import_id;	


    /**
     * Get the value of import_supplier_data_id
     */ 
    public function getImport_supplier_data_id()
    {
        return $this->import_supplier_data_id;
    }

    /**
     * Set the value of import_supplier_data_id
     *
     * @return  self
     */ 
    public function setImport_supplier_data_id($import_supplier_data_id)
    {
        $this->import_supplier_data_id = $import_supplier_data_id;

        return $this;
    }

            /**
             * Get the value of import_supplier_data_status
             */ 
            public function getImport_supplier_data_status()
            {
                        return $this->import_supplier_data_status;
            }

            /**
             * Set the value of import_supplier_data_status
             *
             * @return  self
             */ 
            public function setImport_supplier_data_status($import_supplier_data_status)
            {
                        $this->import_supplier_data_status = $import_supplier_data_status;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_number
             */ 
            public function getImport_supplier_data_number()
            {
                        return $this->import_supplier_data_number;
            }

            /**
             * Set the value of import_supplier_data_number
             *
             * @return  self
             */ 
            public function setImport_supplier_data_number($import_supplier_data_number)
            {
                        $this->import_supplier_data_number = $import_supplier_data_number;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_salutation
             */ 
            public function getImport_supplier_data_salutation()
            {
                        return $this->import_supplier_data_salutation;
            }

            /**
             * Set the value of import_supplier_data_salutation
             *
             * @return  self
             */ 
            public function setImport_supplier_data_salutation($import_supplier_data_salutation)
            {
                        $this->import_supplier_data_salutation = $import_supplier_data_salutation;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_name
             */ 
            public function getImport_supplier_data_name()
            {
                        return $this->import_supplier_data_name;
            }

            /**
             * Set the value of import_supplier_data_name
             *
             * @return  self
             */ 
            public function setImport_supplier_data_name($import_supplier_data_name)
            {
                        $this->import_supplier_data_name = $import_supplier_data_name;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_surname
             */ 
            public function getImport_supplier_data_surname()
            {
                        return $this->import_supplier_data_surname;
            }

            /**
             * Set the value of import_supplier_data_surname
             *
             * @return  self
             */ 
            public function setImport_supplier_data_surname($import_supplier_data_surname)
            {
                        $this->import_supplier_data_surname = $import_supplier_data_surname;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_postcode
             */ 
            public function getImport_supplier_data_postcode()
            {
                        return $this->import_supplier_data_postcode;
            }

            /**
             * Set the value of import_supplier_data_postcode
             *
             * @return  self
             */ 
            public function setImport_supplier_data_postcode($import_supplier_data_postcode)
            {
                        $this->import_supplier_data_postcode = $import_supplier_data_postcode;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_street
             */ 
            public function getImport_supplier_data_street()
            {
                        return $this->import_supplier_data_street;
            }

            /**
             * Set the value of import_supplier_data_street
             *
             * @return  self
             */ 
            public function setImport_supplier_data_street($import_supplier_data_street)
            {
                        $this->import_supplier_data_street = $import_supplier_data_street;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_house_number
             */ 
            public function getImport_supplier_data_house_number()
            {
                        return $this->import_supplier_data_house_number;
            }

            /**
             * Set the value of import_supplier_data_house_number
             *
             * @return  self
             */ 
            public function setImport_supplier_data_house_number($import_supplier_data_house_number)
            {
                        $this->import_supplier_data_house_number = $import_supplier_data_house_number;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_city
             */ 
            public function getImport_supplier_data_city()
            {
                        return $this->import_supplier_data_city;
            }

            /**
             * Set the value of import_supplier_data_city
             *
             * @return  self
             */ 
            public function setImport_supplier_data_city($import_supplier_data_city)
            {
                        $this->import_supplier_data_city = $import_supplier_data_city;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_country
             */ 
            public function getImport_supplier_data_country()
            {
                        return $this->import_supplier_data_country;
            }

            /**
             * Set the value of import_supplier_data_country
             *
             * @return  self
             */ 
            public function setImport_supplier_data_country($import_supplier_data_country)
            {
                        $this->import_supplier_data_country = $import_supplier_data_country;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_email
             */ 
            public function getImport_supplier_data_email()
            {
                        return $this->import_supplier_data_email;
            }

            /**
             * Set the value of import_supplier_data_email
             *
             * @return  self
             */ 
            public function setImport_supplier_data_email($import_supplier_data_email)
            {
                        $this->import_supplier_data_email = $import_supplier_data_email;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_hompage
             */ 
            public function getImport_supplier_data_hompage()
            {
                        return $this->import_supplier_data_hompage;
            }

            /**
             * Set the value of import_supplier_data_hompage
             *
             * @return  self
             */ 
            public function setImport_supplier_data_hompage($import_supplier_data_hompage)
            {
                        $this->import_supplier_data_hompage = $import_supplier_data_hompage;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_company_Name
             */ 
            public function getImport_supplier_data_company_Name()
            {
                        return $this->import_supplier_data_company_Name;
            }

            /**
             * Set the value of import_supplier_data_company_Name
             *
             * @return  self
             */ 
            public function setImport_supplier_data_company_Name($import_supplier_data_company_Name)
            {
                        $this->import_supplier_data_company_Name = $import_supplier_data_company_Name;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_sales_tax_id
             */ 
            public function getImport_supplier_data_sales_tax_id()
            {
                        return $this->import_supplier_data_sales_tax_id;
            }

            /**
             * Set the value of import_supplier_data_sales_tax_id
             *
             * @return  self
             */ 
            public function setImport_supplier_data_sales_tax_id($import_supplier_data_sales_tax_id)
            {
                        $this->import_supplier_data_sales_tax_id = $import_supplier_data_sales_tax_id;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_fibu_account
             */ 
            public function getImport_supplier_data_fibu_account()
            {
                        return $this->import_supplier_data_fibu_account;
            }

            /**
             * Set the value of import_supplier_data_fibu_account
             *
             * @return  self
             */ 
            public function setImport_supplier_data_fibu_account($import_supplier_data_fibu_account)
            {
                        $this->import_supplier_data_fibu_account = $import_supplier_data_fibu_account;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_informations
             */ 
            public function getImport_supplier_data_informations()
            {
                        return $this->import_supplier_data_informations;
            }

            /**
             * Set the value of import_supplier_data_informations
             *
             * @return  self
             */ 
            public function setImport_supplier_data_informations($import_supplier_data_informations)
            {
                        $this->import_supplier_data_informations = $import_supplier_data_informations;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_tax_free_delivery
             */ 
            public function getImport_supplier_data_tax_free_delivery()
            {
                        return $this->import_supplier_data_tax_free_delivery;
            }

            /**
             * Set the value of import_supplier_data_tax_free_delivery
             *
             * @return  self
             */ 
            public function setImport_supplier_data_tax_free_delivery($import_supplier_data_tax_free_delivery)
            {
                        $this->import_supplier_data_tax_free_delivery = $import_supplier_data_tax_free_delivery;

                        return $this;
            }

            /**
             * Get the value of import_supplier_data_addition_number
             */ 
            public function getImport_supplier_data_addition_number()
            {
                        return $this->import_supplier_data_addition_number;
            }

            /**
             * Set the value of import_supplier_data_addition_number
             *
             * @return  self
             */ 
            public function setImport_supplier_data_addition_number($import_supplier_data_addition_number)
            {
                        $this->import_supplier_data_addition_number = $import_supplier_data_addition_number;

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