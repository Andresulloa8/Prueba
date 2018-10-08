
<?php

       $conexion=mysqli_connect('localhost','root','andres123','datospersona');

 ?>


<!DOCTYPE html>
<html>
<head>
     <link href="estilos2.css" rel="stylesheet" type="text/css">
     <title>Mostrar datos</title>
</head>
<body>
<br>
<table class="table" border="1">
  <input type="submit" value="Volver" name="btn" onclick="history.back()"><br/>
  <input type="button" id="btn_delete" value="eliminar">
  <tr><br>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Nacionalidad</td>
    <td>Ciudad</td>
    <td>E-mail</td>
    <td>Teléfono</td>
  </tr>
    <?php
      $sql="SELECT * FROM datos2";
      $result=mysqli_query($conexion,$sql);
          while($mostrar=mysqli_fetch_array($result)){

   ?>
  <tr>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['apellido'] ?></td>
      <td><?php echo $mostrar['nacionalidad'] ?></td>
      <td><?php echo $mostrar['ciudad'] ?></td>
      <td><?php echo $mostrar['email'] ?></td>
      <td><?php echo $mostrar['telefono'] ?></td>
  </tr>
   <?php
 }

    ?>



</body>
