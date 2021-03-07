<?php
class Grupo_de_investigacionDAO{
	private $idGrupo_de_investigacion;
	private $nombre;
	private $correo;
	private $clave;
	private $foto;
	private $Clasificacion;
	private $Lider;
	private $Area;
	private $Pagina_web;
	private $state;

	function Grupo_de_investigacionDAO($pIdGrupo_de_investigacion = "", $pNombre = "",  $pCorreo = "", $pClave = "", $pFoto = "", $pClasificacion = "", $pLider = "", $pArea = "", $pPagina_web = "", $pState = ""){
		$this -> idGrupo_de_investigacion = $pIdGrupo_de_investigacion;
		$this -> nombre = $pNombre;
		$this -> correo = $pCorreo;
		$this -> clave = $pClave;
		$this -> foto = $pFoto;
		$this -> Clasificacion = $pClasificacion;
		$this -> Lider = $pLider;
		$this -> Area = $pArea;
		$this -> Pagina_web = $pPagina_web;
		$this -> state = $pState;
	}

	function logIn($correo, $clave){
		return "select idGrupo_de_investigacion, nombre, correo, clave, foto, Clasificacion, Lider, Area, Pagina_web, state
				from Grupo_de_investigacion
				where correo = '" . $correo . "' and clave = '" . md5($clave) . "'";
	}

	function insert(){
		return "insert into Grupo_de_investigacion(nombre, correo, clave, foto, Clasificacion, Lider, Area, Pagina_web, state)
				values('" . $this -> nombre . "', '" . $this -> correo . "', md5('" . $this -> clave . "'), '" . $this -> foto . "', '" . $this -> Clasificacion . "', '" . $this -> Lider . "', '" . $this -> Area . "', '" . $this -> Pagina_web . "', '" . $this -> state . "')";
	}

	function update(){
		return "update Grupo_de_investigacion set 
				nombre = '" . $this -> nombre . "',
				correo = '" . $this -> correo . "',
				Clasificacion = '" . $this -> Clasificacion . "',
				Lider = '" . $this -> Lider . "',
				Area = '" . $this -> Area . "',
				Pagina_web = '" . $this -> Pagina_web . "',
				state = '" . $this -> state . "'	
				where idGrupo_de_investigacion = '" . $this -> idGrupo_de_investigacion . "'";
	}

	function updateClave($password){
		return "update Grupo_de_investigacion set 
				clave = '" . md5($password) . "'
				where idGrupo_de_investigacion = '" . $this -> idGrupo_de_investigacion . "'";
	}

	function existEmail($email){
		return "select idGrupo_de_investigacion, nombre, correo, clave, foto, Clasificacion, Lider, Area, Pagina_web, state
				from Grupo_de_investigacion
				where email = '" . $email . "'";
	}

	function recoverPassword($email, $password){
		return "update Grupo_de_investigacion set 
				clave = '" . md5($password) . "'
				where correo = '" . $email . "'";
	}

	function updateImage($attribute, $value){
		return "update Grupo_de_investigacion set "
				. $attribute . " = '" . $value . "'
				where idGrupo_de_investigacion = '" . $this -> idGrupo_de_investigacion . "'";
	}

	function select() {
		return "select idGrupo_de_investigacion, nombre, correo, clave, foto, Clasificacion, Lider, Area, Pagina_web, state
				from Grupo_de_investigacion
				where idGrupo_de_investigacion = '" . $this -> idGrupo_de_investigacion . "'";
	}

	function selectAll() {
		return "select idGrupo_de_investigacion, nombre, correo, clave, foto, Clasificacion, Lider, Area, Pagina_web, state
				from Grupo_de_investigacion";
	}

	function selectAllOrder($orden, $dir){
		return "select idGrupo_de_investigacion, nombre, correo, clave, foto, Clasificacion, Lider, Area, Pagina_web, state
				from Grupo_de_investigacion
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idGrupo_de_investigacion, nombre, correo, clave, foto, Clasificacion, Lider, Area, Pagina_web, state
				from Grupo_de_investigacion
				where nombre like '%" . $search . "%' or correo like '%" . $search . "%' or Clasificacion like '%" . $search . "%' or Lider like '%" . $search . "%' or Area like '%" . $search . "%' or state like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Grupo_de_investigacion
				where idGrupo_de_investigacion = '" . $this -> idGrupo_de_investigacion . "'";
	}
}
?>
