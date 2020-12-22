<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css" >
<body>
<div>
   <nav>
        <li><a href="IngresarProducto">Ingresar  Nuevo Producto</a></li>
        <li><a href="Consultar Productos">Consultar Productos</a></li>

        //*consulta de productos nuevos que recientemente se registraron*/


        <li><a href="Productos Nuevos">Productos Nuevos</a></li>
       </nav>
   </div>

<?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_POST["newproducto"])){
$sku=$_newproductoT["sku"];	
	}
    //*incluir el insert a la consulta
<form method="POST">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="Codigolterno" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese CodigoAlterno">  
        <input name="Sku" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
        <input name="Descripcion" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Descripcion">  
        <input name="Precio" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Precio">
        <input name="Existencias" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Existencias">
              <input name="Marca" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Marca">
              <input name="Proveedor" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Proveedor">
          <input name="Categoria" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Categoria">
          <input name="ClaveProdServ" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Clave del Producto o Servicio">
          <input name="Claveunidad" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese ClaveUnidad">
            <input name="Compatibilidad" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Compatibilidad">
          <input name="Imagenes" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Imagen">  
        <input name="Detalles" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Detalles">
      <input name="Ingresar" type="hidden" class="form-control mb-2" id="inlineFormInput"value="v">
    </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Ingresar</button>
    </div>
  </div>
</form>
  </li>
</ul>
if(isset($_INSERT["newproducto"])){                  
$sqln=mysqli_query($conn, "INSERT CodigoAlterno,Sku,Descripcion,Existencias ,Marca,Proveedor,Categoria,ClaveProdServ,ClaveUnidad,Compatibilidad,Imagen,Detalles FROM newproducto); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
  
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
//*agregar notificacion a correo electronico de actualizacion */

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
