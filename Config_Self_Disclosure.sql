
-- -----------------------------------------------------
-- Schema Config_Self_Disclosure
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Config_Self_Disclosure` ;

-- -----------------------------------------------------
-- Schema Config_Self_Disclosure
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Config_Self_Disclosure` DEFAULT CHARACTER SET utf8 ;
USE `Config_Self_Disclosure` ;

-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`customer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`customer` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`customer` (
  `customer_id` INT NOT NULL AUTO_INCREMENT,
  `customer_login_name` VARCHAR(45) NULL,
  `customer_password` VARCHAR(255) NULL,
  `customer_infos_imported` TINYINT(1) NULL,
  `customer_admin` TINYINT(1) NULL,
  PRIMARY KEY (`customer_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`customer_contact_Information`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`customer_contact_Information` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`customer_contact_Information` (
  `contact_information_id` INT NOT NULL AUTO_INCREMENT,
  `contact_Information_company_name` VARCHAR(45) NULL,
  `contact_Information_telefon` INT NULL,
  `contact_Information_email` VARCHAR(45) NULL,
  `contact_Information_saved_data` TINYINT(1) NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`contact_information_id`, `customer_id`),
  CONSTRAINT `fk_Contact_Information_Customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `Config_Self_Disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`customer_client`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`customer_client` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`customer_client` (
  `client_id` INT NOT NULL AUTO_INCREMENT,
  `client_name` VARCHAR(45) NULL,
  `client_company_name` VARCHAR(45) NULL,
  `client_phone_number` INT NULL,
  `client_email` VARCHAR(45) NULL,
  `client_ust_idnr` VARCHAR(45) NULL,
  `client_hr_number` VARCHAR(45) NULL,
  `client_juristication` VARCHAR(45) NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`client_id`, `customer_id`),
  CONSTRAINT `fk_Client_Customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `Config_Self_Disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`client_director`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`client_director` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`client_director` (
  `director_id` INT NOT NULL AUTO_INCREMENT,
  `director_gender` VARCHAR(45) NULL,
  `director_name` VARCHAR(45) NULL,
  `director_surname` VARCHAR(45) NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`director_id`, `client_id`),
  CONSTRAINT `fk_Director_Client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_client` (`client_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`contact_information_contact_person`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`contact_information_contact_person` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`contact_information_contact_person` (
  `contact_person_id` INT NOT NULL AUTO_INCREMENT,
  `contact_person_gender` VARCHAR(45) NULL,
  `contact_person_name` VARCHAR(45) NULL,
  `contact_person_surname` VARCHAR(45) NULL,
  `contact_person_saved_data` TINYINT(1) NULL,
  `Contact_Information_ID` INT NOT NULL,
  PRIMARY KEY (`contact_person_id`, `Contact_Information_ID`),
  CONSTRAINT `fk_Contact_Person_Contact_Information1`
    FOREIGN KEY (`Contact_Information_ID`)
    REFERENCES `Config_Self_Disclosure`.`customer_contact_Information` (`contact_information_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`website_configuration`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`website_configuration` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`website_configuration` (
  `website_configuration_logo` BLOB NULL,
  `website_configuration_admin_name` VARCHAR(45) NULL,
  `website_configuration_admin_password` VARCHAR(255) NULL,
  `website_configuration_internet_adress` VARCHAR(45) NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`customer_host_configuration`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`customer_host_configuration` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`customer_host_configuration` (
  `host_configuration_id` INT NOT NULL AUTO_INCREMENT,
  `Customer_ID` INT NOT NULL,
  PRIMARY KEY (`host_configuration_id`, `Customer_ID`),
  CONSTRAINT `fk_Host_Configuration_Customer1`
    FOREIGN KEY (`Customer_ID`)
    REFERENCES `Config_Self_Disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`customer_erp_configuration`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`customer_erp_configuration` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`customer_erp_configuration` (
  `erp_configuration_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_number_of_user` INT NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_id`, `customer_id`),
  CONSTRAINT `fk_ERP_Configuration_Customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `Config_Self_Disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`customer_import_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`customer_import_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`customer_import_data` (
  `import_data_id` INT NOT NULL AUTO_INCREMENT,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`import_data_id`, `customer_id`),
  CONSTRAINT `fk_Import_Data_Customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `Config_Self_Disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`contact_informationen_adress`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`contact_informationen_adress` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`contact_informationen_adress` (
  `adress_id` INT NOT NULL AUTO_INCREMENT,
  `adress_street` VARCHAR(45) NULL,
  `adress_house_number` VARCHAR(45) NULL,
  `adress_postcode` VARCHAR(45) NULL,
  `adress_ciity` VARCHAR(45) NULL,
  `adress_saved_data` TINYINT(1) NULL,
  `contact_information_id` INT NOT NULL,
  PRIMARY KEY (`adress_id`, `contact_information_id`),
  CONSTRAINT `fk_Address_Contact_Information1`
    FOREIGN KEY (`contact_information_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_contact_Information` (`contact_information_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`customer_token`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`customer_token` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`customer_token` (
  `token_id` INT NOT NULL AUTO_INCREMENT,
  `token_key` VARCHAR(255) NULL,
  `token_used` TINYINT(1) NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`token_id`, `customer_id`),
  CONSTRAINT `fk_Token_Customer`
    FOREIGN KEY (`customer_id`)
    REFERENCES `Config_Self_Disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`host_configuration_virtualization`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`host_configuration_virtualization` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`host_configuration_virtualization` (
  `virtualization_id` INT NOT NULL AUTO_INCREMENT,
  `virtualization_produkt` VARCHAR(45) NULL,
  `virtualization_version` VARCHAR(45) NULL,
  `host_configuration_id` INT NOT NULL,
  PRIMARY KEY (`virtualization_id`, `host_configuration_id`),
  CONSTRAINT `fk_Virtualization_Host_Configuration1`
    FOREIGN KEY (`host_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_host_configuration` (`host_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`host_configuration_ip_adress_erp`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`host_configuration_ip_adress_erp` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`host_configuration_ip_adress_erp` (
  `ip_adress_erp_id` INT NOT NULL AUTO_INCREMENT,
  `ip_adress_erp_ip` VARCHAR(45) NULL,
  `ip_adress_erp_subnetmask` VARCHAR(45) NULL,
  `ip_adress_erp_gateway` VARCHAR(45) NULL,
  `ip_adress_erp_dns` VARCHAR(45) NULL,
  ` host_configuration_id` INT NOT NULL,
  PRIMARY KEY (`ip_adress_erp_id`, ` host_configuration_id`),
  CONSTRAINT `fk_IP_Adress_ERP_Host_Configuration1`
    FOREIGN KEY (` host_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_host_configuration` (`host_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`host_configuration_ip_address_data_backup`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`host_configuration_ip_address_data_backup` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`host_configuration_ip_address_data_backup` (
  `backup_id` INT NOT NULL AUTO_INCREMENT,
  `backup_ip` VARCHAR(45) NULL,
  `backup_share_name` VARCHAR(45) NULL,
  `backup_user` VARCHAR(45) NULL,
  `backup_password` VARCHAR(45) NULL,
  `backup_sftp` TINYINT(1) NULL,
  `backup_ftp` TINYINT(1) NULL,
  `backup_smb` TINYINT(1) NULL,
  `ip_address_data_backupcol` VARCHAR(45) NULL,
  `host_configuration_id` INT NOT NULL,
  PRIMARY KEY (`backup_id`, `host_configuration_id`),
  CONSTRAINT `fk_IP_Adress_Data_Backup_Host_Configuration1`
    FOREIGN KEY (`host_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_host_configuration` (`host_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`host_configuration_ip_adress_connect_external_device`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`host_configuration_ip_adress_connect_external_device` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`host_configuration_ip_adress_connect_external_device` (
  `ip_adress_connect_external_device_id` INT NOT NULL AUTO_INCREMENT,
  `device_ip` VARCHAR(45) NULL,
  `device_share_name` VARCHAR(45) NULL,
  `device_user` VARCHAR(45) NULL,
  `device_password` VARCHAR(45) NULL,
  `device_ip_sftp` TINYINT(1) NULL,
  `device_ip_ftp` TINYINT(1) NULL,
  `device_ip_smb` TINYINT(1) NULL,
  `host_configuration_id` INT NOT NULL,
  PRIMARY KEY (`ip_adress_connect_external_device_id`, `host_configuration_id`),
  CONSTRAINT `fk_IP_Adress_Connect_External_Device_Host_Configuration1`
    FOREIGN KEY (`host_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_host_configuration` (`host_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`client_main_adress`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`client_main_adress` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`client_main_adress` (
  `main_adress_id` INT NOT NULL AUTO_INCREMENT,
  `main_adress_street` VARCHAR(45) NULL,
  `main_adress_house_Number` VARCHAR(45) NULL,
  `main_adress_postcode` VARCHAR(45) NULL,
  `main_adress_city` VARCHAR(45) NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`main_adress_id`, `client_id`),
  CONSTRAINT `fk_Main_Adress_Client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_client` (`client_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`clinet_second_adress`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`clinet_second_adress` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`clinet_second_adress` (
  `second_adress_id` INT NOT NULL AUTO_INCREMENT,
  `clinet_second_adress_street` VARCHAR(45) NULL,
  `clinet_second_adress_house_number` VARCHAR(45) NULL,
  `clinet_second_adress_postcode` VARCHAR(45) NULL,
  `clinet_second_adress_city` VARCHAR(45) NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`second_adress_id`, `client_id`),
  CONSTRAINT `fk_Main_Adress_Client10`
    FOREIGN KEY (`client_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_client` (`client_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`client_bank_details_`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`client_bank_details_` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`client_bank_details_` (
  `bank_details_id` INT NOT NULL AUTO_INCREMENT,
  `bank_details_bankname` VARCHAR(45) NULL,
  `bank_details_iban` VARCHAR(45) NULL,
  `bank_details_bic` VARCHAR(45) NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`bank_details_id`, `client_id`),
  CONSTRAINT `fk_Bank_Details_Client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_client` (`client_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_number_ranges`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_number_ranges` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_number_ranges` (
  `number_ranges_id` INT NOT NULL AUTO_INCREMENT,
  `number_ranges_customer_number` INT NULL,
  `number_ranges_supplier_number` INT NULL,
  `number_ranges_item_number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`number_ranges_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Number_Ranges_ERP_Configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_offer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_offer` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_offer` (
  `offer_id` INT NOT NULL AUTO_INCREMENT,
  `offer_month_number` INT NULL,
  `offer_year_number` INT NULL,
  `offer_first_number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`offer_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Offer_ERP_Configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_order_Conformation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_order_Conformation` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_order_Conformation` (
  `order_conformation_id` INT NOT NULL AUTO_INCREMENT,
  `order_conformation_month_number` INT NULL,
  `order_conformation_year_number` INT NULL,
  `order_conformation_first_Number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`order_conformation_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Offer_ERP_Configuration10`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_delivery_note`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_delivery_note` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_delivery_note` (
  `delivery_note_id` INT NOT NULL AUTO_INCREMENT,
  `delivery_note_month_number` INT NULL,
  `delivery_note_year_Number` INT NULL,
  `delivery_note_first_Number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`delivery_note_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Offer_ERP_Configuration11`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_invoice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_invoice` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_invoice` (
  `invoice_id` INT NOT NULL AUTO_INCREMENT,
  `invoice_month_number` INT NULL,
  `invoice_year_number` INT NULL,
  `invoice_first_Number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`invoice_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Offer_ERP_Configuration12`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_cancellation_invoice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_cancellation_invoice` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_cancellation_invoice` (
  `cancellation_invoice_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_month_number` INT NULL,
  `erp_configuration_year_number` INT NULL,
  `erp_configuration_first_number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`cancellation_invoice_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Offer_ERP_Configuration120`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_order` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_order` (
  `order_id` INT NOT NULL AUTO_INCREMENT,
  `order_month_number` INT NULL,
  `order_year_number` INT NULL,
  `order_first_number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`order_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Offer_ERP_Configuration100`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_incoming_delivery_note`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_incoming_delivery_note` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_incoming_delivery_note` (
  `incoming_delivery_note_id` INT NOT NULL AUTO_INCREMENT,
  `delivery_note_month_number` INT NULL,
  `delivery_note_year_number` INT NULL,
  `delivery_note_first_number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`incoming_delivery_note_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Offer_ERP_Configuration121`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_incoming_invoice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_incoming_invoice` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_incoming_invoice` (
  `incoming_invoice_id` INT NOT NULL AUTO_INCREMENT,
  `incoming_invoice_month_number` INT NULL,
  `incoming_invoice_year_number` INT NULL,
  `incoming_invoice_first_number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`incoming_invoice_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Offer_ERP_Configuration122`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_service_order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_service_order` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_service_order` (
  `service_order_id` INT NOT NULL AUTO_INCREMENT,
  `service_order_month_number` INT NULL,
  `service_order_year_number` INT NULL,
  `service_order_first_number` INT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`service_order_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Offer_ERP_Configuration1000`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`erp_configuration_item_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`erp_configuration_item_types` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`erp_configuration_item_types` (
  `item_types_id` INT NOT NULL AUTO_INCREMENT,
  `item_types_item` TINYINT(1) NULL,
  `item_types_bom` TINYINT(1) NULL,
  `item_types_services` TINYINT(1) NULL,
  `item_types_variant_item` TINYINT(1) NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`item_types_id`, `erp_configuration_id`),
  CONSTRAINT `fk_Item_Types_ERP_Configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_customer_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_customer_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_customer_data` (
  `customer_data_id` INT NOT NULL AUTO_INCREMENT,
  `customer_data_status` TINYINT(1) NULL,
  `customer_data_salutation` TINYINT(1) NULL,
  `customer_data_customer_number` TINYINT(1) NULL,
  `customer_data_different_billing_customer` TINYINT(1) NULL,
  `customer_data_name` TINYINT(1) NULL,
  `customer_data_surname` TINYINT(1) NULL,
  `customer_data_street` TINYINT(1) NULL,
  `customer_data_house_number` TINYINT(1) NULL,
  `customer_data_postcode` TINYINT(1) NULL,
  `customer_data_city` TINYINT(1) NULL,
  `customer_data_country` TINYINT(1) NULL,
  `customer_data_company_name` TINYINT(1) NULL,
  `customer_data_additional_adress_information` TINYINT(1) NULL,
  `customer_data_email` TINYINT(1) NULL,
  `customer_data_different_invoice_email` TINYINT(1) NULL,
  `customer_data_phone` TINYINT(1) NULL,
  `customer_data_financiall_accounting_account` TINYINT(1) NULL,
  `customer_data_tax_number` TINYINT(1) NULL,
  `customer_data_informations` TINYINT(1) NULL,
  `customer_data_calculate_shipping_cost` TINYINT(1) NULL,
  `customer_data_direct_debit_mandate_reference` TINYINT(1) NULL,
  `customer_data_direct_debit_bank` TINYINT(1) NULL,
  `customer_data_direct_debit_bic` TINYINT(1) NULL,
  `customer_data_direct_debit_iban` TINYINT(1) NULL,
  `customer_data_direct_debit_account_holder` TINYINT(1) NULL,
  `customer_data_sales_tax_exempt` TINYINT(1) NULL,
  `customer_data_own_supplier_number` TINYINT(1) NULL,
  `customer_data_number_of_additions` INT(11) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`customer_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Customer_Data_Import_Data1`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_item_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_item_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_item_data` (
  `item_data_id` INT NOT NULL AUTO_INCREMENT,
  `item_data_status` TINYINT(1) NULL,
  `item_data_number` TINYINT(1) NULL,
  `item_data_description` TINYINT(1) NULL,
  `item_data_name` TINYINT(1) NULL,
  `item_data_text` TINYINT(1) NULL,
  `item_data_unit` TINYINT(1) NULL,
  `item_data_typ` TINYINT(1) NULL,
  `item_data_single_category_name` TINYINT(1) NULL,
  `item_data_weight` TINYINT(1) NULL,
  `item_data_number_of_selling_prices` INT(11) NULL,
  `item_data_surcharge_number_of_additions_selling_prices` INT(11) NULL,
  `item_data_purchase_price` TINYINT(1) NULL,
  `item_data_procurment_costs` TINYINT(1) NULL,
  `item_data_quality_managment` TINYINT(1) NULL,
  `item_data_number_of_additions` TINYINT(1) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`item_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Item_Data_Import_Data1`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_supplier_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_supplier_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_supplier_data` (
  `supplier_data_id` INT NOT NULL AUTO_INCREMENT,
  `supplier_data_status` TINYINT(1) NULL,
  `supplier_data_number` TINYINT(1) NULL,
  `supplier_data_salutation` TINYINT(1) NULL,
  `supplier_data_name` TINYINT(1) NULL,
  `supplier_data_surname` TINYINT(1) NULL,
  `supplier_data_street` TINYINT(1) NULL,
  `supplier_data_house_number` TINYINT(1) NULL,
  `supplier_data_postcode` TINYINT(1) NULL,
  `supplier_data_city` TINYINT(1) NULL,
  `supplier_data_country` TINYINT(1) NULL,
  `supplier_data_email` TINYINT(1) NULL,
  `supplier_data_hompage` TINYINT(1) NULL,
  `supplier_data_phone` TINYINT(1) NULL,
  `supplier_data_company_Name` TINYINT(1) NULL,
  `supplier_data_sales_tax_id` TINYINT(1) NULL,
  `supplier_data_fibu_account` TINYINT(1) NULL,
  `supplier_data_own_customer_number` TINYINT(1) NULL,
  `supplier_data_informations` TINYINT(1) NULL,
  `supplier_data_tax_dree_delivery` TINYINT(1) NULL,
  `supplier_data_addition_number` INT(11) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`supplier_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Supplier_Data_Import_Data1`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_customer_contact_person_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_customer_contact_person_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_customer_contact_person_data` (
  `customer_contact_person_data_id` INT NOT NULL AUTO_INCREMENT,
  `customer_contact_person_data_number` TINYINT(1) NULL,
  `customer_contact_person_data_salutation` TINYINT(1) NULL,
  `customer_contact_person_data_name` TINYINT(1) NULL,
  `customer_contact_person_data_surname` TINYINT(1) NULL,
  `customer_contact_person_data_email` TINYINT(1) NULL,
  `customer_contact_person_data_phone` TINYINT(1) NULL,
  `customer_contact_person_data_second_phone` TINYINT(1) NULL,
  `customer_contact_person_data_fax` TINYINT(1) NULL,
  `customer_contact_person_data_description` TINYINT(1) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`customer_contact_person_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Customer_Contact_Person_Data_Import_Data1`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_customer_supplier_adress_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_customer_supplier_adress_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_customer_supplier_adress_data` (
  `customer_supplier_adress_data_id` INT NOT NULL AUTO_INCREMENT,
  `customer_supplier_adress_data_number` TINYINT(1) NULL,
  `customer_supplier_adress_data_company` TINYINT(1) NULL,
  `customer_supplier_adress_data_name` TINYINT(1) NULL,
  `customer_supplier_adress_data_surname` TINYINT(1) NULL,
  `customer_supplier_adress_data_street` TINYINT(1) NULL,
  `customer_supplier_adress_data_house_Number` TINYINT(1) NULL,
  `customer_supplier_adress_data_postcode` TINYINT(1) NULL,
  `customer_supplier_adress_data_city` TINYINT(1) NULL,
  `customer_supplier_adress_data_country` TINYINT(1) NULL,
  `customer_supplier_adress_data_additional_adress_information` TINYINT(1) NULL,
  `customer_supplier_adress_data_email` TINYINT(1) NULL,
  `customer_supplier_adress_data_phone` TINYINT(1) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`customer_supplier_adress_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Customer_Supplier_Adress_Data_Import_Data1`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_customer_invoice_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_customer_invoice_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_customer_invoice_data` (
  `customer_invoice_data_id` INT NOT NULL AUTO_INCREMENT,
  `customer_invoice_data_number` TINYINT(1) NULL,
  `customer_invoice_data_ompany` TINYINT(1) NULL,
  `customer_invoice_data_name` TINYINT(1) NULL,
  `customer_invoice_data_surname` TINYINT(1) NULL,
  `customer_invoice_data_street` TINYINT(1) NULL,
  `customer_invoice_data_house_number` TINYINT(1) NULL,
  `customer_invoice_data_postcode` TINYINT(1) NULL,
  `customer_invoice_data_city` TINYINT(1) NULL,
  `customer_invoice_data_country` TINYINT(1) NULL,
  `customer_invoice_data_additional_adress_information` TINYINT(1) NULL,
  `customer_invoice_data_email` TINYINT(1) NULL,
  `customer_invoice_data_phone` TINYINT(1) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`customer_invoice_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Customer_Supplier_Adress_Data_Import_Data10`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_supplier_contact_person_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_supplier_contact_person_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_supplier_contact_person_data` (
  `supplier_contact_person_data_id` INT NOT NULL AUTO_INCREMENT,
  `supplier_contact_person_data_number` TINYINT(1) NULL,
  `supplier_contact_person_data_salutation` TINYINT(1) NULL,
  `supplier_contact_person_data_name` TINYINT(1) NULL,
  `supplier_contact_person_data_surname` TINYINT(1) NULL,
  `supplier_contact_person_data_email` TINYINT(1) NULL,
  `supplier_contact_person_data_phone` TINYINT(1) NULL,
  `supplier_contact_person_data_second_phone` TINYINT(1) NULL,
  `supplier_contact_person_data_description` TINYINT(1) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`supplier_contact_person_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Supplier_Contact_Person_Data_Import_Data1`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_supplier_item_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_supplier_item_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_supplier_item_data` (
  `supplier_item_data_id` INT NOT NULL AUTO_INCREMENT,
  `supplier_item_data_number` TINYINT(1) NULL,
  `supplier_item_data_description` TINYINT(1) NULL,
  `supplier_item_data_purchase_price` TINYINT(1) NULL,
  `supplier_item_data_status` TINYINT(1) NULL,
  `supplier_item_data_standart_item` TINYINT(1) NULL,
  `supplier_item_data_description` TINYINT(1) NULL,
  `supplier_item_data_supplier_number` TINYINT(1) NULL,
  `supplier_item_data_number` TINYINT(1) NULL,
  `supplier_item_data_procurement_Cost` TINYINT(1) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`supplier_item_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Supplier_Item_Data_Import_Data1`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_customized_item_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_customized_item_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_customized_item_data` (
  `customized_item_data_id` INT NOT NULL AUTO_INCREMENT,
  `customized_item_data_customer_number` TINYINT(1) NULL,
  `customized_item_data_item_number` TINYINT(1) NULL,
  `customized_item_data_price` TINYINT(1) NULL,
  `customized_item_data_from_Quantity` TINYINT(1) NULL,
  `customized_item_data_description` TINYINT(1) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`customized_item_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Customized_Item_Data_Import_Data1`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`import_data_accessories_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`import_data_accessories_data` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`import_data_accessories_data` (
  `accessories_data_id` INT NOT NULL AUTO_INCREMENT,
  `accessories_data_item_number` TINYINT(1) NULL,
  `accessories_data_accessories_item_number` TINYINT(1) NULL,
  `accessories_data_from_quantity` TINYINT(1) NULL,
  `import_data_id` INT NOT NULL,
  PRIMARY KEY (`accessories_data_id`, `import_data_id`),
  CONSTRAINT `fk_Import_Accessories_Data_Import_Data1`
    FOREIGN KEY (`import_data_id`)
    REFERENCES `Config_Self_Disclosure`.`customer_import_data` (`import_data_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`customer_email_configuration`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`customer_email_configuration` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`customer_email_configuration` (
  `email_configuration_id` INT NOT NULL AUTO_INCREMENT,
  `email_configuration_smtp_host` VARCHAR(45) NULL,
  `email_configuration_smtp_port` VARCHAR(45) NULL,
  `email_configuration_smtp_user` VARCHAR(45) NULL,
  `email_configuration_smtp_encryption` TINYINT(1) NULL,
  `email_configuration_bcc_email` VARCHAR(45) NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`email_configuration_id`, `customer_id`),
  CONSTRAINT `fk_Email_Configuration_Customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `Config_Self_Disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Config_Self_Disclosure`.`customer_json_cache`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Config_Self_Disclosure`.`customer_json_cache` ;

CREATE TABLE IF NOT EXISTS `Config_Self_Disclosure`.`customer_json_cache` (
  `json_cache_id` INT NOT NULL AUTO_INCREMENT,
  `json_data` LONGTEXT NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`json_cache_id`, `customer_id`),
  CONSTRAINT `fk_Json_Cache_Customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `Config_Self_Disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
