<?php
    session_start();
    include_once "php/config.php";
    if (!isset($_SESSION['unique_id'])) {
      header("location: login.php");
    }
    include_once 'conexionUsers.php';

    include_once 'document.php';
?>

    <a href="admin.php">Volver</a><br><br><br>

<?php
    $sentencia = "SELECT * FROM posts ORDER BY id DESC";

    $enviar = mysqli_query($conexion,$sentencia);

    while($mostrar = mysqli_fetch_array($enviar)){
        echo($mostrar['Author'])."<br>";
        echo($mostrar['Poster'])."<br>";
        echo($mostrar['PostDate'])."<br>";
        if($mostrar['Content']){
            echo($mostrar['Content'])."<br>";
        }
        if($mostrar['Img']){
?>
        <img src="<?php echo($mostrar['Img']);?>">

<?php
        }
?>

        <form action="BorrarPosts1.php" method="post">
            <label for="id">Borrar Post</label>
            <input name="id" type="submit" value="<?php echo($mostrar['id'])?>">
        </form>
        <br><br><br>;
<?php
    }
?>
