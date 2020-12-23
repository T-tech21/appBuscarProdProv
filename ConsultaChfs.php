<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css" >
<body>
<div>
   <nav>
        <li><a href="ConsultaDeCatalogo">Consulta de Catalogo</a></li>
       <li><a href="Pedido">Consulta de Pedidos</a></li>
       
       /*ingresar informacion de los productos vendidos por dia y ventas por dia*/
       
       <li><a href="IngProdAdVendidos">Productos Adicionales Vendidos</a></li>
       <li><a href="IngresoDePedido">Ingreso de Pedido</a></li>
       
       //*Se anexa como mejora, para choferes y mayor control
       
       <li><a href= "SolicitudDePedidoAdicional">Solicitud de Pedido Adicional</a></li>
        <li><a href="IngresoDePosibleCliente">Ingreso de posible Cliente</a></li>   
 <?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $ProductosProvNI);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_GET["catalogolars"])){
$pbu=$_catalogolars["sku"];	
	}      
       <form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Inventario</label>
      <input name="ConsultaCatalogo" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
 //*Anexar a la consulta  de catalogo si se necesita la busqueda por sku, esta comentada
        
        if(isset($_GET["catalogolars"])){                  
$sqln=mysqli_query($conn, "SELECT Sku,Nombre,Tamaño,PrecioCosto,PrecioLocal,PrecioForaneo,PrecioBarra FROM catalogolars); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
  
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
        <form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Pedidos</label>
      <input name="C" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
           
        /*verificar si es una opcion el IdCliente en lugar del nombre para consulta de personal*/
        
        /*consulta de pedido*/
        
        <?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_GET["consultaPedido"])){
$pbu=$_consultaPedido["IdCliente"];	
	}      
       <form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Inventario</label>
      <input name="ConsultaPedido" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
        if(isset($_GET["ConsultaPedido"])){                  
$sqln=mysqli_query($conn, "SELECT IdCliente,Folio,StatusPedido,VerificacionPedido,Total,FechaPedido,Pedido,PersonaAutoriza FROM Pedido); /* WHERE catalogolars.IdCliente LIKE '%$pbu%' ");*/
  
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>        
       <form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="IngFolioPedido" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese  Folio de Pedido">  
           <?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_INSERT["IngProdAdVendidos"])){
$pbu=$_IngProdAdVendidosT["sku"];	
	}
  
if(isset($_INSERT["VentasPorDia"])){                  
$sqln=mysqli_query($conn, "INSERT Sku,Nombre,Tamaño,Descripcion,Marca,Proveedor,Categoria,ClaveProdServ,ClaveUnidad,Cantidad,Total,AreaVenta FROM VentasPorDia);   
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
 <?php
include('conexion.php');
$conn = new mysqli($localhost, $usuario, $password, $Control);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_INSERT["IngresodePedido"])){
$pbu=$_IngProdAdVendidosT["sku"];	
	}
    
if(isset($_INSERT["IngresodePedido"])){                  
$sqln=mysqli_query($conn, "INSERT IdCliente,Folio,Total,FechaPedido,Pedido FROM Pedido); 
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>