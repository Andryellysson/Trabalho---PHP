<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar pessoa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="h-screen flex items-center justify-center">
        <form action="salvarpessoa.php" method="post" class="flex items-center justify-center flex-col gap-4">
            <h2 class="text-3xl">Cadastrar Pessoa</h2>
            <input type="text" class="w-50 px-4 py-2 border border-1 border-black" placeholder="Nome" name="nome"> <br>
            <input type="text" class="w-50 px-4 py-2 border border-1 border-black" placeholder="Sobrenome" name="sobrenome"> <br>
            <input type="text" class="w-50 px-4 py-2 border border-1 border-black" placeholder="CPF" name="cpf"> <br>
            <button class="px-4 py-2 bg-blue-700 text-white" type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>