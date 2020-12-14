@include('templates/header')

<h1>Lista de Compras</h1>

<b><a href=/comprasaltaa>Agregar nueva compra</a></b> <br /> <br />
    @foreach ($compras as $compra)


    <b> NroCompra: {{ $compra-> nroCompra}} | Modelo: {{ $compra-> modelo}} | Id de Proveedor: {{ $compra-> idProv}} | Fecha de compra: {{ $compra-> fechaCompra}} | Importe: {{ $compra-> importe}} </b> <br />

    @endforeach

@include('templates/footer')