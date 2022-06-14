<?php 
require_once__DIR__ . "./Products.php";

class Cosmetics extends Products
{
    public $flavour;
    public $size;

    function __construct($_brand, $_name, $_price, $_description, $_size)
    {
        parent:: __construct($_brand, $_name, $_price, $_description, $_size);
        $this->taste = $_size;
    }
}
?>