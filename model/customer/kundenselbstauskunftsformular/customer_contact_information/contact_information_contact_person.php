<?php
/**
 * @author      Ümit Yildirim <hopes61@icloud.com>
 * @copyright   Copyright (c) 2026 Ümit Yildirim. Alle Rechte vorbehalten.
 * @license     Diese Datei darf nicht ohne Zustimmung des Autors weitergegeben oder verändert werden.
 */

class Contact_information_contact_person extends DbModel
{
    protected   $contact_information_contact_person_id,
                $contact_information_contact_person_gender,
                $contact_information_contact_person_name,
                $contact_information_contact_person_surname,
                $contact_information_id;

    public function getContact_information_contact_person_id()
    {
        return $this->contact_information_contact_person_id;
    }

    public function setContact_information_contact_person_id($contact_information_contact_person_id)
    {
        $this->contact_information_contact_person_id = $contact_information_contact_person_id;
        return $this;
    }

    public function getContact_information_contact_person_gender()
    {
        return $this->contact_information_contact_person_gender;
    }

    public function setContact_information_contact_person_gender($contact_information_contact_person_gender)
    {
        $this->contact_information_contact_person_gender = $contact_information_contact_person_gender;
        return $this;
    }

    public function getContact_information_contact_person_name()
    {
        return $this->contact_information_contact_person_name;
    }

    public function setContact_information_contact_person_name($contact_information_contact_person_name)
    {
        $this->contact_information_contact_person_name = $contact_information_contact_person_name;
        return $this;
    }

    public function getContact_information_contact_person_surname()
    {
        return $this->contact_information_contact_person_surname;
    }

    public function setContact_information_contact_person_surname($contact_information_contact_person_surname)
    {
        $this->contact_information_contact_person_surname = $contact_information_contact_person_surname;
        return $this;
    }

    public function getContact_information_id()
    {
        return $this->contact_information_id;
    }
    public function setContact_information_id($contact_information_id)
    {
        $this->contact_information_id = $contact_information_id;
        return $this;
    }
}