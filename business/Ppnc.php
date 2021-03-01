<?php
require_once ("persistence/PpncDAO.php");
require_once ("persistence/Connection.php");

class Ppnc {
	private $idPpnc;
	private $subtipo_de_producto;
	private $abreviatura;
	private $valor_maximo;
	private $valor_indicador;
	private $grupo_de_investigacion;
	private $ppncDAO;
	private $connection;

	function getIdPpnc() {
		return $this -> idPpnc;
	}

	function setIdPpnc($pIdPpnc) {
		$this -> idPpnc = $pIdPpnc;
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

	function Ppnc($pIdPpnc = "", $pSubtipo_de_producto = "", $pAbreviatura = "", $pValor_maximo = "", $pValor_indicador = "", $pGrupo_de_investigacion = ""){
		$this -> idPpnc = $pIdPpnc;
		$this -> subtipo_de_producto = $pSubtipo_de_producto;
		$this -> abreviatura = $pAbreviatura;
		$this -> valor_maximo = $pValor_maximo;
		$this -> valor_indicador = $pValor_indicador;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> ppncDAO = new PpncDAO($this -> idPpnc, $this -> subtipo_de_producto, $this -> abreviatura, $this -> valor_maximo, $this -> valor_indicador, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idPpnc = $result[0];
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
		$this -> connection -> run($this -> ppncDAO -> selectAll());
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> selectAllByGrupo_de_investigacion());
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> selectAllOrder($order, $dir));
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> search($search));
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
