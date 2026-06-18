<?php


/*
* @file        hostConfig_form.php
* @author      Ümit Yildirim hopes61@icloud.com
* @copyright   Copyright (c) 2024, Ümit Yildirim. Alle Rechte vorbehalten.
* @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
* @version     1.0.0
* @since       2024-12-18
*/

    function hostConfig_form()
    {

?>

        <div class="bg-primary-subtle shadow-lg rounded-5  border border-primary-subtle border-5 p-4 w-50" >
        <form   id="form-tab2" name="hostConfig" method="post" action="" class="d-flex flex-column needs-validation gap-3"     novalidate>
            <h3 class="text-center ">Host-Einstellungen</h3>
            <fieldset class="p-3  shadow rounded-5 d-flex flex-column gap-1">
                <legend class="text ">Virtualisierung</legend>

                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="virtualizationYes" name="virtualization" value="option1" >
                    <label type="form-check-label" for="virtualizationYes">Virtualisierungshost</label>
                </div>

                <div class="d-flex flex-row flex-md-row flex-sm-column gap-1 d-none" id="virtualisationFields">
                    <div class="form-floating flex-fill">
                        <input type="text"  class="form-control rounded-5 "  id="product" name="product"  placeholder required >
                        <label for="product" class="form-label ">Produkt</label>
                    </div>
                    
                    <div class="form-floating col-5">
                        <input type="text"  class="form-control rounded-5"  id="version" name="version"  placeholder required >
                        <label for="version" class="form-label ">Version</label>
                    </div>
                </div>

            </fieldset>

            <div class="d-flex flex-row responsive-flex gap-1">
                <fieldset class="p-2 shadow rounded-5 d-flex flex-column justify-content-between flex-fill ">
                    <legend class="text">Glorix-ERP</legend>

                    <div class="d-flex flex-column gap-1">
                        <div class="form-floating ">
                            <input type="text"  class="form-control rounded-5"  id="erpIp" name="erpIp"   placeholder required >
                            <label for="erpIp" class="form-label ">IP-Adresse</label>
                        </div>

                        <div class="form-floating ">
                            <input type="text"  class="form-control rounded-5"id="subnet" name="subnet"   placeholder required >
                            <label for="subnet" class="form-label ">Subnetzmaske</label>
                        </div>

                        <div class="form-floating ">
                            <input type="text"  class="form-control rounded-5" id="gateway" name="gateway"  placeholder required >
                            <label for="gateway" class="form-label ">Gateway</label>
                        </div>

                        <div class="form-floating ">
                            <input type="text"  class="form-control rounded-5" id="dns" name="dns"  placeholder required >
                            <label for="dns" class="form-label ">DNS</label>
                        </div>

                    </div>
                    
                </fieldset>

                <fieldset class="p-2 shadow rounded-5 d-flex flex-column gap-1 flex-fill">
                    <legend class="text">Datensicherung</legend>

                    <div class="d-flex flex-column p-2 shadow rounded-5" id="backup">
                        <label for="backup" >Protokoll</label> 
                        <div class="d-flex">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="backupSFTP" name="backupSFTP" value="option1">
                                <label type="form-check-label" for="backupSFTP">SFTP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input"  id="backupFTP" name="backupFTP" value="option1">
                                <label type="form-check-label" for="backupFTP">FTP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="backupSMB" name="backupSMB" value="option1">
                                <label type="form-check-label" for="backupSMB">SMB</label>
                            </div>
                        </div>
                    </div>
        
                    <div class="form-floating flex-fill ">
                        <input type="text"  class="form-control rounded-5" id="backupIp" name="backupIp"   placeholder required >
                        <label for="backupIp" class="form-label ">IP-Adresse</label>
                    </div>

                    <div class="form-floating flex-fill ">
                        <input type="text"  class="form-control rounded-5" id="backupShare" name="backupShare"   placeholder required >
                        <label for="backupShare" class="form-label ">Freigabename</label>
                    </div>

                    <div class="form-floating flex-fill ">
                        <input type="text"  class="form-control rounded-5" id="backupUser" name="backupUser"  placeholder required >
                        <label for="backupUser" class="form-label ">Username</label>
                    </div>

                    <div class="form-floating flex-fill ">
                        <input type="password"  class="form-control rounded-5" id="backupPass" name="backupPass"   placeholder required >
                        <label for="backupPass" class="form-label ">Passwort</label>
                    </div>
                </fieldset>

                <fieldset class="p-2 shadow rounded-5 d-flex flex-column gap-1 flex-fill ">
                    <legend class="text">Externe Laufwerke</legend>

                    <div class="p-2 shadow rounded-5 d-flex flex-column " id="external">
                        <label for="external" >Protokoll</label>

                        <div class="d-flex">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="externalSFTP" name="externalSFTP" value="option1">
                                <label type="form-check-label" for="externalSFTP">SFTP</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="externalFTP" name="externalFTP" value="option1">
                                <label type="form-check-label" for="externalFTP">FTP</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="externalSMB" name="externalSMB" value="option1">
                                <label type="form-check-label" for="externalSMB">SMB</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating flex-fill ">
                        <input type="text"  class="form-control rounded-5" id="externalIp" name="externalIp"   placeholder required >
                        <label for="externalIp" class="form-label ">IP-Adresse</label>
                    </div>

                    <div class="form-floating flex-fill ">
                        <input type="text"  class="form-control rounded-5" id="externalShare" name="externalShare"   placeholder required >
                        <label for="externalShare" class="form-label ">Freigabename</label>
                    </div>

                    <div class="form-floating flex-fill ">
                        <input type="text"  class="form-control rounded-5" id="externalUser" name="externalUSer"  placeholder required >
                        <label for="externalUser" class="form-label ">Username</label>
                    </div>

                    <div class="form-floating flex-fill ">
                        <input type="password"  class="form-control rounded-5" id="externalPass" name="externalPass"   placeholder required >
                        <label for="externalPass" class="form-label ">Passwort</label>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
    

<?php
    }