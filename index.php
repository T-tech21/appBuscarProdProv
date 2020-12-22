<ul class="list-group">
  <li class="list-group-item">
<form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="Producto" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Producto">  
      <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
    </div>
   
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Buscar Ahora</button>
    </div>
  </div>
</form>
  </li>
</ul>

</table>
<form method="POST">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="sku" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese sku">  
        <input name="Id" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Id">  
        <input name="Descripcion" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Descripcion">  
        <input name="Precio" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Precio">
        <input name="Imagenes" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Imagenes">  
      <input name="Ingresar" type="hidden" class="form-control mb-2" id="inlineFormInput"value="v">
    </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Ingresar</button>
    </div>
  </div>
</form>
  </li>
</ul>
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
<table class="newproducto">
  <thead>
    <tr>
      <th scope="col">Sku</th>
      <th scope="col">Id</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagenes</th>
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
echo"<td>".$dato['Sku']."</td>";
echo"<td>".$dato['Id']."</td>";
echo"<td>".$dato['Descripcion']."</td>";
echo"<td>".$dato['Precio']."</td>";
echo"<td>".$dato['Imagenes']."</td>";
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
<?php
if(isset($_UPDATE["productos"])){ 
$n=0;
while ($dato=mysqli_fetch_array($sqln))
{	$n++;

echo"<tbody>";
echo"<tr>";
echo"<th scope='row'>".$n."</th>";
echo"<td>".$dato['Sku']."</td>";
echo"<td>".$dato['Id']."</td>";
echo"<td>".$dato['Descripcion']."</td>";
echo"<td>".$dato['Precio']."</td>";
echo"<td>".$dato['Imagenes']."</td>";
echo"</tr>";
echo"</tbody>";
}
}
?>
</table>
<form method="UPDATE">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="sku" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese nuevo sku">  
        <input name="Id" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Id">  
        <input name="Descripcion" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Descripcion">  
        <input name="Precio" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Precio">
        <input name="Imagenes" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese Imagenes">  
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
<table class="productos">
  <thead>
    <tr>
      <th scope="col">Sku</th>
      <th scope="col">Id</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagenes</th>
      </tr>
  </thead>

<?php
if(isset($_DELETE["productos"])){ 
$n=0;
while ($dato=mysqli_fetch_array($sqln))
{	$n++;

echo"<tbody>";
echo"<tr>";
echo"<th scope='row'>".$n."</th>";
echo"<td>".$dato['Sku']."</td>";
echo"<td>".$dato['Id']."</td>";
echo"<td>".$dato['Descripcion']."</td>";
echo"<td>".$dato['Precio']."</td>";
echo"<td>".$dato['Imagenes']."</td>";
echo"</tr>";
echo"</tbody>";
}
}
?>
</table>
<form method="DELETE">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Producto</label>
      <input name="sku" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese sku">  
        <input name="Borrar Producto" type="hidden" class="form-control mb-2" id="inlineFormInput"value="v">
    </div>
      <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Borrar</button>
    </div>
  </div>
</form>
  </li>
</ul>
$result=mysqli_query($sqln,$sku) or die(mysqli_error());
}
?>
<table class="productos">
  <thead>
    <tr>
      <th scope="col">Sku</th>
      <th scope="col">Id</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagenes</th>
      </tr>
  </thead>
<?php
if(isset($_DELETE["productos"])){ 
$n=0;
while ($dato=mysqli_fetch_array($sqln))
{	$n++;

echo"<tbody>";
echo"<tr>";
echo"<th scope='row'>".$n."</th>";
echo"<td>".$dato['Sku']."</td>";
echo"<td>".$dato['Id']."</td>";
echo"<td>".$dato['Descripcion']."</td>";
echo"<td>".$dato['Precio']."</td>";
echo"<td>".$dato['Imagenes']."</td>";
echo"</tr>";
echo"</tbody>";
}
}
?>
