
<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header3.php"; ?>




<body id="fondo">
    <header class="header">
        <br><bR>

        <a href="users.php" class="logo">SSW</a>
       
    </header>
    <main>      
            <section id="Elnacho">
                <article id="TitleLogin">
                    <h1 id="titulo">Sign In</h1>
                </article>
                <article id="FormLogin">
      <form action="loginV.php" method="POST" enctype="multipart/form-data" autocomplete="off" >

      <!-- <input type="text" name="user" placeholder=" Nombre de Usuario"><br><br><br> -->
                        
                        <input type="text" name="email" placeholder="Ingresa tu Correo Registrado" required><br><br><br>

                        <input type="password" name="password" placeholder="Ingresa tu Contraseña" required><br><br><br>
                  
                        <input type="submit" id="BotonAcceso" name="submit" value="Access ">
                        <br><br>
       
      </form>
      </article>
                <article>
                <a id="loginLink1" href="RC.html">Did you forget your password?</a>
                <a id="loginLink2" href="index.php"> Register </a>
                
                </article><br>
            </section>
    </main>
    <footer>
        <br>
        <a class="footer" href="PF.html">Preguntas Frecuentes</a>
        <a class="footer" href="Us.html">Acerca de</a>
        <a class="footer" href="Contactanos.html">Contactanos</a>
    </footer>


  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
  <script src="javascript/ModoOscuro.js"></script>
  
</body>

</html>


<!-- codigo para que tenga mod ModoOscuro
  <body id="fondo">
    <header class="header">
        <br><bR>

        <a href="" class="logo">SSW</a>
       
    </header>
    <main>      
            <section id="Elnacho">
                <article id="TitleLogin">
                    <h1 id="titulo">Sign In</h1>
                </article>
                <article id="FormLogin">
                    <form action="Login.php" method="post">
                        <input type="text" name="user" placeholder=" Nombre de Usuario"><br><br><br>
                        
                        <input type="email" name="email" placeholder=" E-mail"><br><br><br>

                        <input type="password" name="password" placeholder=" Password"><br><br><br>

                        <input type="submit" id="BotonAcceso" name="enviar" value=" Access ">
                        <br><br>
                    </form>
                </article>
                <article>
                <a id="loginLink1" href="OlvideMiContra.html">Did you forget your password?</a>
                <a id="loginLink2" href="Registrarse.html"> Register </a>
                
                </article><br>
            </section>
    </main>
    <footer>
        <p></p>
        <button type="button" onclick="modoOscuro()">Cambiar Tema</button>
    </footer>
</body>
</html>
 -->