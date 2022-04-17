<?php

class Carrello{
    public $dati_utente;
    public $prodotti;
    public $totale_elementi;
    public $prezzo_totale;
    public $registrato;

    function __construct($_dati_utente,$_registrato,$_prodotti)
    {
        $this->dati_utente = $_dati_utente;
        $this->registrato = $_registrato;
        $this->prodotti =$_prodotti;
        $this->CalcoloTotaleProdotti();
        $this->CalcoloPrezzoTotale();
    }

    public function CalcoloTotaleProdotti(){
        $this->totale_elementi = count($this->prodotti);
    }

    public function CalcoloPrezzoTotale(){
        $totale_senza_sconto = 0;
        foreach($this->prodotti as $el){
            $totale_senza_sconto += $el->prezzo;
        };
        if($this->registrato == true){
            $this->prezzo_totale = $totale_senza_sconto - ($totale_senza_sconto * 0.20);
        }else{
            $this->prezzo_totale = $totale_senza_sconto;
        }
    }
}


