<?php
include("dlogin.php");
include("dlogineq.php");
include("dlogincon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="img/logomultri.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" type="image/png" href="img/logoicon.jpg">
</head>
<body>
    <div id="login">

<form class="card" class="login" action="" method="POST">

    <div class="card-header">

        <h2>Acesso</h2>

    </div>

    <div class="card-content">

        <div class="card-content-area">

            <label for="usuario">Usuário</label>

            <input type="text" name="user" autocomplete="off">

        </div>

        <div class="card-content-area">

            <label for="password">Senha</label>

            <input type="password" name="senha" autocomplete="off">

        </div>

    </div>

    <div class="card-footer">

        <input type="submit" value="login" class="submit">


    </div>

</form>

</div>
<script type="text/javascript" src="javas.js"></script>
</body>
</html>