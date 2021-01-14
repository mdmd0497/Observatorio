<?php
require_once ("persistence/LogGrupo_de_investigacionDAO.php");
require_once ("persistence/Connection.php");

class LogGrupo_de_investigacion {
	private $idLogGrupo_de_investigacion;
	private $accion;
	private $informacion;
	private $fecha;
	private $hora;
	private $ip;
	private $so;
	private $explorador;
	private $grupo_de_investigacion;
	private $logGrupo_de_investigacionDAO;
	private $connection;

	function getIdLogGrupo_de_investigacion() {
		return $this -> idLogGrupo_de_investigacion;
	}

	function setIdLogGrupo_de_investigacion($pIdLogGrupo_de_investigacion) {
		$this -> idLogGrupo_de_investigacion = $pIdLogGrupo_de_investigacion;
	}

	function getAccion() {
		return $this -> accion;
	}

	function setAccion($pAccion) {
		$this -> accion = $pAccion;
	}

	function getInformacion() {
		return $this -> informacion;
	}

	function setInformacion($pInformacion) {
		$this -> informacion = $pInformacion;
	}

	function getFecha() {
		return $this -> fecha;
	}

	function setFecha($pFecha) {
		$this -> fecha = $pFecha;
	}

	function getHora() {
		return $this -> hora;
	}

	function setHora($pHora) {
		$this -> hora = $pHora;
	}

	function getIp() {
		return $this -> ip;
	}

	function setIp($pIp) {
		$this -> ip = $pIp;
	}

	function getSo() {
		return $this -> so;
	}

	function setSo($pSo) {
		$this -> so = $pSo;
	}

	function getExplorador() {
		return $this -> explorador;
	}

	function setExplorador($pExplorador) {
		$this -> explorador = $pExplorador;
	}

	function getGrupo_de_investigacion() {
		return $this -> grupo_de_investigacion;
	}

	function setGrupo_de_investigacion($pGrupo_de_investigacion) {
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function LogGrupo_de_investigacion($pIdLogGrupo_de_investigacion = "", $pAccion = "", $pInformacion = "", $pFecha = "", $pHora = "", $pIp = "", $pSo = "", $pExplorador = "", $pGrupo_de_investigacion = ""){
		$this -> idLogGrupo_de_investigacion = $pIdLogGrupo_de_investigacion;
		$this -> accion = $pAccion;
		$this -> informacion = $pInformacion;
		$this -> fecha = $pFecha;
		$this -> hora = $pHora;
		$this -> ip = $pIp;
		$this -> so = $pSo;
		$this -> explorador = $pExplorador;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> logGrupo_de_investigacionDAO = new LogGrupo_de_investigacionDAO($this -> idLogGrupo_de_investigacion, $this -> accion, $this -> informacion, $this -> fecha, $this -> hora, $this -> ip, $this -> so, $this -> explorador, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logGrupo_de_investigacionDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logGrupo_de_investigacionDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logGrupo_de_investigacionDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idLogGrupo_de_investigacion = $result[0];
		$this -> accion = $result[1];
		$this -> informacion = $result[2];
		$this -> fecha = $result[3];
		$this -> hora = $result[4];
		$this -> ip = $result[5];
		$this -> so = $result[6];
		$this -> explorador = $result[7];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[8]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logGrupo_de_investigacionDAO -> selectAll());
		$logGrupo_de_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[8]);
			$grupo_de_investigacion -> select();
			array_push($logGrupo_de_investigacions, new LogGrupo_de_investigacion($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $logGrupo_de_investigacions;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logGrupo_de_investigacionDAO -> selectAllByGrupo_de_investigacion());
		$logGrupo_de_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[8]);
			$grupo_de_investigacion -> select();
			array_push($logGrupo_de_investigacions, new LogGrupo_de_investigacion($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $logGrupo_de_investigacions;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> logGrupo_de_investigacionDAO -> selectAllOrder($order, $dir));
		$logGrupo_de_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[8]);
			$grupo_de_investigacion -> select();
			array_push($logGrupo_de_investigacions, new LogGrupo_de_investigacion($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $logGrupo_de_investigacions;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> logGrupo_de_investigacionDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$logGrupo_de_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[8]);
			$grupo_de_investigacion -> select();
			array_push($logGrupo_de_investigacions, new LogGrupo_de_investigacion($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $logGrupo_de_investigacions;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> logGrupo_de_investigacionDAO -> search($search));
		$logGrupo_de_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[8]);
			$grupo_de_investigacion -> select();
			array_push($logGrupo_de_investigacions, new LogGrupo_de_investigacion($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $logGrupo_de_investigacions;
	}
}
?>
