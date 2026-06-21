<?php

    function createRecordToDB($pdo,$data)
    {
        try
        {
            $import = substr(key($data),0,-3);
            

            $con = $pdo->connectToDb();
            $query ='INSERT INTO `'.$import.'` () VALUE ()';

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

           
            $stmt = $con->prepare($query);
            $stmt->execute($data);
            echo $import.' wurde erfolgreich eingefügt';
        }
        catch(Exception $e)
        {
            echo $import.'ImportAccessData Fehler'.$e;
        }
        $pdo->closeConnection();
    }

    function saveEntityToDB($pdo,$data)
    {
        try
        {
            $import = substr(key($data),0,-3);
           
            $con = $pdo->connectToDb();
            $query="UPDATE `'.$import'` 
                    SET  WHERE `'.$import.'`.`import_id` = :import_id";

            foreach ($data as $key => $value) 
            {
                if($key !='import_id')
                {
                    $setPos = strpos($query,"WHERE")-1;
                    $query = substr($query,0,$setPos).'`'.$key.'` = :'.$key.', '.substr($query,$setPos+1).' ';
                }
            }
            
            $setPos = strpos($query,"WHERE");
            $query = substr($query,0,$setPos-2).substr($query,$setPos-1);
             
            $stmt = $con->prepare($query);
            $stmt->execute($data);

            echo $import.'wurden aktualisiert.';
        
        }
        catch(Exception $e)
        {
            echo 'Fehler beim aktualisieren von der '.$import.' '.$e;
        }
        $pdo->closeConnection();
    }
