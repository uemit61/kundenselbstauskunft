<?php
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

function getCustomer()
{
    session_start();
        $user = $_SESSION['customer'] ?? '';
    session_write_close();
    return $user;
}
