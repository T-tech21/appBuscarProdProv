<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css" >
<body>
<div>
   <nav>
        <li><a href="ConsultaDeInventario">Consulta de Inventario</a></li>
        <li><a href="ActualizarExistencias">Actualizar Existencias</a></li>
        <li><a href="Pedido">Pedidos</a></li>
       <li><a href="ProductoNegado">Productos Negados</a></li>
       </nav>
   </div>
/*<div>
   <nav>
        <li><a href="CodigoAlterno">CodigoAlterno</a></li>
        <li><a href="Sku">Sku</a></li>
        <li><a href="Descripcion">Descripcion</a></li>
        <li><a href="Precio">Precio</a></li>
        <li><a href="Existencias">Existencias</a></li>
        <input name="Existencias" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Existencias">  
        <li><a href="Marca">Marca</a></li>
        <li><a href="PorSurtir">Porsurtir</a></li>
        <li><a href="Sin surtir">sin surtir</a></li>
        <li><a href="Proveedor">Proveedor</a></li>
        <li><a href="Almacen">Almacen</a></li>
        <li><a href="TotalPiezas">TotalPiezas</a></li>
        <li><a href="Categoria">Categoria</a></li>
        <li><a href="ClaveProdServ">ClaveProdServ</a></li>
        <li><a href="ClaveUnidad">ClaveUnidad</a></li>
        <li><a href="Compatibilidad">Compatibilidad</a></li>  
       <li><a href="FechaActualizacion">FechaActualizacion</a></li>  
       <li><a href="Imagen">Imagen</a></li>
        <li><a href="Detalles">Detalles</a></li>  
       <li><a href="PersonaActualiza">PersonaActualiza</a></li>  
		
</ul>
        </nav>*/

<?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_GET["Producto"])){
$pbu=$_GET["sku"];	
	}
if(isset($_GET["Producto"])){                  
$sqln=mysqli_query($conn, "SELECT CodigoAlterno,Sku,Descripcion,Precio,Existencias,Marca,PorSurtir,Proveedor,Almacen,TotalPiezas,Categoria,ClaveProdServ,ClaveUnidad,Compatibilidad,FechaActualizacion,Imagen,Detalles FROM Producto); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
    
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

<?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_UPDATE["Producto"])){
$pbu=$_UPDATE["Producto"];	
	}


<form method="UPDATE">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="Existencias" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Existencias">  
 <input name="Actualizar" type="hidden" class="form-control mb-2" id="inlineFormInput"value="v">
    </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Actualizar Producto</button>
    </div>
  </div>
</form>
  </li>
</ul>
$result=mysqli_query($sqln,$pbu=$_UPDATE) or die(mysqli_error());
}
?>
<table class="Producto">
  <thead>
    <tr>
      <th scope="col">Sku</th>
      <th scope="col">Id</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagenes</th>
      </tr>
  </thead>

  </div>  
    </body>

</table>
<footer>Ayuda</footer>
</html>

<?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_GET["Pedido"])){
$pbu=$_GET["Pedido"];	
	}
if(isset($_GET["Pedido"])){                  
$sqln=mysqli_query($conn, "SELECT Folio,AreaCotejo,PersonaSurtido,StatusPedido,VerificacionPedido,Total,FechaPedido,Pedido,PersonaAutoriza FROM Pedido); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
    
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
if(isset($_GET["Pedido"])){ 
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
<?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_UPDATE["Pedido"])){
$pbu=$_UPDATE["Pedido"];	
	}

<form method="UPDATE">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="PersonaSurtido" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Persona que surtio el Pedido">  
      <input name="StatusPedido" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="StatusPedido">
      <SELECT>
      //* verificar los estatus que se tienen para los pedidos y no se ingrese mas informacion
      <li><a href="Surtido">Surtido</a></li>
      <li><a href="SinRevisar">Sin Revisar</a></li>
      <li><a href= "Incompleto">Incompleto</a><li>
        <input name="Mercancia Faltante" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Piezas Faltantes">  

        //*conexion a correo electronico para anexar informacion de pedido Faltante y se pueda surtir en cuanto este disponible el Producto CORREO A ADMINISTRACION
        <a><submit="@lars.com.mx" >
          
              
$To =("astrid_24@live.com.mx,astrid319425@gmail.com");
$Subject =("Notificacion de Pedido Faltante");
$Message=("Pedido Faltante para surtir a la brevedad");
$Email=($To,$Subject,$Message);
    
<Html>
    <Header>"Notificacion de Pedido Faltante"</Header>
<div> 
    "Pedido Faltante para surtir a la brevedad"
</div>
     
          <li><a href="Entregado">Entregado</a></li>
      </SELECT>
  <input name="Actualizar" type="hidden" class="form-control mb-2" id="inlineFormInput"value="v">
    </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Actualizar Producto</button>
    </div>
  </div>
</form>
  </li>
</ul>
          
if(isset($_UPDATE["Pedido"])){                  
$sqln=mysqli_query($conn, "UPDATE Folio,AreaCotejo,PersonaSurtido,StatusPedido,VerificacionPedido,Total,FechaPedido,Pedido,PersonaAutoriza FROM Pedido); 

$result=mysqli_query($sqln,$pbu=$_UPDATE) or die(mysqli_error());
}
?>
<table class="Producto">
  <thead>
    <tr>
      <th scope="col">Sku</th>
      <th scope="col">Id</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagenes</th>
      </tr>
  </thead>

    <form method="INSERT">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="Sku" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">
        <input name="NombreCliente" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Nombre del Cliente">
        <input name="CantidadNegada" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Cantidad Negada">
        <input name="FechaNegacion" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Fecha de Negado">
        <input name="Motivo" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Motivos">
        <input name="FolioPedido" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="FolioPedido">
        <input name="Detalles" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Detalles">
//*Enviar mensaje por correo para dar seguimiento al pedido negado o faltante, ADMINISTRACION  PARA SEGUIMIENTO
        
        
          
$To =("astrid_24@live.com.mx,astrid319425@gmail.com");
$Subject =("Producto Negado o Faltante");
$Message=("Seguimiento a Producto Negado o Faltante ");
$Email=($To,$Subject,$Message);
    
<Html>
    <Header>"Notificacion de Producto Negado o Faltante"</Header>
<div> 
    "Producto Negado o Faltante"
</div>
        
         </div>  
    </body>

    <?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_INSERT["ProductoNegado"])){
$pbu=$_GET["sku"];	
	}
if(isset($_INSERT["ProductoNegado"])){                  
$sqln=mysqli_query($conn, "INSERT Sku,Nombre,CantidadNegada,FechaNegacion,Motivo,FolioPedido,Detalles FROM ProductoNegado); 
    
    $result=mysqli_query($sqln,$pbu=$_GET) or die(mysqli_error());
}
?>
</table>
<footer>Ayuda</footer>
</html>