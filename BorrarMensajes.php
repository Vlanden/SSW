<?php
    $sentencia = "DELETE FROM messages WHERE incoming_msg_id = '$id' or outgoing_msg_id = '$id'";

    $enviar = mysqli_query($conexion,$sentencia);
?>