@include('templates/header')


    <h1>Baja de Proveedor</h1>
    
    @isset($eliminado)
        <h2>Proveedor {{ $eliminado }} eliminado</h2>
    @endisset

    @isset($proveedor)

        <form action="/proveedoresbaja" method="post">
        
            @csrf

            ID: <input type="text" name=id value={{ $proveedor->id }} readonly /> <br />
            RUT: <input type="text" name=rut value={{ $proveedor->rut }} readonly /> <br />
            Nombre: <input type="text" name=nombre value={{ $proveedor->nombre  }} readonly /> <br />
            Direccion de Facturacion: <input type="text" name=dirFacturacion value={{ $proveedor->dirFacturacion }} readonly /> <br />
            Mail: <input type="text" name=mail value={{ $proveedor->mail }} readonly /> <br />
            Direccion Fisica: <input type="text" name=dirFisica value={{ $proveedor->dirFisica }} readonly /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')