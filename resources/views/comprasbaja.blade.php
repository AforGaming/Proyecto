@include('templates/header')


    <h1>Baja de Comrpa</h1>
    
    @isset($eliminado)
        <h2>Compra {{ $eliminado }} eliminada</h2>
    @endisset

    @isset($compras)

        <form action="/comprasbaja" method="post">
        
            @csrf

            Nro Comrpa: <input type="text" name=id value={{ $compras->id }} readonly /> <br />
            Id Producto: <input type="text" name=idProducto value={{ $compras->idProducto }} readonly /> <br />
            Proveedor: <input type="text" name=idProv value={{ $compras->idProv  }} readonly /> <br />
            Fecha de Comrpa: <input type="text" name=created_at value={{ $compras->created_at }} readonly /> <br />
            Importe: <input type="text" name=importe value={{ $compras->importe }} readonly /> <br />
            Cantidad: <input type="text" name=cantidad value={{ $compras->Cantidad }} readonly /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')