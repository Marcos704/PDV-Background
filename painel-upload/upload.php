<?php
@session_start();


?>

<div class="row">
    <div class="col-xl-8">
        <div class="card bg-default">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-light text-uppercase ls-1 mb-1">PDV-BACKGROUND (beta_v0.0.1)</h6>
                        <h5 class="h3 text-white mb-0">upload de arquivos</h5>
                        <?php
                         if(isset($_SESSION['alert'])!=null){
                          echo $_SESSION['alert'];
                          unset($_SESSION['alert']);
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Telas</th>
                                <th scope="col">Upload para PDV</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="../controller/uploadData.php" method="POST" enctype="multipart/form-data">
                                <tr>
                                    <th scope="row">
                                        <span class="text-white">Tela01 - PDV</span>
                                    </th>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFileLang"
                                                    lang="en" name="tela01" required>
                                                <label class="custom-file-label bg-default" title="Escolha o arquivo"
                                                    for="customFileLang"></label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <span class="text-white">Tela02 - PDV</span>
                                    </th>
                                    <td>
                                        <div class="custom-file">
                                            <input type="file" name="tela02" class="custom-file-input"
                                                id="customFileLang" lang="en" required>
                                            <label class="custom-file-label bg-default" title="Escolha o arquivo"
                                                for="customFileLang"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <span class="text-white">Tela03 - PDV</span>
                                    </th>
                                    <td>
                                        <div class="custom-file">
                                            <input type="file" name="tela03" class="custom-file-input"
                                                id="customFileLang" lang="en" required>
                                            <label class="custom-file-label bg-default" title="Escolha o arquivo"
                                                for="customFileLang"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                    </th>
                                    <td>
                                        <div class="text-right">
                                            <input class="btn btn-icon btn-success" type="submit" name="enviar-data">
                                            </input>
                                        </div>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Filiais Cadastradas</h6>
                                <h5 class="h3 mb-0">PDV/Filial</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">1 2 3 | 01 - Maiobão</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                        <label class="custom-control-label" for="customCheck2">1 2 _ | 03 - Cohatrac</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Status de envio</h6>
                                <h5 class="h3 mb-0">Filial/Status</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">
                                        01 - Maiobão | - 
                                            <?php
                                        if(isset($_SESSION['status01'])!=null){
                                        echo $_SESSION['status01'];
                                        unset($_SESSION['status01']);
                                        }
                                    ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                        <label class="custom-control-label" for="customCheck2">
                                        03 - Cohatrac | - 
                                            <?php
                                        if(isset($_SESSION['status02'])!=null){
                                        echo $_SESSION['status02'];
                                        unset($_SESSION['status02']);
                                        }
                                    ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <span class="text-white">Instruções</span>
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalLeia">
                        Leia-me
                    </button>
                </p>
            </div>

        </div>
    </div>

</div>

<!-- Modal Leia-me -->
<div class="modal fade" id="modalLeia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Instruções de envio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-3">Descrição.: </dt>
                    <dd class="col-sm-9">Explicação descritiva de como realizar o envio correto dos planos de
                        fundo para os PDVs.</dd>

                    <dt class="col-sm-3">Arquivo.: </dt>
                    <dd class="col-sm-9">
                        <p>* As imagens deverão estar no formato ".jpg".</p>
                        <p>* O sistema irá renomear de forma automática os arquivos para o nome correto.</p>
                        <p>* Deverá ser importado os três arquivos referentes as telas do PDV uma unica vez.</p>
                    </dd>

                    <dt class="col-sm-4">E-mail de suporte.:</dt>
                    <a class="col-sm-8"
                        href="mailto:marcosreis581@gmail.com?Subject=Suporte.: PDV-Background">marcosreis581@gmail.com</a>
                </dl>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>
            </div>
        </div>
    </div>
</div>