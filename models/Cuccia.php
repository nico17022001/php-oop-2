<?php 

  require_once __DIR__ . '/Prodotto.php';

  class Cuccia extends Prodotto {
    private $dimensioni;

    public function __construct($_nome, $_prezzo, $_categoria) {
        parent::__construct($_nome, $_prezzo, $_categoria);
    }

    public function setDimensioni($_dimensioni){
      $this->dimensioni = $_dimensioni;
    }

    public function getDimensioni(){
      return $this->dimensioni;
    }
  }
