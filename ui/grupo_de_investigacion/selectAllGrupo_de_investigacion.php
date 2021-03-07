<?php
$order = "nombre";
if(isset($_GET['order'])){
	$order = $_GET['order'];
}
$dir = "asc";
if(isset($_GET['dir'])){
	$dir = $_GET['dir'];
}
$error = 0;
if(isset($_GET['action']) && $_GET['action']=="delete"){
	$deleteGrupo_de_investigacion = new Grupo_de_investigacion($_GET['idGrupo_de_investigacion']);
	$deleteGrupo_de_investigacion -> select();
	if($deleteGrupo_de_investigacion -> delete()){
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
			$logAdministrador = new LogAdministrador("","Delete Grupo_de_investigacion", "Nombre: " . $deleteGrupo_de_investigacion -> getNombre() . ";; Apellido: " . $deleteGrupo_de_investigacion -> getApellido() . ";; Correo: " . $deleteGrupo_de_investigacion -> getCorreo() . ";; Clave: " . $deleteGrupo_de_investigacion -> getClave() . ";; Clasificacion: " . $deleteGrupo_de_investigacion -> getClasificacion() . ";; Lider: " . $deleteGrupo_de_investigacion -> getLider() . ";; Area: " . $deleteGrupo_de_investigacion -> getArea() . ";; Pagina_web: " . $deleteGrupo_de_investigacion -> getPagina_web() . ";; State: " . $deleteGrupo_de_investigacion -> getState(), date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
			$logAdministrador -> insert();
		}
		else if($_SESSION['entity'] == 'Usuario_ud'){
			$logUsuario_ud = new LogUsuario_ud("","Delete Grupo_de_investigacion", "Nombre: " . $deleteGrupo_de_investigacion -> getNombre() . ";; Apellido: " . $deleteGrupo_de_investigacion -> getApellido() . ";; Correo: " . $deleteGrupo_de_investigacion -> getCorreo() . ";; Clave: " . $deleteGrupo_de_investigacion -> getClave() . ";; Clasificacion: " . $deleteGrupo_de_investigacion -> getClasificacion() . ";; Lider: " . $deleteGrupo_de_investigacion -> getLider() . ";; Area: " . $deleteGrupo_de_investigacion -> getArea() . ";; Pagina_web: " . $deleteGrupo_de_investigacion -> getPagina_web() . ";; State: " . $deleteGrupo_de_investigacion -> getState(), date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
			$logUsuario_ud -> insert();
		}
		else if($_SESSION['entity'] == 'Grupo_de_investigacion'){
			$logGrupo_de_investigacion = new LogGrupo_de_investigacion("","Delete Grupo_de_investigacion", "Nombre: " . $deleteGrupo_de_investigacion -> getNombre() . ";; Correo: " . $deleteGrupo_de_investigacion -> getCorreo() . ";; Clave: " . $deleteGrupo_de_investigacion -> getClave() . ";; Clasificacion: " . $deleteGrupo_de_investigacion -> getClasificacion() . ";; Lider: " . $deleteGrupo_de_investigacion -> getLider() . ";; Area: " . $deleteGrupo_de_investigacion -> getArea() . ";; Pagina_web: " . $deleteGrupo_de_investigacion -> getPagina_web() . ";; State: " . $deleteGrupo_de_investigacion -> getState(), date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
			$logGrupo_de_investigacion -> insert();
		}
	}else{
		$error = 1;
	}
}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Consultar Grupo_de_investigacion</h4>
		</div>
		<div class="card-body">
		<?php if(isset($_GET['action']) && $_GET['action']=="delete"){ ?>
			<?php if($error == 0){ ?>
				<div class="alert alert-success" >The registry was succesfully deleted.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php } else { ?>
				<div class="alert alert-danger" >The registry was not deleted. Check it does not have related information
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php }
			} ?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr><th></th>
						<th nowrap>Nombre 
						<?php if($order=="nombre" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=nombre&dir=asc'>
							<span class='fas fa-sort-amount-up' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' ></span></a>
						<?php } ?>
						<?php if($order=="nombre" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=nombre&dir=desc'>
							<span class='fas fa-sort-amount-down' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' ></span></a>
						<?php } ?>
						</th>
						<th nowrap>Correo 
						<?php if($order=="correo" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=correo&dir=asc'>
							<span class='fas fa-sort-amount-up' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' ></span></a>
						<?php } ?>
						<?php if($order=="correo" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=correo&dir=desc'>
							<span class='fas fa-sort-amount-down' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' ></span></a>
						<?php } ?>
						</th>
						<th nowrap>Clasificacion 
						<?php if($order=="Clasificacion" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=Clasificacion&dir=asc'>
							<span class='fas fa-sort-amount-up' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' ></span></a>
						<?php } ?>
						<?php if($order=="Clasificacion" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=Clasificacion&dir=desc'>
							<span class='fas fa-sort-amount-down' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' ></span></a>
						<?php } ?>
						</th>
						<th nowrap>Lider 
						<?php if($order=="Lider" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=Lider&dir=asc'>
							<span class='fas fa-sort-amount-up' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' ></span></a>
						<?php } ?>
						<?php if($order=="Lider" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=Lider&dir=desc'>
							<span class='fas fa-sort-amount-down' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' ></span></a>
						<?php } ?>
						</th>
						<th nowrap>Area 
						<?php if($order=="Area" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=Area&dir=asc'>
							<span class='fas fa-sort-amount-up' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' ></span></a>
						<?php } ?>
						<?php if($order=="Area" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=Area&dir=desc'>
							<span class='fas fa-sort-amount-down' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' ></span></a>
						<?php } ?>
						</th>
						<th>Pagina_web</th> 
						<th nowrap>State 
						<?php if($order=="state" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=state&dir=asc'>
							<span class='fas fa-sort-amount-up' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' ></span></a>
						<?php } ?>
						<?php if($order=="state" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>&order=state&dir=desc'>
							<span class='fas fa-sort-amount-down' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' ></span></a>
						<?php } ?>
						</th>
						<th nowrap></th>
					</tr>
				</thead>
				</tbody>
					<?php
					$grupo_de_investigacion = new Grupo_de_investigacion();
					if($order != "" && $dir != "") {
						$grupo_de_investigacions = $grupo_de_investigacion -> selectAllOrder($order, $dir);
					} else {
						$grupo_de_investigacions = $grupo_de_investigacion -> selectAll();
					}
					$counter = 1;
					foreach ($grupo_de_investigacions as $currentGrupo_de_investigacion) {
						echo "<tr><td>" . $counter . "</td>";
						echo "<td>" . $currentGrupo_de_investigacion -> getNombre() . "</td>";
						echo "<td>" . $currentGrupo_de_investigacion -> getCorreo() . "</td>";
						echo "<td>" . $currentGrupo_de_investigacion -> getClasificacion() . "</td>";
						echo "<td>" . $currentGrupo_de_investigacion -> getLider() . "</td>";
						echo "<td>" . $currentGrupo_de_investigacion -> getArea() . "</td>";
						if($currentGrupo_de_investigacion -> getPagina_web() != "") {
							echo "<td><a href='" . $currentGrupo_de_investigacion -> getPagina_web() . "' target='_blank'><span class='fas fa-external-link-alt' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='" . $currentGrupo_de_investigacion -> getPagina_web() . "' ></span></a></td>";
						} else {
							echo "<td></td>";
						}
						echo "<td>" . ($currentGrupo_de_investigacion -> getState()==1?"Habilitado":"Deshabilitado") . "</td>";
						echo "<td class='text-right' nowrap>";
						echo "<a href='modalGrupo_de_investigacion.php?idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'  data-toggle='modal' data-target='#modalGrupo_de_investigacion' ><span class='fas fa-eye' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Ver mas información' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/grupo_de_investigacion/updateGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Grupo_de_investigacion' ></span></a> ";
							echo "<a href='index.php?pid=" . base64_encode("ui/grupo_de_investigacion/updateFotoGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "&attribute=foto'><span class='fas fa-camera' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar foto'></span></a> ";
						}
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "&action=delete' onclick='return confirm(\"Confirma eliminar Grupo_de_investigacion: " . $currentGrupo_de_investigacion -> getNombre() . " " . $currentGrupo_de_investigacion -> getClasificacion() . " " . $currentGrupo_de_investigacion -> getLider() . " " . $currentGrupo_de_investigacion -> getArea() . " " . $currentGrupo_de_investigacion -> getPagina_web() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Grupo_de_investigacion' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar PERFIL DE COLABORACION' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/pc/insertPc.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Pc' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/ppnc/selectAllPpncByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Ppnc' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppnc/insertPpnc.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Ppnc' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/ppaidi/selectAllPpaidiByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Ppaidi' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppaidi/insertPpaidi.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Ppaidi' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/ppfr/selectAllPpfrByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Ppfr' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppfr/insertPpfr.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Ppfr' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/productos/selectAllProductosByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Productos' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/productos/insertProductos.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Productos' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/cultura_investigativa/selectAllCultura_investigativaByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Cultura_investigativa' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/cultura_investigativa/insertCultura_investigativa.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Cultura_investigativa' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/inversion/selectAllInversionByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Inversion' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/inversion/insertInversion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Inversion' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/empresas_centros_investigacion/selectAllEmpresas_centros_investigacionByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Empresas_centros_investigacion' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/empresas_centros_investigacion/insertEmpresas_centros_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Empresas_centros_investigacion' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/financiacion/selectAllFinanciacionByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Financiacion' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/financiacion/insertFinanciacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Financiacion' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ai/selectAllMonitoreo_aiByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Monitoreo_ai' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ai/insertMonitoreo_ai.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Monitoreo_ai' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ei/selectAllMonitoreo_eiByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Monitoreo_ei' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ei/insertMonitoreo_ei.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Monitoreo_ei' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/gestion_del_conocimiento/selectAllGestion_del_conocimientoByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Gestion_del_conocimiento' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/gestion_del_conocimiento/insertGestion_del_conocimiento.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Gestion_del_conocimiento' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/vigilancia_tecnologica/selectAllVigilancia_tecnologicaByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Vigilancia_tecnologica' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/vigilancia_tecnologica/insertVigilancia_tecnologica.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Vigilancia_tecnologica' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologicaByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Explotacion_base_tecnologica' ></span></a> ";
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/explotacion_base_tecnologica/insertExplotacion_base_tecnologica.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Explotacion_base_tecnologica' ></span></a> ";
						}
						echo "</td>";
						echo "</tr>";
						$counter++;
					}
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalGrupo_de_investigacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" >
		<div class="modal-content" id="modalContent">
		</div>
	</div>
</div>
<script>
	$('body').on('show.bs.modal', '.modal', function (e) {
		var link = $(e.relatedTarget);
		$(this).find(".modal-content").load(link.attr("href"));
	});
</script>
