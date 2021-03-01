<?php
$grupo_de_investigacion = new Grupo_de_investigacion($_SESSION['id']);
$grupo_de_investigacion -> select();
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" >
	<a class="navbar-brand" href="index.php?pid=<?php echo base64_encode("ui/sessionGrupo_de_investigacion.php") ?>"><span class="fas fa-home" aria-hidden="true"></span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"> <span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Consultar</a>
				<div class="dropdown-menu">
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
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">Grupo_de_investigacion: <?php echo $grupo_de_investigacion -> getNombre() . " " . $grupo_de_investigacion -> getApellido() . " " . $grupo_de_investigacion -> getClasificacion() . " " . $grupo_de_investigacion -> getLider() . " " . $grupo_de_investigacion -> getArea() . " " . $grupo_de_investigacion -> getPagina_web() ?><span class="caret"></span></a>
				<div class="dropdown-menu" >
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/updateProfileGrupo_de_investigacion.php") ?>">Editar Perfil</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/updatePasswordGrupo_de_investigacion.php") ?>">Editar Clave</a>
					<a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("ui/grupo_de_investigacion/updateProfilePictureGrupo_de_investigacion.php") ?>">Editar Foto</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?logOut=1">Salir</a>
			</li>
		</ul>
	</div>
</nav>
