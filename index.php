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


$Royal_Canin_Mini_Adult = new product(30, 'Food', 'Dog');
$Almo_Nature_Holistic = new product(20, 'Food', 'Dog');
$Almo_Nature_Cat = new product(45, 'Food', 'Fish');
$Mangime_per_Pesci_Guppy = new product(15, 'Sit', 'Bird');
$Voliera_Wilma = new product(19, 'Filter', 'Fish');
$Cartucce_Filtranti = new product(29, 'Toy', 'Dog');
$Kong_Classic = new product(23, 'Toy', 'Cat');
$Topini_di_peluche = new product(23, 'Toy', 'Cat');










var_dump($Royal_Canin_Mini_Adult);


?>