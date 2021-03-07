<?php
$order = "";
if(isset($_GET['order'])){
	$order = $_GET['order'];
}
$dir = "";
if(isset($_GET['dir'])){
	$dir = $_GET['dir'];
}
$grupo_de_investigacion = new Grupo_de_investigacion($_GET['idGrupo_de_investigacion']); 
$grupo_de_investigacion -> select();
$error = 0;
if(!empty($_GET['action']) && $_GET['action']=="delete"){
	$deletePc = new Pc($_GET['idPc']);
	$deletePc -> select();
	if($deletePc -> delete()){
		$nameGrupo_de_investigacion = $deletePc -> getGrupo_de_investigacion() -> getNombre() . " " . $deletePc -> getGrupo_de_investigacion() -> getClasificacion() . " " . $deletePc -> getGrupo_de_investigacion() -> getLider() . " " . $deletePc -> getGrupo_de_investigacion() -> getArea() . " " . $deletePc -> getGrupo_de_investigacion() -> getPagina_web();
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
			$logAdministrador = new LogAdministrador("","Delete Pc", "Indicador: " . $deletePc -> getIndicador() . ";; Abreviatura: " . $deletePc -> getAbreviatura() . ";; Valor_maximo: " . $deletePc -> getValor_maximo() . ";; Valor_indicador: " . $deletePc -> getValor_indicador() . ";; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
			$logAdministrador -> insert();
		}
		else if($_SESSION['entity'] == 'Usuario_ud'){
			$logUsuario_ud = new LogUsuario_ud("","Delete Pc", "Indicador: " . $deletePc -> getIndicador() . ";; Abreviatura: " . $deletePc -> getAbreviatura() . ";; Valor_maximo: " . $deletePc -> getValor_maximo() . ";; Valor_indicador: " . $deletePc -> getValor_indicador() . ";; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
			$logUsuario_ud -> insert();
		}
		else if($_SESSION['entity'] == 'Grupo_de_investigacion'){
			$logGrupo_de_investigacion = new LogGrupo_de_investigacion("","Delete Pc", "Indicador: " . $deletePc -> getIndicador() . ";; Abreviatura: " . $deletePc -> getAbreviatura() . ";; Valor_maximo: " . $deletePc -> getValor_maximo() . ";; Valor_indicador: " . $deletePc -> getValor_indicador() . ";; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
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
			<h4 class="card-title">Consultar PERFIL DE COLABORACION de Grupo_de_investigacion: <em><?php echo $grupo_de_investigacion -> getNombre()?></em></h4>
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
						<th nowrap>Indicador 
						<?php if($order=="indicador" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' href='index.php?pid=<?php echo base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") ?>&idGrupo_de_investigacion=<?php echo $_GET['idGrupo_de_investigacion'] ?>&order=indicador&dir=asc'>
							<span class='fas fa-sort-amount-up'></span></a>
						<?php } ?>
						<?php if($order=="indicador" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' href='index.php?pid=<?php echo base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") ?>&idGrupo_de_investigacion=<?php echo $_GET['idGrupo_de_investigacion'] ?>&order=indicador&dir=desc'>
							<span class='fas fa-sort-amount-down'></span></a>
						<?php } ?>
						</th>
						<th nowrap>Abreviatura 
						<?php if($order=="abreviatura" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' href='index.php?pid=<?php echo base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") ?>&idGrupo_de_investigacion=<?php echo $_GET['idGrupo_de_investigacion'] ?>&order=abreviatura&dir=asc'>
							<span class='fas fa-sort-amount-up'></span></a>
						<?php } ?>
						<?php if($order=="abreviatura" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' href='index.php?pid=<?php echo base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") ?>&idGrupo_de_investigacion=<?php echo $_GET['idGrupo_de_investigacion'] ?>&order=abreviatura&dir=desc'>
							<span class='fas fa-sort-amount-down'></span></a>
						<?php } ?>
						</th>
						<th nowrap>Valor_maximo 
						<?php if($order=="valor_maximo" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' href='index.php?pid=<?php echo base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") ?>&idGrupo_de_investigacion=<?php echo $_GET['idGrupo_de_investigacion'] ?>&order=valor_maximo&dir=asc'>
							<span class='fas fa-sort-amount-up'></span></a>
						<?php } ?>
						<?php if($order=="valor_maximo" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' href='index.php?pid=<?php echo base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") ?>&idGrupo_de_investigacion=<?php echo $_GET['idGrupo_de_investigacion'] ?>&order=valor_maximo&dir=desc'>
							<span class='fas fa-sort-amount-down'></span></a>
						<?php } ?>
						</th>
						<th nowrap>Valor_indicador 
						<?php if($order=="valor_indicador" && $dir=="asc") { ?>
							<span class='fas fa-sort-up'></span>
						<?php } else { ?>
							<a data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Ascendente' href='index.php?pid=<?php echo base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") ?>&idGrupo_de_investigacion=<?php echo $_GET['idGrupo_de_investigacion'] ?>&order=valor_indicador&dir=asc'>
							<span class='fas fa-sort-amount-up'></span></a>
						<?php } ?>
						<?php if($order=="valor_indicador" && $dir=="desc") { ?>
							<span class='fas fa-sort-down'></span>
						<?php } else { ?>
							<a data-toggle='tooltip' class='tooltipLink' data-original-title='Ordenar Descendente' href='index.php?pid=<?php echo base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") ?>&idGrupo_de_investigacion=<?php echo $_GET['idGrupo_de_investigacion'] ?>&order=valor_indicador&dir=desc'>
							<span class='fas fa-sort-amount-down'></span></a>
						<?php } ?>
						</th>
						<th>Grupo_de_investigacion</th>
						<th nowrap></th>
					</tr>
				</thead>
				</tbody>
					<?php
					$pc = new Pc("", "", "", "", "","","","","", $_GET['idGrupo_de_investigacion']);
					if($order!="" && $dir!="") {
						$pcs = $pc -> selectAllByGrupo_de_investigacionOrder($order, $dir);
					} else {
						$pcs = $pc -> selectAllByGrupo_de_investigacion();
					}
					$counter = 1;
					foreach ($pcs as $currentPc) {
						echo "<tr><td>" . $counter . "</td>";
						echo "<td>" . $currentPc -> getIndicador() . "</td>";
						echo "<td>" . $currentPc -> getAbreviatura() . "</td>";
						echo "<td>" . $currentPc -> getValor_maximo() . "</td>";
						echo "<td>" . $currentPc -> getValor_indicador() . "</td>";
						echo "<td><a href='modalGrupo_de_investigacion.php?idGrupo_de_investigacion=" . $currentPc -> getGrupo_de_investigacion() -> getIdGrupo_de_investigacion() . "' data-toggle='modal' data-target='#modalPc' >" . $currentPc -> getGrupo_de_investigacion() -> getNombre() ."</a></td>";
						echo "<td class='text-right' nowrap>";
						if($_SESSION['entity'] == 'Administrador' || $_SESSION['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/pc/updatePc.php") . "&idPc=" . $currentPc -> getIdPc() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Pc' ></span></a> ";
						}
						if($_SESSION['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $_GET['idGrupo_de_investigacion'] . "&idPc=" . $currentPc -> getIdPc() . "&action=delete' onclick='return confirm(\"Confirm to delete Pc: " . $currentPc -> getIndicador() . " " . $currentPc -> getAbreviatura() . " " . $currentPc -> getValor_maximo() . " " . $currentPc -> getValor_indicador() . "\")'> <span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Pc' ></span></a> ";
						}
						echo "</td>";
						echo "</tr>";
						$counter++;
					};
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalPc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
