<?php

require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
    class Host_configuration_ip_addres_erp
    {
        private $host_configuration_ip_addres_erp_id,
                $host_configuration_ip_addres_erp_ip,
                $host_configuration_ip_addres_erp_subnetmask,
                $host_configuration_ip_addres_erp_gateway,
                $host_configuration_ip_addres_erp_dns,
                $host_configuration_id;

        public function getHost_configuration_ip_addres_erp_id()
        {
                return $this->host_configuration_ip_addres_erp_id;
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

               
        public function setHost_configuration_ip_addres_erp_subnetmask($host_configuration_ip_addres_erp_subnetmask)
        {
                $this->host_configuration_ip_addres_erp_subnetmask = $host_configuration_ip_addres_erp_subnetmask;

                return $this;
        }

                
        public function getHost_configuration_ip_addres_erp_gateway()
        {
                        return $this->host_configuration_ip_addres_erp_gateway;
        }

               
        public function setHost_configuration_ip_addres_erp_gateway($host_configuration_ip_addres_erp_gateway)
        {
                $this->host_configuration_ip_addres_erp_gateway = $host_configuration_ip_addres_erp_gateway;

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

        public static function saveEntity($pdo,$data,$entity_name)
        {
            saveEntityToDB($pdo, $data, $entity_name);
        }

        public static function createRecord($pdo,$data,$entity_name)
        {
            createRecordToDB($pdo,$data, $entity_name);
        }

      public static function loadFromDB($pdo,$entity_name,$foreignKeyName,$parentEnity_id)
    {
        return loadFromDB($pdo,$entity_name,$foreignKeyName,$parentEnity_id);     
    }

              
              
    }