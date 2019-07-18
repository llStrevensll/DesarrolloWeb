<?php
  include_once 'includes/funciones/funciones.php';
  session_start();
  usuario_autenticado();
?>
<?php include_once 'includes/templates/header.php' ?>



       <section class="admin seccion contenedor lol">
         <h2>Crear Administradores</h2>
         <?php include_once 'includes/templates/admin_nav.php'; ?>
         <form class="login" action="crear_admin.php" method="POST">
           <div class="campo">

             <label for="usuario">Usuario: </label>
               <input type="text" id="usuario" name="usuario" placeholder="Tu Usuario">
            </div>

            <div class="campo">
                <label for="password">Contraseña:  </label>
                  <input type="password" id="password" name="password" placeholder="Tu Contraseña">
            </div>

           <div class="campo">
             <input type="submit" name="submit" class="button" value="Crear">

           </div>
         </form>
         <?php if (isset($_POST['submit'])) :
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];

            if(strlen($usuario) < 5):
              echo "El nombre de usuario debe ser mas largo";
            endif;
            $opciones = array(
              'cost' => 12, //iteraciones para generar hash
              //'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),//salt: valores aleaotrios que se puede adicionar al passhash
                                            //mcrypt_created_iv: crea vector de datos inicializado
                                            //22 tamaño, MCRYPT_DEV_URANDOM de donde toma los valores para random
              'salt' => md5($password),
            );

            $hashed_password = password_hash($password, PASSWORD_BCRYPT, $opciones);//Cifrar contraseña(60caracteres)
            try{
              require_once('includes/funciones/bd_conexion.php');
              $stmt = $conn->prepare("INSERT INTO admins (usuario, hash_pass) VALUES (?,?)");
              $stmt->bind_param("ss", $usuario, $hashed_password);
              $stmt->execute();
              if($stmt->error):
                echo "<div class='mensaje error'>";
                echo "Hubo un error";
                echo "</div>";
              else:
                echo "<div class='mensaje'>";
                echo "Se insertó correctamente el usuario";
                echo "</div>";
              endif;
              $stmt->close();
              $conn->close();
            }catch(Exception $e){
              echo "Error:" . $e->getMessage();
            }


          endif;
          ?>

       </section>

<?php include_once 'includes/templates/footer.php' ?>
