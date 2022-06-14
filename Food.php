<?php 
require_once__DIR__ . "./Products.php";

class Food extends Products
{
    public $material;
    public $taste;

    function __construct($_brand, $_name, $_price, $_description, $_taste)
    {
        parent:: __construct($_brand, $_name, $_price, $_description, $_taste);
        $this->taste = $_taste;
    }
}
?>