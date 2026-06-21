<?php


/*
* @file        hostConfig_form.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/


    function customer_host_configuration()
    {  
        $host_configuration_virtualization=
        [
            'field_name' => 'Virtualisierung',
            'dBName' => 'host_configuration_virtualization',
            ['host_configuration_virtualization_' =>  ['form-check',['checkbox'],'Virtualisierungshost']],
            [ 'host_configuration_virtualization_product'=>['form-floating flex-fill',['text'],'Produkt'],'host_configuration_virtualization_version' => ['form-floating flex-fill',['text'],'Version']],	
        ];

        $host_configuration_ip_addres_erp=
        [
            'field_name' => 'Legacy-ERP',
            'dBName' => 'host_configuration_ip_addres_erp',
            ['host_configuration_ip_addres_erp_ip' => ['form-floating flex-fill',['text'],'IP-Addrese']],	
            ['host_configuration_ip_addres_erp_subnetmask'	=>['form-floating flex-fill',['text'],'Subnetzmaske']],
            ['host_configuration_ip_addres_erp_gateway' => ['form-floating flex-fill',['text'],'Gateway']],
            ['host_configuration_ip_addres_erp_dns' => ['form-floating flex-fill',['text'],'DNS']],
        ];

        $host_configuration_ip_addres_data_backup=
        [
            'field_name' => 'Datensicherung',
            'dBName' => 'host_configuration_ip_addres_data_backup',
            ['host_configuration_ip_addres_data_backup_sftp' =>  ['form-check',['checkbox'],'SFTP'],
            'host_configuration_ip_addres_data_backup_ftp' =>  ['form-check',['checkbox'],'FTP'],
            'host_configuration_ip_addres_data_backup_smb' =>  ['form-check',['checkbox'],'SMB']],
            ['host_configuration_ip_addres_data_backup_ip'	=>   ['form-floating flex-fill',['text'],'IP-Addrese']],
            ['host_configuration_ip_addres_data_backup_share_name'	=>   ['form-floating flex-fill',['text'],'Freigabename']],
            ['host_configuration_ip_addres_data_backup_user'	=>   ['form-floating flex-fill',['text'],'Username']],
            ['host_configuration_ip_addres_data_backup_password'	=>   ['form-floating flex-fill',['password'],'Passwort']]
        
        ];

        $host_configuration_ip_addres_connect_external_device=
        [
            'field_name' => 'Externe Laufwerke',
            'dBName' => 'host_configuration_ip_addres_connect_external_device',
            ['host_configuration_ip_addres_connect_external_device_sftp' =>  ['form-check',['checkbox'],'SFTP'],
            'host_configuration_ip_addres_connect_external_device_ftp' =>  ['form-check',['checkbox'],'FTP'],
            'host_configuration_ip_addres_connect_external_device_smb' =>  ['form-check',['checkbox'],'SMB']],
            ['host_configuration_ip_addres_connect_external_device_ip'	=>   ['form-floating flex-fill',['text'],'IP-Addrese']],
            ['host_configuration_ip_addres_connect_external_device_share_name'	=>   ['form-floating flex-fill',['text'],'Freigabename']],
            ['host_configuration_ip_addres_connect_external_device_user'	=>   ['form-floating flex-fill',['text'],'Username']],
            ['host_configuration_ip_addres_connect_external_device_password'	=>   ['form-floating flex-fill',['password'],'Passwort']]
        ];

        $customer_host_configuration=
        [
            [$host_configuration_virtualization],
            [$host_configuration_ip_addres_erp],
            [$host_configuration_ip_addres_data_backup,$host_configuration_ip_addres_connect_external_device],
        ];

        return ['form_label'=>'Host-Einstellungen','form_id' =>'customer_host_configuration','form_body'=>$customer_host_configuration];


    }
?> 