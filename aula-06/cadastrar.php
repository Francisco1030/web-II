<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];

$con = new PDO("mysql:host=localhost;dbname=biblioteca", "root", "");

$con->exec("INSERT INTO livros(titulo, autor, descricao) VALUES('$titulo', '$autor', '$descricao')");
