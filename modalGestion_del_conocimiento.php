<?php
require("business/Administrador.php");
require("business/LogAdministrador.php");
require("business/LogUsuario_ud.php");
require("business/Usuario_ud.php");
require("business/LogGrupo_de_investigacion.php");
require("business/Grupo_de_investigacion.php");
require("business/Pc.php");
require("business/Ppnc.php");
require("business/Ppaidi.php");
require("business/Ppfr.php");
require("business/Productos.php");
require("business/Cultura_investigativa.php");
require("business/Inversion.php");
require("business/Empresas_centros_investigacion.php");
require("business/Financiacion.php");
require("business/Monitoreo_ai.php");
require("business/Monitoreo_ei.php");
require("business/Gestion_del_conocimiento.php");
require("business/Vigilancia_tecnologica.php");
require("business/Explotacion_base_tecnologica.php");
require_once("persistence/Connection.php");
$idGestion_del_conocimiento = $_GET ['idGestion_del_conocimiento'];
$gestion_del_conocimiento = new Gestion_del_conocimiento($idGestion_del_conocimiento);
$gestion_del_conocimiento -> select();
?>
<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	}); 
</script>
<div class="modal-header">
	<h4 class="modal-title">Gestion_del_conocimiento</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
	<table class="table table-striped table-hover">
		<tr>
			<th>Variable</th>
			<td><?php echo $gestion_del_conocimiento -> getVariable() ?></td>
		</tr>
		<tr>
			<th>Calificacion</th>
			<td><?php echo $gestion_del_conocimiento -> getCalificacion() ?></td>
		</tr>
		<tr>
			<th>Grupo_de_investigacion</th>
			<td><?php echo $gestion_del_conocimiento -> getGrupo_de_investigacion() -> getNombre() . " " . $gestion_del_conocimiento -> getGrupo_de_investigacion() -> getApellido() . " " . $gestion_del_conocimiento -> getGrupo_de_investigacion() -> getClasificacion() . " " . $gestion_del_conocimiento -> getGrupo_de_investigacion() -> getLider() . " " . $gestion_del_conocimiento -> getGrupo_de_investigacion() -> getArea() . " " . $gestion_del_conocimiento -> getGrupo_de_investigacion() -> getPagina_web() ?></td>
		</tr>
	</table>
</div>
