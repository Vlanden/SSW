<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>
<?php include_once "header4.php"; ?>
<html>
 
    <body>
    <header class="header">
        <a href="users.php" class="logo">SSW</a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        <nav class="navbar">
            <a href="users.php"><i class='bx bx-building-house'></i></a>
            <!-- <a href="" style="--i:4"><i class='bx bxl-messenger'></i></a> -->
            <a href="settings.html" style="--i:1"><i class='bx bx-cog'></i></a>
            <!-- <a href="#" style="--i:3"><i class='bx bx-exit'></i></a> -->
        </nav>
    </header><br><br><br>
   
<div class="container" name="cont">
      <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
          require_once 'php/BuscarUsuario.php';
          ?>
          <img src="images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname'] ?></span>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Cerrar Sesión</a>
      </header>
      <center>
        <button onclick="mostrar()" id="mostar">Editar Perfil</button>
      </center><br>
      <div class="padre">
        <a href="contactanos.html">Contactanos</a >
        <a href="PF.html">Preguntas Frecuentes</a>
        <a href="Us.html">Sobre nosotros</a ><br>
    </div>
    </section>
    <!-- Aqui termina el div padre -->
    </div>
    <br><br><br><br>
    <center>
                <div id="editar" >
              <form action="editarPerfil.php" method="POST" enctype="multipart/form-data">
                <br><br>
                <label class="padre"><a href="MC.html">Cambiar contraseña</a>
</label>
                <label for="image">Ingresa tu nueva foto de perfil</label><br>
                <input type="file" name="image" value="Cambiar Foto">
                <br><br>
                <label for="correo">Escribe tu correo</label><br><br>
                <input type="email" name="correo" class="input" required><br><br>
                <label for="name">Escribe tu nuevo nombre</label><br><br>
                <input type="text" name="name" class="input"><br><br>
                <input type="submit" name="btn" class="btn" value="Actualizar"><br>
              </form><br>
              <button onclick="cerrar()" class="btn1">Cancelar</button>
            </div>
          </center>
          <div class="post"> 
          <?php
          $Poster = $row['email'];
    $sentencia = "SELECT * FROM posts WHERE Poster = '$Poster' ORDER BY id DESC";

    $enviar = mysqli_query($conn,$sentencia);

    while($mostrar = mysqli_fetch_array($enviar)){
        echo("<br><center><section class='BackgroundProfile'>".$mostrar['Author'])."<br>";
        if($mostrar['Content']){
            echo("<br>".$mostrar['Content'])."<br><br>";
        }
        if($mostrar['Img'] && $mostrar['Img'] != 'images/'){
?>
        <img src="<?php echo($mostrar['Img']);?>">

<?php
        }
        echo("<br>".$mostrar['PostDate'])."<br>";
        echo "<br></section></center>
        <br><br>";
    }

?>
          </div>

          </div>

          
      <script src="javascript/users.js"></script>
      </body>
</html>