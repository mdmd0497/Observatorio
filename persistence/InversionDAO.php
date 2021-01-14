<?php
class InversionDAO{
	private $idInversion;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function InversionDAO($pIdInversion = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idInversion = $pIdInversion;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Inversion(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Inversion set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idInversion = '" . $this -> idInversion . "'";
	}

	function select() {
		return "select idInversion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Inversion
				where idInversion = '" . $this -> idInversion . "'";
	}

	function selectAll() {
		return "select idInversion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Inversion";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idInversion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Inversion
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idInversion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Inversion
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idInversion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Inversion
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idInversion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Inversion
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Inversion
				where idInversion = '" . $this -> idInversion . "'";
	}
}
?>
