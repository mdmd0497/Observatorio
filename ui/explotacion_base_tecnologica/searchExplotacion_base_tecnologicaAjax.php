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
		$explotacion_base_tecnologica = new Explotacion_base_tecnologica();
		$explotacion_base_tecnologicas = $explotacion_base_tecnologica -> search($_GET['search']);
		$counter = 1;
		foreach ($explotacion_base_tecnologicas as $currentExplotacion_base_tecnologica) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentExplotacion_base_tecnologica -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentExplotacion_base_tecnologica -> getCalificacion()) . "</td>";
			echo "<td>" . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getNombre() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getApellido() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getLider() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getArea() . " " . $currentExplotacion_base_tecnologica -> getGrupo_de_investigacion() -> getPagina_web() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/explotacion_base_tecnologica/updateExplotacion_base_tecnologica.php") . "&idExplotacion_base_tecnologica=" . $currentExplotacion_base_tecnologica -> getIdExplotacion_base_tecnologica() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Explotacion_base_tecnologica' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologica.php") . "&idExplotacion_base_tecnologica=" . $currentExplotacion_base_tecnologica -> getIdExplotacion_base_tecnologica() . "&action=delete' onclick='return confirm(\"Confirm to delete Explotacion_base_tecnologica: " . $currentExplotacion_base_tecnologica -> getVariable() . " " . $currentExplotacion_base_tecnologica -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Explotacion_base_tecnologica' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
