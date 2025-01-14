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
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <script src="script.js" defer></script>
  </head>

  <style>
  .card-custom {
  display: inline-block;
  width: 24.7%;
  height: 120px;
  padding: 5px 10px;
  background-color: #f2f2f2;
  color: #333;
  text-decoration: none;
  border-radius: 5px;
  }

  #chartdiv {
  width: 100%;
  height: 420px;
  }

  body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  }

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

  .card {
  width: 1200px;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

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

  .button {
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  }

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
      <h1 class="display-2">Controle Informativo</h1>
      <div class="card">
        <div class="container">
          <div class="row">
            <h2>Unidades produzidas</h2>
            <div class="col  m-2">
              <div class="card-custom">
                <h1>Artesanal</h1>
                <h3>20 unidades</h3>
              </div>
              <div class="card-custom">
                <h1>Tradicional</h1>
                <h3>20 unidades</h3>
              </div>
              <div class="card-custom">
                <h1> Sem Álcool</h1>
                <h3>20 unidades</h3>
              </div>
              <div class="card-custom">
                <h1>Total Produzido</h1>
                <h3>60 unidades</h3>
              </div>
            </div>
            <div class="col-m2">
              <h2>Produzido no ano</h2>
              <script>
                am5.ready(function() {
                
                // Create root element
                // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                var root = am5.Root.new("chartdiv");
                
                // Set themes
                // https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                  am5themes_Animated.new(root)
                ]);
                
                // Create chart
                // https://www.amcharts.com/docs/v5/charts/xy-chart/
                var chart = root.container.children.push(am5xy.XYChart.new(root, {
                  panX: true,
                  panY: true,
                  wheelX: "panX",
                  wheelY: "zoomX",
                  pinchZoomX: true
                }));
                
                // Add cursor
                // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
                var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
                cursor.lineY.set("visible", false);
                
                
                // Create axes
                // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
                xRenderer.labels.template.setAll({
                  rotation: -90,
                  centerY: am5.p50,
                  centerX: am5.p100,
                  paddingRight: 15
                });
                
                xRenderer.grid.template.setAll({
                  location: 1
                })
                
                var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                  maxDeviation: 0.3,
                  categoryField: "country",
                  renderer: xRenderer,
                  tooltip: am5.Tooltip.new(root, {})
                }));
                
                var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                  maxDeviation: 0.3,
                  renderer: am5xy.AxisRendererY.new(root, {
                    strokeOpacity: 0.1
                  })
                }));
                
                
                // Create series
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                  name: "Series 1",
                  xAxis: xAxis,
                  yAxis: yAxis,
                  valueYField: "value",
                  sequencedInterpolation: true,
                  categoryXField: "country",
                  tooltip: am5.Tooltip.new(root, {
                    labelText: "{valueY}"
                  })
                }));
                
                series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5, strokeOpacity: 0 });
                series.columns.template.adapters.add("fill", function(fill, target) {
                  return chart.get("colors").getIndex(series.columns.indexOf(target));
                });
                
                series.columns.template.adapters.add("stroke", function(stroke, target) {
                  return chart.get("colors").getIndex(series.columns.indexOf(target));
                });
                
                
                // Set data
                var data = [{
                  country: "Janeiro",
                  value: 1882
                }, {
                  country: "Fevereiro",
                  value: 1809
                }, {
                  country: "Março",
                  value: 1322
                }, {
                  country: "Abril",
                  value: 1122
                }, {
                  country: "Maio",
                  value: 1114
                }, {
                  country: "Junho",
                  value: 984
                }, {
                  country: "Julho",
                  value: 711
                }, {
                  country: "Agosto",
                  value: 665
                }, {
                  country: "Setembro",
                  value: 443
                }, {
                  country: "Outubro",
                  value: 441
                }, {
                  country: "Novembro",
                  value: 441
                }, {
                  country: "Dezembro",
                  value: 441
                }];
                
                xAxis.data.setAll(data);
                series.data.setAll(data);
                
                
                // Make stuff animate on load
                // https://www.amcharts.com/docs/v5/concepts/animations/
                series.appear(1000);
                chart.appear(1000, 100);
                
                }); // end am5.ready()
                </script>
                
                <!-- HTML -->
                <div id="chartdiv"></div>
            </div>
          </div>
        </div>
  </body>
</html>
