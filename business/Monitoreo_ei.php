<?php
require_once ("persistence/Monitoreo_eiDAO.php");
require_once ("persistence/Connection.php");

class Monitoreo_ei {
	private $idMonitoreo_ei;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;
	private $monitoreo_eiDAO;
	private $connection;

	function getIdMonitoreo_ei() {
		return $this -> idMonitoreo_ei;
	}

	function setIdMonitoreo_ei($pIdMonitoreo_ei) {
		$this -> idMonitoreo_ei = $pIdMonitoreo_ei;
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

	function Monitoreo_ei($pIdMonitoreo_ei = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idMonitoreo_ei = $pIdMonitoreo_ei;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> monitoreo_eiDAO = new Monitoreo_eiDAO($this -> idMonitoreo_ei, $this -> variable, $this -> calificacion, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_eiDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_eiDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_eiDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idMonitoreo_ei = $result[0];
		$this -> variable = $result[1];
		$this -> calificacion = $result[2];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_eiDAO -> selectAll());
		$monitoreo_eis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_eis, new Monitoreo_ei($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_eis;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_eiDAO -> selectAllByGrupo_de_investigacion());
		$monitoreo_eis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_eis, new Monitoreo_ei($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_eis;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_eiDAO -> selectAllOrder($order, $dir));
		$monitoreo_eis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_eis, new Monitoreo_ei($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_eis;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_eiDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$monitoreo_eis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_eis, new Monitoreo_ei($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_eis;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_eiDAO -> search($search));
		$monitoreo_eis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($monitoreo_eis, new Monitoreo_ei($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $monitoreo_eis;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> monitoreo_eiDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
