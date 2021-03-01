<?php
class FinanciacionDAO{
	private $idFinanciacion;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function FinanciacionDAO($pIdFinanciacion = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idFinanciacion = $pIdFinanciacion;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Financiacion(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Financiacion set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idFinanciacion = '" . $this -> idFinanciacion . "'";
	}

	function select() {
		return "select idFinanciacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Financiacion
				where idFinanciacion = '" . $this -> idFinanciacion . "'";
	}

	function selectAll() {
		return "select idFinanciacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Financiacion";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idFinanciacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Financiacion
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idFinanciacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Financiacion
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idFinanciacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Financiacion
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idFinanciacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Financiacion
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Financiacion
				where idFinanciacion = '" . $this -> idFinanciacion . "'";
	}
}
?>
