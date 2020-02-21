	<div class="table-container">
	<table class="table is-narrow is-fullwidth">
      <thead>
        <tr>
          <th>Orden</th>
          <th>Mesa</th>
          <th>Descripcion del Menú</th>
          <th>Costo Menú</th>
          <th>Refresco</th>
          <th>Costo</th>
          <th>Total</th>
          <th>Estado</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody id="tabla_menu">
      @foreach($dataMenu as $item)

      @if($item->idEstado == 3)
      	<tr class="is-warning-light" id="tr_{{$item->idOrden}}">
      @elseif($item->idEstado == 4)
      	<tr class="is-primary-light" id="tr_{{$item->idOrden}}">
      @else
      <tr class="trorange" id="tr_{{$item->idOrden}}">
      @endif
			     <td>{{$item->idOrden}}</td>
			     <td>{{$item->mesa}}</td>
			     <td>{{$item->cMenu}}</td>
			     <td>{{$item->nCostoMenu}}</td>
			     <td>{{$item->cRefresco}}</td>
			     <td>{{$item->nCostoRefresco}}</td>
			     <td>{{$item->costoTotalMenu}}</td>
			     <td id="tdEstado_{{$item->idOrden}}">{{$item->cDescripcion}}</td>
			     <td>
            @if($item->idEstado == 1) 
            <!--span class="tag is-primary" id="span_{{$item->idOrden}}" onclick="fnAtender({{$item->idOrden}},2)">Atender</span-->
            @elseif($item->idEstado == 2) 
            <!--span class="tag is-warning" id="span_{{$item->idOrden}}" onclick="fnAtender({{$item->idOrden}},3)">Servido</span-->

            @elseif($item->idEstado == 3) 
            <span class="tag is-success" id="span_{{$item->idOrden}}" onclick="fnAtender({{$item->idOrden}},4)">Entregado</span>
            @elseif($item->idEstado == 4) 
            <span class="tag is-dark" id="span_{{$item->idOrden}}" onclick="fnAtender({{$item->idOrden}},5)">Cobrar</span>
            @endif
        
          </td>

		    </tr>
      @endforeach

      </tbody>
    </table>
    </div>

    <script type="text/javascript">
      
      function fnAtender(orden,estado)
      {
        var token = $("#token").val();

            $.ajax({ //Process the form using $.ajax()
                        type      : 'POST', //Method type
                        url       : 'cambioEstado', //Your form processing file URL
                        headers   : {'X-CSRF-TOKEN':token},
                        data      : { 'orden': orden,'estado': estado}, //Forms name
                        dataType  : 'json',
                        success   : function(data) {
                                        if (data.success) { //If fails

                                            //alert("rpta->"+data.mensaje);
                                            fnCambioEstado(data.orden, data.estado);

                                        }
                                        else {
                                                alert(data.mensaje);
                                        }
                                    }
                    });
      }

      function fnCambioEstado(orden,estado)
      {
        if(estado == 2) //atencion
        {
          $("#tdEstado_"+orden).html("En Atencion");
          $("#span_"+orden).html("Servido");
          $("#span_"+orden).attr("onclick","fnAtender("+orden+",3)");
          $("#span_"+orden).attr("class","tag is-warning");
        }

        if(estado == 3) //para Servir
        {
          
          $("#tr_"+orden).attr("class","is-success-light");
          $("#tdEstado_"+orden).html("Para Servir");
          $("#span_"+orden).remove();          
        }

        if(estado == 4) //Entregado
        {
          
          $("#tr_"+orden).attr("class","is-primary-light");
          $("#tdEstado_"+orden).html("Entregado");
          $("#span_"+orden).html("Cobrar");
          $("#span_"+orden).attr("onclick","fnAtender("+orden+",5)");
          $("#span_"+orden).attr("class","tag is-dark");          
        }
      }

    </script>