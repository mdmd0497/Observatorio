<?php
$processed=false;
$updateGrupo_de_investigacion = new Grupo_de_investigacion($_SESSION['id']);
$updateGrupo_de_investigacion -> select();
$nombre="";
if(isset($_POST['nombre'])){
	$nombre=$_POST['nombre'];
}

$correo="";
if(isset($_POST['correo'])){
	$correo=$_POST['correo'];
}
$Clasificacion="";
if(isset($_POST['Clasificacion'])){
	$Clasificacion=$_POST['Clasificacion'];
}
$Lider="";
if(isset($_POST['Lider'])){
	$Lider=$_POST['Lider'];
}
$Area="";
if(isset($_POST['Area'])){
	$Area=$_POST['Area'];
}
$Pagina_web="";
if(isset($_POST['Pagina_web'])){
	$Pagina_web=$_POST['Pagina_web'];
}
if(isset($_POST['update'])){
	$updateGrupo_de_investigacion = new Grupo_de_investigacion($_SESSION['id'], $nombre, $correo, "", "", $Clasificacion, $Lider, $Area, $Pagina_web, "1");
	$updateGrupo_de_investigacion -> update();
	$updateGrupo_de_investigacion -> select();
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
	$logGrupo_de_investigacion = new LogGrupo_de_investigacion("","Editar Profile Grupo_de_investigacion", "Nombre: " . $nombre . "; Correo: " . $correo . "; Clasificacion: " . $Clasificacion . "; Lider: " . $Lider . "; Area: " . $Area . "; Pagina_web: " . $Pagina_web, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
	$logGrupo_de_investigacion -> insert();
	$processed=true;
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Editar Profile Grupo_de_investigacion</h4>
				</div>
				<div class="card-body">
					<?php if($processed){ ?>
					<div class="alert alert-success" >Datos Editados
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php } ?>
					<form id="form" method="post" action="index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/updateProfileGrupo_de_investigacion.php") ?>" class="bootstrap-form needs-validation"   >
						<div class="form-group">
							<label>Nombre*</label>
							<input type="text" class="form-control" name="nombre" value="<?php echo $updateGrupo_de_investigacion -> getNombre() ?>" required />
						</div>
						<div class="form-group">
							<label>Correo*</label>
							<input type="email" class="form-control" name="correo" value="<?php echo $updateGrupo_de_investigacion -> getCorreo() ?>"  required />
						</div>
						<div class="form-group">
							<label>Clasificacion</label>
							<textarea id="Clasificacion" name="Clasificacion" ><?php echo $updateGrupo_de_investigacion -> getClasificacion() ?></textarea>
							<script>
								$('#Clasificacion').summernote({
									tabsize: 2,
									height: 100
								});
							</script>
						</div>
						<div class="form-group">
							<label>Lider</label>
							<textarea id="Lider" name="Lider" ><?php echo $updateGrupo_de_investigacion -> getLider() ?></textarea>
							<script>
								$('#Lider').summernote({
									tabsize: 2,
									height: 100
								});
							</script>
						</div>
						<div class="form-group">
							<label>Area</label>
							<textarea id="Area" name="Area" ><?php echo $updateGrupo_de_investigacion -> getArea() ?></textarea>
							<script>
								$('#Area').summernote({
									tabsize: 2,
									height: 100
								});
							</script>
						</div>
						<div class="form-group">
							<label>Pagina_web</label>
							<input type="text" class="form-control" name="Pagina_web" value="<?php echo $updateGrupo_de_investigacion -> getPagina_web() ?>"/>
						</div>
						<button type="submit" class="btn btn-info" name="update">Editar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
