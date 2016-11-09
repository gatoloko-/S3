<div class="ui stackable container menu" id="menu">
	<img src="img/logo_small.png" width="200" height="50">
	<div class="item"></div>
  <div class="ui dropdown item">
    Ordenes
    <i class="dropdown icon"></i>
    <div class="menu">
    	<a href="/">
	      <div class="item">
	      		<span class="text">Listado</span>
	      </div>
	    </a>
      <div class="item">
        <span class="text"><a onclick="$('#nueva_orden').modal('show');">Nueva</a></span>
      </div>
      <div class="item">
        <span class="text">Editar</span>
      </div>
      <div class="item">
        <span class="text">Eliminar</span>
      </div>
    </div>
  </div>
  
  <div class="ui dropdown item">
    Movimientos
    <i class="dropdown icon"></i>
    <div class="menu">
      <a href="movimientos.php">
        <div class="item">
      	  <span class="text">Listado</span>
        </div>
      </a>
      <div class="item">
        <span class="text">Nuevo</span>
      </div>
      <div class="item">
        <span class="text">Editar</span>
      </div>
      <div class="item">
        <span class="text">Eliminar</span>
      </div>
    </div>
  </div>
        
    <div class="ui dropdown item">
        Cargos
        <i class="dropdown icon"></i>
        <div class="menu">
            <div class="item">
                <span class="text"><a onclick="$('#nuevo_cargo').modal('show');">Nuevo</a></span>
            </div>
            <div class="item">
                <span class="text">Editar</span>
            </div>
            <div class="item">
                <span class="text">Eliminar</span>
            </div>
        </div>
    </div>
        
    <div class="ui dropdown item">
        Proveedores
        <i class="dropdown icon"></i>
        <div class="menu">
            <div class="item">
                <span class="text"><a onclick="$('#nuevo_proveedor').modal('show');">Nuevo</a></span>
            </div>
            <div class="item">
                <span class="text"><a href="listado_cargos.php">Listado de cargos</a></span>
            </div>
            <div class="item">
                <span class="text" onclick="">Carga de documentos</span>
            </div>
            <div class="item">
                <span class="text">Editar</span>
            </div>
            <div class="item">
                <span class="text">Eliminar</span>
            </div>
        </div>
    </div>
  
</div>


<div class="ui modal" id="nueva_orden" >
	<div class="ui segment">
		<h1> Nueva orden</h1>
		<div class="ui divider"></div>
		<form id="new_orden">
                    <div class="ui form">
				<div class="fields">
					<div class="field">
						<label>RUT</label>
						<input type="text" placeholder="RUT">
					</div>
					<div class="field">
						<label>Razón Social</label>
						<input type="text" placeholder="Razón social">
					</div>
					<div class="field">
						<label>ID</label>
						<input type="text" placeholder="Identificador">
					</div>
				</div>
                            <div class="ui divider"></div>
                            <div id="cargo_container">
                                <div class="fields" id="one" name="carga_div_[]">
                                    <div class="field">
                                        
                                        <input name="carga_id[]" type="text" placeholder="N° container, pallets etc">
                                    </div>
                                    <div class="field">
                                        
                                        <input name="carga_origen[]" type="text" placeholder="Origen">
                                    </div>
                                    <div class="field">
                                        
                                        <input name="carga_destino[]" type="text" placeholder="Destino">
                                    </div>
                                    <div class="field">
                                        
                                        <input name="carga_fecha_recogida[]" type="text" placeholder="Costo">
                                    </div>
                                    <div class="field">
                                        
                                        <input name="carga_recogida_hora[]" type="text" placeholder="Venta">
                                    </div>
                                    <div class="field">
                                        <div class="ui button" onclick='addRow("add", 0);'>+</div>
                                    </div>
                                </div>
                            </div>
			</div>
		</form>
	</div>
</div>

<div class="ui modal" id="new_cargo">
    <div class="ui segment">
        <form class="ui form">
            <div class="fields">
                <div class="field">
                    <label>Orden</label>
                    <input type="number" placeholder="" nombre="">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="ui modal" id="nuevo_proveedor">
    <div class="ui segment">
        <h1>Nuevo Proveedor</h1>
        <form class="ui form">
            <div class="fields">
                <div class="field">
                    <label>Rut</label>
                    <input type="text">
                </div>
                <div class="field">
                    <label>Razón Social</label>
                    <input type="text">
                </div>
                <div class="field">
                    <label>E-Mail</label>
                    <input type="text">
                </div>
                <div class="field">
                    <label>Teléfono</label>
                    <input type="number">
                </div>
                <div class="field">
                    <label>Credito</label>
                    <input type="number">
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
<style>
		.ui-autocomplete-input, .yadcf-filter-date{
			width: 65px;
		}
		/*#menu{
			margin: 0px;
		}*/
		.ui.table td, th{
			padding:3px;
			font-size:11px;
		}
		.paginate_button{
			padding:3px;
			cursor: pointer;
		}
		.dataTables_length{
			padding:3px;
		}
		a{
			cursor:pointer;
		}
</style>
<script>
    function delRow(id){
            $("#"+id+"").remove();
             //alert(id);
    }
    function addRow(id){//agrega nuevo campo
            var rowIndex = "X_"+Math.floor((Math.random() * 999999) + 1);
            
            $("#one").before(`<div class="fields" name="cargo_div_[]" id="`+rowIndex+`">
                <div class="field">
                    
                    <input name="carga_id[]" type="text" placeholder="N° container, pallets etc">
                </div>
                <div class="field">
                    
                    <input name="carga_origen[]" type="text" placeholder="Origen">
                </div>
                <div class="field">
                    
                    <input name="carga_destino[]" type="text" placeholder="Destino">
                </div>
                <div class="field">
                    
                    <input name="carga_fecha_recogida[]" type="text" placeholder="Costo">
                </div>
                <div class="field">
                    
                    <input name="carga_recogida_hora[]" type="text" placeholder="Venta">
                </div>
                <div class="field">
                    
                    <div class="ui button" onclick='delRow("`+rowIndex+`");'>-</div>
                </div>
            </div>`);
        
    }
    
    $('.ui.dropdown').dropdown();
</script>