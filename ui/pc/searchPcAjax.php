<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	});
</script>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<thead>
		<tr><th></th>
			<th nowrap>Indicador</th>
			<th nowrap>Abreviatura</th>
			<th nowrap>Valor_maximo</th>
			<th nowrap>Valor_indicador</th>
			<th>Grupo_de_investigacion</th>
			<th nowrap></th>
		</tr>
	</thead>
	</tbody>
		<?php
		$pc = new Pc();
		$pcs = $pc -> search($_GET['search']);
		$counter = 1;
		foreach ($pcs as $currentPc) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPc -> getIndicador()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPc -> getAbreviatura()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPc -> getValor_maximo()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPc -> getValor_indicador()) . "</td>";
			echo "<td>" . $currentPc -> getGrupo_de_investigacion() -> getNombre() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/pc/updatePc.php") . "&idPc=" . $currentPc -> getIdPc() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Pc' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/pc/selectAllPc.php") . "&idPc=" . $currentPc -> getIdPc() . "&action=delete' onclick='return confirm(\"Confirm to delete Pc: " . $currentPc -> getIndicador() . " " . $currentPc -> getAbreviatura() . " " . $currentPc -> getValor_maximo() . " " . $currentPc -> getValor_indicador() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Pc' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
