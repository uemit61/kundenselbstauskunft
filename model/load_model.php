<?php

class LoadModel
{

    private $pdo;
    
    public function __construct(Connection $pdo) 
    {
        $this->pdo = $pdo;
    }


}