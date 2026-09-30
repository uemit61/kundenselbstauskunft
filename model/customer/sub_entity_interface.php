<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

    interface SEInterface    
    {
        public static function createRecord($pdo);
        public static function loadEntity($pdo,$arg1,$arg2=0);
        public static function saveEntity($pdo,$user,...$attr);
    }