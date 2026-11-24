-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema config_self_disclosure
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `config_self_disclosure` ;

-- -----------------------------------------------------
-- Schema config_self_disclosure
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `config_self_disclosure` DEFAULT CHARACTER SET utf8mb3 ;
USE `config_self_disclosure` ;

-- -----------------------------------------------------
-- Table `config_self_disclosure`.`customer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`customer` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`customer` (
  `customer_id` INT NOT NULL AUTO_INCREMENT,
  `customer_login_name` VARCHAR(45) NULL DEFAULT NULL,
  `customer_password` VARCHAR(255) NULL DEFAULT NULL,
  `customer_infos_imported` VARCHAR(3) NULL DEFAULT NULL,
  `customer_admin` VARCHAR(3) NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`customer_client`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`customer_client` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`customer_client` (
  `client_id` INT NOT NULL AUTO_INCREMENT,
  `client_name` VARCHAR(45) NULL DEFAULT NULL,
  `client_company_name` VARCHAR(45) NULL DEFAULT NULL,
  `client_phone_number` INT NULL DEFAULT NULL,
  `client_email` VARCHAR(45) NULL DEFAULT NULL,
  `client_saved_data` TINYINT(1) NOT NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`client_id`, `customer_id`),
  CONSTRAINT `fk_customer_client_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `config_self_disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`client_bank_details`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`client_bank_details` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`client_bank_details` (
  `client_bank_details_id` INT NOT NULL AUTO_INCREMENT,
  `client_bank_details_bankname` VARCHAR(45) NULL DEFAULT NULL,
  `client_bank_details_iban` VARCHAR(45) NULL DEFAULT NULL,
  `client_bank_details_bic` VARCHAR(45) NULL DEFAULT NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`client_bank_details_id`, `client_id`),
  CONSTRAINT `fk_client_bank_details_customer_client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `config_self_disclosure`.`customer_client` (`client_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`client_director`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`client_director` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`client_director` (
  `client_director_id` INT NOT NULL AUTO_INCREMENT,
  `client_director_gender` VARCHAR(45) NULL DEFAULT NULL,
  `client_director_name` VARCHAR(45) NULL DEFAULT NULL,
  `client_director_surname` VARCHAR(45) NULL DEFAULT NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`client_director_id`, `client_id`),
  CONSTRAINT `fk_client_director_customer_client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `config_self_disclosure`.`customer_client` (`client_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`client_legal_information`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`client_legal_information` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`client_legal_information` (
  `client_legal_information_id` INT NOT NULL AUTO_INCREMENT,
  `client_legal_information_ust_idnr` VARCHAR(45) NULL DEFAULT NULL,
  `client_legal_information_hr_number` VARCHAR(45) NULL DEFAULT NULL,
  `client_legal_information_juristication` VARCHAR(45) NULL DEFAULT NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`client_legal_information_id`, `client_id`),
  CONSTRAINT `fk_client_legal_information_customer_client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `config_self_disclosure`.`customer_client` (`client_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`client_second_addres`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`client_second_addres` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`client_second_addres` (
  `client_second_addres_id` INT NOT NULL AUTO_INCREMENT,
  `client_second_addres_street` VARCHAR(45) NULL DEFAULT NULL,
  `client_second_addres_house_Number` VARCHAR(45) NULL DEFAULT NULL,
  `client_second_addres_postcode` VARCHAR(45) NULL DEFAULT NULL,
  `client_second_addres_city` VARCHAR(45) NULL DEFAULT NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`client_second_addres_id`, `client_id`),
  CONSTRAINT `fk_client_second_addres_customer_client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `config_self_disclosure`.`customer_client` (`client_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`customer_contact_information`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`customer_contact_information` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`customer_contact_information` (
  `contact_information_id` INT NOT NULL AUTO_INCREMENT,
  `contact_information_company_name` VARCHAR(45) NULL DEFAULT NULL,
  `contact_information_phone` INT NULL DEFAULT NULL,
  `contact_information_email` VARCHAR(45) NULL DEFAULT NULL,
  `contact_information_saved_data` INT NULL DEFAULT NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`contact_information_id`, `customer_id`),
  CONSTRAINT `fk_customer_contact_information_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `config_self_disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`contact_information_addres`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`contact_information_addres` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`contact_information_addres` (
  `contact_information_addres_id` INT NOT NULL AUTO_INCREMENT,
  `contact_information_addres_street` VARCHAR(45) NULL DEFAULT NULL,
  `contact_information_addres_house_number` VARCHAR(45) NULL DEFAULT NULL,
  `contact_information_addres_postcode` VARCHAR(45) NULL DEFAULT NULL,
  `contact_information_addres_city` VARCHAR(45) NULL DEFAULT NULL,
  `contact_information_id` INT NOT NULL,
  PRIMARY KEY (`contact_information_addres_id`, `contact_information_id`),
  CONSTRAINT `fk_contact_information_addres_customer_contact_information1`
    FOREIGN KEY (`contact_information_id`)
    REFERENCES `config_self_disclosure`.`customer_contact_information` (`contact_information_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`contact_information_contact_person`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`contact_information_contact_person` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`contact_information_contact_person` (
  `contact_information_contact_person_id` INT NOT NULL AUTO_INCREMENT,
  `contact_information_contact_person_gender` VARCHAR(45) NULL DEFAULT NULL,
  `contact_information_contact_person_name` VARCHAR(45) NULL DEFAULT NULL,
  `contact_information_contact_person_surname` VARCHAR(45) NULL DEFAULT NULL,
  `contact_information_id` INT NOT NULL,
  PRIMARY KEY (`contact_information_contact_person_id`, `contact_information_id`),
  CONSTRAINT `fk_contact_information_contact_person_customer_contact_inform1`
    FOREIGN KEY (`contact_information_id`)
    REFERENCES `config_self_disclosure`.`customer_contact_information` (`contact_information_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`customer_erp_configuration`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`customer_erp_configuration` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`customer_erp_configuration` (
  `erp_configuration_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_number_of_user` INT NULL DEFAULT NULL,
  `erp_configuration_saved_data` INT NOT NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_id`, `customer_id`),
  CONSTRAINT `fk_customer_erp_configuration_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `config_self_disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`customer_host_configuration`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`customer_host_configuration` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`customer_host_configuration` (
  `host_configuration_id` INT NOT NULL AUTO_INCREMENT,
  `host_configuration_saved_data` TINYINT(1) NOT NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`host_configuration_id`, `customer_id`),
  CONSTRAINT `fk_customer_host_configuration_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `config_self_disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`customer_import`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`customer_import` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`customer_import` (
  `import_id` INT NOT NULL AUTO_INCREMENT,
  `import_saved_data` INT NULL DEFAULT NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`import_id`, `customer_id`),
  CONSTRAINT `fk_customer_import_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `config_self_disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`customer_json_cache`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`customer_json_cache` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`customer_json_cache` (
  `json_cache_id` INT NOT NULL AUTO_INCREMENT,
  `json_data` LONGTEXT NULL DEFAULT NULL,
  `customer_id` INT NOT NULL UNIQUE,
  PRIMARY KEY (`json_cache_id`, `customer_id`),
  CONSTRAINT `fk_customer_json_cache_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `config_self_disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`customer_token`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`customer_token` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`customer_token` (
  `customer_token_id` INT NOT NULL AUTO_INCREMENT,
  `customer_token_key` VARCHAR(255) NULL DEFAULT NULL,
  `customer_token_used` VARCHAR(3) NULL DEFAULT NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`customer_token_id`, `customer_id`),
  CONSTRAINT `fk_customer_token_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `config_self_disclosure`.`customer` (`customer_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_cancellation_invoice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_cancellation_invoice` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_cancellation_invoice` (
  `erp_configuration_cancellation_invoice_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_cancellation_invoice_month` INT NULL DEFAULT NULL,
  `erp_configuration_cancellation_invoice_year` INT NULL DEFAULT NULL,
  `erp_configuration_cancellation_invoice_first` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_cancellation_invoice_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_cancellation_invoice_customer_erp_config1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_delivery_note`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_delivery_note` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_delivery_note` (
  `erp_configuration_delivery_note_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_delivery_note_month` INT NULL DEFAULT NULL,
  `erp_configuration_delivery_note_year` INT NULL DEFAULT NULL,
  `erp_configuration_delivery_note_first` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_delivery_note_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_delivery_note_customer_erp_configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_incoming_delivery_note`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_incoming_delivery_note` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_incoming_delivery_note` (
  `erp_configuration_incoming_delivery_note_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_incoming_delivery_note_month` INT NULL DEFAULT NULL,
  `erp_configuration_incoming_delivery_note_year` INT NULL DEFAULT NULL,
  `erp_configuration_incoming_delivery_note_first` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_incoming_delivery_note_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_incoming_delivery_note_customer_erp_conf1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_incoming_invoice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_incoming_invoice` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_incoming_invoice` (
  `erp_configuration_incoming_invoice_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_incoming_invoice_month` INT NULL DEFAULT NULL,
  `erp_configuration_incoming_invoice_year` INT NULL DEFAULT NULL,
  `erp_configuration_incoming_invoice_first` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_incoming_invoice_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_invoice_customer_erp_configurat1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_invoice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_invoice` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_invoice` (
  `erp_configuration_invoice_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_invoice_month` INT NULL DEFAULT NULL,
  `erp_configuration_invoice_year` INT NULL DEFAULT NULL,
  `erp_configuration_invoice_first` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_invoice_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_invoice_customer_erp_configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_item_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_item_types` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_item_types` (
  `erp_configuration_item_types_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_item_types_item` VARCHAR(3) NULL DEFAULT NULL,
  `erp_configuration_item_types_bom` VARCHAR(3) NULL DEFAULT NULL,
  `erp_configuration_item_types_services` VARCHAR(3) NULL DEFAULT NULL,
  `erp_configuration_item_types_variant_item` VARCHAR(3) NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_item_types_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_item_types_customer_erp_configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_number_ranges`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_number_ranges` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_number_ranges` (
  `erp_configuration_number_ranges_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_number_ranges_customer_number` INT NULL DEFAULT NULL,
  `erp_configuration_number_ranges_supplier_number` INT NULL DEFAULT NULL,
  `erp_configuration_number_ranges_item_number` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_number_ranges_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_number_ranges_customer_erp_configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_offer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_offer` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_offer` (
  `erp_configuration_offer_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_offer_month` INT NULL DEFAULT NULL,
  `erp_configuration_offer_year` INT NULL DEFAULT NULL,
  `erp_configuration_offer_first` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_offer_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_customer_erp_configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_order` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_order` (
  `erp_configuration_order_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_order_month` INT NULL DEFAULT NULL,
  `erp_configuration_order_year` INT NULL DEFAULT NULL,
  `erp_configuration_order_first` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_order_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_order_customer_erp_configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_order_conformation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_order_conformation` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_order_conformation` (
  `erp_configuration_order_conformation_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_order_conformation_month` INT NULL DEFAULT NULL,
  `erp_configuration_order_conformation_year` INT NULL DEFAULT NULL,
  `erp_configuration_order_conformation_first` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_order_conformation_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_order_conformation_customer_erp_configur1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`erp_configuration_service_order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`erp_configuration_service_order` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`erp_configuration_service_order` (
  `erp_configuration_service_order_id` INT NOT NULL AUTO_INCREMENT,
  `erp_configuration_service_order_month` INT NULL DEFAULT NULL,
  `erp_configuration_service_order_year` INT NULL DEFAULT NULL,
  `erp_configuration_service_order_first` INT NULL DEFAULT NULL,
  `erp_configuration_id` INT NOT NULL,
  PRIMARY KEY (`erp_configuration_service_order_id`, `erp_configuration_id`),
  CONSTRAINT `fk_erp_configuration_service_order_customer_erp_configuration1`
    FOREIGN KEY (`erp_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_erp_configuration` (`erp_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`host_configuration_ip_addres_connect_external_device`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`host_configuration_ip_addres_connect_external_device` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`host_configuration_ip_addres_connect_external_device` (
  `host_configuration_ip_addres_connect_external_device_id` INT NOT NULL AUTO_INCREMENT,
  `host_configuration_ip_addres_connect_external_device_sftp` VARCHAR(3) NOT NULL,
  `host_configuration_ip_addres_connect_external_device_ftp` VARCHAR(3) NULL DEFAULT NULL,
  `host_configuration_ip_addres_connect_external_device_smb` VARCHAR(3) NULL DEFAULT NULL,
  `host_configuration_ip_addres_connect_external_device_ip` VARCHAR(45) NOT NULL,
  `host_configuration_ip_addres_connect_external_device_share_name` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_ip_addres_connect_external_device_user` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_ip_addres_connect_external_device_password` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_id` INT NOT NULL,
  PRIMARY KEY (`host_configuration_ip_addres_connect_external_device_id`, `host_configuration_id`),
  CONSTRAINT `fk_host_configuration_ip_addres_connect_external_device_custo1`
    FOREIGN KEY (`host_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_host_configuration` (`host_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`host_configuration_ip_addres_data_backup`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`host_configuration_ip_addres_data_backup` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`host_configuration_ip_addres_data_backup` (
  `host_configuration_ip_addres_data_backup_id` INT NOT NULL AUTO_INCREMENT,
  `host_configuration_ip_addres_data_backup_sftp` VARCHAR(3) NULL DEFAULT NULL,
  `host_configuration_ip_addres_data_backup_ftp` VARCHAR(3) NULL DEFAULT NULL,
  `host_configuration_ip_addres_data_backup_smb` VARCHAR(3) NULL DEFAULT NULL,
  `host_configuration_ip_addres_data_backup_ip` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_ip_addres_data_backup_share_name` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_ip_addres_data_backup_user` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_ip_addres_data_backup_password` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_id` INT NOT NULL,
  PRIMARY KEY (`host_configuration_ip_addres_data_backup_id`, `host_configuration_id`),
  CONSTRAINT `fk_host_configuration_ip_addres_data_backup_customer_host_co1`
    FOREIGN KEY (`host_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_host_configuration` (`host_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`host_configuration_ip_addres_erp`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`host_configuration_ip_addres_erp` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`host_configuration_ip_addres_erp` (
  `host_configuration_ip_addres_erp_id` INT NOT NULL AUTO_INCREMENT,
  `host_configuration_ip_addres_erp_ip` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_ip_addres_erp_subnetmask` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_ip_addres_erp_gateway` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_ip_addres_erp_dns` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_id` INT NOT NULL,
  PRIMARY KEY (`host_configuration_ip_addres_erp_id`, `host_configuration_id`),
  CONSTRAINT `fk_host_configuration_ip_addres_erp_customer_host_configurati1`
    FOREIGN KEY (`host_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_host_configuration` (`host_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`host_configuration_virtualization`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`host_configuration_virtualization` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`host_configuration_virtualization` (
  `host_configuration_virtualization_id` INT NOT NULL AUTO_INCREMENT,
  `host_configuration_virtualization_` INT NOT NULL,
  `host_configuration_virtualization_product` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_virtualization_version` VARCHAR(45) NULL DEFAULT NULL,
  `host_configuration_id` INT NOT NULL,
  PRIMARY KEY (`host_configuration_virtualization_id`, `host_configuration_id`),
  CONSTRAINT `fk_host_configuration_virtualization_customer_host_configurat1`
    FOREIGN KEY (`host_configuration_id`)
    REFERENCES `config_self_disclosure`.`customer_host_configuration` (`host_configuration_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_accessories_item_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_accessories_item_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_accessories_item_data` (
  `import_accessories_item_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_accessories_item_data_item_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_accessories_item_data_import_accessories_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_accessories_item_data_from_quantity` VARCHAR(3) NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_accessories_item_data_id`, `import_id`),
  CONSTRAINT `fk_import_accessories_item_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_customer_billing_addres_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_customer_billing_addres_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_customer_billing_addres_data` (
  `import_customer_billing_addres_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_customer_billing_addres_data_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_company` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_name` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_surname` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_street` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_house_Number` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_postcode` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_city` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_country` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_additional_addres` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_email` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_billing_addres_data_phone` VARCHAR(3) NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_customer_billing_addres_data_id`, `import_id`),
  CONSTRAINT `fk_import_customer_billing_addres_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_customer_contact_person_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_customer_contact_person_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_customer_contact_person_data` (
  `import_customer_contact_person_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_customer_contact_person_data_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_contact_person_data_salutation` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_contact_person_data_name` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_contact_person_data_surname` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_contact_person_data_email` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_contact_person_data_phone` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_contact_person_data_second_phone` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_contact_person_data_fax` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_contact_person_data_description` VARCHAR(3) NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_customer_contact_person_data_id`, `import_id`),
  CONSTRAINT `fk_import_customer_contact_person_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_customer_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_customer_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_customer_data` (
  `import_customer_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_customer_data_status` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_customer_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_different_billing_customer` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_salutation` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_name` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_surname` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_street` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_house_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_postcode` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_city` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_country` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_company_name` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_additional_addres_information` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_email` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_different_erp_configuration_invoice_email` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_phone` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_financiall_accounting_account` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_tax_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_informations` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_calculate_shipping_cost` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_direct_debit_mandate_reference` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_direct_debit_bank` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_direct_debit_bic` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_direct_debit_iban` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_direct_debit_account_holder` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_sales_tax_exempt` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_own_supplier_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_data_number_of_additions` VARCHAR(128) NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_customer_data_id`, `import_id`),
  CONSTRAINT `fk_import_customer_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_customer_item_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_customer_item_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_customer_item_data` (
  `import_customer_item_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_customer_item_data_customer_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_item_data_item_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_item_data_price` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_item_data_from_Quantity` VARCHAR(3) NULL DEFAULT NULL,
  `import_customer_item_data_description` VARCHAR(3) NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_customer_item_data_id`, `import_id`),
  CONSTRAINT `fk_import_customer_item_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_item_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_item_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_item_data` (
  `import_item_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_item_data_status` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_description` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_name` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_text` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_unit` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_typ` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_single_category_name` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_weight` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_number_of_selling_prices` VARCHAR(128) NULL DEFAULT NULL,
  `import_item_data_surcharge_number_of_additions_selling_prices` VARCHAR(128) NULL DEFAULT NULL,
  `import_item_data_purchase_price` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_procurment_costs` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_quality_managment` VARCHAR(3) NULL DEFAULT NULL,
  `import_item_data_number_of_additions` VARCHAR(128) NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_item_data_id`, `import_id`),
  CONSTRAINT `fk_import_item_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_supplier_billing_addres_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_supplier_billing_addres_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_supplier_billing_addres_data` (
  `import_supplier_billing_addres_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_supplier_billing_addres_data_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_company` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_name` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_surname` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_street` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_house_Number` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_postcode` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_city` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_country` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_additional_addres` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_email` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_billing_addres_data_phone` VARCHAR(3) NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_supplier_billing_addres_data_id`, `import_id`),
  CONSTRAINT `fk_import_supplier_billing_addres_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_supplier_contact_person_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_supplier_contact_person_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_supplier_contact_person_data` (
  `import_supplier_contact_person_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_supplier_contact_person_data_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_contact_person_data_salutation` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_contact_person_data_name` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_contact_person_data_surname` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_contact_person_data_email` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_contact_person_data_phone` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_contact_person_data_second_phone` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_contact_person_data_fax` VARCHAR(3) NOT NULL,
  `import_supplier_contact_person_data_description` VARCHAR(3) NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_supplier_contact_person_data_id`, `import_id`),
  CONSTRAINT `fk_import_supplier_contact_person_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_supplier_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_supplier_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_supplier_data` (
  `import_supplier_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_supplier_data_status` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_salutation` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_name` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_surname` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_street` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_house_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_postcode` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_city` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_country` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_email` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_hompage` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_phone` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_company_Name` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_sales_tax_id` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_fibu_account` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_own_customer_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_informations` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_tax_free_delivery` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_data_addition_number` INT NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_supplier_data_id`, `import_id`),
  CONSTRAINT `fk_import_supplier_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`import_supplier_item_data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`import_supplier_item_data` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`import_supplier_item_data` (
  `import_supplier_item_data_id` INT NOT NULL AUTO_INCREMENT,
  `import_supplier_item_data_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_item_data_description` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_item_data_purchase_price` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_item_data_status` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_item_data_standard_item` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_item_data_item_description` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_item_data_supplier_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_item_data_item_number` VARCHAR(3) NULL DEFAULT NULL,
  `import_supplier_item_data_procurement_cost` VARCHAR(3) NULL DEFAULT NULL,
  `import_id` INT NOT NULL,
  PRIMARY KEY (`import_supplier_item_data_id`, `import_id`),
  CONSTRAINT `fk_import_supplier_item_data_customer_import1`
    FOREIGN KEY (`import_id`)
    REFERENCES `config_self_disclosure`.`customer_import` (`import_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`website_configuration`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`website_configuration` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`website_configuration` (
  `web_id` INT NOT NULL AUTO_INCREMENT,
  `website_configuration_logo` BLOB NULL DEFAULT NULL,
  `website_configuration_internet_addres` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`web_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `config_self_disclosure`.`client_main_addres`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `config_self_disclosure`.`client_main_addres` ;

CREATE TABLE IF NOT EXISTS `config_self_disclosure`.`client_main_addres` (
  `client_main_addres_id` INT NOT NULL,
  `client_main_addres_street` VARCHAR(45) NULL DEFAULT NULL,
  `client_main_addres_house_Number` VARCHAR(45) NULL DEFAULT NULL,
  `client_main_addres_postcode` VARCHAR(45) NULL DEFAULT NULL,
  `client_main_addres_city` VARCHAR(45) NULL DEFAULT NULL,
  `client_id` INT NOT NULL,
  PRIMARY KEY (`client_main_addres_id`, `client_id`),
  CONSTRAINT `fk_table1_customer_client1`
    FOREIGN KEY (`client_id`)
    REFERENCES `config_self_disclosure`.`customer_client` (`client_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
