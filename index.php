<ul class="list-group">
  <li class="list-group-item">
<form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="producto" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese sku">  
      <input name="buscar" href ="buscar.php"   type="hidden" class="form-control mb-2" id="inlineFormInput"value="v">
    </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Buscar Ahora</button>
    </div>
  </div>
</form>
  </li>
</ul>

<?php
include('conexion.php');
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conn->connect_error) 
    die("la conexión ha fallado: " . $conn->connect_error);


/*if(isset($_GET["sku"])){
$pbu=$_GET["sku"];	
	}
	
if(isset($_GET["productoswinmex"])){                  */
$sqln=mysqli_query($conn, "SELECT Sku,Id,Descripcion,Precio,Imagenes FROM proveedorwinmex INNER JOIN  catalogolars On sku WHERE proveedorwinmex.sku = catalogoLars.sku LIKE '%$pbu%' order by pbu desc") or die(mysqli_error());

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
if(isset($_GET["sku"])){ 
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
