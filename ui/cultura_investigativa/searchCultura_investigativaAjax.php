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
		$cultura_investigativa = new Cultura_investigativa();
		$cultura_investigativas = $cultura_investigativa -> search($_GET['search']);
		$counter = 1;
		foreach ($cultura_investigativas as $currentCultura_investigativa) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentCultura_investigativa -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentCultura_investigativa -> getCalificacion()) . "</td>";
			echo "<td>" . $currentCultura_investigativa -> getGrupo_de_investigacion() -> getNombre() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/cultura_investigativa/updateCultura_investigativa.php") . "&idCultura_investigativa=" . $currentCultura_investigativa -> getIdCultura_investigativa() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Cultura_investigativa' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/cultura_investigativa/selectAllCultura_investigativa.php") . "&idCultura_investigativa=" . $currentCultura_investigativa -> getIdCultura_investigativa() . "&action=delete' onclick='return confirm(\"Confirm to delete Cultura_investigativa: " . $currentCultura_investigativa -> getVariable() . " " . $currentCultura_investigativa -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Cultura_investigativa' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
