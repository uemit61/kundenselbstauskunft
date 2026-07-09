<?php

    require_once 'C:/xampp/htdocs/Kundenselbstauskunft/controller/controllerUtils.php';
    require_once 'C:/xampp/htdocs/Kundenselbstauskunft/model/customer/customer.php';
  

    class CIController
    {
        private $model;
        private $customer;
      
        public function __construct($model)
        {
            $this->model = $model;
        }

        public function handleRequest($data,$customer)
        {
            // var_dump($data);
            // exit();
            $data['page'] = str_replace('form_','',$data['page']);

            // Das Customer-Objekt wird übergeben.s
            $this->model->setCustomer($customer);

            // Die Informationen, PrimaryKey und SekundaryKey werden in die Model geladen
            $this->model->basic_info($data['page']);
            
            // Die Infoswerden von der Model geholt
            if($data['page'] != 'customer_client')
            {
                $main_id= $this->model->getMain_id(); 
                $is_saved = $this->model->getSaved_data();

                var_dump($main_id);
                
                //AttributsNamen werden angepasst
                $this->saveToDb($data, $main_id, $is_saved);
            }
            else
            {
                $numberClients = count($data['json_form_data'])/6;
                $infoNumClients = $this->model->getNumberClients() ;

                $datas[]= array_chunk($data['json_form_data'],6,true);

                //Wenn etwas gelöscht wurde 
                if($infoNumClients>$numberClients)
                {
                    //Anzahl der gelöschten Datensätze
                    $numbDelete= $infoNumClients-$numberClients;
                    // Gelöschte Pätze freigeben
                    for($i=0; $i<$numbDelete;$i++) 
                    {
                        $this->model->delete($infoNumClients-$i,'customer_client');
                    }

                    $infoNumClients = $numberClients;
                }
                
                // exit();
                // var_dump($data['json_form_data']);
                // $tdata['json_form_data'] = $datas[0][1];

                // $tdata['page'] = $data['page'];
                // var_dump($tdata);
                // exit();

                for($i= 1; $i < $numberClients+1; $i++ )
                {
                    $tdata['json_form_data'] = $datas[0][$i-1];
                    //Die Keynames werden angepasst.
                    if($i>1)
                    {
                        foreach($tdata['json_form_data'] as $k=>$v)
                        {
                            $knew = substr($k,0,-1);
                            $tdata['json_form_data'][ $knew ] = $tdata['json_form_data'][$k];
                            unset($tdata['json_form_data'][$k]);
                        }
                    }
                    $tdata['page'] = $data['page'];

                    //Existiert ein Datensatz in der DB?
                    if($infoNumClients>=$i)
                    {
                        $this->saveToDb($tdata,$i,true);
                    }
                    else
                    {
                        $this->saveToDb($tdata,$i,false);
                    }
                }  
            }
        }

        private function saveToDb($data,$main_id,$is_saved):void
        {

            $data['page'] = str_replace('form_','',$data['page']);
            // var_dump($data);
            // exit();

            $main_id_name= str_replace('customer_','',$data['page']);
           
            $sortData = [];
            $i = 0;

            foreach ($data['json_form_data'] as $name => $arr)
            {
                if($i==0 && $main_id_name != 'host_configuration' && $main_id_name != 'import')
                {
                    $arr = [$main_id_name.'_id' => $main_id ]+$arr+[$main_id_name.'_saved_data' => '1']+['customer_id' => $this->model->getCustomer()->getCustomer_id()];   
                }
                else
                {
                    // var_dump($main_id);
                    // exit();
                    $arr=$arr+[$main_id_name.'_id' => $main_id ];
                    if($is_saved==0)
                        $arr = [$name.'_id' =>''] + $arr;
                }
                $sortData =$sortData+[$name =>$arr];
                $i++;
            }
        
            

            if($is_saved==null || $is_saved== false)
            {
                // var_dump($sortData);
                // exit();
                
                if($data['page'] != null && $data['page']!='customer_client')
                {
                    if($data['page'] != 'customer_host_configuration' && $data['page'] != 'customer_import' )
                    {
                        $this->model->createRecordInformation($data['page'],$sortData[$data['page']]);
                    } 
                    else
                    {
                        $this->model->createRecordInformation($data['page']);
                    }
                    $this->model->basic_info($data['page']);
                }
                
                $main_id= $this->model->getMain_id();

                // var_dump($main_id.''.$this->model->getSaved_data());
                // exit();

                // var_dump($sortData);
                // exit();

                if($data['page'] != 'customer_client')
                {
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
                }

                // var_dump($sortData);
                // var_dump('44');
                // exit();
                
                $this->model->createRecords($sortData);
            }
            else
            {
                //  var_dump($sortData);
                // exit();
                $this->model->saveEntities($sortData);
            }
        }

        
    }