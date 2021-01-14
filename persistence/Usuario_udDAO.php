<?php
class Usuario_udDAO{
	private $idUsuario_ud;
	private $nombre;
	private $apellido;
	private $correo;
	private $clave;
	private $foto;
	private $state;

	function Usuario_udDAO($pIdUsuario_ud = "", $pNombre = "", $pApellido = "", $pCorreo = "", $pClave = "", $pFoto = "", $pState = ""){
		$this -> idUsuario_ud = $pIdUsuario_ud;
		$this -> nombre = $pNombre;
		$this -> apellido = $pApellido;
		$this -> correo = $pCorreo;
		$this -> clave = $pClave;
		$this -> foto = $pFoto;
		$this -> state = $pState;
	}

	function logIn($correo, $clave){
		return "select idUsuario_ud, nombre, apellido, correo, clave, foto, state
				from Usuario_ud
				where correo = '" . $correo . "' and clave = '" . md5($clave) . "'";
	}

	function insert(){
		return "insert into Usuario_ud(nombre, apellido, correo, clave, foto, state)
				values('" . $this -> nombre . "', '" . $this -> apellido . "', '" . $this -> correo . "', md5('" . $this -> clave . "'), '" . $this -> foto . "', '" . $this -> state . "')";
	}

	function update(){
		return "update Usuario_ud set 
				nombre = '" . $this -> nombre . "',
				apellido = '" . $this -> apellido . "',
				correo = '" . $this -> correo . "',
				state = '" . $this -> state . "'	
				where idUsuario_ud = '" . $this -> idUsuario_ud . "'";
	}

	function updateClave($password){
		return "update Usuario_ud set 
				clave = '" . md5($password) . "'
				where idUsuario_ud = '" . $this -> idUsuario_ud . "'";
	}

	function existEmail($email){
		return "select idUsuario_ud, nombre, apellido, correo, clave, foto, state
				from Usuario_ud
				where email = '" . $email . "'";
	}

	function recoverPassword($email, $password){
		return "update Usuario_ud set 
				clave = '" . md5($password) . "'
				where correo = '" . $email . "'";
	}

	function updateImage($attribute, $value){
		return "update Usuario_ud set "
				. $attribute . " = '" . $value . "'
				where idUsuario_ud = '" . $this -> idUsuario_ud . "'";
	}

	function select() {
		return "select idUsuario_ud, nombre, apellido, correo, clave, foto, state
				from Usuario_ud
				where idUsuario_ud = '" . $this -> idUsuario_ud . "'";
	}

	function selectAll() {
		return "select idUsuario_ud, nombre, apellido, correo, clave, foto, state
				from Usuario_ud";
	}

	function selectAllOrder($orden, $dir){
		return "select idUsuario_ud, nombre, apellido, correo, clave, foto, state
				from Usuario_ud
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idUsuario_ud, nombre, apellido, correo, clave, foto, state
				from Usuario_ud
				where nombre like '%" . $search . "%' or apellido like '%" . $search . "%' or correo like '%" . $search . "%' or state like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Usuario_ud
				where idUsuario_ud = '" . $this -> idUsuario_ud . "'";
	}
}
?>
