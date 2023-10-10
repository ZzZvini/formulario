<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario_cadastro';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// teste de conexão entre a variavel e o servidor:
 // if ($conexao->connect_errno) {
    // echo " Erro! ";
//} // else {
   // echo " Conexão Efetuada! ";
//}



?>