@include('templates/header')


    <h1>Modificacion de Proveedor</h1>
    
    @isset($modificado)
        <h2>Proveedor {{ $modificado }} modificado</h2>
    @endisset

    @isset($proveedor)

        <form action="/proveedoresmod" method="post">
        
            @csrf

            ID: <input type="text" name=id value={{ $proveedor->id }} readonly /> <br />
            RUT: <input type="text" name=rut value={{ $proveedor->rut }} /> <br />
            Nombre: <input type="text" name=nombre value={{ $proveedor->nombre  }} /> <br />
            Direccion de Facturacion: <input type="text" name=dirFacturacion value={{ $proveedor->dirFacturacion }} /> <br />
            Mail: <input type="text" name=mail value={{ $proveedor->mail }} /> <br />
            Direccion Fisica: <input type="text" name=dirFisica value={{ $proveedor->dirFisica }} /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')