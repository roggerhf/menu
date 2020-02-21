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
      @elseif($item->idEstado == 5)
      	<tr class="is-success" id="tr_{{$item->idOrden}}">
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
