<?php 
include 'conexao.php';
$id = $_GET["id_pessoa"];

if(isset($_GET['id_pessoa'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM pessoas WHERE id_pessoa = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: listar_pessoas.php');
}
?>