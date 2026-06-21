H<?php

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
            $host_configuration_ip_addres_data_backup_host_configuration_id;       


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
                return $this->backup_ip;
    }

    public function setHost_configuration_ip_addres_data_backup_ip($backup_ip)
    {
                $this->backup_ip = $backup_ip;

                return $this;
    }

    public function getHost_configuration_ip_addres_data_backup_share_name()
    {
                return $this->backup_share_name;
    }

    public function setHost_configuration_ip_addres_data_backup_share_name($backup_share_name)
    {
                $this->backup_share_name = $backup_share_name;

                return $this;
    }

   
    public function getHost_configuration_ip_addres_data_backup_user()
    {
                return $this->backup_user;
    }
 
    public function setHost_configuration_ip_addres_data_backup_user($backup_user)
    {
                $this->backup_user = $backup_user;

                return $this;
    }

    
    public function getHost_configuration_ip_addres_data_backup_password()
    {
                return $this->backup_password;
    }

    
      
    public function setHost_configuration_ip_addres_data_backup_password($backup_password)
    {
                $this->backup_password = $backup_password;

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


    public static function createRecord($pdo,$host_configuration_ip_addres_data_backup)
    {
        try
        {
            // var_dump($host_configuration_ip_addres_data_backup);
            // exit();
            $con = $pdo->connectToDb();
            $query = 'INSERT INTO `host_configuration_ip_addres_data_backup` 
                                    (`host_configuration_ip_addres_data_backup_id`, 
                                    `host_configuration_ip_addres_data_backup_sftp`, 
                                    `host_configuration_ip_addres_data_backup_ftp`, 
                                    `host_configuration_ip_addres_data_backup_smb`, 
                                    `host_configuration_ip_addres_data_backup_ip`, 
                                    `host_configuration_ip_addres_data_backup_share_name`, 
                                    `host_configuration_ip_addres_data_backup_user`, 
                                    `host_configuration_ip_addres_data_backup_password`, 
                                    `host_configuration_id`)
                    VALUES (:host_configuration_ip_addres_data_backup_id,
                            :host_configuration_ip_addres_data_backup_sftp, 
                            :host_configuration_ip_addres_data_backup_ftp, 
                            :host_configuration_ip_addres_data_backup_smb,
                            :host_configuration_ip_addres_data_backup_ip,
                            :host_configuration_ip_addres_data_backup_share_name,
                            :host_configuration_ip_addres_data_backup_user,
                            :host_configuration_ip_addres_data_backup_password,
                            :host_configuration_id)';

            $stmt = $con->prepare($query);
            $stmt->execute($host_configuration_ip_addres_data_backup);
            echo 'HostConfBackup wurde erfolgreich eingefügt';
        }
        catch(Exception $e)
        {
            echo 'HostConfIpBackup Fehler'.$e;
        }
        $pdo->closeConnection();
    }

    public static function saveEntity($pdo,$host_configuration_ip_addres_data_backup)
    {
        try
        {
            // var_dump($host_configuration_ip_addres_data_backup);
            // exit();
            $con = $pdo->connectToDb();
            $query="UPDATE `host_configuration_ip_addres_data_backup` 
                    SET     `host_configuration_ip_addres_data_backup_sftp`= :host_configuration_ip_addres_data_backup_sftp,
                            `host_configuration_ip_addres_data_backup_ftp` = :host_configuration_ip_addres_data_backup_ftp,
                            `host_configuration_ip_addres_data_backup_smb` = :host_configuration_ip_addres_data_backup_smb,
                            `host_configuration_ip_addres_data_backup_ip` = :host_configuration_ip_addres_data_backup_ip,
                            `host_configuration_ip_addres_data_backup_share_name` = :host_configuration_ip_addres_data_backup_share_name,
                            `host_configuration_ip_addres_data_backup_user` = :host_configuration_ip_addres_data_backup_user,
                            `host_configuration_ip_addres_data_backup_password` = :host_configuration_ip_addres_data_backup_password
                    WHERE   `host_configuration_ip_addres_data_backup`.`host_configuration_id` = :host_configuration_id";
        $stmt = $con->prepare($query);
        $stmt->execute($host_configuration_ip_addres_data_backup);

        echo 'HostConfigBackup wurden aktualisiert.';
        
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von der HostconfiBackup'.$e;
        }
        $pdo->closeConnection();
    }
}