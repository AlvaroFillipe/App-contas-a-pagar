<?php

$host = "127.0.0.1";
$dbname = "contas_a_pagar";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$user, $pass);
    //ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //exibindo mensagem de errro caso a conecção com o banco de errado
    $error = $e->getMessage();
    echo "erro: $error";
}