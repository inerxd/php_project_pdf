<!doctype html>
<html lang=”es”>
<head>

    <meta charset=”UTF-8”>
    <link rel="stylesheet"  href="css/estilos.css" >
    <title>Subtablas</title>
  
</head>
<body>
<table class="separado" border="1">

<tr>
<td>Estado de matrimnonio </td>
<td>Entidad</td>
<td>Delegacion</td>
<td>Juzgado</td>
<td>Libro</td>
<td>Acta</td>
<td>Año</td>
<td>Clase</td>
<td>Fecha_registro</td>
<td></td>
</tr>
<?php
require('conexion.php');
$sql = "SELECT * FROM datos_entidad";
$conexion = mysqli_query($com,$sql);
while ($mostrar = mysqli_fetch_assoc($conexion))
{
  //var_dump($mostrar);
?>
<tr>

    
<td><?php echo $mostrar["Estado_Matrimonio"];  ?></td>
<td><?php echo $mostrar["Entidad"];  ?></td>
<td><?php echo $mostrar["Delegacion"];  ?></td>
<td><?php echo $mostrar["juzgado"];  ?></td>
<td><?php echo $mostrar["Libro"];  ?></td>
<td><?php echo $mostrar["Acta"];  ?></td>
<td><?php echo $mostrar["Anio"]; ?></td>
<td><?php echo $mostrar["clase"];  ?></td>
<td><?php echo $mostrar["Fecha_registro"];  ?></td>
</tr>
<?php

}
?>
</table>
<br><br>

<div id="container">
   <div class="item" id="item1"></div>
   <div class="item" id="item2"></div>
   <div class="item" id="item3"></div>
   <div class="item" id="item4"></div>
   <div class="item" id="item5"></div>
   <div class="item" id="item6"></div>
   <div class="item" id="item7"></div>
  
    
    </div>



    <table>
       <tr>
      <th rowspan="9">C<br>o<br>n<br>t<br>r<br>i<br>b<br>u<br>y<br>e<br>n<br>t<br>e<br>s</th>
      </tr>
      <tr>
      <th rowspan="4">E<br>L</th>
      </tr>
      <tr>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nat</td>
      </tr> 
      <tr>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nat</td>
     </tr> 
     <tr>
       <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nat</td>
          </tr> 
          <tr>
          <th rowspan="4">E<br>L<br>L<br>A</th>
          </tr>
          <tr>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nat</td>
          </tr> 
          <tr>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nat</td>
         </tr> 
         <tr>
           <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nat</td>
              </tr> 
             

 </table>

<table>
  <tr>
     <td rowspan="3" colspan="1">C<br>o<br>n<br>t<br>r<br>i<br>b<br>u<br>y<br>e<br>n<br>t<br>e<br></td>
      <td>
     <table>
       <tr>
         <td colspan="2">Nombre </td>
       <td>Edad  </td>
       <td>Nacionalidad</td>
    </tr><br>
    <tr>
       <td colspan="2">Lugar de nacimiento</td>
       <td>ocupacion</td>
      </tr><br>
      <tr>
      <td colspan="4"></td>
        </tr><br>
</table>
</td>
</table> 



<table>
       <tr>
      <th rowspan="9">C<br>o<br>n<br>t<br>r<br>i<br>b<br>u<br>y<br>e<br>n<br>t<br>e<br>s</th>
      </tr>
      <tr>
      <th rowspan="4">E<br>L</th>
      </tr>
      <table>
       <tr>
         <td colspan="2">Nombre </td>
       <td>Edad  </td>
       <td>Nacionalidad</td>
    </tr><br>
    <tr>
       <td colspan="2">Lugar de nacimiento</td>
       <td>ocupacion</td>
      </tr><br>

 </table>


 <div class="container2">

<div class="uno">
    <p>Hola</p>
</div>

<div class="dos">
    <div class="cuadro1">
        <p>Es una prueba<?php
                        for ($i = 0; $i < 5; $i++) {
                            echo ("&nbsp;");
                        }
                        ?>
            hola</p>
    </div>
    <div class="cuadro2">
        <p>Es una prueba</p>
    </div>
</div>

<div class="tres">
    <div class="cuadro1">
        <p>Es una prueba</p>
    </div>
    <div class="cuadro2">
        <p>Es una prueba</p>
    </div>
</div>

</div>










       </body>
    </html>
    
















<!--<div class="grid-container">
<div class="item1">C<br>O<br>N<br>T<br>R<br>I<br>B<br>U<br>Y<br>E<br>N<br>T<br>E<br>S   </div>
  <div class="item2"><br>E<br>L</div>
  <div class="item3">E<br>L<br>L<br>A   </div>
  
  <div class="item4">hola</div>
  <div class="item5">prueba</div>

</div>-->

</body>
</html>
