<?php
include 'conexion.php';
//insersicion de los datos 
//print_r($_POST);
$Nombre_Esposo    = $_POST["Nombre_Esposo"];
$Nombre_Esposa    = $_POST["Nombre_Esposa"];
$LugarN_esposo    = $_POST["LugarN_esposo"];
$LugarN_esposa    = $_POST["LugarN_esposa"];
$Edad_Esposo    = $_POST["Edad_Esposo"];
$Edad_Esposa    = $_POST["Edad_Esposa"];
$Nacionalidad_Esposo    = $_POST["Nacionalidad_Esposo"];
$Nacionalidad_Esposa    = $_POST["Nacionalidad_Esposa"];
$Ocupacion_Esposo    = $_POST["Ocupacion_Esposo"];
$Ocupacion_Esposa    = $_POST["Ocupacion_Esposa"];
$Domicilio_Esposo    = $_POST["Domicilio_Esposo"];
$Domicilio_Esposa    = $_POST["Domicilio_Esposa"];



$insert = "INSERT INTO datos_esposos(Nombre_Esposo,Nombre_Esposa,LugarN_esposo,LugarN_esposa,Edad_Esposo
 ,Edad_Esposa,Nacionalidad_Esposo,Nacionalidad_Esposa,
 Ocupacion_Esposo,Ocupacion_Esposa,Domicilio_Esposo,Domicilio_Esposa)
 VALUES ('$Nombre_Esposo','$Nombre_Esposa','$LugarN_esposo','$LugarN_esposa','$Edad_Esposo'
 ,'$Edad_Esposa','$Nacionalidad_Esposo','$Nacionalidad_Esposa','$Ocupacion_Esposo','$Ocupacion_Esposa',
 '$Domicilio_Esposo','$Domicilio_Esposa') ";




$resultado = mysqli_query($com, $insert);
if (!$resultado) {
    echo 'error en insertar los datos ';
} else {
    echo 'exito en el insertar los datos';
}


$Nombre_Pesposo = $_POST["Nombre_Pesposo"];
$Nombre_Mesposo = $_POST["Nombre_Mesposo"];
$Nombre_Pesposa    = $_POST["Nombre_Pesposa"];
$Nombre_Mesposa    = $_POST["Nombre_Mesposa"];
$Domicilio_Pesposo    = $_POST["Domicilio_Pesposo"];
$Domicilio_Mesposo = $_POST["Domicilio_Mesposo"];
$Domicilio_Pesposa    = $_POST["Domicilio_Pesposa"];
$Domicilio_Mesposa    = $_POST["Domicilio_Mesposa"];
$Ocupacion_Pesposo    = $_POST["Ocupacion_Pesposo"];
$Ocupacion_Mesposo    = $_POST["Ocupacion_Mesposo"];
$Ocupacion_Pesposa    = $_POST["Ocupacion_Pesposa"];
$Ocupacion_Mesposa   = $_POST["Ocupacion_Mesposa"];


$sqlfolio = mysqli_query($com, "SELECT MAX(id_Pareja) AS ultimoid FROM datos_esposos");
$datos = mysqli_fetch_assoc($sqlfolio);
$id_Pareja = $datos['ultimoid'];


$insert2 = "INSERT INTO  datos_padres(id_Pareja,Nombre_Pesposo,Nombre_Mesposo,Nombre_Pesposa,Nombre_Mesposa,Domicilio_Pesposo,Domicilio_Mesposo
,Domicilio_Pesposa,Domicilio_Mesposa,Ocupacion_Pesposo,Ocupacion_Mesposo,Ocupacion_Pesposa,Ocupacion_Mesposa) 
 VALUES ($id_Pareja,'$Nombre_Pesposo','$Nombre_Mesposo','$Nombre_Pesposa','$Nombre_Mesposa','$Domicilio_Pesposo','$Domicilio_Mesposo',
  '$Domicilio_Pesposa','$Domicilio_Mesposa','$Ocupacion_Pesposo','$Ocupacion_Mesposo'
,'$Ocupacion_Pesposa','$Ocupacion_Mesposa') ";





$resultado2 = mysqli_query($com, $insert2);
if (!$resultado2) {
    echo 'error en insertar los datos ';
} else {
    echo 'exito en el insertar los datos';
}


$Entidad = $_POST["Entidad"];
$Delegacion = $_POST["Delegacion"];
$juzgado = $_POST["juzgado"];
$Libro = $_POST["Libro"];
$Acta = $_POST["Acta"];
$Anio = $_POST["Anio"];
$clase = $_POST["clase"];
$Fecha_registro = $_POST["Fecha_registro"];


$sqlfolio = mysqli_query($com, "SELECT MAX(id_Pareja) AS ultimoid FROM datos_esposos");
$datos = mysqli_fetch_assoc($sqlfolio);
$id_Pareja = $datos['ultimoid'];

$id_estado = $_POST['id_estados'];

$insert3 = "INSERT INTO `datos_entidad` ( `id_Pareja`, `id_estados`, `Entidad`, `Delegacion`, `juzgado`, `Libro`, `Acta`, `Anio`, `clase`, `Fecha_registro`) 
            VALUES ( $id_Pareja, $id_estado, '1', '2', '3', '4', '5', '6', '7', '2022-03-03')";
$resultadoentidad = mysqli_query($com, $insert3);

$sqlentidad = mysqli_query($com, "SELECT MAX(id_Entidad) AS ultimoid FROM datos_entidad");
$datos_entidad = mysqli_fetch_assoc($sqlentidad);
$id_entidad = $datos_entidad['ultimoid'];

header("location: pdf.php?id=$id_entidad");