<?php
class PpncDAO{
	private $idPpnc;
	private $subtipo_de_producto;
	private $abreviatura;
	private $subtipo_de_producto2;
	private $abreviatura2;
	private $subtipo_de_producto3;
	private $abreviatura3;
	private $subtipo_de_producto4;
	private $abreviatura4;
	private $subtipo_de_producto5;
	private $abreviatura5;
	private $subtipo_de_producto6;
	private $abreviatura6;
	private $subtipo_de_producto7;
	private $abreviatura7;
	private $subtipo_de_producto8;
	private $abreviatura8;
	private $valor_maximo;
	private $valor_indicador;
	private $valor_maximo2;
	private $valor_indicador2;
	private $valor_maximo3;
	private $valor_indicador3;
	private $valor_maximo4;
	private $valor_indicador4;
	private $valor_maximo5;
	private $valor_indicador5;
	private $valor_maximo6;
	private $valor_indicador6;
	private $valor_maximo7;
	private $valor_indicador7;
	private $valor_maximo8;
	private $valor_indicador8;
	private $grupo_de_investigacion;

	function PpncDAO($pIdPpnc = "", $pSubtipo_de_producto = "", $pAbreviatura = "",
					 $pSubtipo_de_producto2 = "", $pAbreviatura2 = "",
					 $pSubtipo_de_producto3 = "", $pAbreviatura3 = "",
					 $pSubtipo_de_producto4 = "", $pAbreviatura4 = "",
					 $pSubtipo_de_producto5 = "", $pAbreviatura5 = "",
					 $pSubtipo_de_producto6 = "", $pAbreviatura6 = "",
					 $pSubtipo_de_producto7 = "", $pAbreviatura7 = "",
					 $pSubtipo_de_producto8 = "", $pAbreviatura8 = "",
					 $pValor_maximo = "", $pValor_indicador = "",
					 $pValor_maximo2 = "", $pValor_indicador2 = "",
					 $pValor_maximo3 = "", $pValor_indicador3 = "",
					 $pValor_maximo4 = "", $pValor_indicador4 = "",
					 $pValor_maximo5 = "", $pValor_indicador5 = "",
					 $pValor_maximo6 = "", $pValor_indicador6 = "",
					 $pValor_maximo7 = "", $pValor_indicador7 = "",
					 $pValor_maximo8 = "", $pValor_indicador8 = "",
					 $pGrupo_de_investigacion = ""){

		$this -> idPpnc = $pIdPpnc;

		$this -> subtipo_de_producto = $pSubtipo_de_producto;
		$this -> abreviatura = $pAbreviatura;
		$this -> subtipo_de_producto2 = $pSubtipo_de_producto2;
		$this -> abreviatura2 = $pAbreviatura2;
		$this -> subtipo_de_producto3 = $pSubtipo_de_producto3;
		$this -> abreviatura3 = $pAbreviatura3;
		$this -> subtipo_de_producto4 = $pSubtipo_de_producto4;
		$this -> abreviatura4 = $pAbreviatura4;
		$this -> subtipo_de_producto5 = $pSubtipo_de_producto5;
		$this -> abreviatura5 = $pAbreviatura5;
		$this -> subtipo_de_producto6 = $pSubtipo_de_producto6;
		$this -> abreviatura6 = $pAbreviatura6;
		$this -> subtipo_de_producto7 = $pSubtipo_de_producto7;
		$this -> abreviatura7 = $pAbreviatura7;
		$this -> subtipo_de_producto8 = $pSubtipo_de_producto8;
		$this -> abreviatura8 = $pAbreviatura8;

		$this -> valor_maximo = $pValor_maximo;
		$this -> valor_indicador = $pValor_indicador;
		$this -> valor_maximo2 = $pValor_maximo2;
		$this -> valor_indicador2 = $pValor_indicador2;
		$this -> valor_maximo3 = $pValor_maximo3;
		$this -> valor_indicador3 = $pValor_indicador3;
		$this -> valor_maximo4 = $pValor_maximo4;
		$this -> valor_indicador4 = $pValor_indicador4;
		$this -> valor_maximo5 = $pValor_maximo5;
		$this -> valor_indicador5 = $pValor_indicador5;
		$this -> valor_maximo6 = $pValor_maximo6;
		$this -> valor_indicador6 = $pValor_indicador6;
		$this -> valor_maximo7 = $pValor_maximo7;
		$this -> valor_indicador7 = $pValor_indicador7;
		$this -> valor_maximo8 = $pValor_maximo8;
		$this -> valor_indicador8 = $pValor_indicador8;

		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into Ppnc(subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> subtipo_de_producto . "', '" . $this -> abreviatura . "', '" . $this -> valor_maximo . "', '" . $this -> valor_indicador . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function insert2(){
		return "insert into Ppnc(subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> subtipo_de_producto2 . "', '" . $this -> abreviatura2 . "', '" . $this -> valor_maximo2 . "', '" . $this -> valor_indicador2 . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function insert3(){
		return "insert into Ppnc(subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> subtipo_de_producto3 . "', '" . $this -> abreviatura3 . "', '" . $this -> valor_maximo3 . "', '" . $this -> valor_indicador3 . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function insert4(){
		return "insert into Ppnc(subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> subtipo_de_producto4 . "', '" . $this -> abreviatura4 . "', '" . $this -> valor_maximo4 . "', '" . $this -> valor_indicador4 . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function insert5(){
		return "insert into Ppnc(subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> subtipo_de_producto5 . "', '" . $this -> abreviatura5 . "', '" . $this -> valor_maximo5 . "', '" . $this -> valor_indicador5 . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function insert6(){
		return "insert into Ppnc(subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> subtipo_de_producto6 . "', '" . $this -> abreviatura6 . "', '" . $this -> valor_maximo6 . "', '" . $this -> valor_indicador6 . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function insert7(){
		return "insert into Ppnc(subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> subtipo_de_producto7 . "', '" . $this -> abreviatura7 . "', '" . $this -> valor_maximo7 . "', '" . $this -> valor_indicador7 . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function insert8(){
		return "insert into Ppnc(subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> subtipo_de_producto8 . "', '" . $this -> abreviatura8 . "', '" . $this -> valor_maximo8 . "', '" . $this -> valor_indicador8 . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update Ppnc set 
				subtipo_de_producto = '" . $this -> subtipo_de_producto . "',
				abreviatura = '" . $this -> abreviatura . "',
				valor_maximo = '" . $this -> valor_maximo . "',
				valor_indicador = '" . $this -> valor_indicador . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idPpnc = '" . $this -> idPpnc . "'";
	}

	function select() {
		return "select idPpnc, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppnc
				where idPpnc = '" . $this -> idPpnc . "'";
	}

	function selectAll() {
		return "select idPpnc, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppnc";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idPpnc, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppnc
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idPpnc, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppnc
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idPpnc, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppnc
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idPpnc, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppnc
				where subtipo_de_producto like '%" . $search . "%' or abreviatura like '%" . $search . "%' or valor_maximo like '%" . $search . "%' or valor_indicador like '%" . $search . "%'";
	}

	function delete(){
		return "delete from Ppnc
				where idPpnc = '" . $this -> idPpnc . "'";
	}

	function consultarTotalRegistros($id){
		return "select count(grupo_de_investigacion_idGrupo_de_investigacion)
                from ppnc where grupo_de_investigacion_idGrupo_de_investigacion = '".$id."'";
	}

	function consultarGraficaPpnc($id){
		return "select idPpnc, subtipo_de_producto, abreviatura, valor_maximo, valor_indicador, grupo_de_investigacion_idGrupo_de_investigacion
				from Ppnc
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $id . "'";
	}
}
?>
