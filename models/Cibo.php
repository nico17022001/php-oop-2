<?php 

  require_once __DIR__ . '/Prodotto.php';

  class Cibo extends Prodotto {
    private $scadenza;

    public function __construct($_nome, $_prezzo, $_categoria) {
        parent::__construct($_nome, $_prezzo, $_categoria);
    }

    public function setScadenza($_scadenza){
      $this->scadenza = $_scadenza;
    }

    public function getScadenza(){
      return $this->scadenza;
    }
  }
