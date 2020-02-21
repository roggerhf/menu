<table class="table is-narrow is-fullwidth">
      <thead>
        <tr>
          <th>Orden</th>
          <th>Mesa</th>
          <th>Descripcion del Menú</th>
          <th>Costo Menú</th>
          <th>Refresco</th>
          <th>Costo</th>
          <th>Costo Menú</th>
          <th>Estado</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody id="tabla_menu">
      @foreach($dataMenu as $item)
      	<tr>
			<td>{{$item->idOrden}}</td>
			<td>{{$item->mesa}}</td>
			<td>{{$item->cMenu}}</td>
			<td>{{$item->nCostoMenu}}</td>
			<td>{{$item->cRefresco}}</td>
			<td>{{$item->nCostoRefresco}}</td>
			<td>{{$item->costoTotalMenu}}</td>
			<td>{{$item->cDescripcion}}</td>
			<td><span class="tag is-primary">Primary</span></td>


		</tr>
      @endforeach

      </tbody>
    </table>