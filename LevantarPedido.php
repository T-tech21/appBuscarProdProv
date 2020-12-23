    <!DOCTYPE>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Levantar Pedido</title>
    </head>
          <form>
              <input/>
              <nav>
              <ul>
                  <li>pieza</li>
                  <li>sku</li>
                  <li>Imagen</li>
                  <li>cantidad</li>
                  <li>folio</li>
                  <li>estatus</li>
              </ul>
                  </nav>
              <input type="button" value="Comprar" size="20">
              <input type="button" value="Cancelar" size="20">
          </form>
</html>


<?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_POST["Pedido"])){
$pbu=$_Pedido["sku"];	
	}
    //*incluir el insert a la consulta
<form method="POST">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="IdCliente" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese IdCliente">  
        <input name="Folio" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Folio">  
        <input name="Pedido" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Pedido">  <input name="FechaPedido" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Seleccione fecha pedido">
          
        </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Confirmar Pedido</button>
    </div>
  </div>
</form>
  </li>
</ul>
if(isset($_INSERT["newproducto"])){                  
$sqln=mysqli_query($conn, "INSERT CodigoAlterno,Sku,Descripcion,PrecioCosto,PrecioLocal,PrecioForaneo,PrecioBarra,Existencias,Marca,Proveedor,Categoria,ClaveProdServ,ClaveUnidad,Compatibilidad,Imagen,Detalles FROM newproducto); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
  
$result=mysqli_query($sqln,$pbu) or die(mysqli_error());
}
?>
/*agregar notificacion a correo electronico de actualizacion */

<table class="newproducto">
  <thead>
    <tr>
      <th scope="col">CodigoAlterno</th>
      <th scope="col">Sku</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Existencias</th>
      <th scope="col">Marca</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Categoria</th>
      <th scope="col">ClaveProdServ</th>
      <th scope="col">ClaveUnidad</th>
      <th scope="col">Compatibilidad</th>
      <th scope="col">Imagen</th>
      <th scope="col">Detalles</th>
      </tr>
  </thead>
<?php
if(isset($_POST["newproducto"])){ 
$n=0;
while ($dato=mysqli_fetch_array($sqln))
{	$n++;

echo"<tbody>";
echo"<tr>";
echo"<th scope='row'>".$n."</th>";
echo"<td>".$dato['CodigoAlterno']."</td>";
echo"<td>".$dato['Sku']."</td>";
echo"<td>".$dato['Descripcion']."</td>";
echo"<td>".$dato['Existencias']."</td>";
echo"<td>".$dato['Marca']."</td>";
echo"<td>".$dato['Proveedor']."</td>";
echo"<td>".$dato['Categoria']."</td>";
echo"<td>".$dato['ClaveProdServ']."</td>";
echo"<td>".$dato['ClaveUnidad']."</td>";
echo"<td>".$dato['Compatibilidad']."</td>";
echo"<td>".$dato['Imagen']."</td>";
echo"<td>".$dato['Detalles']."</td>";
echo"</tr>";
echo"</tbody>";
}
}
?>

    $result=mysqli_query($sqln,$pbu) or die(mysqli_error());
}
?>



