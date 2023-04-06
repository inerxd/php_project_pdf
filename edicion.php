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
$row = mysqli_fetch_assoc($result);
?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Bievenido formulario de los esposos</title>
    <link rel="stylesheet"  href="css/hola.css" >
    <link rel="stylesheet"  href="css/perfect-scrollbar.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet">

<style>
 
</style>  
</head>

  <body>
  


  <div class="container" id="tablas" align="center">
<form action="uptade.php" method="post">
<br> 
     
        <label >Nombre del esposo</label>
             <br>      
        <input type="text" class="bor" name="Nombre_Esposo" value="<?php echo $row['Nombre_Esposo']; ?>">
            <br>
            <br>
         <label>Lugar de nacimiento del esposo</label>
              <br>  
        <input type="text" class="bor"  name ="LugarN_esposo" value="<?php echo $row['LugarN_esposo']; ?>">    
            <br>  
            <br>
          <label>Edad del esposo</label>
          <br>  
          <input type="number" class="bor" name="Edad_Esposo" value="<?php echo $row['Edad_Esposo']; ?>">    
            <br>
            <br>  
           <label>Nacionalidad del esposo:</label>
           <br>  
           <input type="text" class ="bor" name="Nacionalidad_Esposo" value="<?php echo $row['Nacionalidad_Esposo']; ?>">
              <br>
              <br>
            <label>Ocupacion del esposo:</label>
              <br>  
            <input type="text" class="bor" name="Ocupacion_Esposo" value="<?php echo $row['Ocupacion_Esposo']; ?>">
            <br>
            <br>
            <label>Domicilio del esposo</label>
             <br>  
            <input type="text" class="bor" name="Domicilio_Esposo" value="<?php echo $row['Domicilio_Esposo']; ?>">
               <br>      
               <br>
               <br>       
   

        <label>Nombre de la esposa</label>
        <br>  
        <input type="text" class="bor" name="Nombre_Esposa" value="<?php echo $row['Nombre_Esposa']; ?>">    
        <br>
        <br>   
        <label>Lugar de nacimiento de la esposa</label>
        <br>  
        <input type="text" class="bor" name="LugarN_esposa" value="<?php echo $row['LugarN_esposa']; ?>">    
        <br>
        <br>   
        <label>Edad de la esposa</label>
        <br>  
        <input type="number" class="bor"  name="Edad_Esposa" value="<?php echo $row['Edad_Esposa']; ?>">    
        <br>
        <br>   
        <label>Nacionalidad de la esposa</label>
        <br>  
        <input type="text" class="bor"  name="Nacionalidad_Esposa" value="<?php echo $row['Nacionalidad_Esposa']; ?>">    
        <br>
        <br>   
        <label>Ocupacion de la esposa</label>
        <br>  
        <input type="text"  class="bor" name="Ocupacion_Esposa" value="<?php echo $row['Ocupacion_Esposa']; ?>">    
        <br>  
        <br> 
        <label>Domiclio de la esposa</label>
        <br>  
        <input type="text" class="bor" name="Domicilio_Esposa" value="<?php echo $row['Domicilio_Esposa']; ?>">   
        <br>
        <br>
        <h2>estado del matrimonio </h2>
        <br>
        <select  name="id_estados">
          
        <option value="" >selecione alguna de estas opciones  </optipn>
          <option value="1">separaciobn de bienes </optipn>
          <option value="2">patrimonial </optipn>
          <option value="3">conyuge </optipn>
        
        </select>
     <br>
     <br>
 
        <label>Nombre del padre del esposo:</label>
            <br>  
          <input type="text" class="bor" name="Nombre_Pesposo" value="<?php echo $row['Nombre_Pesposo']; ?>">
          <br>
          <br> 
         <label>Nombre de la madre del esposo</label>
         <br>  
          <input type="text" class="bor"  name="Nombre_Mesposo" value="<?php echo $row['Nombre_Mesposo']; ?>">    
          <br>
          <br>   
          <label>Domicilio del padre del esposo</label>
          <br>  
          <input type="text" class="bor" name="Domicilio_Pesposo" value="<?php echo $row['Domicilio_Pesposo']; ?>">
          <br>
          <br> 
          <label>Domiclio de la madre del esposo</label>
          <br>  
          <input type="text" class="bor" name="Domicilio_Mesposo" value="<?php echo $row['Domicilio_Mesposo']; ?>">    
          <br>
          <br>   
          <label>ocupacion del padre del esposo</label>
          <br>  
          <input type="text" class="bor" name="Ocupacion_Pesposo" value="<?php echo $row['Ocupacion_Pesposo']; ?>">
          <br>
          <br> 
          <label>ocupacion de la madre del esposo</label>
          <br>  
          <input type="text" class="bor" name="Ocupacion_Mesposo" value="<?php echo $row['Ocupacion_Mesposo']; ?>">  
             <br>
             <br>
             <br>
          
      
      
        <br>
        <label>Nombre del padre de la esposa</label>
        <br>  
        <input type="text" class="bor"  name="Nombre_Pesposa" value="<?php echo $row['Nombre_Pesposa']; ?>">
        <br>
        <br>  
        <label>Nombre de la madre de la esposa</label>
        <br>  
        <input type="text"  class="bor" name="Nombre_Mesposa" value="<?php echo $row['Nombre_Mesposa']; ?>">    
        <br>  
        <br>  
        <label>Domicilio del padre de la esposa</label>
        <br>  
        <input type="text"  class="bor" name="Domicilio_Pesposa" value="<?php echo $row['Domicilio_Pesposa']; ?>">
        <br>
        <br>  
        <label>Domicilio de la madre de la esposa</label>
        <br>         
        <input type="text"  class="bor" name="Domicilio_Mesposa" value="<?php echo $row['Domicilio_Mesposa']; ?>">  
        <br>  
        <br>  
        <label>ocupacion del padre de la esposa</label>
        <br>  
        <input type="text"  class="bor" name="Ocupacion_Pesposa" value="<?php echo $row['Ocupacion_Pesposa']; ?>">
        <br>
        <br>  
        <label>ocupacion de la madre de la esposa</label>
        <br>  
        <input type="text" class="bor"  name="Ocupacion_Mesposa"  value="<?php echo $row['Ocupacion_Mesposa']; ?>">    
      
        <br>
        <br>       
      <input type="submit" value="Enviar" >
   
    </form>   
 




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="css/perfect-scrollbar.js"></script>  
</body>
</html>
