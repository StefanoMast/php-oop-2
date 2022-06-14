<?php 
require_once__DIR__ . "./Products.php";

class Gadget extends Products
{
    public $material;
    public $color;

    function __construct($_brand, $_name, $_price, $_description, $_material)
    {
        parent:: __construct($_brand, $_name, $_price, $_description, $_material);
        $this->taste = $_material;
    }
}
?>