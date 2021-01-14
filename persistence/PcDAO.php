<?php
class PcDAO{
	private $idPc;
	private $indicador;
	private $abreviatura;
	private $valor_maximo;
	private $valor_indicador;
	private $grupo_de_investigacion;

	function PcDAO($pIdPc = "", $pIndicador = "", $pAbreviatura = "", $pValor_maximo = "", $pValor_indicador = "", $pGrupo_de_investigacion = ""){
		$this -> idPc = $pIdPc;
		$this -> indicador = $pIndicador;
		$this -> abreviatura = $pAbreviatura;
		$this -> valor_maximo = $pValor_maximo;
		$this -> valor_indicador = $pValor_indicador;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Pc(indicador, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> indicador . "', '" . $this -> abreviatura . "', '" . $this -> valor_maximo . "', '" . $this -> valor_indicador . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Pc set 
				indicador = '" . $this -> indicador . "',
				abreviatura = '" . $this -> abreviatura . "',
				valor_maximo = '" . $this -> valor_maximo . "',
				valor_indicador = '" . $this -> valor_indicador . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idPc = '" . $this -> idPc . "'";
	}

	function select() {
		return "select idPc, indicador, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Pc
				where idPc = '" . $this -> idPc . "'";
	}

	function selectAll() {
		return "select idPc, indicador, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Pc";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idPc, indicador, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Pc
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idPc, indicador, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Pc
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idPc, indicador, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Pc
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idPc, indicador, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Pc
				where indicador like '%" . $search . "%' or abreviatura like '%" . $search . "%' or valor_maximo like '%" . $search . "%' or valor_indicador like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Pc
				where idPc = '" . $this -> idPc . "'";
	}
}
?>
