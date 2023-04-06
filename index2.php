<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet"  href="css/tablas.css" >
</head>
<body>
<?php

$consulta = "SELECT * FROM datos_esposos";
    $resultado = mysqli_query($com, $consulta);
    while($mostrar = mysqli_fetch_array($resultado))
?>
    <table>
    
<tr >
    <th class="bor">1</th>
    <th class="bor">2</th>
    <th>3</th>
    <th>3</th>
    <th>4</th>
    <tr> 
    <td>5</td>
</tr>
</table>


</body>
</html>