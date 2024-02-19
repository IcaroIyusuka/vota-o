<?php
include('conexao.php');

if(isset($_POST['user']) || isset($_POST['senha'])){

    if(strlen($_POST['user'])==0){
        echo "Preencha o user";
    } else if(isset($_POST['senha'])==0){
        echo "Preencha a senha";
    }else{

        $user =$con->real_escape_string($_POST['user']);
        $senha =$con->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM controle WHERE usuario='$user' AND senha='$senha'";
        $resultado =$con->query($sql_code) or die("falha na execução" .$con->error);
        
        $quantidade = $resultado->num_rows;

        if($quantidade > 0){

            $arrayresultado = mysqli_fetch_assoc($resultado);

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['IDcon'] = $arrayresultado['IDcon'];

            
            header("Location: gerenciar.php");

            die();
        }else{
            echo "falha ao logar!";
        }
    }
}
?>