<?php
class Gestion_del_conocimientoDAO{
	private $idGestion_del_conocimiento;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function Gestion_del_conocimientoDAO($pIdGestion_del_conocimiento = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idGestion_del_conocimiento = $pIdGestion_del_conocimiento;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Gestion_del_conocimiento(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Gestion_del_conocimiento set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idGestion_del_conocimiento = '" . $this -> idGestion_del_conocimiento . "'";
	}

	function select() {
		return "select idGestion_del_conocimiento, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Gestion_del_conocimiento
				where idGestion_del_conocimiento = '" . $this -> idGestion_del_conocimiento . "'";
	}

	function selectAll() {
		return "select idGestion_del_conocimiento, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Gestion_del_conocimiento";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idGestion_del_conocimiento, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Gestion_del_conocimiento
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idGestion_del_conocimiento, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Gestion_del_conocimiento
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idGestion_del_conocimiento, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Gestion_del_conocimiento
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idGestion_del_conocimiento, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Gestion_del_conocimiento
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Gestion_del_conocimiento
				where idGestion_del_conocimiento = '" . $this -> idGestion_del_conocimiento . "'";
	}
}
?>
