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
    <title>Controle de Produção</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
    <link rel="stylesheet" href="style.css" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" /> -->

    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
    <script src="script.js" defer></script>
  </head>

  <style>
   /* Estilo para centralizar o conteúdo */
   body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    /* Estilo para a tabela */
    .table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
    }

    .table th,
    .table td {
      border: 1px solid #ccc;
      padding: 8px;
    }

    .table th {
      background-color: #bcbcbc;
    }

    /* Estilo para o card */
    .card {
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Estilo para a paginação */
    .pagination {
      margin-top: 20px;
    }

    .pagination ul {
      list-style-type: none;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .pagination li {
      margin: 0 5px;
    }

    .pagination a,
    .pagination span {
      display: inline-block;
      padding: 5px 10px;
      background-color: #f2f2f2;
      color: #333;
      text-decoration: none;
      border-radius: 5px;
    }

    .pagination a:hover {
      background-color: #ddd;
    }

    .pagination .active {
      background-color: #666;
      color: #fff;
    }

    /* Estilo para o botão */
    .button-custom {
      padding: 10px 20px;
      background-color: #089400;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    /* Estilo para o contêiner do título e do botão */
    .title-container {
      display: flex;
      align-items: center;
    }

    .title-container h2 {
      margin-right: 20px;
    }

    .container-fluid{
      width: 100%

    }

    .form-label {
    font-weight: bold;
  }

  .form {
    width: 900px;
    padding: 8px;
    border: 1px solid #ccc;
    background: #616161;
    border-radius: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

  .form-control {
    width: 500px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }

  .form-control1 {
    width: 500px;
    height: 100px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
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
              <i class='bx bx-barcode' ></i>
              <span>Ordem Produção</span>
            </a>
          </li>

          <li class="item">
            <a href="/controle-de-producao/" class="link flex">
              <i class='bx bxs-package' ></i>
              <span>Controle de Estoque</span>
            </a>
          </li>

          <li class="item">
            <a href="/dashboard/" class="link flex">
              <i class='bx bxs-pie-chart-alt-2' ></i>
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
    <!-- Cabeçalho -->
    <div>
      <h1 class="display-2">Controle de Clientes</h1>
      <div class="card">
        <div class="container">
          <div class="row">
            <div class="col  m-2">
              <h2>Cadastro de Clientes</h2>
            </div>
              <div class="mb-5">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do Cliente">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu CPF/CNPJ... 00000000000">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="CEP-00000-000">
              </div>
              <div class="mb-5">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telefone (xx) xxxx-xxxx">
              </div>
              <div class="mb-5">
                <input type="text" class="form-control1" id="exampleFormControlInput1" placeholder="Observação">
              </div>
          </div>
        </div>
        <!-- Conteúdo d -->
        <div class="col m-2">
          <button class="button-custom">Cadastrar</button>
        </div>
      </div>
    </div>
  </body>
</html>
