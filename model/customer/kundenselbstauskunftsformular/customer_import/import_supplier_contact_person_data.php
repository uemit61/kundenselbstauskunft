<?php
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
class Import_supplier_contact_person_data
{
   private  $import_supplier_contact_person_data_id,
            $import_supplier_contact_person_data_number,	
            $import_supplier_contact_person_data_salutation,	
            $import_supplier_contact_person_data_name,	
            $import_supplier_contact_person_data_surname,	
            $import_supplier_contact_person_data_email,	
            $import_supplier_contact_person_data_phone,	
            $import_supplier_contact_person_data_second_phone,	
            $import_supplier_contact_person_data_description,	
            $import_id;

   /**
    * Get the value of import_supplier_contact_person_data_id
    */ 
   public function getImport_supplier_contact_person_data_id()
   {
      return $this->import_supplier_contact_person_data_id;
   }

   /**
    * Set the value of import_supplier_contact_person_data_id
    *
    * @return  self
    */ 
   public function setImport_supplier_contact_person_data_id($import_supplier_contact_person_data_id)
   {
      $this->import_supplier_contact_person_data_id = $import_supplier_contact_person_data_id;

      return $this;
   }

            /**
             * Get the value of import_supplier_contact_person_data_number
             */ 
            public function getImport_supplier_contact_person_data_number()
            {
                        return $this->import_supplier_contact_person_data_number;
            }

            /**
             * Set the value of import_supplier_contact_person_data_number
             *
             * @return  self
             */ 
            public function setImport_supplier_contact_person_data_number($import_supplier_contact_person_data_number)
            {
                        $this->import_supplier_contact_person_data_number = $import_supplier_contact_person_data_number;

                        return $this;
            }

            /**
             * Get the value of import_supplier_contact_person_data_salutation
             */ 
            public function getImport_supplier_contact_person_data_salutation()
            {
                        return $this->import_supplier_contact_person_data_salutation;
            }

            /**
             * Set the value of import_supplier_contact_person_data_salutation
             *
             * @return  self
             */ 
            public function setImport_supplier_contact_person_data_salutation($import_supplier_contact_person_data_salutation)
            {
                        $this->import_supplier_contact_person_data_salutation = $import_supplier_contact_person_data_salutation;

                        return $this;
            }

            /**
             * Get the value of import_supplier_contact_person_data_name
             */ 
            public function getImport_supplier_contact_person_data_name()
            {
                        return $this->import_supplier_contact_person_data_name;
            }

            /**
             * Set the value of import_supplier_contact_person_data_name
             *
             * @return  self
             */ 
            public function setImport_supplier_contact_person_data_name($import_supplier_contact_person_data_name)
            {
                        $this->import_supplier_contact_person_data_name = $import_supplier_contact_person_data_name;

                        return $this;
            }

            /**
             * Get the value of import_supplier_contact_person_data_surname
             */ 
            public function getImport_supplier_contact_person_data_surname()
            {
                        return $this->import_supplier_contact_person_data_surname;
            }

            /**
             * Set the value of import_supplier_contact_person_data_surname
             *
             * @return  self
             */ 
            public function setImport_supplier_contact_person_data_surname($import_supplier_contact_person_data_surname)
            {
                        $this->import_supplier_contact_person_data_surname = $import_supplier_contact_person_data_surname;

                        return $this;
            }

            /**
             * Get the value of import_supplier_contact_person_data_email
             */ 
            public function getImport_supplier_contact_person_data_email()
            {
                        return $this->import_supplier_contact_person_data_email;
            }

            /**
             * Set the value of import_supplier_contact_person_data_email
             *
             * @return  self
             */ 
            public function setImport_supplier_contact_person_data_email($import_supplier_contact_person_data_email)
            {
                        $this->import_supplier_contact_person_data_email = $import_supplier_contact_person_data_email;

                        return $this;
            }

            /**
             * Get the value of import_supplier_contact_person_data_phone
             */ 
            public function getImport_supplier_contact_person_data_phone()
            {
                        return $this->import_supplier_contact_person_data_phone;
            }

            /**
             * Set the value of import_supplier_contact_person_data_phone
             *
             * @return  self
             */ 
            public function setImport_supplier_contact_person_data_phone($import_supplier_contact_person_data_phone)
            {
                        $this->import_supplier_contact_person_data_phone = $import_supplier_contact_person_data_phone;

                        return $this;
            }

            /**
             * Get the value of import_supplier_contact_person_data_second_phone
             */ 
            public function getImport_supplier_contact_person_data_second_phone()
            {
                        return $this->import_supplier_contact_person_data_second_phone;
            }

            /**
             * Set the value of import_supplier_contact_person_data_second_phone
             *
             * @return  self
             */ 
            public function setImport_supplier_contact_person_data_second_phone($import_supplier_contact_person_data_second_phone)
            {
                        $this->import_supplier_contact_person_data_second_phone = $import_supplier_contact_person_data_second_phone;

                        return $this;
            }

            /**
             * Get the value of import_supplier_contact_person_data_description
             */ 
            public function getImport_supplier_contact_person_data_description()
            {
                        return $this->import_supplier_contact_person_data_description;
            }

            /**
             * Set the value of import_supplier_contact_person_data_description
             *
             * @return  self
             */ 
            public function setImport_supplier_contact_person_data_description($import_supplier_contact_person_data_description)
            {
                        $this->import_supplier_contact_person_data_description = $import_supplier_contact_person_data_description;

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

    public static function loadFromDB($pdo,$entity_name,$parentEnity_id)
    {
        loadFromDB($pdo,$entity_name,$parentEnity_id);
    }
}

