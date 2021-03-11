<?php
require_once ("persistence/PpaidiDAO.php");
require_once ("persistence/Connection.php");

class Ppaidi {
	private $idPpaidi;
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
	private $grupo_de_investigacion;
	private $ppaidiDAO;
	private $connection;

	function getIdPpaidi() {
		return $this -> idPpaidi;
	}

	function setIdPpaidi($pIdPpaidi) {
		$this -> idPpaidi = $pIdPpaidi;
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

	function getGrupo_de_investigacion() {
		return $this -> grupo_de_investigacion;
	}

	function setGrupo_de_investigacion($pGrupo_de_investigacion) {
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function Ppaidi($pIdPpaidi = "", $pSubtipo_de_producto = "", $pAbreviatura = "",
					$pSubtipo_de_producto2 = "", $pAbreviatura2 = "",
					$pSubtipo_de_producto3 = "", $pAbreviatura3 = "",
					$pSubtipo_de_producto4 = "", $pAbreviatura4 = "",
					$pSubtipo_de_producto5 = "", $pAbreviatura5 = "",
					$pValor_maximo = "", $pValor_indicador = "",
					$pValor_maximo2 = "", $pValor_indicador2 = "",
					$pValor_maximo3 = "", $pValor_indicador3 = "",
					$pValor_maximo4 = "", $pValor_indicador4 = "",
					$pValor_maximo5 = "", $pValor_indicador5 = "",
					$pGrupo_de_investigacion = ""){

		$this -> idPpaidi = $pIdPpaidi;
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

		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
		$this -> ppaidiDAO = new PpaidiDAO($this -> idPpaidi, $this -> subtipo_de_producto, $this -> abreviatura,
											$this -> subtipo_de_producto2, $this -> abreviatura2,
											$this -> subtipo_de_producto3, $this -> abreviatura3,
											$this -> subtipo_de_producto4, $this -> abreviatura4,
											$this -> subtipo_de_producto5, $this -> abreviatura5,
											$this -> valor_maximo, $this -> valor_indicador,
											$this -> valor_maximo2, $this -> valor_indicador2,
											$this -> valor_maximo3, $this -> valor_indicador3,
											$this -> valor_maximo4, $this -> valor_indicador4,
											$this -> valor_maximo5, $this -> valor_indicador5,
											$this -> grupo_de_investigacion);
		$this -> connection = new Connection();
	}

	function insert(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> insert());
		$this -> connection -> run($this -> ppaidiDAO -> insert2());
		$this -> connection -> run($this -> ppaidiDAO -> insert3());
		$this -> connection -> run($this -> ppaidiDAO -> insert4());
		$this -> connection -> run($this -> ppaidiDAO -> insert5());
		$this -> connection -> close();
	}

	function update(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> update());
		$this -> connection -> close();
	}

	function select(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> select());
		$result = $this -> connection -> fetchRow();
		$this -> connection -> close();
		$this -> idPpaidi = $result[0];
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
		$this -> connection -> run($this -> ppaidiDAO -> selectAll());
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2],
				"", "", "", "",
				"", "","", "",
				$result[3], $result[4],"", "", "",
				"","", "", "",
				"", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function selectAllByGrupo_de_investigacion(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> selectAllByGrupo_de_investigacion());
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2],
				"", "", "", "",
				"", "","", "",
				$result[3], $result[4],"", "", "",
				"","", "", "",
				"", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function selectAllOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> selectAllOrder($order, $dir));
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2],
				"", "", "", "",
				"", "","", "",
				$result[3], $result[4],"", "", "",
				"","", "", "",
				"", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function selectAllByGrupo_de_investigacionOrder($order, $dir){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> selectAllByGrupo_de_investigacionOrder($order, $dir));
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2],
				"", "", "", "",
				"", "","", "",
				$result[3], $result[4],"", "", "",
				"","", "", "",
				"", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function search($search){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> search($search));
		$ppaidis = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($ppaidis, new Ppaidi($result[0], $result[1], $result[2],
				"", "", "", "",
				"", "","", "",
				$result[3], $result[4],"", "", "",
				"","", "", "",
				"", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $ppaidis;
	}

	function delete(){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> delete());
		$success = $this -> connection -> querySuccess();
		$this -> connection -> close();
		return $success;
	}

	function consultarTotalRegistros($id){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> consultarTotalRegistros($id));
		$this -> connection -> close();
		$resultado = $this -> connection -> fetchRow();
		return $resultado[0];
	}

	function consultarGraficaPpaidi($id){
		$this -> connection -> open();
		$this -> connection -> run($this -> ppaidiDAO -> consultarGraficaPpaidi($id));
		$pcs = array();
		while ($result = $this -> connection -> fetchRow()){
			$grupo_de_investigacion = new Grupo_de_investigacion($result[5]);
			$grupo_de_investigacion -> select();
			array_push($pcs, new Ppaidi($result[0], $result[1], $result[2],
				"", "", "", "",
				"", "","", "",
				$result[3], $result[4],"", "", "",
				"","", "", "",
				"", $grupo_de_investigacion));
		}
		$this -> connection -> close();
		return $pcs;
	}
}
?>
