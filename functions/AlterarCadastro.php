<head>
    <script type="text/javascript" src="../script/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>
</head>

<?php
    if(isset($_POST['bt_alterar_cad']))
        {
            include_once '../connection/conexao.php';
            
            $id = $_POST['campo_id'];
            $cidade = $_POST['campo_cidade'];
            $nome = $_POST['campo_nome'];
            $cpf = $_POST['campo_cpf'];
            $email = $_POST['campo_email'];
            $senha = $_POST['campo_senha'];
            $cep = $_POST['campo_cep'];
            $rua = $_POST['campo_rua'];
            $numero = $_POST['campo_numero'];
            $bairro = $_POST['campo_bairro'];
            $celular = $_POST['campo_celular'];
            $complemento = $_POST['campo_complemento'];
            
            $sql_alterar_cad = "UPDATE `cadastros` 
            SET `email`='$email',`senha`='$senha',`nome`='$nome',`cpf`='$cpf',`cidade`='$cidade',`cep`='$cep',`rua`='$rua',`numero`='$numero',`bairro`='$bairro',`celular`='$celular',`complemento`='$complemento'
            WHERE id= '$id'";
            if (mysqli_query($conn, $sql_alterar_cad))
            {
                echo "
                    <script type='text/javascript'>
                
                    $(document).ready(function(){

                        Swal.fire(
                            'Sucesso',
                            'Atualizado com sucesso',
                            'success'
                          );
                        });
                    setTimeout( function() {
                        window.location.href='../pages/Listagem.php';
                        }, 2500 );
                    </script>
                    ";
            }
            else
            {
                echo "
                    <script type='text/javascript'>
                
                    $(document).ready(function(){

                        Swal.fire(
                            'Erro',
                            'Não foi possível realizar a alteração',
                            'erro'
                          );
                        });
                    setTimeout( function() {
                        window.history.back();
                        }, 3000 );
                    </script>
                    ";
            }
        }
        else
        {
            echo "
            <script type='text/javascript'>
                
                $(document).ready(function(){

                    Swal.fire(
                        'Opa...',
                        'Você não deveria estar aqui...Redirecionando',
                        'warning'
                        );
                    });
                setTimeout( function() {
                    window.history.back();
                }, 3000 );
            </script>
            ";
        }