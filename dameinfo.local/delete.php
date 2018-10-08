<?php
    $conexion=mysqli_connect('localhost','root','andres123','datospersona');
    if(ISSET($_POST['id'])){
      foreach ($_POST['id'] as $id) {
        $conexion-&gt;query("DELETE FROM 'datos2' WHERE 'id' = '".$id"'");
      }
    }


 ?>
