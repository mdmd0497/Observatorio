<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	});
</script>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<thead>
		<tr><th></th>
			<th nowrap>Subtipo_de_producto</th>
			<th nowrap>Abreviatura</th>
			<th nowrap>Valor_maximo</th>
			<th nowrap>Valor_indicador</th>
			<th>Grupo_de_investigacion</th>
			<th nowrap></th>
		</tr>
	</thead>
	</tbody>
		<?php
		$ppfr = new Ppfr();
		$ppfrs = $ppfr -> search($_GET['search']);
		$counter = 1;
		foreach ($ppfrs as $currentPpfr) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpfr -> getSubtipo_de_producto()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpfr -> getAbreviatura()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpfr -> getValor_maximo()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpfr -> getValor_indicador()) . "</td>";
			echo "<td>" . $currentPpfr -> getGrupo_de_investigacion() -> getNombre() . " " . $currentPpfr -> getGrupo_de_investigacion() -> getApellido() . " " . $currentPpfr -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentPpfr -> getGrupo_de_investigacion() -> getLider() . " " . $currentPpfr -> getGrupo_de_investigacion() -> getArea() . " " . $currentPpfr -> getGrupo_de_investigacion() -> getPagina_web() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppfr/updatePpfr.php") . "&idPpfr=" . $currentPpfr -> getIdPpfr() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Ppfr' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppfr/selectAllPpfr.php") . "&idPpfr=" . $currentPpfr -> getIdPpfr() . "&action=delete' onclick='return confirm(\"Confirm to delete Ppfr: " . $currentPpfr -> getSubtipo_de_producto() . " " . $currentPpfr -> getAbreviatura() . " " . $currentPpfr -> getValor_maximo() . " " . $currentPpfr -> getValor_indicador() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Ppfr' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
