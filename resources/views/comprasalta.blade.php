@include('templates/header')


    <h1>Alta de Compras</h1>

    @isset($creado)
        <h2>Compra realizada</h2>
    @endisset
    
    <form action="/comprasAltaArticulo" method="post">
    
    @csrf


    <select name=modelo>
        @isset($insumos)            
        @foreach ($insumos as $insumo)
            <option value="{{ $insumo-> id}}">{{ $insumo-> modelo}} </option>
        @endforeach
    </select> <br />
    @endisset
    Codigo: <input type="text" name=codigo /> <br />
    Cantidad: <input type="text" name=cantidad /> <br />
    <select name=rut>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente-> rut}}">{{ $cliente-> nombre}} </option>
        @endforeach
    </select> <br />
    Fecha de compra: <input type="text" name=fechacompra /> <br />
    Importe: <input type="text" name=importe /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')