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
		$ppaidi = new Ppaidi();
		$ppaidis = $ppaidi -> search($_GET['search']);
		$counter = 1;
		foreach ($ppaidis as $currentPpaidi) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpaidi -> getSubtipo_de_producto()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpaidi -> getAbreviatura()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpaidi -> getValor_maximo()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentPpaidi -> getValor_indicador()) . "</td>";
			echo "<td>" . $currentPpaidi -> getGrupo_de_investigacion() -> getNombre() . " " . $currentPpaidi -> getGrupo_de_investigacion() -> getApellido() . " " . $currentPpaidi -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentPpaidi -> getGrupo_de_investigacion() -> getLider() . " " . $currentPpaidi -> getGrupo_de_investigacion() -> getArea() . " " . $currentPpaidi -> getGrupo_de_investigacion() -> getPagina_web() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppaidi/updatePpaidi.php") . "&idPpaidi=" . $currentPpaidi -> getIdPpaidi() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Ppaidi' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppaidi/selectAllPpaidi.php") . "&idPpaidi=" . $currentPpaidi -> getIdPpaidi() . "&action=delete' onclick='return confirm(\"Confirm to delete Ppaidi: " . $currentPpaidi -> getSubtipo_de_producto() . " " . $currentPpaidi -> getAbreviatura() . " " . $currentPpaidi -> getValor_maximo() . " " . $currentPpaidi -> getValor_indicador() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Ppaidi' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
