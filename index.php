<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header3.php"; ?>

<body>
 
<header class="header">
        <br><bR>

        <a href="users.php" class="logo">SSW</a>
       
    </header>
    <main>
        <section id="Elnacho">
            <article id="TitleRegister">
                <h1 id="titulo">Sign Up</h1>
            </article>
            <article id="FormRegister">    
                <form action="signup.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <input type="text" name="fname" placeholder=" Nombre de Usuario"><br><br><br>
                    
                    <input type="text" name="email" placeholder=" E-mail"><br><br><br>
        
                    <input type="password" name="password" placeholder=" Password"><br><br><br>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/JPG,image/PNG" >
                    <br>
                    <label>Haga click en el recuadro para no ingresar una imagen</label><br>
                    <input type="checkbox" name="SIMG">
                    <br>
                    <input type="submit" name="submit" value="Registrar">

                    <!-- <input type="submit" id="BotonAcceso" name="enviar" value="Registrarse"> -->

                    <br><br>
                </form>
            </article>
            <article>
                <a id="loginLink1" href="login.php">Iniciar Sesion</a>
            </article>
        </section>
    </main>

    <footer>
        <br>
        <a class="footer" href="PF.html">Preguntas Frecuentes</a>
        <a class="footer" href="Us.html">Acerca de</a>
        <a class="footer" href="Contactanos.html">Contactanos</a>
    </footer>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>

