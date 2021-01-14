<?php
$processed=false;
$idPc = $_GET['idPc'];
$updatePc = new Pc($idPc);
$updatePc -> select();
$indicador="";
if(isset($_POST['indicador'])){
	$indicador=$_POST['indicador'];
}
$abreviatura="";
if(isset($_POST['abreviatura'])){
	$abreviatura=$_POST['abreviatura'];
}
$valor_maximo="";
if(isset($_POST['valor_maximo'])){
	$valor_maximo=$_POST['valor_maximo'];
}
$valor_indicador="";
if(isset($_POST['valor_indicador'])){
	$valor_indicador=$_POST['valor_indicador'];
}
$grupo_de_investigacion="";
if(isset($_POST['grupo_de_investigacion'])){
	$grupo_de_investigacion=$_POST['grupo_de_investigacion'];
}
if(isset($_POST['update'])){
	$updatePc = new Pc($idPc, $indicador, $abreviatura, $valor_maximo, $valor_indicador, $grupo_de_investigacion);
	$updatePc -> update();
	$updatePc -> select();
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
		$logAdministrador = new LogAdministrador("","Editar Pc", "Indicador: " . $indicador . "; Abreviatura: " . $abreviatura . "; Valor_maximo: " . $valor_maximo . "; Valor_indicador: " . $valor_indicador . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion , date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
		$logAdministrador -> insert();
	}
	else if($_SESSION['entity'] == 'Usuario_ud'){
		$logUsuario_ud = new LogUsuario_ud("","Editar Pc", "Indicador: " . $indicador . "; Abreviatura: " . $abreviatura . "; Valor_maximo: " . $valor_maximo . "; Valor_indicador: " . $valor_indicador . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion , date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
		$logUsuario_ud -> insert();
	}
	else if($_SESSION['entity'] == 'Grupo_de_investigacion'){
		$logGrupo_de_investigacion = new LogGrupo_de_investigacion("","Editar Pc", "Indicador: " . $indicador . "; Abreviatura: " . $abreviatura . "; Valor_maximo: " . $valor_maximo . "; Valor_indicador: " . $valor_indicador . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion , date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
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
					<h4 class="card-title">Editar Pc</h4>
				</div>
				<div class="card-body">
					<?php if($processed){ ?>
					<div class="alert alert-success" >Datos Editados
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php } ?>
					<form id="form" method="post" action="index.php?pid=<?php echo base64_encode("ui/pc/updatePc.php") . "&idPc=" . $idPc ?>" class="bootstrap-form needs-validation"   >
						<div class="form-group">
							<label>Indicador</label>
							<textarea id="indicador" name="indicador" ><?php echo $updatePc -> getIndicador() ?></textarea>
							<script>
								$('#indicador').summernote({
									tabsize: 2,
									height: 100
								});
							</script>
						</div>
						<div class="form-group">
							<label>Abreviatura</label>
							<textarea id="abreviatura" name="abreviatura" ><?php echo $updatePc -> getAbreviatura() ?></textarea>
							<script>
								$('#abreviatura').summernote({
									tabsize: 2,
									height: 100
								});
							</script>
						</div>
						<div class="form-group">
							<label>Valor_maximo</label>
							<input type="text" class="form-control" name="valor_maximo" value="<?php echo $updatePc -> getValor_maximo() ?>"/>
						</div>
						<div class="form-group">
							<label>Valor_indicador</label>
							<input type="text" class="form-control" name="valor_indicador" value="<?php echo $updatePc -> getValor_indicador() ?>"/>
						</div>
					<div class="form-group">
						<label>Grupo_de_investigacion*</label>
						<select class="form-control" name="grupo_de_investigacion">
							<?php
							$objGrupo_de_investigacion = new Grupo_de_investigacion();
							$grupo_de_investigacions = $objGrupo_de_investigacion -> selectAllOrder("nombre", "asc");
							foreach($grupo_de_investigacions as $currentGrupo_de_investigacion){
								echo "<option value='" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'";
								if($currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() == $updatePc -> getGrupo_de_investigacion() -> getIdGrupo_de_investigacion()){
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
