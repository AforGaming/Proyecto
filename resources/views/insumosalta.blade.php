@include('templates/header')


    <h1>Alta de Insumos</h1>

    @isset($creado)
        <h2>Insumo creado</h2>
    @endisset
    
    <form action="/insumosalta" method="post">
    
    @csrf

    Modelo: <input type="text" name=modelo /> <br />
    Categoria: <input type="text" name=categoria /> <br />
    Proveedor: <input type="text" name=proveedor /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')
