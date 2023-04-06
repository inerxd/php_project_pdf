<?php
include 'conexion.php';

//insersicion de los datos s
//print_r($_POST);
$id_pareja = isset( $_GET["id_pareja"]);
$id_padres = isset ($_GET["id_padres"]);
$Nombre_Esposo    = isset ($_POST["Nombre_Esposo"]);
$Nombre_Esposa    = isset($_POST["Nombre_Esposa"]);
$LugarN_esposo    = isset($_POST["LugarN_esposo"]);
$LugarN_esposa    = isset( $_POST["LugarN_esposa"]);
$Edad_Esposo    = isset($_POST["Edad_Esposo"]);
$Edad_Esposa    = isset($_POST["Edad_Esposa"]);
$Nacionalidad_Esposo    =isset( $_POST["Nacionalidad_Esposo"]);
$Nacionalidad_Esposa    = isset($_POST["Nacionalidad_Esposa"]);
$Ocupacion_Esposo    = isset($_POST["Ocupacion_Esposo"]);
$Ocupacion_Esposa    = isset($_POST["Ocupacion_Esposa"]);
$Domicilio_Esposo    = isset($_POST["Domicilio_Esposo"]);
$Domicilio_Esposa    = isset($_POST["Domicilio_Esposa"]);



$sql = "UPDATE datos_esposos  SET  Nombre_Esposo = '$Nombre_Esposo', LugarN_esposo=' $LugarN_esposo',Edad_Esposo='$Edad_Esposo',
Nacionalidad_Esposo = '$Nacionalidad_Esposo' , Ocupacion_Esposo = '$Ocupacion_Esposo', Domicilio_Esposo ='$Domicilio_Esposo'
, Nombre_Esposa = '$Nombre_Esposa', LugarN_esposa = '$LugarN_esposa', Edad_Esposa ='$Edad_Esposa' , Nacionalidad_Esposa='
 $Nacionalidad_Esposa' ,Ocupacion_Esposa = '$Ocupacion_Esposa ', Domicilio_Esposa= ' $Domicilio_Esposa' 
  WHERE id_Pareja = $id_pareja";

//$resultado=mysqli_query($com,$sql);
if ($com->query($sql) === TRUE) {
   // $sql = "SELECT * FROM datos_esposos WHERE id_Pareja='$id_pareja'";
    //$resultado = mysqli_query($com, $sql);
    //while($mostrar = mysqli_fetch_array($resultado)){
       // echo $mostrar['Nombre_Esposo'];
    
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $com->error;
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


$sql = mysqli_query($com, "SELECT MAX(id_Pareja) AS ultimoid FROM datos_esposos");
$datos = mysqli_fetch_assoc($sql);
$id_Pareja = $datos['ultimoid'];


$actualizar2 = "UPDATE datos_padres SET Nombre_Pesposo='$Nombre_Pesposo',Nombre_Mesposo='$Nombre_Mesposo',Nombre_Pesposa='$Nombre_Pesposa',
Nombre_Mesposa='$Nombre_Mesposa',Domicilio_Pesposo='$Domicilio_Pesposo',Domicilio_Mesposo='$Domicilio_Mesposo',Domicilio_Pesposa ='$Domicilio_Pesposa',
Domicilio_Mesposa ='$Domicilio_Mesposa',Ocupacion_Pesposo ='$Ocupacion_Pesposo',Ocupacion_Mesposo='$Ocupacion_Mesposo', Ocupacion_Pesposa ='$Ocupacion_Pesposa',
Ocupacion_Mesposa ='$Ocupacion_Mesposa' WHERE id_Padres= '$id_padres'";



if ($com->query($actualizar2) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $com->error;
  }























