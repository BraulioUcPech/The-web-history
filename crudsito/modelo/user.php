<?php
class User
{
    public $id;
    public $name;
    public $age;
    public $country;
    public $position;
    public $wage;

    public function __construct($id, $name, $age, $country, $position, $wage)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
        $this->position = $position;
        $this->wage = $wage;
    }
}

?>