<?php 

  require_once __DIR__ . '/Prodotto.php';

  class Gioco extends Prodotto {
    private $colore;

    public function __construct($_nome, $_prezzo, $_categoria) {
        parent::__construct($_nome, $_prezzo, $_categoria);
    }

    public function setColore($_colore){
      $this->colore = $_colore;
    }

    public function getColore(){
      return $this->colore;
    }
  }

