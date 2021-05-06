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
                echo"<script language='javascript' type='text/javascript'>
                alert('Atualizado');window.location
                .href='../pages/Listagem.php';</script>";
            }
            else
            {
                echo"<script language='javascript' type='text/javascript'>
                alert('Houve um erro! Contate um administrador');window.history.back();</script>";
            }
        }
        else
        {
            echo "
            <script language='javascript' type='text/javascript'>
            alert('PARADO AÍ! Não sei como, mas você não deveria estar aqui. Dê meia volta');window.history.back();</script>";
        }