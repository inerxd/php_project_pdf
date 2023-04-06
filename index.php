
<?php
function plantilla(){
  require 'conexion.php';  

  $plantilla= '

    <!doctype html>
    <html lang=”es”>
    <head>
    
        <meta charset=”UTF-8”>
     
        <title>Formulario</title>
      
    </head>
    <body>

    <div align="center">
    <img src="css/images/image.png" width="90" /> 
    <table class="separado" border="1">
    </div>
    <tr>
   
    <td>entidad</td>
    <td>delegacion</td>
    <td>juzgado</td>
    <td>libro</td>
    <td>acta</td>
    <td>año</td>
    <td>clase</td>
    <td>Fecha de registro</td>
    </tr>

    
    ';
    $entidad = $_GET['id'];
    $consulta = "SELECT estado_matrimonio, id_Entidad, id_Padres as padres, esposos.id_Pareja as parejas, entidad.Entidad, entidad.Delegacion, entidad.juzgado, entidad.Libro, entidad.Acta, entidad.Anio, entidad.clase, 
    entidad.Fecha_registro, esposos.Nombre_Esposo, esposos.Nombre_Esposa, esposos.LugarN_esposo, esposos.LugarN_esposa, esposos.Edad_Esposo, 
    esposos.Edad_Esposa, esposos.Nacionalidad_Esposo, esposos.Nacionalidad_Esposa, esposos.Ocupacion_Esposo,esposos.Ocupacion_Esposa, 
    esposos.Domicilio_Esposo, esposos.Domicilio_Esposa, padres.Nombre_Pesposo, padres.Nombre_Mesposo, padres.Nombre_Pesposa,  
    padres.Nombre_Mesposa, padres.Domicilio_Pesposo, padres.Domicilio_Mesposo, padres.Domicilio_Pesposa, padres.Domicilio_Mesposa, 
    padres.Ocupacion_Pesposo, padres.Ocupacion_Mesposo, padres.Ocupacion_Pesposa, padres.Ocupacion_Mesposa
    FROM datos_entidad as entidad, datos_esposos as esposos, datos_padres as padres, estados as estados
    WHERE entidad.id_Pareja = esposos.id_Pareja AND padres.id_Pareja = esposos.id_Pareja and entidad.id_estados = estados.id_estados and id_Entidad = '$entidad' ";
    $resultado = mysqli_query($com, $consulta);
    $mostrar2 = mysqli_fetch_assoc($resultado);
    
    $plantilla.='
    <tr>

    <td>'.  $mostrar2["Entidad"].'</td>
    <td>'.  $mostrar2["Delegacion"].'</td>
    <td>'.  $mostrar2["juzgado"].'</td>
    <td>'.  $mostrar2["Libro"].'</td>
    <td>'.  $mostrar2["Acta"]  .'</td>
    <td>'.  $mostrar2["Anio"]  .'</td>
    <td>'.  $mostrar2["clase"]  .'</td>
    <td>'.  $mostrar2["Fecha_registro"] .'</td>
  
    </tr>';
    
    
    $plantilla.='
     
    </table>
    
  <br>';
 
  $plantilla.='
  <table cellpadding="5px" autosize="1" border="1" width="100%" style="overflow:wrap">
  <tr>
 <th rowspan="9">C<br>o<br>n<br>t<br>r<br>i<br>b<br>u<br>y<br>e<br>n<br>t<br>e<br>s</th>
 </tr>
 <tr>
 <th rowspan="4">E<br>L</th>
 </tr>
 <tr>
   <td><span>Nombre:'. $mostrar2["Nombre_Esposo"] .'&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Edad: '. $mostrar2["Edad_Esposo"] .'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Nacionalidad: '. $mostrar2["Nacionalidad_Esposo"] .' </span></td>
 </tr> 
 <tr>
   <td><span>Lugar de nacimiento: '.$mostrar2["LugarN_esposo"].' &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ocupacion:'. $mostrar2["Ocupacion_Esposo"] .'  </td>
</span></tr> 
<tr>
  <td><span>Domicilio:'.$mostrar2["Domicilio_Esposo"].'</span></td>
     </tr> 
     <tr>
     <th rowspan="4">E<br>L<br>L<br>A</th>
     </tr>
     <tr>
       <td><span>Nombre:'. $mostrar2["Nombre_Esposa"] .'&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       Edad: '. $mostrar2["Edad_Esposa"] .'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Nacionalidad: '. $mostrar2["Nacionalidad_Esposa"] .' </span></td>
     </tr> 
     <tr>
       <td><span>Lugar de nacimiento: '.$mostrar2["LugarN_esposa"].' &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ocupacion:'. $mostrar2["Ocupacion_Esposo"] .'  </td>
       </span></td>
    </tr> 
    <tr>
      <td>
      
</td>
         </tr> 
        

</table>



<div class="ca" >
<h2><span>estado: '.$mostrar2["estado_matrimonio"].'</h2>
</div>
';






$plantilla.='

<table cellpadding="5px" autosize="1" border="1" width="100%" style="overflow:wrap">
<tr>
<th rowspan="9">P<br>a<br>d<br>r<br>e<br>s</th>
</tr>
<tr>
<th rowspan="4">E<br>L</th>
</tr>
<tr>
 <td><span>Padre:'. $mostrar2["Nombre_Pesposo"] .'&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 ocupacion: '. $mostrar2["Ocupacion_Pesposo"] .'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   </span></td>
</tr> 
<tr>
 <td><span>Madre:'. $mostrar2["Nombre_Mesposo"] .'&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 ocupacion: '. $mostrar2["Ocupacion_Mesposo"] .'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   </span></td>
</tr> 
<tr>
<td><span>Domicilio del padre:'. $mostrar2["Domicilio_Pesposo"] .'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Domicilio de la madre:'. $mostrar2["Domicilio_Mesposo"].'</span></td>
   </tr> 
   <tr>
   <th rowspan="4">E<br>L<br>L<br>A</th>
   </tr>
   <tr>
     <td><span>Padre:'. $mostrar2["Nombre_Pesposa"] .'&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     ocupacion: '. $mostrar2["Ocupacion_Pesposa"] .'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       </span></td>
   </tr> 
   <tr>
     <td><span>Padre:'. $mostrar2["Nombre_Mesposa"] .'&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     ocupacion: '. $mostrar2["Ocupacion_Mesposa"] .'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       </span></td>
  </tr> 
  <tr>
    <td><span>Domicilio del padre:'. $mostrar2["Domicilio_Pesposa"] .'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Domicilio de la madre:'. $mostrar2["Domicilio_Mesposa"].'</span></td>
       </tr> 
      

</table>




    ';
    
    return $plantilla;
  }
?>