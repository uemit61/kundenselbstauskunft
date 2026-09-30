<?php
/**
 * @author      Ümit Yildirim <uemit611@outlook.de>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */
    function customer_erp_configuration()
    {
        $erp_configuration=
        [
            'field_name' => 'User',
            'dBName' => 'customer_erp_configuration',
            ['erp_configuration_number_of_user' => ['form-floating flex-fill',['number'],'Anzahl der User']],
        ];

        $erp_configuration_number_ranges=
        [
            'field_name' => 'Nummernkreise',
            'dBName' => 'erp_configuration_number_ranges',
            [
                'erp_configuration_number_ranges_customer_number'  => ['form-floating flex-fill',['number'],'Kundennummer'],
                'erp_configuration_number_ranges_supplier_number'=>['form-floating flex-fill',['number'],'Lieferantennummer'],
                'erp_configuration_number_ranges_item_number' =>['form-floating flex-fill',['number'],'Artikelnummer']
            ],
        ];

        $erp_configuration_offer=
        [
            'field_name' =>'Angebot',
            'dBName' => 'erp_configuration_offer',
            ['erp_configuration_offer_month' =>['form-floating flex-fill',['number'],'Jahreszahl']],
            ['erp_configuration_offer_year' => ['form-floating flex-fill',['number'],'Monatszahl']],	
            ['erp_configuration_offer_first' =>['form-floating flex-fill',['number'],'Die erste Nummer']],
        ];

        $erp_configuration_order=
        [
            'field_name' =>'Bestellung',
            'dBName' => 'erp_configuration_order',
            ['erp_configuration_order_month' =>['form-floating flex-fill',['number'],'Jahreszahl']],
            ['erp_configuration_order_year' => ['form-floating flex-fill',['number'],'Monatszahl']],	
            ['erp_configuration_order_first' =>['form-floating flex-fill',['number'],'Die erste Nummer']],
        ];

        $erp_configuration_order_conformation=
        [
            'field_name' =>'Auftragsbestätigung',
            'dBName' => 'erp_configuration_order_conformation',
            ['erp_configuration_order_conformation_month' =>['form-floating flex-fill',['number'],'Jahreszahl']],
            ['erp_configuration_order_conformation_year' => ['form-floating flex-fill',['number'],'Monatszahl']],	
            ['erp_configuration_order_conformation_first' =>['form-floating flex-fill',['number'],'Die erste Nummer']],
        ];

        $erp_configuration_delivery_note=
        [
            'field_name' =>'Lieferschein',
            'dBName' => 'erp_configuration_delivery_note',
            ['erp_configuration_delivery_note_month' =>['form-floating flex-fill',['number'],'Jahreszahl']],
            ['erp_configuration_delivery_note_year' => ['form-floating flex-fill',['number'],'Monatszahl']],	
            ['erp_configuration_delivery_note_first' =>['form-floating flex-fill',['number'],'Die erste Nummer']],
        ];

        $erp_configuration_invoice=
        [
            'field_name' =>'Rechnung',
            'dBName' => 'erp_configuration_invoice',
            ['erp_configuration_invoice_month' =>['form-floating flex-fill',['number'],'Jahreszahl']],
            ['erp_configuration_invoice_year' => ['form-floating flex-fill',['number'],'Monatszahl']],	
            ['erp_configuration_invoice_first' =>['form-floating flex-fill',['number'],'Die erste Nummer']],
        ];

        $erp_configuration_cancellation_invoice=
        [
            'field_name' =>'Storno-Rechnung',
            'dBName' => 'erp_configuration_cancellation_invoice',
            ['erp_configuration_cancellation_invoice_month' =>['form-floating flex-fill',['number'],'Jahreszahl']],
            ['erp_configuration_cancellation_invoice_year' => ['form-floating flex-fill',['number'],'Monatszahl']],	
            ['erp_configuration_cancellation_invoice_first' =>['form-floating flex-fill',['number'],'Die erste Nummer']],
        ];

        $erp_configuration_incoming_delivery_note=
        [
            'field_name' =>'Eingangslieferschein',
            'dBName' => 'erp_configuration_incoming_delivery_note',
            ['erp_configuration_incoming_delivery_note_month' =>['form-floating flex-fill',['number'],'Jahreszahl']],
            ['erp_configuration_incoming_delivery_note_year' => ['form-floating flex-fill',['number'],'Monatszahl']],	
            ['erp_configuration_incoming_delivery_note_first' =>['form-floating flex-fill',['number'],'Die erste Nummer']],
        ];

        $erp_configuration_incoming_invoice=
        [
            'field_name' =>'Eingangsrechnung',
            'dBName' => 'erp_configuration_incoming_invoice',
            ['erp_configuration_incoming_invoice_month' =>['form-floating flex-fill',['number'],'Jahreszahl']],
            ['erp_configuration_incoming_invoice_year' => ['form-floating flex-fill',['number'],'Monatszahl']],	
            ['erp_configuration_incoming_invoice_first' =>['form-floating flex-fill',['number'],'Die erste Nummer']],
        ];

        $erp_configuration_service_order=
        [
            'field_name' =>'Service-Auftrag',
            'dBName' => 'erp_configuration_service_order',
            ['erp_configuration_service_order_month' =>['form-floating flex-fill',['number'],'Jahreszahl']],
            ['erp_configuration_service_order_year' => ['form-floating flex-fill',['number'],'Monatszahl']],	
            ['erp_configuration_service_order_first' =>['form-floating flex-fill',['number'],'Die erste Nummer']],
        ];

        $erp_configuration_item_types=
        [
            'field_name' =>'',
            'dBName' => 'erp_configuration_item_types',
            ['erp_configuration_item_types_item' => ['form-check flex-fill',['checkbox'],'Artikel'],
            'erp_configuration_item_types_bom' 	=> ['form-check flex-fill',['checkbox'],'Stückliste'],
            'erp_configuration_item_types_services' =>['form-check flex-fill',['checkbox'],'Services'] , 	
            'erp_configuration_item_types_variant_item' => ['form-check flex-fill',['checkbox'],'Variantenartikel']],
        ];

        $customer_erp_configuration=
        [
            [$erp_configuration],
            [$erp_configuration_number_ranges],
            [
                $erp_configuration_offer, $erp_configuration_order, $erp_configuration_order_conformation,
                $erp_configuration_delivery_note, $erp_configuration_invoice, $erp_configuration_cancellation_invoice,
                $erp_configuration_incoming_delivery_note,$erp_configuration_incoming_invoice,$erp_configuration_service_order
            ],
            [$erp_configuration_item_types]
        ];

        return ['form_label'=>'Erp-Einstellungen','form_id' =>'customer_erp_configuration','form_body'=>$customer_erp_configuration]
?>
<?php
    }