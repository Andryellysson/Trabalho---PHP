<?php 
include 'conexao.php';
$id = $_GET["id_endereco"];

if(isset($_GET['id_endereco'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM endereco WHERE id_endereco = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: listar_enderecos.php');
}
?>