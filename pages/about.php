<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Sobre — Mesamor Home Decor</title>
  <link rel="icon" type="image/x-icon" href="/mesamor/assets/img/logo.png" />

  <link rel="stylesheet" href="/assets/css/styles.css" />
  <link rel="stylesheet" href="/assets/css/sobre.css" />
</head>

<body>

  <?php
    include(__DIR__ . '/../components/header/header.php');
  ?>

  <!-- CONTEÚDO PRINCIPAL -->
  <section class="sobre-section">
    <div class="content_about">
      <div class="sobre-img">
        <img src="/assets/img/photo2.png" alt="Mesa decorada Mesamor" />
      </div>

      <div class="sobre-texto">
        <h1>SOBRE MIM</h1>

        <p>
          Me chamo Paula, sou casada há 19 anos, mãe da Giovanna, do Lorenzo e da nossa mascote Bolota.
          Desde criança sempre amei preparar mesas, criando momentos especiais de afeto e acolhimento,
          sem imaginar que esse universo se chamava <strong>“mesa posta”.</strong>
        </p>

        <p>
          Sou formada em Publicidade e Propaganda e atuei por 10 anos na indústria farmacêutica,
          até pausar a carreira em 2008 para me dedicar à maternidade. Nesse período,
          também estudei design de interiores e fotografia, sempre com o apoio do meu marido.
        </p>

        <p>
          No início da pandemia, incentivada por uma amiga, decidi compartilhar essa paixão e nasceu
          a <strong>Mesamor</strong> — um projeto que une amor, beleza e propósito.
        </p>

        <p>
          Para mim, estar à mesa é muito mais do que estética:
          <strong>é resgatar valores, fortalecer laços e transformar encontros em memórias inesquecíveis.</strong>
        </p>
      </div>
    </div>

    <div class="family_photo">
      <img src="/assets/img/family_photo.png" alt="Foto da família Mesamor" />
      <a href="/pages/products.php">
        <button class="button_product">Veja meus Produtos</button>
      </a>
    </div>
  </section>

  <?php
    include(__DIR__ . '/../components/footer/footer.php');
  ?>

</body>
</html>
