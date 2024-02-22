<?php
session_start();

if (empty($_POST) || (empty($_POST["usuario"]) || empty($_POST["senha"]))) {

    print "<script>location.href='index.php';</script>";
}

include('config.php');

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT *
        FROM usuarios
        WHERE usuario = '{$usuario}' AND senha = '{$senha}'
        ";
