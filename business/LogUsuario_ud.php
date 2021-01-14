<?php
require_once ("persistence/LogUsuario_udDAO.php");
require_once ("persistence/Connection.php");

class LogUsuario_ud {
	private $idLogUsuario_ud;
	private $accion;
	private $informacion;
	private $fecha;
	private $hora;
	private $ip;
	private $so;
	private $explorador;
	private $usuario_ud;
	private $logUsuario_udDAO;
	private $connection;

	function getIdLogUsuario_ud() {
		return $this -> idLogUsuario_ud;
	}

	function setIdLogUsuario_ud($pIdLogUsuario_ud) {
		$this -> idLogUsuario_ud = $pIdLogUsuario_ud;
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

	function getUsuario_ud() {
		return $this -> usuario_ud;
	}

	function setUsuario_ud($pUsuario_ud) {
		$this -> usuario_ud = $pUsuario_ud;
	}

	function LogUsuario_ud($pIdLogUsuario_ud = "", $pAccion = "", $pInformacion = "", $pFecha = "", $pHora = "", $pIp = "", $pSo = "", $pExplorador = "", $pUsuario_ud = ""){
		$this -> idLogUsuario_ud = $pIdLogUsuario_ud;
		$this -> accion = $pAccion;
		$this -> informacion = $pInformacion;
		$this -> fecha = $pFecha;
		$this -> hora = $pHora;
		$this -> ip = $pIp;
		$this -> so = $pSo;
		$this -> explorador = $pExplorador;
		$this -> usuario_ud = $pUsuario_ud;
		$this -> logUsuario_udDAO = new LogUsuario_udDAO($this -> idLogUsuario_ud, $this -> accion, $this -> informacion, $this -> fecha, $this -> hora, $this -> ip, $this -> so, $this -> explorador, $this -> usuario_ud);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logUsuario_udDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logUsuario_udDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logUsuario_udDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idLogUsuario_ud = $result[0];
		$this -> accion = $result[1];
		$this -> informacion = $result[2];
		$this -> fecha = $result[3];
		$this -> hora = $result[4];
		$this -> ip = $result[5];
		$this -> so = $result[6];
		$this -> explorador = $result[7];
		$usuario_ud = new Usuario_ud($result[8]);
		$usuario_ud -> select();
		$this -> usuario_ud = $usuario_ud;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logUsuario_udDAO -> selectAll());
		$logUsuario_uds = array();
		while ($result = $this -> connection -> fetchRow()){
			$usuario_ud = new Usuario_ud($result[8]);
			$usuario_ud -> select();
			array_push($logUsuario_uds, new LogUsuario_ud($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $usuario_ud));
		}
		$this -> connection -> close();
		return $logUsuario_uds;
	}

	function selectAllByUsuario_ud(){
		$this -> connection -> open();
		$this -> connection -> run($this -> logUsuario_udDAO -> selectAllByUsuario_ud());
		$logUsuario_uds = array();
		while ($result = $this -> connection -> fetchRow()){
			$usuario_ud = new Usuario_ud($result[8]);
			$usuario_ud -> select();
			array_push($logUsuario_uds, new LogUsuario_ud($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $usuario_ud));
		}
		$this -> connection -> close();
		return $logUsuario_uds;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> logUsuario_udDAO -> selectAllOrder($order, $dir));
		$logUsuario_uds = array();
		while ($result = $this -> connection -> fetchRow()){
			$usuario_ud = new Usuario_ud($result[8]);
			$usuario_ud -> select();
			array_push($logUsuario_uds, new LogUsuario_ud($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $usuario_ud));
		}
		$this -> connection -> close();
		return $logUsuario_uds;
	}

	function selectAllByUsuario_udOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> logUsuario_udDAO -> selectAllByUsuario_udOrder($order, $dir));
		$logUsuario_uds = array();
		while ($result = $this -> connection -> fetchRow()){
			$usuario_ud = new Usuario_ud($result[8]);
			$usuario_ud -> select();
			array_push($logUsuario_uds, new LogUsuario_ud($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $usuario_ud));
		}
		$this -> connection -> close();
		return $logUsuario_uds;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> logUsuario_udDAO -> search($search));
		$logUsuario_uds = array();
		while ($result = $this -> connection -> fetchRow()){
			$usuario_ud = new Usuario_ud($result[8]);
			$usuario_ud -> select();
			array_push($logUsuario_uds, new LogUsuario_ud($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6], $result[7], $usuario_ud));
		}
		$this -> connection -> close();
		return $logUsuario_uds;
	}
}
?>
