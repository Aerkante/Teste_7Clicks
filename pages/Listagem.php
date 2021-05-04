<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../style/bootstrap.css'>
    <title>Cadastro</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table">
            <?php
                include_once '../connection/conexao.php';
                $sql_referencia = "SELECT * FROM cadastros";
                $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

                $resultado = mysqli_query($conn, $sql_referencia);

                $total_cad = mysqli_num_rows($resultado);

                $quantidade_pg = 20;

                $num_pagina = ceil($total_cad/$quantidade_pg);

                $incio = ($quantidade_pg*$pagina)-$quantidade_pg;
                

                $sql = "SELECT * FROM cadastros ";
                $result = mysqli_query($conn, $sql);
                $total_cad = mysqli_num_rows($result);

            ?>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">CPF</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Número</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Complemento</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        if($result->num_rows > 0)
                        {
                            while($rows_cads = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td scope='row'>".$rows_cads['id']."</td>";
                                echo "<td>".$rows_cads['nome']."</td>";
                                echo "<td>".$rows_cads['email']."</td>";
                                echo "<td>".$rows_cads['senha']."</td>";
                                echo "<td>".$rows_cads['cpf']."</td>";
                                echo "<td>".$rows_cads['cep']."</td>";
                                echo "<td>".$rows_cads['rua']."</td>";
                                echo "<td>".$rows_cads['numero']."</td>";
                                echo "<td>".$rows_cads['bairro']."</td>";
                                echo "<td>".$rows_cads['celular']."</td>";
                                echo "<td>".$rows_cads['complemento']."</td>";
                                echo "</tr>";

                        }
                        $pagina_anterior = $pagina - 1;
                        $pagina_posterior = $pagina + 1;
                        echo "</tbody>";
                        echo '</table>
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">';
                        if($pagina_anterior != 0){
                            echo 
                            '<a class="nav-link" href="Listagem.php?pagina='.$pagina_anterior .'" aria-label="Previous">
                                <img src="../images/icons8-back-48.png" alt="seta-atrás" width="30rem">
                            </a>';
                        }
                        else
                        { 
                            echo 
                            '<img src="../images/icons8-back-48.png" alt="seta-atrás" width="30rem">'; 
                        } 
                        echo '</li>';
                        for($i = 1; $i < $num_pagina + 1; $i++)
                        { 
                            echo 
                            '<li><a class="nav-link active" href="Listagem.php?pagina='. $i .'">'. $i .'</a></li>';
                        } 
                        echo '<li>';
                            if($pagina_posterior <= $num_pagina)
                            { 
                                echo 
                                '<a class="nav-link" href="Listagem.php?pagina='. $pagina_posterior .'" aria-label="Previous">
                                    <img src="../images/icons8-back-48.png" alt="seta-atrás" width="30rem" style="transform: rotateY(180deg);">
                                </a>';
                            }
                            else
                            { echo 
                                '<img src="../images/icons8-back-48.png" alt="seta-atrás" width="30rem" style="transform: rotateY(180deg);">';
                            }
                        echo '</li>
                    </ul>
                    </nav>';
                }
            ?>
    </div>
</body>
</html>