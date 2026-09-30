<?php

/**
* @author      Ümit Yildirim <uemit611@outlook.de>
* @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.


*/

    function sanitizeVariable($var)
    {
        return htmlspecialchars(trim(strip_tags(preg_replace("/['=\"\\^]+/", '', $var), ENT_QUOTES))); 
    }
    
    function sanitizeArray($array)
    {
        foreach($array as $key => $value)   
        {
            $array[$key] = sanitizeVariable($value);
        }

        return $array;
    }   
?>