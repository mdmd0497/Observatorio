<?php
class Cultura_investigativaDAO{
	private $idCultura_investigativa;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function Cultura_investigativaDAO($pIdCultura_investigativa = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idCultura_investigativa = $pIdCultura_investigativa;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Cultura_investigativa(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Cultura_investigativa set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idCultura_investigativa = '" . $this -> idCultura_investigativa . "'";
	}

	function select() {
		return "select idCultura_investigativa, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Cultura_investigativa
				where idCultura_investigativa = '" . $this -> idCultura_investigativa . "'";
	}

	function selectAll() {
		return "select idCultura_investigativa, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Cultura_investigativa";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idCultura_investigativa, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Cultura_investigativa
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idCultura_investigativa, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Cultura_investigativa
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idCultura_investigativa, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Cultura_investigativa
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idCultura_investigativa, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Cultura_investigativa
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Cultura_investigativa
				where idCultura_investigativa = '" . $this -> idCultura_investigativa . "'";
	}
}
?>
