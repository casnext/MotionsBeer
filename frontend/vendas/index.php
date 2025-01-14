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
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
    <script src="script.js" defer></script>
  </head>

  <style>
    .table th, .table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

.table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
    background-color: #ffffff;
}

    .card-custom {
    width: 200px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

    <nav class="navbar flex">
      <i class="bx bx-menu" id="sidebar-open"></i>
      <input type="text" placeholder="Buscar..." class="search_box" />
      <div>
        <button class="button">Pesquisar</button>
      </div>
    </nav>
    
    <!-- Site -->
    <div>
      <h1 class="display-2">Controle de Vendas</h1>
      <div class="card">
        <div class="col">
          <div class="row">
                <h2 class="mr-2">Tabela de Vendas</h2>
          </div>
        </div>
        <div class="col m-3">
          <button class="button" onclick="window.location.href='/cervejaria/cadastro-de-pedidos/'">Cadastrar +</button>
        </div>
        </div>
      
      
        <table class="table">
          <thead>
            <tr>
              <th>Status</th>
              <th>Nº venda</th>
              <th>Quantidade</th>
              <th>Cliente</th>
              <th>Tipo</th>
              <th>Valor</th>
              <th>Previsão de entrega</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Dado 1</td>
              <td>Dado 2</td>
              <td>Dado 3</td>
              <td>Dado 4</td>
              <td>Dado 5</td>
              <td>Dado 6</td>
              <td>Dado 7</td>
            </tr>
          </tbody>
        </table>
        <div class="pagination">
          <ul>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
          </ul>
        </div>
      </div>
    </div>
  
    <table class="table">
      <!-- Conteúdo da tabela -->
    </table>

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.js"></script>

    <script>
      function filtrarTabela() {
        var input, filtro, tabela, linhasTabela, coluna, textoValor;
        input = document.getElementById("pesquisa");
        filtro = input.value.toUpperCase();
        tabela = document.getElementById("tabela-bordados");
        linhasTabela = tabela.getElementsByTagName("tr");
        for (var i = 0; i < linhasTabela.length; i++) {
          coluna = linhasTabela[i].getElementsByTagName("td")[4]; // o número 4 é o índice da coluna "Op"
          if (coluna) {
            textoValor = coluna.textContent || coluna.innerText;
            if (textoValor.toUpperCase().indexOf(filtro) > -1) {
              linhasTabela[i].style.display = "";
            } else {
              linhasTabela[i].style.display = "none";
            }
          }
        }
      }
    </script>

  </body>
</html>
