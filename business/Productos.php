<?php
require_once ("persistence/ProductosDAO.php");
require_once ("persistence/Connection.php");

class Productos {
	private $idProductos;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;
	private $productosDAO;
	private $connection;

	function getIdProductos() {
		return $this -> idProductos;
	}

	function setIdProductos($pIdProductos) {
		$this -> idProductos = $pIdProductos;
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

	function Productos($pIdProductos = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idProductos = $pIdProductos;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> productosDAO = new ProductosDAO($this -> idProductos, $this -> variable, $this -> calificacion, $this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> productosDAO -> insert());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> productosDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> productosDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idProductos = $result[0];
		$this -> variable = $result[1];
		$this -> calificacion = $result[2];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> productosDAO -> selectAll());
		$productoss = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($productoss, new Productos($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $productoss;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> productosDAO -> selectAllByGrupo_de_investigacion());
		$productoss = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($productoss, new Productos($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $productoss;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> productosDAO -> selectAllOrder($order, $dir));
		$productoss = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($productoss, new Productos($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $productoss;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> productosDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$productoss = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($productoss, new Productos($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $productoss;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> productosDAO -> search($search));
		$productoss = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[3]);
			$grupo_de_investigacion -> select();
			array_push($productoss, new Productos($result[0], $result[1], $result[2], $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $productoss;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> productosDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}
}
?>
