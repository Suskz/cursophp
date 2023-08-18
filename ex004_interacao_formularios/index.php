<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com formulários</title>
    <link rel="stylesheet" href="/cursophp/css/style.css">
</head>
<body>
    <main>
        <h1>Apresente-se para nós</h1>
        <form action="cad.php" method="get">
            <label for="name">Nome</label>
            <input type="text" name="name" id="idname">
            <label for="sname">Sobrenome</label>
            <input type="text" name="sname" id="idsname">
            <input type="submit" value="Enviar">
        </form>
</main>
</body>
</html>