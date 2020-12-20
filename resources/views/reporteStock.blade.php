@foreach ($insumos as $p)


<b> ID: {{ $p-> id}} | Modelo: {{ $p-> modelo}} | Categoria: {{ $p-> categoria}} | Precio de Compra: {{ $p-> precioCompra}} | Precio de Venta: {{ $p-> precioVenta}} | Cantidad: {{ $p-> cantidad}} </b> <br />


@endforeach