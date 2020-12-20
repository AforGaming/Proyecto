@include('templates/header')


    <h1>Baja de Venta</h1>
    
    @isset($eliminado)
        <h2>Venta {{ $eliminado }} eliminada</h2>
    @endisset

    @isset($ventas)

        <form action="/ventasbaja" method="post">
        
            @csrf

            Nro Venta: <input type="text" name=nroVenta value={{ $ventas->nroVenta }} readonly /> <br />
            Id Producto: <input type="text" name=idProducto value={{ $ventas->idProducto }} readonly /> <br />
            Empleado: <input type="text" name=idEmpleado value={{ $ventas->idEmpleado }} readonly /> <br />
            Fecha de Comrpa: <input type="text" name=created_at value={{ $ventas->created_at }} readonly /> <br />
            Importe: <input type="text" name=importe value={{ $ventas->importe }} readonly /> <br />
            Cantidad: <input type="text" name=cantidad value={{ $ventas->cantidad }} readonly /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')