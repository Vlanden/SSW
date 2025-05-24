<?php
    require_once('conexion.php');

    $id = 'Administrador';
    $pass = 'Mortadela.1';
    $unique_id = '111111111';

    $hash = password_hash($pass,PASSWORD_DEFAULT,[15]);
    
    $sentencia = "INSERT INTO admin (id,pass,unique_id) VALUES('$id','$hash','$unique_id')";

    $enviar = mysqli_query($conexion,$sentencia);

    header('Location:login.html');
?>