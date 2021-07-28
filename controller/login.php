<?php
    @session_start();
    require ("config.php");

    $codigo = $_POST['codigo'];
    $senha = $_POST['senha'];

    if($codigo == $passWord && $senha == $userName){
        echo "<script>
                window.location='../painel-upload/index.php?pag=upload'
            </script>";
    }else{
        @$_SESSION['msg'] = "<div class='alert alert-danger'>Usuário ou senha inválidos!</div>";
        header("Location: ../index.php");
    }
?>