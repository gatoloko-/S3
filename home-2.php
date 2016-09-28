<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>HTML</title>
		<meta name="description" content="">
		<meta name="author" content="rigoberto cortazar montiel">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<?php include 'i.php'; ?>
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
	<style>
		.ui.table td, th{
			padding:3px;
			font-size: 12px;
		}
	</style>
	<?php include 'nav.php'; ?>
	<div id="external_filter_container"></div>
	<table class="ui celled striped table" id="dash">
		<thead>
			<tr>
				<th>ID</th>
				<th>Cliente</th>
				<th>Ingreso</th>
				<th>AGA</th>
				<th>Origen</th>
				<th>Destino</th>
				<th>Recogida</th>
				<th>Hora</th>
				<th>Obs. Ope</th>
				<th>Obs. Com</th>
				<th>Coordinador</th>
				<th>Vendedor</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>20x3</td>
				<td>Transaco</td>
				<td>29-09-2016</td>
				<td>Aguirre</td>
				<td>VALPARAISO</td>
				<td>SANTIAGO</td>
				<td>30-09-2016</td>
				<td>15:30</td>
				<td></td>
				<td></td>
				<td>jparra</td>
				<td>Marcelino</td>
			</tr>
			<tr>
				<td>40x2</td>
				<td>Monsanto</td>
				<td>30-09-2016</td>
				<td>Aguirre</td>
				<td>SAN ANTONIO</td>
				<td>SANTIAGO</td>
				<td>30-09-2016</td>
				<td>15:30</td>
				<td></td>
				<td></td>
				<td>jobregon</td>
				<td>Elizabeth</td>
			</tr>
		</tbody>
	</table>
	
	
<script>
$('.ui.dropdown').dropdown();
$(document).ready(function(){
  $('#dash').dataTable().yadcf([
	    {column_number : 1,  column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"},
	    //{column_number : 3,  filter_type: "range_number_slider", filter_container_id: "external_filter_container"},
	    //{column_number : 2, data: ["Yes", "No"], filter_default_label: "Select Yes/No"},
	    //{column_number : 3, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 4, column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"},
	    {column_number : 10, column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"},
	    {column_number : 11, column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"}]);
	    //{column_number : 9,  column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"}
});
</script>
	</body>
</html>
