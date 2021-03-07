<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	});
</script>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<thead>
		<tr><th></th>
			<th nowrap>Variable</th>
			<th nowrap>Calificacion</th>
			<th>Grupo_de_investigacion</th>
			<th nowrap></th>
		</tr>
	</thead>
	</tbody>
		<?php
		$monitoreo_ai = new Monitoreo_ai();
		$monitoreo_ais = $monitoreo_ai -> search($_GET['search']);
		$counter = 1;
		foreach ($monitoreo_ais as $currentMonitoreo_ai) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentMonitoreo_ai -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentMonitoreo_ai -> getCalificacion()) . "</td>";
			echo "<td>" . $currentMonitoreo_ai -> getGrupo_de_investigacion() -> getNombre() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ai/updateMonitoreo_ai.php") . "&idMonitoreo_ai=" . $currentMonitoreo_ai -> getIdMonitoreo_ai() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Monitoreo_ai' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ai/selectAllMonitoreo_ai.php") . "&idMonitoreo_ai=" . $currentMonitoreo_ai -> getIdMonitoreo_ai() . "&action=delete' onclick='return confirm(\"Confirm to delete Monitoreo_ai: " . $currentMonitoreo_ai -> getVariable() . " " . $currentMonitoreo_ai -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Monitoreo_ai' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
