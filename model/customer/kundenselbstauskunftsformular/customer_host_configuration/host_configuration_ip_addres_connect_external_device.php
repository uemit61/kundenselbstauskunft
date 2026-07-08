<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');
require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\dbModel.php');
class Host_configuration_ip_addres_connect_external_device extends DbModel
{
    protected   $host_configuration_ip_addres_connect_external_device_id,
                $host_configuration_ip_addres_connect_external_device_sftp,	
                $host_configuration_ip_addres_connect_external_device_ftp,	
                $host_configuration_ip_addres_connect_external_device_smb,	
                $host_configuration_ip_addres_connect_external_device_backup_ip,	
                $host_configuration_ip_addres_connect_external_device_backup_share_name,	
                $host_configuration_ip_addres_connect_external_device_share_name,
                $host_configuration_ip_addres_connect_external_device_backup_user,	
                $host_configuration_ip_addres_connect_external_device_backup_password,	
                $host_configuration_id;       


    public function gethost_configuration_ip_addres_connect_external_device_id()
    {
        return $this->host_configuration_ip_addres_connect_external_device_id;
    }

    public function sethost_configuration_ip_addres_connect_external_device_id($host_configuration_ip_addres_connect_external_device_id)
    {
        $this->host_configuration_ip_addres_connect_external_device_id = $host_configuration_ip_addres_connect_external_device_id;
        return $this;
    }

      
    public function gethost_configuration_ip_addres_connect_external_device_sftp()
    {
        return $this->host_configuration_ip_addres_connect_external_device_sftp;
    }

 
    public function sethost_configuration_ip_addres_connect_external_device_sftp($host_configuration_ip_addres_connect_external_device_sftp)
    {
        $this->host_configuration_ip_addres_connect_external_device_sftp = $host_configuration_ip_addres_connect_external_device_sftp;
        return $this;
    }

    public function gethost_configuration_ip_addres_connect_external_device_ftp()
    {
        return $this->host_configuration_ip_addres_connect_external_device_ftp;
    }

    public function sethost_configuration_ip_addres_connect_external_device_ftp($host_configuration_ip_addres_connect_external_device_ftp)
    {
        $this->host_configuration_ip_addres_connect_external_device_ftp = $host_configuration_ip_addres_connect_external_device_ftp;
        return $this;
    }

    public function gethost_configuration_ip_addres_connect_external_device_smb()
    {
        return $this->host_configuration_ip_addres_connect_external_device_smb;
    }

    public function sethost_configuration_ip_addres_connect_external_device_smb($host_configuration_ip_addres_connect_external_device_smb)
    {
        $this->host_configuration_ip_addres_connect_external_device_smb = $host_configuration_ip_addres_connect_external_device_smb;
        return $this;
    }

    public function gethost_configuration_ip_addres_connect_external_device_ip()
    {
        return $this->host_configuration_ip_addres_connect_external_device_backup_ip;
    }

    public function sethost_configuration_ip_addres_connect_external_device_ip($backup_ip)
    {
        $this->host_configuration_ip_addres_connect_external_device_backup_ip = $backup_ip;
        return $this;
    }

    public function gethost_configuration_ip_addres_connect_external_device_share_name()
    {
        return $this->host_configuration_ip_addres_connect_external_device_share_name;
    }

    public function sethost_configuration_ip_addres_connect_external_device_share_name($share_name)
    {
        $this->host_configuration_ip_addres_connect_external_device_share_name = $share_name;
        return $this;
    }

    public function gethost_configuration_ip_addres_connect_external_device_backup_share_name()
    {
        return $this->host_configuration_ip_addres_connect_external_device_backup_share_name;
    }

    public function sethost_configuration_ip_addres_connect_external_device_backup_share_name($backup_share_name)
    {
        $this->host_configuration_ip_addres_connect_external_device_backup_share_name = $backup_share_name;
        return $this;
    }

   
    public function gethost_configuration_ip_addres_connect_external_device_user()
    {
                return $this->host_configuration_ip_addres_connect_external_device_backup_user;
    }
 
    public function sethost_configuration_ip_addres_connect_external_device_user($backup_user)
    {
                $this->host_configuration_ip_addres_connect_external_device_backup_user = $backup_user;
                return $this;
    }

    
    public function gethost_configuration_ip_addres_connect_external_device_password()
    {
        return $this->host_configuration_ip_addres_connect_external_device_backup_password;
    }

    
      
    public function sethost_configuration_ip_addres_connect_external_device_password($backup_password)
    {
        $this->host_configuration_ip_addres_connect_external_device_backup_password = $backup_password;
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