<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

    //create()
    function createRecordToDB($pdo,$data,$entity_name)
    {
        try
        {
            $con = $pdo->connectToDb();
            $cols=implode(",",array_map(fn($key) => "`$key`",array_keys($data)));
            $placeholder=implode(",",array_map(fn($key) => ":$key",array_keys($data)));
            $query ="INSERT INTO `$entity_name` ($cols) VALUES ($placeholder)";
            $stmt = $con->prepare($query);
            $stmt->execute($data);
            echo $entity_name.' wurde erfolgreich eingefügt';
        }
        catch(Exception $e)
        {
            echo $entity_name.' Fehler'.$e;
        }
        $pdo->closeConnection();
    }

    // read()
    function loadFromDB($pdo,$entity_name,$foreignKeyName,$foreigenKeyId)
    {

        try
        {
 
            $con = $pdo->connectToDb();
          
            $query="SELECT  *
                    FROM    `$entity_name`
                    WHERE   `$foreignKeyName` = :id";

            $class_name = ucfirst($entity_name);
            $stmt = $con->prepare($query);
            $stmt->bindValue(':id',$foreigenKeyId);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $class_name);
            $result = $stmt->fetch();

            // var_dump($result);
            
           
            return $result;
        }
        catch(Exception $e)
        {
            echo 'laden von '.$entity_name.' fehlgeschlagen'.$e;
        }
        // ob_end_flush();

        
    }

    // update()
    function saveEntityToDB($pdo,$data,$entity_name)
    {
        try
        {
            
            $con = $pdo->connectToDb();
            $param =$data;
            
            
            
            if($entity_name == 'customer_client')
            {
                // Wird am ende des Querys eingefügt
                $query_end = '`client_id` = :client_id';
                unset($param['client_id']);
            }
            else
            {
                $key_id= array_key_last($data);
                $query_end = "`$key_id` = :$key_id";  
                unset($param[$key_id]);
            }
    
            $col =implode(",", array_map(fn($key) => "`$key` = :$key",array_keys($param)));
            
            $query="UPDATE `$entity_name`
                    SET $col  
                    WHERE `$entity_name`.$query_end";

            $stmt = $con->prepare($query);
            $stmt->execute($data);

            echo $entity_name.' wurden aktualisiert.';
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von der '.$entity_name.' '.$e;
        }
        $pdo->closeConnection();
    }

    

    