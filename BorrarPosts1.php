<?php
   session_start();
   include_once "php/config.php";
   if (!isset($_SESSION['unique_id'])) {
     header("location: login.php");
   }

    include_once 'conexionUsers.php';
    $id = $_POST['id'];
    $sentencia = "DELETE FROM Posts WHERE id = '$id'";

    $enviar = mysqli_query($conexion,$sentencia);

    header('Location:Posts.php');

?>