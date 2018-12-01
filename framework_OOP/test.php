<?php
include 'person.php';

$person = new Person('Joey','Schmitz');

echo 'Hallo ' . $person->getFullname() . "\n\n";
