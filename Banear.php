<?php
   session_start();
   include_once "php/config.php";
   if (!isset($_SESSION['unique_id'])) {
     header("location: login.php");
   }
   // include_once('conexionUsers.php');

    $id = $_POST['unique_id'];
    //$poster = $_POST['email'];

    require_once('BorrarPosts.php');
    require_once('BorrarMensajes.php');

    $sentencia = "DELETE FROM users WHERE unique_id = '$id'";

    $enviar = mysqli_query($conexion,$sentencia);

    header('Location:Usuarios.php');
?>