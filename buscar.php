<!DOCTYPE>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cátalogo de productos </title>
    </head>
  <body> 
<form action = "conexion.php "  method = "POST"  >
       <h2 label for="Busqueda">Buscar Producto:</label><select name="Buscar producto">
            <option selected value="0">Elige una opción</option>
            
                <optgroup label="">
                    <option value="1">producto</option>
                    <option value="2">pieza</option>
                    <option value="3">sku</option>
                    <option value="4">precio</option>
                    <option value="5">disponibilidad</option>
                    <option value="6">proveedor</option>
                    <option value="7">marca</option>
                    <option value="8">descripcion</option>
                    
                </optgroup>
        </select>
    
         <br>
        <input type="button" value="Buscar" size="20"></input>       
         <input type="button" value="Regresar" size="20"></input>
        
    </form>
    <form>
        </body>
<h2 label for = "Resultados de Búsqueda"></h2>
         </form>


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

<footer>
    <img src="">
</footer>
</html>
