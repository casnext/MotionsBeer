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
  <title>Menu Principal</title>
  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
  <link rel="stylesheet" href="style.css" />
  <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
  <script src="script.js" defer></script>
</head>

<style>

  .mr-2 {}

  .card2 {
    transition: transform 0.3s ease;
  }

  .card2:hover {
    transform: scale(1.1);
  }

  .card2 {
    cursor: pointer;
  }

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

  .card2 {
    display: inline-block;
    width: 33%;
    background-color: rgba(251, 251, 253, .92);
    ;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .card2 img {
    width: 100%;
    border-radius: 5px;
  }

  .card2-content {
    margin-top: 10px;
  }

  .card2-content h2 {
    font-size: 18px;
    margin-bottom: 5px;
  }

  .card2-content p {
    font-size: 14px;
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
  </div>
  </nav>
  </div>
  </nav>

  <nav class="navbar flex">
    <i class="bx bx-menu" id="sidebar-open"></i>
  </nav>

  <!-- Site -->
  <div>
    <h1 class="display-2">Como fazer cerveja?</h1>
    <div class="card">
      <div class="col">
        <div class="row">
          <div class="col  m-2">
            <div class="card2" onclick="abrirModal()">
              <h1>Tadicional</h1>
              <h3>Cerveja pilsen</h3>
              <img src="/menu/images/card10.jpg" alt="Descrição da imagem">
            </div>
           
            <div class="card2" onclick="abrirModal1()">
              <h1>Artesanal</h1>
              <h3>Levedura de milho</h3>
              <img src="/menu/images/card11.jpg" alt="Descrição da imagem">
            </div>
            
            <div class="card2" onclick="abrirModal2()">
              <h1>Não alcoolica</h1>
              <h3>Fermentando o milho</h3>
              <img src="/menu/images/card12.jpg" alt="Descrição da imagem">
            </div>
          </div>
          
          <h2 class="mr-2">Selecione qual categoria de cerveja deseja aprender</h2>
        </div>
      </div>
    </div>

    <script>
      function redirecionarParaPagina(url) {
        window.location.href = url;
      }
    </script>

    <!--<div class="modal" id="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cerveja Tradicional</h5>
          <button type="button" class="close" onclick="fecharModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Cerveja pilsen</p>
          <p>Ingredientes: Água, malte de cevada, lúpulo e levedura</p>
          <p>Temperatura de fermentação: 10ºC</p>
          <p>Tempo de fermentação: 7 dias</p>
          <p>Tempo de maturação: 14 dias</p>
          <p>Tempo de envase: 1 dia</p>
          <p>Tempo de pasteurização: 1 dia</p>
          <p>Tempo de resfriamento: 1 dia</p>
          <p>Tempo de rotulagem: 1 dia</p>
          <p>Tempo de embalagem: 1 dia</p>
          <p>Tempo de armazenamento: 1 dia</p>
          <p>Tempo de distribuição: 1 dia</p>
          <p>Tempo de venda: 1 dia</p>
          <p>Tempo de consumo: 1 dia</p>
          <p>Tempo de descarte: 1 dia</p>
          <p>Tempo total: 32 dias</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="fecharModal()">Fechar</button>
          <button type="button" class="btn btn-primary" onclick="redirecionarParaPagina('/iniciar-producao/criar-cerveja.php')">Iniciar</button>
        </div>
      </div>-->

</body>

</html>