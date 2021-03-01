<?php 
session_start();
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
ini_set("display_errors","1");
date_default_timezone_set("America/Bogota");
$webPagesNoAuthentication = array(
	'ui/recoverPassword.php',
    'ui/usuario_ud/insertUsuario_ud.php',
);
$webPages = array(
	'ui/sessionAdministrador.php',
	'ui/administrador/insertAdministrador.php',
	'ui/administrador/updateAdministrador.php',
	'ui/administrador/selectAllAdministrador.php',
	'ui/administrador/searchAdministrador.php',
	'ui/administrador/updateProfileAdministrador.php',
	'ui/administrador/updatePasswordAdministrador.php',
	'ui/administrador/updateProfilePictureAdministrador.php',
	'ui/administrador/updateFotoAdministrador.php',
	'ui/logAdministrador/searchLogAdministrador.php',
	'ui/logUsuario_ud/searchLogUsuario_ud.php',
	'ui/sessionUsuario_ud.php',
	'ui/usuario_ud/insertUsuario_ud.php',
	'ui/usuario_ud/updateUsuario_ud.php',
	'ui/usuario_ud/selectAllUsuario_ud.php',
	'ui/usuario_ud/searchUsuario_ud.php',
	'ui/usuario_ud/updateProfileUsuario_ud.php',
	'ui/usuario_ud/updatePasswordUsuario_ud.php',
	'ui/usuario_ud/updateProfilePictureUsuario_ud.php',
	'ui/usuario_ud/updateFotoUsuario_ud.php',
	'ui/logGrupo_de_investigacion/searchLogGrupo_de_investigacion.php',
	'ui/sessionGrupo_de_investigacion.php',
	'ui/grupo_de_investigacion/insertGrupo_de_investigacion.php',
	'ui/grupo_de_investigacion/updateGrupo_de_investigacion.php',
	'ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php',
	'ui/grupo_de_investigacion/searchGrupo_de_investigacion.php',
	'ui/grupo_de_investigacion/updateProfileGrupo_de_investigacion.php',
	'ui/grupo_de_investigacion/updatePasswordGrupo_de_investigacion.php',
	'ui/grupo_de_investigacion/updateProfilePictureGrupo_de_investigacion.php',
	'ui/pc/selectAllPcByGrupo_de_investigacion.php',
	'ui/ppnc/selectAllPpncByGrupo_de_investigacion.php',
	'ui/ppaidi/selectAllPpaidiByGrupo_de_investigacion.php',
	'ui/ppfr/selectAllPpfrByGrupo_de_investigacion.php',
	'ui/productos/selectAllProductosByGrupo_de_investigacion.php',
	'ui/cultura_investigativa/selectAllCultura_investigativaByGrupo_de_investigacion.php',
	'ui/inversion/selectAllInversionByGrupo_de_investigacion.php',
	'ui/empresas_centros_investigacion/selectAllEmpresas_centros_investigacionByGrupo_de_investigacion.php',
	'ui/financiacion/selectAllFinanciacionByGrupo_de_investigacion.php',
	'ui/monitoreo_ai/selectAllMonitoreo_aiByGrupo_de_investigacion.php',
	'ui/monitoreo_ei/selectAllMonitoreo_eiByGrupo_de_investigacion.php',
	'ui/gestion_del_conocimiento/selectAllGestion_del_conocimientoByGrupo_de_investigacion.php',
	'ui/vigilancia_tecnologica/selectAllVigilancia_tecnologicaByGrupo_de_investigacion.php',
	'ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologicaByGrupo_de_investigacion.php',
	'ui/grupo_de_investigacion/updateFotoGrupo_de_investigacion.php',
	'ui/pc/insertPc.php',
	'ui/pc/updatePc.php',
	'ui/pc/selectAllPc.php',
	'ui/pc/searchPc.php',
	'ui/ppnc/insertPpnc.php',
	'ui/ppnc/updatePpnc.php',
	'ui/ppnc/selectAllPpnc.php',
	'ui/ppnc/searchPpnc.php',
	'ui/ppaidi/insertPpaidi.php',
	'ui/ppaidi/updatePpaidi.php',
	'ui/ppaidi/selectAllPpaidi.php',
	'ui/ppaidi/searchPpaidi.php',
	'ui/ppfr/insertPpfr.php',
	'ui/ppfr/updatePpfr.php',
	'ui/ppfr/selectAllPpfr.php',
	'ui/ppfr/searchPpfr.php',
	'ui/productos/insertProductos.php',
	'ui/productos/updateProductos.php',
	'ui/productos/selectAllProductos.php',
	'ui/productos/searchProductos.php',
	'ui/cultura_investigativa/insertCultura_investigativa.php',
	'ui/cultura_investigativa/updateCultura_investigativa.php',
	'ui/cultura_investigativa/selectAllCultura_investigativa.php',
	'ui/cultura_investigativa/searchCultura_investigativa.php',
	'ui/inversion/insertInversion.php',
	'ui/inversion/updateInversion.php',
	'ui/inversion/selectAllInversion.php',
	'ui/inversion/searchInversion.php',
	'ui/empresas_centros_investigacion/insertEmpresas_centros_investigacion.php',
	'ui/empresas_centros_investigacion/updateEmpresas_centros_investigacion.php',
	'ui/empresas_centros_investigacion/selectAllEmpresas_centros_investigacion.php',
	'ui/empresas_centros_investigacion/searchEmpresas_centros_investigacion.php',
	'ui/financiacion/insertFinanciacion.php',
	'ui/financiacion/updateFinanciacion.php',
	'ui/financiacion/selectAllFinanciacion.php',
	'ui/financiacion/searchFinanciacion.php',
	'ui/monitoreo_ai/insertMonitoreo_ai.php',
	'ui/monitoreo_ai/updateMonitoreo_ai.php',
	'ui/monitoreo_ai/selectAllMonitoreo_ai.php',
	'ui/monitoreo_ai/searchMonitoreo_ai.php',
	'ui/monitoreo_ei/insertMonitoreo_ei.php',
	'ui/monitoreo_ei/updateMonitoreo_ei.php',
	'ui/monitoreo_ei/selectAllMonitoreo_ei.php',
	'ui/monitoreo_ei/searchMonitoreo_ei.php',
	'ui/gestion_del_conocimiento/insertGestion_del_conocimiento.php',
	'ui/gestion_del_conocimiento/updateGestion_del_conocimiento.php',
	'ui/gestion_del_conocimiento/selectAllGestion_del_conocimiento.php',
	'ui/gestion_del_conocimiento/searchGestion_del_conocimiento.php',
	'ui/vigilancia_tecnologica/insertVigilancia_tecnologica.php',
	'ui/vigilancia_tecnologica/updateVigilancia_tecnologica.php',
	'ui/vigilancia_tecnologica/selectAllVigilancia_tecnologica.php',
	'ui/vigilancia_tecnologica/searchVigilancia_tecnologica.php',
	'ui/explotacion_base_tecnologica/insertExplotacion_base_tecnologica.php',
	'ui/explotacion_base_tecnologica/updateExplotacion_base_tecnologica.php',
	'ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologica.php',
	'ui/explotacion_base_tecnologica/searchExplotacion_base_tecnologica.php',
);
if(isset($_GET['logOut'])){
	$_SESSION['id']="";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>observatorio</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/png" href="img/logo.png" />
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
        <link rel="stylesheet" href="css/styles.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>

		<script charset="utf-8">
			$(function () { 
				$("[data-toggle='tooltip']").tooltip(); 
			});
		</script>
	</head>
	<body>
		<?php
		if(empty($_GET['pid'])){
			include('ui/home.php' );
		}else{
			$pid=base64_decode($_GET['pid']);
			if(in_array($pid, $webPagesNoAuthentication)){
				include($pid);
			}else{
				if($_SESSION['id']==""){
					header("Location: index.php");
					die();
				}
				if($_SESSION['entity']=="Administrador"){
					include('ui/menuAdministrador.php');
				}
				if($_SESSION['entity']=="Usuario_ud"){
					include('ui/menuUsuario_ud.php');
				}
				if($_SESSION['entity']=="Grupo_de_investigacion"){
					include('ui/menuGrupo_de_investigacion.php');
				}
				if (in_array($pid, $webPages)){
					include($pid);
				}else{
					include('ui/error.php');
				}
			}
		}
		?>
		<div class="text-center text-muted">METIS &copy; <?php echo date("Y")?></div>
	</body>
</html>
