-- -----------------------------------------------------
-- Schema config_self_disclosure
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `config_self_disclosure` ;
 
-- -----------------------------------------------------
-- Schema config_self_disclosure
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `config_self_disclosure` DEFAULT CHARACTER SET utf8mb3 ;
-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;
 
-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8mb3 ;
USE `config_self_disclosure` ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `client_bank_details`
--

CREATE TABLE `client_bank_details` (
  `client_bank_details_id` int(11) NOT NULL,
  `client_bank_details_bankname` varchar(45) DEFAULT NULL,
  `client_bank_details_iban` varchar(45) DEFAULT NULL,
  `client_bank_details_bic` varchar(45) DEFAULT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `client_director`
--

CREATE TABLE `client_director` (
  `client_director_id` int(11) NOT NULL,
  `client_director_gender` varchar(45) DEFAULT NULL,
  `client_director_name` varchar(45) DEFAULT NULL,
  `client_director_surname` varchar(45) DEFAULT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `client_legal_information`
--

CREATE TABLE `client_legal_information` (
  `client_legal_information_id` int(11) NOT NULL,
  `client_legal_information_ust_idnr` varchar(45) DEFAULT NULL,
  `client_legal_information_hr_number` varchar(45) DEFAULT NULL,
  `client_legal_information_juristication` varchar(45) DEFAULT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `client_main_addres`
--

CREATE TABLE `client_main_addres` (
  `client_main_addres_id` int(11) NOT NULL,
  `client_main_addres_street` varchar(45) DEFAULT NULL,
  `client_main_addres_house_Number` varchar(45) DEFAULT NULL,
  `client_main_addres_postcode` varchar(45) DEFAULT NULL,
  `client_main_addres_city` varchar(45) DEFAULT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `client_second_addres`
--

CREATE TABLE `client_second_addres` (
  `client_second_addres_id` int(11) NOT NULL,
  `client_second_addres_street` varchar(45) DEFAULT NULL,
  `client_second_addres_house_number` varchar(45) DEFAULT NULL,
  `client_second_addres_postcode` varchar(45) DEFAULT NULL,
  `client_second_addres_city` varchar(45) DEFAULT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact_information_addres`
--

CREATE TABLE `contact_information_addres` (
  `contact_information_addres_id` int(11) NOT NULL,
  `contact_information_addres_street` varchar(45) DEFAULT NULL,
  `contact_information_addres_house_number` varchar(45) DEFAULT NULL,
  `contact_information_addres_postcode` varchar(45) DEFAULT NULL,
  `contact_information_addres_city` varchar(45) DEFAULT NULL,
  `contact_information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `contact_information_addres`
--

INSERT INTO `contact_information_addres` (`contact_information_addres_id`, `contact_information_addres_street`, `contact_information_addres_house_number`, `contact_information_addres_postcode`, `contact_information_addres_city`, `contact_information_id`) VALUES
(1, 'ecem-street', '61', '61061', 'Ecemcity', 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact_information_contact_person`
--

CREATE TABLE `contact_information_contact_person` (
  `contact_information_contact_person_id` int(11) NOT NULL,
  `contact_information_contact_person_gender` varchar(45) DEFAULT NULL,
  `contact_information_contact_person_name` varchar(45) DEFAULT NULL,
  `contact_information_contact_person_surname` varchar(45) DEFAULT NULL,
  `contact_information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `contact_information_contact_person`
--

INSERT INTO `contact_information_contact_person` (`contact_information_contact_person_id`, `contact_information_contact_person_gender`, `contact_information_contact_person_name`, `contact_information_contact_person_surname`, `contact_information_id`) VALUES
(1, 'Frau', 'Ecem', 'Yildirim', 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_login_name` varchar(45) DEFAULT NULL,
  `customer_password` varchar(255) DEFAULT NULL,
  `customer_infos_imported` varchar(3) DEFAULT NULL,
  `customer_admin` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_login_name`, `customer_password`, `customer_infos_imported`, `customer_admin`) VALUES
(1, 'ecem@ebank.com', 'U1VGUTBiRDRtQ052M0d3MQ$qrwXeSicBHV5bkzgD3t1JZmrciOyklLAmc0si4hz+14', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_client`
--

CREATE TABLE `customer_client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(45) DEFAULT NULL,
  `client_company_name` varchar(45) DEFAULT NULL,
  `client_phone_number` int(11) DEFAULT NULL,
  `client_email` varchar(45) DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_contact_information`
--

CREATE TABLE `customer_contact_information` (
  `contact_information_id` int(11) NOT NULL,
  `contact_information_company_name` varchar(45) DEFAULT NULL,
  `contact_information_phone` int(11) DEFAULT NULL,
  `contact_information_email` varchar(45) DEFAULT NULL,
  `contact_information_saved_data` int(1) DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `customer_contact_information`
--

INSERT INTO `customer_contact_information` (`contact_information_id`, `contact_information_company_name`, `contact_information_phone`, `contact_information_email`, `contact_information_saved_data`, `customer_id`) VALUES
(3, 'Ecembank', 616161, 'ecem@ebank.com', 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_email_configuration`
--

CREATE TABLE `customer_email_configuration` (
  `email_configuration_id` int(11) NOT NULL,
  `email_configuration_smtp_host` varchar(45) DEFAULT NULL,
  `email_configuration_smtp_port` varchar(45) DEFAULT NULL,
  `email_configuration_smtp_user` varchar(45) DEFAULT NULL,
  `email_configuration_smtp_encryption` varchar(3) DEFAULT NULL,
  `email_configuration_bcc_email` varchar(45) DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_erp_configuration`
--

CREATE TABLE `customer_erp_configuration` (
  `erp_configuration_id` int(11) NOT NULL,
  `erp_configuration_number_of_user` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_host_configuration`
--

CREATE TABLE `customer_host_configuration` (
  `host_configuration_id` int(11) NOT NULL,
  `host_configuration_saved_data` int(1) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `customer_host_configuration`
--

INSERT INTO `customer_host_configuration` (`host_configuration_id`, `host_configuration_saved_data`, `customer_id`) VALUES
(27, 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_import`
--

CREATE TABLE `customer_import` (
  `import_id` int(11) NOT NULL,
  `import_save_data` int(1) DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_json_cache`
--

CREATE TABLE `customer_json_cache` (
  `json_cache_id` int(11) NOT NULL,
  `json_data` longtext DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_token`
--

CREATE TABLE `customer_token` (
  `customer_token_id` int(11) NOT NULL,
  `customer_token_key` varchar(255) DEFAULT NULL,
  `customer_token_used` varchar(3) DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `customer_token`
--

INSERT INTO `customer_token` (`customer_token_id`, `customer_token_key`, `customer_token_used`, `customer_id`) VALUES
(1, 'ebank', 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_cancellation_invoice`
--

CREATE TABLE `erp_configuration_cancellation_invoice` (
  `erp_configuration_cancellation_invoice_id` int(11) NOT NULL,
  `erp_configuration_cancellation_invoice_month` int(11) DEFAULT NULL,
  `erp_configuration_cancellation_invoice_year` int(11) DEFAULT NULL,
  `erp_configuration_cancellation_invoice_first` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_delivery_note`
--

CREATE TABLE `erp_configuration_delivery_note` (
  `erp_configuration_delivery_note_id` int(11) NOT NULL,
  `erp_configuration_delivery_note_month` int(11) DEFAULT NULL,
  `erp_configuration_delivery_note_year` int(11) DEFAULT NULL,
  `erp_configuration_delivery_note_first` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_incoming_delivery_note`
--

CREATE TABLE `erp_configuration_incoming_delivery_note` (
  `erp_configuration_delivery_note_id` int(11) NOT NULL,
  `erp_configuration_delivery_note_month` int(11) DEFAULT NULL,
  `erp_configuration_delivery_note_year` int(11) DEFAULT NULL,
  `erp_configuration_delivery_note_first` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_incoming_invoice`
--

CREATE TABLE `erp_configuration_incoming_invoice` (
  `erp_configuration_invoice_id` int(11) NOT NULL,
  `erp_configuration_invoice_month` int(11) DEFAULT NULL,
  `erp_configuration_invoice_year` int(11) DEFAULT NULL,
  `erp_configuration_invoice_first` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_invoice`
--

CREATE TABLE `erp_configuration_invoice` (
  `erp_configuration_invoice_id` int(11) NOT NULL,
  `erp_configuration_invoice_month` int(11) DEFAULT NULL,
  `erp_configuration_invoice_year` int(11) DEFAULT NULL,
  `erp_configuration_invoice_first` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_item_types`
--

CREATE TABLE `erp_configuration_item_types` (
  `erp_configuration_item_types_id` int(11) NOT NULL,
  `erp_configuration_item_types_item` varchar(3) DEFAULT NULL,
  `erp_configuration_item_types_bom` varchar(3) DEFAULT NULL,
  `erp_configuration_item_types_services` varchar(3) DEFAULT NULL,
  `erp_configuration_item_types_variant_item` varchar(3) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_number_ranges`
--

CREATE TABLE `erp_configuration_number_ranges` (
  `erp_configuration_number_ranges_id` int(11) NOT NULL,
  `erp_configuration_number_ranges_customer_number` int(11) DEFAULT NULL,
  `erp_configuration_number_ranges_supplier_number` int(11) DEFAULT NULL,
  `erp_configuration_number_ranges_item_number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_offer`
--

CREATE TABLE `erp_configuration_offer` (
  `erp_configuration_offer_id` int(11) NOT NULL,
  `erp_configuration_offer_month` int(11) DEFAULT NULL,
  `erp_configuration_offer_year` int(11) DEFAULT NULL,
  `erp_configuration_offer_first` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_order`
--

CREATE TABLE `erp_configuration_order` (
  `erp_configuration_order_id` int(11) NOT NULL,
  `erp_configuration_order_month` int(11) DEFAULT NULL,
  `erp_configuration_order_year` int(11) DEFAULT NULL,
  `erp_configuration_order_first` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_order_conformation`
--

CREATE TABLE `erp_configuration_order_conformation` (
  `erp_configuration_order_conformation_id` int(11) NOT NULL,
  `erp_configuration_order_conformation_month` int(11) DEFAULT NULL,
  `erp_configuration_order_conformation_year` int(11) DEFAULT NULL,
  `erp_configuration_order_conformation_first` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_service_order`
--

CREATE TABLE `erp_configuration_service_order` (
  `erp_configuration_service_order_id` int(11) NOT NULL,
  `erp_configuration_service_order_month` int(11) DEFAULT NULL,
  `erp_configuration_service_order_year` int(11) DEFAULT NULL,
  `erp_configuration_service_order_first` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `host_configuration_ip_addres_connect_external_device`
--

CREATE TABLE `host_configuration_ip_addres_connect_external_device` (
  `ip_addres_connect_external_device_id` int(11) NOT NULL,
  `device_ip` varchar(45) DEFAULT NULL,
  `device_ip_sftp` varchar(3) DEFAULT NULL,
  `device_ip_ftp` varchar(3) DEFAULT NULL,
  `device_ip_smb` varchar(3) DEFAULT NULL,
  `device_share_name` varchar(45) DEFAULT NULL,
  `device_user` varchar(45) DEFAULT NULL,
  `device_password` varchar(45) DEFAULT NULL,
  `host_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `host_configuration_ip_addres_data_backup`
--

CREATE TABLE `host_configuration_ip_addres_data_backup` (
  `backup_id` int(11) NOT NULL,
  `backup_sftp` varchar(3) DEFAULT NULL,
  `backup_ftp`varchar(3) DEFAULT NULL,
  `backup_smb` varchar(3) DEFAULT NULL,
  `backup_ip` varchar(45) DEFAULT NULL,
  `backup_share_name` varchar(45) DEFAULT NULL,
  `backup_user` varchar(45) DEFAULT NULL,
  `backup_password` varchar(45) DEFAULT NULL,
  `host_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `host_configuration_ip_addres_erp`
--

CREATE TABLE `host_configuration_ip_addres_erp` (
  `ip_addres_erp_id` int(11) NOT NULL,
  `ip_addres_erp_ip` varchar(45) DEFAULT NULL,
  `ip_addres_erp_subnetmask` varchar(45) DEFAULT NULL,
  `ip_addres_erp_gateway` varchar(45) DEFAULT NULL,
  `ip_addres_erp_dns` varchar(45) DEFAULT NULL,
  `host_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `host_configuration_virtualization`
--

CREATE TABLE `host_configuration_virtualization` (
  `host_configuration_virtualization_id` int(11) NOT NULL,
  `host_configuration_virtualization_` int(11) NOT NULL,
  `host_configuration_virtualization_product` varchar(45) DEFAULT NULL,
  `host_configuration_virtualization_version` varchar(45) DEFAULT NULL,
  `host_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `host_configuration_virtualization`
--

INSERT INTO `host_configuration_virtualization` (`host_configuration_virtualization_id`, `host_configuration_virtualization_`, `host_configuration_virtualization_product`, `host_configuration_virtualization_version`, `host_configuration_id`) VALUES
(7, 0, 'aabbg', 'aabbg', 27);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_accessories_item_data`
--

CREATE TABLE `import_accessories_item_data` (
  `import_accessories_item_data_id` int(11) NOT NULL,
  `import_accessories_item_data_item_number` varchar(3) DEFAULT NULL,
  `import_accessories_item_data_import_accessories_item_item_number` varchar(3) DEFAULT NULL,
  `import_accessories_item_data_from_quantity` varchar(3) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_customer_billing_addres_data`
--

CREATE TABLE `import_customer_billing_addres_data` (
  `import_customer_billing_addres_data_id` int(11) NOT NULL,
  `import_customer_billing_addres_data_number` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_company` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_name` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_surname` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_street` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_house_Number` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_postcode` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_city` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_country` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_additional_addres` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_email` varchar(3) DEFAULT NULL,
  `import_customer_billing_addres_data_phone` varchar(3) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_customer_contact_person_data`
--

CREATE TABLE `import_customer_contact_person_data` (
  `import_customer_contact_person_data_id` int(11) NOT NULL,
  `import_customer_contact_person_data_number` varchar(3) DEFAULT NULL,
  `import_customer_contact_person_data_salutation` varchar(3) DEFAULT NULL,
  `import_customer_contact_person_data_name` varchar(3) DEFAULT NULL,
  `import_customer_contact_person_data_surname` varchar(3) DEFAULT NULL,
  `import_customer_contact_person_data_email` varchar(3) DEFAULT NULL,
  `import_customer_contact_person_data_phone` varchar(3) DEFAULT NULL,
  `import_customer_contact_person_data_second_phone` varchar(3) DEFAULT NULL,
  `import_customer_contact_person_data_fax` varchar(3) DEFAULT NULL,
  `import_customer_contact_person_data_description` varchar(3) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_customer_data`
--

CREATE TABLE `import_customer_data` (
  `import_customer_data_id` int(11) NOT NULL,
  `import_customer_data_status` varchar(3) DEFAULT NULL,
  `import_customer_data_customer_number` varchar(3) DEFAULT NULL,
  `import_customer_data_different_billing_customer` varchar(3) DEFAULT NULL,
  `import_customer_data_salutation` varchar(3) DEFAULT NULL,
  `import_customer_data_name` varchar(3) DEFAULT NULL,
  `import_customer_data_surname` varchar(3) DEFAULT NULL,
  `import_customer_data_street` varchar(3) DEFAULT NULL,
  `import_customer_data_house_number` varchar(3) DEFAULT NULL,
  `import_customer_data_postcode` varchar(3) DEFAULT NULL,
  `import_customer_data_city` varchar(3) DEFAULT NULL,
  `import_customer_data_country` varchar(3) DEFAULT NULL,
  `import_customer_data_company_name` varchar(3) DEFAULT NULL,
  `import_customer_data_additional_addres_information` varchar(3) DEFAULT NULL,
  `import_customer_data_email` varchar(3) DEFAULT NULL,
  `import_customer_data_different_erp_configuration_invoice_email` varchar(3) DEFAULT NULL,
  `import_customer_data_phone` varchar(3) DEFAULT NULL,
  `import_customer_data_financiall_accounting_account` varchar(3) DEFAULT NULL,
  `import_customer_data_tax_number` varchar(3) DEFAULT NULL,
  `import_customer_data_informations` varchar(3) DEFAULT NULL,
  `import_customer_data_calculate_shipping_cost` varchar(3) DEFAULT NULL,
  `import_customer_data_direct_debit_mandate_reference` varchar(3) DEFAULT NULL,
  `import_customer_data_direct_debit_bank` varchar(3) DEFAULT NULL,
  `import_customer_data_direct_debit_bic` varchar(3) DEFAULT NULL,
  `import_customer_data_direct_debit_iban` varchar(3) DEFAULT NULL,
  `import_customer_data_direct_debit_account_holder` varchar(3) DEFAULT NULL,
  `import_customer_data_sales_tax_exempt` varchar(3) DEFAULT NULL,
  `import_customer_data_own_supplier_number` varchar(3) DEFAULT NULL,
  `import_customer_data_number_of_additions` varchar(128) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_customer_item_data`
--

CREATE TABLE `import_customer_item_data` (
  `import_customer_item_data_id` int(11) NOT NULL,
  `import_customer_item_data_customer_number` varchar(3) DEFAULT NULL,
  `import_customer_item_data_item_number` varchar(3) DEFAULT NULL,
  `import_customer_item_data_price` varchar(3) DEFAULT NULL,
  `import_customer_item_data_from_Quantity` varchar(3) DEFAULT NULL,
  `import_customer_item_data_description` varchar(3) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_item_data`
--

CREATE TABLE `import_item_data` (
  `import_item_data_id` int(11) NOT NULL,
  `import_item_data_status` varchar(3) DEFAULT NULL,
  `import_item_data_number` varchar(3) DEFAULT NULL,
  `import_item_data_description` varchar(3) DEFAULT NULL,
  `import_item_data_name` varchar(3) DEFAULT NULL,
  `import_item_data_text` varchar(3) DEFAULT NULL,
  `import_item_data_unit` varchar(3) DEFAULT NULL,
  `import_item_data_typ` varchar(3) DEFAULT NULL,
  `import_item_data_single_category_name` varchar(3) DEFAULT NULL,
  `import_item_data_weight` varchar(3) DEFAULT NULL,
  `import_item_data_number_of_selling_prices` varchar(128) DEFAULT NULL,
  `import_item_data_surcharge_number_of_additions_selling_prices` varchar(128) DEFAULT NULL,
  `import_item_data_purchase_price` varchar(3) DEFAULT NULL,
  `import_item_data_procurment_costs` varchar(3) DEFAULT NULL,
  `import_item_data_quality_managment` varchar(3) DEFAULT NULL,
  `import_item_data_number_of_additions` varchar(128) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_supplier_billing_addres_data`
--

CREATE TABLE `import_supplier_billing_addres_data` (
  `import_supplier_billing_addres_data_id` int(11) NOT NULL,
  `import_supplier_billing_addres_data_number` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_company` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_name` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_surname` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_street` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_house_Number` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_postcode` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_city` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_country` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_additional_addres` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_email` varchar(3) DEFAULT NULL,
  `import_supplier_billing_addres_data_phone` varchar(3) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_supplier_contact_person_data`
--

CREATE TABLE `import_supplier_contact_person_data` (
  `import_supplier_contact_person_data_id` int(11) NOT NULL,
  `import_supplier_contact_person_data_number` varchar(3) DEFAULT NULL,
  `import_supplier_contact_person_data_salutation` varchar(3) DEFAULT NULL,
  `import_supplier_contact_person_data_name`varchar(3) DEFAULT NULL,
  `import_supplier_contact_person_data_surname` varchar(3) DEFAULT NULL,
  `import_supplier_contact_person_data_email` varchar(3) DEFAULT NULL,
  `import_supplier_contact_person_data_phone` varchar(3) DEFAULT NULL,
  `import_supplier_contact_person_data_second_phone` varchar(3) DEFAULT NULL,
  `import_supplier_contact_person_data_description` varchar(3) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_supplier_data`
--

CREATE TABLE `import_supplier_data` (
  `import_supplier_data_id` int(11) NOT NULL,
  `import_supplier_data_status` varchar(3) DEFAULT NULL,
  `import_supplier_data_number` varchar(3) DEFAULT NULL,
  `import_supplier_data_salutation` varchar(3) DEFAULT NULL,
  `import_supplier_data_name` varchar(3) DEFAULT NULL,
  `import_supplier_data_surname` varchar(3) DEFAULT NULL,
  `import_supplier_data_street` varchar(3) DEFAULT NULL,
  `import_supplier_data_house_number` varchar(3) DEFAULT NULL,
  `import_supplier_data_postcode` varchar(3) DEFAULT NULL,
  `import_supplier_data_city` varchar(3) DEFAULT NULL,
  `import_supplier_data_country` varchar(3) DEFAULT NULL,
  `import_supplier_data_email` varchar(3) DEFAULT NULL,
  `import_supplier_data_hompage` varchar(3) DEFAULT NULL,
  `import_supplier_data_phone` varchar(3) DEFAULT NULL,
  `import_supplier_data_company_Name` varchar(3) DEFAULT NULL,
  `import_supplier_data_sales_tax_id` varchar(3) DEFAULT NULL,
  `import_supplier_data_fibu_account` varchar(3) DEFAULT NULL,
  `import_supplier_data_own_customer_number` varchar(3) DEFAULT NULL,
  `import_supplier_data_informations` varchar(3) DEFAULT NULL,
  `import_supplier_data_tax_free_delivery` varchar(3) DEFAULT NULL,
  `import_supplier_data_addition_number` int(11) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_supplier_item_data`
--

CREATE TABLE `import_supplier_item_data` (
  `import_supplier_item_data_id` int(11) NOT NULL,
  `import_supplier_item_data_number` varchar(3) DEFAULT NULL,
  `import_supplier_item_data_description` varchar(3) DEFAULT NULL,
  `import_supplier_item_data_purchase_price` varchar(3) DEFAULT NULL,
  `import_supplier_item_data_status` varchar(3) DEFAULT NULL,
  `import_supplier_item_data_standard_item` varchar(3) DEFAULT NULL,
  `import_supplier_item_data_item_description` varchar(3) DEFAULT NULL,
  `import_supplier_item_data_supplier_number` varchar(3) DEFAULT NULL,
  `import_supplier_item_data_item_number`varchar(3) DEFAULT NULL,
  `import_supplier_item_data_procurement_cost` varchar(3) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `website_configuration`
--

CREATE TABLE `website_configuration` (
  `web_id` int(11) NOT NULL,
  `website_configuration_logo` blob DEFAULT NULL,
  `website_configuration_internet_addres` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `website_configuration`
--

INSERT INTO `website_configuration` (`web_id`, `website_configuration_logo`, `website_configuration_internet_addres`) VALUES
(1, 0x89504e470d0a1a0a0000000d49484452000001f4000001f40806000000cbd6df8a000000097048597300000ec400000ec401952b0e1b0000601d49444154785eed9d09bc0de5ffc7e7e05a2bbb16291425b2445ae88f363f29da6851498b282a2aad96a424450bad8a4aa2545a485aa8a82c95e45a2e71492964898baee5fcbfcfb967ce3df7dcb3cc9c3be79e59def37a1dcb39cf7c9feff7fd7d663ef33cf3cc333e7f8f5a7e8d0d0210800004200001471328e168ef711e02108000042000810001049d860001084000021070010104dd0549240408400002108000824e1b80000420000108b8800082ee822412020420000108400041a70d400002108000045c400041774112090102108000042080a0d306200001084000022e2080a0bb2089840001084000021040d0690310800004200001171040d05d9044428000042000010820e8b401084000021080800b0820e82e482221400002108000041074da00042000010840c0050410741724911020000108400002083a6d00021080000420e0020208ba0b92480810800004200001049d36000108400002107001815408fa4117702104084000021080402a09ecb3da78298b0d1ef08dffdd6a9b16bb883908400002108040fa09f87bd4fa4fbc286d952756f7d04b5ae51876200001084000022e27606907d86a4177397bc2830004200001085846c0520db6d4986521620802108000042000015304107453b8280c010840000210b0270104dd9e79c12b08400002108080290208ba295c1486000420000108d89300826ecfbce015042000010840c0140104dd142e0a43000210800004ec490041b7675ef00a021080000420608a00826e0a178521000108400002f62480a0db332f78050108400002103045004137858bc2108000042000017b1240d0ed9917bc82000420000108982280a09bc24561084000021080803d0920e8f6cc0b5e410002108000044c1140d04de1a230042000010840c09e0410747be605af20000108400002a60820e8a6705118021080000420604f0208ba3df38257108000042000015304107453b8280c010840000210b0270104dd9e79c12b08400002108080290208ba295c1486000420000108d89300826ecfbce015042000010840c0140104dd142e0a43000210800004ec490041b7675ef00a021080000420608a00826e0a178521000108400002f62480a0db332f78050108400002103045004137858bc2108000042000017b1240d0ed9917bc82000420000108982280a09bc24561084000021080803d0920e8f6cc0b5e410002108000044c1140d04de1a230042000010840c09e0410747be605af20000108400002a60820e8a6705118021080000420604f0208ba3df382571080000420000153044a992a4d61c712f02f9a7195b668fa7512c001f9f8a30462f43bb56bb4b2d1d8f8e2008bf75b329cadb6978c0fec631f0246dba8551e17677d7a5b8facb3847644dd655aa73beff7952879d0aac0b0e31c0208ba737255244ffd7fac68ea9bffd1ff8a64849d2100015b13f01fd7fc04df45773c606b27712e650418724f195a7b19964b7ad53367830004dc4d20d7dde1115d3c0208ba77da47710e097a872a9142c05e04b870b7573e8ad51b04bd58715319042000819412e0c23da578ed6d1c41b7777e2cf38ea3dc32941882809d0970a8db393b29f60d414f31601b99e740b75132700502108080d5041074ab89620f021080000420900602087a1aa0a7a34a1ed24e0775ea84407113f073a81737721bd587a0db2819b802010840a068047cdc5a2b1a4047ef8da03b3a7dc69de72837ce8a92108000049c4800417762d692f09971b824a0b10b04200001071140d01d94aca2b84a0fbd28f4d81702108080fd0920e8f6cf91251ed243b704234620000108d89600826edbd458eb98f4d0d1746b91620d02108080ad0820e8b64a07ce40000210800004922380a027c7cd717bd13d775cca701802108080290208ba295cce2dcca438e7e60ecf21000108182180a01ba1441908400002108080cd0920e8364f10ee410002108000048c1040d08d50a20c042000010840c0e60410749b2708f720000108400002460820e84628b9a00cb3dc5d9044428000042010870082ee91e6c12c778f249a30210001cf1240d03d9b7a02870004200001371140d0dd94cd38b130e4ee914413a6c7093016e7e50680a07b24fb1ce61e4934617a9c0097ee5e6e0008ba47b2cf61ee914413a6d70970edeee11680a07b24f91ce51e4934617a9d00d7ee1e6e0108ba87934fe8108080db0870e9eeb68c9a8907413743cbc165b96c7770f2701d028609f85074c3acdc571041775f4ea346c451ee914413260420e0590208ba77528fa67b27d7440a010878900082ee9da433eaee9d5c13290420e0410208ba07934ec81080000420e03e0208bafb724a441080807709706bcdbbb9d710740f279fd02100010840c03d041074f7e492482000010840c0c30410740f279fd02100010840c03d041074f7e4924820000108700fddc36d0041f770f2091d0210800004dc430041774f2e890402108000043c4c0041f770f2091d0210800004dc430041774f2e890402108000043c4c0041f770f2091d0210800004dc430041774f2e890402108000043c4c0041f770f2091d0210800004dc430041774f2ee346c2abd63c9268c2f43a010e750fb70004dd23c967b5098f249a30210001cf1240d03d9b7a02870004200001371140d0dd944d62810004200001cf1240d03d927a6eac7924d18409010878960082eed9d413380420000108b8890082eea66cc6898549711e4934614200029e2580a07b36f5040e0108b8900077d75c9854a32121e8464939bc1c47b9c31388fb10304680c138639c5c590a4177655a0b07c551ee914413260420e0590208ba67534fe01080800b0970edeec2a41a0d0941374acae1e51872777802711f021080400202083a4d04021080807b0870edee9e5c9a8e0441378dcc993b300ee7ccbce135044c1240d04d0273537104dd4dd924160840c0eb0432bc0ec0cbf197f272f0c4ee05023ecd7f58d5ad5ac9922a58bdbdebbd18f5b73e7811f9b71138e9ea0dc5abd7ec608cd9f2915c8aba7f34ce4eb169a48de86512c514eff768bfa9efc2dbacfa7759edd02a7f6a5aba9aa5191c944d0501043d1554b1691f02a5320efaee7de72cedf03a2b6de294d7ceb68984cc266949a91b56e63c3e4f9fcfef2b51f2604aa3c1b86d0920e8b64d0d8e5942c0af95d07c25fef3952c75c0127b1881000420605302dc43b7696270cb5202b4734b71620c0210b023014e7476cc0a3e594d80615fab89620f0210b01d0104dd7629c1a11410b0f21e660adcc32404200081a21340d08bce100b10800004200081b41340d0d39e021c80000420000108149d00825e74868eb0c098b323d2849310800004922680a0278d8e1d21000108400002f62180a0db27177802010840000210489a00829e343a7684000420000108d88700826e9f5ca4d4131ec44e295e8c43000210483b01043ded29c00108400002108040d10920e84567e8080b1e9fe5ce0085235a294e420002452180a017851efb420002108000046c420041b7492252ed065dd45413c63e04200081f41240d0d3cbbfd86af7f8907bb171a62208400002e92280a0a78b7c31d74b0fbd9881531d04200081622680a0173370aa83000420000108a48200829e0aaa36b4c990bb0d93824b108000042c2450ca425b98b2310135e48ea8db384169766dda9cef2fdfb7ef4099186e70c726f5f949e6f02cb44fd58a876e3abb659359a977971aec480041b76356f00902c54ca0cfe32fbdb57d674ee962ae96ea2c26707ae3137edc7fe0c097a54a963c60b169cc39800043ee0e4892152e2673f96f45bdd8700c81fd8ef114476312f0cb263f32a2e2d13682a07b24f11ce11e4934614200029e2580a07b36f5040e81020418c4a14140c0e1041074872710f7210001084410e0e2cca34d0241f768e2091b0210800004dc45004177573e890602108000043c4a0041f748e21983f348a209d3eb0498ffeae11680a07b38f9840e0108400002ee2180a0bb27977123e1b2dd2389264c0840c0b3041074cfa69ec02100010840c04d04107437659358200001af136030cec32d0041f770f2091d0210800004dc430041774f2e890402108000043c4c0041f770f2091d02610478b291e60001871340d01d9e40dc8780450410748b40620602e92280a0a78b3cf5420002108000042c2480a05b081353107030017ae80e4e1eae43401140d069071080802280a0d30e20e0700208bac31368d47dced6464979b65ce4b980e79953db1414df7da9ad02eb5e2350ca6b01132f0420509840afcb3b3cbee7bfdc32f2cbc1606f3df21a309ac02723fabadd64f6b563eacc5e2babb803fb6cddb1b3daa4995f5f77e0c0c192760c0c9f9c470041775ece92f2387416496a6f76723b81876ebae221b7c768b7f856666f3871f267dff4386037c7f0c7b1041872776cea701c021080000420904f0041a735400002108000045c400041774112090102108000042080a07ba40d989db9e3112c8409010840c035041074d7a4327e206e9952ec9174112604200001d3041074d3c89cb9033d7467e60daf21000108182580a01b25e5f072f4d01d9e40dc87000420908000824e1381000420000108b880000bcbb82089464260c8dd0825ef96d9bc6d47f5837ebfbac08f1ccc4947d329ce012523f185fb136f05bdc06f87942bbbb342b9b2bbbddb9a883c5d0410f47491a75e08d888c05937defbeb8e5dbbab0405dd88c8457a1f6d9fc8ef12fd3fdc6622514ff47b22ba666334b2f4adb2597240f74b07c8df231339c0ef10b09a00826e3551ec41c0810476edde7bd8ce9c3d193672ddace0dac6f5ff72f795b38d3338e22902dc43f748ba8bda9df10826c28480150438dcaca0880dd3041074d3c89cb98363bb3bcec48dd7de26c0e1e6edfca72d7a043d6de88bb762ba0cc5cbdb81b5d144ac4b1a2cad6389251304107413b0280a010840c0e604181db0798252e91e829e4abad88600042000010814130104bd9840530d04200001084020950410f454d2c536049c4380a15ae7e40a4f21109500824ec380000420000108b8800082ee822412020420000108400041a70d400002108000045c4000417741120901021610e01eba0510310181741240d0d3499fba21000108400002161140d02d028919084000021080403a0920e8e9a44fdd108000042000018b0820e81681b4bb196e90da3d43f807010840a0680410f4a2f173ccdebc2dc231a9c25108400002491140d093c2e6bc9de8a13b2f67780c010840c00c0104dd0c2d0797a587eee0e4158feb9c0b8a8733b540209c80a5a7e652b0850004207062ed9a3ffd9bb3e75021117e82d1ffad06782c3df1149178345f8c0e42a972a1b2ffecd855e3ef7fb6552fa23fec0e015b1040d06d91069c80407a094c7f76489ba068db55c46301322ae46afff0d802fbbdf0ee8c3b1f7a7ee288f4d2a7760858430041b786a3edad9839ebd93e181cb49c4099d219b9961b7580c1e7267fbcdf016ee222040c11e0be99214cce2f64a7f152e7d324021711e05ad745c9f47a2808bad75b00f14300021080802b0820e8ae4863e220e88624664409084000024e2680a03b397b267c67c8dd042c8a4200021070200104dd8149c365084000021080402401049d360101084000021070010104dd0549240408400002108000824e1b80000420000108b880000bcbb8208946426096bb114ade2dd375c0884f76edd953510844ce9fb4623e65b4e617edbb5875455b8e363259e1f67c8ff4bea67ff3938e5fe4dd8c12b9170920e85ecc3a31432082c0774b969fbd7d674e39b780d9f6efaeaa6e8985382060940043ee464939bc9c15dd2c8723c0fdf8040eb80c1083522e4b28e1242680a0276644090878810002e8852c13a3ab0920e8ae4e2fc1410002108080570820e85ec9347142203e01b7dd9549673c8c7670b4a58500829e16ec540a010840000210b09600826e2d4fac41c0a904d2d9a3752a33fc8680ad0820e8b64a07ce40000210800004922380a027c7cd717b7153cf7129c36108400002a60820e8a67039b730e3a9cecd1d9e43000210304200413742c90565e8a1bb2089a90dc1654d844bd8d43617acdb9100826ec7aca4c0274e6f29808a491b1370d9f5898d49e39a7d0820e8f6c9059e40000210800004922680a0278dce593bd25f7156bed2e02d4d240dd0a91202561240d0ada469635b0cb9db3839b8964e025cc8a4933e755b4a0041b71427c620000108400002e92180a0a7873bb542c06e04e8a9da2d23f803019304107493c0280e010840000210b0230104dd8e59c12708143f8152c55f25354200025612e020b69226b620e0500219a54ae666942a553a0dee1f3c70f0608983070fa6a1ea4095dc6a481779eab59c00826e39520c42c079043e1df3704b11d692e279713f10e11bfaf2dbc3a67fbbe822a99b1143e7351d3cb6110104dd46c948a52b74435249d7f9b64fac7df4f27445d173d8981d8879bae853af9b087045eca66cc689a5b8bb5d1ec14a981610f0f9ac1f1590f6ce35ac05b9c184b30820e8ceca17de42c07504fc7eebc557d49c6b58d7b514024a4400414f44c825bfd35d714922dd1906cdd39d7925aa622680a01733f074554777255de4a93711011972678300042c2080a05b00d1092638673a214bdef45186dc390f7933f5446d31010e248b81620e02103047201593e24c78c0b5ae095814b5370104dddef9c13b08b89e402a26c5b91e1a0142200a0104dd23cd827be81e49b403c34c730fdd81c4701902d10920e8b40c084000021080800b0820e82e48222140c0c9049814e7e4ece1bb9d0820e876ca06be40c083045234e49ecec96ee9acdb832d88907502083a6d01021080000420e0020208ba0b92682404ba0c4628510602108080730920e8cecd1d9e43000210800004420410748f34061e5bf348a21d182693e21c98345cb6250104dd9669c129087889809f3b425e4a37b1a68c00829e32b418b6110104c346c98874c5e7f31db4b17bb80601c71040d01d932a1c2d020104a308f08a61572eb88a013255b89f4029f78748848a8087cf9807b4ddff56f3efdabacddb184c1d07c94eb930dbcc543d077b3f35a18a29ef280c0108442580a07ba461a833a7d9b3ad2bd01cd857d23fa2eb579aaf846aeba55d1193cb82a8f1cfb19b34ada2cba2221c08143f0104bdf8995363b112f06bbe7d7bcb176b9554668ec0c1fd65cded40690840201a01eea17ba45d78b277ee91dc3a3e4cbf56d2f1311000046c400041b741127001029e26e043d03d9d7f6f079fec7c95a8d410748f34264b5b8d47981166b111a0875e6ca8a9c8cd041074376797d820e00c0219ce70132f21606f0208babdf3837710703f01868fdc9f63222c1602087ab1604e7f254c8a4b7f0ef02006011a274d0302961040d02dc188110840c05e04e8f6db2b1f78531c0410f4e2a06c833a38bdd92009b8508c047c34f962a44d55f62080a0db230f780101ef12407abd9b7b22b79400826e294e8c410002a609700fdd3432768040340208ba47da05e74c8f249a30210001cf1240d03d927a46353d9268278649e37462d6f0d9860410741b26059720000108400002660920e8668939b73cfd20e7e6cedd9ebbef7e10c79abb5bac6da343d06d9b1a1c83804708207f56261a9a56d274982d04dd6109c35d08b88e80fb7ae8ae4b110139830082ee8c3ce12504dc4b803ea57b734b64c54a00412f56dc540601081422400f9d4601014b0820e89660c40804209034017ae849a3634708841340d03dd21ee8047924d18409010878960082ee91d4d309f248a209130210f02c0104dd23a9a787ee91443b314c1aa713b386cf362480a0db3029a970891e7a2aa86213021080807d0820e8f6c9454a3da1139452bc1887000420907602087ada53800310f03801868f3cde0008df2a0208ba55246d6e8773a6cd13e465f7183ef272f689dd420208ba853031050108244180abcd24a0b10b040a1340d03dd22ae8047924d14e0c93c6e9c4ace1b30d0920e8364c4a2a5ca213940aaad8b484008dd3128c188100824e1b80000420000108b8800082ee82241a09414635e90719014599e227c0907bf133a746571240d05d99d6c241a1e61e49b413c3a4713a316bf86c430208ba0d93824b10800004200001b3041074b3c41c5a9e514d8726ce0b6ea7a071d2e9f742c371458c96b67e04dd156d822020e0600229505f4bcf920e468bebde2280a07b2bdf440b01fb11407ded97133c72240104dd9169c3690840201e811474fa010e01db1340d06d9f226b1ce404670d47aca480400a1a279dfe14e40993b62780a0db3e45380801971348affaa6e072c2e5f9223cdb1240d06d9b1a1c8380470820a91e493461a69a00829e6ac236b19fde4e904d20e0863d09d038ed9917bc721c0104dd71294bce613a41c97163af6220e0bec6e9be888aa1195045d10920e84567e8080b74821c91266f3a9982c689a27ab329793d6a04ddeb2d80f821906e022950df145c23a49b12f543202101043d2122771448c139d31d608802021080804b0820e82e49246140c0b10452d29d367c096bb8a063f9e2b8670820e89e49358142c0a6045222a929b94ab02940dc82401e0104dd232d81d39b4712edc430d3df38537249e1c454e0b3b30920e8cece9f61ef3963194645c1e22640e32c6ee2d4e7520208ba4b131b1956fa3b411e014d98e609d038cd33630f08442180a07ba459d009f248a29d18268dd38959c3671b1240d06d989454b84427281554b109812211e0b02c123e768e2480a07ba44dd009f248a209130210f02c0104ddb3a92770084000021070130104dd4dd98c130b637b1e49b413c34c7fe3b4da03abed99c96a3aeb36e32765534000414f01543b9a64c8dd8e59c1a70081d4344e848de6e5390208bae7524ec010b01d817d69f42815c29f0a9b4611a9ba53738964d403caa58d00829e36f4c55e310779b123a7428304720d9633532c9da26ac64fca42c0320208ba6528ed6d48ce6e9ce0ec9d222f7b77d065c12773ac5975c19d4cdd2ec3efdd704a7937746f45aece161ce9decab983a24d450fdd68f8e142aa2e2cf4ff273a5cf4df139533ea877e5113ed508dac2351dd56f964d477cad98400826e9344a4da0ddf09677ce9ef1c38ced50943ff44ab36dac920d10922d1ef91f518a9c3a8cdc89e8d553d1d232949e463a2dfa3d511cdff5831457e6fa63ea336c37d0cdf47ff773cfee1fe44fe5bfd3f433ea5daeeadbcab6c4ef9caf2efbdf239209f70613592cf4271d7ad75449691049ed6e884790fdcd06568946342d94c249c915504c4b875b3865f19a9bb6aa5c3febeafc7e5830e1c385832587facfa62097a646e7c471f5e2dbb84cfe7b6110f233829a31a9fbf472d23078c6158bef1bf9b39a918b64b41084000021080809b0888feaa8b2fcb34937be86e6a1dc40201084000029e2580a07b36f5040e01084000026e2280a0bb299bc40201084000029e2580a07b36f5040e01084000026e2280a0bb299bc40201084000029e2580a07b36f5040e01084000026e2280a0bb299bc40201084000029e2580a07b36f5040e01084000026e2280a0bb299bc40201084000029e2580a07b36f5040e01084000026e2280a0bb299bc40201084000029e25c0cb593c9bfad881e7eedb9791b9e6f7263faff8edb40d7f6fa9fd6fceee4a7ebfdf57ae6ce95dd52b55faeb84da4767b638e9f8efaa553aec9f54e35bfbc75fc73ff9e6b4470f1c3ca05ee4a1b568506fee4d979c3f2ad5f526635f5eb25162f5868d272cca5c75e6ba8d9b8edbba735735ffc183f2ae0c9fbff2a1876ca95df3f055cd1b1cff43bd5a47ad2859b244b1be40e3a715bfb57ce5fdcffaf9f35e2696b0ee52254beeaf51a5d2c6e6271e37bf6d8b936755285736271926e9d867decfcbdabe3ffbbb6ba46e15ec41f17de7bdd75ffe90fcad5efe6278db99b3fbd0916f7c303467cf9e8a415bda95edff6fdca90deb7f6fd84858c167dffee87e691775835ff95b9c546fee55ff6bf386595b4b57af6b3ae1e32f6e936332f052978c52a5721fbcf18a01875628b7d3ac2dcabb8b0082eeae7c16299a3f376fad3979e6d7dd9b5e75e75d7f6eda5265ff81e8e7fd12257c5ab93265b41b1e7e66ea0d9dce1b73dac9f5e7c949657f912a8fb1f386bfff3976e28cd95d452c0325fedab2ed08f9cb5682be63d7eec33efa7a7e973637df7ff7b235eb4fdcb77fbfe68ff2ca239fbc82a154c952da49756bad98387df61317fe5fcbf72a1d5ae1df54708bb4b9242bfb9437a7cfbed26c5d2ad747d7a8b6e5c3393ff4baa0758b699267f536345b6fd52a1ff6f79459df76dfbe7377e0fc2617545acd1a55d7ca3fc79a717cdcb4cf6f1bfdd6b43bf55c563af490837dafecf4a8191be165cb96299df3cafbb36e3a1834f8f6cc6f7b2c5bf3fb8fd21e328ddadcfbdfbe321dfa0e7e6d61e6aa66fa3e1d5bb7f81431374ad0dde5187277777e0d45b7e7bfdcb2c3c64d1ed6f2dafe1b06bd38e9d1f51b37c5147365f0e041bf96b367aff6ceacb9975f74e7d03917f47d786ed6fa3feb1baaace88512f62e8b5e85310bc2c1f7ceac6faf39a3fbdd6b6f1dfefcb8c52bd79c98bb2fba982b8bea3caec4fe97acb527f61efefc6b675c7fd7ea299f7ddbcd586d452e95d45b1555aed7ffb5b9dab503474fbd6bd46b2feedf7f40f50a6dbdc908d2f2a1b75edb4709791e77bf36e88549a397aff9bda151c7d7c8c8d0536f7e30441773b1b5ff9eeb2e79a0f65135d618b51159eec6cee78f39ff8c66b3f4ef65e4abd4ed4fbcf8aa8c8819663a65d637dd7f5cb63a24e6653232f60db9e5aa01c9fac47eee2280a0bb2b9fa6a359b1f6f7869dfb0d9b3362c2fb0f6edf697e5475dffe03daf74b569cd6f6a6fb57bc36edf39e070e1eb4ec5580c160d2f9bef3983c8555a5de8f8d9d74d323cfbd298257255a8f3c5e3254f9dffffaa7baec3ff1966163dedcb133470deba6724b4ad075870e1e3ca88dffe88b9bfa8f1af7c2fe0307acceb126364b4a1d96d9bdb2fd59e3e5b6d00fbaff72019af1c82b93871b012c176519fd9e1cf7b2e4b88c5ebe75d3063fdc727987d146f68f5546dd6679f0c6ae6ae83f349ab52073d569ef7c3eef5a237657aedbd060d00b6f3da3f7f0d5f5ca905e57ddd7a0ee314b8dec4f19f71360c8ddfd398e19e1afabb39b8898cffe63f3d6cae1854a9428a11d7b64f5f5cd4ea8bbe094138ffba1d6e1d5d6972e9df1df3fdb7756cb5cb3aef1c2a5ab5ac9d072d3ddffe586da8ff4367cfd9e1af7d2e6edff1e2eb61eb1106bc449deb2737ed22efeb36367d52e0386cff8e1d7ac96aaf7a76fea045bbd52c57f9b9e5077be88c9bc7ac71cb5f290f2e576eedabde7d055ebff3c414edead7fc95ad362cbf67f654e42de5e6aff4933bfb9e6b70d1b8f97ef2f9279095b9276ccc48e7dba761cddb9dde9efca2e5181eed8b5abd29c454bcf99fae5f757ffb565abbacd11f0f58d4f66dfdca1558b0fe5bfd34d5417b3a8ba007cf583597d9b74ed3bf8d8a30e5f291cba1f77f491ab8a6abb7c9932b98b96afbabdc36d437e9011a840c765fadc85174dfeec9b6e721ffcad78f63f9df763e7398b7e6da79791db0cdac09baf7cb06ce98cdca2fad5ecc4e3163ef9c607831f7e79d2a3aa0da8119007c7bcf1dcef7f6ff9528eb3dfe3d97fe2f5f7074bdb2bab9739b176ad153d3a9dfb62dfa23ac5feae2180a0bb2695e602917baacd3adf39ecdb4ddb7654c817249f76529d63321fee75d580ff6bdef0cbf265cbfe176dc68eeaa1a9c96a4fbd39ed81c9b3bebd5e866143e22443caa15e8d398f0c972e524fd3702d310afe2bf7cb2fbbfbb119dfffbab2657891aa150fdd7dff0d5deeed725eab49552b1eb6f5fd18fb8b68577df7f3b9570d7ff5ddc764d2dca1ba50cac5c1e957dc37e26311ff73e522c0fc5089c9c08e3db2c69a331a9f986872d78c3f36fd33ea9a81a3a62e5c9a75baaa4272afddffdcebcf1c3870e0d392254b16f9f6c70f4b56b4b9f7d9d79f51b722d6fdb5f98c3ec35f524dee0c93e1442d2e1328170e7c7ee2934f4ffa6880ba183920e239f085b7466dd9f6ef4cb9cf1e7542e7c6cd5b8f3aebc67b5f910b8d804d7591d6af5ba7c7ce6cd2e01b2b7c52367a5dfebf6726cd9cd33d6b5dde6d2a11e9431e1d376598fcb37bac3ade9ffd43d71e83465fa1ff5e3aa3d4c16707f4bc59daca6eabfcc28ef30930e4eefc1c9a8e60dbbfbb2af77cf4b9b7c2c55c6635cb89abf3f02f5e7ae4b4ffb56a3e4389792cc352d65fef989aab5e7cf0b61eef3c7e6f07e959fcad264f3d24bd98fb7b741964daa1f83b44f420d3aae7dabdcf4e78fe87a55921315727fcf667369b35fb95c71af7babcc31825e6f1c2514f06f4ee72c19839af0e6fdafe8c53a6ebf779d53ef345d4073c3d7e4c0a6e5b249d12994cf6c71b43fb75950b961dba91d5bf6f3c4e6eb39c95b4d1b01d77eede53519e60087db36d574e352b87deefb8bad31375e5e902bd02995459e3d157a70c8de5fbe313a60efd7beb8e4afaefb58f3a7c4ddf2b2f1a6945acba0d75c136faae9b7b972a957feb7ccaacb9dd66cc5dd4395a3deaf6cec0b16f8ed62f325499eb2f3ce725b9209b6ba55fd8723e0104ddf939341581128bfb9e9d3066e9eaf50df41dcb942ea50def7bdded437b777be05093bd4399e43373c67343ce7cfefede3d0674bff4b1e27e1ccb54f0452cfcde97f3ae7c6bc6d7ddc287d93bb569f9e1c4617775ae5bf388dfcc9897f26bde1cd6bfcbc5ed4e7f275cd427ce9873fd075f7d1fea8999b169b2ace17b176a28f882d6cda785db5ffadbfac626eb8b5abc6df3933f3bfff4665fab0b4a99f1efbfafc7650fc82d1fcbaedad405d453fd6feca3ecab4de5eed5699fdffaf58f4b4343eaba63dffe94d976c2475fdea8e75704d7ffd86dd7dd5df9b043b65b116bb88d36cd1b7d755dc7b35fd1732f23142565e463d48e5d398744d6f5e41bef3f28f3348ed2bf3fa26ae5cdf7dd70f910ab7dc29ef30930e4eefc1c9a8a20f3b7754da77e31ef6a7d27754251cfe84aaff1395386c20ad7a979b89af99bf4ecdf04f5469cdc0deb50b2e144dd4fe6081c7666f77b461ff4e78f329f7f7ad32fc60dbcfd2a7984cfd4f3cd7a05e5cb96d9b367ef7fdd77efd95bfeb3ef7fbe507daf263c0d7e71d293f228dc8c8a8794b7f291b648913405f2e47a757ed6b439a12161e93556b102b03cca254f62ed3bff8fbfffa9ad9e173fbc6aa58d56d80db771ee694d67757bf0c9f73f9c33ff529df143cf4f1cb53737f7b4b2a54b07ee8bcbad8e43dadef4c0cbe1bde02ee7b49a72519b961f58ed8f6eefbe1e970f9931efc74b648e4235f59dccacaf33e6ed4fd48cf5d028d7373f65b6bba4ffb0bbf58b8c92254a1c1875d78dbd648d804da9f20bbbce25400fddb9b94bcaf3a7264e7be83f79b44adfce6dd974d69d57777e22296369d9c9b2ce9b29ef6538f462b9c71b981ca6b62a871db277c41dd7f72927a26cca504461d97feff0beddef9621ed9078cb63833567cc5d1875f8b528751565dffdfbf70716f6d137b9c562d9f3e8f2e8556edda38fc84a8598ebfe3e717b8f3b8eaa5ee56ffdffb26852d39113de0f09e74befcdbc7de5fa0df5f4dfd52d86076eecfa60519825da57fcf973c4edddfb8a48078acab59cefc9891f3c20cf989fa6feff5feebed20fbffcf6a3e1c7eb39a735f9bc43ab82a32589eae177ef1040d0bd936b4d26b2d59df1eda2402f456d654a6768836fb9f23e9960b3cf4318920a75fc875fdcaaf792d47df3bbafbb7490cc23589994b1889dea1f5b73e580eb2f1b147a6e5a7e7f75daac5badbc971cc54f533df445cb569d196ea346e54a7f59117b71d9a87978d50dfdafbd78982cdb17aaf285a99fde254f1f1c2feb02341b31e1bdc0ac73b595f095f03fdcfbea01c191a794ba28b76ca6b46e76d2577a25f21868c947c64d7e54c4bcd498299fdcb96069566882a0bac81879678fbe32ebbec89311531a14c6d34600414f1bfae2aff81b5912736f6ebe76cbd293df9c5caff6e2e2f7c45935ae964573162ecbeb35a9edd0f2e57365367bdc479fcc46d8e5dc566f87af1ab73073f5e97f6cda7ab4593ba928ffebea758d677efff3c5ba6d75e1d1b251bd4433e40db9a216aa796bc6ec5b5e9a3a73807ceefe79e59a530ced9844a1eb2f3ae76511cfaff55de5364ad9bb47bd364e86df9fdebd377f0ee8a98d8e5f7855fb361392a8c2f42e22cefee7eebda5a7cc5d091d98b3172e69a366e78f9af8e1e0f0f91afdafe9fc983cd2b7da7425ece0190208ba6752ad69cbd7fede28fc04d1b9ed69efca705f7ac6b01dc47de99af58df7efcfef143539a1cefc23ab55f9d3ca10d43dd186756bfda4db54f772bffb65b92533c983364df5c8753f64367bebabef1ff9c9ee3dff85f66fd7a2d1ac93ea1e6378b9d2789cfef97767f5db478e7bf1aed1af8e90cf48599ef6562bb986db52f7cb9fec7743df43ca970d25f3cb85bfb49167ceff4f2f775885727b46f5bfa9b78c5e15f99973a371a80995f774bf347f84c6af957a61ea8c5b65825c79dd865c7c2fb8e992f649cf7331ea0be59c4d804971cece9f29ef7ffb7de309e13bb46ad2e05b5306d25338ed171cd97ffe5d377c329c2cb8b3f0d314b038bdf189dfcd5dbcbcad6e7ac3a62dc7a4a01a65d2ffc3d295ad6465bff047139560eb1f2d57ee992fc8cc3a5396f5eda29e11d7b7f2e5caec1b76ebb5033e7adaeaa71343552475e16194935c88fc2a0bb93cf3ece44ffae917b7e117b9b75cd6e1d926f5eb842eac8cda2d6ab99e97b67f4e9611be529e1e6812489088ba6e532e440e3ed5ff86db64d26091e66b14d547f6b73f0104ddfe39b2cc4379f94ae8d1973219a5f627337cb7f7bfdc32b28ca65a104509ad2eb6ea241cfaf76115ca6fcb90852f2c733ccd866485bceae12ed439ea70538fa819755f167b512f10096ddb77eeb264267994fa7def7df95d17f531ea9b2aa7266f0dedd5ed8ec6f5ebfc62663f936553de6e64bd8407be5cf0cbff443c438f6e2a1f8f3bfa88b5fdaee93c6cf02d263db6a0b87a365dded2d7b37d9fc1f3e5feb9b218bab0b9e682362fc95bfa1659500d265c4e0041777982c3c393652643b7586429d7bdc9cc54bef799092fbe31fdabebe3611b71fbf56ad8f48514a12df61efbae3d7b0b3c1b2c8fa9a564752eb9102af0989aac6c66e5f159a49eafbccd6baf3c93dda747e7735fb53eaf05529af2fc969347e564f5b8371e1afb6681b5dd6fbbe2c2d192835dd6c767cc628b86f5169c75c380453faf5cdb42df430dfdf7bff692c79fbea7a7312394f23401eea17b28fdb2e84b68ec5466d396558fc9980d5fc4ada27a214bbc8fac9d1d5a4ed6acfdc4e54dbb9cd86482123261a980d0e6ecdd9b92f8fedd955329dc95f07c153988240ca809e1150fa990dbf1ac169fcc796578b3d4887981cea86a9029177479f6bf9c0c6f177a21ca0befceb85326ca155ad825097449edb268d9ea5397addd10127365443dba367ae2b47b9332c84e9e2360650fc073f09c16f0d1f2e88ebce233308b5886ce4badff6b536df9e7729371441b125527e1e2575a938e275b5c561b2bb088873cfe775cb2b6e2ed270b8b14b05be5d043e22e235b141fda9fde6c568b86a1b791057227ef9eaff5c6f4d9d7e72f6252f2c0c74f3fd4ea1419ee9df2b87b3465d8b8298f2e59957d52243f7984adeee8891faa67cfef2f0adb64f695db58e5cfb9e5c1f1c1e1f602262427b7feb87cf57886dd9321ebad7d10740fe5bbfe3147a999c99df4906576efd96605fd9406c77df78fbc2d4cf6d3efa1fbfedcb2b5e6b235bf87df8f4ca1b89b7d5169d1135ce7e8c357cbb3c9b28a5bdeb58cf4a42c797948a467df2f59596056fb3111f7d48b1849819eafac9ef669efae173c1d6e5366b2979bbf34ebcc15d91b022f0d51af347d7be637aa275b6cf76fc5c914b61d4dcbfc6dfdc9229cfdc2e20e9f07a2bdf4fecc7be4a277aabc31efc722f236b5fb8b533fbd3db3e0fbdad58df4c0623e4ae4fb3f39ee7911fdb632312e25b77b4c394b61db1260c8ddb6a9b1deb106758e591ab6ae86264b615e296fcd327502bdad6bc751d3463f74ae7cce7befa907dacbe7fc5be5559c11de9ab2692ed2149a8ee1c8c9c7d5fea574e952214194c954a7fcb1694b4d737ec72fbd71cbb623e5b1c2c00c67b565c88b3be4e51ba97c0aa1d0488bcc60dfa396230d5f7c45d696efbbeaf7bcb782a56e2b70ad91b204ab099d039e99f09cdc360a85d2ae65e36fdab5681ce22c6fd32b79cfe8d7c6aaa1eed4c55bd0f26f1bfe3a7ed4c46943f3172ef2a937b2bd24b73b42f7f37f5cf1dba9e33e98d5bbb87ca21e671240d09d99b7a4bc6edba2d16cb91f1c7af445164b692d438fcd9232263ba967d8d5472e12527edf33dfc762ac2a5869eda36a648bb87ea9fb203da5d26f7dfa75685df364f985ef37e9d339d7c9faeda1e78ee5759d73d4d2a056d83663e37259e0a66d8bc6b3f57de46d68befbe5f5a6666cd8b5eceb9f7c75e3b73f2d6da3fb776885b27b9eea77c32d8fdcdaadbf2cc11b727b7e66d66953a2dc634f455c6a65b83b46befc8ae43eb4b46e9be6277ff5589febfadd7975a747c35fdc23a2ffd09a0da9b9dd938ad8b059fc0410f4e2679eb61a6531948d5dce3b6b82ee801aca9355b29e523d97b43965bae29475e0e27a72d3c5e7bda85e11ab36d5937aea8d690f2f5dbdee64d3ee47d961c9aab54d9e7af38387f59fd449fce64bce7fde0adb716cc404d9ff9a4e8fa911027d9bbdf0d7ffc97bcb0b2cfd6aad6fa9cfe986bfb7d41af9c6fb43d5cb6ff44d469b9eac2fcbf7aae1f5fbafbffc417df44a9e06d11e1cfbe673bf6dd8185adbddda78f3ad4d9bfdfd15ea2d6ffa37f2b8e781c13dafbcbf7446c6fedbafbe6864cb46f543af4895f7a657ea3fead517e42280f376aa12e270bb340c8727d0acfbb775bde01979cb5768b855dee6d4f6c937dfbfcfac9d82e57d297f7638acbee2efa24be5ea9eb3acdd1e5a1d4d66ba97ea376adcd89d397b8a342b5a7ac087c830f033ffe6ec095d541d5febc8d5e79d7ecaf4a2e524e1de3155547ae85f746a73da7ba10bbf7dfbb447c64d794c2dd39ad06ad10ba424bff2cae067e45de85575f79a9c50f7e7bbaebd7498feff9b2f6bff6cbd638e0abd377ddbbfbbca8d18ff5ee822abe86115b6b051d685b87fcc1b63f437bca991ae7edd3a3d76aa3cbea64acb4b6b0e0cbae98a41f2ae85b08bab2567cffceea7d03c9854f8854de71240d09d9bbba43c572f0291f7308fd1770ef436df9c3664c4f8771f48caa0ec242f1151277acbdebe15df0f7feabb73511c5093911eeb73edddfa9bb15491ef7f5971d615f78df850897232ece4959d15aeba7fe4b4b93f2f0b0d03abfbd7f216b7db2b94b3fc597753dc1ebae98a07c587b00bbfa56d3e98fd7dd764e24cbc4fbe86a7e2b1b52fe6ffd2fe93b98b2ed1fd5023208ff4ea76af3c8f1e5ade556e45ed7ae69e9e3df5511855f69dcfe75ef5f1d779af5c4dc5f6f8f8a90ffffdcff6cabaedda471efedb1d57757e3cbcae362d4e9eddebb20e4fe9df89f897bc73e4cbe3366fdb1178e52a1b04c20920e81e6c0f437a5df5803c02335f0f5d3d53fed8f8a98f0e7866fc68e99954328a44bd0d6cd2ccafaf1bfaf2e491b24f71f4de8cba969272edcf386566ef2e1d46854f2c94118eb32fe9ffe8678bb3d6989a8bf0f38a35cd3bf77f74963c69704eb8b3320c3cfafcd39ba5626559534ca4b7bab2eb79adc7eb3ba991eae7267f7cb73cc35dd694a1c4852357953175e191c8fc96edff56bb7bf4ab2fcae842a0a812f31b3b9ffbe2d92d1b7f1eb9ef59cd1ace9117b88416ce9159fe32f43ed1d43191c81ffdf7d98b969c278fa3dda44f8453b7381ebfbdfb5d150f295f6816bbacf3fee8b14754ff5ddff7efaddbab3ef6ea3b8f18ad8b72de2180a07b27d7a148d5329363efeb75b3dc530f3d5f7de0c041ed85773fbdf3fcde03bfff70ce0f97c98b210e8b85666f6e6e19799f7473e95d7edcfbd1e75f97de4245bd6ca99225b55a4754cb4e21d6940cc91af577e0cd573e74fe19cd3e0e17f51f7e5d796687db86cc97e79b87aedbb8e958f5b857347bea7bf9bdf6b071931feed067f0c2f9b29f5e4ed93bff8ca63307df7255b13f031d2bf6413dafba5f5ed9b953ff5dbd096dfc475fa4616154a3d9295ceed9491fdd2bb3c86bebbfc83bd7ffbeff86ae836359bce7ba4b1fa951a5e276fdf7b57ffe7d8cbcc6f4aee43d28bca71ad1b9e7e9f1cf87af917fd939addeea78d6a91f45aba7f261876c1bd2ebeafbc2478764825fafef7f5dd1ca4abfb0e57c023c87eefc1c261541a3e38ffd551e936a7771bf615ffeb179eb11ca88ea2d2ccfde70e2350f8d9a7a44d54a5bbb0c787c61a3e36bff5cebf0aaeb6428d8bf55d6165ff6dbef4d5bf7b8b7f9eadfff3c6ebf5c04846ff22a4859ebfbeabb3bb739fddda49c8abe53811e9bac477ff4848fbed0d7c1d47f8bd6ab0b3d272f7ec9eb4e5bbf2ef7228b7caf5fbd204386caafbaf6a151ef7eb1e0970e7a0f4b4ed21932843af0b9c99f3cd0a0ced14b64e6f24fb2e6fb6a7925eab61d39bb2baed9f077fd737a3dd47c853c9ab67b6fae2ffc8520aad778de694d3e7b6368ff2e65cb940e7f618a8518cd9baa5eb9e2e691afbf3772e82b93e591aac00b43b4d16f7df8d03f3bfe9d58b5e261ff98b7186b0f4b3be5a14a7e9247bddadf3ab8bfce5addce78b8d7d5f78aa817582828dcab5a47545ff7fe57dff5ba7ed0d393d5043ab5afcc2e7f502eda669e7ef209f3ac88f9e5f73febbb327bc3f1ba2d793c6dcf209908376e50df98e6a5fd4eba7ed0e88ba706d7dfcfddb75fbb7dc44b2fc913172da44de63f87678583d8702c0104ddb1a92bbae30dead45a26bd97b3fa3df9ca8b3204788e3e01589dc4e4b9e82a1bb7fcd8fed3793fb63752d311d52a6f9747806eeadcf6f4f7fa5e65648fe4cac80236c7f791139999bd9560b63829708b619999fd629555231cf284c0c5435e7aebb117a6cebc4b1fce55e5e5045b52169e69a63e46ea2a55b284d6fbf20b46ab9eb99dc45cf7fd868bcf7f7efcc75ff55abf7153e0c53e7f6dd95e4d0449add56fe190aff5cfa1cbfbcdcb5ed077c80b7bfefb2f340ad9a155f34fba7568fb7aa2bc5c7856cbf7feaf79a3d9723ba49d2a2bb7a47c435e9c344272de4ed6560fbdb73c919d68bfffb4fcb7961dfa0e79443fd6d43d7b196aef734cd8907a2cbbf7ddd065f0570b9774d8faefaec09c0d5900a8e1abd33e57b918958c2fece33e020cb9bb2fa7a62292374cad7ef789fb2e18dea77bffc3ab54da6e6a67292c22a4756ad3f2936fc63dde4889b9d9fd8babbcd5e3f4eaa519c3fb5e7ff707231f38efa43ab5969790379199d9546ff184636bfef6de930fb41f7e7bf7fe69107343dd621972ff47665adf177a644f961c18f5e68703b3ffdc54c74cbc71ca1af2c36c5db2567bf71f97ffd65cdf4f5ea893fbd0cd57a8655d136e3292b37ff45d37f69617b584c47bde2fcb5ac96a6ee12bcc25b413594016712a21f7be87ab8b3efdb7e6271ebf40e62abc69c4d889b58f5e3eb0e795f7e9cfa6ab8b02193d7962f9da0d8596b135628f32ee2360ee2ce4bef88948082871ea73e585a3174c7ceaf8b1f7f7bab965c37a8bd4fdbaf0452dc2412931aa5ae9b03d775c75d1534ac8270ebbab932c82f2871761ca4a635fcc1937fc94c98f0fe87441eb169faa478c627153dfabdf2f68dd7ce694c70774fee6d5c71b9fd3b2c9ac62e21679bbc1f0ed878bcf3e638abc473cb4e6bff47a33e4b9f998f7a1cdc793afe956cc725fb96ec349b2bec2f3a195d764355919d21e70f2f1b59718f54d1e515cd9af5be787c3c573e41b1f8c900b99ba466d44967bedc32f6e9df5c3cf6ab9e5c02643e5da73f7de72b3995eff3517b47bb5d9097517eb36640d8992835f9cf884d9151f938d81fdec4d8021777be7a758bd0bde171d27958e533db05f64e6f6fabf361fbb7d674e15f5663639f1ec11e1ded0e8b8637e3d5186ebd56b281f4db187758f3e62e53ddd2f1b7130ef7ebdfa43ef6c1bed74fb7c257cfe23ab554ed905873cd7afee617eac3e9bb66eaff14b56f6296a511299615d5d1629916b23df01b900da5cafd611ab644ec2e223aa56feeb9d1129061761be75d3067386f6eea67aa88aa1afeda927179ae51dcba3b272c1f7dd2fcb6f91c7bf3a06cbf8aa573e6c934ca4f4c91be18ce621aaf98a15ca6fbfb7fb658faa89962ab767363df1abd0335a4922dab327b77ccf4bffa79623566f173c20ed74778f4ee7be14fb0e75f48a6eb9ec7fcfca4541c9bdb9fbca2966f229b17befded06a7e66dd53a330775f77e9137a3b3ea96ead5f642e8be18b0c559f3ae66475c71ed366ff70a57e2c94295d2a3777ff01c58f7be96693e2b2f23e7f8f5a453a202379f8c6ff9e9221349771271c0840000210f03801d1dfc005b655181872b78a247620000108400002692480a0a7113e5543000210800004ac2280a05b45123b10800004200081341240d0d3089faa21000108400002561140d0ad22891d084000021080401a0920e869844fd510800004200001ab0820e85691c40e042000010840208d0410f434c2a76a0840000210808055041074ab486207021080000420904602087a1ae15335042000010840c02a0208ba5524b103010840000210482301043d8df0a91a02108000042060150104dd2a92d881000420000108a49100829e46f8540d010840000210b08a00826e1549ec40000210800004d24800414f237caa8600042000010858450041b78a247620000108400002692480a0a7113e5543000210800004ac2280a05b45123b10800004200081341240d0d3089faa21000108400002561140d0ad22891d084000021080401a0920e869844fd510800004200001ab0820e85691c40e042000010840208d0410f434c2a76a0840000210808055041074ab486207021080000420608e80cf5cf1f8a511742b69620b021080000420902602a5d2546fdaabf5af9ddf4ecb5e708e3872503e7ef9e8574ae1ff567eaaffab8ffe6f555e6dea6f75417450ab7ff91b5a756db7366f6adfa01dfd377d9ff0bfa37de7d36ab49ceb6b78da5789c0f8fd7bca68df8dbb4bcbd554ee74bfe49f1572b4563d9ef195f61d8866c39fbbf170f1af77d03f5546c59b1f6bed8eeff8ead45daeef1b2c7f6b58acbadf799cc2cafb73d6d4d5164cef1e56b664c076cb3e0ffb2af8745e5143f3674ebe51dbb4f9e800c7da1ddf151f56c462e0df34ff4c2d73c1b9daaa8fba697fac3f4ecae971a85d32b4d2c7acd5ceecf49a56b3dd4c5ffd468b62daf16f3b449b33f18e50fef2f2a8b6bcbf6bb69b1e6fff78390afa784ed0c7e3237c2c253eae131f5f4de4634cdfd77e7691969dd54c5b386690961328a51828de25c47676c076b39b9ef1552ab72b9a0d7f5eec77c96f2a8fe1ed20af78cd769feab14b1ba8216da667d07e789b5625c3da5ea8a6f0ef4a4a9bfe5adaf4ec78bc62f878a8f8d82fe863e4b1145e87de7ef3da64e5c68b7c4ddbcc305a9f3febc32ba51d9d18e4a0729f7f3c34bc66acaf46e52d7118f68fe25f3897703ff38eb5da1da7861f63e1b6fd8b5febab6dcba92cdfe9f146f6dcc2ff1f794ed2ffaf62f0c9f9688256694f493926af0bfab83f98434d8ec961724c463d47e8fec83179b31c93b5833e4f129f970502cb6b0ffa3924322ffa711e79fe54bb2adf4b497b98a39fe3a41dea39563e2b7ff46330fc5cabbba4f6571f758e88c9d068dedd5cceb3822e627e9e3667ccfdc10328ffa4183fdbaad1aa8f2aaf3ee5020dad42ab6fb44ada36b13738ceeeaa7cb8b8a986abfeaf4ec6195aa33e4fc8df31055d4e3e578bfda1da90a6ea4053fbe8b6f24759e68c78c2ff72af99da7903ee2974e2d8b7f1e8b8feb56da00eda90a06bfb36d694f28362c6135e7ef79a13a296dd9ca17c1b1817e9b2c97db4a5cb9b06cae4d92c24e8feed4b1b6bd31f1eab8dbdaeb5fcae1ff02a7ed57ef7c9a74c60ffdcf575c48f47346dcc23feb1d77eab5dfcc4b5be9a47ae2b5cfff6c3a4dcb0987eb5acb14d7e8b7941106d3ff1f1e4a08f6785fdae7ccc90cf7ff2291dc859eefada613e7e13f4717d5c462ae84df35b69d31e7a5d9b70bbba90d14f9aea6fd516d409db178a5fdaa1ffbbaf2ff39dd9e6e328b15792fa87c4897d6b28f6bc36233c636efaf1a017c83be9e6c5ac499b7e4afe342de89ab6bda2d4fb700226faf1a3ea0c1d03fec127a88bcda95adb3e836289a7b21bb8307ebed52bdaa69c43a2d6b3afb66a3713a2fbb05d318ce79f2eb0fa311a3ccf8e192afef9e5826b9476e64d23e4826173c8fee2f10f686b37d590ffef0ee654c5a43e6adf58c3b2aa1efd5ca4da80e25e5ace4773b4d25bcb46cdf3e60c652fd13179871c930d03beb56df0abfc1910743927d48adb76f2daa5f2473f46f54e83de1e0e95df82e7b8ed950de458d5aa9f37831c020c3561f894307c42186e4ad04e3cf5b39787dc0b5f41e79d18136dfa41aa5f35eae5a3f558c27fd30f727dbfbcabe9fc93913a3117dae44ab6a2ffad2edf6b6f0d782bd82b55fbe97e2a31db299fdce08e25b53f6677d4267458ec5fbcb46584b178fea9a296decb09d49d39fa217fe69a9313000d675ec8878090bd7cd9cf5ad61225e6ba9f79278dd2c764c989fb31ad428041c16dd382b3b497bb2cf4af5dd3204afd2a877b831ca38d20c41d5588b417e895bf7cd912f13152cc751f878b8f3b023e876f9b16fc9ff8b820868fa192feacd77bcac5ccdc60fe750679b64a1fb342183ca2b5bafc25f99feab32b8619da673da789a8778a12bb2e84e13f850b73e445a7ba1889d6a3537654ee54f902a21a6638d936a55f34476b3aaa5e15a7bae852edbff0392c7bfae5720c64fa17ce572370d1b71d3fb58c29e66a8f55732e8db96f1e0f75cc455ea4eb7e2b51de1ee413d969f2693fcb08dbd873d6fa17cf3f370a2b9d65b858c77225bc679e374a53702b7ccc1b3b26c3db40e4c840bc63436f27ca0fe54f64bb88b4a5f2172bc77b820c15677df424bf6c74867152e68d9fbcdb43afdd72969c08d509493fc1f9b5dd6b4f9461aa2ba39e24547ba8503f5b3bf5fc09c1035917e6925acd23b3356d6395384d460db77da2d5aef373b091eb07a2fa3bef2abc46cb423d1919e23a4a7ba5ebb77222af1b613b4fd45b3fd1d3775ee737a477d828d0e3fc79f645c17832b4e9fddef46fdf738a0cbde60dcc2616ecc8936ff80548b4d08c9daca7df31d59fe36f28c37cb12e96f49380deeb0cd52543f9c769af5cfe919cbe234f54a52417cbb59eefb45443cb526ea294fb5e862c550f276cdb5c5d9b74cb0ce17072c410b49ef388db16f9551b3dfc833e4e0f0e7f87ef56228a8f3f888fd5237c3c5c7cfc507c6c1696ab7c47fef8f032ede501cf47f1c7a7d5ec3ad1d7f3916b35edf3c0cfd20ec6ca85c53cf145f5844a689f3d3846ec7e1525f6c8137d38df68ed20dac5a66ad31f4b9b5e1c6cc3ba8bfaa8811a72ffd228c78872fac542b47a0f6a2d87deebeb78c558ff1f5f9fa74d1ff68c1c1fd12eda7cda27bddff3676f6ceaabad8ecf882debabce717ddb34bfa5b4db927186a795b0a95117bdfdea4217eedff9daac2747c82d92a685ebcaa9a07dd0fb03f1afb1f8b7566bda63b8766c4e55299737daa2ce4bbbd7d693f351d7987e56a8bf5ece47e3e577fda22a6f683b703edaaa7ad8fa08604113d3ef9824b13589733b2c3ca6c8f6103e3c5ed06eed8e1f05cf7191798b758e8b7571a0337c2e90e3594f0e1386911d14a93ba7bc30fc4818360c30640b0ce77872f3d539ed6b095c7d429b7ff3171de500ba2ace0194e96bd737ca10645fcd9ff353c489ba8095125aed0ba6f8da9d3bd9286cbfdfefd3deedf4591431cfbb9068f7ecf5beb6eddf56f67c951a2d95bf2ef64fbf7ebab6e0fbf6810339777d3d6df1bc0ef2efa9c13a130970e4ef91231091ae87978f6d3b27abbe36fda521b2f34309622f5cdf9ca1a34500a35f2835ec3656172a5f85ba6bfc0b1e795d9b3ef19e4275a821eee92f0c95efd53d4f7dd37b10017c51fc323e723567e853e263a5a8b135ecf642848faf898ff746f1b19ef8f8b07c7f7781f6a8e6268ced3049be8b226cd5ffd1ba3e70abd633bf394a3bf8d5bf78d408ed839706cb3e32ccb9596e9b4c51f73c4786d98dd59b0e67a3ff3b4f20a26faa4dbf236dfa9d04794de667556fd411abe0f7819cf96ab6f95c2ea82e1246cbe42246896bc49653519bf7b6cafbed857e5a3d575dfcc6d9361faead5ad15c0a2c8852289e7f6a7839d07ec4bf597251be447bbee392c21772aa840cf77f3e66b8fce34a5fd31b9e89ac47ce471de47c74857c5fe8623750562e6ae57ca4da76c426e7a3cd5f348ec93027ab911c93aabdc51a7ad7dbbf3e8aa8db8fd71ee45647a03d4c89cfb5c0afb1da5668b42190e3dc8dbfc661584e188e10abb12f7c4c38e4f4a2c64f5c4e8fd4b8ff89842f96a564f78b6e6fd94b03b44c39f0a26d159a2dd1ce3cbff081d3f29ab1523c7fa2d3aad9f17b21c69914ad64e6e80765e85d9d60a26d517b87fe9c650db5c5dfc73ee9d66f33bd80b1a39bfe10d3c9acf7af969e6af8bd5233172b31cd8a8f27898fb119d76ff349848ff3e3f87895f858a1c0ef9f3f3026ba5049a93aed3f968b85c2b71a4eeaa004566f8b25b4cc69ddfcb9fe48c6f1da6ae46fb18455b96a6d9b2f08279eed503c7231f79bd6b055c1b6106e277b61f86d90c02ffedcb5c76a6bb3eb276cd4ab665f1ca78cee5ff8dfe14218d8d557fac8bfb4a6ed3e8a6967c3a2d323f213593459fef16fb1e50dbd9b3a26838e99693bf110471f3dc8df233fc7790c3f88c3b07502860953ed9602087ac14c16e53e73a2fbae896c873c51f7cdb5cf5f8e3d21ade1c5afc96cf6c2f5556bfeb5dcabd587c44a6839db8f0cf4f4edb04dbfe31d358419c595e8fe65be7743686640a19d2afca7553fe2f7025f573b7e49ec30a5b7b5789e1ab9b076cb7caf7b1c1ff745f1514d308ab16d3e2a38a212f85d2e161a68993fc7f6f9a8a6df46359471c49fd206f27b3eb9cb9bc8ddfb70ee89da61b4919a584e27b2652def7c6b05ebad5e6775cc8a7237d4927657f03cb7ead3aeb1f3166669eda2d8f7e00b5718ceade0b159be929a681863db7da8cc0488758ceab7e462fd1eefd84e9c9bd8c764b2f94e5c67ac1c16aed10cc343e2304c551bb4a55d04bd605a1235c8e211c7759f759521baf2315b4ccd26df45fbcde7ab9c23277335f33e6fcbdd7398cfe74b14935e3ab29cd1fd8c35ec9cac1364984f0d05476ed187eeff5c764a6cc3d5376be523269865c84933caa06bc8c69f3f87f7d4acc9e39fcba2dcd7d36b0cf858f0a494d8c756217f33dfbb4e4427f6f15923fa054cb00de499a9507f8576fe1337f8aafb624d3e32963b67972adc8eb317e9132ce3479633afa5ffcf3d874529146e33f13974f7f638f36bcae7cacd9158c79ab5c760642079c7e49004e9b5e658897fdc4773a160ecf119e6c461e8ecd66bd2fbc48dd1a44197172f4ae336be6fe6ac2e7139d6a8bd32ea11e0df7658607256e5c6995ac767aff40d782d5c70923939241a753097eeccd103a30cf345e7b279e5a9318d97aef24fe1118a4aea6226f6b6295b3d6fac6fc673112fc2cd2b5bc4f1714b123ee64fee5af7e3ffc5855ba152d467a403fb9cda679076c9cb9d7c033e6ee06bd5594d9a72e2667c6877fb5f6a1d83185bf9ddc187e802bf079e7fce9c774158e1f8c7455681b2e17518f24feeff1ea12d9eadee8347df6a34fa39ea685b5ee944ed34d1ef89f31e7dd67be4930e89ede49548e61c93d0769061ecb94d351afd18876142fb6e2ae0d94971319258f4032456ebc89ed1d53ffb39252aea60510d5f9fe872506b78cd8bf23ce53fa15dff5c5ce8be5fbed9da1bb46a65a32e1a22bdb37ff34e024aefdf35d74eb3675c1ef42fefc09cf75e2df93bde055f72aca6df315986401b87cd7a0fb7133821f8fdb280c5636d63cb734639f5484b81cde72bf79f7fac3c9f1a6bdbb6baa1bacf1676e027e77fd0bef858457c8cfe0cb32a93514e3dba14cdc7e8139c54c96dab1b8b8f3e2d636f29ed99a6a7c54d601c41f7b58c3671d35c7330543a7b4697609bd1dbb3da2d6f4253c36b9e8bb5308b21dbf10b858423f83cb99afc197dabd168498193fdc6b9e7853d35b14feb38fe2a6d619f09311f61cbfe5ed98e9ccc1a3b87615e046668bfd573a48cb6c56e276d6f93b530d4e3fa51b722b551c39c0bcf7a8ff698626273f9e790f0f6a0260966487b783a9967c685e1b9c270b830544f6e44dfdadef6401c8689fd76510904dd5c3293bf02cd9e7e8996ad5d12b5ba1a17be2fdf07045d7a1015b491a7978de956e92adb537235aa9eddcdd62e37872389d239590d6498ef41d9f3e1e0de514e5a7bcb26b8c799c4896e77b9b0fb6c49ec1f196bca7c94d3dff67241d189251c7e2da36ca10b0683d948147b781b8f5f365e9ba971a19ab4197b14c1a0b3098b2d1a3d58c4b852cc724d2f1957e0649f35470974302eb92dd2f08c0fb4ed675cae6dfa423dae5a785bfb59e7048faf15de67c1a0d1b2f8c9e3dacb3df36f7f152a252b3b5ef2c265be86757f49186372058c9fabf266bdabd9f2fa9328c98dcc654fef22e790e8a38b352e544fe4185f0466c1a0a785e17061a86ea4c5d0a90aff0ac32ec230cefc99e4e039752f04dd5ce60c0db3993319595a56c9d29f1c8f6628a39c5ae823992dd1893c199b51f6a990abd56fb840cb5a10fb3e65e6e82132f4febe1c886a9258acde40bc5e50f4582ad490c9479b62dcaf943909f9938fac6261a8a7560052851ab23a586045b0285bc047d9f696497041933792b1f98bb3b531b7a919de6a911cd53356273f35aaa27f54397572ced5faac3854eea5ebcf2b5b94eb3499f96376071919a8a665cf6aaf7df27aecdb1ef57b3deb6bd5fa43ddcb606ffe52f97f5efe8f6ef3bd7a16db9f3df9736d5e0c41d73657d4b2b3d5ad10f568a8bea9fde3b521c53fba98973e66ab2ccffb822cc13a28d1b2c809ea30015f06bbea37fc418ec9d363ee94f724ca94e031999ca09bf0c84051c5376f25cec8adf431ff08c39784e140030c0d54e59e22087a71e5326f110efd6a5c355275b25507fe01ad7aa5fc25208be3be59b4986b779c16e69facc1f5d731b26e730ff3782a6cd22e7ef6526dc2450b82eb414737111c7ad7665c126bc1996444d7cc2d8264ec47c692cc059e997ae395d58735d5688e3a8ef595b9c27d54fb2b26e1cb879aa93f7efa6b77fc306cb1249d7dde623d05dbb4f96614ef381041971511630fb3abda5a3f71a32cbaf45a818a77cb72a69be4d9747daba71e857a54d38e92f5e6d5a590bede62a4b7798faf850bba2a119b63cd76df6af58e5b28ef5cb8b3d0c4c6dcf555b4ef3eba59e6b92c141ba18b8d640019df27704c5e2cc7e4523926abc5dc2f38f42ec7642c1266da4378db2b29ed21b2771e7f04a166bb79c2f0076178ab302c787194bbbeaa30bc5e18aac740633f12681c906b4a22e8e65299fcc9b0f6059365d105b5484894ad6ff877c687caccf99ee0602cb8f08d2c94d3dca4a0abab7a755217819119e75d06f6d5c6de1e652df1a01b395927c930df30392d861fac3adfe418e46caa143bc80a7b2266c22623c645cf53cea6380b1055d02770256a67fac8801271d5a7d79767cd17ab822092e399a87dd5bee0edd80b891468d3892c99fd5db535352aa1eecf067bcb92df563d9ed5322aec90bf9f8afa92a2ccc02a90c147f86424a961ab40fbf495aeb3d63fa9fd526d6576f4751fb2e6769262b1d7fe8ff4be66bb0f7cedae182d8bdebc202b18fe54e8fe6feefa1ada07b234efc245e7fb4e6d91b7cc5f6a37b968964e43978137c831195b00f505677cea180e6d89da627ec9bcc5b3028b5d15de4cb6879aedde0b63b830f8e29a7cb3b9eb8f12861f0ac3f384e117a9c5e71ceb087af1e5cae049b5ecdeb8bd8504fefafdb268c690ff65c9234b59b22ce454b98afd49de40155b58f3ed19f42fa603baa0075e94e2abd1fe13ff9cfeaf6bb3436f612bbc63e6e8fb22be0c9e3c2aed08cc588f77ebc174deca470aba690b0577a8f46f923ec619a62fbf47861065e9806d3b8dd8f6553f579dc8020feb05666f8f3c7db330cb7b514dc12dd11071115914f3ee2d87f693a55f9f2d5ceb4fc1af6e88eed0ba1fdb847ea8d0f4175ff5726a1269de767ceb5931053d677173ffe63d72cb22b4908f219193456f56cb0a86e36475c07e511d9afdbc0c0f04d7ed4d2d42d546fc724c7e2cc7e46b724cc60024a564d67b1c570cc56d65286ae1a020c3c2ab40aa8a663faf964a44d083d0796ccd5ceb2b86065d6957dcc7af72fe3832feaa48476cd42a4baf453d63aadeaa35efa35b82212612ecc8df13958f261aeabbfcfbb46d06dea1d5a8feb739c47231a066eb57ae1075267fc0d6be3d85ee4fcafdd1d279f79f636c958f5f163699d0fcbdef08b381e7bd2bcba49c585b6c1f63b7a1ca79cf968bed3d627b7bdc13ebbebd91eb14a8b908d1c4dc347eb33ba4a8bca5c79aac0e575bcb5a9eff1867857d65e43efc30f90c511fedcf3fe2ac1c975342cbfaa95d589cc67d8bb78261cee226feed51175b328ad4a81ff917746d06f637794c1aadc3a8cfe6cb1ddd34daf2bb7976d4c556d1189af7c7c67b20e8c5971c4302298f5fe56a356aaf89ed96dc03db1dfbfe5d60ff0c4d3dd615fe46a864a24ce46ff881aedf2f53f5e88fe52961da21c37cfa0585391f8e6afa75cc1d72b756093cde5560db5e216e8fbe46edc8d7b226ba3f9dd8dff83e562e7ce1b5fd10c33e1ed5f4ab380ea8550023ef85c65b2254994a94cfc4f13ab9c4bad99d0adc23dfb4a0b15cf03e1878a5b0fafc3cfbc2b8e1adfa2afc0990442297cf3acae38bf9f5e494d636ff756c71620d1e93372559a7f1b8135790c856be858cd00ba6a258cdc91086c724aece1b2510f4e2cbb3f1067c6cbc7b42d280b357c49cd92bcf4757971737aa7b8b79b39e4b972df4cc768c908dfb179f598199d432ccf7a1d6aee3eb0631e79f086bb788beb469c0d0e6aa725153b0edeedb5e3deeccf063cf9c19e68335e216dfc7c2175e897d9c15f2b1e1f9f127fb1416f4e49e1d3698189b15339fbfacb9e71629863f7e4cb4e67ab879e3c7d2b68d758ae497b19d0bf052b7c3e4981c6f6cd7949532ce28910bc5c3309117b6f81d41379786782712f32799587537ec10ff8d45999f768be9f6baaf3b8bb0e53fbb59fdb8cc60d9440750e4ef89ca47baa097d7675fe7ffde66e0ed32cc17673deb50d17c86f52e9910fbd6434ed94257e55b5637899dcaeadbb586a784f7f88b3ce41ea8abde256f98f4b1711c1fb7898fdf847e3fb6fd0732ec5ef8e52b7a814dab236d59d7fe8c1f1366db8871cbf14b9aaa37f06e84cc79f92ffaa9dcf8377975f2e3f2794c3ec383ff1ea1356c19fb053fb9cbeb69ebfed2c5d778fde5abc4bfe594b3f508aba044d889ef631b99b45aa37aead709483eb87cffcb5789fffc7aea1826ef7d9af644d08b0fbce113aeaf52ebafb4fac7ac8be95ad6fbddfc9bb6153a11c87de4b2da9c57d52b38f31f61aad76e5a31841839fc5ea0cac03d7135c3d6c4266fa9fa5b6b764eecd7cd667d5d708874c3e233629a6f76d3c828ef048fe78da11376123ec67e0eb8d94d4f84fb28cc766ae7f51c1cd3c9557322de4427f7d4f715fbb0bae1366d22f5468a1aca4fc8d0961fcf2c70aba3e92d83e5b5a3f7cbe741f93c10fcf77ddaf9bd64c5b1385bd6d73a73ebe2deb1fef83835268a33d1efbae94217d98139205d06263bf46e244789ca18f55dd989cf7b87bc2a9a2d408059eee61a42f2f75df396458cb53669b0c7587d8bafdd95ea15a89ad67178372dbbdbdce8c3c89bab68937a4e97d76db6d55fa119e8854cbaee136dedfafc3a6a74fcc8d7b04e9c377c990b3e4169bdd71bf5e05343ef32c3f60d99617b9de15adb0ceca765fe7061d4a53333dfea2bf14f50f1cbe341c7c9e3413da2daad503f5b6bab66445f1ff973ec5efa1fb32f945ca9056af413a1feb7bee0864fbdf8c4d7b2fd542dcfc74e515fa693f9d66d613ed68de3e32af1f1b9481f7d0d7b8df64feb7299f6f392fc97b6e8516cfae4627964a79d3cb2333bf0d5eacfba485b8915931901325e3672b9e07cc2ba0d395eaa6f95363dc670ce0bda3073d28f5d45e6a705572fabdfaae06b6df53d2b9ef2bd56a3c23e79565dddb22abc652f3c4fbe7c5a3e89165e09bf871e7b72a7aa61f36f4de3b0319e8bf880a3de8e091e93f19f444924a6e1f566cfb82c788e0bbf8008ef34cabfab6f93f6608461bee5b8f7d013324ca2e939771704dd5cee921fd1c85bfaf562a94e9da4f41395fa5bbfe72cff6eb041fe1f10745fa516f3fc6ba7dca84d18f46a5417b72d39451bdd74937ffa734f68e5f796d61e3bbdaf9cd0f3673e576efcabd6edd16bb5db46998b30b9d2e131455be024cfaa1a7acf5cd05116b7a86aa41af52e69fff6a5adb509d7cd13c12cb8b67b4e563d6d6ca7857202795b1bdbe13ee981155e2eb7f4317f68dd5e3e3ba277ae571d5b2cfe987d8e2c5c7276304fe1a2ae16dc50f93a44ab71a1bac73d35e863aba08f05679eab270dc6769a2f3e4e111fef121f0baf475d5a4662babddc5e7c8cfe905ee7973b6a393d3fd3b296145edbfd936e9ffadf79e425add2de12dac4e1aab715ab7d9a1146e365b3a75f266dfab2b0f6acb30d13f406d9f2a559410f6f4fd19a8ab9e370d5ecae2123155afde83baadc8e68466542e95efff41bbed436cdfb5fd4f6b969f6b9f2f89ab4c3bf12097afeee1995fe89fb18ea86452d22de3160e4d0d0cb18e510fbc2403d8992b9e0c238c7a499f66060f9e8066bc5f9a7e593e862253f36fd2d85b196bbd9b0e8d4223034c3dbf6658d3608db07629183891a59bc6a12357cc53aefc51505455dffbfb25d60d5345f9d2b5ed36e7ba3ad5633e6f07b596dc19841da9c71f789982bc1cbf3a1fee593b49bdf39454422fcb1aa44b125f23f32f658e5d52365d17be979b3de6f8c03b1904d5fa546bf68374f6da2d50fac0a5570cb95d108f5685e3431afd9ee4b61d0dc57f348750231eabb5e4ef9a1e745cf9b9e3bbd4c2846f17171d0c7c28fd7e4ae6f10f4b1b098e7f9785a0c1f03f5a859c9be6eef9eae5d72cba0287194d13227de2e0b00f591df0a5ed0d4693937a2bcd1fc86cf964fb44f3ce14dd4de8a722c259ad11fb21d58206943d8c560fdd633e255acd56e3127f6ef322b7ded72f516c044e7cd5047c9e73b72935633debdeaeca3b58561f7f7e33a57e847a38cd5e38c5173199cf51e7d74abb02f46eb331245a2b615cab130dc2c0cc357d38cb09f5d5318aac57f3cbfd1430f6f02e5eb66c90499a1f2956a4ce1b3b5f34ee615eacbf0758c3723651cf9bbecfb7070dff021ae5807817e320cebad57dfa43d3cad40a3f4d538ed6bf9a2b67fed67176bd959cdb55fc6f78f3abc5ba3e522eda49633836fb99249246acd8ab02de3c875e29f5aed4a9d8cf4d8946f7927a7da112f89c838727d60d2501e0b3d1e7df19882e5cbd75d1e985c14b8852313b932620f490686f93227f7941e415d29aff77e950f7ef16149b423522d2e21df9feedf34bfb5f426da6bcba6dc2afbab21f1825be5c64bb526ff27cb91767cdb57a76ea6d6f3c5180778a56dc13ceb2c54b9442718e5ab8a3f8f4185facbc2db825a4444be3f2de8e3f9e263efe0329b3abbbc0b04f56adb26fff781f83839be8f055df735edff88cc91784296c21ca06d5f7ba2b660fad561fcf2da528d96df491bf84cd6b87e54cbf8ab92087d6ff95e0d1f1fc87f37bbace297df4ef59ea63e54efd36a369c17aa39e348b95d113a1e226fa944b6ebf0ffeb7995b653fd9fc8361d2329615f17ca8f8a4fd9cc3b0e6b368cf30444a4f540bcea60c85b92b67e8782cbc14616579331db1e382c504ffed0badeee7d794b98cac2476dfba8054df2da6d5edbd18fa5c2feb59147378fcd52cfc0abb6103ee2a3e2292536ff8aca24efb852be878fe4e9f595923628c74b8cf351f9ba2b82fb4a1db25e42ec77aeab45a03e9663f26669afc705fdd0eb2821c7e4e2b0f6a0ce212a6ee577acf610ed7c17a53d54da1e760ceab654558aa962f84d01266d06f61486fad33dfab19acfbc7aa58d89db952d4b84c75e64077dfe1eb5acbcead27ce37f4f74622cb2d31880000420000108389d80e86f81c77c8b1a4fa2a1a3a2da677f08400002108000048a8180d5826e696fbf18e2a70a084000021080802b08582de8ae80421010800004200001a71140d09d9631fc85000420000108442180a0d32c200001084000022e2060b5a033c3dd058d82102000010840c07904ac1674e711c063084000021080800b0820e82e482221400002108000041074da00042000010840c0050410741724911020000108400002083a6d00021080000420e0020208ba0b92480810800004200001049d360001084000021070010104dd0549240408400002108000824e1b80000420000108b8800082ee822412020420000108389280a5abab22e88e6c03380d01084000021028480041a745400002108000045c400041774112090102108000042080a0d306200001084000022e2080a0bb2089840001084000021040d0690310800004200001171040d05d9044428000042000010820e8b401084000021080800b0820e82e482221400002108000041074da00042000010840c0050410741724911020000108400002083a6d00021080000420e0020208ba0b92480810800004200001049d360001084000021070010104dd0549240408400002108000824e1b80000420000108b8800082ee822412020420000108400041a70d400002108000045c400041774112090102108000042080a0d306200001084000022e2080a0bb2089840001084000028e24e0b7d26b04dd4a9ad882000420000108a48900829e26f0540b010840000210b09200826e254d6c41000210800004d24400414f1378aa8500042000010858490041b79226b620000108400002692280a0a7093cd542000210800004ac2480a05b49135b10800004200081341140d0d3049e6a21000108400002561240d0ada4892d084000021080409a0820e869024fb5108000042000012b0920e856d2c416042000010840204d0410f43481a75a08400002108080950410742b69620b021080000420902602087a9ac0532d042000010840c04a0208ba9534b105010840000210481301043d4de0a91602108000042060250104dd4a9ad8820004200001081827e0335e347149043d31234a400002108000046c4f0041b77d8a7010021080000420909800829e98112520000108400002b62780a0db3e453808010840000210484c00414fcc881210800004200001db1340d06d9f221c84000420000108242680a02766440908400002108080ed0920e8b64f110e42000210800004121340d01333a204042000010840c0f6041074dba7080721000108400002890920e889195102021080000420607b0208baed53848310800004200081c40410f4c48c2801010840000210b03d0104ddf629c241084000021080406202087a62469480000420000108d89e00826efb14e120042000010840203101043d31234a400002108000046c4f0041b77d8a7010021080000420909800829e98112520000108400002b62780a0db3e453808010840000210484c00414fcc881210800004200001db1340d06d9f221c84000420000108242660b5a0fb135749090840000210800004ac2660b5a0efb5da41ec41000210800004dc46c0eff7fb24a67d56c6e5f3f7a86575af7ab738584e3eca593608400002108000040a1350629e61259852561a0bda2a9f029b9884000420000108b88980a562aec0583de4ee26d8c402010840000210700c0104dd31a9c251084000021080406c02083aad03021080000420e0020208ba0b92480810800004200001049d360001084000021070010104dd0549240408400002108000824e1b80000420000108b8800082ee822412020420000108400041a70d400002108000045c400041774112090102108000042080a0d306200001084000022e2080a0bb2089840001084000021040d0690310800004200001171040d05d9044428000042000010820e8b401084000021080800b0820e82e482221400002108000041074da00042000010840c0050410741724911020000108400002ff0f4df9a8ed696f3e8b0000000049454e44ae426082, NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `client_bank_details`
--
ALTER TABLE `client_bank_details`
  ADD PRIMARY KEY (`client_bank_details_id`,`client_id`),
  ADD KEY `fk_client_bank_details_customer_client1` (`client_id`);

--
-- Indizes für die Tabelle `client_director`
--
ALTER TABLE `client_director`
  ADD PRIMARY KEY (`client_director_id`,`client_id`),
  ADD KEY `fk_client_director_customer_client1` (`client_id`);

--
-- Indizes für die Tabelle `client_legal_information`
--
ALTER TABLE `client_legal_information`
  ADD PRIMARY KEY (`client_legal_information_id`,`client_id`),
  ADD KEY `fk_client_legal_information_customer_client1` (`client_id`);

--
-- Indizes für die Tabelle `client_main_addres`
--
ALTER TABLE `client_main_addres`
  ADD PRIMARY KEY (`client_main_addres_id`,`client_id`),
  ADD KEY `fk_client_main_addres_customer_client1` (`client_id`);

--
-- Indizes für die Tabelle `client_second_addres`
--
ALTER TABLE `client_second_addres`
  ADD PRIMARY KEY (`client_second_addres_id`,`client_id`),
  ADD KEY `fk_client_second_addres_customer_client1` (`client_id`);

--
-- Indizes für die Tabelle `contact_information_addres`
--
ALTER TABLE `contact_information_addres`
  ADD PRIMARY KEY (`contact_information_addres_id`,`contact_information_id`),
  ADD KEY `fk_contact_information_addres_customer_contact_information1` (`contact_information_id`);

--
-- Indizes für die Tabelle `contact_information_contact_person`
--
ALTER TABLE `contact_information_contact_person`
  ADD PRIMARY KEY (`contact_information_contact_person_id`,`contact_information_id`),
  ADD KEY `fk_contact_information_contact_person_customer_contact_inform1` (`contact_information_id`);

--
-- Indizes für die Tabelle `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indizes für die Tabelle `customer_client`
--
ALTER TABLE `customer_client`
  ADD PRIMARY KEY (`client_id`,`customer_id`),
  ADD KEY `fk_customer_client_customer1` (`customer_id`);

--
-- Indizes für die Tabelle `customer_contact_information`
--
ALTER TABLE `customer_contact_information`
  ADD PRIMARY KEY (`contact_information_id`,`customer_id`),
  ADD KEY `fk_customer_contact_information_customer1` (`customer_id`);

--
-- Indizes für die Tabelle `customer_email_configuration`
--
ALTER TABLE `customer_email_configuration`
  ADD PRIMARY KEY (`email_configuration_id`,`customer_id`),
  ADD KEY `fk_customer_email_configuration_customer1` (`customer_id`);

--
-- Indizes für die Tabelle `customer_erp_configuration`
--
ALTER TABLE `customer_erp_configuration`
  ADD PRIMARY KEY (`erp_configuration_id`,`customer_id`),
  ADD KEY `fk_customer_erp_configuration_customer1` (`customer_id`);

--
-- Indizes für die Tabelle `customer_host_configuration`
--
ALTER TABLE `customer_host_configuration`
  ADD PRIMARY KEY (`host_configuration_id`,`customer_id`),
  ADD KEY `fk_customer_host_configuration_customer1` (`customer_id`);

--
-- Indizes für die Tabelle `customer_import`
--
ALTER TABLE `customer_import`
  ADD PRIMARY KEY (`import_id`,`customer_id`),
  ADD KEY `fk_customer_import_customer1` (`customer_id`);

--
-- Indizes für die Tabelle `customer_json_cache`
--
ALTER TABLE `customer_json_cache`
  ADD PRIMARY KEY (`json_cache_id`,`customer_id`),
  ADD KEY `fk_customer_json_cache_customer1` (`customer_id`);

--
-- Indizes für die Tabelle `customer_token`
--
ALTER TABLE `customer_token`
  ADD PRIMARY KEY (`customer_token_id`,`customer_id`),
  ADD KEY `fk_customer_token_customer1` (`customer_id`);

--
-- Indizes für die Tabelle `erp_configuration_cancellation_invoice`
--
ALTER TABLE `erp_configuration_cancellation_invoice`
  ADD PRIMARY KEY (`erp_configuration_cancellation_invoice_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_cancellation_invoice_customer_erp_config1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_delivery_note`
--
ALTER TABLE `erp_configuration_delivery_note`
  ADD PRIMARY KEY (`erp_configuration_delivery_note_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_delivery_note_customer_erp_configuration1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_incoming_delivery_note`
--
ALTER TABLE `erp_configuration_incoming_delivery_note`
  ADD PRIMARY KEY (`erp_configuration_delivery_note_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_incoming_delivery_note_customer_erp_conf1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_incoming_invoice`
--
ALTER TABLE `erp_configuration_incoming_invoice`
  ADD PRIMARY KEY (`erp_configuration_invoice_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_invoice_customer_erp_configurat1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_invoice`
--
ALTER TABLE `erp_configuration_invoice`
  ADD PRIMARY KEY (`erp_configuration_invoice_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_invoice_customer_erp_configuration1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_item_types`
--
ALTER TABLE `erp_configuration_item_types`
  ADD PRIMARY KEY (`erp_configuration_item_types_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_item_types_customer_erp_configuration1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_number_ranges`
--
ALTER TABLE `erp_configuration_number_ranges`
  ADD PRIMARY KEY (`erp_configuration_number_ranges_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_number_ranges_customer_erp_configuration1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_offer`
--
ALTER TABLE `erp_configuration_offer`
  ADD PRIMARY KEY (`erp_configuration_offer_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_customer_erp_configuration1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_order`
--
ALTER TABLE `erp_configuration_order`
  ADD PRIMARY KEY (`erp_configuration_order_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_order_customer_erp_configuration1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_order_conformation`
--
ALTER TABLE `erp_configuration_order_conformation`
  ADD PRIMARY KEY (`erp_configuration_order_conformation_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_order_conformation_customer_erp_configur1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_service_order`
--
ALTER TABLE `erp_configuration_service_order`
  ADD PRIMARY KEY (`erp_configuration_service_order_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_service_order_customer_erp_configuration1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `host_configuration_ip_addres_connect_external_device`
--
ALTER TABLE `host_configuration_ip_addres_connect_external_device`
  ADD PRIMARY KEY (`ip_addres_connect_external_device_id`,`host_configuration_id`),
  ADD KEY `fk_host_configuration_ip_addres_connect_external_device_custo1` (`host_configuration_id`);

--
-- Indizes für die Tabelle `host_configuration_ip_addres_data_backup`
--
ALTER TABLE `host_configuration_ip_addres_data_backup`
  ADD PRIMARY KEY (`backup_id`,`host_configuration_id`),
  ADD KEY `fk_host_configuration_ip_addres_data_backup_customer_host_co1` (`host_configuration_id`);

--
-- Indizes für die Tabelle `host_configuration_ip_addres_erp`
--
ALTER TABLE `host_configuration_ip_addres_erp`
  ADD PRIMARY KEY (`ip_addres_erp_id`,`host_configuration_id`),
  ADD KEY `fk_host_configuration_ip_addres_erp_customer_host_configurati1` (`host_configuration_id`);

--
-- Indizes für die Tabelle `host_configuration_virtualization`
--
ALTER TABLE `host_configuration_virtualization`
  ADD PRIMARY KEY (`host_configuration_virtualization_id`,`host_configuration_id`),
  ADD KEY `fk_host_configuration_virtualization_customer_host_configurat1` (`host_configuration_id`);

--
-- Indizes für die Tabelle `import_accessories_item_data`
--
ALTER TABLE `import_accessories_item_data`
  ADD PRIMARY KEY (`import_accessories_item_data_id`,`import_id`),
  ADD KEY `fk_import_accessories_item_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_customer_billing_addres_data`
--
ALTER TABLE `import_customer_billing_addres_data`
  ADD PRIMARY KEY (`import_customer_billing_addres_data_id`,`import_id`),
  ADD KEY `fk_import_customer_billing_addres_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_customer_contact_person_data`
--
ALTER TABLE `import_customer_contact_person_data`
  ADD PRIMARY KEY (`import_customer_contact_person_data_id`,`import_id`),
  ADD KEY `fk_import_customer_contact_person_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_customer_data`
--
ALTER TABLE `import_customer_data`
  ADD PRIMARY KEY (`import_customer_data_id`,`import_id`),
  ADD KEY `fk_import_customer_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_customer_item_data`
--
ALTER TABLE `import_customer_item_data`
  ADD PRIMARY KEY (`import_customer_item_data_id`,`import_id`),
  ADD KEY `fk_import_customer_item_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_item_data`
--
ALTER TABLE `import_item_data`
  ADD PRIMARY KEY (`import_item_data_id`,`import_id`),
  ADD KEY `fk_import_item_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_supplier_billing_addres_data`
--
ALTER TABLE `import_supplier_billing_addres_data`
  ADD PRIMARY KEY (`import_supplier_billing_addres_data_id`,`import_id`),
  ADD KEY `fk_import_supplier_billing_addres_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_supplier_contact_person_data`
--
ALTER TABLE `import_supplier_contact_person_data`
  ADD PRIMARY KEY (`import_supplier_contact_person_data_id`,`import_id`),
  ADD KEY `fk_import_supplier_contact_person_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_supplier_data`
--
ALTER TABLE `import_supplier_data`
  ADD PRIMARY KEY (`import_supplier_data_id`,`import_id`),
  ADD KEY `fk_import_supplier_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_supplier_item_data`
--
ALTER TABLE `import_supplier_item_data`
  ADD PRIMARY KEY (`import_supplier_item_data_id`,`import_id`),
  ADD KEY `fk_import_supplier_item_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `website_configuration`
--
ALTER TABLE `website_configuration`
  ADD PRIMARY KEY (`web_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `client_bank_details`
--
ALTER TABLE `client_bank_details`
  MODIFY `client_bank_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `client_director`
--
ALTER TABLE `client_director`
  MODIFY `client_director_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `client_legal_information`
--
ALTER TABLE `client_legal_information`
  MODIFY `client_legal_information_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `client_main_addres`
--
ALTER TABLE `client_main_addres`
  MODIFY `client_main_addres_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `client_second_addres`
--
ALTER TABLE `client_second_addres`
  MODIFY `client_second_addres_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `contact_information_addres`
--
ALTER TABLE `contact_information_addres`
  MODIFY `contact_information_addres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `contact_information_contact_person`
--
ALTER TABLE `contact_information_contact_person`
  MODIFY `contact_information_contact_person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `customer_client`
--
ALTER TABLE `customer_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `customer_contact_information`
--
ALTER TABLE `customer_contact_information`
  MODIFY `contact_information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `customer_email_configuration`
--
ALTER TABLE `customer_email_configuration`
  MODIFY `email_configuration_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `customer_erp_configuration`
--
ALTER TABLE `customer_erp_configuration`
  MODIFY `erp_configuration_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `customer_host_configuration`
--
ALTER TABLE `customer_host_configuration`
  MODIFY `host_configuration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT für Tabelle `customer_import`
--
ALTER TABLE `customer_import`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `customer_json_cache`
--
ALTER TABLE `customer_json_cache`
  MODIFY `json_cache_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `customer_token`
--
ALTER TABLE `customer_token`
  MODIFY `customer_token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_cancellation_invoice`
--
ALTER TABLE `erp_configuration_cancellation_invoice`
  MODIFY `erp_configuration_cancellation_invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_delivery_note`
--
ALTER TABLE `erp_configuration_delivery_note`
  MODIFY `erp_configuration_delivery_note_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_incoming_delivery_note`
--
ALTER TABLE `erp_configuration_incoming_delivery_note`
  MODIFY `erp_configuration_delivery_note_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_incoming_invoice`
--
ALTER TABLE `erp_configuration_incoming_invoice`
  MODIFY `erp_configuration_invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_invoice`
--
ALTER TABLE `erp_configuration_invoice`
  MODIFY `erp_configuration_invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_item_types`
--
ALTER TABLE `erp_configuration_item_types`
  MODIFY `erp_configuration_item_types_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_number_ranges`
--
ALTER TABLE `erp_configuration_number_ranges`
  MODIFY `erp_configuration_number_ranges_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_offer`
--
ALTER TABLE `erp_configuration_offer`
  MODIFY `erp_configuration_offer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_order`
--
ALTER TABLE `erp_configuration_order`
  MODIFY `erp_configuration_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_order_conformation`
--
ALTER TABLE `erp_configuration_order_conformation`
  MODIFY `erp_configuration_order_conformation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_service_order`
--
ALTER TABLE `erp_configuration_service_order`
  MODIFY `erp_configuration_service_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `host_configuration_ip_addres_connect_external_device`
--
ALTER TABLE `host_configuration_ip_addres_connect_external_device`
  MODIFY `ip_addres_connect_external_device_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `host_configuration_ip_addres_data_backup`
--
ALTER TABLE `host_configuration_ip_addres_data_backup`
  MODIFY `backup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `host_configuration_ip_addres_erp`
--
ALTER TABLE `host_configuration_ip_addres_erp`
  MODIFY `ip_addres_erp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `host_configuration_virtualization`
--
ALTER TABLE `host_configuration_virtualization`
  MODIFY `host_configuration_virtualization_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `import_accessories_item_data`
--
ALTER TABLE `import_accessories_item_data`
  MODIFY `import_accessories_item_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_customer_billing_addres_data`
--
ALTER TABLE `import_customer_billing_addres_data`
  MODIFY `import_customer_billing_addres_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_customer_contact_person_data`
--
ALTER TABLE `import_customer_contact_person_data`
  MODIFY `import_customer_contact_person_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_customer_data`
--
ALTER TABLE `import_customer_data`
  MODIFY `import_customer_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_customer_item_data`
--
ALTER TABLE `import_customer_item_data`
  MODIFY `import_customer_item_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_item_data`
--
ALTER TABLE `import_item_data`
  MODIFY `import_item_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_supplier_billing_addres_data`
--
ALTER TABLE `import_supplier_billing_addres_data`
  MODIFY `import_supplier_billing_addres_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_supplier_contact_person_data`
--
ALTER TABLE `import_supplier_contact_person_data`
  MODIFY `import_supplier_contact_person_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_supplier_data`
--
ALTER TABLE `import_supplier_data`
  MODIFY `import_supplier_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_supplier_item_data`
--
ALTER TABLE `import_supplier_item_data`
  MODIFY `import_supplier_item_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `website_configuration`
--
ALTER TABLE `website_configuration`
  MODIFY `web_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `client_bank_details`
--
ALTER TABLE `client_bank_details`
  ADD CONSTRAINT `fk_client_bank_details_customer_client1` FOREIGN KEY (`client_id`) REFERENCES `customer_client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `client_director`
--
ALTER TABLE `client_director`
  ADD CONSTRAINT `fk_client_director_customer_client1` FOREIGN KEY (`client_id`) REFERENCES `customer_client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `client_legal_information`
--
ALTER TABLE `client_legal_information`
  ADD CONSTRAINT `fk_client_legal_information_customer_client1` FOREIGN KEY (`client_id`) REFERENCES `customer_client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `client_main_addres`
--
ALTER TABLE `client_main_addres`
  ADD CONSTRAINT `fk_client_main_addres_customer_client1` FOREIGN KEY (`client_id`) REFERENCES `customer_client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `client_second_addres`
--
ALTER TABLE `client_second_addres`
  ADD CONSTRAINT `fk_client_second_addres_customer_client1` FOREIGN KEY (`client_id`) REFERENCES `customer_client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `contact_information_addres`
--
ALTER TABLE `contact_information_addres`
  ADD CONSTRAINT `fk_contact_information_addres_customer_contact_information1` FOREIGN KEY (`contact_information_id`) REFERENCES `customer_contact_information` (`contact_information_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `contact_information_contact_person`
--
ALTER TABLE `contact_information_contact_person`
  ADD CONSTRAINT `fk_contact_information_contact_person_customer_contact_inform1` FOREIGN KEY (`contact_information_id`) REFERENCES `customer_contact_information` (`contact_information_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `customer_client`
--
ALTER TABLE `customer_client`
  ADD CONSTRAINT `fk_customer_client_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `customer_contact_information`
--
ALTER TABLE `customer_contact_information`
  ADD CONSTRAINT `fk_customer_contact_information_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `customer_email_configuration`
--
ALTER TABLE `customer_email_configuration`
  ADD CONSTRAINT `fk_customer_email_configuration_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `customer_erp_configuration`
--
ALTER TABLE `customer_erp_configuration`
  ADD CONSTRAINT `fk_customer_erp_configuration_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `customer_host_configuration`
--
ALTER TABLE `customer_host_configuration`
  ADD CONSTRAINT `fk_customer_host_configuration_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `customer_import`
--
ALTER TABLE `customer_import`
  ADD CONSTRAINT `fk_customer_import_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `customer_json_cache`
--
ALTER TABLE `customer_json_cache`
  ADD CONSTRAINT `fk_customer_json_cache_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `customer_token`
--
ALTER TABLE `customer_token`
  ADD CONSTRAINT `fk_customer_token_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_cancellation_invoice`
--
ALTER TABLE `erp_configuration_cancellation_invoice`
  ADD CONSTRAINT `fk_erp_configuration_cancellation_invoice_customer_erp_config1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_delivery_note`
--
ALTER TABLE `erp_configuration_delivery_note`
  ADD CONSTRAINT `fk_erp_configuration_delivery_note_customer_erp_configuration1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_incoming_delivery_note`
--
ALTER TABLE `erp_configuration_incoming_delivery_note`
  ADD CONSTRAINT `fk_erp_configuration_incoming_delivery_note_customer_erp_conf1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_incoming_invoice`
--
ALTER TABLE `erp_configuration_incoming_invoice`
  ADD CONSTRAINT `fk_erp_configuration_invoice_customer_erp_configurat1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_invoice`
--
ALTER TABLE `erp_configuration_invoice`
  ADD CONSTRAINT `fk_erp_configuration_invoice_customer_erp_configuration1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_item_types`
--
ALTER TABLE `erp_configuration_item_types`
  ADD CONSTRAINT `fk_erp_configuration_item_types_customer_erp_configuration1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_number_ranges`
--
ALTER TABLE `erp_configuration_number_ranges`
  ADD CONSTRAINT `fk_erp_configuration_number_ranges_customer_erp_configuration1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_offer`
--
ALTER TABLE `erp_configuration_offer`
  ADD CONSTRAINT `fk_erp_configuration_customer_erp_configuration1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_order`
--
ALTER TABLE `erp_configuration_order`
  ADD CONSTRAINT `fk_erp_configuration_order_customer_erp_configuration1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_order_conformation`
--
ALTER TABLE `erp_configuration_order_conformation`
  ADD CONSTRAINT `fk_erp_configuration_order_conformation_customer_erp_configur1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `erp_configuration_service_order`
--
ALTER TABLE `erp_configuration_service_order`
  ADD CONSTRAINT `fk_erp_configuration_service_order_customer_erp_configuration1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `host_configuration_ip_addres_connect_external_device`
--
ALTER TABLE `host_configuration_ip_addres_connect_external_device`
  ADD CONSTRAINT `fk_host_configuration_ip_addres_connect_external_device_custo1` FOREIGN KEY (`host_configuration_id`) REFERENCES `customer_host_configuration` (`host_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `host_configuration_ip_addres_data_backup`
--
ALTER TABLE `host_configuration_ip_addres_data_backup`
  ADD CONSTRAINT `fk_host_configuration_ip_addres_data_backup_customer_host_co1` FOREIGN KEY (`host_configuration_id`) REFERENCES `customer_host_configuration` (`host_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `host_configuration_ip_addres_erp`
--
ALTER TABLE `host_configuration_ip_addres_erp`
  ADD CONSTRAINT `fk_host_configuration_ip_addres_erp_customer_host_configurati1` FOREIGN KEY (`host_configuration_id`) REFERENCES `customer_host_configuration` (`host_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `host_configuration_virtualization`
--
ALTER TABLE `host_configuration_virtualization`
  ADD CONSTRAINT `fk_host_configuration_virtualization_customer_host_configurat1` FOREIGN KEY (`host_configuration_id`) REFERENCES `customer_host_configuration` (`host_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_accessories_item_data`
--
ALTER TABLE `import_accessories_item_data`
  ADD CONSTRAINT `fk_import_accessories_item_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_customer_billing_addres_data`
--
ALTER TABLE `import_customer_billing_addres_data`
  ADD CONSTRAINT `fk_import_customer_billing_addres_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_customer_contact_person_data`
--
ALTER TABLE `import_customer_contact_person_data`
  ADD CONSTRAINT `fk_import_customer_contact_person_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_customer_data`
--
ALTER TABLE `import_customer_data`
  ADD CONSTRAINT `fk_import_customer_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_customer_item_data`
--
ALTER TABLE `import_customer_item_data`
  ADD CONSTRAINT `fk_import_customer_item_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_item_data`
--
ALTER TABLE `import_item_data`
  ADD CONSTRAINT `fk_import_item_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_supplier_billing_addres_data`
--
ALTER TABLE `import_supplier_billing_addres_data`
  ADD CONSTRAINT `fk_import_supplier_billing_addres_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_supplier_contact_person_data`
--
ALTER TABLE `import_supplier_contact_person_data`
  ADD CONSTRAINT `fk_import_supplier_contact_person_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_supplier_data`
--
ALTER TABLE `import_supplier_data`
  ADD CONSTRAINT `fk_import_supplier_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_supplier_item_data`
--
ALTER TABLE `import_supplier_item_data`
  ADD CONSTRAINT `fk_import_supplier_item_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


