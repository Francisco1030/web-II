<?php

$id = $_GET['id'];

$con = new PDO("mysql:host=localhost;dbname=biblioteca", "root", "");

$con->exec("DELETE FROM livros WHERE id = $id");
header('Location: relatorio.php');
