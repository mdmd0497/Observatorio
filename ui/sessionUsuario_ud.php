<?php
$usuario_ud = new Usuario_ud($_SESSION['id']);
$usuario_ud -> select();
?>
<div class="container">
	<div>
		<div class="card-header">
			<h3>Perfil</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-3">
					<img src="<?php echo ($usuario_ud -> getFoto()!="")?$usuario_ud -> getFoto():"http://icons.iconarchive.com/icons/custom-icon-design/silky-line-user/512/user2-2-icon.png"; ?>" width="100%" class="rounded">
				</div>
				<div class="col-md-9">
					<div class="table-responsive-sm">
						<table class="table table-striped table-hover">
							<tr>
								<th>Nombre</th>
								<td><?php echo $usuario_ud -> getNombre() ?></td>
							</tr>
							<tr>
								<th>Apellido</th>
								<td><?php echo $usuario_ud -> getApellido() ?></td>
							</tr>
							<tr>
								<th>Correo</th>
								<td><?php echo $usuario_ud -> getCorreo() ?></td>
							</tr>
							<tr>
								<th>State</th>
								<td><?php echo ($usuario_ud -> getState()==1)?"Habilitado":"Deshabilitado"; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
		<p><?php echo "Su rol es: Usuario_ud"; ?></p>
		</div>
	</div>
</div>
