-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Mrz 2025 um 19:20
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `config_self_disclosure`
--

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
-- Tabellenstruktur für Tabelle `client_client_main_adress`
--

CREATE TABLE `client_client_main_adress` (
  `client_main_adress_id` int(11) NOT NULL,
  `client_main_adress_street` varchar(45) DEFAULT NULL,
  `client_main_adress_house_Number` varchar(45) DEFAULT NULL,
  `client_main_adress_postcode` varchar(45) DEFAULT NULL,
  `client_main_adress_city` varchar(45) DEFAULT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `clinet_second_adress`
--

CREATE TABLE `clinet_second_adress` (
  `client_second_adress_id` int(11) NOT NULL,
  `clinet_second_adress_street` varchar(45) DEFAULT NULL,
  `clinet_second_adress_house_number` varchar(45) DEFAULT NULL,
  `clinet_second_adress_postcode` varchar(45) DEFAULT NULL,
  `clinet_second_adress_city` varchar(45) DEFAULT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact_informationen_adress`
--

CREATE TABLE `contact_informationen_adress` (
  `contact_informationen_adress_id` int(11) NOT NULL,
  `contact_informationen_adress_street` varchar(45) DEFAULT NULL,
  `contact_informationen_adress_house_number` varchar(45) DEFAULT NULL,
  `contact_informationen_adress_postcode` varchar(45) DEFAULT NULL,
  `contact_informationen_adress_city` varchar(45) DEFAULT NULL,
  `contact_informationen_adress_saved_data` tinyint(1) DEFAULT NULL,
  `contact_information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact_information_contact_person`
--

CREATE TABLE `contact_information_contact_person` (
  `contact_information_contact_person_id` int(11) NOT NULL,
  `contact_information_contact_person_gender` varchar(45) DEFAULT NULL,
  `contact_information_contact_person_name` varchar(45) DEFAULT NULL,
  `contact_information_contact_person_surname` varchar(45) DEFAULT NULL,
  `contact_information_contact_person_saved_data` tinyint(1) DEFAULT NULL,
  `contact_information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_login_name` varchar(45) DEFAULT NULL,
  `customer_password` varchar(255) DEFAULT NULL,
  `customer_infos_imported` tinyint(1) DEFAULT NULL,
  `customer_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `client_ust_idnr` varchar(45) DEFAULT NULL,
  `client_hr_number` varchar(45) DEFAULT NULL,
  `client_juristication` varchar(45) DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_contact_information`
--

CREATE TABLE `customer_contact_information` (
  `contact_information_id` int(11) NOT NULL,
  `contact_Information_company_name` varchar(45) DEFAULT NULL,
  `contact_Information_telefon` int(11) DEFAULT NULL,
  `contact_Information_email` varchar(45) DEFAULT NULL,
  `contact_Information_saved_data` tinyint(1) DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_email_configuration`
--

CREATE TABLE `customer_email_configuration` (
  `email_configuration_id` int(11) NOT NULL,
  `email_configuration_smtp_host` varchar(45) DEFAULT NULL,
  `email_configuration_smtp_port` varchar(45) DEFAULT NULL,
  `email_configuration_smtp_user` varchar(45) DEFAULT NULL,
  `email_configuration_smtp_encryption` tinyint(1) DEFAULT NULL,
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
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer_import`
--

CREATE TABLE `customer_import` (
  `import_id` int(11) NOT NULL,
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
  `token_id` int(11) NOT NULL,
  `token_key` varchar(255) DEFAULT NULL,
  `token_used` tinyint(1) DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_cancellation_invoice`
--

CREATE TABLE `erp_configuration_cancellation_invoice` (
  `erp_configuration_cancellation_invoice_id` int(11) NOT NULL,
  `erp_configuration_cancellation_invoice_month_number` int(11) DEFAULT NULL,
  `erp_configuration_cancellation_invoice_year_number` int(11) DEFAULT NULL,
  `erp_configuration_cancellation_invoice_first_number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_delivery_note`
--

CREATE TABLE `erp_configuration_delivery_note` (
  `erp_configuration_delivery_note_id` int(11) NOT NULL,
  `erp_configuration_delivery_note_month_number` int(11) DEFAULT NULL,
  `erp_configuration_delivery_note_year_Number` int(11) DEFAULT NULL,
  `erp_configuration_delivery_note_first_Number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_incoming_delivery_note`
--

CREATE TABLE `erp_configuration_incoming_delivery_note` (
  `erp_configuration_incoming_delivery_note_id` int(11) NOT NULL,
  `erp_configuration_incoming_delivery_note_month_number` int(11) DEFAULT NULL,
  `erp_configuration_incoming_delivery_note_year_number` int(11) DEFAULT NULL,
  `erp_configuration_incoming_delivery_note_first_number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_incoming_invoice`
--

CREATE TABLE `erp_configuration_incoming_invoice` (
  `erp_configuration_incoming_invoice_id` int(11) NOT NULL,
  `erp_configuration_incoming_invoice_month_number` int(11) DEFAULT NULL,
  `erp_configuration_incoming_invoice_year_number` int(11) DEFAULT NULL,
  `erp_configuration_incoming_invoice_first_number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_invoice`
--

CREATE TABLE `erp_configuration_invoice` (
  `erp_configuration_invoice_id` int(11) NOT NULL,
  `erp_configuration_invoice_month_number` int(11) DEFAULT NULL,
  `erp_configuration_invoice_year_number` int(11) DEFAULT NULL,
  `erp_configuration_invoice_first_Number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_item_types`
--

CREATE TABLE `erp_configuration_item_types` (
  `erp_configuration_item_types_id` int(11) NOT NULL,
  `erp_configuration_item_types_item` tinyint(1) DEFAULT NULL,
  `erp_configuration_item_types_bom` tinyint(1) DEFAULT NULL,
  `erp_configuration_item_types_services` tinyint(1) DEFAULT NULL,
  `erp_configuration_item_types_variant_item` tinyint(1) DEFAULT NULL,
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
  `erp_configuration_offer_month_number` int(11) DEFAULT NULL,
  `erp_configuration_offer_year_number` int(11) DEFAULT NULL,
  `erp_configuration_offer_first_number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_order`
--

CREATE TABLE `erp_configuration_order` (
  `erp_configuration_order_id` int(11) NOT NULL,
  `erp_configuration_order_month_number` int(11) DEFAULT NULL,
  `erp_configuration_order_year_number` int(11) DEFAULT NULL,
  `erp_configuration_order_first_number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_order_conformation`
--

CREATE TABLE `erp_configuration_order_conformation` (
  `erp_configuration_order_conformation_id` int(11) NOT NULL,
  `erp_configuration_order_conformation_month_number` int(11) DEFAULT NULL,
  `erp_configuration_order_conformation_year_number` int(11) DEFAULT NULL,
  `erp_configuration_order_conformation_first_Number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `erp_configuration_service_order`
--

CREATE TABLE `erp_configuration_service_order` (
  `service_order_id` int(11) NOT NULL,
  `service_order_month_number` int(11) DEFAULT NULL,
  `service_order_year_number` int(11) DEFAULT NULL,
  `service_order_first_number` int(11) DEFAULT NULL,
  `erp_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `host_configuration_ip_address_connect_external_device`
--

CREATE TABLE `host_configuration_ip_address_connect_external_device` (
  `host_configuration_ip_address_connect_external_device_id` int(11) NOT NULL,
  `host_configuration_ip_address_connect_external_device_share_name` varchar(45) DEFAULT NULL,
  `host_configuration_ip_address_connect_external_device_user` varchar(45) DEFAULT NULL,
  `host_configuration_ip_address_connect_external_device_password` varchar(45) DEFAULT NULL,
  `host_configuration_ip_address_connect_external_device_ip_sftp` tinyint(1) DEFAULT NULL,
  `host_configuration_ip_address_connect_external_device_ip_ftp` tinyint(1) DEFAULT NULL,
  `host_configuration_ip_address_connect_external_device_ip_smb` tinyint(1) DEFAULT NULL,
  `host_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `host_configuration_ip_address_data_backup`
--

CREATE TABLE `host_configuration_ip_address_data_backup` (
  `host_configuration_ip_address_data_backup_id` int(11) NOT NULL,
  `host_configuration_ip_address_data_backup_ip` varchar(45) DEFAULT NULL,
  `host_configuration_ip_address_data_backup_share_name` varchar(45) DEFAULT NULL,
  `host_configuration_ip_address_data_backup_user` varchar(45) DEFAULT NULL,
  `host_configuration_ip_address_data_backup_password` varchar(45) DEFAULT NULL,
  `host_configuration_ip_address_data_backup_sftp` tinyint(1) DEFAULT NULL,
  `host_configuration_ip_address_data_backup_ftp` tinyint(1) DEFAULT NULL,
  `host_configuration_ip_address_data_backup_smb` tinyint(1) DEFAULT NULL,
  `host_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `host_configuration_ip_adress_erp`
--

CREATE TABLE `host_configuration_ip_adress_erp` (
  `host_configuration_ip_adress_erp_id` int(11) NOT NULL,
  `host_configuration_ip_adress_erp_ip` varchar(45) DEFAULT NULL,
  `host_configuration_ip_adress_erp_subnetmask` varchar(45) DEFAULT NULL,
  `host_configuration_ip_adress_erp_gateway` varchar(45) DEFAULT NULL,
  `host_configuration_ip_adress_erp_dns` varchar(45) DEFAULT NULL,
  `host_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `host_configuration_virtualization`
--

CREATE TABLE `host_configuration_virtualization` (
  `host_configuration_virtualization_id` int(11) NOT NULL,
  `host_configuration_virtualization_produkt` varchar(45) DEFAULT NULL,
  `host_configuration_virtualization_version` varchar(45) DEFAULT NULL,
  `host_configuration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_accessories_data`
--

CREATE TABLE `import_accessories_data` (
  `import_accessories_data_id` int(11) NOT NULL,
  `import_accessories_data_item_number` tinyint(1) DEFAULT NULL,
  `import_accessories_data_accessories_item_number` tinyint(1) DEFAULT NULL,
  `import_accessories_data_from_quantity` tinyint(1) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_customer_contact_person_data`
--

CREATE TABLE `import_customer_contact_person_data` (
  `import_customer_contact_person_data_id` int(11) NOT NULL,
  `import_customer_contact_person_data_number` tinyint(1) DEFAULT NULL,
  `import_customer_contact_person_data_salutation` tinyint(1) DEFAULT NULL,
  `import_customer_contact_person_data_name` tinyint(1) DEFAULT NULL,
  `import_customer_contact_person_data_surname` tinyint(1) DEFAULT NULL,
  `import_customer_contact_person_data_email` tinyint(1) DEFAULT NULL,
  `import_customer_contact_person_data_phone` tinyint(1) DEFAULT NULL,
  `import_customer_contact_person_data_second_phone` tinyint(1) DEFAULT NULL,
  `import_customer_contact_person_data_fax` tinyint(1) DEFAULT NULL,
  `import_customer_contact_person_data_description` tinyint(1) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_customer_invoice_data`
--

CREATE TABLE `import_customer_invoice_data` (
  `import_customer_invoice_data_id` int(11) NOT NULL,
  `import_customer_invoice_data_number` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_company` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_name` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_surname` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_street` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_house_number` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_postcode` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_city` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_country` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_additional_adress_information` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_email` tinyint(1) DEFAULT NULL,
  `import_customer_invoice_data_phone` tinyint(1) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_customer_supplier_adress_data`
--

CREATE TABLE `import_customer_supplier_adress_data` (
  `import_customer_supplier_adress_data_id` int(11) NOT NULL,
  `import_customer_supplier_adress_data_number` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_company` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_name` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_surname` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_street` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_house_Number` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_postcode` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_city` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_country` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_additional_adress_information` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_email` tinyint(1) DEFAULT NULL,
  `import_customer_supplier_adress_data_phone` tinyint(1) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_customized_item_data`
--

CREATE TABLE `import_customized_item_data` (
  `import_customized_item_data_id` int(11) NOT NULL,
  `import_customized_item_data_customer_number` tinyint(1) DEFAULT NULL,
  `import_customized_item_data_item_number` tinyint(1) DEFAULT NULL,
  `import_customized_item_data_price` tinyint(1) DEFAULT NULL,
  `import_customized_item_data_from_quantity` tinyint(1) DEFAULT NULL,
  `import_customized_item_data_description` tinyint(1) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_data`
--

CREATE TABLE `import_data` (
  `import_data_id` int(11) NOT NULL,
  `import_data_status` tinyint(1) DEFAULT NULL,
  `import_data_salutation` tinyint(1) DEFAULT NULL,
  `import_data_customer_number` tinyint(1) DEFAULT NULL,
  `import_data_different_billing_customer` tinyint(1) DEFAULT NULL,
  `import_data_name` tinyint(1) DEFAULT NULL,
  `import_data_surname` tinyint(1) DEFAULT NULL,
  `import_data_street` tinyint(1) DEFAULT NULL,
  `import_data_house_number` tinyint(1) DEFAULT NULL,
  `import_data_postcode` tinyint(1) DEFAULT NULL,
  `import_data_city` tinyint(1) DEFAULT NULL,
  `import_data_country` tinyint(1) DEFAULT NULL,
  `import_data_company_name` tinyint(1) DEFAULT NULL,
  `import_data_additional_adress_information` tinyint(1) DEFAULT NULL,
  `import_data_email` tinyint(1) DEFAULT NULL,
  `import_data_different_invoice_email` tinyint(1) DEFAULT NULL,
  `import_data_phone` tinyint(1) DEFAULT NULL,
  `import_data_financiall_accounting_account` tinyint(1) DEFAULT NULL,
  `import_data_tax_number` tinyint(1) DEFAULT NULL,
  `import_data_informations` tinyint(1) DEFAULT NULL,
  `import_data_calculate_shipping_cost` tinyint(1) DEFAULT NULL,
  `import_data_direct_debit_mandate_reference` tinyint(1) DEFAULT NULL,
  `import_data_direct_debit_bank` tinyint(1) DEFAULT NULL,
  `import_data_direct_debit_bic` tinyint(1) DEFAULT NULL,
  `import_data_direct_debit_iban` tinyint(1) DEFAULT NULL,
  `import_data_direct_debit_account_holder` tinyint(1) DEFAULT NULL,
  `import_data_sales_tax_exempt` tinyint(1) DEFAULT NULL,
  `import_data_own_supplier_number` tinyint(1) DEFAULT NULL,
  `import_data_number_of_additions` int(11) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_item_data`
--

CREATE TABLE `import_item_data` (
  `import_item_data_id` int(11) NOT NULL,
  `import_item_data_status` tinyint(1) DEFAULT NULL,
  `import_item_data_number` tinyint(1) DEFAULT NULL,
  `import_item_data_description` tinyint(1) DEFAULT NULL,
  `import_item_data_name` tinyint(1) DEFAULT NULL,
  `import_item_data_text` tinyint(1) DEFAULT NULL,
  `import_item_data_unit` tinyint(1) DEFAULT NULL,
  `import_item_datatyp` tinyint(1) DEFAULT NULL,
  `import_item_data_single_category_name` tinyint(1) DEFAULT NULL,
  `import_item_data_weight` tinyint(1) DEFAULT NULL,
  `import_item_data_number_of_selling_prices` int(11) DEFAULT NULL,
  `import_item_data_surcharge_number_of_additions_selling_prices` int(11) DEFAULT NULL,
  `import_item_data_purchase_price` tinyint(1) DEFAULT NULL,
  `import_item_data_procurment_costs` tinyint(1) DEFAULT NULL,
  `import_item_data_quality_managment` tinyint(1) DEFAULT NULL,
  `import_item_datanumber_of_additions` tinyint(1) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_supplier_contact_person_data`
--

CREATE TABLE `import_supplier_contact_person_data` (
  `import_supplier_contact_person_data_id` int(11) NOT NULL,
  `import_supplier_contact_person_data_number` tinyint(1) DEFAULT NULL,
  `import_supplier_contact_person_data_salutation` tinyint(1) DEFAULT NULL,
  `import_supplier_contact_person_data_name` tinyint(1) DEFAULT NULL,
  `import_supplier_contact_person_data_surname` tinyint(1) DEFAULT NULL,
  `import_supplier_contact_person_data_email` tinyint(1) DEFAULT NULL,
  `import_supplier_contact_person_data_phone` tinyint(1) DEFAULT NULL,
  `import_supplier_contact_person_data_second_phone` tinyint(1) DEFAULT NULL,
  `import_supplier_contact_person_data_description` tinyint(1) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_supplier_data`
--

CREATE TABLE `import_supplier_data` (
  `import_supplier_data_id` int(11) NOT NULL,
  `import_supplier_data_status` tinyint(1) DEFAULT NULL,
  `import_supplier_data_number` tinyint(1) DEFAULT NULL,
  `import_supplier_data_salutation` tinyint(1) DEFAULT NULL,
  `import_supplier_data_name` tinyint(1) DEFAULT NULL,
  `import_supplier_data_surname` tinyint(1) DEFAULT NULL,
  `import_supplier_data_street` tinyint(1) DEFAULT NULL,
  `import_supplier_data_house_number` tinyint(1) DEFAULT NULL,
  `import_supplier_data_postcode` tinyint(1) DEFAULT NULL,
  `import_supplier_data_city` tinyint(1) DEFAULT NULL,
  `import_supplier_data_country` tinyint(1) DEFAULT NULL,
  `import_supplier_data_email` tinyint(1) DEFAULT NULL,
  `import_supplier_data_hompage` tinyint(1) DEFAULT NULL,
  `import_supplier_data_phone` tinyint(1) DEFAULT NULL,
  `import_supplier_data_company_name` tinyint(1) DEFAULT NULL,
  `import_supplier_data_sales_tax_id` tinyint(1) DEFAULT NULL,
  `import_supplier_data_fibu_account` tinyint(1) DEFAULT NULL,
  `import_supplier_data_own_customer_number` tinyint(1) DEFAULT NULL,
  `import_supplier_data_informations` tinyint(1) DEFAULT NULL,
  `import_supplier_data_tax_free_delivery` tinyint(1) DEFAULT NULL,
  `import_supplier_data_addition_number` int(11) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `import_supplier_item_data`
--

CREATE TABLE `import_supplier_item_data` (
  `import_supplier_item_data_id` int(11) NOT NULL,
  `import_supplier_item_data_supplier_item_number` tinyint(1) DEFAULT NULL,
  `import_supplier_item_data_supplier_item_description` tinyint(1) DEFAULT NULL,
  `import_supplier_item_data_purchase_price` tinyint(1) DEFAULT NULL,
  `import_supplier_item_data_status` tinyint(1) DEFAULT NULL,
  `import_supplier_item_data_standart_item` tinyint(1) DEFAULT NULL,
  `import_supplier_item_data_item_description` tinyint(1) DEFAULT NULL,
  `import_supplier_item_data_supplier_number` tinyint(1) DEFAULT NULL,
  `import_supplier_item_data_item_number` tinyint(1) DEFAULT NULL,
  `import_supplier_item_data_procurement_Cost` tinyint(1) DEFAULT NULL,
  `import_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `website_configuration`
--

CREATE TABLE `website_configuration` (
  `website_configuration_logo` blob DEFAULT NULL,
  `website_configuration_admin_name` varchar(45) DEFAULT NULL,
  `website_configuration_admin_password` varchar(255) DEFAULT NULL,
  `website_configuration_internet_adress` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Indizes für die Tabelle `client_client_main_adress`
--
ALTER TABLE `client_client_main_adress`
  ADD PRIMARY KEY (`client_main_adress_id`,`client_id`),
  ADD KEY `fk_client_client_main_adress_customer_client1` (`client_id`);

--
-- Indizes für die Tabelle `clinet_second_adress`
--
ALTER TABLE `clinet_second_adress`
  ADD PRIMARY KEY (`client_second_adress_id`,`client_id`),
  ADD KEY `fk_clinet_second_adress_customer_client1` (`client_id`);

--
-- Indizes für die Tabelle `contact_informationen_adress`
--
ALTER TABLE `contact_informationen_adress`
  ADD PRIMARY KEY (`contact_informationen_adress_id`,`contact_information_id`),
  ADD KEY `fk_contact_informationen_adress_customer_contact_information1` (`contact_information_id`);

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
  ADD PRIMARY KEY (`token_id`,`customer_id`),
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
  ADD PRIMARY KEY (`erp_configuration_incoming_delivery_note_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_incoming_delivery_note_customer_erp_conf1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `erp_configuration_incoming_invoice`
--
ALTER TABLE `erp_configuration_incoming_invoice`
  ADD PRIMARY KEY (`erp_configuration_incoming_invoice_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_incoming_invoice_customer_erp_configurat1` (`erp_configuration_id`);

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
  ADD KEY `fk_erp_configuration_offer_customer_erp_configuration1` (`erp_configuration_id`);

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
  ADD PRIMARY KEY (`service_order_id`,`erp_configuration_id`),
  ADD KEY `fk_erp_configuration_service_order_customer_erp_configuration1` (`erp_configuration_id`);

--
-- Indizes für die Tabelle `host_configuration_ip_address_connect_external_device`
--
ALTER TABLE `host_configuration_ip_address_connect_external_device`
  ADD PRIMARY KEY (`host_configuration_ip_address_connect_external_device_id`,`host_configuration_id`),
  ADD KEY `fk_host_configuration_ip_adress_connect_external_device_custo1` (`host_configuration_id`);

--
-- Indizes für die Tabelle `host_configuration_ip_address_data_backup`
--
ALTER TABLE `host_configuration_ip_address_data_backup`
  ADD PRIMARY KEY (`host_configuration_ip_address_data_backup_id`,`host_configuration_id`),
  ADD KEY `fk_host_configuration_ip_address_data_backup_customer_host_co1` (`host_configuration_id`);

--
-- Indizes für die Tabelle `host_configuration_ip_adress_erp`
--
ALTER TABLE `host_configuration_ip_adress_erp`
  ADD PRIMARY KEY (`host_configuration_ip_adress_erp_id`,`host_configuration_id`),
  ADD KEY `fk_host_configuration_ip_adress_erp_customer_host_configurati1` (`host_configuration_id`);

--
-- Indizes für die Tabelle `host_configuration_virtualization`
--
ALTER TABLE `host_configuration_virtualization`
  ADD PRIMARY KEY (`host_configuration_virtualization_id`,`host_configuration_id`),
  ADD KEY `fk_host_configuration_virtualization_customer_host_configurat1` (`host_configuration_id`);

--
-- Indizes für die Tabelle `import_accessories_data`
--
ALTER TABLE `import_accessories_data`
  ADD PRIMARY KEY (`import_accessories_data_id`,`import_id`),
  ADD KEY `fk_import_accessories_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_customer_contact_person_data`
--
ALTER TABLE `import_customer_contact_person_data`
  ADD PRIMARY KEY (`import_customer_contact_person_data_id`,`import_id`),
  ADD KEY `fk_import_customer_contact_person_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_customer_invoice_data`
--
ALTER TABLE `import_customer_invoice_data`
  ADD PRIMARY KEY (`import_customer_invoice_data_id`,`import_id`),
  ADD KEY `fk_import_customer_invoice_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_customer_supplier_adress_data`
--
ALTER TABLE `import_customer_supplier_adress_data`
  ADD PRIMARY KEY (`import_customer_supplier_adress_data_id`,`import_id`),
  ADD KEY `fk_import_customer_supplier_adress_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_customized_item_data`
--
ALTER TABLE `import_customized_item_data`
  ADD PRIMARY KEY (`import_customized_item_data_id`,`import_id`),
  ADD KEY `fk_import_customized_item_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_data`
--
ALTER TABLE `import_data`
  ADD PRIMARY KEY (`import_data_id`,`import_id`),
  ADD KEY `fk_import_data_customer_import1` (`import_id`);

--
-- Indizes für die Tabelle `import_item_data`
--
ALTER TABLE `import_item_data`
  ADD PRIMARY KEY (`import_item_data_id`,`import_id`),
  ADD KEY `fk_import_item_data_customer_import1` (`import_id`);

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
-- AUTO_INCREMENT für Tabelle `client_client_main_adress`
--
ALTER TABLE `client_client_main_adress`
  MODIFY `client_main_adress_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `clinet_second_adress`
--
ALTER TABLE `clinet_second_adress`
  MODIFY `client_second_adress_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `contact_informationen_adress`
--
ALTER TABLE `contact_informationen_adress`
  MODIFY `contact_informationen_adress_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `contact_information_contact_person`
--
ALTER TABLE `contact_information_contact_person`
  MODIFY `contact_information_contact_person_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `customer_client`
--
ALTER TABLE `customer_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `customer_contact_information`
--
ALTER TABLE `customer_contact_information`
  MODIFY `contact_information_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `host_configuration_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `erp_configuration_incoming_delivery_note_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_incoming_invoice`
--
ALTER TABLE `erp_configuration_incoming_invoice`
  MODIFY `erp_configuration_incoming_invoice_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `erp_configuration_order_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_order_conformation`
--
ALTER TABLE `erp_configuration_order_conformation`
  MODIFY `erp_configuration_order_conformation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `erp_configuration_service_order`
--
ALTER TABLE `erp_configuration_service_order`
  MODIFY `service_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `host_configuration_ip_address_connect_external_device`
--
ALTER TABLE `host_configuration_ip_address_connect_external_device`
  MODIFY `host_configuration_ip_address_connect_external_device_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `host_configuration_ip_address_data_backup`
--
ALTER TABLE `host_configuration_ip_address_data_backup`
  MODIFY `host_configuration_ip_address_data_backup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `host_configuration_ip_adress_erp`
--
ALTER TABLE `host_configuration_ip_adress_erp`
  MODIFY `host_configuration_ip_adress_erp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `host_configuration_virtualization`
--
ALTER TABLE `host_configuration_virtualization`
  MODIFY `host_configuration_virtualization_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_accessories_data`
--
ALTER TABLE `import_accessories_data`
  MODIFY `import_accessories_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_customer_contact_person_data`
--
ALTER TABLE `import_customer_contact_person_data`
  MODIFY `import_customer_contact_person_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_customer_invoice_data`
--
ALTER TABLE `import_customer_invoice_data`
  MODIFY `import_customer_invoice_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_customer_supplier_adress_data`
--
ALTER TABLE `import_customer_supplier_adress_data`
  MODIFY `import_customer_supplier_adress_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_customized_item_data`
--
ALTER TABLE `import_customized_item_data`
  MODIFY `import_customized_item_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_data`
--
ALTER TABLE `import_data`
  MODIFY `import_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `import_item_data`
--
ALTER TABLE `import_item_data`
  MODIFY `import_item_data_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints der Tabelle `client_client_main_adress`
--
ALTER TABLE `client_client_main_adress`
  ADD CONSTRAINT `fk_client_client_main_adress_customer_client1` FOREIGN KEY (`client_id`) REFERENCES `customer_client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `clinet_second_adress`
--
ALTER TABLE `clinet_second_adress`
  ADD CONSTRAINT `fk_clinet_second_adress_customer_client1` FOREIGN KEY (`client_id`) REFERENCES `customer_client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `contact_informationen_adress`
--
ALTER TABLE `contact_informationen_adress`
  ADD CONSTRAINT `fk_contact_informationen_adress_customer_contact_information1` FOREIGN KEY (`contact_information_id`) REFERENCES `customer_contact_information` (`contact_information_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_erp_configuration_incoming_invoice_customer_erp_configurat1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_erp_configuration_offer_customer_erp_configuration1` FOREIGN KEY (`erp_configuration_id`) REFERENCES `customer_erp_configuration` (`erp_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints der Tabelle `host_configuration_ip_address_connect_external_device`
--
ALTER TABLE `host_configuration_ip_address_connect_external_device`
  ADD CONSTRAINT `fk_host_configuration_ip_adress_connect_external_device_custo1` FOREIGN KEY (`host_configuration_id`) REFERENCES `customer_host_configuration` (`host_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `host_configuration_ip_address_data_backup`
--
ALTER TABLE `host_configuration_ip_address_data_backup`
  ADD CONSTRAINT `fk_host_configuration_ip_address_data_backup_customer_host_co1` FOREIGN KEY (`host_configuration_id`) REFERENCES `customer_host_configuration` (`host_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `host_configuration_ip_adress_erp`
--
ALTER TABLE `host_configuration_ip_adress_erp`
  ADD CONSTRAINT `fk_host_configuration_ip_adress_erp_customer_host_configurati1` FOREIGN KEY (`host_configuration_id`) REFERENCES `customer_host_configuration` (`host_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `host_configuration_virtualization`
--
ALTER TABLE `host_configuration_virtualization`
  ADD CONSTRAINT `fk_host_configuration_virtualization_customer_host_configurat1` FOREIGN KEY (`host_configuration_id`) REFERENCES `customer_host_configuration` (`host_configuration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_accessories_data`
--
ALTER TABLE `import_accessories_data`
  ADD CONSTRAINT `fk_import_accessories_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_customer_contact_person_data`
--
ALTER TABLE `import_customer_contact_person_data`
  ADD CONSTRAINT `fk_import_customer_contact_person_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_customer_invoice_data`
--
ALTER TABLE `import_customer_invoice_data`
  ADD CONSTRAINT `fk_import_customer_invoice_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_customer_supplier_adress_data`
--
ALTER TABLE `import_customer_supplier_adress_data`
  ADD CONSTRAINT `fk_import_customer_supplier_adress_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_customized_item_data`
--
ALTER TABLE `import_customized_item_data`
  ADD CONSTRAINT `fk_import_customized_item_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_data`
--
ALTER TABLE `import_data`
  ADD CONSTRAINT `fk_import_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `import_item_data`
--
ALTER TABLE `import_item_data`
  ADD CONSTRAINT `fk_import_item_data_customer_import1` FOREIGN KEY (`import_id`) REFERENCES `customer_import` (`import_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
