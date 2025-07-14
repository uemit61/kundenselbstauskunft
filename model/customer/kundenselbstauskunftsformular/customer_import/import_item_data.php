<?php

class Import_item_data
{
    private $import_item_data_id,	
            $import_item_data_status,	
            $import_item_data_number,	
            $import_item_data_description,	
            $import_item_data_name,	
            $import_item_data_text,	
            $import_item_data_unit,	
            $import_item_data_typ,	
            $import_item_data_single_category_name,	
            $import_item_data_weight,	
            $import_item_data_number_of_selling_prices,	
            $import_item_data_surcharge_number_of_additions_selling_prices,	
            $import_item_data_purchase_price,	
            $import_item_data_procurment_costs,	
            $import_item_data_quality_managment,	
            $import_item_data_number_of_additions,	
            $import_id;

    

    /**
     * Get the value of import_item_data_id
     */ 
    public function getImport_item_data_id()
    {
        return $this->import_item_data_id;
    }

    /**
     * Set the value of import_item_data_id
     *
     * @return  self
     */ 
    public function setImport_item_data_id($import_item_data_id)
    {
        $this->import_item_data_id = $import_item_data_id;

        return $this;
    }

            /**
             * Get the value of import_item_data_status
             */ 
            public function getImport_item_data_status()
            {
                        return $this->import_item_data_status;
            }

            /**
             * Set the value of import_item_data_status
             *
             * @return  self
             */ 
            public function setImport_item_data_status($import_item_data_status)
            {
                        $this->import_item_data_status = $import_item_data_status;

                        return $this;
            }

            /**
             * Get the value of import_item_data_number
             */ 
            public function getImport_item_data_number()
            {
                        return $this->import_item_data_number;
            }

            /**
             * Set the value of import_item_data_number
             *
             * @return  self
             */ 
            public function setImport_item_data_number($import_item_data_number)
            {
                        $this->import_item_data_number = $import_item_data_number;

                        return $this;
            }

            /**
             * Get the value of import_item_data_description
             */ 
            public function getImport_item_data_description()
            {
                        return $this->import_item_data_description;
            }

            /**
             * Set the value of import_item_data_description
             *
             * @return  self
             */ 
            public function setImport_item_data_description($import_item_data_description)
            {
                        $this->import_item_data_description = $import_item_data_description;

                        return $this;
            }

            /**
             * Get the value of import_item_data_name
             */ 
            public function getImport_item_data_name()
            {
                        return $this->import_item_data_name;
            }

            /**
             * Set the value of import_item_data_name
             *
             * @return  self
             */ 
            public function setImport_item_data_name($import_item_data_name)
            {
                        $this->import_item_data_name = $import_item_data_name;

                        return $this;
            }

            /**
             * Get the value of import_item_data_text
             */ 
            public function getImport_item_data_text()
            {
                        return $this->import_item_data_text;
            }

            /**
             * Set the value of import_item_data_text
             *
             * @return  self
             */ 
            public function setImport_item_data_text($import_item_data_text)
            {
                        $this->import_item_data_text = $import_item_data_text;

                        return $this;
            }

            /**
             * Get the value of import_item_data_unit
             */ 
            public function getImport_item_data_unit()
            {
                        return $this->import_item_data_unit;
            }

            /**
             * Set the value of import_item_data_unit
             *
             * @return  self
             */ 
            public function setImport_item_data_unit($import_item_data_unit)
            {
                        $this->import_item_data_unit = $import_item_data_unit;

                        return $this;
            }

            /**
             * Get the value of import_item_data_typ
             */ 
            public function getImport_item_data_typ()
            {
                        return $this->import_item_data_typ;
            }

            /**
             * Set the value of import_item_data_typ
             *
             * @return  self
             */ 
            public function setImport_item_data_typ($import_item_data_typ)
            {
                        $this->import_item_data_typ = $import_item_data_typ;

                        return $this;
            }

            /**
             * Get the value of import_item_data_single_category_name
             */ 
            public function getImport_item_data_single_category_name()
            {
                        return $this->import_item_data_single_category_name;
            }

            /**
             * Set the value of import_item_data_single_category_name
             *
             * @return  self
             */ 
            public function setImport_item_data_single_category_name($import_item_data_single_category_name)
            {
                        $this->import_item_data_single_category_name = $import_item_data_single_category_name;

                        return $this;
            }

            /**
             * Get the value of import_item_data_weight
             */ 
            public function getImport_item_data_weight()
            {
                        return $this->import_item_data_weight;
            }

            /**
             * Set the value of import_item_data_weight
             *
             * @return  self
             */ 
            public function setImport_item_data_weight($import_item_data_weight)
            {
                        $this->import_item_data_weight = $import_item_data_weight;

                        return $this;
            }

            /**
             * Get the value of import_item_data_number_of_selling_prices
             */ 
            public function getImport_item_data_number_of_selling_prices()
            {
                        return $this->import_item_data_number_of_selling_prices;
            }

            /**
             * Set the value of import_item_data_number_of_selling_prices
             *
             * @return  self
             */ 
            public function setImport_item_data_number_of_selling_prices($import_item_data_number_of_selling_prices)
            {
                        $this->import_item_data_number_of_selling_prices = $import_item_data_number_of_selling_prices;

                        return $this;
            }

            /**
             * Get the value of import_item_data_surcharge_number_of_additions_selling_prices
             */ 
            public function getImport_item_data_surcharge_number_of_additions_selling_prices()
            {
                        return $this->import_item_data_surcharge_number_of_additions_selling_prices;
            }

            /**
             * Set the value of import_item_data_surcharge_number_of_additions_selling_prices
             *
             * @return  self
             */ 
            public function setImport_item_data_surcharge_number_of_additions_selling_prices($import_item_data_surcharge_number_of_additions_selling_prices)
            {
                        $this->import_item_data_surcharge_number_of_additions_selling_prices = $import_item_data_surcharge_number_of_additions_selling_prices;

                        return $this;
            }

            /**
             * Get the value of import_item_data_purchase_price
             */ 
            public function getImport_item_data_purchase_price()
            {
                        return $this->import_item_data_purchase_price;
            }

            /**
             * Set the value of import_item_data_purchase_price
             *
             * @return  self
             */ 
            public function setImport_item_data_purchase_price($import_item_data_purchase_price)
            {
                        $this->import_item_data_purchase_price = $import_item_data_purchase_price;

                        return $this;
            }

            /**
             * Get the value of import_item_data_procurment_costs
             */ 
            public function getImport_item_data_procurment_costs()
            {
                        return $this->import_item_data_procurment_costs;
            }

            /**
             * Set the value of import_item_data_procurment_costs
             *
             * @return  self
             */ 
            public function setImport_item_data_procurment_costs($import_item_data_procurment_costs)
            {
                        $this->import_item_data_procurment_costs = $import_item_data_procurment_costs;

                        return $this;
            }

            /**
             * Get the value of import_item_data_quality_managment
             */ 
            public function getImport_item_data_quality_managment()
            {
                        return $this->import_item_data_quality_managment;
            }

            /**
             * Set the value of import_item_data_quality_managment
             *
             * @return  self
             */ 
            public function setImport_item_data_quality_managment($import_item_data_quality_managment)
            {
                        $this->import_item_data_quality_managment = $import_item_data_quality_managment;

                        return $this;
            }

            /**
             * Get the value of import_item_data_number_of_additions
             */ 
            public function getImport_item_data_number_of_additions()
            {
                        return $this->import_item_data_number_of_additions;
            }

            /**
             * Set the value of import_item_data_number_of_additions
             *
             * @return  self
             */ 
            public function setImport_item_data_number_of_additions($import_item_data_number_of_additions)
            {
                        $this->import_item_data_number_of_additions = $import_item_data_number_of_additions;

                        return $this;
            }

            /**
             * Get the value of import_id
             */ 
            public function getImport_id()
            {
                        return $this->import_id;
            }

            /**
             * Set the value of import_id
             *
             * @return  self
             */ 
            public function setImport_id($import_id)
            {
                        $this->import_id = $import_id;

                        return $this;
            }
}