<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
    <div id="form_cadastro" class="container-fluid">
        <form action="../functions/CriaCadastro.php" method="post" class="row g-3">
            
            <h2>Cadastre-se </h2>

            <div class="col-md-12">
                <label class="form-label" for="campo_cidade">Cidade</label>
                <input class="form-control" type="text" name="campo_cidade" id="cidade">
            </div>

            <small>Informação da conta</small>

            <div class="col-md-12">
                <label class="form-label" for="campo_nome">Digite seu nome *</label>
                <input class="form-control" type="text" name="campo_nome" id="nome" required>
            </div>

            <div class="col-md-12">
                <label class="form-label" for="campo_cpf">Digite seu CPF *</label>
                <input class="form-control" type="text" name="campo_cpf" id="cpf" required>
                        </div>

            <div class="col-md-12">
                <label class="form-label" for="campo_email">Email *</label>
                <input class="form-control" type="email" name="campo_email" id="email" required>
                        </div>

            <div class="col-md-12">
                <label class="form-label" for="campo_senha">Senha *</label>
                <input class="form-control" type="password" name="campo_senha" id="senha" required>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_cep">CEP *</label>
                <input class="form-control" type="text" name="campo_cep" id="cep" required>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_rua">Rua *</label>
                <input class="form-control" type="text" name="campo_rua" id="rua" required>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="campo_numero">Número *</label>
                <input class="form-control" type="text" name="campo_numero" id="numero" required>
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
                        Eu concordo com os termos e condições. *
                    </label>
                </div>
            </div>  

            <div class="btn-toolbar justify-content-between" role="toolbar" >
                <div class="btn-group" role="group">
                    <input type="submit" class="btn btn-secondary" name="bt_cadastro" value="SALVAR CADASTRO">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                    Já se increveu? <a href="../index.html">Entre aqui</a>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid">
        &nbsp
    </div>
</body>
</html>