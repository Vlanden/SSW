<?php
    require_once ("php/config.php");
    $user = $_POST['us'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];

    if(strcmp($pass,$pass2)==0){
        $passNew=$pass2;
        $encrypt_pass =md5($passNew);
       $sql="UPDATE users SET password = '$encrypt_pass' WHERE email = '$user';";
        $envio = mysqli_query($conn, $sql);
        if(!$envio) {
            echo "Error: " . mysqli_error($conn);
        } else {
            header('Location:users.php');
        }
    }
    
?>