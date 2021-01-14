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
		$productos = new Productos();
		$productoss = $productos -> search($_GET['search']);
		$counter = 1;
		foreach ($productoss as $currentProductos) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentProductos -> getVariable()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentProductos -> getCalificacion()) . "</td>";
			echo "<td>" . $currentProductos -> getGrupo_de_investigacion() -> getNombre() . " " . $currentProductos -> getGrupo_de_investigacion() -> getApellido() . " " . $currentProductos -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentProductos -> getGrupo_de_investigacion() -> getLider() . " " . $currentProductos -> getGrupo_de_investigacion() -> getArea() . " " . $currentProductos -> getGrupo_de_investigacion() -> getPagina_web() . "</td>";
						echo "<td class='text-right' nowrap>";
						if($_GET['entity'] == 'Administrador' || $_GET['entity'] == 'Grupo_de_investigacion') {
							echo "<a href='index.php?pid=" . base64_encode("ui/productos/updateProductos.php") . "&idProductos=" . $currentProductos -> getIdProductos() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Productos' ></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/productos/selectAllProductos.php") . "&idProductos=" . $currentProductos -> getIdProductos() . "&action=delete' onclick='return confirm(\"Confirm to delete Productos: " . $currentProductos -> getVariable() . " " . $currentProductos -> getCalificacion() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Productos' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
