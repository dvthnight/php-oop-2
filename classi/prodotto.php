<?php
class Prodotto{
    public $nome;
    public $prezzo;
    public $descrizione;


    function __construct($_nome,$_prezzo,$_descrizione)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;
    }
}

$cuccia_rossa = new Prodotto("Cuccia per cani",22,"Cuccia rossa per cani di qualsiasi taglia");
$crocchette_cani = new Prodotto("Crocchette per cani",15,"pacco di crocchette per cani da 2kg");
$crocchette_gatti = new Prodotto("Crocchette per gatti",13,"pacco di crocchette per gatti da 1.5kg");
$guinzaglio = new Prodotto("Guinzaglio per cani",10,"Guinzaglio per cani di tutte le taglie");
$pallina = new Prodotto("Pallina",4,"Pallina per cani e gatti");

// var_dump($cuccia_rossa);
// var_dump($crocchette_cani);
// var_dump($pallina);
