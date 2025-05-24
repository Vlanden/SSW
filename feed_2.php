<?php
    require_once('php/config.php');
?>

<!doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <nav></nav>
        </header>
        <main>
            <form action="post.php" method="POST">
                <label for="Nombre">Autor: </label>
                <input type="text" name="Nombre" id="" value="Pedro" required> <!-- En Value va el nombre de Usuario guardado en la session -->
                <label for="Contenido">Contenido: </label>
                <input type="text" name="Contenido" id="">
                <label for="Imagen">Imagen: </label>
                <input type="text" name="Imagen" id="">
                <input type="submit">
            </form>
            <br><br><br>

<?php
    $sentencia = "SELECT * FROM posts ORDER BY id DESC";

    $enviar = mysqli_query($conn,$sentencia);

    while($mostrar = mysqli_fetch_array($enviar)){
        echo($mostrar['Author'])."<br>";
        echo($mostrar['PostDate'])."<br>";
        if($mostrar['Content']){
            echo($mostrar['Content'])."<br>";
        }
        if($mostrar['Img']){
?>
        <img src="<?php echo($mostrar['Img']);?>">

<?php
        }
        echo "<br><br><br>";
    }

?>

        </main>
    </body>
</html>
