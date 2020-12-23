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
       
       <li><a href="IngresodeProductosAdicionalesVendidos">Productos Adicionales Vendidos</a></li>
       <li><a href="IngresodePedido">Ingreso de Pedido</a></li>
       
       <form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Inventario</label>
      <input name="Consulta Producto" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
 
        if(isset($_GET["ConsultaDeCatalogo"])){                  
$sqln=mysqli_query($conn, "SELECT Sku,Nombre,Tamaño,PrecioCosto,PrecioLocal,PrecioForaneo,PrecioBarra FROM catalogolars); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
  
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
        <form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Inventario</label>
      <input name="Consulta Producto" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Sku">  
 
        /*verificar si es una opcion el IdCliente en lugar del nombre para consulta de personal*/
        
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
$sqln=mysqli_query($conn, "INSERT Sku,Nombre,Tamaño,Descripcion,Marca,Proveedor,Categoria,ClaveProdServ,ClaveUnidad,Cantidad,Total,AreaVenta FROM VentasPorDia); /* WHERE catalogolars.sku LIKE '%$sku%' ");*/
  
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
 
       //*Envio por correo de ventas por dia, copias
       
  <form method="POST">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Pedido</label>
      <input name="IdCliente" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese IdCliente">  
       <input name="Folio" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Folio">  
        <input name="FechaPedido" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="FechaPedido"> 
        <input name="Pedido" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Pedido"> 
        
        //*Envio de notificacion por correo electronico si el cliente se registro, copia a el, a almacen, a administracion
       </nav>
   </div>
