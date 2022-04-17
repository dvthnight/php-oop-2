<?php

require_once __DIR__."/carta_di_credito.php";
class Utente_non_registrato{
    public $nome;
    public $cognome;
    public $metodo_pagamento;
    public $carrello;

    function __construct($_nome,$_cognome,$_metodo_pagamento,$_carrello)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->metodo_pagamento[] = $_metodo_pagamento;
        $this->carrello[] = $_carrello;
    }
}

$carta1 = new Carta_di_credito(1132392832,"12/25",213);
var_dump($carta1);

$carta2 = new Carta_di_credito(5473894002938,"03/24",345);
var_dump($carta2);

$carta3 = new Carta_di_credito(5473894002938,"09/23",985);
var_dump($carta3);

// $un1 = new Utente_non_registrato("Paolo","Panda","carta");
// $un2 = new Utente_non_registrato("Rosario","Fiorello","carta");
// $un = new Utente_non_registrato("Simone","Pretelli","carta");

// var_dump($un1);