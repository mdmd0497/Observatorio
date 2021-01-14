<?php
class ProductosDAO{
	private $idProductos;
	private $variable;
	private $calificacion;
	private $grupo_de_investigacion;

	function ProductosDAO($pIdProductos = "", $pVariable = "", $pCalificacion = "", $pGrupo_de_investigacion = ""){
		$this -> idProductos = $pIdProductos;
		$this -> variable = $pVariable;
		$this -> calificacion = $pCalificacion;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Productos(variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> variable . "', '" . $this -> calificacion . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Productos set 
				variable = '" . $this -> variable . "',
				calificacion = '" . $this -> calificacion . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idProductos = '" . $this -> idProductos . "'";
	}

	function select() {
		return "select idProductos, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Productos
				where idProductos = '" . $this -> idProductos . "'";
	}

	function selectAll() {
		return "select idProductos, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Productos";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idProductos, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Productos
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idProductos, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Productos
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idProductos, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Productos
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idProductos, variable, calificacion, grupo_de_investigacion_idGrupo_de_investigacion
				from Productos
				where variable like '%" . $search . "%' or calificacion like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Productos
				where idProductos = '" . $this -> idProductos . "'";
	}
}
?>
