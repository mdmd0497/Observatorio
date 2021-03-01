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
		$gestion_del_conocimiento = new Gestion_del_conocimiento();
		$gestion_del_conocimientos = $gestion_del_conocimiento -> search($_GET['search']);
		$counter = 1;
		foreach ($gestion_del_conocimientos as $currentGestion_del_conocimiento) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentGestion_del_conocimiento -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentGestion_del_conocimiento -> getCalificacion()) . "</td>";
			echo "<td>" . $currentGestion_del_conocimiento -> getGrupo_de_investigacion() -> getNombre() . " " . $currentGestion_del_conocimiento -> getGrupo_de_investigacion() -> getApellido() . " " . $currentGestion_del_conocimiento -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentGestion_del_conocimiento -> getGrupo_de_investigacion() -> getLider() . " " . $currentGestion_del_conocimiento -> getGrupo_de_investigacion() -> getArea() . " " . $currentGestion_del_conocimiento -> getGrupo_de_investigacion() -> getPagina_web() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/gestion_del_conocimiento/updateGestion_del_conocimiento.php") . "&idGestion_del_conocimiento=" . $currentGestion_del_conocimiento -> getIdGestion_del_conocimiento() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Gestion_del_conocimiento' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/gestion_del_conocimiento/selectAllGestion_del_conocimiento.php") . "&idGestion_del_conocimiento=" . $currentGestion_del_conocimiento -> getIdGestion_del_conocimiento() . "&action=delete' onclick='return confirm(\"Confirm to delete Gestion_del_conocimiento: " . $currentGestion_del_conocimiento -> getVariable() . " " . $currentGestion_del_conocimiento -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Gestion_del_conocimiento' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
