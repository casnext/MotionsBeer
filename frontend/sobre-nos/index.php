<?php
session_start();
if (!isset($_SESSION["usuario"])) {
  header("location:/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre nós</title>
  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
  <link rel="stylesheet" href="style.css" />
  <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
  <script src="script.js" defer></script>
</head>

<style>
  /* Estilos para o card */
  .card-custom {
    width: 200px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .card-custom {
    display: inline-block;
    width: 32.7%;
    height: 518px;
    padding: 5px 10px;
    background-color: #f2f2f2;
    color: #333;
    text-decoration: none;
    border-radius: 5px;
  }

</style>

<body>

  <!-- BARRA DE MENU -->
  <nav class="sidebar hoverable close">
    <div class="logo_items flex">
      <span class="nav_image">
        <img src="images/logo.png" alt="logo_img" />
      </span>
      <span class="logo_name">Motions'Beer</span>
      <i class="bx bx-lock-open-alt" id="lock-icon" title="Unlock Sidebar"></i>
      <i class="bx bx-x" id="sidebar-close"></i>
    </div>

    <div class="menu_container">
      <div class="menu_items">
        <li class="item">
          <a href="/iniciar-producao/" class="link flex">
            <i class='bx bx-play-circle'></i>
            <span>Criar Cerveja</span>
          </a>
        </li>

        <li class="item">
          <a href="/pesquisa-producao/" class="link flex">
            <i class='bx bx-select-multiple'></i>
            <span>Acompanhar Processo</span>
          </a>
        </li>

        <li class="item">
          <a href="/ordem-producao/" class="link flex">
            <i class='bx bx-barcode'></i>
            <span>Ordem Produção</span>
          </a>
        </li>

        <li class="item">
          <a href="/controle-de-producao/" class="link flex">
            <i class='bx bxs-package'></i>
            <span>Controle de Estoque</span>
          </a>
        </li>

        <li class="item">
          <a href="/dashboard/" class="link flex">
            <i class='bx bxs-pie-chart-alt-2'></i>
            <span>Indicadores</span>
          </a>
        </li>

        <li class="item">
          <a href="/vendas/" class="link flex">
            <i class='bx bx-shopping-bag'></i>
            <span>Vendas</span>
          </a>
        </li>

        <li class="item">
          <a href="/clientes/" class="link flex">
            <i class='bx bx-user'></i>
            <span>Clientes</span>
          </a>
        </li>

        <li class="item">
          <a href="/funcionarios/" class="link flex">
            <i class='bx bxs-id-card'></i>
            <span>Colaboradores</span>
          </a>
        </li>

        <li class="item">
          <a href="/logout.php" class="link flex">
            <i class='bx bx-log-out'></i>
            <span>Logout</span>
          </a>
        </li>

      </div>
      <!-- RODAPE USUARIO -->
      <div class="sidebar_profile flex">
        <span class="nav_image">
          <img src="images/profile.png" alt="logo_img" />
        </span>
        <div class="data_text">
          <span class="email"><?php echo $_SESSION["usuario"]["email"]?></span>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar flex">
    <i class="bx bx-menu" id="sidebar-open"></i>
  </nav>

  <!-- Site -->
  <div>
    <h1 class="display-2">Sobre nós</h1>
    <div class="card">
        <h2>Quem somos</h2>
        <p>Somos a Motions'Beer, uma cervejaria artesanal dedicada a produzir as melhores cervejas para os nossos clientes.</p>
        <h2>Nossa Missão</h2>
        <p>Nossa missão é proporcionar experiências únicas aos apreciadores de cervejas, combinando tradição, qualidade e inovação em cada gole.</p>
        <h2>Nossa Visão</h2>
        <p>Buscamos ser reconhecidos como referência no mercado cervejeiro, destacando-nos pela excelência de nossos produtos e pelo compromisso com a satisfação dos clientes.</p>
        <h2>Nossos Valores</h2>
        <ul>
          <li>Qualidade: Nosso compromisso é entregar cervejas de alta qualidade em cada produção.</li>
          <li>Inovação: Buscamos constantemente inovar em nossos processos e sabores, surpreendendo nossos clientes.</li>
          <li>Sustentabilidade: Valorizamos práticas sustentáveis em nossa produção, minimizando nosso impacto ambiental.</li>
          <li>Paixão: Somos apaixonados pelo que fazemos e isso se reflete em cada cerveja que produzimos.</li>
          <li>Atendimento: Nosso objetivo é proporcionar um atendimento excepcional, sempre buscando superar as expectativas dos nossos clientes.</li>
        </ul>
    </div>
</body>
</html>