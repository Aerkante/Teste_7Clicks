<?php

    function verifica_cad_duplicatas($email)
    {
        include '../connection/conexao.php';
            $sql = "SELECT email FROM cadastros WHERE email = '$email'";
            $result = $conn->query($sql);
            if ($result->num_rows != 0)
            {
                $disponibilidade = false;
            }
            else
            {
                $disponibilidade = true;
            }
            return $disponibilidade;
    }

    if(isset($_POST['bt_cadastro']))
    {
        include_once '../connection/conexao.php';
        
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

        if(verifica_cad_duplicatas($email))
        {
            //Injeção de dados
            $sql_new_cad = "INSERT INTO `cadastros` (`email`, `senha`, `nome`, `cpf`, `cep`, `rua`, `numero`, `bairro`, `celular`, `complemento`) 
            VALUES ('$email', '$senha', '$nome', '$cpf', '$cep', '$rua', '$numero', '$bairro', '$celular', '$complemento')";
            if (mysqli_query($conn, $sql_new_cad))
            {
                echo"<script language='javascript' type='text/javascript'>
                alert('Novo usuário cadastrado com sucesso');window.location
                .href='../pages/Cadastro.php';</script>";
            }
            else
            {
                echo"<script language='javascript' type='text/javascript'>
                alert('Houve um erro! Contate um administrador');window.location
                .href='../pages/Cadastro.php';</script>";
            }
        }
        else
        {
            echo"<script language='javascript' type='text/javascript'>
                alert('Email duplicado! Por favor, insira outro');window.location
                .href='../pages/Cadastro.php';</script>";
        }
    }
    else
    {
        echo "
        <h1>PARADO AÍ! Não sei como, mas você não deveria estar aqui. Dê meia volta</h1>
        <script language='javascript' type='text/javascript'>
        window.location.href='../pages/Cadastro.php';</script>";
    }