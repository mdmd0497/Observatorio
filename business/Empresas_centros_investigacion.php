<?php
require_once ("persistence/Empresas_centros_investigacionDAO.php");
require_once ("persistence/Connection.php");

class Empresas_centros_investigacion {
	private $idEmpresas_centros_investigacion;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;
	private $empresas_centros_investigacionDAO;
	private $connection;

	function getIdEmpresas_centros_investigacion() {
		return $this -> idEmpresas_centros_investigacion;
	}

	function setIdEmpresas_centros_investigacion($pIdEmpresas_centros_investigacion) {
		$this -> idEmpresas_centros_investigacion = $pIdEmpresas_centros_investigacion;
	}

	function getVariable() {
		return $this -> variable;
	}

	function setVariable($pVariable) {
		$this -> variable = $pVariable;
	}

	function getCalificacion() {
		return $this -> calificacion;
	}

	function setCalificacion($pCalificacion) {
		$this -> calificacion = $pCalificacion;
	}

	function getGrupo_de_investigacion() {
		return $this -> grupo_de_investigacion;
	}

	function setGrupo_de_investigacion($pGrupo_de_investigacion) {
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function Empresas_centros_investigacion($pIdEmpresas_centros_investigacion = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idEmpresas_centros_investigacion = $pIdEmpresas_centros_investigacion;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> empresas_centros_investigacionDAO = new Empresas_centros_investigacionDAO($this -> idEmpresas_centros_investigacion, $this -> variable, $this -> calificacion, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> empresas_centros_investigacionDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> empresas_centros_investigacionDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> empresas_centros_investigacionDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idEmpresas_centros_investigacion = $result[0];
		$this -> variable = $result[1];
		$this -> calificacion = $result[2];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> empresas_centros_investigacionDAO -> selectAll());
		$empresas_centros_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($empresas_centros_investigacions, new Empresas_centros_investigacion($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $empresas_centros_investigacions;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> empresas_centros_investigacionDAO -> selectAllByGrupo_de_investigacion());
		$empresas_centros_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($empresas_centros_investigacions, new Empresas_centros_investigacion($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $empresas_centros_investigacions;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> empresas_centros_investigacionDAO -> selectAllOrder($order, $dir));
		$empresas_centros_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($empresas_centros_investigacions, new Empresas_centros_investigacion($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $empresas_centros_investigacions;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> empresas_centros_investigacionDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$empresas_centros_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($empresas_centros_investigacions, new Empresas_centros_investigacion($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $empresas_centros_investigacions;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> empresas_centros_investigacionDAO -> search($search));
		$empresas_centros_investigacions = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($empresas_centros_investigacions, new Empresas_centros_investigacion($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $empresas_centros_investigacions;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> empresas_centros_investigacionDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
