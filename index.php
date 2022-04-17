<?php
require_once __DIR__."/classi/carrello.php";
require_once __DIR__."/classi/ordine.php";
require_once __DIR__."/classi/prodotto.php";
require_once __DIR__."/classi/utente_non_registrato.php";
require_once __DIR__."/classi/utente_registrato.php";

// utente 1

echo "Utente 1";

$user1_nr = new Utente_non_registrato("Gino","Paolino",$carta1);

var_dump($user1_nr);

$carrello1 = new Carrello($user1_nr,false,[$cuccia_rossa,$pallina]);
var_dump($carrello1);


// utente 2

echo "Utente 2";

$user2_r = new Utente_registrato("Mario","Pasqualino",$carta2,"sdhHas23445","mario.pasqualino@gmail.com");
var_dump($user2_r);

$carrello2 = new Carrello($user2_r,true,[$crocchette_cani,$guinzaglio]);
var_dump($carrello2);


// utente 3

echo "Utente 3";

$user3_r = new Utente_registrato("Gianni","Cyano",$carta3,"dasadPouT0uhju%6","gianni.Cyano@hotmail.com");
var_dump($user3_r);

$carrello3 = new Carrello($user3_r,true,[$crocchette_gatti,$cuccia_rossa,$pallina,$guinzaglio]);
var_dump($carrello3);
