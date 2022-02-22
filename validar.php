<?php 

include_once 'database.php';
include_once 'Inicio_sesion.php';
class usuario extends Database{

    protected $correo;
    protected $contrasena;

    public function correoExists($correo, $contrasena){
      
      session_start();
      $_SESSION['correo']=$correo;

      $consulta = ("SELECT * FROM usuarios WHERE Correo_usuario= '$correo' AND Contrasena_usuario= '$contrasena'");
      $resultado=mysqli_query($con, $consulta);
      
      $filas=mysqli_num_rows($resultado);

      if($filas){
        header('bienvenido.php');
      } else{
      ?>
      <h1 class="bad">Correo o Clave equivocados</h1>
      <?php    
      }
   
      mysqli_free_result($resultado);
      mysqli_close($con);
    }

}

?>