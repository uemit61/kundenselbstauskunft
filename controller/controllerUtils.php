<?php

class ControllerUtils
{
    //Methoden zum Sanitizieren der Daten

    public static function _sanitizeString($val)
    {
        return htmlspecialchars(trim(strip_tags(preg_replace("/['=\"\\^]+/", '', $val), ENT_QUOTES))); 
    }
    
    /**
     * Santiziert die Daten eines beliebigen Arrays mit der Funktion
     * _sanitizeString($val)
     * @param array $array Der zu sanitiziernder Array.
     * @return array Sanitizierter Array
     * @copyright Ümit Yildirim
    */
    public  static function _sanitizeArray($array)
    {
        foreach($array as $key => $value)   
        {
            $array[$key] = ControllerUtils::_sanitizeString($value);
        }
        return $array;
    }

    //Methoden zur Valdierung der Daten

}

