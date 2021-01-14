<?php
class Monitoreo_aiDAO{
	private $idMonitoreo_ai;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function Monitoreo_aiDAO($pIdMonitoreo_ai = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idMonitoreo_ai = $pIdMonitoreo_ai;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Monitoreo_ai(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Monitoreo_ai set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idMonitoreo_ai = '" . $this -> idMonitoreo_ai . "'";
	}

	function select() {
		return "select idMonitoreo_ai, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ai
				where idMonitoreo_ai = '" . $this -> idMonitoreo_ai . "'";
	}

	function selectAll() {
		return "select idMonitoreo_ai, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ai";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idMonitoreo_ai, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ai
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idMonitoreo_ai, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ai
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idMonitoreo_ai, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ai
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idMonitoreo_ai, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ai
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Monitoreo_ai
				where idMonitoreo_ai = '" . $this -> idMonitoreo_ai . "'";
	}
}
?>
