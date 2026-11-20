<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
    require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer.php';
    require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer_token.php';
    require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/website_configuration.php';

    class Start_Model 
    {
        private $token =null;
        private $customer_token;
        private $view = null;
        private $pdo = null;
        private $customer = null;

        function __construct($view,$token = null,$pdo=null)
        {
            $this->token = $token;
            $this->pdo = $pdo;
            $this->view = $view;
        }
        
        function login($login_name,$password) // Customer erstellen, als Objekt!
        {
            $this->customer = Customer::loadEntity($this->pdo,$login_name,$password);

            if(!$this->customer)
            {
                $this->update_view(true);
            }
        }


        public function setTokenStatus()
        {
            
        }

        public function checkToken()
        {
            $this->customer_token = Customer_token::getCustomer_token($this->pdo,$this->token);
        }


        public function savePassword($password)
        {
            
            $this->checkToken();
            if(empty($this->customer_token) || $this->customer_token->getCustomer_token_used())
            {
                return;
            }
            else
            {
                $this->customer = new Customer();
                $this->customer->setCustomer_password($password,$this->pdo);
                $this->customer_token->setCustomer_token_used($this->pdo,'1');
            }
            
           
        }

        function update_view($login_failed=false) 
        {
           
            // Startet die GUI mit entsprechendem Logo.
            $logo = WebConfiguration::loadLogo($this->pdo);

            // Token wird überprüft
            if($this->customer_token == null)
            {
                // Wenn die Seite ohne Token aufgerufen wird
                 $tokUsed =true;
            }
            else
            {
                $tokUsed = $this->customer_token->getCustomer_token_used();
            }
            // Bei einem gebrauchtem Token wird die Login-Seite geöffnet,
            // sonst wird zur Registration weitergeleitet.
            $this->view->render(!$tokUsed,$logo,$login_failed);
            die();
        }
    }
