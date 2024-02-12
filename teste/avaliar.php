<?php
include("protec.php");
include("dlogin.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acesso</title>
  <link rel="stylesheet" type="text/css" href="teste.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="img/logomultri.png">
</head>

<body>
  <nav>
    <div class="navbar flex-column">
      <div class="container nav-container ">

        <div class="logo">
          <h1><img src="img/zyro-image (1) (1).png" alt=""></h1>
        </div>
        <div class="menu-items">
          <li>Usuario <th> <?php echo  $_SESSION['ID'] . "<br>" ?></th></li>
          <li><a href="VotarJeans.php">Avaliar</a></li>
          <li><a href="Sair.php">Sair</a></li>
        </div>
      </div>
    </div>
  </nav>
  


    <script type="text/javascript" src="javas.js"></script>
</body>

</html>