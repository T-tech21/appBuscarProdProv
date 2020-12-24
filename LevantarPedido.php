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
          //*Verificar si la ruta y chofer se asignan aleatoriamente o son fijas y por cuanto
          //*Asignar Area o persona del area de cotejo surtido o verificacion asignacion de ruta y chofer
          
          //*calendario
          
          //*Asignar total de pedido y enviar notificacion a almacen y administracion de pedido nuevo
          
        </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Confirmar Pedido</button>
    </div>
  </div>
</form>
  </li>
</ul>
if(isset($_INSERT["Pedido"])){                  
$sqln=mysqli_query($conn, "INSERT IdCliente,Folio,Pedido,FechaPedido FROM Pedido); 

$result=mysqli_query($sqln,$pbu) or die(mysqli_error());
}
?>
/*agregar notificacion a correo electronico de actualizacion ANEXAR CORREOS ELECTRONICOS DE AREA DE ALMACEN Y ADMINISTRACION

$To =("astrid_24@live.com.mx,astrid319425@gmail.com");
$Subject =("Notificacion de Pedido Nuevo");
$Message=("Pedido Nuevo");
$Email=($To,$Subject,$Message);
    
<Html>
    <Header>"Notificacion de Pedido Nuevo"</Header>
<div> 
    "Pedido Nuevo"
</div>

//*verificar si se incluye datos del area de venta o se registra en automatico al loggearse

<table class="Pedido">
  <thead>
    <tr>
      <th scope="col">IdCliente</th>
      <th scope="col">Folio</th>
      <th scope="col">Pedido</th>
      <th scope="col">FechaPedido</th>
      </tr>
  </thead>
<?php
if(isset($_POST["Pedido"])){ 
$n=0;
while ($dato=mysqli_fetch_array($sqln))
{	$n++;

echo"<tbody>";
echo"<tr>";
echo"<th scope='row'>".$n."</th>";
echo"<td>".$dato['IdCliente']."</td>";
echo"<td>".$dato['Folio']."</td>";
echo"<td>".$dato['Pedido']."</td>";
echo"<td>".$dato['FechaPedido']."</td>";
echo"</tr>";
echo"</tbody>";
}
}
?>
    $result=mysqli_query($sqln,$pbu) or die(mysqli_error());
}
?>



