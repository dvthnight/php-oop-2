<?php
class Carrello{
    public $prodotti;
    public $totale_prodotti;
    public $prezzo_totale;

    function __construct($_prodotti,$_totale_prodotti,$_prezzo_totale)
    {
        $this->prodotto = $_prodotti;
        $this->totale_prodotti = $_totale_prodotti;
        $this->prezzo_totale = $_prezzo_totale;
        
    }
}


