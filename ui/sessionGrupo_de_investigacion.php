<?php
$grupo_de_investigacion = new Grupo_de_investigacion($_SESSION['id']);
$grupo_de_investigacion -> select();
?>
<div class="container">
	<div>
		<div class="card-header">
			<h3>Perfil</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-3">
					<img src="<?php echo ($grupo_de_investigacion -> getFoto()!="")?$grupo_de_investigacion -> getFoto():"http://icons.iconarchive.com/icons/custom-icon-design/silky-line-user/512/user2-2-icon.png"; ?>" width="100%" class="rounded">
				</div>
				<div class="col-md-9">
					<div class="table-responsive-sm">
						<table class="table table-striped table-hover">
							<tr>
								<th>Nombre</th>
								<td><?php echo $grupo_de_investigacion -> getNombre() ?></td>
							</tr>
							<tr>
								<th>Apellido</th>
								<td><?php echo $grupo_de_investigacion -> getApellido() ?></td>
							</tr>
							<tr>
								<th>Correo</th>
								<td><?php echo $grupo_de_investigacion -> getCorreo() ?></td>
							</tr>
							<tr>
								<th>Clasificacion</th>
								<td><?php echo $grupo_de_investigacion -> getClasificacion() ?></td>
							</tr>
							<tr>
								<th>Lider</th>
								<td><?php echo $grupo_de_investigacion -> getLider() ?></td>
							</tr>
							<tr>
								<th>Area</th>
								<td><?php echo $grupo_de_investigacion -> getArea() ?></td>
							</tr>
							<tr>
								<th>Pagina_web</th>
								<?php if($grupo_de_investigacion -> getPagina_web() != ""){ ?>
									<td><a href="<?php echo $grupo_de_investigacion -> getPagina_web() ?>" target="_blank"><span class='fas fa-external-link-alt' data-placement='left' data-toggle='tooltip' class='tooltipLink' data-original-title='<?php echo $grupo_de_investigacion -> getPagina_web() ?>' ></span></a></td>
								<?php }else{ ?>
									<td></td>
								<?php } ?>
							</tr>
							<tr>
								<th>State</th>
								<td><?php echo ($grupo_de_investigacion -> getState()==1)?"Habilitado":"Deshabilitado"; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
		<p><?php echo "Su rol es: Grupo_de_investigacion"; ?></p>
		</div>
	</div>
</div>
