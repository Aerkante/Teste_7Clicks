<head>
    <script type="text/javascript" src="../script/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>
</head>
<?php
    include_once '../connection/conexao.php';
    if(isset($_POST['bt_login']))
    {
        session_start();
        $email = $_POST['campo_email'];
        $senha = $_POST['campo_senha'];
        $sql = "SELECT email, senha FROM cadastros WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../pages/Listagem.php');
        }
        else
        {
            unset ($_SESSION['email']);
            unset ($_SESSION['senha']);
            echo "
            <script type='text/javascript'>
                
                $(document).ready(function(){

                    Swal.fire(
                        'Erro no login',
                        'Email e/ou senha incorreto(s), verifique e tente novamente',
                        'error'
                        );
                    });
                setTimeout( function() {
                    window.location.href='../index.html';
                }, 2500 );
            </script>
            ";
            die();
        }
    }   