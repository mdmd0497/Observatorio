<?php
require_once ("persistence/Cultura_investigativaDAO.php");
require_once ("persistence/Connection.php");

class Cultura_investigativa {
	private $idCultura_investigativa;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;
	private $cultura_investigativaDAO;
	private $connection;

	function getIdCultura_investigativa() {
		return $this -> idCultura_investigativa;
	}

	function setIdCultura_investigativa($pIdCultura_investigativa) {
		$this -> idCultura_investigativa = $pIdCultura_investigativa;
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

	function Cultura_investigativa($pIdCultura_investigativa = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idCultura_investigativa = $pIdCultura_investigativa;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> cultura_investigativaDAO = new Cultura_investigativaDAO($this -> idCultura_investigativa, $this -> variable, $this -> calificacion, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> cultura_investigativaDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> cultura_investigativaDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> cultura_investigativaDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idCultura_investigativa = $result[0];
		$this -> variable = $result[1];
		$this -> calificacion = $result[2];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> cultura_investigativaDAO -> selectAll());
		$cultura_investigativas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($cultura_investigativas, new Cultura_investigativa($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $cultura_investigativas;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> cultura_investigativaDAO -> selectAllByGrupo_de_investigacion());
		$cultura_investigativas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($cultura_investigativas, new Cultura_investigativa($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $cultura_investigativas;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> cultura_investigativaDAO -> selectAllOrder($order, $dir));
		$cultura_investigativas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($cultura_investigativas, new Cultura_investigativa($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $cultura_investigativas;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> cultura_investigativaDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$cultura_investigativas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($cultura_investigativas, new Cultura_investigativa($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $cultura_investigativas;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> cultura_investigativaDAO -> search($search));
		$cultura_investigativas = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($cultura_investigativas, new Cultura_investigativa($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $cultura_investigativas;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> cultura_investigativaDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
