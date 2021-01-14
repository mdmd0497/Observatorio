<?php
if(isset($_POST['recover'])){
	$foundEmail = false;
	$generatedPassword = "";
	if(!$foundEmail){
		$recoverAdministrador = new Administrador();
		if($recoverAdministrador -> existEmail($_POST['email'])) {;
			$generatedPassword = rand(100000,999999);
			$recoverAdministrador -> recoverPassword($_POST['email'], $generatedPassword);
		$foundEmail = true;
		}
	}
	if(!$foundEmail){
		$recoverUsuario_ud = new Usuario_ud();
		if($recoverUsuario_ud -> existEmail($_POST['email'])) {;
			$generatedPassword = rand(100000,999999);
			$recoverUsuario_ud -> recoverPassword($_POST['email'], $generatedPassword);
		$foundEmail = true;
		}
	}
	if(!$foundEmail){
		$recoverGrupo_de_investigacion = new Grupo_de_investigacion();
		if($recoverGrupo_de_investigacion -> existEmail($_POST['email'])) {;
			$generatedPassword = rand(100000,999999);
			$recoverGrupo_de_investigacion -> recoverPassword($_POST['email'], $generatedPassword);
		$foundEmail = true;
		}
	}
	if($foundEmail){
		$to=$_POST['email'];
		$subject="Recuperación de clave para observatorio";
		$from="FROM: observatorio <contact@itiud.org>";
		$message="Su nueva clave es: ".$generatedPassword;
		mail($to, $subject, $message, $from);
	}
}
?>
<div align="center">
	<?php include("ui/header.php"); ?>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Recuperar Clave</h4>
				</div>
				<div class="card-body">
					<?php if(isset($_POST['recover'])) { ?>
					<div class="alert alert-success" >Si el correo: <em><?php echo $_POST['email'] ?></em> fue encontrado en el sistema, una nueva clave fue enviada</div>
					<?php } else { ?>
					<form id="form" method="post" action="index.php?pid=<?php echo base64_encode("ui/recoverPassword.php") ?>" class="bootstrap-form needs-validation"   >
						<div class="form-group">
							<label>Correo*</label>
							<input type="email" class="form-control" name="email" required />
						</div>
						<button type="submit" class="btn btn-info" name="recover">Recuperar Clave</button>
					</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
