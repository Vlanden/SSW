<?php
    include_once('conexion.php');

    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $sentencia = "SELECT pass FROM admin WHERE id = '$id'";

    $enviar = mysqli_query($conexion,$sentencia);

    $contraseña = mysqli_fetch_array($enviar)['pass'];
    if($contraseña){
        if(password_verify($pass,$contraseña)){
            session_start();
            $_SESSION['id'] = $id;
            header('Location:admin.php');
        }
    }
?>