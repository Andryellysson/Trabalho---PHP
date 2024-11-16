
<?php
include 'conexao.php';
include 'read.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabela de dados</title>
</head>

<body>
    <br><br>
    <h2 class="text-4xl">Lista de Pessoas Cadastradas:</h2>

    <div class="container" col-md-6 offset-md-3>
        <table class="table table-hover">

            <thead>
                <tr>
                    <th scope="col">Id pessoa</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">CPF</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <?php
            while ($pessoas = mysqli_fetch_assoc($listarSQL)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $pessoas['id_pessoa'] ?></td>
                        <td><?php echo $pessoas['nome'] ?></td>
                        <td><?php echo $pessoas['sobrenome'] ?></td>
                        <td><?php echo $pessoas['cpf'] ?></td>
                        
                        <td>
                            <a href="deletar_pessoas.php?id_pessoa=<?php echo $pessoas['id_pessoa']; ?>" class="btn btn-sm btn-danger">Excluir</a>
                            <a href="atualizar_pessoas.php?id_pessoa=<?php echo $pessoas['id_pessoa']; ?>" class="btn btn-sm btn-warning">Atualizar</a> 
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