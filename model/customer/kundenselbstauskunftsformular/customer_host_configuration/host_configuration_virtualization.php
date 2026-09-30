<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
    class Host_configuration_virtualization extends DbModel
    {
        protected   $virtualization_id,
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
    }