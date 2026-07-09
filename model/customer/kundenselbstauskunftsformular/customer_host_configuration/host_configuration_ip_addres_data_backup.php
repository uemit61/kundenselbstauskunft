<?php

require_once('C:\xampp\htdocs\kundenselbstauskunft\model\customer\kundenselbstauskunftsformular\db_transactions.php');

class Host_configuration_ip_addres_data_backup
{
    private $host_configuration_ip_addres_data_backup_id,
            $host_configuration_ip_addres_data_backup_sftp,	
            $host_configuration_ip_addres_data_backup_ftp,	
            $host_configuration_ip_addres_data_backup_smb,	
            $host_configuration_ip_addres_data_backup_backup_ip,	
            $host_configuration_ip_addres_data_backup_backup_share_name,	
            $host_configuration_ip_addres_data_backup_backup_user,	
            $host_configuration_ip_addres_data_backup_backup_password,	
            $host_configuration_id;       


    public function getHost_configuration_ip_addres_data_backup_id()
    {
        return $this->host_configuration_ip_addres_data_backup_id;
    }

    public function setHost_configuration_ip_addres_data_backup_id($host_configuration_ip_addres_data_backup_id)
    {
        $this->host_configuration_ip_addres_data_backup_id = $host_configuration_ip_addres_data_backup_id;

        return $this;
    }

      
    public function getHost_configuration_ip_addres_data_Backup_sftp()
    {
                return $this->host_configuration_ip_addres_data_backup_sftp;
    }

 
    public function setHost_configuration_ip_addres_data_Backup_sftp($host_configuration_ip_addres_data_backup_sftp)
    {
                $this->host_configuration_ip_addres_data_backup_sftp = $host_configuration_ip_addres_data_backup_sftp;

                return $this;
    }

    public function gethost_configuration_ip_addres_data_Backup_ftp()
    {
                return $this->host_configuration_ip_addres_data_backup_ftp;
    }

    public function sethost_configuration_ip_addres_data_Backup_ftp($host_configuration_ip_addres_data_backup_ftp)
    {
                $this->host_configuration_ip_addres_data_backup_ftp = $host_configuration_ip_addres_data_backup_ftp;

                return $this;
    }

    public function getHost_configuration_ip_addres_data_Backup_smb()
    {
                return $this->host_configuration_ip_addres_data_backup_smb;
    }

    public function setHost_configuration_ip_addres_data_Backup_smb($host_configuration_ip_addres_data_backup_smb)
    {
                $this->host_configuration_ip_addres_data_backup_smb = $host_configuration_ip_addres_data_backup_smb;

                return $this;
    }

    public function getHost_configuration_ip_addres_data_backup_ip()
    {
                return $this->host_configuration_ip_addres_data_backup_backup_ip;
    }

    public function setHost_configuration_ip_addres_data_backup_ip($backup_ip)
    {
                $this->host_configuration_ip_addres_data_backup_backup_ip = $backup_ip;

                return $this;
    }

    public function getHost_configuration_ip_addres_data_backup_share_name()
    {
                return $this->host_configuration_ip_addres_data_backup_backup_share_name;
    }

    public function setHost_configuration_ip_addres_data_backup_share_name($backup_share_name)
    {
                $this->host_configuration_ip_addres_data_backup_share_name = $backup_share_name;

                return $this;
    }

   
    public function getHost_configuration_ip_addres_data_backup_user()
    {
                return $this->host_configuration_ip_addres_data_backup_backup_user;
    }
 
    public function setHost_configuration_ip_addres_data_backup_user($backup_user)
    {
                $this->host_configuration_ip_addres_data_backup_backup_user = $backup_user;

                return $this;
    }

    
    public function getHost_configuration_ip_addres_data_backup_password()
    {
                return $this->host_configuration_ip_addres_data_backup_backup_password;
    }

    
      
    public function setHost_configuration_ip_addres_data_backup_password($backup_password)
    {
                $this->host_configuration_ip_addres_data_backup_backup_password = $backup_password;

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