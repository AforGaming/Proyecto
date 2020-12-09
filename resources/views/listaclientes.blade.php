@include('templates/header')

<h1>Lista de Proveedores</h1>

<b><a href=/clientesalta>Agregar nuevo Proveedor</a></b> <br /> <br />


    @foreach ($clientes as $c)


    <b> RUT: {{ $c-> rut}} | Nombre: {{ $c-> nombre}} | Facturacion: {{ $c-> dirFacturacion}} </b> <br />

    @endforeach

@include('templates/footer')