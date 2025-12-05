<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Contato — Mesamor Home Decor</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />

<link rel="stylesheet" href="../assets/css/styles.css" />
<link rel="stylesheet" href="../assets/css/contato.css" />


</head>

<body>
  
  <?php
    include(__DIR__ . '/../components/header/header.php');
  ?>

  <!-- CONTEÚDO PRINCIPAL -->

  <div class="contato-texto">
    <h1>Entre em Contato</h1>
    <p>
      Deseja fazer um orçamento ou saber mais sobre nossos produtos?
      Entre em contato pelos canais abaixo. Ficaremos felizes em atender você!
    </p>
  </div>

  <div class="contato-canais">

    <div class="canal">
      <img src="../assets/img/whatsapp.png" alt="WhatsApp" />
      <div>
        <h3>WhatsApp</h3>
        <p class="space-p">(11) 98765-4321</p>
        <a href="https://wa.me/5511987654321" target="_blank" class="btn-contato">
          Falar no WhatsApp
        </a>
      </div>
    </div>

    <div class="canal">
      <img src="../assets/img/email.png" alt="email" />
      <div>
        <h3>E-mail</h3>
        <p class="space-p">contato@mesamor.com</p>
        <a href="mailto:contato@mesamor.com" class="btn-contato">
          Enviar E-mail
        </a>
      </div>
    </div>

    <div class="canal">
      <img src="../assets/img/instagram.png" alt="Instagram" />
      <div>
        <h3>Instagram</h3>
        <p class="space-p">@mesamor_home_decor</p>
        <a href="https://www.instagram.com/mesamor_home_decor" target="_blank" class="btn-contato">
          Acessar Perfil
        </a>
      </div>
    </div>

  </div>

  <!-- FOOTER -->
  <?php include(__DIR__ . '/../components/footer/footer.php'); ?>


</body>
</html>
