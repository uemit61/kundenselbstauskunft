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
           
            // Das Customer-Objekt wird übergeben.s
            $this->model->setCustomer($customer);

            // Die Informationen, PrimaryKey und SekundaryKey werden in die Model geladen
            $this->model->basic_info($data['page']);

            // Die Infoswerden von der Model geholt
            $main_id= $this->model->getMain_id(); // Wenn existiert ist auch data saved!
            $is_saved = $this->model->getSaved_data(); // redundant

            var_dump($is_saved.''.$main_id);
            
            //AttributsNamen werden angepasst
            $main_id_name= str_replace('customer_','',$data['page']);

            // Die Fieldsets bekommen die Key(ID) übergeben um in die DB gespeichert werden zu können.
            $sortData = [];
            $i = 0;
            
            foreach ($data['json_form_data'] as $name => $arr)
            {
                if($i==0 && $main_id_name != 'host_configuration')
                {
                    $arr = [$main_id_name.'_id' => $main_id ]+$arr+[$main_id_name.'_saved_data' => '1']+['customer_id' => $this->model->getCustomer()->getCustomer_id()];   
                }
                else
                {
                    $arr=$arr+[$main_id_name.'_id' => $main_id ];
                    if($is_saved==0)
                        $arr = [$name.'_id' =>''] + $arr;
                }
                $sortData =$sortData+[$name =>$arr];
                $i++;
            }
           
           

            if($is_saved==null)
            {
                // var_dump($data['page']);
                // exit();

                
                if($data['page'] != null)
                {
                    if($data['page'] != 'customer_host_configuration')
                    {
                        // var_dump(61);
                        // exit();
                        $this->model->createRecordInformation($data['page'],$sortData[$data['page']]);
                    } 
                    else
                    {
                        // var_dump(61);
                        // exit();
                        $this->model->createRecordInformation($data['page']);
                    }
                    
                    $this->model->basic_info($data['page']);
                }
                
                $main_id= $this->model->getMain_id();

                // var_dump($main_id.''.$this->model->getSaved_data());
                // exit();

                // var_dump($sortData);
                // exit();

                
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
                // var_dump($sortData);
                // exit();
                
                $this->model->createRecords($sortData);
            }
            else
            {
                $this->model->saveEntities($sortData);
            }
                
        }
    }