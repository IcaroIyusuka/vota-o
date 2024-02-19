<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Participantes</title>
</head>
<body>
    <form action="dparticipantes.php" method="post" enctype="multipart/form-data">

    <label for="nome">Nome:</label>
      <input type="text" name="nome" required><br>

    <label for="foto">Foto:</label>
      <input type="file" name="foto" required><br>

    <input type="submit" value="Cadastrar">
    </form>
</body>
</html>