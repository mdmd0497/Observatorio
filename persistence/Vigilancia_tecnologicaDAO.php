<?php
class Vigilancia_tecnologicaDAO{
	private $idVigilancia_tecnologica;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function Vigilancia_tecnologicaDAO($pIdVigilancia_tecnologica = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idVigilancia_tecnologica = $pIdVigilancia_tecnologica;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Vigilancia_tecnologica(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Vigilancia_tecnologica set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idVigilancia_tecnologica = '" . $this -> idVigilancia_tecnologica . "'";
	}

	function select() {
		return "select idVigilancia_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Vigilancia_tecnologica
				where idVigilancia_tecnologica = '" . $this -> idVigilancia_tecnologica . "'";
	}

	function selectAll() {
		return "select idVigilancia_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Vigilancia_tecnologica";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idVigilancia_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Vigilancia_tecnologica
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idVigilancia_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Vigilancia_tecnologica
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idVigilancia_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Vigilancia_tecnologica
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idVigilancia_tecnologica, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Vigilancia_tecnologica
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Vigilancia_tecnologica
				where idVigilancia_tecnologica = '" . $this -> idVigilancia_tecnologica . "'";
	}
}
?>
