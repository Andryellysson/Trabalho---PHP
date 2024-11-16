<?php

include 'conexao.php';
$cidade = $_POST['cidade'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$sql = mysqli_query($connectionBD, "INSERT INTO endereco(cidade, rua, bairro, numero) VALUES ('$cidade', '$rua','$bairro', '$numero')");

if ($sql){
    header('Location: index.php');

}


?>