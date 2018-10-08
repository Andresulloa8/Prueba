<?php

if(isset($_POST['btn'])){

$host="localhost";
$usuario="root";
$contraseña="andres123";
$base="datospersona";

$datos2 = "datos2";

$conexion= new mysqli($host,$usuario,$contraseña,$base);
if($conexion-> connect_errno){
  die("fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion->mysqli_connect_error());
}
//consulta a la base de datos2
$persona="SELECT * FROM $datos2";
$respersona = $conexion->query($persona);

while ($registropersona = $respersona->fetch_array(MYSQLI_BOTH)){
  echo '<tr>
        <td>'.$registropersona['nombre'].'</td>
        <td>'.$registropersona['apellido'].'</td>
        <td>'.$registropersona['nacionalidad'].'</td>
        <td>'.$registropersona['ciudad'].'</td>
        <td>'.$registropersona['email'].'</td>
        <td>'.$registropersona['telefono'].'</td>
        </tr>';

}
}
 ?>
