@include('templates/header')

<h1>Lista de Clientes</h1>

<b><a href=/clientesalta>Agregar nuevo Cliente</a></b> <br /> <br />


    @foreach ($clientes as $c)


    <b> RUT: {{ $c-> rut}} | Nombre: {{ $c-> nombre}} | Mail: {{ $c-> mail}} | Facturacion: {{ $c-> dirFacturacion}} </b> <br />

    @endforeach

@include('templates/footer')