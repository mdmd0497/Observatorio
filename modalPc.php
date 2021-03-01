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
$idPc = $_GET ['idPc'];
$pc = new Pc($idPc);
$pc -> select();
?>
<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	}); 
</script>
<div class="modal-header">
	<h4 class="modal-title">Pc</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
	<table class="table table-striped table-hover">
		<tr>
			<th>Indicador</th>
			<td><?php echo $pc -> getIndicador() ?></td>
		</tr>
		<tr>
			<th>Abreviatura</th>
			<td><?php echo $pc -> getAbreviatura() ?></td>
		</tr>
		<tr>
			<th>Valor_maximo</th>
			<td><?php echo $pc -> getValor_maximo() ?></td>
		</tr>
		<tr>
			<th>Valor_indicador</th>
			<td><?php echo $pc -> getValor_indicador() ?></td>
		</tr>
		<tr>
			<th>Grupo_de_investigacion</th>
			<td><?php echo $pc -> getGrupo_de_investigacion() -> getNombre() . " " . $pc -> getGrupo_de_investigacion() -> getApellido() . " " . $pc -> getGrupo_de_investigacion() -> getClasificacion() . " " . $pc -> getGrupo_de_investigacion() -> getLider() . " " . $pc -> getGrupo_de_investigacion() -> getArea() . " " . $pc -> getGrupo_de_investigacion() -> getPagina_web() ?></td>
		</tr>
	</table>
</div>
