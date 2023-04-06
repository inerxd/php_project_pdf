<!--consulta de los datos de todas la tabla de la base de datos -->
<?php
require 'conexion.php';
$mysql = "SELECT archivo_blob, id_Entidad, id_Padres as padres, esposos.id_Pareja as parejas, entidad.Entidad, entidad.Delegacion, entidad.juzgado, entidad.Libro, entidad.Acta, entidad.Anio, entidad.clase, 
entidad.Fecha_registro, esposos.Nombre_Esposo, esposos.Nombre_Esposa, esposos.LugarN_esposo, esposos.LugarN_esposa, esposos.Edad_Esposo, 
esposos.Edad_Esposa, esposos.Nacionalidad_Esposo, esposos.Nacionalidad_Esposa, esposos.Ocupacion_Esposo,esposos.Ocupacion_Esposa, 
esposos.Domicilio_Esposo, esposos.Domicilio_Esposa, padres.Nombre_Pesposo, padres.Nombre_Mesposo, padres.Nombre_Pesposa,  
padres.Nombre_Mesposa, padres.Domicilio_Pesposo, padres.Domicilio_Mesposo, padres.Domicilio_Pesposa, padres.Domicilio_Mesposa, 
padres.Ocupacion_Pesposo, padres.Ocupacion_Mesposo, padres.Ocupacion_Pesposa, padres.Ocupacion_Mesposa
FROM datos_entidad as entidad, datos_esposos as esposos, datos_padres as padres, estados as estados
WHERE entidad.id_Pareja = esposos.id_Pareja AND padres.id_Pareja = esposos.id_Pareja and entidad.id_estados = estados.id_estados
 ";
$result = mysqli_query($com,$mysql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" >
   <link rel="stylesheet" href="css/tablas.css">
   


</head>

<body>

<!--la etiqueda de la tabla -->
<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Datos de la pareja</th>
                <th>Datos de los padre de la páreja</th>
                <th>Datps de la entidad</th>
                <th>opciones</th>
                <th>mas opciones <th>
            </tr>
        </thead>
        <tbody>
        <?php
        /*while anitado para el cliclos de los datos */
while($row = mysqli_fetch_array($result)):
?>
               <tr>
                  <td><a  href="#pareja<?php echo $row['parejas']?>" data-toggle='modal' class="btn btn-primary">La pareja de 
                  <br><?php echo $row['Nombre_Esposo'];?>,<br><?php echo $row['Nombre_Esposa'];?> </a></td>
                  <td><a  href="#padres<?php echo $row['padres']?>" data-toggle='modal' class="btn btn-primary">Mostrar los datos de los padres</a></td>
                  <td><a  href="#entidad<?php echo $row['id_Entidad']?>" data-toggle='modal' class="btn btn-primary">Entidad</a></td>
                  <td><a  href="edicion.php?id_padres=<?php echo $row["padres"]?>&id_pareja=<?php echo $row["parejas"]?>" class="btn btn-secondary">Actualizar datos</a>
                  <br><a href="#showpdf<?php echo $row["id_Entidad"];?>"data-toggle='modal' class="btn btn-success"> Imprimir acta de matrimonio </a>
                 <br><a href="#eliminar<?php echo $row["id_Entidad"];?>"data-toggle='modal' class="btn btn-danger">Eliminar datos  </a>
                 
                  </td>
         
                
               </tr>
            
         
            <div id="showpdf<?php echo $row["id_Entidad"];?>" class="modal fade" role="dialog">
         <div class="modal-dialog modal-lg">
     
            <!-- Modal content-->
       

            <div class="modal-content">
               <div class="modal-header">
               </div>
             
               <div class="modal-body">

                  <!-- Aqui-->

                  <object data="data:application/pdf;base64,<?php echo base64_encode($row["archivo_blob"])?>"
            type="application/pdf" width="100%" height="500px" style="overflow:auto;">   </object>
                       
  

  
  <!--i termina-->
              </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                     </div>
                    </div>
            </div>
         </div>   
         

                
         <!-- modal de los esposos-->
           <div id="pareja<?php echo $row['parejas'];?>" class="modal fade" role="dialog">
         <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
               </div>

               <div class="modal-body">

                  <!-- Aqui-->
    
                  <div class="grid-container">
  <div class="grid-item"><h3>Nombres de la pareja </h3></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Nombre_Esposo'];  ?></h4></div>
  <div class="grid-item">  <h4 class="modal-title" style="color:black;"><?php echo $row['Nombre_Esposa'];  ?>                  </div>  
  <div class="grid-item"><h3>Lugar de nacimiento </h3>  </div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['LugarN_esposo'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['LugarN_esposa'];  ?></div>  
  <div class="grid-item">Edad  </div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Edad_Esposo'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Edad_Esposa'];  ?></div>  
  <div class="grid-item"><h3>Nacionalidad</h3>  </div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Nacionalidad_Esposo'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Nacionalidad_Esposa'];  ?></div>  
  <div class="grid-item"><h3>ocupacion</h3>  </div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Ocupacion_Esposo'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Ocupacion_Esposa'];  ?></div> 
  <div class="grid-item"><h3>Domicilio </h3>  </div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Domicilio_Esposo'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Domicilio_Esposa'];  ?></div>  
  

</div>
  
  <!--i termina-->
              </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                     </div>
                    </div>
            </div>
         </div>

              <!-- modal de los padres-->
              <div id="padres<?php echo $row['padres'];?>" class="modal fade" role="dialog">
         <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" style="color:black;"><?php echo $row['Nombre_Esposo']; echo " y "; echo $row['Nombre_Esposa']; ?> </h4>
               </div>

               <div class="modal-body">

                  <!-- Aqui-->
                  
                  <div class="grid-container">
  <div class="grid-item"><hq>Nombre de los padres del esposo</h1></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Nombre_Pesposo'];  ?></h4></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Nombre_Mesposo'];  ?></h4></div>  
  <div class="grid-item"><h3>Nombre de los padres de la esposa </h3></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Nombre_Pesposa'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Nombre_Mesposa'];  ?></div>  
  <div class="grid-item">Domicilio de los padres del esposo</div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Domicilio_Pesposo'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Domicilio_Mesposo'];  ?></div>  
  <div class="grid-item">Domicilio de los padres de la esposa</div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Domicilio_Pesposa'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Domicilio_Mesposa'];  ?></div> 
  <div class="grid-item">ocupacion de los padres de la esposo</div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Ocupacion_Pesposo'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Ocupacion_Mesposo'];  ?></div> 
  <div class="grid-item">ocupacion de los padres de la esposa</div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Ocupacion_Pesposa'];  ?></div>
  <div class="grid-item"><h4 class="modal-title" style="color:black;"><?php echo $row['Ocupacion_Mesposa'];  ?></div>  
</div>

                  <!-- Aqui termina-->
              </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                     </div>
                    </div>
            </div>
         </div>
                 <!-- modal de los entidad-->
                 <div id="entidad<?php echo $row['id_Entidad'];?>" class="modal fade" role="dialog">
      
      <div class="modal-dialog modal-lg">

         <--! Modal content-->
         <div class="modal-content">
            <div class="modal-header">
            </div>

            <div class="modal-body">

               <!-- Aqui-->
               <div class="grid">
  <div class="grid-item" id="item" >Entidad</div>
  <div class="grid-item" id="item2"><h4 class="modal-title" style="color:black;"><?php echo $row['Entidad'];  ?></div>
  <div class="grid-item" id="item3">Delegacion</div>
  <div class="grid-item" id="item4" ><h4 class="modal-title" style="color:black;"><?php echo $row['Delegacion'];  ?></div>
  <div class="grid-item" id="item5" >Juzgado</div>
  <div class="grid-item"id="item6" ><h4 class="modal-title" style="color:black;"><?=  $row['juzgado'];  ?></div>
  <div class="grid-item" id="item7">Libro de la entidad</div>
  <div class="grid-item" id="item8" >  <h4 class="modal-title" style="color:black;"><?php echo $row['Libro'];  ?></div>
  <div class="grid-item" id="item9" >Acta</div>
  <div class="grid-item" id="item10"><h4 class="modal-title" style="color:black;"><?php echo $row['Acta'];  ?></div>
  <div class="grid-item" id="item11">año</div>
  <div class="grid-item" id="item12" ><h4 class="modal-title" style="color:black;"><?php echo $row['Anio'];  ?></div>
  <div class="grid-item" id="item13" >Clase</div>
  <div class="grid-item"id="item14" ><h4 class="modal-title" style="color:black;"><?php echo $row['clase'];  ?></div>
  <div class="grid-item" id="item15">Fecha registro</div>
  <div class="grid-item" id="item16" >  <h4 class="modal-title" style="color:black;"><?php echo $row['Fecha_registro'];  ?></div>


</div>

               <!-- Aqui termina-->
           </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                 </div>
         </div>
      </div> 

            <?php  endwhile ?>
        </tbody>
        
        <tfoot>
            <tr>
            <th>Datos de la pareja</th>
                <th>Datos de los padre de la páreja</th>
                <th>Datps de la entidad</th>
                <th>opciones</th>
        </tfoot>
    </table>
 
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
</body>
</html>