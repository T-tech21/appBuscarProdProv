<!DOCTYPE>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CotizacionPedido</title>
    </head>
        
        /* Asignar Id Cliente y Folio en automatico para pedidos(verificar tentativamente fecha aprox de entregas en status en automatico asignar (sin enviar, sin revisar, recibida, confirmacion de pedido, pedido incompleto anexar nota para cliente y confirmar si desea que se le de seguimiento cuando este disponible))*/
        
          <form>  
              <input/>
              <nav>
              <ul>
                  <li>IdCliente</li>
                  <li>Folio</li>
                  <li>Pedido</li>
                  <li></li>
                  <li>FechaPedido</li>
                  <li>estatus</li>
              </ul>
                  </nav>
              <input type="button" value="Comprar" size="20">
              <input type="button" value="Cancelar" size="20">
          </form>
</html>


/* Anexar correo para recepcion de solicitud de cotizaciones */

<?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $ProductosProvNI);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_UPDATE["catalogolars"])){
$pbu=$_UPDATE["sku"];	
	}


$To =("astrid_24@live.com.mx,astrid319425@gmail.com");
$Subject =("Nueva Solicitud de Cotizacion");
$Message=("Solicitud de cotizacion");
$Email=($To,$Subject,$Message);
    
<Html>
    <Header>"Solicitud de Cotizacion"</Header>
<div> 
    "Solicitud de cotizacion "
</div>
      
    //*Anexar tabla de cotizacion, asignar descuentos en automatico de acuerdo a tpo de cliente y hacer la sumatoria
if(isset($_INSERT["cotizacionPedido"])){                  
$sqln=mysqli_query($conn, "INSERT IdCliente,Sku,CodigoAlterno,Descripcion,PrecioCosto,Descuento,PrecioFinal FROM cotizacion); 
  
$result=mysqli_query($sqln,$pbu) or die(mysqli_error());
}
?>
    