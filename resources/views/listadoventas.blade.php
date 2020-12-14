@include('templates/header')

<h1>Lista de Ventas</h1>

<b><a href=/ventasaltaa>Agregar nueva venta</a></b> <br /> <br />
    @foreach ($ventas as $venta)


    <b> Nro de Venta: {{ $venta-> nroVenta}} | id Producto: {{ $venta-> idProducto}} | Fehca de Venta: {{ $venta-> fechaVenta}} | Empleado: {{ $venta-> idEmpleado}} | Importe: {{ $venta-> importe}} </b> <br />

    @endforeach

@include('templates/footer')