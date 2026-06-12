<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

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

