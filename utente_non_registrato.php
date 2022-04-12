<?php
class Utente_non_registrato{
    public $nome;
    public $cognome;
    public $metodo_pagamento;

    function __construct($_nome,$_cognome,$_metodo_pagamento)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->metodo_pagamento = $_metodo_pagamento;
    }
}

$un1 = new Utente_non_registrato("Paolo","Panda","carta");
$un2 = new Utente_non_registrato("Rosario","Fiorello","carta");
$un = new Utente_non_registrato("Simone","Pretelli","carta");

var_dump($un1);