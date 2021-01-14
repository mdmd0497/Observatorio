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
		$vigilancia_tecnologica = new Vigilancia_tecnologica();
		$vigilancia_tecnologicas = $vigilancia_tecnologica -> search($_GET['search']);
		$counter = 1;
		foreach ($vigilancia_tecnologicas as $currentVigilancia_tecnologica) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentVigilancia_tecnologica -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentVigilancia_tecnologica -> getCalificacion()) . "</td>";
			echo "<td>" . $currentVigilancia_tecnologica -> getGrupo_de_investigacion() -> getNombre() . " " . $currentVigilancia_tecnologica -> getGrupo_de_investigacion() -> getApellido() . " " . $currentVigilancia_tecnologica -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentVigilancia_tecnologica -> getGrupo_de_investigacion() -> getLider() . " " . $currentVigilancia_tecnologica -> getGrupo_de_investigacion() -> getArea() . " " . $currentVigilancia_tecnologica -> getGrupo_de_investigacion() -> getPagina_web() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/vigilancia_tecnologica/updateVigilancia_tecnologica.php") . "&idVigilancia_tecnologica=" . $currentVigilancia_tecnologica -> getIdVigilancia_tecnologica() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Vigilancia_tecnologica' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/vigilancia_tecnologica/selectAllVigilancia_tecnologica.php") . "&idVigilancia_tecnologica=" . $currentVigilancia_tecnologica -> getIdVigilancia_tecnologica() . "&action=delete' onclick='return confirm(\"Confirm to delete Vigilancia_tecnologica: " . $currentVigilancia_tecnologica -> getVariable() . " " . $currentVigilancia_tecnologica -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Vigilancia_tecnologica' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
