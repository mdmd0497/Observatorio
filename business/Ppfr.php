<?php
require_once ("persistence/PpfrDAO.php");
require_once ("persistence/Connection.php");

class Ppfr {
	private $idPpfr;
	private $subtipo_de_producto;
	private $abreviatura;
	private $valor_maximo;
	private $valor_indicador;
	private $grupo_de_investigacion;
	private $ppfrDAO;
	private $connection;

	function getIdPpfr() {
		return $this -> idPpfr;
	}

	function setIdPpfr($pIdPpfr) {
		$this -> idPpfr = $pIdPpfr;
	}

	function getSubtipo_de_producto() {
		return $this -> subtipo_de_producto;
	}

	function setSubtipo_de_producto($pSubtipo_de_producto) {
		$this -> subtipo_de_producto = $pSubtipo_de_producto;
	}

	function getAbreviatura() {
		return $this -> abreviatura;
	}

	function setAbreviatura($pAbreviatura) {
		$this -> abreviatura = $pAbreviatura;
	}

	function getValor_maximo() {
		return $this -> valor_maximo;
	}

	function setValor_maximo($pValor_maximo) {
		$this -> valor_maximo = $pValor_maximo;
	}

	function getValor_indicador() {
		return $this -> valor_indicador;
	}

	function setValor_indicador($pValor_indicador) {
		$this -> valor_indicador = $pValor_indicador;
	}

	function getGrupo_de_investigacion() {
		return $this -> grupo_de_investigacion;
	}

	function setGrupo_de_investigacion($pGrupo_de_investigacion) {
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function Ppfr($pIdPpfr = "", $pSubtipo_de_producto = "", $pAbreviatura = "", $pValor_maximo = "", $pValor_indicador = "", $pGrupo_de_investigacion = ""){
		$this -> idPpfr = $pIdPpfr;
		$this -> subtipo_de_producto = $pSubtipo_de_producto;
		$this -> abreviatura = $pAbreviatura;
		$this -> valor_maximo = $pValor_maximo;
		$this -> valor_indicador = $pValor_indicador;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> ppfrDAO = new PpfrDAO($this -> idPpfr, $this -> subtipo_de_producto, $this -> abreviatura, $this -> valor_maximo, $this -> valor_indicador, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppfrDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppfrDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppfrDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idPpfr = $result[0];
		$this -> subtipo_de_producto = $result[1];
		$this -> abreviatura = $result[2];
		$this -> valor_maximo = $result[3];
		$this -> valor_indicador = $result[4];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppfrDAO -> selectAll());
		$ppfrs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppfrs, new Ppfr($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppfrs;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppfrDAO -> selectAllByGrupo_de_investigacion());
		$ppfrs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppfrs, new Ppfr($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppfrs;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppfrDAO -> selectAllOrder($order, $dir));
		$ppfrs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppfrs, new Ppfr($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppfrs;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppfrDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$ppfrs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppfrs, new Ppfr($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppfrs;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppfrDAO -> search($search));
		$ppfrs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppfrs, new Ppfr($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppfrs;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppfrDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
