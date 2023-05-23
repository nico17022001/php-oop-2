<?php 
  include 'models/Cibo.php';
  include 'models/Cuccia.php';
  include 'models/Gioco.php';

  $prodotti = [];

  $prodotti[] = new Prodotto("Guinzaglio", 10.99, "Cani");
  $prodotti[] = new Cibo("Croccantini", 5.99, "Gatti");
  $prodotti[] = new Gioco("Palla", 7.99, "Cani");
  $prodotti[] = new Cuccia("Cuccia Morbida", 39.99, "Pesci");
  $prodotti[] = new Cuccia("Cuccia di Legno", 29.99, "Cani");

  $prodotti[1]->setScadenza("10/10/23");
  $prodotti[2]->setColore("giallo");
  $prodotti[3]->setDimensioni("120cm per 120cm");
  $prodotti[4]->setDimensioni("125cm per 125cm");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <title>Pet Shop</title>
</head>

<body>

    <div class="ndcontainer">
    <?php foreach ($prodotti as $prodotto) { ?> 
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Prodotto: <?php echo 'nome: ' . $prodotto->getNome(); ?></h5>
          <p class="card-text"><?php echo 'prezzo: ' . $prodotto->getPrezzo(); ?></p>
          <p class="card-text"> <?php echo 'categoria: ' . $prodotto->getCategoria(); ?></p>
          <?php if (get_class($prodotto) == 'Cibo') echo '<p class="card-text"> con scadenza </p>' . $prodotto->getScadenza(); ?>
          <?php if (get_class($prodotto) == 'Gioco') echo ' <p class="card-text"> colore </p> ' . $prodotto->getColore(); ?>
          <?php if (get_class($prodotto) == 'Cuccia') echo ' <p class="card-text"> dimensioni </p> ' . $prodotto->getDimensioni(); ?>
        </div>
        <?php } ?>
      </div>
    </div>
    
  
    

</body>
</html>