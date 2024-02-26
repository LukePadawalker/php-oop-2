<?php

class product
{
    public $price;
    public function __construct($price)
    {
        $this->price = $price;
    }

}


class type extends product
{
    public $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
}

class animal extends type
{

    public $animal;
    public function __construct($animal)
    {
        $this->animal = $animal;
    }
}
?>