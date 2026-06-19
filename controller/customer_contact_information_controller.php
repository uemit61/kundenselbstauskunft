<?php

    require_once 'C:/xampp/htdocs/Kundenselbstauskunft/controller/controllerUtils.php';
    require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer.php';
  

    class CIController
    {
        private $model;
        private $customer;
      

        function __construct($model)
        {
            $this->model = $model;
        }

        function handleRequest($data,$customer)
        {

            $this->model->setCustomer($customer);
         
            $this->model->basic_info($data['page']);
            $i = 0;
            $sortData = [];
            $main_id= $this->model->getMain_id();
            
            

             $main_id_name= str_replace('customer_','',$data['page']);
            var_dump($main_id_name);



          
            $is_saved = $this->model->getSaved_data();

            var_dump($main_id.''.$this->model->getSaved_data());

            
            foreach ($data['json_form_data'] as $name => $arr)
            {
                if($i==0)
                {
                    $arr = [$main_id_name.'_id' => $main_id ]+$arr+['customer_id' => $this->model->getCustomer()->getCustomer_id()]+[$main_id_name.'_saved_data' => '1'];   
                }
                else
                {
                    $arr=$arr+[$main_id_name.'_id' => $main_id ];
                    if($is_saved==0)
                        $arr=[$name.'_id' => '']+$arr;
                }
                $sortData =$sortData+[$name =>$arr];
                $i++;
            }

            if($is_saved==0)
            {
                $modiData= [];

                
                if($sortData[$data['page']] != null)
                {
                    $this->model->createRecordContactInformation($sortData[$data['page']],$data['page']);
                    $this->model->basic_info($data['page']);
                }
                    
                $main_id= $this->model->getMain_id();

                  var_dump($main_id.''.$this->model->getSaved_data());
                $i=0;
                foreach($sortData as $key => $subEntity)
                {
                    if($i != 0)
                    {
                        unset($sortData[$key]);
                        $subEntity[$main_id_name.'_id'] = $main_id;
                        $sortData[$key] = $subEntity;
                    }
                    else
                        $i=3;
                }
                var_dump($sortData);
                
                $this->model->createRecords($sortData);
            }
            else
                $this->model->saveEntities($sortData);
        }
    }