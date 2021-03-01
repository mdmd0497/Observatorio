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
		$ppnc = new Ppnc();
		$ppncs = $ppnc -> search($_GET['search']);
		$counter = 1;
		foreach ($ppncs as $currentPpnc) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpnc -> getSubtipo_de_producto()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpnc -> getAbreviatura()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpnc -> getValor_maximo()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpnc -> getValor_indicador()) . "</td>";
			echo "<td>" . $currentPpnc -> getGrupo_de_investigacion() -> getNombre() . " " . $currentPpnc -> getGrupo_de_investigacion() -> getApellido() . " " . $currentPpnc -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentPpnc -> getGrupo_de_investigacion() -> getLider() . " " . $currentPpnc -> getGrupo_de_investigacion() -> getArea() . " " . $currentPpnc -> getGrupo_de_investigacion() -> getPagina_web() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppnc/updatePpnc.php") . "&idPpnc=" . $currentPpnc -> getIdPpnc() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Ppnc' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppnc/selectAllPpnc.php") . "&idPpnc=" . $currentPpnc -> getIdPpnc() . "&action=delete' onclick='return confirm(\"Confirm to delete Ppnc: " . $currentPpnc -> getSubtipo_de_producto() . " " . $currentPpnc -> getAbreviatura() . " " . $currentPpnc -> getValor_maximo() . " " . $currentPpnc -> getValor_indicador() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Ppnc' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
