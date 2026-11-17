<?php
ob_start();
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

   class Connection
   {
      // Untypisierte Properties Default automatisch 'null'
      private $servername, $db, $username, $pw; // aus .env (Konstruktor)
      private $ajax_procedure; // Konstruktor-Argument
      private $pdo, $dsn; // erst in connectToDb() gesetzt
      private $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false]; // fester Default
      
      public function __construct($ajax_procedure=false)
      {
         $env=parse_ini_file(__DIR__ . '/.env');
         $this->servername = $env['DB_HOST'];
         $this->db = $env['DB_NAME'];
         $this->username = $env['DB_USER'];
         $this->pw = $env['DB_PASS'];
         $this->ajax_procedure = $ajax_procedure;
      }

      public function connectToDb() 
      {
         $this->dsn = "mysql:host=$this->servername;dbname=$this->db;charset=utf8";
         
         try 
         {
            $this->pdo = new PDO($this->dsn, $this->username, $this->pw,$this->options);

         }
         catch (PDOException $e) 
         {
            error_log($e);
            die();
         }

            return $this->pdo;
      }

      public function closeConnection()
      {
         return null;
      }

   }


