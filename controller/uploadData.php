<?php
require ("../controller/config.php");
@session_start();
//Verificando se existe o envio de arquivos
if(isset($_POST['enviar-data'])){
    $extensao_permitida = "jpg";
    $extensao01 = pathinfo($_FILES['tela01']['name'], PATHINFO_EXTENSION); //Obtendo o tipo de arquivo enviado
    $extensao02 = pathinfo($_FILES['tela02']['name'], PATHINFO_EXTENSION); //Obtendo o tipo de arquivo enviado
    $extensao03 = pathinfo($_FILES['tela03']['name'], PATHINFO_EXTENSION); //Obtendo o tipo de arquivo enviado
    
    $nome_tela01 = "tela00".".$extensao01"; //Renomeando os arquivos de tela
    $nome_tela02 = "tela01".".$extensao02"; //Renomeando os arquivos de tela
    $nome_tela03 = "tela02".".$extensao03"; //Renomeando os arquivos de tela
    //var_dump($_FILES);

    if($extensao01 == $extensao_permitida && $extensao02 == $extensao_permitida && $extensao03 == $extensao_permitida){//Verificando se a extensão é válida
        $cach_tela01 = $_FILES['tela01']['tmp_name']; // Arquivo temporario
        $cach_tela02 = $_FILES['tela02']['tmp_name']; // Arquivo temporario
        $cach_tela03 = $_FILES['tela03']['tmp_name']; // Arquivo temporario

        $exits_tela01 = $caminho_arquivos_upload."tela00.jpg"; //String de verificacao de existencia de arquivo com nome especifico
        $exits_tela02 = $caminho_arquivos_upload."tela01.jpg"; //String de verificacao de existencia de arquivo com nome especifico
        $exits_tela03 = $caminho_arquivos_upload."tela02.jpg"; //String de verificacao de existencia de arquivo com nome especifico
        
        if(file_exists($exits_tela01) && file_exists($exits_tela02) && file_exists($exits_tela03)){
            if(move_uploaded_file($cach_tela01, $caminho_arquivos_upload.$nome_tela01) && move_uploaded_file($cach_tela02, $caminho_arquivos_upload.$nome_tela02) && move_uploaded_file($cach_tela03, $caminho_arquivos_upload.$nome_tela03) ){
                if(copy($exits_tela01, $caminho_filial01.$nome_tela01) && copy($exits_tela02, $caminho_filial01.$nome_tela02) && copy($exits_tela03, $caminho_filial01.$nome_tela03) ){
                    if(copy($exits_tela01, $caminho_filial03.$nome_tela01) && copy($exits_tela02, $caminho_filial03.$nome_tela02) && copy($exits_tela03, $caminho_filial03.$nome_tela03)){
                        $_SESSION['status01'] = "<span class='text-success'>Atualizado!</span>";
                        $_SESSION['status02'] = "<span class='text-success'>Atualizado!</span>";
                        $_SESSION['alert'] = "
                        <div class='alert alert-success text-center' role='alert'>
                        <span class='alert-icon'><i class='fas fa-paper-plane'></i></span><br>
                        <span class='alert-text'><strong>Imagens Enviadas!</strong></span><br><span class='alert-text'><strong>Aviso.:</strong> Solicitar para que puxem cargas nos PDVs</span>
                        </div>
                        ";
                        echo $_SESSION['status01'];
                        echo $_SESSION['status02'];
                        echo $_SESSION['alert'];
                        header("Location: ../painel-upload/index.php?pag=upload");
                    }else{
                        $_SESSION['status01'] = "<span class='text-success'>Atualizado!</span>";
                        $_SESSION['status02'] = "<span class='text-danger'>Erro!</span>";
                        echo $_SESSION['status01'];
                        echo $_SESSION['status02'];
                        header("Location: ../painel-upload/index.php?pag=upload");
                    }
                }else{
                    $_SESSION['status01'] = "<span class='text-danger'>Falha!</span>";
                    $_SESSION['status02'] = "<span class='text-danger'>Falha!</span>";
                    echo $_SESSION['status01'];
                    echo $_SESSION['status02'];
                    header("Location: ../painel-upload/index.php?pag=upload");
                }
            }else{
                $_SESSION['alert'] = "
                        <div class='alert alert-danger text-center' role='alert'>
                        <span class='alert-icon'><i class='fas fa-exclamation-triangle'></i></span><br>
                        <span class='alert-text'><strong>Erro!</strong></span><br><span class='alert-text'><strong>Aviso.:</strong>Erro ao carregar arquivos, tente novamente!</span>
                        </div>
                        ";
                        echo $_SESSION['alert'];
                        header("Location: ../painel-upload/index.php?pag=upload");
            }
        }else{
            if(move_uploaded_file($cach_tela01, $caminho_arquivos_upload.$nome_tela01) && move_uploaded_file($cach_tela02, $caminho_arquivos_upload.$nome_tela02) && move_uploaded_file($cach_tela03, $caminho_arquivos_upload.$nome_tela03) ){
                $_SESSION['alert'] = "
                        <div class='alert alert-warning text-center' role='alert'>
                        <span class='alert-icon'><i class='fas fa-exclamation-triangle'></i></span><br>
                        <span class='alert-text'><strong>Alerta!</strong></span><br><span class='alert-text'><strong>Aviso.:</strong>Erro ao enviar para os PDVs, tente novamente!</span>
                        </div>
                        ";
                        echo $_SESSION['alert'];
                        header("Location: ../painel-upload/index.php?pag=upload");
            }else{
                $_SESSION['alert'] = "
                        <div class='alert alert-danger text-center' role='alert'>
                        <span class='alert-icon'><i class='fas fa-exclamation-triangle'></i></span><br>
                        <span class='alert-text'><strong>Erro Fatal!</strong></span><br><span class='alert-text'><strong>Aviso.:</strong>Erro ao gerar dados. Avisar o setor de TI!</span>
                        </div>
                        ";
                        echo $_SESSION['alert'];
                        header("Location: ../painel-upload/index.php?pag=upload");
            }
        }
    }else{ //Erro caso a extensão seja inválida
        $_SESSION['alert'] = "
                <div class='alert alert-warning text-center' role='alert'>
                <span class='alert-icon'><i class='fas fa-exclamation-triangle'></i></span><br>
                <span class='alert-text'><strong>Formato de arquivo inválido!</strong></span><br><span class='alert-text'><strong>Um ou vários arquivos com formato inválido!</strong></span><br><span class='alert-text'><strong>Formato aceito.:</strong> .jpg</span>
                </div>
                ";
        echo $_SESSION['alert'];
        header("Location: ../painel-upload/index.php?pag=upload");
    }
}

?>