<?php
include('conexion.php');
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_GET["proveedorwinmex"])){
$sku=$_GET["sku"];	
	}

if(isset($_GET["catalogolars"])){                  
$sqln=mysqli_query($conn, "SELECT proveedorwinmex.sku,proveedorwinmex.Id,proveedorwinmex.Descripcion,proveedorwinmex.Precio,proveedorwinmex.Imagenes, catalogolars.sku,catalogolars.Descripcion,catalogolars.CodigoAlterno,catalogolars.Precio,catalogolars.Precio,catalogolars.Imagenes,catalogolars.Id FROM proveedorwinmex,catalogolars INNER JOIN  productos ON productos.Sku=catalogolars.Sku WHERE proveedorwinmex.sku LIKE '%$sku%' ");
    
    $result=mysqli_query($sqln,$sku) or die(mysqli_error());
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
     
    </tr>
  </thead>
<?php
if(isset($_GET["buscar"])){ 
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
echo"</tr>";
echo"  </tbody>";
}
}
?>

</table>