<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css" >
<body>
<div>
   <nav>
        <li><a href="ConsultaDeInventario">Consulta de Catalogo</a></li>
       <li><a href="Pedido">Consulta de Pedidos</a></li>
       
       /*ingresar informacion de los productos vendidos por dia y ventas por dia*/
       
       <li><a href="Ingreso de Productos vendidos">Ingreso de Productos Vendidos</a></li>
       
       
       <form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Inventario</label>
      <input name="Consulta Producto" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
 
        if(isset($_GET["ConsultaDeInventario"])){                  
$sqln=mysqli_query($conn, "SELECT Sku,Nombre,Tamaño,PrecioCosto,PrecioLocal,PrecioForaneo,PrecioBarra FROM catalogolars); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
  
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
        <form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Inventario</label>
      <input name="Consulta Producto" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
 
        if(isset($_GET["Pedido"])){                  
$sqln=mysqli_query($conn, "SELECT IdCliente,Folio,StatusPedido,VerificacionPedido,Total,FechaPedido,Pedido,PersonaAutoriza FROM Pedido); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
  
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
       <form method="POST">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="IngProductosVendidos" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Productos Vendidos">  
        
        if(isset($_INSERT["VentasPorDia"])){                  
$sqln=mysqli_query($conn, "INSERT Sku,Nombre,Tamaño,Descripcion,Marca,Proveedor,Categoria,ClaveProdServ,ClaveUnidad,Cantidad,Total FROM VentasPorDia); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
  
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
 
       //*Envio por correo de ventas por dia, copias
       
        
       </nav>
   </div>
