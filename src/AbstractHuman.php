<?php

namespace App; 

abstract class AbstractHuman{

    const GENDER_MALE = 'Homme';
    const GENDER_FEMALE = 'Femme';

    protected string $name;
    protected string $lastname;
    protected string $gender;

    public function getName() : ?string
    {
        return $this->name;
    }

    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }

    public function getLastName() : ?string
    {
        return $this->lastname;
    }

    public function setLastName($lastname) : self
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function getGender() : ?string
    {
        return $this->gender;
    }
}