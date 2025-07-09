<?php
    class Host_configuration_virtualization
    {
        private $virtualization_id,
                $virtualisation_product,
                $virtualisation_version,
                $host_configuration_id;

        public function getVirtualization_id()
        {
            return $this->virtualization_id;
        }

     
        public function setVirtualization_id($virtualization_id)
        {
            $this->virtualization_id = $virtualization_id;
            return $this;
        }

        public function getVirtualisation_product()
        {
            return $this->virtualisation_product;
        }

        public function setVirtualisation_produt($virtualisation_product)
        {
                $this->virtualisation_product = $virtualisation_product;
                return $this;
        }

        public function getVirtualisation_version()
        {
        return $this->virtualisation_version;
        }

     
        public function setVirtualisation_version($virtualisation_version)
        {
            $this->virtualisation_version = $virtualisation_version;

            return $this;
        }

        
        public function getHost_configuration_id()
        {
            return $this->host_configuration_id;
        }

        
        public function setHost_configuration_id($host_configuration_id)
        {
            $this->host_configuration_id = $host_configuration_id;
            return $this;
        }

        public static function createRecord($pdo,$host_configuration_virtualization)
        {
            try
            {
                // var_dump($host_configuration_virtualization);
                // exit();
                $con = $pdo->connectToDb();
                $query = 'INSERT INTO `host_configuration_virtualization` 
                                    (`host_configuration_virtualization_id`, 
                                    `host_configuration_virtualization_`, 
                                    `host_configuration_virtualization_product`, 
                                    `host_configuration_virtualization_version`, 
                                    `host_configuration_id`) 
                        VALUES (:host_configuration_virtualization_id,
                                :host_configuration_virtualization_, 
                                :host_configuration_virtualization_product, 
                                :host_configuration_virtualization_version,
                                :host_configuration_id)';

                $stmt = $con->prepare($query);
                $stmt->execute($host_configuration_virtualization);
                echo 'HostVirtualisierung wurde erfolgreich eingefügt';
            }
            catch(Exception $e)
            {
                echo 'HostVirtualisierung Fehler'.$e;
            }
            $pdo->closeConnection();
        }

        public static function saveEntity($pdo,$host_configuration_virtualization)
        {
            try
            {
                // var_dump($host_configuration_virtualization);
                // exit();
                $con = $pdo->connectToDb();
                $query="UPDATE `host_configuration_virtualization` 
                        SET `host_configuration_virtualization_` = :host_configuration_virtualization_, 
                            `host_configuration_virtualization_product` = :host_configuration_virtualization_product, 
                            `host_configuration_virtualization_version` = :host_configuration_virtualization_version
                        WHERE `host_configuration_virtualization`.`host_configuration_id` = :host_configuration_id";
            $stmt = $con->prepare($query);
            $stmt->execute($host_configuration_virtualization);

            echo 'HostConfigVirtu wurden aktualisiert.';
            
            }
            catch(Exception $e)
            {
                echo 'Fehler beim aktualisieren von der HostconfigVirtu'.$e;
            }
            $pdo->closeConnection();
        }

    }