<?php
    require_once("conexionBD.php");
    $name = $_POST['name'];
    $pass = $_POST['clave'];
    $sql = "SELECT pass FROM usua WHERE nombre='$name'";
    $envio = mysqli_query($conexion, $sql);
    $datos = mysqli_fetch_array($envio);
    
    if($datos){
        if(password_verify($pass,$datos['pass'])){
            echo'<script type="text/javascript">
            alert("Inicio de sesion correcto");
            window.location.href="index.php";
            </script>';
           // header('Location:index.php');
        }else{
            echo'<script type="text/javascript">
            alert("Contraseña incorreta");
            window.location.href="login.html";
            </script>';
        }
    }else{
        echo'<script type="text/javascript">
        alert("Usuario no encontrado");
        window.location.href="index.html";
        </script>';
        //header('Location:index.html');
    }


?>