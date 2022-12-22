<?php

namespace app;

class calculateAgeClass
{
    public $age;
    function provide_birth_year($yearOfBirth)
    {
        $this->age = 2022 - $yearOfBirth;
    }
    function get_age()
    {
        return $this->age;
    }
}
