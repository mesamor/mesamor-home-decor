<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mesamor Home Decor</title>
  <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>


<body>
  <?php
    include('components/header/header.php');
?>

  <main id="hero-section">
    <div class="hero-content">
      <div class="card">

        <div class="card_photo">
          <img src="assets/img/photo.png" alt="Foto ilustrativa Mesamor">
        </div>

        <div class="box_text">
          <h1>BEM-VINDO</h1>
          <p>
            "Mais do que decorar mesas, celebramos conexões.
            Cada detalhe é pensado para transformar o ato de sentar-se à mesa em um ritual de afeto,
            união e memórias inesquecíveis com quem você ama."
          </p>
          <a href="pages/about.php">
            <button class="button_about">Saiba mais</button>
          </a>
        </div>

      </div>
    </div>
  </main>

  <section id="about">
    <a href="/pages/products.php">
      <button class="button_special">SEU MOMENTO ESPECIAL COMEÇA AQUI!</button>
    </a>
  </section>

    <?php
    include('components/footer/footer.php');
?>

</body>

</html>
