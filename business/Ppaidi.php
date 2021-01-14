<?php
require_once ("persistence/PpaidiDAO.php");
require_once ("persistence/Connection.php");

class Ppaidi {
	private $idPpaidi;
	private $subtipo_de_producto;
	private $abreviatura;
	private $valor_maximo;
	private $valor_indicador;
	private $grupo_de_investigacion;
	private $ppaidiDAO;
	private $connection;

	function getIdPpaidi() {
		return $this -> idPpaidi;
	}

	function setIdPpaidi($pIdPpaidi) {
		$this -> idPpaidi = $pIdPpaidi;
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

	function Ppaidi($pIdPpaidi = "", $pSubtipo_de_producto = "", $pAbreviatura = "", $pValor_maximo = "", $pValor_indicador = "", $pGrupo_de_investigacion = ""){
		$this -> idPpaidi = $pIdPpaidi;
		$this -> subtipo_de_producto = $pSubtipo_de_producto;
		$this -> abreviatura = $pAbreviatura;
		$this -> valor_maximo = $pValor_maximo;
		$this -> valor_indicador = $pValor_indicador;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> ppaidiDAO = new PpaidiDAO($this -> idPpaidi, $this -> subtipo_de_producto, $this -> abreviatura, $this -> valor_maximo, $this -> valor_indicador, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idPpaidi = $result[0];
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
		$this -> connection -> run($this -> ppaidiDAO -> selectAll());
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> selectAllByGrupo_de_investigacion());
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> selectAllOrder($order, $dir));
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> search($search));
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2], $result[3], $result[4], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
