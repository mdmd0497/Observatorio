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
			<th nowrap>Correo</th>
			<th nowrap>Clasificacion</th>
			<th nowrap>Lider</th>
			<th nowrap>Area</th>
			<th>Pagina_web</th> 
			<th nowrap>State</th>
			<th nowrap></th>
		</tr>
	</thead>
	</tbody>
		<?php
		$grupo_de_investigacion = new Grupo_de_investigacion();
		$grupo_de_investigacions = $grupo_de_investigacion -> search($_GET['search']);
		$counter = 1;
		foreach ($grupo_de_investigacions as $currentGrupo_de_investigacion) {
			echo "<tr><td>" . $counter . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentGrupo_de_investigacion -> getNombre()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentGrupo_de_investigacion -> getCorreo()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentGrupo_de_investigacion -> getClasificacion()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentGrupo_de_investigacion -> getLider()) . "</td>";
			echo "<td>" . str_ireplace($_GET['search'], "<mark>" . $_GET['search'] . "</mark>", $currentGrupo_de_investigacion -> getArea()) . "</td>";
			if($currentGrupo_de_investigacion -> getPagina_web() != "") {
				echo "<td><a href='" . $currentGrupo_de_investigacion -> getPagina_web() . "' target='_blank'><span class='fas fa-external-link-alt' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='" . $currentGrupo_de_investigacion -> getPagina_web() . "' ></span></a></td>";
			} else {
				echo "<td></td>";
			}
						echo "<td>" . ($currentGrupo_de_investigacion -> getState()==1?"Habilitado":"Deshabilitado") . "</td>";
						echo "<td class='text-right' nowrap>";
						echo "<a href='modalGrupo_de_investigacion.php?idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'  data-toggle='modal' data-target='#modalGrupo_de_investigacion' ><span class='fas fa-eye' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Ver mas información' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/grupo_de_investigacion/updateGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Grupo_de_investigacion' ></span></a> ";
							echo "<a href='index.php?pid=" . base64_encode("ui/grupo_de_investigacion/updateFotoGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "&attribute=foto'><span class='fas fa-camera' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar foto'></span></a> ";
						}
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "&action=delete' onclick='return confirm(\"Confirm to delete Grupo_de_investigacion: " . $currentGrupo_de_investigacion -> getNombre() . " " . $currentGrupo_de_investigacion -> getClasificacion() . " " . $currentGrupo_de_investigacion -> getLider() . " " . $currentGrupo_de_investigacion -> getArea() . " " . $currentGrupo_de_investigacion -> getPagina_web() . "\")'><span class='fas fa-backspace' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Delete Grupo_de_investigacion' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/pc/selectAllPcByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar PERFIL DE COLABORACION' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/pc/insertPc.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Pc' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/ppnc/selectAllPpncByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Ppnc' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppnc/insertPpnc.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Ppnc' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/ppaidi/selectAllPpaidiByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Ppaidi' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppaidi/insertPpaidi.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Ppaidi' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/ppfr/selectAllPpfrByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Ppfr' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/ppfr/insertPpfr.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Ppfr' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/productos/selectAllProductosByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Productos' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/productos/insertProductos.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Productos' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/cultura_investigativa/selectAllCultura_investigativaByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Cultura_investigativa' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/cultura_investigativa/insertCultura_investigativa.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Cultura_investigativa' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/inversion/selectAllInversionByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Inversion' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/inversion/insertInversion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Inversion' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/empresas_centros_investigacion/selectAllEmpresas_centros_investigacionByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Empresas_centros_investigacion' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/empresas_centros_investigacion/insertEmpresas_centros_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Empresas_centros_investigacion' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/financiacion/selectAllFinanciacionByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Financiacion' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/financiacion/insertFinanciacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Financiacion' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ai/selectAllMonitoreo_aiByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Monitoreo_ai' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ai/insertMonitoreo_ai.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Monitoreo_ai' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ei/selectAllMonitoreo_eiByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Monitoreo_ei' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/monitoreo_ei/insertMonitoreo_ei.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Monitoreo_ei' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/gestion_del_conocimiento/selectAllGestion_del_conocimientoByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Gestion_del_conocimiento' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/gestion_del_conocimiento/insertGestion_del_conocimiento.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Gestion_del_conocimiento' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/vigilancia_tecnologica/selectAllVigilancia_tecnologicaByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Vigilancia_tecnologica' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/vigilancia_tecnologica/insertVigilancia_tecnologica.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Vigilancia_tecnologica' ></span></a> ";
						}
						echo "<a href='index.php?pid=" . base64_encode("ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologicaByGrupo_de_investigacion.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-search-plus' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Consultar Explotacion_base_tecnologica' ></span></a> ";
						if($_GET['entity'] == 'Administrador') {
							echo "<a href='index.php?pid=" . base64_encode("ui/explotacion_base_tecnologica/insertExplotacion_base_tecnologica.php") . "&idGrupo_de_investigacion=" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'><span class='fas fa-pen' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Crear Explotacion_base_tecnologica' ></span></a> ";
						}
						echo "</td>";
			echo "</tr>";
			$counter++;
		}
		?>
	</tbody>
</table>
</div>
<div class="modal fade" id="modalGrupo_de_investigacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
