<?php

require_once __DIR__."/carta_di_credito.php";
class Utente_registrato{
    public $nome;
    public $cognome;
    public $metodo_pagamento;


    function __construct($_nome,$_cognome,$_metodo_pagamento)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->metodo_pagamento[] = $_metodo_pagamento;
    }
}

// $ur1 = new Utente_registrato("Mario","Pasqualino");
// $ur2 = new Utente_registrato("Alfonso","Castling");
// $ur3 = new Utente_registrato("Francesco","Scotti");



// var_dump($ur1);
// echo $ur1->nome;