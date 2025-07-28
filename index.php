
<!DOCTYPE html>
<html lang="en">
<!-- 
    * @file        index.php
    * @author      Ümit Yildirim hopes61@icloud.com
    * @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
    * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
    * @version     1.0.0
    * @since       2024-12-19
-->

<?php 
  
    
    require './connection.php';
    require './indexUtils.php';
    require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer.php';
    
    // GET-REQUESTS werden blockiert Seite lädt sich selbst ohne GET-REQUESTS
    if(!empty($_GET))
    {
        header('Location: index.php');
    }


    
    // Daten werden geholt per AJAX-POST_REQUEST 
    $data = getData() ?? '';

    // Token wird aus der URL geholt
    $token =getToken();

    $page = getPage($data);

    $customer = getCustomer();
    
   

    switch ($page)
    {
        case 'start_page':
            require 'C:/xampp/htdocs/Kundenselbstauskunft/model/start_model.php';
            require 'C:/xampp/htdocs/Kundenselbstauskunft/controller/start_controller.php';
            require 'C:/xampp/htdocs/Kundenselbstauskunft/view/pages/start_page.php';
            $controller = new Start_Controller(new Start_Model($token,new Login_Page(), new Connection()));
            $controller->handleRequest();
        break;

        case 'form_page':
            require 'C:/xampp/htdocs/Kundenselbstauskunft/model/formular_model.php';
            require 'C:/xampp/htdocs/Kundenselbstauskunft/view/pages/form_page.php';
            require 'C:/xampp/htdocs/Kundenselbstauskunft/controller/customer_controller.php';
            $controller =new Customer_Controller(new CIModel(new Form_Page(),new Connection()));
            $controller->start();
            die();
        break;

        case 'dash_page':
            break;
        case 'save_json_cache':
            require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer_json_cache.php';
            $model = new Customer_json_cache(new Connection(true));
            $model->save_json_to_db($data['json_form_data'],$customer);
            die();
        break;

        //FORM-PAGES
        default:
            require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/formular_model.php';
            require_once 'C:/xampp/htdocs/Kundenselbstauskunft/view/pages/form_page.php';
            require_once 'C:/xampp/htdocs/Kundenselbstauskunft/controller/form_page_controller.php';           
            $controller = new CIController(new CIModel(new Form_Page(),new Connection(true),$data));
            $controller->handleRequest($data,$customer);
            die();
        break;

        

        // case 'load_json_cache':
        //     require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer_json_load.php';
        //     $model = new Customer_json_cache(new Connection(true));
        //     $model->get_json_from_db();
        //     die();

    }

