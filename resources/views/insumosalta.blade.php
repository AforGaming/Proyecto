@include('templates/header')


    <h1>Alta de Insumos</h1>

    @isset($creado)
        <h2>Insumo creado</h2>
    @endisset
    
    <form action="/insumosalta" method="post">
    
    @csrf

    Categoria:
    <select name=categoria>
        @isset($categorias)            
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria-> nombre}}">{{ $categoria-> nombre}} </option>
        @endforeach
    </select> <br />
    @endisset
    Modelo: <input type="text" name=modelo /> <br />
    Precio de Compra: <input type="number" name=precioCompra /> <br />
    Precio de Venta: <input type="number" name=precioVenta /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')