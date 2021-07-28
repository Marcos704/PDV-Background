<?php
@session_start();
@$_SESSION['status'];

$pag = @$_GET["pag"];
    $menu1 = "upload";
    $menu2 = "coleta";
    $menu3 = "menu3";
    $menu4 = "menu4";
    $menu5 = "menu5";
    $menu6 = "menu6";
    $menu8 = "empresa";
    $menu13 ="status-coleta";
    $menu14 ="editar-Perfil"

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Loguin Screen">
    <meta name="author" content="EngCria">
    <title>PDV-Background</title>
    <!-- Favicon -->
    <link rel="icon" href="../vendor/assets/Logo.svg" type="image/png">
    <script src="https://kit.fontawesome.com/a943e04bb1.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../vendor/argon/nucleo/css/nucleo.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../vendor/argon/css/argon.css" type="text/css">
    <!-- Estilos Locais -->
    <link rel="styleshet" href="../vendor/styles/local_styles/styles.css" type="text/css" media="screen">
</head>

<body class="bg-default">
    
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="../vendor/assets/LogoPDVBackground.svg" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Rotinas</span>
                    </h6>
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pag=<?php echo $menu1 ?>">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Upload para PDV</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Funções</span>
                    </h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="../controller/logOut.php">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="nav-link-text">Sair</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <!-- Page content -->
        <div class="container-fluid pb-6 pt-6 overflow-auto">
            <?php if (@$pag == null) { 
                        @include_once("home.php"); 
                        
                        } else if (@$pag==$menu1) {
                        @include_once(@$menu1.".php");
                        
                        } else if (@$pag==$menu2) {
                        @include_once(@$menu2.".php");

                         } else if (@$pag==$menu3) {
                        include_once(@$menu3.".php");

                        } else if (@$pag==$menu4) {
                        @include_once(@$menu4.".php");

                        } else if (@$pag==$menu5) {
                        @include_once(@$menu5.".php");

                        } else if (@$pag==$menu6) {
                        @include_once(@$menu6.".php");
                
                        } else if(@$pag==$menu8){
                            @include_once(@$menu8.".php");
                        }else if(@$pag==$menu13){
                            @include_once(@$menu13.".php");
                        }else if(@$pag==$menu14){
                            @include_once(@$menu14.".php");
                        }else {
                        @include_once("home.php");
                        }
            ?>
            <!-- Footer -->
            <footer class="footer pt-0 bg-default">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="text-center  text-lg-left  text-muted">
                            &copy; 2020 Engcriasoftwares
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>


    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../vendor/argon/jquery/dist/jquery.min.js"></script>
    <script src="../vendor/argon/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/argon/js-cookie/js.cookie.js"></script>
    <script src="../vendor/argon/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../vendor/argon/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../vendor/argon/js/argon.js?v=1.2.0"></script>

</body>

</html>