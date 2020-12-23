<?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $ProductosProvNI);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_GET["proveedorwinmex"])){
$pbu=$_GET["sku"];	
	}
//*Consulta para unir catalogo lars y catalogo proveedor winmex en tabla productos

/*if(isset($_GET["catalogolars"])){                  
$sqln=mysqli_query($conn, "SELECT ProveedorWinmex.sku,ProveedorWinmex.CodigoAlterno,ProveedorWinmex.Descripcion,ProveedorWinmex.Precio1,ProveedorWinmex.Precio2,ProveedorWinmex.Precio3,ProveedorWinmex.Precio4, catalogolars.sku,catalogolars.Nombre,catalogolars.Tamaño,catalogolars.PrecioCosto,catalogolars.PrecioLocal,catalogolars.PrecioForaneo,catalogolars.PrecioBarra FROM proveedorwinmex,catalogolars INNER JOIN  NewProductos ON NewProducto.Sku=catalogolars.Sku WHERE ProveedorWinmex.sku LIKE '%$sku%' ");
    
    $result=mysqli_query($sqln,$sku) or die(mysqli_error());
}*/

if(isset($_GET["catalogolars"])){                  
$sqln=mysqli_query($conn, "SELECT Sku,Nombre,Tamaño,PrecioCosto ,PrecioLocal,PrecioForaneo,PrecioBarra FROM catalogolars); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
    
    $result=mysqli_query($sqln,$pbu=$_GET) or die(mysqli_error());
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
if(isset($_GET["buscar"])){ 
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