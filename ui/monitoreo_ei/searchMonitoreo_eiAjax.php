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
		$monitoreo_ei = new Monitoreo_ei();
		$monitoreo_eis = $monitoreo_ei -> search($_GET['search']);
		$counter = 1;
		foreach ($monitoreo_eis as $currentMonitoreo_ei) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentMonitoreo_ei -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentMonitoreo_ei -> getCalificacion()) . "</td>";
			echo "<td>" . $currentMonitoreo_ei -> getGrupo_de_investigacion() -> getNombre() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ei/updateMonitoreo_ei.php") . "&idMonitoreo_ei=" . $currentMonitoreo_ei -> getIdMonitoreo_ei() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Monitoreo_ei' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ei/selectAllMonitoreo_ei.php") . "&idMonitoreo_ei=" . $currentMonitoreo_ei -> getIdMonitoreo_ei() . "&action=delete' onclick='return confirm(\"Confirm to delete Monitoreo_ei: " . $currentMonitoreo_ei -> getVariable() . " " . $currentMonitoreo_ei -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Monitoreo_ei' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
