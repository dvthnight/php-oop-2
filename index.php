<?php
require_once __DIR__."/carrello.php";
require_once __DIR__."/ordine.php";
require_once __DIR__."/prodotto.php";
require_once __DIR__."/utente_non_registrato.php";
require_once __DIR__."/utente_registrato.php";

// utente 1

$user1_nr = new Utente_non_registrato("Gino","Paolino",$carta1);

var_dump($user1_nr);

$carrello1 = new Carrello($user1_nr,[$cuccia_rossa,$pallina]);
var_dump($carrello1);
