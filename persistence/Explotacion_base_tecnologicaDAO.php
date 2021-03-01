<?php
class Explotacion_base_tecnologicaDAO{
	private $idExplotacion_base_tecnologica;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function Explotacion_base_tecnologicaDAO($pIdExplotacion_base_tecnologica = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idExplotacion_base_tecnologica = $pIdExplotacion_base_tecnologica;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Explotacion_base_tecnologica(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Explotacion_base_tecnologica set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idExplotacion_base_tecnologica = '" . $this -> idExplotacion_base_tecnologica . "'";
	}

	function select() {
		return "select idExplotacion_base_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Explotacion_base_tecnologica
				where idExplotacion_base_tecnologica = '" . $this -> idExplotacion_base_tecnologica . "'";
	}

	function selectAll() {
		return "select idExplotacion_base_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Explotacion_base_tecnologica";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idExplotacion_base_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Explotacion_base_tecnologica
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idExplotacion_base_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Explotacion_base_tecnologica
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idExplotacion_base_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Explotacion_base_tecnologica
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idExplotacion_base_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Explotacion_base_tecnologica
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Explotacion_base_tecnologica
				where idExplotacion_base_tecnologica = '" . $this -> idExplotacion_base_tecnologica . "'";
	}
}
?>
