<?php
declare(strict_types=1);

namespace App; 
use App\AbstractHuman;

class Femme extends AbstractHuman{

    public function __construct()
    {
        $this->gender = self::GENDER_FEMALE;
    }

}