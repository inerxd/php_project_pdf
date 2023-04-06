<?php
//conexion a la base de datos
$com = new mysqli('localhost','root','','proyect_pdf');
if ($com->connect_errno){
echo " Fallo en la conexion:(".$com->connect_errno.")". $com->coonect_errno ;
}
echo  $com->host_info."\n";


?>