<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Contato — Mesamor Home Decor</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/logo.png" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="stylesheet" href="/assets/css/produtos.css" />

</head>

<body>

  <?php
    include(__DIR__ . '/../components/header/header.php');
  ?>

  <!-- LINKS SUPERIORES -->
  <div class="links">
    <h3><a href="/pages/products.php">Conjuntos</a></h3>
    <h3><a href="/pages/dates.php">Datas Comemorativas</a></h3>
    <h3><a href="/pages/themes.php">Temáticos</a></h3>
  </div>

  <h1 class="category">CONJUNTOS</h1>

    <!-- PRODUTO 1 -->
    <div class="sets_natal">
      <div class="imagens_natal">
      <img class="slide" src="../assets/img/produtos/produto1__natal.jpg" alt="Produto 1" />
      <img class="slide" src="../assets/img/produtos/produto2_natal.jpg" alt="Produto 2" />
      <img class="slide" src="../assets/img/produtos/produto3__natal.jpg" alt="Produto 3" />
      <img class="slide" src="../assets/img/produtos/produto4__natal.jpg" alt="Produto 4" />
      </div>
    </div>

    <div class="descricao_natal">
      <h2 class="text_product">Conjunto Natal de Amor</h2>
      <a href="contact.php">
        <button class="botao_comprar">Faça seu Orçamento</button>
      </a>
    </div>

    <!-- PRODUTO 2 -->
    <div class="sets_natal">
      <div class="imagens_natal">
      <img class="slide" src="../assets/img/produtos/produto1__natal.jpg" alt="Produto 1" />
      <img class="slide" src="../assets/img/produtos/produto2_natal.jpg" alt="Produto 2" />
      <img class="slide" src="../assets/img/produtos/produto3__natal.jpg" alt="Produto 3" />
      <img class="slide" src="../assets/img/produtos/produto4__natal.jpg" alt="Produto 4" />
      </div>
    </div>

  <div class="descricao_natal">
    <h2 class="text_product">Conjunto Natal de Amor</h2>
      <a href="contact.php">
      <button class="botao_comprar">Faça seu Orçamento</button>
    </a>
  </div>

  <!-- PRODUTO 3 -->
  <div class="sets_natal">
    <div class="imagens_natal">
      <img class="slide" src="../assets/img/produtos/produto1__natal.jpg" alt="Produto 1" />
      <img class="slide" src="../assets/img/produtos/produto2_natal.jpg" alt="Produto 2" />
      <img class="slide" src="../assets/img/produtos/produto3__natal.jpg" alt="Produto 3" />
      <img class="slide" src="../assets/img/produtos/produto4__natal.jpg" alt="Produto 4" />
    </div>
  </div>

  <div class="descricao_natal">
    <h2 class="text_product">Conjunto Natal de Amor</h2>
      <a href="contact.php">
      <button class="botao_comprar">Faça seu Orçamento</button>
    </a>
  </div>

  <!-- FOOTER -->
  <?php
    include(__DIR__ . '/../components/footer/footer.php');
  ?>


</body>
</html>
