<?php
include 'conexao.php';
include 'read2.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dados Endereco</title>
</head>

<body>
    <br><br>
    <h2 class="text-4xl">Lista de endereços cadastrados:</h2>

    <div class="container" col-md-6 offset-md-3>
        <table class="table table-hover">

            <thead>
                <tr>
                    <th scope="col">Id endereço</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Número</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <?php
            while ($endereco = mysqli_fetch_assoc($listarSQL)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $endereco['id_endereco'] ?></td>
                        <td><?php echo $endereco['cidade'] ?></td>
                        <td><?php echo $endereco['rua'] ?></td>
                        <td><?php echo $endereco['bairro'] ?></td>
                        <td><?php echo $endereco['numero'] ?></td>
                        <td>
                            <a href="deletar_enderecos.php?id_endereco=<?php echo $endereco['id_endereco']; ?>" class="btn btn-sm btn-danger">Excluir</a>
                            <a href="atualizar_enderecos.php?id_endereco=<?php echo $endereco['id_endereco']; ?>" class="btn btn-sm btn-warning">Atualizar</a> 
                            <a href="dados.php">Gráficos</a>
                        </td>
                    </tr>

                </tbody>
            <?php
            }
            ?>
        </table>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>