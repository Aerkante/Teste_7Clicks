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
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='../index.html';</script>";
            die();
        }
    }   