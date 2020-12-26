<ul class="list-group">
	<li class="list-group-item">
		<form method="GET">
			<div class="form-row align-items-center">
				<div class="col-auto">
					<label class="sr-only" for="inlineFormInput">Producto</label>
					<input name="productos" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese sku">
					<input name="buscar.php" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
				</div>
				<div class="col-auto">
					<button type="submit" class="btn btn-primary mb-2">Buscar Ahora</button>
				</div>
						
				</div>
</form>
	</li>
	</ul>
<?php
$sql_registe = mysqli_query($conection,_"SELECT COUNT(*)as total_registro FROM catalogolars WHERE estatus=1");
$result_register = mysqli_fetch_array($sql_registe);
$total_registro =$result_register['total_registro']
$por pagina = 10;

if (empty ($GET ['pagina']))
{
$pagina =1;

}else{
$pagina =$GET['pagina']

}
$desde =($pagina-1) =$por_pagina;
$total_paginas =ceil($total_registro /$por_pagina);

//*Consulta de seleccion basica
$query =mysqli_query($conection,"SELECT * FROM catalogolars
 WHERE estatus =1 ORDER BY Sku ASC LIMIT $desde,$por_pagina);
 
 $query = mysqli_query($conection,"SELECT cat.Sku,cat.Descripcion, pr.precio1,pr.imagenes
  FROM catalogolars cat
  INNER JOIN ProvedorWinmex pr
  ON cat.ProveedorWinmex = pr.CodigoAlterno
  WHERE cat.estatus= 1 ORDER BY cat.CodigoAlternoASC LIMIT $desde,$por_pagina");
  
  mysqli_close($conection);
  $result = mysqli_num_rows($query);
  if($result>0){
  while ($data= mysqli_fetc_array($query))
  if ($data["nit"]==0)
  }$nit = 'C/F';
  }else {
  $nit =$data ["nit"];
  }
  }
  
  
