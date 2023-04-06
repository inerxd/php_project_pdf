<?php

require_once __DIR__ . '/plantillas/vendor/autoload.php';
require 'conexion.php';
$sqlentidad = mysqli_query($com,"SELECT MAX(id_Entidad) AS ultimoid FROM datos_entidad");
$datos_entidad = mysqli_fetch_assoc($sqlentidad);
$id_entidad = $datos_entidad['ultimoid'];



$entidad = $_GET['id'];
require_once('index.php');
$css = file_get_contents('css/estilos.css');
$plantilla = plantilla();
$mpdf = new \Mpdf\Mpdf(['format'=>'legal' ]);
$nmpdf = ("Acta_".$id_entidad. ".pdf");
$guardar = ("pdfs/");
$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS); 
$mpdf->WriteHTML($plantilla,\Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output($guardar.$nmpdf,"F");

$acta = $guardar.$nmpdf;

$ubiarchivo = file_get_contents($acta);
$archivos = filesize($acta);
$blob = fopen($acta,"r");

$archivoblob = fread($blob,$archivos);
$archivoblob = addslashes($ubiarchivo);
 //$archivoblob = addslashes($archivoblob);

fclose($blob);

//echo ($archivoblob);

$resultado = "UPDATE datos_entidad SET archivo_blob = '$archivoblob ' where id_Entidad = $entidad";
mysqli_query($com,$resultado);


header("location: form.php");


?>

