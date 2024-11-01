<?php

$server="localhost";
$user="root";
$pass="";
$bd="usuario";


if($con = mysqli_connect($server,$user,$pass,$bd)){
    echo "Conectado";
}else{
    echo"Erro!!";
}
