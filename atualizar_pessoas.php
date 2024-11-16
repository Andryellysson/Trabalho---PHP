
   <?php
      include 'conexao.php';

    if(isset($_GET['id_pessoa'])){
        $id = $_GET['id_pessoa'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM pessoas  WHERE id_pessoa = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome'];
            $sobrenome = $n['sobrenome'];
            $cpf = $n['cpf'];
            
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_pessoa"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $cpf = $_POST["cpf"];
        

        $queryUpdate = "UPDATE pessoas SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf' WHERE id_pessoa = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: listar_pessoas.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar pessoa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="h-screen flex items-center justify-center">
   
        <form  method="post" class="flex items-center justify-center flex-col gap-4">
            <h2 class="text-3xl">Atualizar Pessoa</h2>
          
            <div class="mb-3">
                  <label>Nome</label>
                  <input type="text" name="nome" placeholder="Nome" class="w-50 px-4 py-2 border border-1 border-black">
                </div>
                <div class="mb-3">
                  <label>Sobrenome</label>
                  <input type="text" name="sobrenome" placeholder="Sobrenome" class="w-50 px-4 py-2 border border-1 border-black">
                </div>
                <div class="mb-3">
                  <label>CPF</label>
                  <input type="number" name="cpf" placeholder="CPF" class="w-50 px-4 py-2 border border-1 border-black">
                </div>
                <div class="mb-3">
                  <button type="submit" name="atualizar" class="px-4 py-2 bg-blue-700 text-white">Atualizar</button>
                </div>
           
        </form>
     
    </main>
</body>
</html>