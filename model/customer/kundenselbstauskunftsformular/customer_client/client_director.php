<?php

class Client_director
{
    private $client_director_id,
            $client_director_gender,	
            $client_director_name,	
            $client_director_surname,	
            $client_id;	

    /**
     * Get the value of client_director_id
     */ 
    public function getClient_director_id()
    {
        return $this->client_director_id;
    }

    /**
     * Set the value of client_director_id
     *
     * @return  self
     */ 
    public function setClient_director_id($client_director_id)
    {
        $this->client_director_id = $client_director_id;

        return $this;
    }

            /**
             * Get the value of client_director_gender
             */ 
            public function getClient_director_gender()
            {
                        return $this->client_director_gender;
            }

            /**
             * Set the value of client_director_gender
             *
             * @return  self
             */ 
            public function setClient_director_gender($client_director_gender)
            {
                        $this->client_director_gender = $client_director_gender;

                        return $this;
            }

            /**
             * Get the value of client_director_name
             */ 
            public function getClient_director_name()
            {
                        return $this->client_director_name;
            }

            /**
             * Set the value of client_director_name
             *
             * @return  self
             */ 
            public function setClient_director_name($client_director_name)
            {
                        $this->client_director_name = $client_director_name;

                        return $this;
            }

            /**
             * Get the value of client_director_surname
             */ 
            public function getClient_director_surname()
            {
                        return $this->client_director_surname;
            }

            /**
             * Set the value of client_director_surname
             *
             * @return  self
             */ 
            public function setClient_director_surname($client_director_surname)
            {
                        $this->client_director_surname = $client_director_surname;

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

             public static function saveEntity($pdo,$client_director)
            {
            try
            {
                $con = $pdo->connectToDb();
                $query="UPDATE  `client_director` 
                        SET     `client_director_gender` = :client_director_gender,
                                `client_director_name` = :client_director_name, 
                                `client_director_surname` = :client_director_surname
                        WHERE   `client_id` = :client_id";
                $stmt = $con->prepare($query);
                $stmt->execute($client_director);

                echo 'Direktor erfolgreich aktualisert.';
            }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren der Direktor'.$e;
        }
        $pdo->closeConnection();
    }

    public static function createRecord($pdo,$client_director)
    {
        // var_dump($client_main_addres);
        // exit();
        try
        {
            $con = $pdo->connectToDb();
            $query='INSERT INTO  `client_director` 
                            (`client_director_id`, 
                            `client_director_gender`, 
                            `client_director_name`, 
                            `client_director_surname`,
                            `client_id`) 
                    VALUES  (:client_director_id, 
                            :client_director_gender, 
                            :client_director_name, 
                            :client_director_surname,
                            :client_id)';

            $stmt = $con->prepare($query);
            $stmt->execute($client_director);
            echo 'Direktor wurden erfolgreich eingefügt';
            $pdo->closeConnection();
        }
        catch(Exception $e)
        {
            echo 'Fehler beim einfügen der Direktor'.$e;
        }
    }

        
}