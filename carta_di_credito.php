<?php
class Carta_di_credito{
    public $numero;
    public $cvv;
    public $data_scadenza;

    function __construct($_numero,$_cvv,$_data_scadenza)
    {
        $this->setNumeroCarta($_numero);
        $this->setCvv($_cvv);
        $this->setData($_data_scadenza);

    }

    public function setNumeroCarta($_numero){
        $this->numero = $_numero;
    }

    public function setCvv($_cvv){
        $this->cvv = $_cvv;
    }

    public function setData($_data_scadenza){
        $this->data_scadenza = $_data_scadenza;
    }

    public function getNumeroCarta(){
        return $this->numero;
    }

    public function getCvv(){
        return $this->cvv;
    }

    public function getData(){
        return $this->data_scadenza;
    }
}