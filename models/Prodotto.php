<?php 

class Prodotto {
  protected $nome;
  protected $prezzo;
  protected $categoria;

  public function __construct($_nome, $_prezzo, $_categoria) {
      $this->nome = $_nome;
      $this->prezzo = $_prezzo;
      $this->categoria = $_categoria;
  }

  public function getNome() {

    return $this->nome;
  }

  public function getPrezzo() {

    return $this->prezzo;
  }

  public function getCategoria() {

    return $this->categoria;
  }


}



