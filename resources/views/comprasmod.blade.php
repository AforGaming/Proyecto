@include('templates/header')


    <h1>Baja de Comrpa</h1>
    
    @isset($eliminado)
        <h2>Compra {{ $eliminado }} eliminada</h2>
    @endisset

    @isset($compras)

        <form action="/comprasmod" method="post">
        
            @csrf

            Nro Comrpa: <input type="text" name=id value={{ $compras->id }} readonly /> <br />
            Modelo: <input type="text" name=modelo value={{ $compras->modelo }} /> <br />
            Proveedor: <input type="text" name=idProv value={{ $compras->idProv  }} /> <br />
            Fecha de Comrpa: <input type="text" name=fechaCompra value={{ $compras->fechaCompra }} /> <br />
            Importe: <input type="text" name=importe value={{ $compras->importe }} /> <br />
            Categoria: <input type="text" name=categoria value={{ $c->categoria }} /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')