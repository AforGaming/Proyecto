@include('templates/header')

<h1>Lista de Ventas</h1>

<b><a href=/ventasaltaa>Agregar nueva venta</a>| <a href="reportesventas"> PDF </a> </b>  <br /> <br />
    @foreach ($ventas as $venta)


    <b> Nro de Venta: {{ $venta-> nroVenta}} | id Producto: {{ $venta-> idProducto}} | Cantidad: {{ $venta-> cantidad}} | Fecha de Venta: {{ $venta-> created_at}} | Empleado: {{ $venta-> idEmpleado}} | Importe: {{ $venta-> importe}}
    <a href="/ventasbaja/{{ $venta-> nroVenta}}"> Eliminar </a> </b> <br />

    @endforeach

@include('templates/footer')