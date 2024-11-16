<?php
include 'conexao.php';

$sql = "SELECT
    COUNT(CASE WHEN cidade = 'Crateús' THEN 1 END) AS crateus,
    COUNT(CASE WHEN cidade != 'Crateús' THEN 1 END) AS outras_cidades
FROM
    endereco";

$result = $connectionBD->query($sql);
$row = $result->fetch_assoc();

$totalCrateus = $row['crateus'];
$totalOutrasCidades = $row['outras_cidades'];
?>