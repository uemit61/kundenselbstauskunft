<?php

    interface SEInterface    
    {
        public static function createRecord($pdo);
        public static function loadEntity($pdo,$arg1,$arg2=0);
        public static function saveEntity($pdo,$user,...$attr);
    }