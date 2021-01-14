<?php
$processed=false;
$idVigilancia_tecnologica = $_GET['idVigilancia_tecnologica'];
$updateVigilancia_tecnologica = new Vigilancia_tecnologica($idVigilancia_tecnologica);
$updateVigilancia_tecnologica -> select();
$variable="";
if(isset($_POST['variable'])){
	$variable=$_POST['variable'];
}
$calificacion="";
if(isset($_POST['calificacion'])){
	$calificacion=$_POST['calificacion'];
}
$grupo_de_investigacion="";
if(isset($_POST['grupo_de_investigacion'])){
	$grupo_de_investigacion=$_POST['grupo_de_investigacion'];
}
if(isset($_POST['update'])){
	$updateVigilancia_tecnologica = new Vigilancia_tecnologica($idVigilancia_tecnologica, $variable, $calificacion, $grupo_de_investigacion);
	$updateVigilancia_tecnologica -> update();
	$updateVigilancia_tecnologica -> select();
	$objGrupo_de_investigacion = new Grupo_de_investigacion($grupo_de_investigacion);
	$objGrupo_de_investigacion -> select();
	$nameGrupo_de_investigacion = $objGrupo_de_investigacion -> getNombre() . " " . $objGrupo_de_investigacion -> getApellido() . " " . $objGrupo_de_investigacion -> getClasificacion() . " " . $objGrupo_de_investigacion -> getLider() . " " . $objGrupo_de_investigacion -> getArea() . " " . $objGrupo_de_investigacion -> getPagina_web() ;
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
	if($_SESSION['entity'] == 'Administrador'){
		$logAdministrador = new LogAdministrador("","Editar Vigilancia_tecnologica", "Variable: " . $variable . "; Calificacion: " . $calificacion . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion , date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
		$logAdministrador -> insert();
	}
	else if($_SESSION['entity'] == 'Usuario_ud'){
		$logUsuario_ud = new LogUsuario_ud("","Editar Vigilancia_tecnologica", "Variable: " . $variable . "; Calificacion: " . $calificacion . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion , date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
		$logUsuario_ud -> insert();
	}
	else if($_SESSION['entity'] == 'Grupo_de_investigacion'){
		$logGrupo_de_investigacion = new LogGrupo_de_investigacion("","Editar Vigilancia_tecnologica", "Variable: " . $variable . "; Calificacion: " . $calificacion . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion , date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
		$logGrupo_de_investigacion -> insert();
	}
	$processed=true;
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Editar Vigilancia_tecnologica</h4>
				</div>
				<div class="card-body">
					<?php if($processed){ ?>
					<div class="alert alert-success" >Datos Editados
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php } ?>
					<form id="form" method="post" action="index.php?pid=<?php echo base64_encode("ui/vigilancia_tecnologica/updateVigilancia_tecnologica.php") . "&idVigilancia_tecnologica=" . $idVigilancia_tecnologica ?>" class="bootstrap-form needs-validation"   >
						<div class="form-group">
							<label>Variable</label>
							<textarea id="variable" name="variable" ><?php echo $updateVigilancia_tecnologica -> getVariable() ?></textarea>
							<script>
								$('#variable').summernote({
									tabsize: 2,
									height: 100
								});
							</script>
						</div>
						<div class="form-group">
							<label>Calificacion</label>
							<input type="text" class="form-control" name="calificacion" value="<?php echo $updateVigilancia_tecnologica -> getCalificacion() ?>"/>
						</div>
					<div class="form-group">
						<label>Grupo_de_investigacion*</label>
						<select class="form-control" name="grupo_de_investigacion">
							<?php
							$objGrupo_de_investigacion = new Grupo_de_investigacion();
							$grupo_de_investigacions = $objGrupo_de_investigacion -> selectAllOrder("nombre", "asc");
							foreach($grupo_de_investigacions as $currentGrupo_de_investigacion){
								echo "<option value='" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'";
								if($currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() == $updateVigilancia_tecnologica -> getGrupo_de_investigacion() -> getIdGrupo_de_investigacion()){
									echo " selected";
								}
								echo ">" . $currentGrupo_de_investigacion -> getNombre() . " " . $currentGrupo_de_investigacion -> getApellido() . " " . $currentGrupo_de_investigacion -> getClasificacion() . " " . $currentGrupo_de_investigacion -> getLider() . " " . $currentGrupo_de_investigacion -> getArea() . " " . $currentGrupo_de_investigacion -> getPagina_web() . "</option>";
							}
							?>
						</select>
					</div>
						<button type="submit" class="btn btn-info" name="update">Editar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
