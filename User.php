<?php

class Utente {

    public $name;
    public $email;
    public $isRegistered = false;
    public $creditCard= 2022
    // All'interno del carrello ci sono dei veicoli
    public $products = [];

    function __construct($_name, $_email) {
        $this->name = $_name;
        $this->email = $_email;
    }

    public function register()
    {
        $this->isRegistered = true;
    }

    public function valid()
    {
        if ($this->valid >= 2022) {
            $this->products = "ok, puoi effettuare l'acquisto";
        } else {
            $this->products = "carta non valida";
        }
    }

    // aggiunge un prodotto al carello, se disponibile
    // $_product -> un prodotto di tipo Veicolo
    // return true se aggiunge, false altrimenti
    function addProductToProducts($_product) {
        if ($_product->available) {
            $this->products[] = $_product;
            return true;
        } else {
            return false;
        }
    }

    function getTotalPrice() {
        $total_price = 0;
        foreach($this->products as $item) {
            $total_price += $item->price;
        }

        if ($this->isRegistered == true) {
            $total_price = $total_price - ($total_price * 20 / 100);
        }else {
            return $total_price;
        }

        function getTotalPrice() {
            $total_price = 0;
            foreach($this->products as $item) {
                $total_price += $item->price;
            }
            return $total_price;
        }
            
    }
}