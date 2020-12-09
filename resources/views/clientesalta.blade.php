@include('templates/header')


    <h1>Alta de Clientes</h1>

    @isset($creado)
        <h2>Cliente creado</h2>
    @endisset
    
    <form action="/clientesalta" method="post">
    
    @csrf

    RUT: <input type="text" name=rut /> <br />
    Nombre: <input type="text" name=nombre /> <br />
    Direccion de Facturacion: <input type="text" name=dirFacturacion /> <br />
    Direccion Fisica: <input type="text" name=dirFisica /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')