@include('templates/header')

<h1>Lista de Compras</h1>

<b><a href=/comprasaltaa>Agregar nueva compra</a></b> <br /> <br />
    @foreach ($compras as $compra)


    <b> Modelo: {{ $compra-> modelo}} | Codigo: {{ $compra-> codigo}} | RUT {{ $compra-> rut}} | Fecha de compra {{ $compra-> fechacompra}} | Importe {{ $compra-> importe} </b> 

    @endforeach

@include('templates/footer')