<?php

    function createRecordToDB($pdo,$data,$entity_name)
    {
        try
        {
            // var_dump(key($data));
            

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

            // var_dump($query);
            
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
            $query="UPDATE `$entity_name`
                    SET  WHERE `$entity_name`.".array_key_last($data);

            foreach ($data as $key => $value) 
            {
                if($key !='entity_name_id')
                {
                    $setPos = strpos($query,"WHERE")-1;
                    $query = substr($query,0,$setPos).'`'.$key.'` = :'.$key.', '.substr($query,$setPos+1).' ';
                }
            }
            
            $setPos = strpos($query,"WHERE");
            $query = substr($query,0,$setPos-2).substr($query,$setPos-1);
             
            // var_dump($query);
            
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
