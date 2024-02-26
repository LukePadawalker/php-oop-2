<?php

class product
{
    public $price;
    public $type;
    public $animal;
    public function __construct($price, $type, $animal)
    {
        $this->price = $price;
        $this->type = $type;
        $this->animal = $animal;
    }

}


class type extends product
{
    public $type;
    public function setType($type)
    {
        $this->type = $type;
    }
}

class animal extends type
{

    public $animal;
    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }
}


$Royal_Canin_Mini_Adult = new product(30, 'Food', 'Animal');


?>