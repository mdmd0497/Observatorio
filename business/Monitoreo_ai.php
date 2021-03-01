<?php
require_once ("persistence/Monitoreo_aiDAO.php");
require_once ("persistence/Connection.php");

class Monitoreo_ai {
	private $idMonitoreo_ai;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;
	private $monitoreo_aiDAO;
	private $connection;

	function getIdMonitoreo_ai() {
		return $this -> idMonitoreo_ai;
	}

	function setIdMonitoreo_ai($pIdMonitoreo_ai) {
		$this -> idMonitoreo_ai = $pIdMonitoreo_ai;
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

	function Monitoreo_ai($pIdMonitoreo_ai = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idMonitoreo_ai = $pIdMonitoreo_ai;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> monitoreo_aiDAO = new Monitoreo_aiDAO($this -> idMonitoreo_ai, $this -> variable, $this -> calificacion, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_aiDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_aiDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_aiDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idMonitoreo_ai = $result[0];
		$this -> variable = $result[1];
		$this -> calificacion = $result[2];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_aiDAO -> selectAll());
		$monitoreo_ais = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_ais, new Monitoreo_ai($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_ais;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_aiDAO -> selectAllByGrupo_de_investigacion());
		$monitoreo_ais = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_ais, new Monitoreo_ai($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_ais;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_aiDAO -> selectAllOrder($order, $dir));
		$monitoreo_ais = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_ais, new Monitoreo_ai($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_ais;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_aiDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$monitoreo_ais = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_ais, new Monitoreo_ai($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_ais;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_aiDAO -> search($search));
		$monitoreo_ais = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_ais, new Monitoreo_ai($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_ais;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_aiDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
