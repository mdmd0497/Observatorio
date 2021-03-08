<?php
$processed=false;
$subtipo_de_producto="Productos Tecnologicos Certificados o Validados";
if(isset($_POST['subtipo_de_producto'])){
	$subtipo_de_producto=$_POST['subtipo_de_producto'];
}
$abreviatura="TEC";
if(isset($_POST['abreviatura'])){
	$abreviatura=$_POST['abreviatura'];
}

$subtipo_de_producto2="Productos Empresariales";
if(isset($_POST['subtipo_de_producto2'])){
    $subtipo_de_producto2=$_POST['subtipo_de_producto2'];
}
$abreviatura2="EMP";
if(isset($_POST['abreviatura2'])){
    $abreviatura2=$_POST['abreviatura2'];
}

$subtipo_de_producto3="Regulaciones, Normas y Reglamentos Tecnicos";
if(isset($_POST['subtipo_de_producto3'])){
    $subtipo_de_producto3=$_POST['subtipo_de_producto3'];
}
$abreviatura3="RNL";
if(isset($_POST['abreviatura3'])){
    $abreviatura3=$_POST['abreviatura3'];
}

$subtipo_de_producto4="Consultorias Cientificas y Tecnologicas";
if(isset($_POST['subtipo_de_producto4'])){
    $subtipo_de_producto4=$_POST['subtipo_de_producto4'];
}
$abreviatura4="CON";
if(isset($_POST['abreviatura4'])){
    $abreviatura4=$_POST['abreviatura4'];
}

$subtipo_de_producto5="Registros de Acuerdos de licencia para la explotacion de obras de AAD protegidas por derechos de autor";
if(isset($_POST['subtipo_de_producto5'])){
    $subtipo_de_producto5=$_POST['subtipo_de_producto5'];
}
$abreviatura5="MR";
if(isset($_POST['abreviatura5'])){
    $abreviatura5=$_POST['abreviatura5'];
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
    $valor_indicador5=$_POST['valor_indicador'];
}

$grupo_de_investigacion="";
if(isset($_POST['grupo_de_investigacion'])){
	$grupo_de_investigacion=$_POST['grupo_de_investigacion'];
}
if(isset($_GET['idGrupo_de_investigacion'])){
	$grupo_de_investigacion=$_GET['idGrupo_de_investigacion'];
}

$registros = new Ppaidi();
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
            for ($i = 1; $i <= 5; $i++) {
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
            }

        }

        //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
        unlink($destino);

        $newPpaidi = new Ppaidi("", $subtipo_de_producto, $abreviatura,
            $subtipo_de_producto2, $abreviatura2,
            $subtipo_de_producto3, $abreviatura3,
            $subtipo_de_producto4, $abreviatura4,
            $subtipo_de_producto5, $abreviatura5,
            $valor_maximo, $valor_indicador,
            $valor_maximo2, $valor_indicador2,
            $valor_maximo3, $valor_indicador3,
            $valor_maximo4, $valor_indicador4,
            $valor_maximo5, $valor_indicador5,
            $grupo_de_investigacion);

        $newPpaidi->insert();
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
            $logAdministrador = new LogAdministrador("", "Crear Ppaidi", "Subtipo_de_producto: " . $subtipo_de_producto . "; Abreviatura: " . $abreviatura . "; Valor_maximo: " . $valor_maximo . "; Valor_indicador: " . $valor_indicador . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
            $logAdministrador->insert();
        } else if ($_SESSION['entity'] == 'Usuario_ud') {
            $logUsuario_ud = new LogUsuario_ud("", "Crear Ppaidi", "Subtipo_de_producto: " . $subtipo_de_producto . "; Abreviatura: " . $abreviatura . "; Valor_maximo: " . $valor_maximo . "; Valor_indicador: " . $valor_indicador . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
            $logUsuario_ud->insert();
        } else if ($_SESSION['entity'] == 'Grupo_de_investigacion') {
            $logGrupo_de_investigacion = new LogGrupo_de_investigacion("", "Crear Ppaidi", "Subtipo_de_producto: " . $subtipo_de_producto . "; Abreviatura: " . $abreviatura . "; Valor_maximo: " . $valor_maximo . "; Valor_indicador: " . $valor_indicador . "; Grupo_de_investigacion: " . $nameGrupo_de_investigacion, date("Y-m-d"), date("H:i:s"), $user_ip, PHP_OS, $browser, $_SESSION['id']);
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
					<h4 class="card-title">Crear Ppaidi</h4>
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
					<form id="form" method="post" action="index.php?pid=<?php echo base64_encode("ui/ppaidi/insertPpaidi.php") ?>" enctype="multipart/form-data" class="bootstrap-form needs-validation"   >
						<div class="form-group">
							<label>Subtipo de producto</label>
                            <?php $subtipo_de_producto = "Productos Tecnologicos Certificados o Validados" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto" value="<?php echo $subtipo_de_producto?>" disabled>

						</div>
						<div class="form-group">
							<label>Abreviatura</label>
                            <?php $abreviatura = "TEC" ?>
                            <input type="text" class="form-control" name="abreviatura" value="<?php echo $abreviatura?>"disabled>
						</div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto2 = "Productos Empresariales" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto2" value="<?php echo $subtipo_de_producto2?>" disabled>

                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura2 = "EMP" ?>
                            <input type="text" class="form-control" name="abreviatura2" value="<?php echo $abreviatura2?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto3 = "Regulaciones, Normas y Reglamentos Tecnicos" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto3" value="<?php echo $subtipo_de_producto3?>" disabled>

                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura3 = "RNL" ?>
                            <input type="text" class="form-control" name="abreviatura3" value="<?php echo $abreviatura3?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto4 = "Consultorias Cientificas y Tecnologicas" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto4" value="<?php echo $subtipo_de_producto4?>" disabled>

                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura4 = "CON" ?>
                            <input type="text" class="form-control" name="abreviatura4" value="<?php echo $abreviatura4?>"disabled>
                        </div>
                        <div class="form-group">
                            <label>Subtipo de producto</label>
                            <?php $subtipo_de_producto5 = "Registros de Acuerdos de licencia para la explotacion de obras de AAD protegidas por derechos de autor" ?>
                            <input type="text" class="form-control" name="subtipo_de_producto5" value="<?php echo $subtipo_de_producto5?>" disabled>

                        </div>
                        <div class="form-group">
                            <label>Abreviatura</label>
                            <?php $abreviatura5 = "MR" ?>
                            <input type="text" class="form-control" name="abreviatura5" value="<?php echo $abreviatura5?>"disabled>
                        </div>
                        <div>
                            <!-- FORMULARIO PARA SOICITAR LA CARGA DEL EXCEL -->
                            Selecciona el archivo a importar:
                            <input type="file" name="excel" required/>
                            <!--                                <input type='submit' name='enviar'  value="Importar"  />-->
                            <!-- CARGA LA MISMA PAGINA MANDANDO LA VARIABLE upload -->
                        </div>
					<div class="form-group">
						<label>Grupo_de_investigacion*</label>
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
