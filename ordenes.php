<div class="ui stackable grid vista" id="ordenes">
	<h1>Ordenes</h1>	
	<table class="ui fixed single line celled small table" id="dash">
		<thead>
			<tr>
				<th width="60">ID</th>
				<th width="110">Cliente</th>
				<th width="90">Ingreso</th>
				<th>AGA</th>
				<th width="110">Origen</th>
				<th  width="110">Destino</th>
				<th width="90">Recogida</th>
				<th width="70">Hora</th>
				<th>Obs. Ope</th>
				<th>Obs. Com</th>
				<th>Coordinador</th>
				<th width="90">Vendedor</th>
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
</div>
<script>
$(document).ready(function(){
  $('#dash').dataTable().yadcf([
	    {column_number : 1, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 4, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 5, text_data_delimiter: ",", filter_type: "auto_complete"},
	    //{column_number : 3,  filter_type: "range_number_slider", filter_container_id: "external_filter_container"},
	    //{column_number : 2, data: ["Yes", "No"], filter_default_label: "Select Yes/No"},
	    //{column_number : 3, text_data_delimiter: ",", filter_type: "auto_complete"},
	    //{column_number : 4, column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"},
	    {column_number : 10, column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"},
	    {column_number : 11, text_data_delimiter: ",", filter_type: "auto_complete"}]);
	    //{column_number : 9,  column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"}
});
</script>