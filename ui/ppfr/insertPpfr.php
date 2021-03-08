<?php
$processed=false;
$subtipo_de_producto="Tesis de Doctorado";
if(isset($_POST['subtipo_de_producto'])){
    $subtipo_de_producto=$_POST['subtipo_de_producto'];
}
$abreviatura="TD";
if(isset($_POST['abreviatura'])){
    $abreviatura=$_POST['abreviatura'];
}

$subtipo_de_producto2="Trabajo de Grado de Maestria";
if(isset($_POST['subtipo_de_producto2'])){
    $subtipo_de_producto2=$_POST['subtipo_de_producto2'];
}
$abreviatura2="TM";
if(isset($_POST['abreviatura2'])){
    $abreviatura2=$_POST['abreviatura2'];
}

$subtipo_de_producto3="Trabajo de grado de pregrado";
if(isset($_POST['subtipo_de_producto3'])){
    $subtipo_de_producto3=$_POST['subtipo_de_producto3'];
}
$abreviatura3="TG";
if(isset($_POST['abreviatura3'])){
    $abreviatura3=$_POST['abreviatura3'];
}

$subtipo_de_producto4="Proyectos de investigacion y Desarrollo";
if(isset($_POST['subtipo_de_producto4'])){
    $subtipo_de_producto4=$_POST['subtipo_de_producto4'];
}
$abreviatura4="PID";
if(isset($_POST['abreviatura4'])){
    $abreviatura4=$_POST['abreviatura4'];
}

$subtipo_de_producto5="Proyectos de investigacion + creacion";
if(isset($_POST['subtipo_de_producto5'])){
    $subtipo_de_producto5=$_POST['subtipo_de_producto5'];
}
$abreviatura5="PIC";
if(isset($_POST['abreviatura5'])){
    $abreviatura5=$_POST['abreviatura5'];
}

$subtipo_de_producto6="Proyectos de investigacion, Desarrollo e Innovacion (ID+I)";
if(isset($_POST['subtipo_de_producto6'])){
    $subtipo_de_producto6=$_POST['subtipo_de_producto6'];
}
$abreviatura6="PF";
if(isset($_POST['abreviatura6'])){
    $abreviatura6=$_POST['abreviatura6'];
}

$subtipo_de_producto7="Proyectos de extension y responsabilidad social en CTI";
if(isset($_POST['subtipo_de_producto7'])){
    $subtipo_de_producto7=$_POST['subtipo_de_producto7'];
}
$abreviatura7="PERS";
if(isset($_POST['abreviatura7'])){
    $abreviatura7=$_POST['abreviatura7'];
}

$subtipo_de_producto8="Apoyo a Programas de Formacion";
if(isset($_POST['subtipo_de_producto8'])){
    $subtipo_de_producto8=$_POST['subtipo_de_producto8'];
}
$abreviatura8="AP";
if(isset($_POST['abreviatura8'])){
    $abreviatura8=$_POST['abreviatura8'];
}

$subtipo_de_producto9="Acompañamientos y asesorías de linea temática del Programa Ondas";
if(isset($_POST['subtipo_de_producto9'])){
    $subtipo_de_producto9=$_POST['subtipo_de_producto9'];
}
$abreviatura9="APO";
if(isset($_POST['abreviatura9'])){
    $abreviatura9=$_POST['abreviatura9'];
}

$valor_maximo="";
if(isset($_POST['valor_maximo'])){
    $valor_maximo=$_POST['valor_maximo'];
}
$valor_indicador="";
if(isset($_POST['valor_indicador'])){
    $valor_indicador=$_POST['valor_indicador'];
}

$valor_maximo2="";
if(isset($_POST['valor_maximo2'])){
    $valor_maximo2=$_POST['valor_maximo2'];
}
$valor_indicador2="";
if(isset($_POST['valor_indicador2'])){
    $valor_indicador2=$_POST['valor_indicador2'];
}

$valor_maximo3="";
if(isset($_POST['valor_maximo3'])){
    $valor_maximo3=$_POST['valor_maximo3'];
}
$valor_indicador3="";
if(isset($_POST['valor_indicador3'])){
    $valor_indicador3=$_POST['valor_indicador3'];
}

$valor_maximo4="";
if(isset($_POST['valor_maximo4'])){
    $valor_maximo4=$_POST['valor_maximo4'];
}
$valor_indicador4="";
if(isset($_POST['valor_indicador4'])){
    $valor_indicador4=$_POST['valor_indicador4'];
}

$valor_maximo5="";
if(isset($_POST['valor_maximo5'])){
    $valor_maximo5=$_POST['valor_maximo5'];
}
$valor_indicador5="";
if(isset($_POST['valor_indicador5'])){
    $valor_indicador5=$_POST['valor_indicador5'];
}

$valor_maximo6="";
if(isset($_POST['valor_maximo6'])){
    $valor_maximo6=$_POST['valor_maximo6'];
}
$valor_indicador6="";
if(isset($_POST['valor_indicador6'])){
    $valor_indicador6=$_POST['valor_indicador6'];
}

$valor_maximo7="";
if(isset($_POST['valor_maximo7'])){
    $valor_maximo7=$_POST['valor_maximo7'];
}
$valor_indicador7="";
if(isset($_POST['valor_indicador7'])){
    $valor_indicador7=$_POST['valor_indicador7'];
}

$valor_maximo8="";
if(isset($_POST['valor_maximo8'])){
    $valor_maximo8=$_POST['valor_maximo8'];
}
$valor_indicador8="";
if(isset($_POST['valor_indicador8'])){
    $valor_indicador8=$_POST['valor_indicador8'];
}

$valor_maximo9="";
if(isset($_POST['valor_maximo9'])){
    $valor_maximo9=$_POST['valor_maximo9'];
}
$valor_indicador9="";
if(isset($_POST['valor_indicador9'])){
    $valor_indicador9=$_POST['valor_indicador9'];
}

$grupo_de_investigacion="";
if(isset($_POST['grupo_de_investigacion'])){
	$grupo_de_investigacion=$_POST['grupo_de_investigacion'];
}
if(isset($_GET['idGrupo_de_investigacion'])){
	$grupo_de_investigacion=$_GET['idGrupo_de_investigacion'];
}

$registros = new Ppfr();
$resultado = $registros -> consultarTotalRegistros($grupo_de_investigacion);
$procesado = true;

if ($resultado > 0){
    $procesado = false;
}else {

    if (isset($_POST['insert'])) {

        //cargamos el archivo al servidor con el mismo nombre
        //solo le agregue el sufijo bak_
        $archivo = $_FILES['excel']['name'];
        $tipo = $_FILES['excel']['type'];
        $destino = "bak_" . $archivo;
        if (copy($_FILES['excel']['tmp_name'], $destino)) {
            //echo "Archivo Cargado Con Éxito";
        } else {
            //echo "Error Al Cargar el Archivo";
        }
        if (file_exists("bak_" . $archivo)) {
            /** Clases necesarias */
            require_once('Classes/PHPExcel.php');
            require_once('Classes/PHPExcel/Reader/Excel2007.php');
            // Cargando la hoja de cálculo
            $objReader = new PHPExcel_Reader_Excel2007();
            $objPHPExcel = $objReader->load("bak_" . $archivo);
            $objFecha = new PHPExcel_Shared_Date();
            // Asignar hoja de excel activa
            $objPHPExcel->setActiveSheetIndex(0);
            //conectamos con la base de datos
            //$cn = mysqli_connect("localhost", "root", "") or die("ERROR EN LA CONEXION");
            //$cn = new mysqli("localhost", "root", "", "prueba") or die ("ERROR AL CONECTAR A LA BD");
            //$db = mysqli_select_db("prueba", $cn) or die("ERROR AL CONECTAR A LA BD");
            // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 1; $i <= 9; $i++) {
                $_DATOS_EXCEL[$i]['maximo'] = $objPHPExcel->getActiveSheet()->getCell('A' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['valor'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
            }

        } //si por algo no cargo el archivo bak_
        else {
            echo "Necesitas primero importar el archivo";
        }
        $errores = 0;
        //recorremos el arreglo multidimensional
        //para ir recuperando los datos obtenidos
        //del excel e ir insertandolos en la BD
        foreach ($_DATOS_EXCEL as $campo => $valor) {

            switch ($campo) {
                case 1:
                    foreach ($valor as $campo2 => $valor2) {
                        $valor_maximo = $_DATOS_EXCEL[$campo]['maximo'];
                        $valor_indicador = $_DATOS_EXCEL[$campo]['valor'];
                    }
                    break;
                case 2:
                    foreach ($valor as $campo2 => $valor2) {
                        $valor_maximo2 = $_DATOS_EXCEL[$campo]['maximo'];
                        $valor_indicador2 = $_DATOS_EXCEL[$campo]['valor'];
                    }
                    break;
                case 3:
                    foreach ($valor as $campo2 => $valor2) {
                        $valor_maximo3 = $_DATOS_EXCEL[$campo]['maximo'];
                        $valor_indicador3 = $_DATOS_EXCEL[$campo]['valor'];
                    }
                    break;
                case 4:
                    foreach ($valor as $campo2 => $valor2) {
                        $valor_maximo4 = $_DATOS_EXCEL[$campo]['maximo'];
                        $valor_indicador4 = $_DATOS_EXCEL[$campo]['valor'];
                    }
                    break;
                case 5:
                    foreach ($valor as $campo2 => $valor2) {
                        $valor_maximo5 = $_DATOS_EXCEL[$campo]['maximo'];
                        $valor_indicador5 = $_DATOS_EXCEL[$campo]['valor'];
                    }
                    break;
                case 6:
                    foreach ($valor as $campo2 => $valor2) {
                        $valor_maximo6 = $_DATOS_EXCEL[$campo]['maximo'];
                        $valor_indicador6 = $_DATOS_EXCEL[$campo]['valor'];
                    }
                    break;
                case 7:
                    foreach ($valor as $campo2 => $valor2) {
                        $valor_maximo7 = $_DATOS_EXCEL[$campo]['maximo'];
                        $valor_indicador7 = $_DATOS_EXCEL[$campo]['valor'];
                    }
                    break;
                case 8:
                    foreach ($valor as $campo2 => $valor2) {
                        $valor_maximo8 = $_DATOS_EXCEL[$campo]['maximo'];
                        $valor_indicador8 = $_DATOS_EXCEL[$campo]['valor'];
                    }
                    break;
                case 9:
                    foreach ($valor as $campo2 => $valor2) {
                        $valor_maximo9 = $_DATOS_EXCEL[$campo]['maximo'];
                        $valor_indicador9 = $_DATOS_EXCEL[$campo]['valor'];
                    }
                    break;
            }

        }

        //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
        unlink($destino);

        $newPpfr = new Ppfr("", $subtipo_de_producto, $abreviatura,
            $subtipo_de_producto2, $abreviatura2,
            $subtipo_de_producto3, $abreviatura3,
            $subtipo_de_producto4, $abreviatura4,
            $subtipo_de_producto5, $abreviatura5,
            $subtipo_de_producto6, $abreviatura6,
            $subtipo_de_producto7, $abreviatura7,
            $subtipo_de_producto8, $abreviatura8,
            $subtipo_de_producto9, $abreviatura9,
            $valor_maximo, $valor_indicador,
            $valor_maximo2, $valor_indicador2,
            $valor_maximo3, $valor_indicador3,
            $valor_maximo4, $valor_indicador4,
            $valor_maximo5, $valor_indicador5,
            $valor_maximo6, $valor_indicador6,
            $valor_maximo7, $valor_indicador7,
            $valor_maximo8, $valor_indicador8,
            $valor_maximo9, $valor_indicador9,
            $grupo_de_investigacion);

        $newPpfr->insert();
        $objGrupo_de_investigacion = new Grupo_de_investigacion($grupo_de_investigacion);
        $objGrupo_de_investigacion->select();
        $nameGrupo_de_investigacion = $objGrupo_de_investigacion->getNombre();
        $user_ip = getenv('REMOTE_ADDR');
        $agent = $_SERVER["HTTP_USER_AGENT"];
        $browser = "-";
        if (preg_match('/MSIE (\d+\.\d+);/', $agent)) {
            $browser = "Internet Explorer";
        } else if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $agent)) {
            $browser = "Chrome";
        } else if (preg_match('/Edge\/\d+/', $agent)) {
            $browser = "Edge";
        } else if (preg_match('/Firefox[\/\s](\d+\.\d+)/', $agent)) {
            $browser = "Firefox";
        } else if (preg_match('/OPR[\/\s](\d+\.\d+)/', $agent)) {
            $browser = "Opera";
        } else if (preg_match('/Safari[\/\s](\d+\.\d+)/', $agent)) {
            $browser = "Safari";
        }
        if ($_SESSION['entity'] == 'Administrador') {
            $logAdministrador = new LogAdministrador("", "Crear Ppfr", "Subtipo_de_producto: " . $subtipo_de_producto . "; Abreviatura: " . $abreviatura . "; Valor_maximo: " . $valor_maximo . "; Valor_indicador: " . $valor_indicador . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
            $logAdministrador->insert();
        } else if ($_SESSION['entity'] == 'Usuario_ud') {
            $logUsuario_ud = new LogUsuario_ud("", "Crear Ppfr", "Subtipo_de_producto: " . $subtipo_de_producto . "; Abreviatura: " . $abreviatura . "; Valor_maximo: " . $valor_maximo . "; Valor_indicador: " . $valor_indicador . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
            $logUsuario_ud->insert();
        } else if ($_SESSION['entity'] == 'Grupo_de_investigacion') {
            $logGrupo_de_investigacion = new LogGrupo_de_investigacion("", "Crear Ppfr", "Subtipo_de_producto: " . $subtipo_de_producto . "; Abreviatura: " . $abreviatura . "; Valor_maximo: " . $valor_maximo . "; Valor_indicador: " . $valor_indicador . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
            $logGrupo_de_investigacion->insert();
        }
        $processed = true;
    }
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Crear Ppfr</h4>
				</div>
				<div class="card-body">
                    <?php if($processed){ ?>
                        <div class="alert alert-success" >Datos Ingresados
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo "<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $campo REGISTROS Y $errores ERRORES</center></strong>";?>
                        </div>
                    <?php }elseif (!$procesado){ ?>
                        <div class="alert alert-danger" >Datos existentes
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
					<form id="form" method="post" action="index.php?pid=<?php echo base64_encode("ui/ppfr/insertPpfr.php") ?>" enctype="multipart/form-data" class="bootstrap-form needs-validation"   >
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto = "Tesis de Doctorado" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto" value="<?php echo $subtipo_de_producto?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura = "TD" ?>
                            <input type="text" class="form-control" name="abreviatura" value="<?php echo $abreviatura?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto2 = "Trabajo de Grado de Maestria" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto2" value="<?php echo $subtipo_de_producto2?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura2 = "TM" ?>
                            <input type="text" class="form-control" name="abreviatura2" value="<?php echo $abreviatura2?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto3 = "Trabajo de grado de pregrado" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto3" value="<?php echo $subtipo_de_producto3?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura3 = "TG" ?>
                            <input type="text" class="form-control" name="abreviatura3" value="<?php echo $abreviatura3?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto4 = "Proyectos de investigacion y Desarrollo" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto4" value="<?php echo $subtipo_de_producto4?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura4 = "PID" ?>
                            <input type="text" class="form-control" name="abreviatura4" value="<?php echo $abreviatura4?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto5 = "Proyectos de investigacion + creacion" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto5" value="<?php echo $subtipo_de_producto5?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura5 = "PIC" ?>
                            <input type="text" class="form-control" name="abreviatura5" value="<?php echo $abreviatura5?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto6 = "Proyectos de investigacion, Desarrollo e Innovacion (ID+I)" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto6" value="<?php echo $subtipo_de_producto6?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura6 = "PF" ?>
                            <input type="text" class="form-control" name="abreviatura6" value="<?php echo $abreviatura6?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto7 = "Proyectos de extension y responsabilidad social en CTI" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto7" value="<?php echo $subtipo_de_producto7?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura7 = "PERS" ?>
                            <input type="text" class="form-control" name="abreviatura7" value="<?php echo $abreviatura7?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto8 = "Apoyo a Programas de Formacion" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto8" value="<?php echo $subtipo_de_producto8?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura8 = "AP" ?>
                            <input type="text" class="form-control" name="abreviatura8" value="<?php echo $abreviatura8?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto9 = "Acompa&ntilde;amientos y asesorías de linea temetica del Programa Ondas" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto9" value="<?php echo $subtipo_de_producto9?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura9 = "APO" ?>
                            <input type="text" class="form-control" name="abreviatura9" value="<?php echo $abreviatura9?>"disabled>
                        </div>
                        <div>
                            <!-- FORMULARIO PARA SOICITAR LA CARGA DEL EXCEL -->
                            Selecciona el archivo a importar:
                            <input type="file" name="excel" required/>
                            <!--                                <input type='submit' name='enviar'  value="Importar"  />-->
                            <!-- CARGA LA MISMA PAGINA MANDANDO LA VARIABLE upload -->
                        </div>
					<div class="form-group">
						<label>Grupo de investigacion*</label>
						<select class="form-control" name="grupo_de_investigacion">
							<?php
							$objGrupo_de_investigacion = new Grupo_de_investigacion();
							$grupo_de_investigacions = $objGrupo_de_investigacion -> selectAllOrder("nombre", "asc");
							foreach($grupo_de_investigacions as $currentGrupo_de_investigacion){
								echo "<option value='" . $currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() . "'";
								if($currentGrupo_de_investigacion -> getIdGrupo_de_investigacion() == $grupo_de_investigacion){
									echo " selected";
								}
								echo ">" . $currentGrupo_de_investigacion -> getNombre() . "</option>";
							}
							?>
						</select>
					</div>
						<button type="submit" class="btn btn-info" name="insert">Crear</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
