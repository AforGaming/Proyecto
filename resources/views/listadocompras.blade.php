@include('templates/header')

<h1>Lista de Compras</h1>

<b><a href=/comprasaltaa>Agregar nueva compra</a>| <a href="reportescompras"> PDF </a> </b>  <br /> <br />
    @foreach ($compras as $compra)


    <b> NroCompra: {{ $compra-> id}} | Producto: {{ $compra-> idProducto}} | Id de Proveedor: {{ $compra-> idProv}} | Cantidad: {{ $compra-> Cantidad}} | Fecha de compra: {{ $compra-> created_at}} | Importe: {{ $compra-> importe}}
    <a href="/comprasbaja/{{ $compra-> id}}"> Eliminar </a> </b> <br />

    @endforeach

@include('templates/footer')