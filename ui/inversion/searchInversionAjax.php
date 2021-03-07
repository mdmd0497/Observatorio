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
		$inversion = new Inversion();
		$inversions = $inversion -> search($_GET['search']);
		$counter = 1;
		foreach ($inversions as $currentInversion) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentInversion -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentInversion -> getCalificacion()) . "</td>";
			echo "<td>" . $currentInversion -> getGrupo_de_investigacion() -> getNombre() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/inversion/updateInversion.php") . "&idInversion=" . $currentInversion -> getIdInversion() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Inversion' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/inversion/selectAllInversion.php") . "&idInversion=" . $currentInversion -> getIdInversion() . "&action=delete' onclick='return confirm(\"Confirm to delete Inversion: " . $currentInversion -> getVariable() . " " . $currentInversion -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Inversion' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
