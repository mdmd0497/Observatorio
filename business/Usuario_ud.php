<?php
require_once ("persistence/Usuario_udDAO.php");
require_once ("persistence/Connection.php");

class Usuario_ud {
	private $idUsuario_ud;
	private $nombre;
	private $apellido;
	private $correo;
	private $clave;
	private $foto;
	private $state;
	private $usuario_udDAO;
	private $connection;

	function getIdUsuario_ud() {
		return $this -> idUsuario_ud;
	}

	function setIdUsuario_ud($pIdUsuario_ud) {
		$this -> idUsuario_ud = $pIdUsuario_ud;
	}

	function getNombre() {
		return $this -> nombre;
	}

	function setNombre($pNombre) {
		$this -> nombre = $pNombre;
	}

	function getApellido() {
		return $this -> apellido;
	}

	function setApellido($pApellido) {
		$this -> apellido = $pApellido;
	}

	function getCorreo() {
		return $this -> correo;
	}

	function setCorreo($pCorreo) {
		$this -> correo = $pCorreo;
	}

	function getClave() {
		return $this -> clave;
	}

	function setClave($pClave) {
		$this -> clave = $pClave;
	}

	function getFoto() {
		return $this -> foto;
	}

	function setFoto($pFoto) {
		$this -> foto = $pFoto;
	}

	function getState() {
		return $this -> state;
	}

	function setState($pState) {
		$this -> state = $pState;
	}

	function Usuario_ud($pIdUsuario_ud = "", $pNombre = "", $pApellido = "", $pCorreo = "", $pClave = "", $pFoto = "", $pState = ""){
		$this -> idUsuario_ud = $pIdUsuario_ud;
		$this -> nombre = $pNombre;
		$this -> apellido = $pApellido;
		$this -> correo = $pCorreo;
		$this -> clave = $pClave;
		$this -> foto = $pFoto;
		$this -> state = $pState;
		$this -> usuario_udDAO = new Usuario_udDAO($this -> idUsuario_ud, $this -> nombre, $this -> apellido, $this -> correo, $this -> clave, $this -> foto, $this -> state);
		$this -> connection = new Connection();
	}

	function logIn($email, $password){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> logIn($email, $password));
		if($this -> connection -> numRows()==1){
			$result = $this -> connection -> fetchRow();
			$this -> idUsuario_ud = $result[0];
			$this -> nombre = $result[1];
			$this -> apellido = $result[2];
			$this -> correo = $result[3];
			$this -> clave = $result[4];
			$this -> foto = $result[5];
			$this -> state = $result[6];
			$this -> connection -> close();
			return true;
		}else{
			$this -> connection -> close();
			return false;
		}
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> update());
		$this -> connection -> close();
	}

	function updateClave($password){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> updateClave($password));
		$this -> connection -> close();
	}

	function existEmail($email){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> existEmail($email));
		if($this -> connection -> numRows()==1){
			$this -> connection -> close();
			return true;
		}else{
			$this -> connection -> close();
			return false;
		}
	}

	function recoverPassword($email, $password){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> recoverPassword($email, $password));
		$this -> connection -> close();
	}

	function updateImage($attribute, $value){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> updateImage($attribute, $value));
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idUsuario_ud = $result[0];
		$this -> nombre = $result[1];
		$this -> apellido = $result[2];
		$this -> correo = $result[3];
		$this -> clave = $result[4];
		$this -> foto = $result[5];
		$this -> state = $result[6];
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> selectAll());
		$usuario_uds = array();
		while ($result = $this -> connection -> fetchRow()){
			array_push($usuario_uds, new Usuario_ud($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6]));
		}
		$this -> connection -> close();
		return $usuario_uds;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> selectAllOrder($order, $dir));
		$usuario_uds = array();
		while ($result = $this -> connection -> fetchRow()){
			array_push($usuario_uds, new Usuario_ud($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6]));
		}
		$this -> connection -> close();
		return $usuario_uds;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> search($search));
		$usuario_uds = array();
		while ($result = $this -> connection -> fetchRow()){
			array_push($usuario_uds, new Usuario_ud($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6]));
		}
		$this -> connection -> close();
		return $usuario_uds;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> usuario_udDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
