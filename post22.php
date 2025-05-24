<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    session_start();
    require_once('php/config.php');
    require_once 'php/BuscarUsuario.php';

    
    $user = $_POST['Nombre'];
    $date = date('y',time()).'/'.date('m',time()).'/'.date('d',time());
    $content = $_POST['Contenido'];
    $poster = $row['email'];

    
    if(!isset($_FILES['image']) && $content == ''){
        header('Location:postVacio.html');
    } else if (isset($_FILES['image'])) {
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Obtén el archivo
        $file = $_FILES['image'];

        // Obtén detalles del archivo
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];

        // Especifica la carpeta donde se guardará el archivo
        $fileDestination = 'images/'.$fileName;

        // Mueve el archivo a la carpeta de destino
        if(move_uploaded_file($fileTmpName, $fileDestination)){
            echo "<h1>El archivo se ha subido correctamente.</h1>";
        } else {
            echo "<h1>Hubo un error al subir tu archivo.</h1>";
        }

        // Prepara la consulta SQL para guardar el nombre del archivo en la base de datos
        if($content == ''){
            $sentencia = "INSERT INTO posts(Author,PostDate,Img,Poster) VALUES('$user','$date','$fileDestination','$poster')";
        }else{
            $sentencia = "INSERT INTO posts(Author,PostDate,Img,Content,Poster) VALUES('$user','$date','$fileDestination','$content','$poster')";
        }

        $enviar = mysqli_query($conn,$sentencia);

        if($enviar){
            echo "<h1>El nombre del archivo se ha guardado correctamente en la base de datos.</h1>";
        } else {
            echo "<h1>Hubo un error al guardar el nombre del archivo en la base de datos.</h1>";
        }
     } }

     header('Location:users.php');
// ?>
