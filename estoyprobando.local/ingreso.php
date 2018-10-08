<?php


 $s = "localhost";
 $u = "root";
 $p = "andres123";
 $bd = "datospersona";

 $datos2 = "datos2";

 $conexion = new mysqli($s,$u,$p,$bd);

 if($conexion->connect_errno){
   exit();
   echo "no se ha conectado a la base de datos";
 }else{
   echo "conectado";
 }
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nacionalidad = $_POST['nacionalidad'];
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$conexion->query("INSERT INTO $datos2(nombre,apellido,nacionalidad,ciudad,email,telefono)
                  VALUES('$nombre','$apellido','$nacionalidad','$ciudad','$correo','$telefono')");
echo "datos guardados correctamente<br><a href='llenado.html'>Volver a ingresar datos</a><br/>";

echo "¿Ir a la página principal?<br><a href='http://localhost/index.html'>Página principal</a>";



?>
