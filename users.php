<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>
<?php include_once "header1.php";
require_once 'php/BuscarUsuario.php';
$nombre = $row['fname'];
?>
<title>Feed de <?echo $_SESSION['unique_id']; ?></title>

<body>
  
 
<header class="header">
        <a href="" class="logo">SSW</a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
        <nav class="navbar">
            <a href="profile.php"><i class='bx bx-user' ></i></a>
            <a href="settings.html" style="--i:1"><i class='bx bx-cog'></i></a>
        </nav>
    </header>
    
    </div>
    
    <div class="content">
    <br><br><br><br>

  
    <div class="feed">
            <form action="post22.php" method="POST" enctype="multipart/form-data">

                <label for="Nombre">Autor: </label>
                <input type="text" name="Nombre" id="" value="<?php echo $nombre ?>" required> <!-- En Value va el nombre de Usuario guardado en la session -->
                <label for="Contenido">Contenido: </label>
                <input type="text" name="Contenido" id="">
                <label for="image">Imagen: </label>
                <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/JPG,image/PNG">
                <input type="submit">
            </form>
<div id="background">
  <center>
  <br><br>
<?php

    $sentencia = "SELECT * FROM posts ORDER BY id DESC";

    $enviar = mysqli_query($conn,$sentencia);

   
    while($mostrar = mysqli_fetch_array($enviar)){
                
      echo("<div id='backgroundPost'><br><h2>".$mostrar['Author'])."</h2>";
      echo("<p>".$mostrar['Content'])."</p><br>";
        if($mostrar['Content']){
        
          }


          if($mostrar['Img'] != null && $mostrar['Img'] != 'images/'){
            ?>
                    <img src="<?php echo($mostrar['Img']);?>" width="250">
            
            <?php
                    }
                    
      echo("<h6>".$mostrar['PostDate'])."</h6><br>";
        echo "<br></div><br>";
    }

?>

  </div></center>
    </div>
<div class="chat">
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
          require_once 'php/BuscarUsuario.php';
          ?>
          <img src="images/<?php echo $row['img']; ?>" alt=""><!--Imagen de el perfil-->
          <div class="details">
            <span><?php echo $row['fname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Cerrar Sesión</a>
      </header>
      <div class="search">
        <span class="text">Chatea con alguien</span>
        <input type="text" placeholder="Introduce un nombre ">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">

      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
  </div>
  </div>
</body>

</html>