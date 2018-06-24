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
          <a class="nav-link" href="?url=Auth/login">Ingresar</a>
        </li>
         <li class="nav-item text-nowrap">
          <a class="nav-link" href="?url=portada">Nuevo Usuario</a>
        </li>
      </ul>
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