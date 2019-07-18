<?php
if(isset($_POST['submit'])):
  session_start();
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  try{
    require_once('includes/funciones/bd_conexion.php');
    $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario = ?; ");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->bind_result($id, $nombre_usuario, $password_usuario);//devuelve los registros que se hayan seleccionados " * todos"
    while ($stmt->fetch()) {
      if(password_verify($password, $password_usuario)){//compara password original con el hash
        $_SESSION['usuario'] = $usuario;
        $_SESSION['id'] = $id;
        header('Location: admin-area.php');
      }else{
        echo "<div class='mensaje error'>";
        echo "Hubo un error";
        echo "</div>";
      }

    }
    $stmt->close();
    $conn->close();
  }catch(Exception $e){
    echo "Error:" . $e->getMessage();
  }
endif;
?>

<?php include_once 'includes/templates/header.php' ?>



       <section class="seccion contenedor lol">
         <h2>Iniciar Sesión</h2>
         <form class="login" action="login.php" method="POST">
           <div class="campo">

             <label for="usuario">Usuario: </label>
               <input type="text" id="usuario" name="usuario" placeholder="Tu Usuario">
            </div>

            <div class="campo">
                <label for="password">Contraseña:  </label>
                  <input type="password" id="password" name="password" placeholder="Tu Contraseña">
            </div>

           <div class="campo">
             <input type="submit" name="submit" class="button" value="Iniciar Sesión">

           </div>
         </form>
         <?php  ?>


       </section>

<?php include_once 'includes/templates/footer.php' ?>
