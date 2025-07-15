<?php

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

   public static function createRecord($pdo,$import_supplier_contact_person_data)
    {
        try
        {
            // var_dump($import_supplier_contact_person_data);
            // exit();
            $con = $pdo->connectToDb();
            $query ='INSERT INTO `import_supplier_contact_person_data`
                                 () VALUE ()';

             foreach ($import_supplier_contact_person_data as $key => $value) 
            {
                $var = '`'.$key.'`,';

                // Die Positionen der schließenden Klammern werden ermittelt
                $firstIns = strpos($query,')');

                $query = substr($query,0,$firstIns).$var.substr($query,$firstIns);
                $firstIns = strpos($query,')');
                $secIns =  strpos($query,')',$firstIns+1);
                $query = substr($query,0,$secIns).':'.$key.','.substr($query,$secIns);
            }
                $firstIns = strpos($query,')');
                $query = substr($query,0,$firstIns-1).substr($query,$firstIns);
                $firstIns = strpos($query,')');
                $secIns =  strpos($query,')',$firstIns+1);
                $query = substr($query,0,$secIns-1).substr($query,$secIns);

           
            $stmt = $con->prepare($query);
            $stmt->execute($import_supplier_contact_person_data);
            echo 'ImportsuppcontactpersonData wurde erfolgreich eingefügt';
        }
        catch(Exception $e)
        {
            echo 'ImportsuppcontactpersonData Fehler'.$e;
        }
        $pdo->closeConnection();
    }

    public static function saveEntity($pdo,$import_supplier_contact_person_data)
    {
        try
        {
            // var_dump($import_supplier_contact_person_data);
            // exit();

            $con = $pdo->connectToDb();
            $query="UPDATE `import_supplier_contact_person_data` 
                    SET  WHERE `import_supplier_contact_person_data`.`import_id` = :import_id";

            foreach ($import_supplier_contact_person_data as $key => $value) 
            {
               $setPos = strpos($query,"WHERE")-1;
                $query = substr($query,0,$setPos).'`'.$key.'` = :'.$key.', '.substr($query,$setPos+1).' ';
            }
            
              $setPos = strpos($query,"WHERE");
                $query = substr($query,0,$setPos-2).substr($query,$setPos-1);
             
        $stmt = $con->prepare($query);
        $stmt->execute($import_supplier_contact_person_data);

        echo 'supplierContactPersonData wurden aktualisiert.';
        
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von der supplierContactPersonData'.$e;
        }
        $pdo->closeConnection();
    }
}

