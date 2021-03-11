<?php
$processed=false;
$grupo_de_investigacion="";
if(isset($_POST['grupo_de_investigacion'])){
    $grupo_de_investigacion=$_POST['grupo_de_investigacion'];
}
if(isset($_GET['idGrupo_de_investigacion'])){
    $grupo_de_investigacion=$_GET['idGrupo_de_investigacion'];
}

if (isset($_POST['generar'])) {
    $ppaidi = new Ppaidi();
    $registros = $ppaidi->consultarGraficaPpaidi($grupo_de_investigacion);

    $datos = "['Abreviatura', 'Valor'], ";
    foreach ($registros as $r) {
        $datos .= "['" . $r->getAbreviatura() . " - ".$r->getSubtipo_de_producto()."', " . 100 * ($r->getValor_indicador() / $r->getValor_maximo()) . "], ";
    }
    $processed = true;
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gr&aacute;fica Perfil de productos resultado de actividades de Desarrollo Tecnológico e Innovación</h4>
                </div>
                <div class="card-body">

                    <form id="form" method="post" action="index.php?pid=<?php echo base64_encode("ui/ppaidi/graficaPpaidi.php") ?>" class="bootstrap-form needs-validation"   >
                        <div class="form-group">
                            <label>Grupo de investigaci&oacute;n</label>
                            <?php
                            $objGrupo_de_investigacion = new Grupo_de_investigacion();
                            $objGrupo_de_investigacion -> selectG($_SESSION['id']);
                            if ($_SESSION['entity'] == 'Grupo_de_investigacion'){
                                ?>
                                <input type="text" class="form-control"  value="<?php echo $objGrupo_de_investigacion -> getNombre()?>" disabled>
                                <input type="hidden" class="form-control" name="grupo_de_investigacion"  value="<?php echo $objGrupo_de_investigacion -> getIdGrupo_de_investigacion()?>">
                            <?php }elseif($_SESSION['entity'] == 'Administrador' || $_SESSION['entity'] == 'Usuario_ud'){?>
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
                            <?php }?>
                        </div>
                        <button type="submit" class="btn btn-info" name="generar">Generar</button>
                    </form>
                    <?php if($processed){
                        $objGrupo_de_investigacion = new Grupo_de_investigacion();
                        $objGrupo_de_investigacion -> selectG($grupo_de_investigacion);
                        ?>
                        <br>
                        <div class="alert alert-success" >Gr&aacute;fica de <?php echo $objGrupo_de_investigacion -> getNombre() ?>
                        </div>
                        <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {

                                var data = google.visualization.arrayToDataTable([
                                    <?php echo $datos ?>
                                ]);

                                var opt_pieslicetext = null;
                                var opt_tooltip_trigger = null;
                                var opt_color = null;
                                if (data.getValue(1,1) == 0 && data.getValue(0,1) == 0) {
                                    opt_pieslicetext='none';
                                    opt_tooltip_trigger='none'
                                    data.setCell(1,1,.1);
                                    opt_color= ['#D3D3D3'];
                                }

                                var options = {
                                    title : "Perfil de productos resultado de actividades de Desarrollo Tecnológico e Innovación",
                                    pieHole: 0.4,
                                    sliceVisibilityThreshold:0,
                                    pieSliceText: opt_pieslicetext,
                                    tooltip: { trigger: opt_tooltip_trigger },
                                    colors: opt_color,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchartPpaidi'));
                                chart.draw(data, options);
                            }
                        </script>
                        <div class="text-center" id="donutchartPpaidi" style="width: 600px; height: 500px;"></div>
                        <br>
                        <div class="alert alert-success" >Gr&aacute;fica de <?php echo $objGrupo_de_investigacion -> getNombre() ?>
                        </div>
                        <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {

                                var data = google.visualization.arrayToDataTable([
                                    <?php echo $datos ?>
                                ]);

                                var groupData = google.visualization.data.group(
                                    data,
                                    [{column: 0, modifier: function () {return 'total'}, type:'string'}],
                                    [{column: 1, aggregation: google.visualization.data.sum, type: 'number'}]
                                );

                                var formatPercent = new google.visualization.NumberFormat({
                                    pattern: '#,##0.0%'
                                });

                                var formatShort = new google.visualization.NumberFormat({
                                    pattern: 'short'
                                });

                                var view = new google.visualization.DataView(data);
                                view.setColumns([0, 1, {
                                    calc: function (dt, row) {
                                        var amount =  formatShort.formatValue(dt.getValue(row, 1));
                                        var percent = formatPercent.formatValue(dt.getValue(row, 1) / groupData.getValue(0, 1));
                                        return amount + "%";
                                    },
                                    type: 'string',
                                    role: 'annotation'
                                }]);

                                var options = {

                                    annotations: {
                                        alwaysOutside: true
                                    },
                                    title : "Perfil de productos resultado de actividades de Desarrollo Tecnológico e Innovación",
                                    width: 700,
                                    height: 700,
                                    bar: {groupWidth: "15%"},
                                    hAxis: {
                                        viewWindow: {
                                            min: 0,
                                            max: 100
                                        },
                                        ticks: [0, 25, 50, 75, 100] // display labels every 25
                                    }
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('barchartPpaidi'));
                                chart.draw(view, options);
                            }
                        </script>
                        <div class="text-center" id="barchartPpaidi" style="width: 700px; height: 700px;"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
