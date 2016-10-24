
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
	<?php include 'nav.php'; ?>
<div class="ui stackable grid vista">
	<h1>Ordenes</h1>	
	<table class="ui fixed single line celled small table" id="dash">
		<thead>
			<tr>
                            <th width="60">N°</th>
                            <th width="80">Vendedor</th>
                            <th width="80">Coordinador</th>
                            <th width="110">Cliente</th>
                            <th width="60">ID</th>
                            <th width="90">Ingreso</th>
                            <th width="100">AGA</th>
                            <th width="110">Origen</th>
                            <th width="110">Destino</th>
                            <th width="90">Recogida</th>
                            <th width="50">Hora</th>
                            <th width="40">Obs</th>
			</tr>
		</thead>
		<tbody>
			<tr>
                            <td>650</td>
                            <td>Marcelino</td>
                            <td>jparra</td>
                            <td>Transaco</td>
                            <td style="background: #e8e800;"><a onclick="$('#detalle_orden').modal('show');">3x20</a></td>

                            <td>29-09-2016</td>
                            <td>Aguirre</td>
                            <td>VALPARAISO</td>
                            <td>SANTIAGO</td>
                            <td>30-09-2016</td>
                            <td>15:30</td>
                            <td><i class="warning sign icon" onclick="$('#observaciones').modal('show');"></i></td>
				
			</tr>
			<tr>
                            <td>690</td>
                            <td>Elizabeth</td>
                            <td>jobregon</td>
                            <td>Monsanto</td>
                            <td><a onclick="$('#detalle_orden_2').modal('show');">2x40</a></td>
                            <td>30-09-2016</td>
                            <td>Diaz</td>
                            <td>SAN ANTONIO</td>
                            <td>SANTIAGO</td>
                            <td>01-10-2016</td>
                            <td>15:30</td>
                            <td></td>
				
			</tr>
		</tbody>
	</table>
</div>


<div class="ui modal" id="observaciones">
	<div class="ui segment">
		<div class="ui comments">
		  <h3 class="ui dividing header">Observaciones</h3>
		  <div class="comment">
		    <div class="content">
		      <a class="author">Elizabeth</a>
		      <div class="metadata">
		        <span class="date">29-09-2016 5:42PM</span>
		      </div>
		      <div class="text">
		        El cliente requiere grua horquilla, facor detallar costo.
		      </div>
		    </div>
		  </div>
		  
		  <div class="comment">
		    <div class="content">
		      <a class="author">Jorge Parra</a>
		      <div class="metadata">
		        <span class="date">29-09-2016 5:42PM</span>
		      </div>
		      <div class="text">
		        EL costo para la grua es de $150,000 + IVA
		      </div>
		    </div>
		  </div>
  		</div>
  		
  		<form class="ui reply form">
	    <div class="field">
	      <textarea></textarea>
	    </div>
	    <div class="ui blue labeled submit icon button">
	      <i class="icon edit"></i> Observacion
	    </div>
	  </form>
	</div>
</div>

<div class="ui modal" id="detalle_orden">
	<div class="ui segment">
		<table class="ui fixed single line celled small table" id="table_det_orden">
			<thead>
				<th>ID</th>
				<th>ORIGEN</th>
				<th>DESTINO</th>
				<th>CONDUCTOR</th>
				<th>VEHICULO</th>
				<th>RECOGIDA</th>
				<th>HORA</th>
				<th>ENTREGA</th>
				<th>HORA</th>
			</thead>
			<tr>
				<td>KKTU-598-3</td>
				<td>VALPARAISO</td>
				<td>SANTIAGO</td>
				<td>JOSE FONSEA</td>
				<td>PPDE-89</td>
				<td>29-10-2016</td>
				<td>13:20</td>
				<td>28-10-2016</td>
				<td>09:30</td>
			</tr>
			<tr>
				<td>KKTU-600-3</td>
				<td>SAN ANTONIO</td>
				<td>SANTIAGO</td>
				<td>FREDDI FUENTES</td>
				<td>PPDE-96</td>
				<td>29-10-2016</td>
				<td>13:20</td>
				<td>28-10-2016</td>
				<td>09:30</td>
			</tr>
			<tr>
				<td>MEME-258-9</td>
				<td>VALPARAISO</td>
				<td>SANTIAGO</td>
				<td class="center aligned" ><i class="ui user icon"></i></td>
				<td></td>
				<td>29-10-2016</td>
				<td>13:20</td>
				<td>28-09-2016</td>
				<td>09:30</td>
			</tr>
		</table>
	</div>
</div>

<div class="ui modal" id="detalle_orden_2">
	<div class="ui segment">
		<table class="ui fixed single line celled small table" id="table_det_orden">
			<thead>
				<th>ID</th>
				<th>ORIGEN</th>
				<th>DESTINO</th>
				<th>CONDUCTOR</th>
				<th>VEHICULO</th>
				<th>RECOGIDA</th>
				<th>HORA</th>
				<th>ENTREGA</th>
				<th>HORA</th>
			</thead>
			<tr>
				<td>KKTU-985-3</td>
				<td>VALPARAISO</td>
				<td>SANTIAGO</td>
				<td>JOSE FONSEA</td>
				<td>PPDE-89</td>
				<td>29-10-2016</td>
				<td>13:20</td>
				<td>28-10-2016</td>
				<td>09:30</td>
			</tr>
			<tr>
				<td>KKTU-742-3</td>
				<td>SAN ANTONIO</td>
				<td>SANTIAGO</td>
				<td>FREDDI FUENTES</td>
				<td>PPDE-96</td>
				<td>29-10-2016</td>
				<td>13:20</td>
				<td>28-10-2016</td>
				<td>09:30</td>
			</tr>
			<tr>
				<td>MEME-4445-9</td>
				<td>VALPARAISO</td>
				<td>SANTIAGO</td>
				<td class="center aligned" >Mauricio</i></td>
				<td>VPNS-56</td>
				<td>29-10-2016</td>
				<td>13:20</td>
				<td>28-09-2016</td>
				<td>09:30</td>
			</tr>
		</table>
	</div>
</div>

<script>
$(document).ready(function(){
  $('#dash').dataTable().yadcf([
  		{column_number : 1, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 2, column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"},
	    {column_number : 3, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 5, text_data_delimiter: ",", filter_type: "date"},
	    {column_number : 7, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 8, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 9, text_data_delimiter: ",", filter_type: "date"}]);
	    //{column_number : 9,  column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"}
});

$(document).ready(function(){
  $('#table_det_orden').dataTable().yadcf([
	    {column_number : 1, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 5, text_data_delimiter: ",", filter_type: "date"},
	    {column_number : 7, text_data_delimiter: ",", filter_type: "date"},
	    {column_number : 9, text_data_delimiter: ",", filter_type: "auto_complete"}]);

});

$('.ui.dropdown').dropdown();
$('.ui.modal').modal();
</script>
	</body>
</html>
