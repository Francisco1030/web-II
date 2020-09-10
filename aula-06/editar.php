<?php

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];

$con = new PDO("mysql:host=localhost;dbname=biblioteca", "root", "");

$con->exec("UPDATE livros SET titulo = '$titulo', autor = '$autor', descricao = '$descricao' WHERE id = '$id'");
header('Location: relatorio.php');
