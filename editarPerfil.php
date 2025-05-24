<?php
    include_once "php/config.php";
    $name = $_POST['correo'];
    $User=$_POST['name'];
    if (isset($_FILES['image'])) {
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
                    if(($User != "")){
                        $insert_query = mysqli_query($conn, "UPDATE users SET fname='$User', img='$new_img_name' WHERE email='$name'");
                        header('Location:profile.php');
                        exit();
                    }else{
                    $insert_query = mysqli_query($conn, "UPDATE users SET img='$new_img_name' WHERE email='$name'");
                    header('Location:profile.php');
                    }
                }
            } else {
                echo "Cargue un archivo de imagen: jpeg, png, jpg. PRUEBAA1";
            }
        } else {
            echo "Cargue un archivo de imagen: jpeg, png, jpg. PRUEBAA2";
            if($User !=""){
                $sql = "UPDATE users SET fname='$User' WHERE email='$name'";
                $envio = mysqli_query($conn, $sql);
                header('Location:profile.php');
                }else{
                    header('Location:profile.php');
                }
        }
    }else{

  

    }

   

?>    

