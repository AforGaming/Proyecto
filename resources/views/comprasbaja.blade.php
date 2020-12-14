@include('templates/header')


    <h1>Baja de Comrpa</h1>
    
    @isset($eliminado)
        <h2>Compra {{ $eliminado }} eliminada</h2>
    @endisset

    @isset($compras)

        <form action="/comprasbaja" method="post">
        
            @csrf

            Nro Comrpa: <input type="text" name=id value={{ $compras->id }} readonly /> <br />
            Modelo: <input type="text" name=modelo value={{ $compras->modelo }} readonly /> <br />
            Proveedor: <input type="text" name=idProv value={{ $compras->idProv  }} readonly /> <br />
            Fecha de Comrpa: <input type="text" name=fechaCompra value={{ $compras->fechaCompra }} readonly /> <br />
            Importe: <input type="text" name=importe value={{ $compras->importe }} readonly /> <br />
            Categoria: <input type="text" name=categoria value={{ $c->categoria }} readonly /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')