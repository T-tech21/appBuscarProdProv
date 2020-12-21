<?php
include('conexion.php');
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}
if(isset($_UPDATE["Producto"])){
$sku=$_UPDATE["sku"];	
	}


<form method="UPDATE">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="Codigolterno" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Nuevo CodigoAlterno">  
        <input name="Sku" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Nuevo Sku">  
        <input name="Descripcion" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Nueva Descripcion">  
        <input name="Precio" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Nuevo Precio">
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
      <button type="submit" class="btn btn-primary mb-2">Actualizar Producto</button>
    </div>
  </div>
</form>
  </li>
</ul>
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
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

