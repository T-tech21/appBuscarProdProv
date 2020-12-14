<?php
include('conexion.php');
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conn->connect_error) 
    die("la conexión ha fallado: " . $conn->connect_error);
	
if(isset($_GET["phpmyadmin"])){                  
$sqln=mysqli_query($conn, "SELECT Sku,Id,Descripcion,Precio,Imagenes FROM proveedorwinmex INNER JOIN  catalogolars On sku WHERE proveedoreswinmex.sku = catalogoLars.sku LIKE '%$sku%' order by Sku desc") or die(mysqli_error());
}
    
?>
<table class="buscar">
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
if(isset($_GET["phpmyadmin"])){ 
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
?>
?>
</table>