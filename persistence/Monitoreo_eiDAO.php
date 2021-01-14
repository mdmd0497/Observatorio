<?php
class Monitoreo_eiDAO{
	private $idMonitoreo_ei;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function Monitoreo_eiDAO($pIdMonitoreo_ei = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idMonitoreo_ei = $pIdMonitoreo_ei;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Monitoreo_ei(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Monitoreo_ei set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idMonitoreo_ei = '" . $this -> idMonitoreo_ei . "'";
	}

	function select() {
		return "select idMonitoreo_ei, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ei
				where idMonitoreo_ei = '" . $this -> idMonitoreo_ei . "'";
	}

	function selectAll() {
		return "select idMonitoreo_ei, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ei";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idMonitoreo_ei, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ei
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idMonitoreo_ei, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ei
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idMonitoreo_ei, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ei
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idMonitoreo_ei, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Monitoreo_ei
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Monitoreo_ei
				where idMonitoreo_ei = '" . $this -> idMonitoreo_ei . "'";
	}
}
?>
