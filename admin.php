<?php
    session_start();
    include_once "php/config.php";
    if (!isset($_SESSION['unique_id'])) {
      header("location: login.php");
    }
    include_once 'conexion.php';
    
    include_once 'document.php';
?>

        <a href="Usuarios.php">Usuarios</a>
        <a href="Posts.php">Posts</a>

    </body>
</html>