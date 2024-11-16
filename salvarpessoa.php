<?php
 
include 'conexao.php';
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$sql = mysqli_query($connectionBD, "INSERT INTO pessoas(nome, sobrenome, cpf) VALUES ('$nome', '$sobrenome','$cpf')");

if ($sql){
    header('Location: listar_pessoas.php');

}


?>