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
$idGrupo_de_investigacion = $_GET ['idGrupo_de_investigacion'];
$grupo_de_investigacion = new Grupo_de_investigacion($idGrupo_de_investigacion);
$grupo_de_investigacion -> select();
?>
<script charset="utf-8">
	$(function () { 
		$("[data-toggle='tooltip']").tooltip(); 
	}); 
</script>
<div class="modal-header">
	<h4 class="modal-title">Grupo_de_investigacion</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
	<table class="table table-striped table-hover">
		<tr>
			<th>Nombre</th>
			<td><?php echo $grupo_de_investigacion -> getNombre() ?></td>
		</tr>
		<tr>
			<th>Correo</th>
			<td><?php echo $grupo_de_investigacion -> getCorreo() ?></td>
		</tr>
		<tr>
			<th>Foto</th>
				<td><img class="rounded" src="<?php echo $grupo_de_investigacion -> getFoto() ?>" height="300px" /></td>
		</tr>
		<tr>
			<th>Clasificacion</th>
			<td><?php echo $grupo_de_investigacion -> getClasificacion() ?></td>
		</tr>
		<tr>
			<th>Lider</th>
			<td><?php echo $grupo_de_investigacion -> getLider() ?></td>
		</tr>
		<tr>
			<th>Area</th>
			<td><?php echo $grupo_de_investigacion -> getArea() ?></td>
		</tr>
		<tr>
			<th>Pagina_web</th>
			<?php if($grupo_de_investigacion -> getPagina_web() != ""){ ?>
				<td><a href="<?php echo $grupo_de_investigacion -> getPagina_web() ?>" target="_blank"><span class='fas fa-external-link-alt' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='<?php echo $grupo_de_investigacion -> getPagina_web() ?>' ></span></a></td>
			<?php }else{ ?>
				<td></td>
			<?php } ?>
		</tr>
		<tr>
			<th>State</th>
			<td><?php echo ($grupo_de_investigacion -> getState()==1?"Habilitado":"Deshabilitado") ?> </td>
		</tr>
	</table>
</div>
