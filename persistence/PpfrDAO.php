<?php
class PpfrDAO{
	private $idPpfr;
	private $subtipo_de_producto;
	private $abreviatura;
	private $valor_maximo;
	private $valor_indicador;
	private $grupo_de_investigacion;

	function PpfrDAO($pIdPpfr = "", $pSubtipo_de_producto = "", $pAbreviatura = "", $pValor_maximo = "", $pValor_indicador = "", $pGrupo_de_investigacion = ""){
		$this -> idPpfr = $pIdPpfr;
		$this -> subtipo_de_producto = $pSubtipo_de_producto;
		$this -> abreviatura = $pAbreviatura;
		$this -> valor_maximo = $pValor_maximo;
		$this -> valor_indicador = $pValor_indicador;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Ppfr(subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> subtipo_de_producto . "', '" . $this -> abreviatura . "', '" . $this -> valor_maximo . "', '" . $this -> valor_indicador . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Ppfr set 
				subtipo_de_producto = '" . $this -> subtipo_de_producto . "',
				abreviatura = '" . $this -> abreviatura . "',
				valor_maximo = '" . $this -> valor_maximo . "',
				valor_indicador = '" . $this -> valor_indicador . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idPpfr = '" . $this -> idPpfr . "'";
	}

	function select() {
		return "select idPpfr, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppfr
				where idPpfr = '" . $this -> idPpfr . "'";
	}

	function selectAll() {
		return "select idPpfr, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppfr";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idPpfr, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppfr
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idPpfr, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppfr
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idPpfr, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppfr
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idPpfr, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppfr
				where subtipo_de_producto like '%" . $search . "%' or abreviatura like '%" . $search . "%' or valor_maximo like '%" . $search . "%' or valor_indicador like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Ppfr
				where idPpfr = '" . $this -> idPpfr . "'";
	}
}
?>
