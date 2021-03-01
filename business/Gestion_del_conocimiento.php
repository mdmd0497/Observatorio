<?php
require_once ("persistence/Gestion_del_conocimientoDAO.php");
require_once ("persistence/Connection.php");

class Gestion_del_conocimiento {
	private $idGestion_del_conocimiento;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;
	private $gestion_del_conocimientoDAO;
	private $connection;

	function getIdGestion_del_conocimiento() {
		return $this -> idGestion_del_conocimiento;
	}

	function setIdGestion_del_conocimiento($pIdGestion_del_conocimiento) {
		$this -> idGestion_del_conocimiento = $pIdGestion_del_conocimiento;
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

	function Gestion_del_conocimiento($pIdGestion_del_conocimiento = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idGestion_del_conocimiento = $pIdGestion_del_conocimiento;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> gestion_del_conocimientoDAO = new Gestion_del_conocimientoDAO($this -> idGestion_del_conocimiento, $this -> variable, $this -> calificacion, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> gestion_del_conocimientoDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> gestion_del_conocimientoDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> gestion_del_conocimientoDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idGestion_del_conocimiento = $result[0];
		$this -> variable = $result[1];
		$this -> calificacion = $result[2];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> gestion_del_conocimientoDAO -> selectAll());
		$gestion_del_conocimientos = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($gestion_del_conocimientos, new Gestion_del_conocimiento($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $gestion_del_conocimientos;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> gestion_del_conocimientoDAO -> selectAllByGrupo_de_investigacion());
		$gestion_del_conocimientos = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($gestion_del_conocimientos, new Gestion_del_conocimiento($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $gestion_del_conocimientos;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> gestion_del_conocimientoDAO -> selectAllOrder($order, $dir));
		$gestion_del_conocimientos = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($gestion_del_conocimientos, new Gestion_del_conocimiento($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $gestion_del_conocimientos;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> gestion_del_conocimientoDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$gestion_del_conocimientos = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($gestion_del_conocimientos, new Gestion_del_conocimiento($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $gestion_del_conocimientos;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> gestion_del_conocimientoDAO -> search($search));
		$gestion_del_conocimientos = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($gestion_del_conocimientos, new Gestion_del_conocimiento($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $gestion_del_conocimientos;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> gestion_del_conocimientoDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
