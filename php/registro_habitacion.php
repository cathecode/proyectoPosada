<?php

//se llama al archivo de conección de la Base de datos
include 'conexion.php';
$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_entrada = $_POST['fecha_entrada'];
$fecha_salida = $_POST['fecha_salida'];
$cant_adultos = $_POST['cant_adultos'];
$cant_ninos = $_POST['cant_ninos'];
$tipo_habitacion = $_POST['tipo_habitacion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$servicios_adicionales = $_POST['servicios_adicionales'];


//se insertan los datos en la base de datos
$query = "INSERT INTO reservas (cedula, nombres, apellidos, fecha_entrada, fecha_salida, cant_adultos, cant_ninos, tipo_habitacion, correo, telefono, servicios_adicionales)
         VALUES ('$cedula', '$nombres', '$apellidos', '$fecha_entrada', '$fecha_salida', '$cant_adultos', '$cant_ninos', '$tipo_habitacion', '$correo', '$telefono', '$servicios_adicionales')";



//se ejecutar mensajes
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert ("¡Reservación exitosa!");
    window.location = "../form_reservas.html"
    </script>
    ';
}
else{
    echo '
    <script>
    alert ("Estamos en mantenimiento preventivo");
    window.location = "../form_reservas.html"
    </script>
    ';
}

mysqli_close($conexion);

?>


