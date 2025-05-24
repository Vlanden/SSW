<?php
    include_once("conexionUsers.php");
    $sentencia = "DELETE FROM Posts WHERE Poster = '$poster'";
    $enviar = mysqli_query($conexion,$sentencia);
    
?>