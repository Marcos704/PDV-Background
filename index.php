<?php
@session_start();
@$_SESSION['status'];


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
    <link rel="icon" href="vendor/assets/Logo.svg" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="vendor/argon/nucleo/css/nucleo.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="vendor/argon/css/argon.css" type="text/css">
    <!-- Estilos Locais -->
    <link rel="styleshet" href="vendor/styles/local_styles/styles.css" type="text/css" media="screen">
</head>

<body class="bg-default">

    <div class="inputLogin">

        <!-- Main content -->
        <div class="main-content">
            <div>
                <!-- Header -->
                <div class="header bg-variant py-7 py-lg-8 pt-lg-9">
                </div>
                <!-- Page content -->
                <div class="container mt--8 pb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-7">
                            <div class="card bg-secondary border-0 mb-0">
                                <div class="card-header bg-transparent pb-5">
                                    <div class="container text-center col-12">
                                        <a href="#">
                                            <img src="vendor/assets/LogoPDVBackground.svg" width="250">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div id="alert"></div>
                                    <div class="text-muted text-center mt-2 mb-3">
                                        <h3>Login na Plataforma</h3>
                                        <?php
                                            if(isset($_SESSION['msg'])!=null){
                                                echo $_SESSION['msg'];
                                                unset($_SESSION['msg']);
                                            }
                                        ?>
                                    </div>
                                    <br>
                                    <form action="controller/login.php" method="post">
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-single-02"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Código" type="text" id="codigo"
                                                    name="codigo" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Senha" type="password"
                                                    id="senha" name="senha" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-md-4 col-sm-4">
                                                <?php
                                            if(isset($_SESSION['recuperar'])!=null){
                                                echo $_SESSION['recuperar'];
                                                unset($_SESSION['recuperar']);
                                            }
                                            ?>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary my-2">Entrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">EngCriaSoftwares</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Time EngCria</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Sobre nós</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="vendor/argon/jquery/dist/jquery.min.js"></script>
    <script src="vendor/argon/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/argon/js-cookie/js.cookie.js"></script>
    <script src="vendor/argon/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="vendor/argon/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="vendor/argon/js/argon.js?v=1.2.0"></script>

</body>

</html>