<?php

    include("conexao.php");


    if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha'])) {

        if(strlen($_POST['nome'] == null)){
            echo "Nome inválido";
        }else if(strlen($_POST['email'] == null)){
            echo "E-mail inválido";
        }else if(strlen($_POST['senha'] == null)){
            echo "Senha inválida";
        }else{

            $nome = $mysqli->real_escape_string($_POST['nome']);
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            $sql_query = $mysqli->query($sql_code) or die("Falha no código SQL: " . $mysqli->error);

            /*$quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
                echo "Registrado com Sucesso! <p><a href=\"index.php\">Fazer login</a></p>" ;            

            }else {
                echo "Não foi possível cadastrar o usuário";
            }*/
        }


        /*$rnome = $_POST['nome'];
        $remail = $_POST['email'];
        $rsenha = $_POST['senha'];

        $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome, email, senha) VALUES ('$rnome', '$remail', '$rsenha')");*/
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="registro.php" method="POST">

    <h1>Registre-se</h1>


    <p>
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome" require>
    </p>
    <p>
        <label>E-mail:</label>
        <input type="text" name="email" placeholder="Digite seu E-mail" require>
    </p>
    <p>
        <label>Crie uma senha:</label>
        <input type="password" name="senha" placeholder="Digite sua senha" require>
    </p>
    <p>
        <button type="submit" name="submit">Registrar</button>
    </p>
    </form>

    <h2>Já possui uma conta? <a href="index.php">Entrar</a></h2>
</body>
</html>