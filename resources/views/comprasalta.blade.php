@include('templates/header')


    <h1>Alta de Compras</h1>

    @isset($creado)
        <h2>Compra realizada</h2>
    @endisset
    
    <form action="/comprasAltaArticulo" method="post">
    
    @csrf

    Categoria:
    <select name=categoria>
        @isset($categorias)            
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria-> nombre}}">{{ $categoria-> nombre}} </option>
        @endforeach
    </select> <br />
    @endisset
    Proveedor:
    <select name=idProv>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente-> id}}">{{ $cliente-> nombre}} </option>
        @endforeach
    </select> <br />
    Modelo: <input type="text" name=modelo /> <br />
    Fecha de compra: <input type="text" name=fechacompra /> <br />
    Importe: <input type="text" name=importe /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')