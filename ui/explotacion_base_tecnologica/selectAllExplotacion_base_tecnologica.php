<?php
$order = "";
if(isset($_GET['order'])){
	$order = $_GET['order'];
}
$dir = "";
if(isset($_GET['dir'])){
	$dir = $_GET['dir'];
}
$error = 0;
if(isset($_GET['action']) && $_GET['action']=="delete"){
	$deleteExplotacion_base_tecnologica = new Explotacion_base_tecnologica($_GET['idExplotacion_base_tecnologica']);
	$deleteExplotacion_base_tecnologica -> select();
	if($deleteExplotacion_base_tecnologica -> delete()){
		$nameGrupo_de_investigacion = $deleteExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getNombre() . " " . $deleteExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getApellido() . " " . $deleteExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getClasificacion() . " " . $deleteExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getLider() . " " . $deleteExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getArea() . " " . $deleteExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getPagina_web();
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
			$logAdministrador = new LogAdministrador("","Delete Explotacion_base_tecnologica", "Variable: " . $deleteExplotacion_base_tecnologica -> getVariable() . ";; Calificacion: " . $deleteExplotacion_base_tecnologica -> getCalificacion() . ";; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
			$logAdministrador -> insert();
		}
		else if($_SESSION['entity'] == 'Usuario_ud'){
			$logUsuario_ud = new LogUsuario_ud("","Delete Explotacion_base_tecnologica", "Variable: " . $deleteExplotacion_base_tecnologica -> getVariable() . ";; Calificacion: " . $deleteExplotacion_base_tecnologica -> getCalificacion() . ";; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
			$logUsuario_ud -> insert();
		}
		else if($_SESSION['entity'] == 'Grupo_de_investigacion'){
			$logGrupo_de_investigacion = new LogGrupo_de_investigacion("","Delete Explotacion_base_tecnologica", "Variable: " . $deleteExplotacion_base_tecnologica -> getVariable() . ";; Calificacion: " . $deleteExplotacion_base_tecnologica -> getCalificacion() . ";; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
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
			<h4 class="card-title">Consultar Explotacion_base_tecnologica</h4>
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
						<th nowrap>Variable 
						<?php if($order=="variable" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologica.php") ?>&order=variable&dir=asc'>
							<span class='fas fa-sort-amount-up' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' ></span></a>
						<?php } ?>
						<?php if($order=="variable" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologica.php") ?>&order=variable&dir=desc'>
							<span class='fas fa-sort-amount-down' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' ></span></a>
						<?php } ?>
						</th>
						<th nowrap>Calificacion 
						<?php if($order=="calificacion" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologica.php") ?>&order=calificacion&dir=asc'>
							<span class='fas fa-sort-amount-up' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' ></span></a>
						<?php } ?>
						<?php if($order=="calificacion" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a href='index.php?pid=<?php echo base64_encode("ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologica.php") ?>&order=calificacion&dir=desc'>
							<span class='fas fa-sort-amount-down' data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' ></span></a>
						<?php } ?>
						</th>
						<th>Grupo_de_investigacion</th>
						<th nowrap></th>
					</tr>
				</thead>
				</tbody>
					<?php
					$explotacion_base_tecnologica = new Explotacion_base_tecnologica();
					if($order != "" && $dir != "") {
						$explotacion_base_tecnologicas = $explotacion_base_tecnologica -> selectAllOrder($order, $dir);
					} else {
						$explotacion_base_tecnologicas = $explotacion_base_tecnologica -> selectAll();
					}
					$counter = 1;
					foreach ($explotacion_base_tecnologicas as $currentExplotacion_base_tecnologica) {
						echo "<tr><td>" . $counter . "</td>";
						echo "<td>" . $currentExplotacion_base_tecnologica -> getVariable() . "</td>";
						echo "<td>" . $currentExplotacion_base_tecnologica -> getCalificacion() . "</td>";
						echo "<td><a href='modalGrupo_de_investigacion.php?idGrupo_de_investigacion=" . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getIdGrupo_de_investigacion() . "' data-toggle='modal' data-target='#modalExplotacion_base_tecnologica' >" . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getNombre() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getApellido() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getLider() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getArea() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getPagina_web() . "</a></td>";
						echo "<td class='text-right' nowrap>";
						if($_SESSION['entity'] == 'Administrador' || $_SESSION['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/explotacion_base_tecnologica/updateExplotacion_base_tecnologica.php") . "&idExplotacion_base_tecnologica=" . $currentExplotacion_base_tecnologica -> getIdExplotacion_base_tecnologica() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Explotacion_base_tecnologica' ></span></a> ";
						}
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologica.php") . "&idExplotacion_base_tecnologica=" . $currentExplotacion_base_tecnologica -> getIdExplotacion_base_tecnologica() . "&action=delete' onclick='return confirm(\"Confirma eliminar Explotacion_base_tecnologica: " . $currentExplotacion_base_tecnologica -> getVariable() . " " . $currentExplotacion_base_tecnologica -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Explotacion_base_tecnologica' ></span></a> ";
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
<div class="modal fade" id="modalExplotacion_base_tecnologica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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