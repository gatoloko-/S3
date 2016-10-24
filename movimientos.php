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
<div class="ui stackable grid vista" id="movimientos" >
	<h1>Movimientos</h1>
	<table class="ui fixed celled small table" id="table_movimientos">
		<thead>
			<tr>
				<th>N°</th>
				<th width="95">Vendedor</th>
				<th width="90">Coord.</th>
				<th width="95">Cliente</th>
				<th width="75">ID carga</th>
				<th width="50">ID</th>
				<th width="60">AGA</th>
				<th width="60">Asig</th>
				<th width="70">Proveedor</th>
				<th width="100">Origen</th>
				<th width="100">Destino</th>
				<th width="100">Recogida</th>
				<th>Hora</th>
				<th width="100">Entrega</th>
				<th>Hora</th>
				<th>Servicio</th>
				<th>Detalle</th>
				<th>Guia</th>
				<th>Obs</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1257</td>
				<td>Elizabeth</td>
				<td>jparra</td>
				<td>Monsanto</td>
                                <td><a onclick="$('#detalle_cargos_movimiento').modal('show');">MAME-598-3</a></td>
				<td>40x3</td>
				<td>Blanco</td>
				<td>JOSE FONSEA</td>
				<td>TR3SVIAS</td>
				<td>ANTOFAGASTA</td>
				<td>CONCEPCION</td>
				<td>27-09-2016</td>
				<td>15:30</td>
				<td>02-10-2016</td>
				<td>15:30</td>
				<td>FLETE</td>
				<td>sin detalle</td>
				<td>256987</td>
				<td></td>
			</tr>
			<tr>
				<td>1321</td>
				<td>Marcelino</td>
				<td>jparra</td>
				<td>Transaco</td>
				<td>KKTU-598-3</td>
				<td>20x3</td>
				<td>Aguirre</td>
				<td onclick="$('#690').modal('show');"><i class="ui large search icon"></i></td>
				<td>TR3SVIAS</td>
				<td>VALPARAISO</td>
				<td>SANTIAGO</td>
				<td>30-09-2016</td>
				<td>15:30</td>
				<td>01-10-2016</td>
				<td>15:30</td>
				<td>FLETE</td>
				<td>sin detalle</td>
				<td>256987</td>
				<td><i class="warning sign icon" onclick="$('#observaciones').modal('show');"></i></td>
			</tr>
		</tbody>
	</table>
</div>	
<div id="690" class="ui modal">
	<div class="ui segment">
		<h2>Conductor</h2>
		JOSE FONSEA
		<h2>Vehiculo</h2>
		DDPF-98
	</div>
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
<div class="ui modal" id="detalle_cargos_movimiento">
    <div class="ui segment">
        <h1>CARGOS PARA MAME-598-3</h1>
        <table class="ui table">
            <thead>
                <th>ID</th>
                <th>TIPO</th>
                <th>DESCRIPCION</th>
                <th>MONTO</th>
            </thead>
            <tbody>
                <tr>
                    <td>653</td>
                    <td>FLETE</td>
                    <td>flete antofagasta concepcion</td>
                    <td>$500.000</td>
                </tr>
                <tr>
                    <td>658</td>
                    <td>SOBRE-ESTADIA</td>
                    <td>2 dias de sobre-estadia en concepcion </td>
                    <td>$65.000</td>
                </tr>
            </tbody>
        </table>
        <h1>Nuevo cargo</h1>
        <form class="ui form">
            <div class="fields">
                <div class="field">
                    <label>Tipo</label>
                    <select class="ui dropdown">
                        <option>Devolucion</option>
                        <option>Sobre-estadia</option>
                        <option>Sobre-peso</option>
                        <option>Desconsolidación</option>
                        <option>Grua</option>
                    </select>
                </div>
                <div class="field">
                    <label>proveedor</label>
                    <select class="ui dropdown">
                        <option>Tr3svias</option>
                        <option>Cabrera</option>
                        <option>El Potro</option>
                    </select>
                </div>
                <div class="field">
                    <label>Detalle</label>
                    <input type="text">
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <label>Costo</label>
                    <input type="number" required>
                </div>
                <div class="field">
                    <label>Venta</label>
                    <input type="number" required>
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <div class="ui button">Crear</div>
                </div>
            </div>
        </form> 
    </div>
</div>

<div class="ui modal" id="new_cargo_directo">
    <div class="ui segment">
        <form class="ui form">
            <div class="fields">
                <div class="field">
                    <label></label>
                </div>
            </div>
        </form>
    </div>
</div>            
            
<script>
$(document).ready(function(){
  $('#table_movimientos').dataTable().yadcf([
		{column_number : 1, text_data_delimiter: ",", filter_type: "auto_complete"},
		{column_number : 3, text_data_delimiter: ",", filter_type: "auto_complete"},
	    //{column_number : 3,  filter_type: "range_number_slider", filter_container_id: "external_filter_container"},
	    //{column_number : 2, data: ["Yes", "No"], filter_default_label: "Select Yes/No"},
	    //{column_number : 3, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 2, column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"},
	    //{column_number : 9, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 10, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 11, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 12, text_data_delimiter: ",", filter_type: "date"},
	    {column_number : 14, text_data_delimiter: ",", filter_type: "date"}]);
});

$('.ui.dropdown').dropdown();
$('.ui.modal').modal();
$('.asig').popup();
</script>
	</body>
</html>