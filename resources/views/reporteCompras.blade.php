@foreach ($compras as $compra)


<b> NroCompra: {{ $compra-> id}} | Producto: {{ $compra-> idProducto}} | Id de Proveedor: {{ $compra-> idProv}} | Cantidad: {{ $compra-> Cantidad}} | Fecha de compra: {{ $compra-> created_at}} | Importe: {{ $compra-> importe}} </b> <br />

@endforeach