<?php
$administrador = new Administrador($_SESSION['id']);
$administrador -> select();
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" >
	<a class="navbar-brand" href="index.php?pid=<?php echo base64_encode("ui/sessionAdministrador.php") ?>"><span class="fas fa-home" aria-hidden="true"></span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"> <span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Crear</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/administrador/insertAdministrador.php") ?>">Administrador</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/usuario_ud/insertUsuario_ud.php") ?>">Usuario_ud</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/insertGrupo_de_investigacion.php") ?>">Grupo_de_investigacion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/pc/insertPc.php") ?>">Pc</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/ppnc/insertPpnc.php") ?>">Ppnc</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/ppaidi/insertPpaidi.php") ?>">Ppaidi</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/ppfr/insertPpfr.php") ?>">Ppfr</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/productos/insertProductos.php") ?>">Productos</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/cultura_investigativa/insertCultura_investigativa.php") ?>">Cultura_investigativa</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/inversion/insertInversion.php") ?>">Inversion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/empresas_centros_investigacion/insertEmpresas_centros_investigacion.php") ?>">Empresas_centros_investigacion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/financiacion/insertFinanciacion.php") ?>">Financiacion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/monitoreo_ai/insertMonitoreo_ai.php") ?>">Monitoreo_ai</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/monitoreo_ei/insertMonitoreo_ei.php") ?>">Monitoreo_ei</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/gestion_del_conocimiento/insertGestion_del_conocimiento.php") ?>">Gestion_del_conocimiento</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/vigilancia_tecnologica/insertVigilancia_tecnologica.php") ?>">Vigilancia_tecnologica</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/explotacion_base_tecnologica/insertExplotacion_base_tecnologica.php") ?>">Explotacion_base_tecnologica</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Consultar</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/administrador/selectAllAdministrador.php") ?>">Administrador</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/usuario_ud/selectAllUsuario_ud.php") ?>">Usuario_ud</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/selectAllGrupo_de_investigacion.php") ?>">Grupo_de_investigacion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/pc/selectAllPc.php") ?>">Pc</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/ppnc/selectAllPpnc.php") ?>">Ppnc</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/ppaidi/selectAllPpaidi.php") ?>">Ppaidi</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/ppfr/selectAllPpfr.php") ?>">Ppfr</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/productos/selectAllProductos.php") ?>">Productos</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/cultura_investigativa/selectAllCultura_investigativa.php") ?>">Cultura_investigativa</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/inversion/selectAllInversion.php") ?>">Inversion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/empresas_centros_investigacion/selectAllEmpresas_centros_investigacion.php") ?>">Empresas_centros_investigacion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/financiacion/selectAllFinanciacion.php") ?>">Financiacion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/monitoreo_ai/selectAllMonitoreo_ai.php") ?>">Monitoreo_ai</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/monitoreo_ei/selectAllMonitoreo_ei.php") ?>">Monitoreo_ei</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/gestion_del_conocimiento/selectAllGestion_del_conocimiento.php") ?>">Gestion_del_conocimiento</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/vigilancia_tecnologica/selectAllVigilancia_tecnologica.php") ?>">Vigilancia_tecnologica</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/explotacion_base_tecnologica/selectAllExplotacion_base_tecnologica.php") ?>">Explotacion_base_tecnologica</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Buscar</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/administrador/searchAdministrador.php") ?>">Administrador</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/usuario_ud/searchUsuario_ud.php") ?>">Usuario_ud</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/searchGrupo_de_investigacion.php") ?>">Grupo_de_investigacion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/pc/searchPc.php") ?>">Pc</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/ppnc/searchPpnc.php") ?>">Ppnc</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/ppaidi/searchPpaidi.php") ?>">Ppaidi</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/ppfr/searchPpfr.php") ?>">Ppfr</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/productos/searchProductos.php") ?>">Productos</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/cultura_investigativa/searchCultura_investigativa.php") ?>">Cultura_investigativa</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/inversion/searchInversion.php") ?>">Inversion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/empresas_centros_investigacion/searchEmpresas_centros_investigacion.php") ?>">Empresas_centros_investigacion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/financiacion/searchFinanciacion.php") ?>">Financiacion</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/monitoreo_ai/searchMonitoreo_ai.php") ?>">Monitoreo_ai</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/monitoreo_ei/searchMonitoreo_ei.php") ?>">Monitoreo_ei</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/gestion_del_conocimiento/searchGestion_del_conocimiento.php") ?>">Gestion_del_conocimiento</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/vigilancia_tecnologica/searchVigilancia_tecnologica.php") ?>">Vigilancia_tecnologica</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/explotacion_base_tecnologica/searchExplotacion_base_tecnologica.php") ?>">Explotacion_base_tecnologica</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Log</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/logAdministrador/searchLogAdministrador.php") ?>">Log Administrador</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/logUsuario_ud/searchLogUsuario_ud.php") ?>">Log Usuario_ud</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/logGrupo_de_investigacion/searchLogGrupo_de_investigacion.php") ?>">Log Grupo_de_investigacion</a>
				</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">Administrador: <?php echo $administrador -> getNombre() . " " . $administrador -> getApellido() ?><span class="caret"></span></a>
				<div class="dropdown-menu" >
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/administrador/updateProfileAdministrador.php") ?>">Editar Perfil</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/administrador/updatePasswordAdministrador.php") ?>">Editar Clave</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/administrador/updateProfilePictureAdministrador.php") ?>">Editar Foto</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?logOut=1">Salir</a>
			</li>
		</ul>
	</div>
</nav>
