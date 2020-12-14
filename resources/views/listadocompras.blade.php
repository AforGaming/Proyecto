@include('templates/header')

<h1>Lista de Compras</h1>

<b><a href=/comprasaltaa>Agregar nueva compra</a></b> <br /> <br />
    @foreach ($compras as $compra)


    <b> NroCompra: {{ $compra-> id}} | Modelo: {{ $compra-> modelo}} | Id de Proveedor: {{ $compra-> idProv}} | Fecha de compra: {{ $compra-> fechaCompra}} | Importe: {{ $compra-> importe}}
    <a href="/comprasmod/{{ $compra-> id}}"> Modificar </a> <a href="/comprasbaja/{{ $compra-> id}}"> Eliminar </a> </b> <br />

    @endforeach

@include('templates/footer')