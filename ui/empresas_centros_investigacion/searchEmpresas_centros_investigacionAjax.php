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
		$empresas_centros_investigacion = new Empresas_centros_investigacion();
		$empresas_centros_investigacions = $empresas_centros_investigacion -> search($_GET['search']);
		$counter = 1;
		foreach ($empresas_centros_investigacions as $currentEmpresas_centros_investigacion) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentEmpresas_centros_investigacion -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentEmpresas_centros_investigacion -> getCalificacion()) . "</td>";
			echo "<td>" . $currentEmpresas_centros_investigacion -> getGrupo_de_investigacion() -> getNombre(). "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/empresas_centros_investigacion/updateEmpresas_centros_investigacion.php") . "&idEmpresas_centros_investigacion=" . $currentEmpresas_centros_investigacion -> getIdEmpresas_centros_investigacion() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Empresas_centros_investigacion' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/empresas_centros_investigacion/selectAllEmpresas_centros_investigacion.php") . "&idEmpresas_centros_investigacion=" . $currentEmpresas_centros_investigacion -> getIdEmpresas_centros_investigacion() . "&action=delete' onclick='return confirm(\"Confirm to delete Empresas_centros_investigacion: " . $currentEmpresas_centros_investigacion -> getVariable() . " " . $currentEmpresas_centros_investigacion -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Empresas_centros_investigacion' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
