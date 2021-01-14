<?php
class LogUsuario_udDAO{
	private $idLogUsuario_ud;
	private $accion;
	private $informacion;
	private $fecha;
	private $hora;
	private $ip;
	private $so;
	private $explorador;
	private $usuario_ud;

	function LogUsuario_udDAO($pIdLogUsuario_ud = "", $pAccion = "", $pInformacion = "", $pFecha = "", $pHora = "", $pIp = "", $pSo = "", $pExplorador = "", $pUsuario_ud = ""){
		$this -> idLogUsuario_ud = $pIdLogUsuario_ud;
		$this -> accion = $pAccion;
		$this -> informacion = $pInformacion;
		$this -> fecha = $pFecha;
		$this -> hora = $pHora;
		$this -> ip = $pIp;
		$this -> so = $pSo;
		$this -> explorador = $pExplorador;
		$this -> usuario_ud = $pUsuario_ud;
	}

	function insert(){
		return "insert into LogUsuario_ud(accion, informacion, fecha, hora, ip, so, explorador, usuario_ud_idUsuario_ud)
				values('" . $this -> accion . "', '" . $this -> informacion . "', '" . $this -> fecha . "', '" . $this -> hora . "', '" . $this -> ip . "', '" . $this -> so . "', '" . $this -> explorador . "', '" . $this -> usuario_ud . "')";
	}

	function update(){
		return "update LogUsuario_ud set 
				accion = '" . $this -> accion . "',
				informacion = '" . $this -> informacion . "',
				fecha = '" . $this -> fecha . "',
				hora = '" . $this -> hora . "',
				ip = '" . $this -> ip . "',
				so = '" . $this -> so . "',
				explorador = '" . $this -> explorador . "',
				usuario_ud_idUsuario_ud = '" . $this -> usuario_ud . "'	
				where idLogUsuario_ud = '" . $this -> idLogUsuario_ud . "'";
	}

	function select() {
		return "select idLogUsuario_ud, accion, informacion, fecha, hora, ip, so, explorador, usuario_ud_idUsuario_ud
				from LogUsuario_ud
				where idLogUsuario_ud = '" . $this -> idLogUsuario_ud . "'";
	}

	function selectAll() {
		return "select idLogUsuario_ud, accion, informacion, fecha, hora, ip, so, explorador, usuario_ud_idUsuario_ud
				from LogUsuario_ud";
	}

	function selectAllByUsuario_ud() {
		return "select idLogUsuario_ud, accion, informacion, fecha, hora, ip, so, explorador, usuario_ud_idUsuario_ud
				from LogUsuario_ud
				where usuario_ud_idUsuario_ud = '" . $this -> usuario_ud . "'";
	}

	function selectAllOrder($orden, $dir){
		return "select idLogUsuario_ud, accion, informacion, fecha, hora, ip, so, explorador, usuario_ud_idUsuario_ud
				from LogUsuario_ud
				order by " . $orden . " " . $dir;
	}

	function selectAllByUsuario_udOrder($orden, $dir) {
		return "select idLogUsuario_ud, accion, informacion, fecha, hora, ip, so, explorador, usuario_ud_idUsuario_ud
				from LogUsuario_ud
				where usuario_ud_idUsuario_ud = '" . $this -> usuario_ud . "'
				order by " . $orden . " " . $dir;
	}

	function search($search) {
		return "select idLogUsuario_ud, accion, informacion, fecha, hora, ip, so, explorador, usuario_ud_idUsuario_ud
				from LogUsuario_ud
				where accion like '%" . $search . "%' or fecha like '%" . $search . "%' or hora like '%" . $search . "%' or ip like '%" . $search . "%' or so like '%" . $search . "%' or explorador like '%" . $search . "%'
				order by fecha desc, hora desc";
	}
}
?>
