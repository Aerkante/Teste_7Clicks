<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../script/validaCampos.js" async></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../style/style.css" rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION['email']))
        {
            echo '
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="Listagem.php">Listagem</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link active" href="Cadastro.php">Cadastro</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../functions/Logout.php">Sair</a>
                        </li>

                    </ul>
                </div>
            </nav>';
        }
    ?>


    <div class="modal-d">
    <div id="form_cadastro" class="container-fluid">
        <form action="../functions/CriaCadastro.php" method="post" class="row g-3">
            <div class="container-legend">
                <p class="p-lg">
                    Cadastre-se
                </p>

                <a href="../">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"></path>
                </svg>
                </a>
            </div>
            <div class="col-md-12">
                <label class="form-label" for="campo_cidade">Cidade</label>
                <input class="form-control" type="text" name="campo_cidade" id="cidade">
            </div>

            <small>Informação da conta</small>

            <div class="col-md-12">
                <label class="form-label" for="campo_nome">Digite seu nome *</label>
                <input class="form-control" type="text" name="campo_nome" id="nome">
            </div>

            <div class="col-md-12">
                <label class="form-label" for="campo_cpf">Digite seu CPF *</label>
                <input class="form-control" type="text" name="campo_cpf" id="cpf">
                        </div>

            <div class="col-md-12">
                <label class="form-label" for="campo_email">Email *</label>
                <input class="form-control" type="email" name="campo_email" id="email">
                        </div>

            <div class="col-md-12">
                <label class="form-label" for="campo_senha">Senha *</label>
                <input class="form-control" type="password" name="campo_senha" id="senha">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_cep">CEP *</label>
                <input class="form-control" type="text" name="campo_cep" id="cep">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_rua">Rua *</label>
                <input class="form-control" type="text" name="campo_rua" id="rua">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_numero">Número *</label>
                <input class="form-control" type="text" name="campo_numero" id="numero">
                        </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_bairro">Bairro *</label>
                <input class="form-control" type="text" name="campo_bairro" id="bairro" require>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_celular">Celular *</label>
                <input class="form-control" type="text" name="campo_celular" id="celular" require>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_complemento">Complemento</label>
                <input class="form-control" type="text" name="campo_complemento" id="complemento">
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check_termo">
                    <label class="form-check-label" for="check_termo">
                        Eu concordo com os <a class="link-form-orange">termos e condições</a>. *
                    </label>
                </div>
            </div>  

            <div class="btn-toolbar justify-content-between" role="toolbar" >
                <div class="btn-group" role="group">
                    <input type="submit" class="btn btn-custom" name="bt_cadastro" id="submit_bt" value="SALVAR CADASTRO" >
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                    Já se increveu? <a class="link-form-orange" href="../index.html">Entre aqui</a>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        &nbsp
    </div>
</body>
</html>