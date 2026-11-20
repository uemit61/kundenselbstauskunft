<?php
ob_start();
ob_clean();
?>
<!DOCTYPE html>
<html lang="en">
<!-- 
    * @author      Ümit Yildirim <uemit611@outlook.de>
    * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
    * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
-->

<?php 
ob_clean();
    
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

    $customer = getCustomer(new Connection(true));
    
   

    switch ($page)
    {
        case 'start_page':
            require 'C:/xampp/htdocs/Kundenselbstauskunft/model/start_model.php';
            require 'C:/xampp/htdocs/Kundenselbstauskunft/controller/start_controller.php';
            require 'C:/xampp/htdocs/Kundenselbstauskunft/view/pages/start_page.php';
            $controller = new Start_Controller(new Start_Model(new Login_Page(),$token, new Connection()));
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
            $model = new Customer_json_cache(new Connection(true), $customer,$data['json_form_data']);
            $model->save_json_to_db();
            die();
        break;
        case 'load_json_cache':
            require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer_json_cache.php';
            $model = new Customer_json_cache(new Connection(true), $customer,$data['json_form_data']);
            $model->load_json_to_db();
            die();


        case 'load':
            
            ob_clean();
            require_once 'C:\xampp\htdocs\kundenselbstauskunft\controller\load_controller.php';
            require_once 'C:\xampp\htdocs\kundenselbstauskunft\model\load_model.php';
            $controller = new LoadController(new LoadModel(new Connection(true),$customer));
            $controller->handleRequest($data);
        break;

        //FORM-PAGES
        default:
            require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/formular_model.php';
            require_once 'C:/xampp/htdocs/Kundenselbstauskunft/view/pages/form_page.php';
            require_once 'C:/xampp/htdocs/Kundenselbstauskunft/controller/form_page_controller.php';           
            $controller = new CIController(new CIModel(new Form_Page(),new Connection(true),$data),new Connection(),$customer);
            $controller->handleRequest($data);
            die();
        break;

    
    }

