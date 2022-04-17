<?php
class Employee extends Utente_non_registrato{
    private $password;
    private $email;


    function __construct($_nome,$_cognome,$_metodo_pagamento,$_carrello,$_password,$_email)
    {
        parent::__construct($_nome,$_cognome,$_metodo_pagamento,$_carrello);
        $this->password = $_password;
        $this->email = $_email;
    }
}

// $ur1 = new Utente_registrato("Mario","Pasqualino");
// $ur2 = new Utente_registrato("Alfonso","Castling");
// $ur3 = new Utente_registrato("Francesco","Scotti");



// var_dump($ur1);
// echo $ur1->nome;