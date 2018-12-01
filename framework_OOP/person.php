<?php

class Person {

    private $firstname;
    private $lastname;

    public function __construct($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFullname()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}