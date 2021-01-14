<?php
$logInError=false;
$enabledError=false;
if(isset($_POST['logIn'])){
	if(isset($_POST['email']) && isset($_POST['password'])){
		$user_ip = getenv('REMOTE_ADDR');
		$agent = $_SERVER["HTTP_USER_AGENT"];
		$browser = "-";
		if( preg_match('/MSIE (\d+\.\d+);/', $agent) ) {
			$browser = "Internet Explorer";
		} else if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $agent) ) {
			$browser = "Chrome";
		} else if (preg_match('/Edge\/\d+/', $agent) ) {
			$browser = "Edge";
		} else if ( preg_match('/Firefox[\/\s](\d+\.\d+)/', $agent) ) {
			$browser = "Firefox";
		} else if ( preg_match('/OPR[\/\s](\d+\.\d+)/', $agent) ) {
			$browser = "Opera";
		} else if (preg_match('/Safari[\/\s](\d+\.\d+)/', $agent) ) {
			$browser = "Safari";
		}
		$email=$_POST['email'];
		$password=$_POST['password'];
		$administrador = new Administrador();
		if($administrador -> logIn($email, $password)){
			if($administrador -> getEstado()==1){
				$_SESSION['id']=$administrador -> getIdAdministrador();
				$_SESSION['entity']="Administrador";
				$logAdministrador = new LogAdministrador("", "Log In", "", date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $administrador -> getIdAdministrador());
				$logAdministrador -> insert();
				echo "<script>location.href = 'index.php?pid=" . base64_encode("ui/sessionAdministrador.php") . "'</script>"; 
			} else { 
				$enabledError=true; 
			}
		}
		$usuario_ud = new Usuario_ud();
		if($usuario_ud -> logIn($email, $password)){
			if($usuario_ud -> getEstado()==1){
				$_SESSION['id']=$usuario_ud -> getIdUsuario_ud();
				$_SESSION['entity']="Usuario_ud";
				$logUsuario_ud = new LogUsuario_ud("", "Log In", "", date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $usuario_ud -> getIdUsuario_ud());
				$logUsuario_ud -> insert();
				echo "<script>location.href = 'index.php?pid=" . base64_encode("ui/sessionUsuario_ud.php") . "'</script>"; 
			} else { 
				$enabledError=true; 
			}
		}
		$grupo_de_investigacion = new Grupo_de_investigacion();
		if($grupo_de_investigacion -> logIn($email, $password)){
			if($grupo_de_investigacion -> getEstado()==1){
				$_SESSION['id']=$grupo_de_investigacion -> getIdGrupo_de_investigacion();
				$_SESSION['entity']="Grupo_de_investigacion";
				$logGrupo_de_investigacion = new LogGrupo_de_investigacion("", "Log In", "", date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $grupo_de_investigacion -> getIdGrupo_de_investigacion());
				$logGrupo_de_investigacion -> insert();
				echo "<script>location.href = 'index.php?pid=" . base64_encode("ui/sessionGrupo_de_investigacion.php") . "'</script>"; 
			} else { 
				$enabledError=true; 
			}
		}
		$logInError=true;
	}
}
?>
<div align="center">
	<?php include("ui/header.php"); ?>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					<h4><strong>observatorio</strong></h4>
				</div>
				<div class="card-body">
					<p>Observatorio para medir el impacto de la investigacion de los grupos de invesigacion de la facultad tecnologica</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">
					<h4><strong>Autenticar</strong></h4>
				</div>
				<div class="card-body">
					<form id="form" method="post" action="index.php" class="bootstrap-form needs-validation"  >
						<div class="form-group">
							<div class="input-group" >
								<input type="email" class="form-control" name="email" placeholder="Correo" autocomplete="off" required />
							</div>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Clave" required />
						</div>
						<?php if($enabledError){
							echo "<div class='alert alert-danger' >Usuario Deshabilitado</div>";
						} else if ($logInError){
							echo "<div class='alert alert-danger' >Error de correo o clave</div>";
						} ?>
						<div class="form-group">
							<a href="index.php?pid=<?php echo base64_encode("ui/recoverPassword.php") ?>">Recuperar Clave</a>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-info" name="logIn">Autenticar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
