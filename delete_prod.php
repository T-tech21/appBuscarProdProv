<?php
include('conexion.php');
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_DELETE["catalogolars"])){
$sku=$_UPDATE["sku"];	
	}
if(isset($_DELETE["catalogolars"])){
$pbu=$_DELETE["DELETE"];	
	}

    <form method="DELETE">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="Sku" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
      <input name="Motivos" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Motivo de Eliminacion"> 

if(isset($_DELETE["catalogolars"])){                  
$sqln=mysqli_query($conn,"DELETE Sku,Nombre,Tamaño,PrecioCosto,PrecioLocal,PrecioForaneo,PrecioBarra FROM catalogolars"));
}
?>
<table class="Productos">
  <thead>
    <tr>
      <th scope="col">Sku</th>
      <th scope="col">Id</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagenes</th>
        <th scope="col">Nombre</th>
        </tr>
  </thead>
<?php
if(isset($_DELETE["buscar"])){ 
$n=0;
while ($dato=mysqli_fetch_array($sqln))
{	$n++;


echo"<tbody>";
echo"<tr>";
echo"<th scope='row'>".$n."</th>";
echo"<td>".$dato['Sku']."</td>";
 echo"<td>".$dato['Id']."</td>";
echo"<td>".$dato['Descripcion']."</td>";
echo"<td>".$dato['Precio']."</td>";
 echo"<td>".$dato['Imagenes']."</td>";
 echo"<td>".$dato['Nombre']."</td>";
echo"</tr>";
echo"  </tbody>";
}
}
?>

</table>
