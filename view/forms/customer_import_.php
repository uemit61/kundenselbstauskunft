<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */



    function customer_import()
    {
        $import_customer_data=
        [ 
            'field_name'=>'Kunden',
            'dBName' => 'import_customer_data',
            ['import_customer_data_status' => ['form-check flex-fill',['checkbox'],'Status']],
            ['import_customer_data_customer_number' => ['form-check flex-fill',['checkbox'],'Kundennummer']],
            ['import_customer_data_different_billing_customer' => ['form-check flex-fill',['checkbox'],'Abweichender Rechnungskunde']],
            ['import_customer_data_salutation' => ['form-check flex-fill',['checkbox'],'Anrede']],
            ['import_customer_data_name' => ['form-check flex-fill',['checkbox'],'Vorname']],	
            ['import_customer_data_surname' => ['form-check flex-fill',['checkbox'],'Nachname']],
            ['import_customer_data_street' => ['form-check flex-fill',['checkbox'],'Straße']],
            ['import_customer_data_house_number' => ['form-check flex-fill',['checkbox'],'Hausnummer']],
            ['import_customer_data_postcode' => ['form-check flex-fill',['checkbox'],'Postleitzahl']],	
            ['import_customer_data_city' => ['form-check flex-fill',['checkbox'],'Stadt']],
            ['import_customer_data_country' => ['form-check flex-fill',['checkbox'],'Land']],
            ['import_customer_data_company_name' => ['form-check flex-fill',['checkbox'],'Firmenname']],
            ['import_customer_data_additional_addres_information' 	 => ['form-check flex-fill',['checkbox'],'Zusätzliche Adressinformationen']],
            ['import_customer_data_email' => ['form-check flex-fill',['checkbox'],'E-Mail']],
            ['import_customer_data_different_erp_configuration_invoice_email'  => ['form-check flex-fill',['checkbox'],'Abweichende Rechnungs-E-Mail']],	
            ['import_customer_data_phone' => ['form-check flex-fill',['checkbox'],'Telefon']],
            ['import_customer_data_financiall_accounting_account'  => ['form-check flex-fill',['checkbox'],'FiBu Konto']],
            ['import_customer_data_tax_number' => ['form-check flex-fill',['checkbox'],'Steuernummer']],
            ['import_customer_data_informations' => ['form-check flex-fill',['checkbox'],'Informationen']],
            ['import_customer_data_calculate_shipping_cost' => ['form-check flex-fill',['checkbox'],'Versandkosten berechnen']],
            ['import_customer_data_direct_debit_mandate_reference' => ['form-check flex-fill',['checkbox'],'Lastschrift Mandatsreferenz']],
            ['import_customer_data_direct_debit_bank' => ['form-check flex-fill',['checkbox'],'Lastschrift Bank']],	
            ['import_customer_data_direct_debit_bic' => ['form-check flex-fill',['checkbox'],'Lastschrift BIC']],
            ['import_customer_data_direct_debit_iban' => ['form-check flex-fill',['checkbox'],'Lastschrift IBAN']],
            ['import_customer_data_direct_debit_account_holder' => ['form-check flex-fill',['checkbox'],'Lastschrift Kontoinhaber']],
            ['import_customer_data_sales_tax_exempt' => ['form-check flex-fill',['checkbox'],'Umsatzsteuerbefreit']],
            ['import_customer_data_own_supplier_number' => ['form-check flex-fill',['checkbox'],'Eigene Lieferantennummer']],
            ['import_customer_data_number_of_additions' => ['form-floating flex-fill',['text'],'Zusatz']],
        ];

        $import_supplier_data=
        [
            'field_name' =>'Lieferanten',
            'dBName' => 'import_supplier_data',
            ['import_supplier_data_status' => ['form-check flex-fill',['checkbox'],'Status']],
            ['import_supplier_data_number' => ['form-check flex-fill',['checkbox'],'Lieferantennummer']],	
            ['import_supplier_data_salutation' => ['form-check flex-fill',['checkbox'],'Anrede']],	
            ['import_supplier_data_name' => ['form-check flex-fill',['checkbox'],'Vorname']], 	
            ['import_supplier_data_surname' => ['form-check flex-fill',['checkbox'],'Nachname']],	
            ['import_supplier_data_street' => ['form-check flex-fill',['checkbox'],'Straße']], 	
            ['import_supplier_data_house_number' => ['form-check flex-fill',['checkbox'],'Hausnummer']], 	
            ['import_supplier_data_postcode' => ['form-check flex-fill',['checkbox'],'Postleitzahl']], 	
            ['import_supplier_data_city' => ['form-check flex-fill',['checkbox'],'Stadt']], 	
            ['import_supplier_data_country' => ['form-check flex-fill',['checkbox'],'Land']],	
            ['import_supplier_data_email' => ['form-check flex-fill',['checkbox'],'E-Mail']], 	
            ['import_supplier_data_hompage' => ['form-check flex-fill',['checkbox'],'Homepage']], 	
            ['import_supplier_data_phone' => ['form-check flex-fill',['checkbox'],'Telefon']],	
            ['import_supplier_data_company_Name' => ['form-check flex-fill',['checkbox'],'Firmenname']], 	
            ['import_supplier_data_sales_tax_id' => ['form-check flex-fill',['checkbox'],'Umsatzsteuernummer ID']], 	
            ['import_supplier_data_fibu_account'  => ['form-check flex-fill',['checkbox'],'FiBu Konto']], 	
            ['import_supplier_data_own_customer_number'  => ['form-check flex-fill',['checkbox'],'Eigene Kundennummer']], 	
            ['import_supplier_data_informations'  => ['form-check flex-fill',['checkbox'],'Informationen']],	
            ['import_supplier_data_tax_free_delivery'  => ['form-check flex-fill',['checkbox'],'Steuerfreie Lieferung']], 	
            ['import_supplier_data_addition_number' => ['form-floating flex-fill',['text'],'Zusatz']],
        ];

        $import_item_data=
        [
            'field_name' =>'Artikel',
            'dBName' => 'import_item_data',
            ['import_item_data_status'=> ['form-check flex-fill',['checkbox'],'Status']],
            ['import_item_data_number'=> ['form-check flex-fill',['checkbox'],'Artikelnummer']],	
            ['import_item_data_description'=> ['form-check flex-fill',['checkbox'],'Artikelbeschreibung']],
            ['import_item_data_name'=> ['form-check flex-fill',['checkbox'],'Artikelname']], 	
            ['import_item_data_text'=> ['form-check flex-fill',['checkbox'],'Artikeltext']], 	
            ['import_item_data_unit'=> ['form-check flex-fill',['checkbox'],'Einheit']], 	
            ['import_item_data_typ'=> ['form-check flex-fill',['checkbox'],'Artikeltyp']], 	
            ['import_item_data_single_category_name'=> ['form-check flex-fill',['checkbox'],'Einzel Kategoriename']], 	
            ['import_item_data_weight'=> ['form-check flex-fill',['checkbox'],'Gewicht']], 	
            ['import_item_data_number_of_selling_prices'=> ['form-floating flex-fill',['text'],'Verkaufspreis']], 	
            ['import_item_data_surcharge_number_of_additions_selling_prices' => ['form-floating flex-fill',['text'],'Aufschlag Verkaufspreis']], 	
            ['import_item_data_purchase_price' => ['form-check flex-fill',['checkbox'],'Einkaufspreis']],  	
            ['import_item_data_procurment_costs'=> ['form-check flex-fill',['checkbox'],'Bezugskosten']], 	
            ['import_item_data_quality_managment'=> ['form-check flex-fill',['checkbox'],'Qualitätsmanagement']], 	
            ['import_item_data_number_of_additions' => ['form-floating flex-fill',['text'],'Zusatz']],
        ];

        $import_customer_contact_person_data=
        [
            'field_name' =>'Kunden-Ansprechpartner',
            'dBName' => 'import_customer_contact_person_data',
            ['import_customer_contact_person_data_number' => ['form-check flex-fill',['checkbox'],'Kundennummer']],
            ['import_customer_contact_person_data_salutation'  => ['form-check flex-fill',['checkbox'],'Anrede']], 		
            ['import_customer_contact_person_data_name' => ['form-check flex-fill',['checkbox'],'Vorname']],
            ['import_customer_contact_person_data_surname'  => ['form-check flex-fill',['checkbox'],'Nachname']], 	
            ['import_customer_contact_person_data_email' => ['form-check flex-fill',['checkbox'],'E-Mail']], 	
            ['import_customer_contact_person_data_phone' => ['form-check flex-fill',['checkbox'],'Telefon']], 	
            ['import_customer_contact_person_data_second_phone' => ['form-check flex-fill',['checkbox'],'Telefon 2']], 	
            ['import_customer_contact_person_data_fax' 	=> ['form-check flex-fill',['checkbox'],'Fax']], 	
            ['import_customer_contact_person_data_description' => ['form-check flex-fill',['checkbox'],'Beschreibung']],
        ];

        $import_supplier_contact_person_data=
        [
            'field_name' =>'Lieferanten-Ansprechpartner',
            'dBName' => 'import_supplier_contact_person_data',
            ['import_supplier_contact_person_data_number'  => ['form-check flex-fill',['checkbox'],'Lieferantennummer']], 	
            ['import_supplier_contact_person_data_salutation'  => ['form-check flex-fill',['checkbox'],'Anrede']], 	
            ['import_supplier_contact_person_data_name' => ['form-check flex-fill',['checkbox'],'Vorname']], 	
            ['import_supplier_contact_person_data_surname'  => ['form-check flex-fill',['checkbox'],'Nachname']], 	
            ['import_supplier_contact_person_data_email' => ['form-check flex-fill',['checkbox'],'E-Mail']], 	
            ['import_supplier_contact_person_data_phone' => ['form-check flex-fill',['checkbox'],'Telefon']], 	
            ['import_supplier_contact_person_data_second_phone' => ['form-check flex-fill',['checkbox'],'Telefon 2']], 	
            ['import_supplier_contact_person_data_fax' 	=> ['form-check flex-fill',['checkbox'],'Fax']],
            ['import_supplier_contact_person_data_description' => ['form-check flex-fill',['checkbox'],'Beschreibung']],
        ];

        $import_customer_billing_addres_data=
        [
            'field_name' =>'Kunden-Rechnungsadresse',
            'dBName' => 'import_customer_billing_addres_data',
            ['import_customer_billing_addres_data_number'  => ['form-check flex-fill',['checkbox'],'Kundennummer']], 	
            ['import_customer_billing_addres_data_company'  => ['form-check flex-fill',['checkbox'],'Firma']], 	
            ['import_customer_billing_addres_data_name'  => ['form-check flex-fill',['checkbox'],'Vorname']], 	
            ['import_customer_billing_addres_data_surname'  => ['form-check flex-fill',['checkbox'],'Nachname']], 	
            ['import_customer_billing_addres_data_street'  => ['form-check flex-fill',['checkbox'],'Straße']],
            ['import_customer_billing_addres_data_house_Number'  => ['form-check flex-fill',['checkbox'],'Hausnummer']], 	
            ['import_customer_billing_addres_data_postcode'  => ['form-check flex-fill',['checkbox'],'Postleitzahl']], 	
            ['import_customer_billing_addres_data_city'  => ['form-check flex-fill',['checkbox'],'Ort']], 	
            ['import_customer_billing_addres_data_country'  => ['form-check flex-fill',['checkbox'],'Land']], 	
            ['import_customer_billing_addres_data_additional_addres'  => ['form-check flex-fill',['checkbox'],'Zusätzliche Adressinformationen']],
            ['import_customer_billing_addres_data_email'  => ['form-check flex-fill',['checkbox'],'E-Mail']], 	
            ['import_customer_billing_addres_data_phone'  => ['form-check flex-fill',['checkbox'],'Telefon']],
        ];

        $import_supplier_billing_addres_data=
        [
            'field_name' =>'Lieferanten-Rechnungsadresse',
            'dBName' => 'import_supplier_billing_addres_data',
            ['import_supplier_billing_addres_data_number'  => ['form-check flex-fill',['checkbox'],'Kundennummer']], 	
            ['import_supplier_billing_addres_data_company'  => ['form-check flex-fill',['checkbox'],'Firma']], 	
            ['import_supplier_billing_addres_data_name'  => ['form-check flex-fill',['checkbox'],'Vorname']], 	
            ['import_supplier_billing_addres_data_surname'  => ['form-check flex-fill',['checkbox'],'Nachname']], 	
            ['import_supplier_billing_addres_data_street'  => ['form-check flex-fill',['checkbox'],'Straße']],
            ['import_supplier_billing_addres_data_house_Number'  => ['form-check flex-fill',['checkbox'],'Hausnummer']], 	
            ['import_supplier_billing_addres_data_postcode'  => ['form-check flex-fill',['checkbox'],'Postleitzahl']], 	
            ['import_supplier_billing_addres_data_city'  => ['form-check flex-fill',['checkbox'],'Ort']], 	
            ['import_supplier_billing_addres_data_country'  => ['form-check flex-fill',['checkbox'],'Land']], 	
            ['import_supplier_billing_addres_data_additional_addres'  => ['form-check flex-fill',['checkbox'],'Zusätzliche Adressinformationen']],
            ['import_supplier_billing_addres_data_email'  => ['form-check flex-fill',['checkbox'],'E-Mail']], 	
            ['import_supplier_billing_addres_data_phone'  => ['form-check flex-fill',['checkbox'],'Telefon']],
        ];

        $import_customer_item_data=
        [
            'field_name' => 'Kundenspezifische Artikel',
            'dBName' => 'import_customer_item_data',
            ['import_customer_item_data_customer_number'  => ['form-check flex-fill',['checkbox'],'Kundennummer']], 	
            ['import_customer_item_data_item_number'  => ['form-check flex-fill',['checkbox'],'Artikelnummer']], 	
            ['import_customer_item_data_price'  => ['form-check flex-fill',['checkbox'],'Preis']], 	
            ['import_customer_item_data_from_Quantity'  => ['form-check flex-fill',['checkbox'],'Ab Menge']], 	
            ['import_customer_item_data_description'  => ['form-check flex-fill',['checkbox'],'Beschreibung']],
        ];

        $import_supplier_item_data=
        [
            'field_name' => 'Lieferantenartikel',
            'dBName' => 'import_supplier_item_data',
            ['import_supplier_item_data_number'  => ['form-check flex-fill',['checkbox'],'Lieferanten Artikelnummer']], 	
            ['import_supplier_item_data_description'  => ['form-check flex-fill',['checkbox'],'Lieferanten Artikelbeschreibung']], 	
            ['import_supplier_item_data_purchase_price'  => ['form-check flex-fill',['checkbox'],'Einkaufspreis']], 	
            ['import_supplier_item_data_status'  => ['form-check flex-fill',['checkbox'],'Status']], 	
            ['import_supplier_item_data_standard_item'  => ['form-check flex-fill',['checkbox'],'Standard-Artikel']], 	
            ['import_supplier_item_data_item_description'  => ['form-check flex-fill',['checkbox'],'Beschreibung']], 	
            ['import_supplier_item_data_supplier_number'  => ['form-check flex-fill',['checkbox'],'Lieferantennummer']], 	
            ['import_supplier_item_data_item_number'  => ['form-check flex-fill',['checkbox'],'Artikelnummer']], 	
            ['import_supplier_item_data_procurement_cost'  => ['form-check flex-fill',['checkbox'],'Bezugskosten']], 
        ];

        $import_accessories_item_data=
        [
            'field_name' => 'Zubehörartikel',
            'dBName' => 'import_accessories_item_data',
            ['import_accessories_item_data_item_number'  => ['form-check flex-fill',['checkbox'],'Artikelnummer'],
            'import_accessories_item_data_import_accessories_number'  => ['form-check flex-fill',['checkbox'],'Zubehör-Artikelnummer'], 	
            'import_accessories_item_data_from_quantity'  => ['form-check flex-fill',['checkbox'],'Ab Menge']]
        ];

        $customer_import=
        [
            [$import_customer_data,$import_supplier_data,$import_item_data],
            [$import_customer_contact_person_data,$import_customer_billing_addres_data,$import_customer_item_data],
            [$import_supplier_contact_person_data,$import_supplier_billing_addres_data,$import_supplier_item_data],
            [$import_accessories_item_data]
        ];

        return ['form_label'=>'Import','form_id' =>'customer_import','form_body'=>$customer_import];
    }