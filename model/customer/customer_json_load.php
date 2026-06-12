<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

       

        require_once 'C:\xampp\htdocs\kundenselbstauskunft\connection.php';

        $pdo = new Connection(true);
   
       
        ob_clean();
        try
        {
            
            ob_clean();
            $con = $pdo->connectToDb();
            ob_clean();
            $query ="SELECT * FROM `customer_json_cache` WHERE customer_id = 1 ";
            $stmt = $con->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            var_dump($result[0]['json_data']);
            
                ob_clean();
                header('Content-Type: application/json');
                echo $result[0]['json_data'];  
                ob_end_flush();
                
        }
        catch(PDOException $e)
        {
            echo "laden der Zwichenspeicherung". $e->getMessage();
        }
        ob_end_flush();
       
    


