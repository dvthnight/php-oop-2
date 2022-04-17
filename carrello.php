<?php

require_once __DIR__."/utente_non_registrato.php";
require_once __DIR__."/prodotto.php";

class Carrello{
    public $dati_utente;
    public $prodotti;
    public $totale_elementi;
    public $prezzo_totale;

    function __construct($_dati_utente,$_prodotti)
    {
        $this->dati_utente = $_dati_utente;
        $this->prodotti =$_prodotti;
        $this->CalcoloTotaleProdotti();
        $this->CalcoloPrezzoTotale();
    }

    public function CalcoloTotaleProdotti(){
        $this->totale_elementi = count($this->prodotti);
    }

    public function CalcoloPrezzoTotale(){
        foreach($this->prodotti as $el){
            $this->prezzo_totale += $el->prezzo;
        }
    }
}


