<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

    class WebConfiguration
    {
        private $website_configuration_logo;

        public function getWebsite_configuration_logo()
        {
                return $this->website_configuration_logo;
        }

      

        public static function loadLogo($pdo,$arg=0,$arg2=0)
        {
                try
                {
                        $id=1; // default immer 1;
                        $con = $pdo->connectToDb();
                        $query = 'SELECT * FROM `website_configuration` WHERE web_id =:web_id';

                        $stmt = $con->prepare($query);
                        $stmt->bindValue(':web_id',$id,PDO::PARAM_INT);
                        $stmt->execute();

                        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
                        $website_configuration = $stmt->fetch();

                        $base64_image =base64_encode($website_configuration-> getWebsite_configuration_logo());
                        $logo = "data:image/png;base64," . $base64_image;

                        session_start();
                                $_SESSION['Logo_Url'] = $logo;
                               
                        session_write_close();
                }
                catch (Exception $ex)
                {
                        echo 'Fehler beim laden des Logos';
                }
               
                return $logo;
        }

        public function setLogo($logo)
        {
               // TODO UPDATE LOGO TO DATABASE
        }


    }