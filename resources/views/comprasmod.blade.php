@include('templates/header')


    <h1>Baja de Comrpa</h1>
    
    @isset($eliminado)
        <h2>Compra {{ $eliminado }} eliminada</h2>
    @endisset

    @isset($compras)

        <form action="/comprasmod" method="post">
        
            @csrf

            Nro Comrpa: <input type="text" name=id value={{ $compras->id }} readonly /> <br />
            Producto: <input type="text" name=modelo value={{ $compras->idProducto }} readonly /> <br />
            Proveedor: <input type="text" name=idProv value={{ $compras->idProv  }} /> <br />
            Fecha de Comrpa: <input type="text" name=created_at value={{ $compras->created_at }} readonly /> <br />
            Importe: <input type="text" name=importe value={{ $compras->importe }} readonly /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')