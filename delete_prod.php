<?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $ProductosProvNI);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_DELETE["catalogolars"])){
$sku=$_UPDATE["Sku"];	
	}
if(isset($_DELETE["catalogolars"])){
$pbu=$_DELETE["Sku"];	
	}

    <form method="DELETE">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="Sku" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
      <input name="Motivos" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Motivo de Eliminacion"> 

      //*Enviar por correo electronico el sku que se ha dado de baja
if(isset($_DELETE["catalogolars"])){                  
$sqln=mysqli_query($conn,"DELETE Sku,Nombre,Tamaño,PrecioCosto,PrecioLocal,PrecioForaneo,PrecioBarra FROM catalogolars"));
}
?>
<table class="Productos">
  <thead>
    <tr>
      <th scope="col">Sku</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tamaño</th>
      <th scope="col">PrecioCosto</th>
      <th scope="col">PrecioLocal</th>
      <th scope="col">PrecioForaneo</th>
      <th scope="col">PrecioBarra</th>
        </tr>
  </thead>
<?php
if(isset($_DELETE["Sku"])){ 
$n=0;
while ($dato=mysqli_fetch_array($sqln))
{	$n++;

echo"<tbody>";
echo"<tr>";
echo"<th scope='row'>".$n."</th>";
echo"<td>".$dato['Sku']."</td>";
 echo"<td>".$dato['Nombre']."</td>";
echo"<td>".$dato['Tamaño']."</td>";
echo"<td>".$dato['PrecioCosto']."</td>";
 echo"<td>".$dato['PrecioLocal']."</td>";
 echo"<td>".$dato['PrecioForaneo']."</td>";
 echo"<td>".$dato['PrecioBarra']."</td>";
echo"</tr>";
echo"  </tbody>";
}
}
?>
</table>
