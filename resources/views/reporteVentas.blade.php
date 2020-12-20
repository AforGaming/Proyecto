@foreach ($ventas as $venta)


    <b> Nro de Venta: {{ $venta-> nroVenta}} | id Producto: {{ $venta-> idProducto}} | Cantidad: {{ $venta-> cantidad}} | Fecha de Venta: {{ $venta-> created_at}} | Empleado: {{ $venta-> idEmpleado}} | Importe: {{ $venta-> importe}} </b> <br />

@endforeach