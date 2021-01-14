<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	});
</script>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<thead>
		<tr><th></th>
			<th nowrap>Accion</th>
			<th nowrap>Fecha</th>
			<th nowrap>Hora</th>
			<th nowrap>Ip</th>
			<th nowrap>So</th>
			<th nowrap>Explorador</th>
			<th>Grupo_de_investigacion</th>
			<th nowrap></th>
		</tr>
	</thead>
	</tbody>
		<?php
		$logGrupo_de_investigacion = new LogGrupo_de_investigacion();
		$logGrupo_de_investigacions = $logGrupo_de_investigacion -> search($_GET['search']);
		$counter = 1;
		foreach ($logGrupo_de_investigacions as $currentLogGrupo_de_investigacion) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogGrupo_de_investigacion -> getAccion()) . "</td>";
			echo "<td nowrap>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogGrupo_de_investigacion -> getFecha()) . "</td>";
			echo "<td nowrap>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogGrupo_de_investigacion -> getHora()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogGrupo_de_investigacion -> getIp()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogGrupo_de_investigacion -> getSo()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogGrupo_de_investigacion -> getExplorador()) . "</td>";
			echo "<td>" . $currentLogGrupo_de_investigacion -> getGrupo_de_investigacion() -> getNombre() . " " . $currentLogGrupo_de_investigacion -> getGrupo_de_investigacion() -> getApellido() . " " . $currentLogGrupo_de_investigacion -> getGrupo_de_investigacion() -> getClasificacion() . " " . $currentLogGrupo_de_investigacion -> getGrupo_de_investigacion() -> getLider() . " " . $currentLogGrupo_de_investigacion -> getGrupo_de_investigacion() -> getArea() . " " . $currentLogGrupo_de_investigacion -> getGrupo_de_investigacion() -> getPagina_web() . "</td>";
			echo "<td class='text-right' nowrap>
				<a href='modalLogGrupo_de_investigacion.php?idLogGrupo_de_investigacion=" . $currentLogGrupo_de_investigacion -> getIdLogGrupo_de_investigacion() . "'  data-toggle='modal' data-target='#modalLogGrupo_de_investigacion' >
					<span class='fas fa-eye' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Ver mas información' ></span>
				</a>
				</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
<div class="modal fade" id="modalLogGrupo_de_investigacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" >
		<div class="modal-content" id="modalContent">
		</div>
	</div>
</div>
<script>
	$('body').on('show.bs.modal', '.modal', function (e) {
		var link = $(e.relatedTarget);
		$(this).find(".modal-content").load(link.attr("href"));
	});
</script>
