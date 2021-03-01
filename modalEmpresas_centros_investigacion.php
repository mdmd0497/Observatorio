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
$idEmpresas_centros_investigacion = $_GET ['idEmpresas_centros_investigacion'];
$empresas_centros_investigacion = new Empresas_centros_investigacion($idEmpresas_centros_investigacion);
$empresas_centros_investigacion -> select();
?>
<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	}); 
</script>
<div class="modal-header">
	<h4 class="modal-title">Empresas_centros_investigacion</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
	<table class="table table-striped table-hover">
		<tr>
			<th>Variable</th>
			<td><?php echo $empresas_centros_investigacion -> getVariable() ?></td>
		</tr>
		<tr>
			<th>Calificacion</th>
			<td><?php echo $empresas_centros_investigacion -> getCalificacion() ?></td>
		</tr>
		<tr>
			<th>Grupo_de_investigacion</th>
			<td><?php echo $empresas_centros_investigacion -> getGrupo_de_investigacion() -> getNombre() . " " . $empresas_centros_investigacion -> getGrupo_de_investigacion() -> getApellido() . " " . $empresas_centros_investigacion -> getGrupo_de_investigacion() -> getClasificacion() . " " . $empresas_centros_investigacion -> getGrupo_de_investigacion() -> getLider() . " " . $empresas_centros_investigacion -> getGrupo_de_investigacion() -> getArea() . " " . $empresas_centros_investigacion -> getGrupo_de_investigacion() -> getPagina_web() ?></td>
		</tr>
	</table>
</div>
