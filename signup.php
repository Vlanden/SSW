<?php
session_start();
include_once "php/config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$SinImg = mysqli_real_escape_string($conn, $_POST['SIMG']);

if (!empty($fname)  && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "$email - ¡Este e-mail ya existe!";
        } else {
            if (isset($_FILES['image']) && !$SinImg) {
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
                            $ran_id = rand(time(), 100000000);
                            $status = "Disponible";
                            $encrypt_pass =md5($password);
                            $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, email, password, img, status)
                                VALUES ({$ran_id}, '{$fname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");
                            if ($insert_query) {
                                $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if (mysqli_num_rows($select_sql2) > 0) {
                                    $result = mysqli_fetch_assoc($select_sql2);
                                    $_SESSION['unique_id'] = $result['unique_id'];
                                    header("Location:users.php");
                                    echo "Proceso Exitoso";
                                } else {
                                    echo "¡Esta dirección de correo electrónico no existe!";
                                }
                            } else {
                                echo "Algo salió mal. ¡Inténtalo de nuevo!";
                            }
                        }
                    } else {
                        echo "Cargue un archivo de imagen: jpeg, png, jpg. PRUEBAA1";
                    }
                } else {
                    echo "Cargue un archivo de imagen: jpeg, png, jpg. PRUEBAA2";
                }
            }else{
                        $new_img_name = "LOGO SIMP.png";
                            $status = "Disponible";
                            $ran_id = rand(time(), 100000000);
                            $encrypt_pass =md5($password);
                            $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, email, password, img, status)
                                VALUES ({$ran_id}, '{$fname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");
                            if ($insert_query) {
                                $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if (mysqli_num_rows($select_sql2) > 0) {
                                    $result = mysqli_fetch_assoc($select_sql2);
                                    $_SESSION['unique_id'] = $result['unique_id'];
                                    header("Location:users.php");
                                    echo "Proceso Exitoso";
                                } else {
                                    echo "¡Esta dirección de correo electrónico no existe!";
                                }
                            } else {
                                echo "Algo salió mal. ¡Inténtalo de nuevo!";
                            }
                        
               
            }
        }
    } else {
        echo "$email ¡No es un correo electrónico válido!";
    }
} else {
    echo "¡Todos los campos de entrada son obligatorios!";
}
