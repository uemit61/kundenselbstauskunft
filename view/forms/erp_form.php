<?php
    function erp_form()
    {
?>

<div class="container bg-primary-subtle shadow-lg rounded-5  border border-primary-subtle border-5 p-4 w-75" >
    <form  id="form-tab4" name="erp" method="post" action="" class="d-flex flex-column  needs-validation gap-3"   novalidate>
        <h3 class="text-center p-3">ERP-Einstellungen</h3>

        <fieldset class="d-flex flex-column rounded-5 shadow p-2 ">
            <h5 class=" p-2">User</h5>

            <div class="form-floating flex-fill">
                <input type="text" class="form-control rounded-5" id="number_of_users" placeholder="Anzahl der User" required>
                <label for="number_of_users" class="form-label">Anzahl der User</label>
                <div class="text invalid-feedback" id="number_of_usersFeedback"></div>
            </div>
        </fieldset>

        <fieldset class="d-flex flex-column gap-1 rounded-5 shadow p-2 ">
            <h5 class="text p-2">Nummernkreise</h5>

            <div class="d-flex flex-column flex-md-column flex-lg-row flex-lg-wrap   gap-1">
                <?php
                    
                    $nummerranges =
                    [
                        'Kundennummer' => 'customer_number', 
                        'Lieferantennummer' => 'supplier_number',
                        'Artikelnummer' => 'item_number'
                    ];

                    foreach($nummerranges as $range => $id):
                ?>
                        <div class="form-floating flex-fill">
                            <input type="text" class="form-control rounded-5" id=<?=$id?> placeholder=<?=$range?> required>
                            <label for=<?=$id?> class="form-label"><?=$range?></label>
                            <div class="text p-2 invalid-feedback" id=<?=$id."Feedback"?>></div>
                        </div>
                <?php endforeach; ?>

            </div>
        </fieldset>

        <fieldset class="d-flex flex-column  rounded-5 shadow p-2 ">
            <h5 class="d-flex gap-1 text p-2">
                Vorgänge 
                <i 
                
                    class="bi bi-info-circle-fill" 
                    data-bs-toggle="tooltip" 
                    data-bs-placement="bottom"
                    data-bs-custom-class="custom-tooltip"
                    data-bs-html="true" 
                    data-bs-title=
                    "
                        <div class='d-flex flex-column gap-3'>
                            <p class='fw-bold'>
                                Jahreszahl, Monatszahl und Die erste Vorgangsummer
                            </p>

                            <p class='text-center text-decoration-underline'>
                                Beispiel beim Angebot:
                            </p>

                            <div class='d-flex justify-content-center'>
                                <p class='col-4'>
                                    AN2025-1001
                                </p>
                                <p class='col-8'>
                                    mit Jahreszahl
                                </p>
                            </div>

                            <div class='d-flex'>
                                <p class='col-4'>
                                    AN02-1001
                                </p>
                                <p class='col-8'>
                                    mit Monatszahl
                                </p>
                            </div>

                            <div class='d-flex'>
                                <p class='col-4'>
                                    AN202502-1001
                                </p>
                                <p class='col-8'>
                                    mit Jahreszahl und Monatszahl
                                </p>
                            </div>
                        

                        </div>
                    ">
                </i>
            </h5>

            <div class="d-flex flex-md-column  flex-custom flex-lg-row flex-lg-wrap gap-1">
            <?php 
                $process=
                [
                    'Angebot' =>'offer',
                    'Auftragsbestätigung' =>'order_con',
                    'Lieferschein' => 'delivery_note',
                    'Rechnung' => 'invoice',
                    'Storno-Rechnung' => 'cancellation_invoice',
                    'Bestellung'=>'order',
                    'Eingangslieferschein' =>'incomming_delivery',
                    'Eingangsrechnung' =>'incoming_invoice',
                    'Service-Auftrag'=> 'service_order',
                ];

                foreach($process as $vorgang => $id):
            ?>
                        <fieldset class="d-flex flex-column flex-fill rounded-5 shadow p-2 mb-2">
                            <h5 class="text p-2"><?=$vorgang?></h5>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id=<?=$id."_year"?>>
                                <label class="form-check-label" for=<?=$id."_year"?>>Jahreszahl</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input " type="checkbox" value="" id=<?=$id."_month"?>>
                                <label class="form-check-label" for=<?=$id."_month"?>>Monatszahl</label>
                            </div>

                            <div class="form-floating  flex-fill ">
                                <input type="text" class="form-control rounded-5"  id=<?=$id."_first"?> placeholder="Die erste Nummer" required>
                                <label for=<?=$id."_first"?> class="form-label fs-label" >Die erste Nummer</label>
                                <div class="text p-2 invalid-feedback" id=<?=$id."_firstFeedback"?>></div>
                            </div>
                        </fieldset>

            <?php  endforeach; ?>

            </div>
            
        <fieldset class="d-flex flex-column rounded-5 shadow p-2">
            <h5 class="text gap-1">Artikelarten</h5>

            <div class="d-flex flex-column flex-lg-row p-2">

                <?php 
                    $item_types = ['Artikel' => 'item', 'Stückliste' => 'bom', 'Services' => 'services', 'Variantenartikel' => 'variantitem'];

                    foreach($item_types as $item_type => $id):
                ?>
                        <div class="form-check flex-fill">
                            <input type="checkbox" class="form-check-input" id=<?=$id."_item_types"?> >
                            <label for=<?=$id."_item_types"?> class="form-check-label" ><?=$item_type?></label>
                        </div>
                <?php endforeach; ?>
            </div>
        </fieldset>
    </form>
</div>
<?php
    }