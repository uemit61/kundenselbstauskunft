<?php

    function createRecordToDB($pdo,$data,$entity_name)
    {
        // var_dump($data);
        // var_dump($entity_name);
        // exit();

        try
        {
            
            

            $con = $pdo->connectToDb();
            $query ='INSERT INTO `'.$entity_name.'` () VALUE ()';

           

            foreach ($data as $key => $value) 
            {
                $var = '`'.$key.'`,';

                // Die Positionen der schließenden Klammern werden ermittelt
                $firstIns = strpos($query,')');
                $query = substr($query,0,$firstIns).$var.substr($query,$firstIns);
                $firstIns = strpos($query,')');
                $secIns =  strpos($query,')',$firstIns+1);
                $query = substr($query,0,$secIns).':'.$key.','.substr($query,$secIns);
            }

            $firstIns = strpos($query,')');
            $query = substr($query,0,$firstIns-1).substr($query,$firstIns);
            $firstIns = strpos($query,')');
            $secIns =  strpos($query,')',$firstIns+1);
            $query = substr($query,0,$secIns-1).substr($query,$secIns);

            // if($entity_name =='client_main_addres')
            // {
            //     var_dump($data);
            //     var_dump($query);
            //     exit();
            // }
            
            
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

    function saveEntityToDB($pdo,$data,$entity_name)
    {
        try
        {
            
            $con = $pdo->connectToDb();
            

            if($entity_name == 'customer_client')
            {
                // Wird am ende des Querys eingefügt
                $query_end = '`client_id` ="'.reset($data).'"';
            }
            else
            {
                $query_end = array_key_last($data)." = '".end($data)."'";
            }

            $query="UPDATE `$entity_name`
                    SET  WHERE `$entity_name`.".$query_end;


            // var_dump($query);
            // exit();
            foreach ($data as $key => $value) 
            {
                $setPos = strpos($query,"WHERE")-1;
                $query = substr($query,0,$setPos).'`'.$key.'` = :'.$key.', '.substr($query,$setPos+1).' ';
            }
          
            // Das letzte Komma entfernen
            $query = str_replace(", WHERE", " WHERE", $query);
           
          
            
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
