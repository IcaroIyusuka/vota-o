<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de novos jurados</title>
</head>
<body>
    <form action="djuradios.php" method="POST">

    <label for="usuario">Nome:</label>
      <input type="text" name="usuario" id="usuario" required><br>


    <label for="senha">Senha:</label>
        <input type="password" for="senha" id="senha" name="senha" required>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
