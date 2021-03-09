<?php
require_once ("persistence/Grupo_de_investigacionDAO.php");
require_once ("persistence/Connection.php");

class Grupo_de_investigacion {
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
	private $grupo_de_investigacionDAO;
	private $connection;

	function getIdGrupo_de_investigacion() {
		return $this -> idGrupo_de_investigacion;
	}

	function setIdGrupo_de_investigacion($pIdGrupo_de_investigacion) {
		$this -> idGrupo_de_investigacion = $pIdGrupo_de_investigacion;
	}

	function getNombre() {
		return $this -> nombre;
	}

	function setNombre($pNombre) {
		$this -> nombre = $pNombre;
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

	function getClasificacion() {
		return $this -> Clasificacion;
	}

	function setClasificacion($pClasificacion) {
		$this -> Clasificacion = $pClasificacion;
	}

	function getLider() {
		return $this -> Lider;
	}

	function setLider($pLider) {
		$this -> Lider = $pLider;
	}

	function getArea() {
		return $this -> Area;
	}

	function setArea($pArea) {
		$this -> Area = $pArea;
	}

	function getPagina_web() {
		return $this -> Pagina_web;
	}

	function setPagina_web($pPagina_web) {
		$this -> Pagina_web = $pPagina_web;
	}

	function getState() {
		return $this -> state;
	}

	function setState($pState) {
		$this -> state = $pState;
	}

	function Grupo_de_investigacion($pIdGrupo_de_investigacion = "", $pNombre = "", $pCorreo = "", $pClave = "", $pFoto = "", $pClasificacion = "", $pLider = "", $pArea = "", $pPagina_web = "", $pState = ""){
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
		$this -> grupo_de_investigacionDAO = new Grupo_de_investigacionDAO($this -> idGrupo_de_investigacion, $this -> nombre, $this -> correo, $this -> clave, $this -> foto, $this -> Clasificacion, $this -> Lider, $this -> Area, $this -> Pagina_web, $this -> state);
		$this -> connection = new Connection();
	}

	function logIn($email, $password){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> logIn($email, $password));
		if($this -> connection -> numRows()==1){
			$result = $this -> connection -> fetchRow();
			$this -> idGrupo_de_investigacion = $result[0];
			$this -> nombre = $result[1];
			$this -> correo = $result[2];
			$this -> clave = $result[3];
			$this -> foto = $result[4];
			$this -> Clasificacion = $result[5];
			$this -> Lider = $result[6];
			$this -> Area = $result[7];
			$this -> Pagina_web = $result[8];
			$this -> state = $result[9];
			$this -> connection -> close();
			return true;
		}else{
			$this -> connection -> close();
			return false;
		}
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> update());
		$this -> connection -> close();
	}

	function updateClave($password){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> updateClave($password));
		$this -> connection -> close();
	}

	function existEmail($email){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> existEmail($email));
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
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> recoverPassword($email, $password));
		$this -> connection -> close();
	}

	function updateImage($attribute, $value){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> updateImage($attribute, $value));
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idGrupo_de_investigacion = $result[0];
		$this -> nombre = $result[1];
		$this -> correo = $result[2];
		$this -> clave = $result[3];
		$this -> foto = $result[4];
		$this -> Clasificacion = $result[5];
		$this -> Lider = $result[6];
		$this -> Area = $result[7];
		$this -> Pagina_web = $result[8];
		$this -> state = $result[9];
	}

	function selectG($id){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> selectG($id));
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idGrupo_de_investigacion = $result[0];
		$this -> nombre = $result[1];
		$this -> correo = $result[2];
		$this -> clave = $result[3];
		$this -> foto = $result[4];
		$this -> Clasificacion = $result[5];
		$this -> Lider = $result[6];
		$this -> Area = $result[7];
		$this -> Pagina_web = $result[8];
		$this -> state = $result[9];
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> selectAll());
		$grupo_de_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			array_push($grupo_de_investigacions, new Grupo_de_investigacion($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $result[8], $result[9]));
		}
		$this -> connection -> close();
		return $grupo_de_investigacions;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> selectAllOrder($order, $dir));
		$grupo_de_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			array_push($grupo_de_investigacions, new Grupo_de_investigacion($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $result[8], $result[9]));
		}
		$this -> connection -> close();
		return $grupo_de_investigacions;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> search($search));
		$grupo_de_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			array_push($grupo_de_investigacions, new Grupo_de_investigacion($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $result[8], $result[9]));
		}
		$this -> connection -> close();
		return $grupo_de_investigacions;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> grupo_de_investigacionDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
