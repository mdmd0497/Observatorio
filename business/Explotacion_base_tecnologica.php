<?php
require_once ("persistence/Explotacion_base_tecnologicaDAO.php");
require_once ("persistence/Connection.php");

class Explotacion_base_tecnologica {
	private $idExplotacion_base_tecnologica;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;
	private $explotacion_base_tecnologicaDAO;
	private $connection;

	function getIdExplotacion_base_tecnologica() {
		return $this -> idExplotacion_base_tecnologica;
	}

	function setIdExplotacion_base_tecnologica($pIdExplotacion_base_tecnologica) {
		$this -> idExplotacion_base_tecnologica = $pIdExplotacion_base_tecnologica;
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

	function Explotacion_base_tecnologica($pIdExplotacion_base_tecnologica = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idExplotacion_base_tecnologica = $pIdExplotacion_base_tecnologica;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> explotacion_base_tecnologicaDAO = new Explotacion_base_tecnologicaDAO($this -> idExplotacion_base_tecnologica, $this -> variable, $this -> calificacion, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> explotacion_base_tecnologicaDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> explotacion_base_tecnologicaDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> explotacion_base_tecnologicaDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idExplotacion_base_tecnologica = $result[0];
		$this -> variable = $result[1];
		$this -> calificacion = $result[2];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> explotacion_base_tecnologicaDAO -> selectAll());
		$explotacion_base_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($explotacion_base_tecnologicas, new Explotacion_base_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $explotacion_base_tecnologicas;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> explotacion_base_tecnologicaDAO -> selectAllByGrupo_de_investigacion());
		$explotacion_base_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($explotacion_base_tecnologicas, new Explotacion_base_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $explotacion_base_tecnologicas;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> explotacion_base_tecnologicaDAO -> selectAllOrder($order, $dir));
		$explotacion_base_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($explotacion_base_tecnologicas, new Explotacion_base_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $explotacion_base_tecnologicas;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> explotacion_base_tecnologicaDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$explotacion_base_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($explotacion_base_tecnologicas, new Explotacion_base_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $explotacion_base_tecnologicas;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> explotacion_base_tecnologicaDAO -> search($search));
		$explotacion_base_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($explotacion_base_tecnologicas, new Explotacion_base_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $explotacion_base_tecnologicas;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> explotacion_base_tecnologicaDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
