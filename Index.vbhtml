﻿<ul class="list-group">
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
