<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>German Gonzalez</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
     <script src="js/jquery-3.3.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>

  </head>

   <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="?url=portada">Examen </a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Buscar">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="?url=portada">Salir</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="?url=cliente_nuevo">
                  <span data-feather="home"></span>
                  Registrar Cliente <span class="sr-only"> </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="?url=Views/clientes_listados">
                  <span data-feather="home"></span>
                  Listar Cliente <span class="sr-only"> </span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link active" href="?url=responsable_nuevo">
                  <span data-feather="home"></span>
                  Registrar Responsable <span class="sr-only"> </span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link active" href="?url=Views/responsable_listado">
                  <span data-feather="home"></span>
                  Listar Responsable <span class="sr-only"> </span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link active" href="?url=sucursal_nuevo">
                  <span data-feather="home"></span>
                  Registrar Sucursal <span class="sr-only"> </span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link active" href="?url=tipogas_nuevo">
                  <span data-feather="home"></span>
                  Registrar Tipo de Gas <span class="sr-only"> </span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link active" href="?url=Views/tipo_gas_listado">
                  <span data-feather="home"></span>
                  Listar Tipo de Gas <span class="sr-only"> </span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link active" href="?url=salida_nuevo">
                  <span data-feather="home"></span>
                  Registrar Salida <span class="sr-only"> </span>
                </a>
              </li>
                <li class="nav-item">
                <a class="nav-link active" href="?url=Views/vista_salidas">
                  <span data-feather="home"></span>
                  Listar Salida <span class="sr-only"> </span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <?php
            if ($_GET){
              if($_GET["url"]!=null){
                include($_GET["url"].".php");
              }
            }else{
              include("portada.php");
            }
          ?>
        </main>
      </div>
    </div>
  </body>
</html>