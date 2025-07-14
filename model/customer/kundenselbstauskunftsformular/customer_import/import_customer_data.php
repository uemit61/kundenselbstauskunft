<?php

class Import_customer_data
{
    private $import_customer_data_id,
    	    $import_customer_data_status,	
            $import_customer_data_customer_number,	
            $import_customer_data_different_billing_customer,	
            $import_customer_data_salutation,	
            $import_customer_data_name,	
            $import_customer_data_surname,	
            $import_customer_data_street,	
            $import_customer_data_house_number,
            $import_customer_data_postcode,	
            $import_customer_data_city,	
            $import_customer_data_country,	
            $import_customer_data_company_name,	
            $import_customer_data_additional_addres_information,	
            $import_customer_data_email,	
            $import_customer_data_different_erp_configuration_invoice_email,	
            $import_customer_data_phone,	
            $import_customer_data_financiall_accounting_account,	
            $import_customer_data_tax_number,	
            $import_customer_data_informations,	
            $import_customer_data_calculate_shipping_cost,	
            $import_customer_data_direct_debit_mandate_reference,
            $import_customer_data_direct_debit_bank,
            $import_customer_data_direct_debit_bic,
            $import_customer_data_direct_debit_iban,
            $import_customer_data_direct_debit_account_holder,
            $import_customer_data_sales_tax_exempt,
            $import_customer_data_own_supplier_number,
            $import_customer_data_number_of_additions,
            $import_id;

    /**
     * Get the value of import_customer_data_id
     */ 
    public function getImport_customer_data_id()
    {
        return $this->import_customer_data_id;
    }

    /**
     * Set the value of import_customer_data_id
     *
     * @return  self
     */ 
    public function setImport_customer_data_id($import_customer_data_id)
    {
        $this->import_customer_data_id = $import_customer_data_id;

        return $this;
    }

    /**
     * Get the value of import_customer_data_status
     */ 
    public function getImport_customer_data_status()
    {
                return $this->import_customer_data_status;
    }

    /**
     * Set the value of import_customer_data_status
     *
     * @return  self
     */ 
    public function setImport_customer_data_status($import_customer_data_status)
    {
                $this->import_customer_data_status = $import_customer_data_status;

                return $this;
    }

    /**
     * Get the value of import_customer_data_customer_number
     */ 
    public function getImport_customer_data_customer_number()
    {
                return $this->import_customer_data_customer_number;
    }

    /**
     * Set the value of import_customer_data_customer_number
     *
     * @return  self
     */ 
    public function setImport_customer_data_customer_number($import_customer_data_customer_number)
    {
                $this->import_customer_data_customer_number = $import_customer_data_customer_number;

                return $this;
    }

    /**
     * Get the value of import_customer_data_different_billing_customer
     */ 
    public function getImport_customer_data_different_billing_customer()
    {
                return $this->import_customer_data_different_billing_customer;
    }

    /**
     * Set the value of import_customer_data_different_billing_customer
     *
     * @return  self
     */ 
    public function setImport_customer_data_different_billing_customer($import_customer_data_different_billing_customer)
    {
                $this->import_customer_data_different_billing_customer = $import_customer_data_different_billing_customer;

                return $this;
    }

    /**
     * Get the value of import_customer_data_salutation
     */ 
    public function getImport_customer_data_salutation()
    {
                return $this->import_customer_data_salutation;
    }

    /**
     * Set the value of import_customer_data_salutation
     *
     * @return  self
     */ 
    public function setImport_customer_data_salutation($import_customer_data_salutation)
    {
                $this->import_customer_data_salutation = $import_customer_data_salutation;

                return $this;
    }

    /**
     * Get the value of import_customer_data_name
     */ 
    public function getImport_customer_data_name()
    {
                return $this->import_customer_data_name;
    }

    /**
     * Set the value of import_customer_data_name
     *
     * @return  self
     */ 
    public function setImport_customer_data_name($import_customer_data_name)
    {
                $this->import_customer_data_name = $import_customer_data_name;

                return $this;
    }

    /**
     * Get the value of import_customer_data_surname
     */ 
    public function getImport_customer_data_surname()
    {
                return $this->import_customer_data_surname;
    }

    /**
     * Set the value of import_customer_data_surname
     *
     * @return  self
     */ 
    public function setImport_customer_data_surname($import_customer_data_surname)
    {
                $this->import_customer_data_surname = $import_customer_data_surname;

                return $this;
    }

    /**
     * Get the value of import_customer_data_street
     */ 
    public function getImport_customer_data_street()
    {
                return $this->import_customer_data_street;
    }

    /**
     * Set the value of import_customer_data_street
     *
     * @return  self
     */ 
    public function setImport_customer_data_street($import_customer_data_street)
    {
                $this->import_customer_data_street = $import_customer_data_street;

                return $this;
    }

    /**
     * Get the value of import_customer_data_house_number
     */ 
    public function getImport_customer_data_house_number()
    {
                return $this->import_customer_data_house_number;
    }

    /**
     * Set the value of import_customer_data_house_number
     *
     * @return  self
     */ 
    public function setImport_customer_data_house_number($import_customer_data_house_number)
    {
                $this->import_customer_data_house_number = $import_customer_data_house_number;

                return $this;
    }

    /**
     * Get the value of import_customer_data_postcode
     */ 
    public function getImport_customer_data_postcode()
    {
                return $this->import_customer_data_postcode;
    }

    /**
     * Set the value of import_customer_data_postcode
     *
     * @return  self
     */ 
    public function setImport_customer_data_postcode($import_customer_data_postcode)
    {
                $this->import_customer_data_postcode = $import_customer_data_postcode;

                return $this;
    }

    /**
     * Get the value of import_customer_data_city
     */ 
    public function getImport_customer_data_city()
    {
                return $this->import_customer_data_city;
    }

    /**
     * Set the value of import_customer_data_city
     *
     * @return  self
     */ 
    public function setImport_customer_data_city($import_customer_data_city)
    {
                $this->import_customer_data_city = $import_customer_data_city;

                return $this;
    }

    /**
     * Get the value of import_customer_data_country
     */ 
    public function getImport_customer_data_country()
    {
                return $this->import_customer_data_country;
    }

    /**
     * Set the value of import_customer_data_country
     *
     * @return  self
     */ 
    public function setImport_customer_data_country($import_customer_data_country)
    {
                $this->import_customer_data_country = $import_customer_data_country;

                return $this;
    }

    /**
     * Get the value of import_customer_data_company_name
     */ 
    public function getImport_customer_data_company_name()
    {
                return $this->import_customer_data_company_name;
    }

    /**
     * Set the value of import_customer_data_company_name
     *
     * @return  self
     */ 
    public function setImport_customer_data_company_name($import_customer_data_company_name)
    {
                $this->import_customer_data_company_name = $import_customer_data_company_name;

                return $this;
    }

    /**
     * Get the value of import_customer_data_additional_addres_information
     */ 
    public function getImport_customer_data_additional_addres_information()
    {
                return $this->import_customer_data_additional_addres_information;
    }

    /**
     * Set the value of import_customer_data_additional_addres_information
     *
     * @return  self
     */ 
    public function setImport_customer_data_additional_addres_information($import_customer_data_additional_addres_information)
    {
                $this->import_customer_data_additional_addres_information = $import_customer_data_additional_addres_information;

                return $this;
    }

    /**
     * Get the value of import_customer_data_email
     */ 
    public function getImport_customer_data_email()
    {
                return $this->import_customer_data_email;
    }

    /**
     * Set the value of import_customer_data_email
     *
     * @return  self
     */ 
    public function setImport_customer_data_email($import_customer_data_email)
    {
                $this->import_customer_data_email = $import_customer_data_email;

                return $this;
    }

    /**
     * Get the value of import_customer_data_different_erp_configuration_invoice_email
     */ 
    public function getImport_customer_data_different_erp_configuration_invoice_email()
    {
                return $this->import_customer_data_different_erp_configuration_invoice_email;
    }

    /**
     * Set the value of import_customer_data_different_erp_configuration_invoice_email
     *
     * @return  self
     */ 
    public function setImport_customer_data_different_erp_configuration_invoice_email($import_customer_data_different_erp_configuration_invoice_email)
    {
                $this->import_customer_data_different_erp_configuration_invoice_email = $import_customer_data_different_erp_configuration_invoice_email;

                return $this;
    }

    /**
     * Get the value of import_customer_data_phone
     */ 
    public function getImport_customer_data_phone()
    {
                return $this->import_customer_data_phone;
    }

    /**
     * Set the value of import_customer_data_phone
     *
     * @return  self
     */ 
    public function setImport_customer_data_phone($import_customer_data_phone)
    {
                $this->import_customer_data_phone = $import_customer_data_phone;

                return $this;
    }

    /**
     * Get the value of import_customer_data_financiall_accounting_account
     */ 
    public function getImport_customer_data_financiall_accounting_account()
    {
                return $this->import_customer_data_financiall_accounting_account;
    }

    /**
     * Set the value of import_customer_data_financiall_accounting_account
     *
     * @return  self
     */ 
    public function setImport_customer_data_financiall_accounting_account($import_customer_data_financiall_accounting_account)
    {
                $this->import_customer_data_financiall_accounting_account = $import_customer_data_financiall_accounting_account;

                return $this;
    }

    /**
     * Get the value of import_customer_data_tax_number
     */ 
    public function getImport_customer_data_tax_number()
    {
                return $this->import_customer_data_tax_number;
    }

    /**
     * Set the value of import_customer_data_tax_number
     *
     * @return  self
     */ 
    public function setImport_customer_data_tax_number($import_customer_data_tax_number)
    {
                $this->import_customer_data_tax_number = $import_customer_data_tax_number;

                return $this;
    }

    /**
     * Get the value of import_customer_data_informations
     */ 
    public function getImport_customer_data_informations()
    {
                return $this->import_customer_data_informations;
    }

    /**
     * Set the value of import_customer_data_informations
     *
     * @return  self
     */ 
    public function setImport_customer_data_informations($import_customer_data_informations)
    {
                $this->import_customer_data_informations = $import_customer_data_informations;

                return $this;
    }

    /**
     * Get the value of import_customer_data_calculate_shipping_cost
     */ 
    public function getImport_customer_data_calculate_shipping_cost()
    {
                return $this->import_customer_data_calculate_shipping_cost;
    }

    /**
     * Set the value of import_customer_data_calculate_shipping_cost
     *
     * @return  self
     */ 
    public function setImport_customer_data_calculate_shipping_cost($import_customer_data_calculate_shipping_cost)
    {
                $this->import_customer_data_calculate_shipping_cost = $import_customer_data_calculate_shipping_cost;

                return $this;
    }

    /**
     * Get the value of import_customer_data_direct_debit_mandate_reference
     */ 
    public function getImport_customer_data_direct_debit_mandate_reference()
    {
                return $this->import_customer_data_direct_debit_mandate_reference;
    }

    /**
     * Set the value of import_customer_data_direct_debit_mandate_reference
     *
     * @return  self
     */ 
    public function setImport_customer_data_direct_debit_mandate_reference($import_customer_data_direct_debit_mandate_reference)
    {
                $this->import_customer_data_direct_debit_mandate_reference = $import_customer_data_direct_debit_mandate_reference;

                return $this;
    }

    /**
     * Get the value of import_customer_data_direct_debit_bank
     */ 
    public function getImport_customer_data_direct_debit_bank()
    {
                return $this->import_customer_data_direct_debit_bank;
    }

    /**
     * Set the value of import_customer_data_direct_debit_bank
     *
     * @return  self
     */ 
    public function setImport_customer_data_direct_debit_bank($import_customer_data_direct_debit_bank)
    {
                $this->import_customer_data_direct_debit_bank = $import_customer_data_direct_debit_bank;

                return $this;
    }

    /**
     * Get the value of import_customer_data_direct_debit_bic
     */ 
    

    /**
     * Get the value of import_customer_data_direct_debit_bic
     */ 
    public function getImport_customer_data_direct_debit_bic()
    {
                return $this->import_customer_data_direct_debit_bic;
    }

    /**
     * Set the value of import_customer_data_direct_debit_bic
     *
     * @return  self
     */ 
    public function setImport_customer_data_direct_debit_bic($import_customer_data_direct_debit_bic)
    {
                $this->import_customer_data_direct_debit_bic = $import_customer_data_direct_debit_bic;

                return $this;
    }

    /**
     * Get the value of import_customer_data_direct_debit_iban
     */ 
    public function getImport_customer_data_direct_debit_iban()
    {
        return $this->import_customer_data_direct_debit_iban;
    }

    /**
     * Set the value of import_customer_data_direct_debit_iban
     *
     * @return  self
     */ 
    public function setImport_customer_data_direct_debit_iban($import_customer_data_direct_debit_iban)
    {
                $this->import_customer_data_direct_debit_iban = $import_customer_data_direct_debit_iban;

                return $this;
    }

    /**
     * Get the value of import_customer_data_direct_debit_account_holder
     */ 
    public function getImport_customer_data_direct_debit_account_holder()
    {
                return $this->import_customer_data_direct_debit_account_holder;
    }

    /**
     * Set the value of import_customer_data_direct_debit_account_holder
     *
     * @return  self
     */ 
    public function setImport_customer_data_direct_debit_account_holder($import_customer_data_direct_debit_account_holder)
    {
                $this->import_customer_data_direct_debit_account_holder = $import_customer_data_direct_debit_account_holder;

                return $this;
    }

    /**
     * Get the value of import_customer_data_sales_tax_exempt
     */ 
    public function getImport_customer_data_sales_tax_exempt()
    {
                return $this->import_customer_data_sales_tax_exempt;
    }

    /**
     * Set the value of import_customer_data_sales_tax_exempt
     *
     * @return  self
     */ 
    public function setImport_customer_data_sales_tax_exempt($import_customer_data_sales_tax_exempt)
    {
                $this->import_customer_data_sales_tax_exempt = $import_customer_data_sales_tax_exempt;

                return $this;
    }

    /**
     * Get the value of import_customer_data_own_supplier_number
     */ 
    public function getImport_customer_data_own_supplier_number()
    {
                return $this->import_customer_data_own_supplier_number;
    }

    /**
     * Set the value of import_customer_data_own_supplier_number
     *
     * @return  self
     */ 
    public function setImport_customer_data_own_supplier_number($import_customer_data_own_supplier_number)
    {
                $this->import_customer_data_own_supplier_number = $import_customer_data_own_supplier_number;

                return $this;
    }

    /**
     * Get the value of import_customer_data_number_of_additions
     */ 
    public function getImport_customer_data_number_of_additions()
    {
                return $this->import_customer_data_number_of_additions;
    }

    /**
     * Set the value of import_customer_data_number_of_additions
     *
     * @return  self
     */ 
    public function setImport_customer_data_number_of_additions($import_customer_data_number_of_additions)
    {
                $this->import_customer_data_number_of_additions = $import_customer_data_number_of_additions;

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