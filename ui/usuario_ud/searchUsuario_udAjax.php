<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	});
</script>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<thead>
		<tr><th></th>
			<th nowrap>Nombre</th>
			<th nowrap>Apellido</th>
			<th nowrap>Correo</th>
			<th nowrap>State</th>
			<th nowrap></th>
		</tr>
	</thead>
	</tbody>
		<?php
		$usuario_ud = new Usuario_ud();
		$usuario_uds = $usuario_ud -> search($_GET['search']);
		$counter = 1;
		foreach ($usuario_uds as $currentUsuario_ud) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentUsuario_ud -> getNombre()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentUsuario_ud -> getApellido()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentUsuario_ud -> getCorreo()) . "</td>";
						echo "<td>" . ($currentUsuario_ud -> getState()==1?"Habilitado":"Deshabilitado") . "</td>";
						echo "<td class='text-right' nowrap>";
						echo "<a href='modalUsuario_ud.php?idUsuario_ud=" . $currentUsuario_ud -> getIdUsuario_ud() . "'  data-toggle='modal' data-target='#modalUsuario_ud' ><span class='fas fa-eye' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Ver mas información' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/usuario_ud/updateUsuario_ud.php") . "&idUsuario_ud=" . $currentUsuario_ud -> getIdUsuario_ud() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Usuario_ud' ></span></a> ";
							echo "<a href='index.php?pid=" . base64_encode("ui/usuario_ud/updateFotoUsuario_ud.php") . "&idUsuario_ud=" . $currentUsuario_ud -> getIdUsuario_ud() . "&attribute=foto'><span class='fas fa-camera' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar foto'></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/usuario_ud/selectAllUsuario_ud.php") . "&idUsuario_ud=" . $currentUsuario_ud -> getIdUsuario_ud() . "&action=delete' onclick='return confirm(\"Confirm to delete Usuario_ud: " . $currentUsuario_ud -> getNombre() . " " . $currentUsuario_ud -> getApellido() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Usuario_ud' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
<div class="modal fade" id="modalUsuario_ud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
