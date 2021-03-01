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
$idVigilancia_tecnologica = $_GET ['idVigilancia_tecnologica'];
$vigilancia_tecnologica = new Vigilancia_tecnologica($idVigilancia_tecnologica);
$vigilancia_tecnologica -> select();
?>
<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	}); 
</script>
<div class="modal-header">
	<h4 class="modal-title">Vigilancia_tecnologica</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
	<table class="table table-striped table-hover">
		<tr>
			<th>Variable</th>
			<td><?php echo $vigilancia_tecnologica -> getVariable() ?></td>
		</tr>
		<tr>
			<th>Calificacion</th>
			<td><?php echo $vigilancia_tecnologica -> getCalificacion() ?></td>
		</tr>
		<tr>
			<th>Grupo_de_investigacion</th>
			<td><?php echo $vigilancia_tecnologica -> getGrupo_de_investigacion() -> getNombre() . " " . $vigilancia_tecnologica -> getGrupo_de_investigacion() -> getApellido() . " " . $vigilancia_tecnologica -> getGrupo_de_investigacion() -> getClasificacion() . " " . $vigilancia_tecnologica -> getGrupo_de_investigacion() -> getLider() . " " . $vigilancia_tecnologica -> getGrupo_de_investigacion() -> getArea() . " " . $vigilancia_tecnologica -> getGrupo_de_investigacion() -> getPagina_web() ?></td>
		</tr>
	</table>
</div>