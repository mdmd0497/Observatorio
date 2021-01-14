<?php
require_once ("persistence/PcDAO.php");
require_once ("persistence/Connection.php");

class Pc {
	private $idPc;
	private $indicador;
	private $abreviatura;
	private $valor_maximo;
	private $valor_indicador;
	private $grupo_de_investigacion;
	private $pcDAO;
	private $connection;

	function getIdPc() {
		return $this -> idPc;
	}

	function setIdPc($pIdPc) {
		$this -> idPc = $pIdPc;
	}

	function getIndicador() {
		return $this -> indicador;
	}

	function setIndicador($pIndicador) {
		$this -> indicador = $pIndicador;
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

	function Pc($pIdPc = "", $pIndicador = "", $pAbreviatura = "", $pValor_maximo = "", $pValor_indicador = "", $pGrupo_de_investigacion = ""){
		$this -> idPc = $pIdPc;
		$this -> indicador = $pIndicador;
		$this -> abreviatura = $pAbreviatura;
		$this -> valor_maximo = $pValor_maximo;
		$this -> valor_indicador = $pValor_indicador;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> pcDAO = new PcDAO($this -> idPc, $this -> indicador, $this -> abreviatura, $this -> valor_maximo, $this -> valor_indicador, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> pcDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> pcDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> pcDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idPc = $result[0];
		$this -> indicador = $result[1];
		$this -> abreviatura = $result[2];
		$this -> valor_maximo = $result[3];
		$this -> valor_indicador = $result[4];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> pcDAO -> selectAll());
		$pcs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($pcs, new Pc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $pcs;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> pcDAO -> selectAllByGrupo_de_investigacion());
		$pcs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($pcs, new Pc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $pcs;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> pcDAO -> selectAllOrder($order, $dir));
		$pcs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($pcs, new Pc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $pcs;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> pcDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$pcs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($pcs, new Pc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $pcs;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> pcDAO -> search($search));
		$pcs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($pcs, new Pc($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $pcs;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> pcDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
