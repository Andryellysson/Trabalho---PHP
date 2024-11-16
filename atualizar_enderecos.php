<?php
      include 'conexao.php';

    if(isset($_GET['id_endereco'])){
        $id = $_GET[ 'id_endereco'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM endereco  WHERE id_endereco = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $cidade = $n['cidade'];
            $rua = $n['rua'];
            $bairro = $n['bairro'];
            $numero = $n['numero'];
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_endereco"];
        $cidade = $_POST["cidade"];
        $rua = $_POST["rua"];
        $bairro = $_POST["bairro"];
        $numero = $_POST["numero"];
        

        $queryUpdate = "UPDATE endereco SET cidade = '$cidade', rua = '$rua', bairro = '$bairro', numero = '$numero' WHERE id_endereco = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: listar_enderecos.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Endereço</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="h-screen flex items-center justify-center">
   
        <form  method="post" class="flex items-center justify-center flex-col gap-4">
            <h2 class="text-3xl">Atualizar Endereço</h2>
          
            <div class="mb-3">
                  <label>Cidade</label>
                  <input type="text" name="cidade" placeholder="Cidade" class="w-50 px-4 py-2 border border-1 border-black">
                </div>
                <div class="mb-3">
                  <label>Rua</label>
                  <input type="text" name="rua" placeholder="Rua" class="w-50 px-4 py-2 border border-1 border-black">
                </div>
                <div class="mb-3">
                  <label>Bairro</label>
                  <input type="text" name="bairro" placeholder="Bairro" class="w-50 px-4 py-2 border border-1 border-black">
                </div>
                <div class="mb-3">
                  <label>Número</label>
                  <input type="number" name="numero" placeholder="Número" class="w-50 px-4 py-2 border border-1 border-black">
                </div>
                <div class="mb-3">
                  <button type="submit" name="atualizar" class="px-4 py-2 bg-blue-700 text-white">Atualizar</button>
                </div>
           
        </form>
        
    </main>
</body>
</html>