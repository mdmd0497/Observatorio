<?php
class Empresas_centros_investigacionDAO{
	private $idEmpresas_centros_investigacion;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function Empresas_centros_investigacionDAO($pIdEmpresas_centros_investigacion = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idEmpresas_centros_investigacion = $pIdEmpresas_centros_investigacion;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Empresas_centros_investigacion(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Empresas_centros_investigacion set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idEmpresas_centros_investigacion = '" . $this -> idEmpresas_centros_investigacion . "'";
	}

	function select() {
		return "select idEmpresas_centros_investigacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Empresas_centros_investigacion
				where idEmpresas_centros_investigacion = '" . $this -> idEmpresas_centros_investigacion . "'";
	}

	function selectAll() {
		return "select idEmpresas_centros_investigacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Empresas_centros_investigacion";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idEmpresas_centros_investigacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Empresas_centros_investigacion
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idEmpresas_centros_investigacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Empresas_centros_investigacion
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idEmpresas_centros_investigacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Empresas_centros_investigacion
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idEmpresas_centros_investigacion, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Empresas_centros_investigacion
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Empresas_centros_investigacion
				where idEmpresas_centros_investigacion = '" . $this -> idEmpresas_centros_investigacion . "'";
	}
}
?>
