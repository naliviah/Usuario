<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login= $_POST['usuario'];
    $senha=$_POST['senha'];


    include "conexao.php";


    $sql ="SELECT * FROM usuario
    WHERE login= '$login'
    AND senha='$senha'";

$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado)>0){
    echo "Liberado";
    header('location: index.html');
}else{
    echo"Usuário ou senha invalidos";
}


}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<form action="login.php" method="post">
    <fieldset>
        <h3>Login</h3>
        <label>Usuário</label>
        <input type="text" name="usuario" placeholder="Digite aqui">
        <br><br>
        <label>Senha</label>
        <input type="text" name="senha" placeholder="Digite aqui">
        <br><br>
        <button type="submit">Enviar</button>

    </fieldset>
</body>
</html>