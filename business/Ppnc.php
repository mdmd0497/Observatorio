<?php
require_once ("persistence/PpncDAO.php");
require_once ("persistence/Connection.php");

class Ppnc {
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
	private $ppncDAO;
	private $connection;

	function getIdPpnc() {
		return $this -> idPpnc;
	}

	function setIdPpnc($pIdPpnc) {
		$this -> idPpnc = $pIdPpnc;
	}

	function getSubtipo_de_producto() {
		return $this -> subtipo_de_producto;
	}

	function setSubtipo_de_producto($pSubtipo_de_producto) {
		$this -> subtipo_de_producto = $pSubtipo_de_producto;
	}

	function getAbreviatura() {
		return $this -> abreviatura;
	}

	function setAbreviatura($pAbreviatura) {
		$this -> abreviatura = $pAbreviatura;
	}

	public function getSubtipoDeProducto2()
	{
		return $this->subtipo_de_producto2;
	}

	public function setSubtipoDeProducto2($subtipo_de_producto2)
	{
		$this->subtipo_de_producto2 = $subtipo_de_producto2;
	}

	public function getAbreviatura2()
	{
		return $this->abreviatura2;
	}

	public function setAbreviatura2($abreviatura2)
	{
		$this->abreviatura2 = $abreviatura2;
	}

	public function getSubtipoDeProducto3()
	{
		return $this->subtipo_de_producto3;
	}

	public function setSubtipoDeProducto3($subtipo_de_producto3)
	{
		$this->subtipo_de_producto3 = $subtipo_de_producto3;
	}

	public function getAbreviatura3()
	{
		return $this->abreviatura3;
	}

	public function setAbreviatura3($abreviatura3)
	{
		$this->abreviatura3 = $abreviatura3;
	}

	public function getSubtipoDeProducto4()
	{
		return $this->subtipo_de_producto4;
	}

	public function setSubtipoDeProducto4($subtipo_de_producto4)
	{
		$this->subtipo_de_producto4 = $subtipo_de_producto4;
	}

	public function getAbreviatura4()
	{
		return $this->abreviatura4;
	}

	public function setAbreviatura4($abreviatura4)
	{
		$this->abreviatura4 = $abreviatura4;
	}

	public function getSubtipoDeProducto5()
	{
		return $this->subtipo_de_producto5;
	}

	public function setSubtipoDeProducto5($subtipo_de_producto5)
	{
		$this->subtipo_de_producto5 = $subtipo_de_producto5;
	}

	public function getAbreviatura5()
	{
		return $this->abreviatura5;
	}

	public function setAbreviatura5($abreviatura5)
	{
		$this->abreviatura5 = $abreviatura5;
	}

	public function getSubtipoDeProducto6()
	{
		return $this->subtipo_de_producto6;
	}

	public function setSubtipoDeProducto6($subtipo_de_producto6)
	{
		$this->subtipo_de_producto6 = $subtipo_de_producto6;
	}

	public function getAbreviatura6()
	{
		return $this->abreviatura6;
	}

	public function setAbreviatura6($abreviatura6)
	{
		$this->abreviatura6 = $abreviatura6;
	}

	public function getSubtipoDeProducto7()
	{
		return $this->subtipo_de_producto7;
	}

	public function setSubtipoDeProducto7($subtipo_de_producto7)
	{
		$this->subtipo_de_producto7 = $subtipo_de_producto7;
	}

	public function getAbreviatura7()
	{
		return $this->abreviatura7;
	}

	public function setAbreviatura7($abreviatura7)
	{
		$this->abreviatura7 = $abreviatura7;
	}

	public function getSubtipoDeProducto8()
	{
		return $this->subtipo_de_producto8;
	}

	public function setSubtipoDeProducto8($subtipo_de_producto8)
	{
		$this->subtipo_de_producto8 = $subtipo_de_producto8;
	}

	public function getAbreviatura8()
	{
		return $this->abreviatura8;
	}

	public function setAbreviatura8($abreviatura8)
	{
		$this->abreviatura8 = $abreviatura8;
	}

	function getValor_maximo() {
		return $this -> valor_maximo;
	}

	function setValor_maximo($pValor_maximo) {
		$this -> valor_maximo = $pValor_maximo;
	}

	function getValor_indicador() {
		return $this -> valor_indicador;
	}

	function setValor_indicador($pValor_indicador) {
		$this -> valor_indicador = $pValor_indicador;
	}

	public function getValorMaximo2()
	{
		return $this->valor_maximo2;
	}

	public function setValorMaximo2($valor_maximo2)
	{
		$this->valor_maximo2 = $valor_maximo2;
	}

	public function getValorIndicador2()
	{
		return $this->valor_indicador2;
	}

	public function setValorIndicador2($valor_indicador2)
	{
		$this->valor_indicador2 = $valor_indicador2;
	}

	public function getValorMaximo3()
	{
		return $this->valor_maximo3;
	}

	public function setValorMaximo3($valor_maximo3)
	{
		$this->valor_maximo3 = $valor_maximo3;
	}

	public function getValorIndicador3()
	{
		return $this->valor_indicador3;
	}

	public function setValorIndicador3($valor_indicador3)
	{
		$this->valor_indicador3 = $valor_indicador3;
	}

	public function getValorMaximo4()
	{
		return $this->valor_maximo4;
	}

	public function setValorMaximo4($valor_maximo4)
	{
		$this->valor_maximo4 = $valor_maximo4;
	}

	public function getValorIndicador4()
	{
		return $this->valor_indicador4;
	}
	public function setValorIndicador4($valor_indicador4)
	{
		$this->valor_indicador4 = $valor_indicador4;
	}

	public function getValorMaximo5()
	{
		return $this->valor_maximo5;
	}

	public function setValorMaximo5($valor_maximo5)
	{
		$this->valor_maximo5 = $valor_maximo5;
	}

	public function getValorIndicador5()
	{
		return $this->valor_indicador5;
	}

	public function setValorIndicador5($valor_indicador5)
	{
		$this->valor_indicador5 = $valor_indicador5;
	}

	public function getValorMaximo6()
	{
		return $this->valor_maximo6;
	}

	public function setValorMaximo6($valor_maximo6)
	{
		$this->valor_maximo6 = $valor_maximo6;
	}

	public function getValorIndicador6()
	{
		return $this->valor_indicador6;
	}

	public function setValorIndicador6($valor_indicador6)
	{
		$this->valor_indicador6 = $valor_indicador6;
	}

	public function getValorMaximo7()
	{
		return $this->valor_maximo7;
	}

	public function setValorMaximo7($valor_maximo7)
	{
		$this->valor_maximo7 = $valor_maximo7;
	}

	public function getValorIndicador7()
	{
		return $this->valor_indicador7;
	}

	public function setValorIndicador7($valor_indicador7)
	{
		$this->valor_indicador7 = $valor_indicador7;
	}

	public function getValorMaximo8()
	{
		return $this->valor_maximo8;
	}

	public function setValorMaximo8($valor_maximo8)
	{
		$this->valor_maximo8 = $valor_maximo8;
	}

	public function getValorIndicador8()
	{
		return $this->valor_indicador8;
	}

	public function setValorIndicador8($valor_indicador8)
	{
		$this->valor_indicador8 = $valor_indicador8;
	}

	function getGrupo_de_investigacion() {
		return $this -> grupo_de_investigacion;
	}

	function setGrupo_de_investigacion($pGrupo_de_investigacion) {
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function Ppnc($pIdPpnc = "", $pSubtipo_de_producto = "", $pAbreviatura = "",
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

		$this -> ppncDAO = new PpncDAO($this -> idPpnc, $this -> subtipo_de_producto, $this -> abreviatura,
										$this -> subtipo_de_producto2, $this -> abreviatura2,
										$this -> subtipo_de_producto3, $this -> abreviatura3,
										$this -> subtipo_de_producto4, $this -> abreviatura4,
										$this -> subtipo_de_producto5, $this -> abreviatura5,
										$this -> subtipo_de_producto6, $this -> abreviatura6,
										$this -> subtipo_de_producto7, $this -> abreviatura7,
										$this -> subtipo_de_producto8, $this -> abreviatura8,

										$this -> valor_maximo, $this -> valor_indicador,
										$this -> valor_maximo2, $this -> valor_indicador2,
										$this -> valor_maximo3, $this -> valor_indicador3,
										$this -> valor_maximo4, $this -> valor_indicador4,
										$this -> valor_maximo5, $this -> valor_indicador5,
										$this -> valor_maximo6, $this -> valor_indicador6,
										$this -> valor_maximo7, $this -> valor_indicador7,
										$this -> valor_maximo8, $this -> valor_indicador8,

										$this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> insert());
		$this -> connection -> run($this -> ppncDAO -> insert2());
		$this -> connection -> run($this -> ppncDAO -> insert3());
		$this -> connection -> run($this -> ppncDAO -> insert4());
		$this -> connection -> run($this -> ppncDAO -> insert5());
		$this -> connection -> run($this -> ppncDAO -> insert6());
		$this -> connection -> run($this -> ppncDAO -> insert7());
		$this -> connection -> run($this -> ppncDAO -> insert8());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idPpnc = $result[0];
		$this -> subtipo_de_producto = $result[1];
		$this -> abreviatura = $result[2];
		$this -> valor_maximo = $result[3];
		$this -> valor_indicador = $result[4];
		$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
		$grupo_de_investigacion -> select();
		$this -> grupo_de_investigacion = $grupo_de_investigacion;
	}

	function selectAll(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> selectAll());
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], "", "",
				"","","", "", "","" ,
				"", "", "", "", "", "",
				$result[3], $result[4], "", "", "", "",
				"", "", "", "", "", "",
				"", "", "", "", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> selectAllByGrupo_de_investigacion());
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], "", "",
				"","","", "", "","" ,
				"", "", "", "", "", "",
				$result[3], $result[4], "", "", "", "",
				"", "", "", "", "", "",
				"", "", "", "", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> selectAllOrder($order, $dir));
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], "", "",
				"","","", "", "","" ,
				"", "", "", "", "", "",
				$result[3], $result[4], "", "", "", "",
				"", "", "", "", "", "",
				"", "", "", "", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], "", "",
				"","","", "", "","" ,
				"", "", "", "", "", "",
				$result[3], $result[4], "", "", "", "",
				"", "", "", "", "", "",
				"", "", "", "", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> search($search));
		$ppncs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppncs, new Ppnc($result[0], $result[1], $result[2], "", "",
				"","","", "", "","" ,
				"", "", "", "", "", "",
				$result[3], $result[4], "", "", "", "",
				"", "", "", "", "", "",
				"", "", "", "", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppncs;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}

	function consultarTotalRegistros($id){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> consultarTotalRegistros($id));
		$this -> connection -> close();
		$resultado = $this -> connection -> fetchRow();
		return $resultado[0];
	}

	function consultarGraficaPpnc($id){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppncDAO -> consultarGraficaPpnc($id));
		$pcs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($pcs, new Ppnc($result[0], $result[1], $result[2], "", "",
				"","","", "", "","" ,
				"", "", "", "", "", "",
				$result[3], $result[4], "", "", "", "",
				"", "", "", "", "", "",
				"", "", "", "", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $pcs;
	}
}
?>
