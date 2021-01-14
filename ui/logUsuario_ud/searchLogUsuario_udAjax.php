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
			<th>Usuario_ud</th>
			<th nowrap></th>
		</tr>
	</thead>
	</tbody>
		<?php
		$logUsuario_ud = new LogUsuario_ud();
		$logUsuario_uds = $logUsuario_ud -> search($_GET['search']);
		$counter = 1;
		foreach ($logUsuario_uds as $currentLogUsuario_ud) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogUsuario_ud -> getAccion()) . "</td>";
			echo "<td nowrap>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogUsuario_ud -> getFecha()) . "</td>";
			echo "<td nowrap>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogUsuario_ud -> getHora()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogUsuario_ud -> getIp()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogUsuario_ud -> getSo()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentLogUsuario_ud -> getExplorador()) . "</td>";
			echo "<td>" . $currentLogUsuario_ud -> getUsuario_ud() -> getNombre() . " " . $currentLogUsuario_ud -> getUsuario_ud() -> getApellido() . "</td>";
			echo "<td class='text-right' nowrap>
				<a href='modalLogUsuario_ud.php?idLogUsuario_ud=" . $currentLogUsuario_ud -> getIdLogUsuario_ud() . "'  data-toggle='modal' data-target='#modalLogUsuario_ud' >
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
<div class="modal fade" id="modalLogUsuario_ud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
