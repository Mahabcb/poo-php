<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Femme;
use App\Homme;

$john = (new Homme())
        ->setLastName('Doe');

$jane = (new Femme())
        ->setName('Jane')
        ->setLastName('Doe');

var_dump($john);