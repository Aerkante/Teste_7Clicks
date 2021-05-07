<head>
    <script type="text/javascript" src="../script/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>
</head>
<?php
    include_once '../connection/conexao.php';

    $id = $_GET["id"];
    $sql_deletar_cad = "DELETE FROM `cadastros` WHERE id= '$id'";
    if (mysqli_query($conn, $sql_deletar_cad))
    {
        echo "
                    <script type='text/javascript'>
                
                    $(document).ready(function(){

                        Swal.fire(
                            'Sucesso',
                            'Deltado com sucesso...Redirecionando',
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
                            'Não foi possível deletar',
                            'erro'
                          );
                        });
                    setTimeout( function() {
                        window.history.back();
                        }, 3000 );
                    </script>
                    ";
    }