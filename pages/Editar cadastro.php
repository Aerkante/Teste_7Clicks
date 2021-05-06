<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../style/style.css" rel="stylesheet">
    <title>Cadastro</title>
    
</head>
<body>
    <div class="modal-d">
    <div id="form_alterar_cad" class="container-fluid">
        <form action="../functions/AlterarCadastro.php" method="post" class="row g-3">
            <div class="container-legend">
                <p class="p-lg">
                    Alterar Cadastro
                </p>

                <a href="Listagem.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"></path>
                </svg>
                </a>
            </div>

            <?php
                include_once '../connection/conexao.php';
                $id = $_GET['id'];
                $sql = "SELECT * FROM cadastros WHERE id= '$id'";
                $result = $conn->query($sql);
                if ($result->num_rows == 1) {
                    while($rows_cads = mysqli_fetch_assoc($result)){
                        
                        $nome =$rows_cads['nome'];
                        $email =$rows_cads['email'];
                        $senha =$rows_cads['senha'];
                        $cpf =$rows_cads['cpf'];
                        $cidade =$rows_cads['cidade'];
                        $cep =$rows_cads['cep'];
                        $rua =$rows_cads['rua'];
                        $numero =$rows_cads['numero'];
                        $bairro =$rows_cads['bairro'];
                        $celular =$rows_cads['celular'];
                        $complemento =$rows_cads['complemento'];
                    }
                }
            ?>

            <input hidden type="text" name="campo_id" value="<?php echo $id;?>">

            <div class="col-md-12">
                <label class="form-label" for="campo_cidade">Cidade</label>
                <input class="form-control" type="text" name="campo_cidade" id="cidade" value="<?php echo $cidade;?>">
            </div>

            <small>Informação da conta</small>

            <div class="col-md-12">
                <label class="form-label" for="campo_nome">Digite seu nome *</label>
                <input class="form-control" type="text" name="campo_nome" id="nome" value="<?php echo $nome;?>">
            </div>

            <div class="col-md-12">
                <label class="form-label" for="campo_cpf">Digite seu CPF *</label>
                <input class="form-control" type="text" name="campo_cpf" id="cpf" value="<?php echo $cpf;?>">
                        </div>

            <div class="col-md-12">
                <label class="form-label" for="campo_email">Email *</label>
                <input class="form-control" type="email" name="campo_email" id="email" value="<?php echo $email;?>">
                        </div>

            <div class="col-md-12">
                <label class="form-label" for="campo_senha">Senha *</label>
                <input class="form-control" type="password" name="campo_senha" id="senha" value="<?php echo $senha;?>">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_cep">CEP *</label>
                <input class="form-control" type="text" name="campo_cep" id="cep" value="<?php echo $cep;?>">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_rua">Rua *</label>
                <input class="form-control" type="text" name="campo_rua" id="rua" value="<?php echo $rua;?>">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_numero">Número *</label>
                <input class="form-control" type="text" name="campo_numero" id="numero" value="<?php echo $numero;?>">
                        </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_bairro">Bairro *</label>
                <input class="form-control" type="text" name="campo_bairro" id="bairro" value="<?php echo $bairro;?>">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_celular">Celular *</label>
                <input class="form-control" type="text" name="campo_celular" id="celular" value="<?php echo $celular;?>">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_complemento">Complemento</label>
                <input class="form-control" type="text" name="campo_complemento" id="complemento" value="<?php echo $complemento;?>">
            </div>

            <div class="btn-toolbar justify-content-between" role="toolbar" >
                <div class="btn-group" role="group">
                    <input type="submit" class="btn btn-custom" name="bt_alterar_cad" value="ALTERAR CADASTRO">
                </div>
            </div>

        </form>
    </div>
    <div class="container-fluid">
        &nbsp
    </div>
</body>
</html>