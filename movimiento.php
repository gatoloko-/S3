<div class="ui stackable grid vista" id="movimientos" style="display: none;">
	<table class="ui selectable celled striped small table" id="table_movimientos">
		<thead>
			<tr>
				<th>ID carga</th>
				<th>ID</th>
				<th>Cliente</th>
				<th>Coordinador</th>
				<th>Vendedor</th>
				<th>Ingreso</th>
				<th>AGA</th>
				<th>Vehiculo</th>
				<th>Conductor</th>
				<th>Proveedor</th>
				<th>Origen</th>
				<th>Destino</th>
				<th>Fecha recogida</th>
				<th>Hora recogida</th>
				<th>Servicio</th>
				<th>Detalle</th>
				
				<th>Guia</th>
				<th>Obs. Operaciones</th>
				<th>Obs. Comercial</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>KKTU-598-3</td>
				<td>20x3</td>
				<td>Transaco</td>
				<td>jparra</td>
				<td>Marcelino</td>
				<td>29-09-2016</td>
				<td>Aguirre</td>
				<td>DPPG-69</td>
				<td>JOSE FONSEA</td>
				<td>TR3SVIAS</td>
				<td>VALPARAISO</td>
				<td>SANTIAGO</td>
				<td>30-09-2016</td>
				<td>15:30</td>
				<td>FLETE</td>
				<td>sin detalle</td>
				
				<td>256987</td>
				<td></td>
				<td></td>
			</tr>
			
		</tbody>
	</table>
</div>	
	
<script>
$(document).ready(function(){
  $('#table_movimientos').dataTable().yadcf([
		{column_number : 0, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 1, text_data_delimiter: ",", filter_type: "auto_complete"},
	    //{column_number : 3,  filter_type: "range_number_slider", filter_container_id: "external_filter_container"},
	    //{column_number : 2, data: ["Yes", "No"], filter_default_label: "Select Yes/No"},
	    //{column_number : 3, text_data_delimiter: ",", filter_type: "auto_complete"},
	    {column_number : 4, column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"},
	    {column_number : 9,  column_data_type: "html", html_data_type: "text", filter_default_label: "Filtrar"}]);
});
</script>