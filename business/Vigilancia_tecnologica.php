<?php
require_once ("persistence/Vigilancia_tecnologicaDAO.php");
require_once ("persistence/Connection.php");

class Vigilancia_tecnologica {
	private $idVigilancia_tecnologica;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;
	private $vigilancia_tecnologicaDAO;
	private $connection;

	function getIdVigilancia_tecnologica() {
		return $this -> idVigilancia_tecnologica;
	}

	function setIdVigilancia_tecnologica($pIdVigilancia_tecnologica) {
		$this -> idVigilancia_tecnologica = $pIdVigilancia_tecnologica;
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

	function Vigilancia_tecnologica($pIdVigilancia_tecnologica = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idVigilancia_tecnologica = $pIdVigilancia_tecnologica;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> vigilancia_tecnologicaDAO = new Vigilancia_tecnologicaDAO($this -> idVigilancia_tecnologica, $this -> variable, $this -> calificacion, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> vigilancia_tecnologicaDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> vigilancia_tecnologicaDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> vigilancia_tecnologicaDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idVigilancia_tecnologica = $result[0];
		$this -> variable = $result[1];
		$this -> calificacion = $result[2];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> vigilancia_tecnologicaDAO -> selectAll());
		$vigilancia_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($vigilancia_tecnologicas, new Vigilancia_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $vigilancia_tecnologicas;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> vigilancia_tecnologicaDAO -> selectAllByGrupo_de_investigacion());
		$vigilancia_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($vigilancia_tecnologicas, new Vigilancia_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $vigilancia_tecnologicas;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> vigilancia_tecnologicaDAO -> selectAllOrder($order, $dir));
		$vigilancia_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($vigilancia_tecnologicas, new Vigilancia_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $vigilancia_tecnologicas;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> vigilancia_tecnologicaDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$vigilancia_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($vigilancia_tecnologicas, new Vigilancia_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $vigilancia_tecnologicas;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> vigilancia_tecnologicaDAO -> search($search));
		$vigilancia_tecnologicas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($vigilancia_tecnologicas, new Vigilancia_tecnologica($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $vigilancia_tecnologicas;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> vigilancia_tecnologicaDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
