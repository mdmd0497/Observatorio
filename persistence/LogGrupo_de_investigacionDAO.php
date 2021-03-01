<?php
class LogGrupo_de_investigacionDAO{
	private $idLogGrupo_de_investigacion;
	private $accion;
	private $informacion;
	private $fecha;
	private $hora;
	private $ip;
	private $so;
	private $explorador;
	private $grupo_de_investigacion;

	function LogGrupo_de_investigacionDAO($pIdLogGrupo_de_investigacion = "", $pAccion = "", $pInformacion = "", $pFecha = "", $pHora = "", $pIp = "", $pSo = "", $pExplorador = "", $pGrupo_de_investigacion = ""){
		$this -> idLogGrupo_de_investigacion = $pIdLogGrupo_de_investigacion;
		$this -> accion = $pAccion;
		$this -> informacion = $pInformacion;
		$this -> fecha = $pFecha;
		$this -> hora = $pHora;
		$this -> ip = $pIp;
		$this -> so = $pSo;
		$this -> explorador = $pExplorador;
		$this -> grupo_de_investigacion = $pGrupo_de_investigacion;
	}

	function insert(){
		return "insert into LogGrupo_de_investigacion(accion, informacion, fecha, hora, ip, so, explorador, grupo_de_investigacion_idGrupo_de_investigacion)
				values('" . $this -> accion . "', '" . $this -> informacion . "', '" . $this -> fecha . "', '" . $this -> hora . "', '" . $this -> ip . "', '" . $this -> so . "', '" . $this -> explorador . "', '" . $this -> grupo_de_investigacion . "')";
	}

	function update(){
		return "update LogGrupo_de_investigacion set 
				accion = '" . $this -> accion . "',
				informacion = '" . $this -> informacion . "',
				fecha = '" . $this -> fecha . "',
				hora = '" . $this -> hora . "',
				ip = '" . $this -> ip . "',
				so = '" . $this -> so . "',
				explorador = '" . $this -> explorador . "',
				grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'	
				where idLogGrupo_de_investigacion = '" . $this -> idLogGrupo_de_investigacion . "'";
	}

	function select() {
		return "select idLogGrupo_de_investigacion, accion, informacion, fecha, hora, ip, so, explorador, grupo_de_investigacion_idGrupo_de_investigacion
				from LogGrupo_de_investigacion
				where idLogGrupo_de_investigacion = '" . $this -> idLogGrupo_de_investigacion . "'";
	}

	function selectAll() {
		return "select idLogGrupo_de_investigacion, accion, informacion, fecha, hora, ip, so, explorador, grupo_de_investigacion_idGrupo_de_investigacion
				from LogGrupo_de_investigacion";
	}

	function selectAllByGrupo_de_investigacion() {
		return "select idLogGrupo_de_investigacion, accion, informacion, fecha, hora, ip, so, explorador, grupo_de_investigacion_idGrupo_de_investigacion
				from LogGrupo_de_investigacion
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idLogGrupo_de_investigacion, accion, informacion, fecha, hora, ip, so, explorador, grupo_de_investigacion_idGrupo_de_investigacion
				from LogGrupo_de_investigacion
				order by " . $orden . " " . $dir;
	}

	function selectAllByGrupo_de_investigacionOrder($orden, $dir) {
		return "select idLogGrupo_de_investigacion, accion, informacion, fecha, hora, ip, so, explorador, grupo_de_investigacion_idGrupo_de_investigacion
				from LogGrupo_de_investigacion
				where grupo_de_investigacion_idGrupo_de_investigacion = '" . $this -> grupo_de_investigacion . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idLogGrupo_de_investigacion, accion, informacion, fecha, hora, ip, so, explorador, grupo_de_investigacion_idGrupo_de_investigacion
				from LogGrupo_de_investigacion
				where accion like '%" . $search . "%' or fecha like '%" . $search . "%' or hora like '%" . $search . "%' or ip like '%" . $search . "%' or so like '%" . $search . "%' or explorador like '%" . $search . "%'
				order by fecha desc, hora desc";
	}
}
?>
