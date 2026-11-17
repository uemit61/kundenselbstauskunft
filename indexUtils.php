<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
ob_clean();
require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer.php';

function getToken()
{
    $uri = $_SERVER['REQUEST_URI'];
    $parts = explode("/", $uri);
    $last_part = implode("/", array_slice($parts, 3));
    
    
    if (!preg_match("/[\^'=\"]/", $uri, $matches))  // zusatzliche uberprufung
    {
        $token=$last_part;
    }

    return $token;
}


function getData()
{
    $data = json_decode(file_get_contents('php://input'), true);
    return $data;
}

function getPage($data)
{
    if($data == null)
    {
        session_start();
        $page = $_SESSION['page'] ?? 'start_page';
    }
    else
    {  
        session_start();
        $page = $data['page'] ?? 'start_page';
    }
    $_SESSION['page']=null;
    session_write_close();

    return $page;
}

function getLoginCustomerId()
{
    session_start();
        $login_customer_id = $_SESSION['login_customer_id'] ?? '';
    session_write_close();
    return $login_customer_id;
}
