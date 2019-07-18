<?php
  include_once 'includes/funciones/funciones.php';
  session_start();
  usuario_autenticado();
  /*if(!isset($_SESSION['usuario'])):
    header('Location:login.php');
  endif;*/
?>

<?php include_once 'includes/templates/header.php'; ?>



       <section class="admin seccion contenedor lol">
         <h2>Panel de Administración</h2>
         <p> Bienvenido <?php echo $_SESSION['usuario']; ?></p>

         <?php include_once 'includes/templates/admin_nav.php'; ?>


       </section>

<?php include_once 'includes/templates/footer.php' ?>
