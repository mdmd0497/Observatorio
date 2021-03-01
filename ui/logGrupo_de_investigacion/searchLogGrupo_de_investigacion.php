<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Buscar Log Grupo_de_investigacion</h4>
		</div>
		<div class="card-body">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<input type="text" class="form-control" id="search" placeholder="Buscar Log Grupo_de_investigacion" autocomplete="off" />
					</div>
				</div>
			</div>
			<div id="searchResult"></div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$("#search").keyup(function(){
		if($("#search").val().length > 2){
			var search = $("#search").val().replace(" ", "%20");
			var path = "indexAjax.php?pid=<?php echo base64_encode("ui/logGrupo_de_investigacion/searchLogGrupo_de_investigacionAjax.php"); ?>&search="+search;
			$("#searchResult").load(path);
		}
	});
});
</script>