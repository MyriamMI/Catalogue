<?php
include __DIR__ . "/processCatalogue.php";
require_once __DIR__ . "/TypeDAO.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Catalogue</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h1 class="title">Catalogue des cours</h1>

  <div class="grid">
    <?php foreach ($produits as $p): ?>

      <div class="card">
        <div class="card-img">
          <img
            src="images/<?php echo $p->getImage(); ?>"
            alt="<?php echo $p->getLibelle(); ?>"
          >
        </div>

        <div class="card-body">
          <h2 class="card-title"><?php echo $p->getLibelle(); ?></h2>
          <p class="card-desc"><?php echo $p->getDescription(); ?></p>

          <div class="card-footer">
            <span class="type-label">
              <?php echo TypeDAO::findById($p->getIdType())->getLibelle(); ?>
            </span>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>

</body>
</html>
