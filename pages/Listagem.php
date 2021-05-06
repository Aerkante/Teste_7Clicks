<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../script/Confirmacao.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../style/style.css" rel="stylesheet">
    <title>Cadastro</title>

    <?php
    session_start();
    if((!isset ($_SESSION['email']) == true) or (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo"<script language='javascript' type='text/javascript'>
        alert('Você não está logado!');window.location.href='../index.html';</script>";
    }
    ?>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item active">
                    <a class="nav-link active" href="Listagem.php">Listagem</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Cadastro.php">Cadastro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../functions/Logout.php">Sair</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="table-responsive-sm">
        <table class="table">
            <thead class="thead">
            <?php
                include_once '../connection/conexao.php';
                $sql_referencia = "SELECT * FROM cadastros";
                $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

                $resultado = mysqli_query($conn, $sql_referencia);

                $total_cad = mysqli_num_rows($resultado);

                $quantidade_pg = 20;

                $num_pagina = ceil($total_cad/$quantidade_pg);

                $incio = ($quantidade_pg*$pagina)-$quantidade_pg;
                

                $sql = "SELECT * FROM cadastros limit $incio, $quantidade_pg";
                $result = mysqli_query($conn, $sql);
                $total_cad = mysqli_num_rows($result);

            ?>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Celular</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        if($result->num_rows > 0)
                        {
                            while($rows_cads = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td scope='row'>".$rows_cads['id']."</td>";
                                echo "<td>".$rows_cads['nome']."</td>";
                                echo "<td>".$rows_cads['email']."</td>";
                                echo "<td>".$rows_cads['senha']."</td>";
                                echo "<td>".$rows_cads['cpf']."</td>";

                                echo "<td>".$rows_cads['rua'].", ".
                                $rows_cads['numero'].", ".
                                $rows_cads['bairro']."</td>";

                                echo "<td>".$rows_cads['cidade']."</td>";
                                echo "<td>".$rows_cads['cep']."</td>";
                                echo "<td>".$rows_cads['complemento']."</td>";
                                echo "<td>".$rows_cads['celular']."</td>";
                                echo "<td><a class='navbar-brand' href='Editar cadastro.php?id=".$rows_cads['id']."'><img src='../images/pencil.png' width='24' height='24' alt='editar'></a>
                                <a id='link_apagar' class='navbar-brand' href='../functions/ApagarCadastro.php?id=".$rows_cads['id']."'><img src='../images/delete.png' width='24' height='24' alt='apagar'></a></td>";
                            }
                        $pagina_anterior = $pagina - 1;
                        $pagina_posterior = $pagina + 1;
                        echo "</tbody>";
                        echo '</table>
                            <nav class="nav justify-content-center">
                                <ul class="nav nav-pills nav-fill-content">
                                    <li class="nav-item">';
                        if($pagina_anterior != 0){
                            echo 
                            '<a class="nav-link" href="Listagem.php?pagina='.$pagina_anterior .'" aria-label="Previous">
                                <img src="../images/icons8-back-48.png" alt="seta-atrás" width="30rem">
                            </a>';
                        }

                        echo '</li>';
                        for($i = 1; $i < $num_pagina + 1; $i++)
                        { 
                            if($pagina==$i)
                            echo '<li class="nav-item"><a class="nav-link active" href="Listagem.php?pagina='. $i .'">'. $i .'</a></li>';
                            else
                            echo '<li class="nav-item"><a class="nav-link" href="Listagem.php?pagina='. $i .'">'. $i .'</a></li>';
                        } 

                        echo '<li class="nav-item">';
                            if($pagina_posterior <= $num_pagina)
                            { 
                                echo 
                                '<a class="nav-link" href="Listagem.php?pagina='. $pagina_posterior .'" aria-label="Previous">
                                    <img src="../images/icons8-back-48.png" alt="seta-atrás" width="30rem" style="transform: rotateY(180deg);">
                                </a>';
                            }
                        echo '</li>
                        </ul>
                    </nav>';
                }
            ?>
    </div>
</body>
</html>