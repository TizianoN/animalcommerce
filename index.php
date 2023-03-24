<?php 

include __DIR__ . "/Data/products.php";

// try {
//   // * codice da provare ad eseguire
//   $rand_num = rand(0, 1);
//   if($rand_num) throw new Exception('La mia eccezione');

// } catch(Exception $error) {
//   // * codice da eseguire se è stata lanciata (throw) un'Exception
//   $error_message = $error->getMessage();
//   include __DIR__ . "/error_page.php";
//   exit;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . "/Template/head.php"; ?>
</head>

<body>
  <?php include __DIR__ . "/Template/navbar.php"; ?>

  <div class="container pt-5 mt-5">
    <h4 class="my-3">
      Prodotti per i cani
    </h4>
    <div class="row row-cols-3 g-3">
      <?php foreach($products_dog as $product) : ?>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <i class="<?= $product->getCategory()->icon ?>"></i>
              <?= $product->getName() ?>
              <small class="text-muted">
                <?= $product->getTextClassname() ?>
              </small>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
              <?php if($product instanceof ProductBed || $product instanceof ProductFood) : ?>
              <span><?= $product->getFullWeight() ?></span>
              <?php endif; ?>

              <?php if($product instanceof ProductBed || $product instanceof ProductToy) : ?>
              <span><?= $product->material ?></span>
              <?php endif; ?>

              <?php if($product instanceof ProductFood) : ?>
              <span><?= $product->type ?></span>
              <?php endif; ?>
            </h6>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, quasi.
            </p>
            <strong>€ <?= number_format($product->getPrice(), 2) ?></strong>
            <br />
            <a href="#" class="card-link">Aggiungi al carrello</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <h4 class="my-3">
      Prodotti per i gatti
    </h4>
    <div class="row row-cols-3 g-3">
      <?php foreach($products_cat as $product) : ?>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <i class="<?= $product->getCategory()->icon ?>"></i>
              <?= $product->getName() ?>
              <small class="text-muted">
                <?= $product->getTextClassname() ?>
              </small>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
              <?php if($product instanceof ProductBed || $product instanceof ProductFood) : ?>
              <span><?= $product->getFullWeight() ?></span>
              <?php endif; ?>

              <?php if($product instanceof ProductBed || $product instanceof ProductToy) : ?>
              <span><?= $product->material ?></span>
              <?php endif; ?>

              <?php if($product instanceof ProductFood) : ?>
              <span><?= $product->type ?></span>
              <?php endif; ?>
            </h6>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, quasi.
            </p>
            <strong>€ <?= number_format($product->getPrice(), 2) ?></strong>
            <br />
            <a href="#" class="card-link">Aggiungi al carrello</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>