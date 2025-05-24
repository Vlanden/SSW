<?php
    session_start();
    require_once('php/config.php');
    require_once 'php/BuscarUsuario.php';

    $user = $_POST['Nombre'];
    $date = date('y',time()).'/'.date('m',time()).'/'.date('d',time());
    $content = $_POST['Contenido'];
    $poster = $row['email'];
    

    if(!isset($_FILES['image']) and $content == ''){
        header('Location:postVacio.html');
    } else if (isset($_FILES['image'])) {
        $img_name = $_FILES['image']['name'];
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];

        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode);

        $extensions = ["jpeg", "png", "jpg"];
        if (in_array($img_ext, $extensions) === true) {
            $types = ["image/jpeg", "image/jpg", "image/png"];
            if (in_array($img_type, $types) === true) {
                $time = time();
                $new_img_name = $time . $img_name;
                if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                    if($content == ''){
                        
                        $sentencia = "INSERT INTO posts(Author,PostDate,Img,Poster) VALUES('$user','$date','$new_img_name','$poster')";
                    }else{
                        $sentencia = "INSERT INTO posts(Author,PostDate,Img,Content,Poster) VALUES('$user','$date','$new_img_name','$content','$poster')";
                    }
                
                } else {
                    echo "Algo salió mal. ¡Inténtalo de nuevo!";
                }
            } else {
                echo "Cargue un archivo de imagen: jpeg, png, jpg";
            }
        } else {
            echo "Cargue un archivo de imagen: jpeg, png, jpg";
        }
    }else if($content != ''){
        // move_uploaded_file($tmp_name, "images/" . $new_img_name);
        $sentencia = "INSERT INTO posts(Author,PostDate,Img,Content,Poster) VALUES('$user','$date','$new_img_name','$content','$poster')";

       // $sentencia = "INSERT INTO posts(Author,PostDate,Content,Poster) VALUES('$user','$date','$content','$poster')";
    }

    $enviar = mysqli_query($conn,$sentencia);

    header('Location:users.php');

?>