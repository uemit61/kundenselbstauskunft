<?php
    class Host_configuration_ip_addres_erp
    {
        private $host_configuration_ip_addre_erp_id,
                $host_configuration_ip_addres_erp_ip,
                $host_configuration_ip_addres_erp_subnetmask,
                $host_configuration_ip_addres_erp_gateway,
                $host_configuration_ip_addres_erp_dns,
                $host_configuration_id;

        public function getHost_configuration_ip_addres_erp_id()
        {
                return $this->host_configuration_ip_addre_erp_id;
        }

        
        public function setHost_configuration_ip_addres_erp_id($host_configuration_ip_addres_erp_id)
        {
                $this->host_configuration_ip_addres_erp_id = $host_configuration_ip_addres_erp_id;

                return $this;
        }

                
        public function getHost_configuration_ip_addres_erp_ip()
        {
                return $this->host_configuration_ip_addres_erp_ip;
        }

        
        public function setHost_configuration_ip_addres_erp_ip($host_configuration_ip_addres_erp_ip)
        {
                $this->host_configuration_ip_addres_erp_ip = $host_configuration_ip_addres_erp_ip;

                return $this;
        }

               
        public function getHost_configuration_ip_addres_erp_subnetmask()
        {
                return $this->host_configuration_ip_addres_erp_subnetmask;
        }

               
        public function setHost_configuration_ip_addres_erp_subnetmask($host_configuration_ip_addres_erp_subnetmasketmask)
        {
                $this->host_configuration_ip_addres_erp_subnetmasketmask = $host_configuration_ip_addres_erp_subnetmasketmask;

                return $this;
        }

                
        public function getHost_configuration_ip_addres_erp_gateway()
        {
                        return $this->host_configuration_ip_addres_erp_gateway;
        }

               
        public function setHost_configuration_ip_addres_erp_gateway($host_configuration_ip_addres_erp_gatewayway)
        {
                $this->host_configuration_ip_addres_erp_gatewayway = $host_configuration_ip_addres_erp_gatewayway;

                return $this;
        }

        
        public function getHost_configuration_ip_addres_erp_dns()
        {
                return $this->host_configuration_ip_addres_erp_dns;
        }

               
        public function setHost_configuration_ip_addres_erp_dns($host_configuration_ip_addres_erp_dns)
        {
                $this->host_configuration_ip_addres_erp_dns = $host_configuration_ip_addres_erp_dns;

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

        public static function createRecord($pdo,$host_configuration_ip_addres_erp)
        {
                try
            {
                // var_dump($host_configuration_ip_addres_erp);
                // exit();
                $con = $pdo->connectToDb();
                $query = 'INSERT INTO `host_configuration_ip_addres_erp` 
                                        (`host_configuration_ip_addres_erp_id`, 
                                        `host_configuration_ip_addres_erp_ip`, 
                                        `host_configuration_ip_addres_erp_subnetmask`, 
                                        `host_configuration_ip_addres_erp_gateway`, 
                                        `host_configuration_ip_addres_erp_dns`, 
                                        `host_configuration_id`) 
                        VALUES (:host_configuration_ip_addres_erp_id,
                                :host_configuration_ip_addres_erp_ip, 
                                :host_configuration_ip_addres_erp_subnetmask, 
                                :host_configuration_ip_addres_erp_gateway,
                                :host_configuration_ip_addres_erp_dns,
                                :host_configuration_id)';

                $stmt = $con->prepare($query);
                $stmt->execute($host_configuration_ip_addres_erp);
                echo 'HostConfIpErp wurde erfolgreich eingefügt';
            }
            catch(Exception $e)
            {
                echo 'HostConfIpErp Fehler'.$e;
            }
            $pdo->closeConnection();
        }

         public static function saveEntity($pdo,$host_configuration_ip_addres_erp)
        {
            try
            {
                // var_dump($host_configuration_ip_addres_erp);
                // exit();
                $con = $pdo->connectToDb();
                $query="UPDATE `host_configuration_ip_addres_erp` 
                        SET     `host_configuration_ip_addres_erp_ip` = :host_configuration_ip_addres_erp_ip,
                                `host_configuration_ip_addres_erp_subnetmask` = :host_configuration_ip_addres_erp_subnetmask,
                                `host_configuration_ip_addres_erp_gateway` = :host_configuration_ip_addres_erp_gateway, 
                                `host_configuration_ip_addres_erp_dns` = :host_configuration_ip_addres_erp_dns
                        WHERE `host_configuration_ip_addres_erp`.`host_configuration_id` = :host_configuration_id";
            $stmt = $con->prepare($query);
            $stmt->execute($host_configuration_ip_addres_erp);

            echo 'HostConfigERP wurden aktualisiert.';
            
            }
            catch(Exception $e)
            {
                echo 'Fehler beim aktualisieren von der HostconfigERP'.$e;
            }
            $pdo->closeConnection();
        }
                
    }