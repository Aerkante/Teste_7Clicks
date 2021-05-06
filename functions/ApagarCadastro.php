<?php
    include_once '../connection/conexao.php';

    $id = $_GET["id"];
    $sql_deletar_cad = "DELETE FROM `cadastros` WHERE id= '$id'";
    if (mysqli_query($conn, $sql_deletar_cad))
    {
        echo"<script language='javascript' type='text/javascript'>
        alert('Deletado');window.history.back();</script>";
    }
    else
    {
        echo"<script language='javascript' type='text/javascript'>
        alert('Houve um erro!');window.history.back();</script>";
    }