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
$idLogUsuario_ud = $_GET ['idLogUsuario_ud'];
$logUsuario_ud = new LogUsuario_ud($idLogUsuario_ud);
$logUsuario_ud -> select();
?>
<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	}); 
</script>
<div class="modal-header">
	<h4 class="modal-title">Log Usuario_ud</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
	<table class="table table-striped table-hover">
		<tr>
			<th>Accion</th>
			<td><?php echo str_replace(";; ", "<br>", $logUsuario_ud -> getAccion()) ?></td>
		</tr>
		<tr>
			<th>Informacion</th>
			<td><?php echo str_replace(";; ", "<br>", $logUsuario_ud -> getInformacion()) ?></td>
		</tr>
		<tr>
			<th>Fecha</th>
			<td><?php echo str_replace(";; ", "<br>", $logUsuario_ud -> getFecha()) ?></td>
		</tr>
		<tr>
			<th>Hora</th>
			<td><?php echo str_replace(";; ", "<br>", $logUsuario_ud -> getHora()) ?></td>
		</tr>
		<tr>
			<th>Ip</th>
			<td><?php echo str_replace(";; ", "<br>", $logUsuario_ud -> getIp()) ?></td>
		</tr>
		<tr>
			<th>So</th>
			<td><?php echo str_replace(";; ", "<br>", $logUsuario_ud -> getSo()) ?></td>
		</tr>
		<tr>
			<th>Explorador</th>
			<td><?php echo str_replace(";; ", "<br>", $logUsuario_ud -> getExplorador()) ?></td>
		</tr>
	</table>
</div>
