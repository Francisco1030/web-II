<?php

$id = $_GET['id'];

$con = new PDO("mysql:host=localhost;dbname=test_php", "root", "");

$con->exec("DELETE FROM tb_usuarios WHERE id = $id");
//header("Location")
