<?php

session_start();
include_once "php/config.php";
if (isset($_SESSION['unique_id'])) {
    $user = $_SESSION['unique_id'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];




    if(strcmp($pass,$pass2)==0){
        $passNew=$pass2;
        $encrypt_pass =md5($passNew);
        $sql="UPDATE users SET password = '$encrypt_pass' WHERE unique_id = $user;";
        $envio = mysqli_query($conn, $sql);
        if(!$envio) {
            echo "Error: " . mysqli_error($conn);
        } else {
            
            header('Location:users.php');
        }
    }else{
        header('Location:Profile.php');
    }
}
?>