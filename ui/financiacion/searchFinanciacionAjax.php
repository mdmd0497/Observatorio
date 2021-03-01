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
		$financiacion = new Financiacion();
		$financiacions = $financiacion -> search($_GET['search']);
		$counter = 1;
		foreach ($financiacions as $currentFinanciacion) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentFinanciacion -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentFinanciacion -> getCalificacion()) . "</td>";
			echo "<td>" . $currentFinanciacion -> getGrupo_de_investigacion() -> getNombre() . " " . $currentFinanciacion -> getGrupo_de_investigacion() -> getApellido() . " " . $currentFinanciacion -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentFinanciacion -> getGrupo_de_investigacion() -> getLider() . " " . $currentFinanciacion -> getGrupo_de_investigacion() -> getArea() . " " . $currentFinanciacion -> getGrupo_de_investigacion() -> getPagina_web() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/financiacion/updateFinanciacion.php") . "&idFinanciacion=" . $currentFinanciacion -> getIdFinanciacion() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Financiacion' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/financiacion/selectAllFinanciacion.php") . "&idFinanciacion=" . $currentFinanciacion -> getIdFinanciacion() . "&action=delete' onclick='return confirm(\"Confirm to delete Financiacion: " . $currentFinanciacion -> getVariable() . " " . $currentFinanciacion -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Financiacion' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>