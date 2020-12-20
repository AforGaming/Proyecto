@include('templates/header')


    <h1>Alta de Compras</h1>

    @isset($creado)
        <h2>Compra realizada</h2>
    @endisset
    
    <form action="/comprasAltaArticulo" method="post">
    
    @csrf

    Producto:
    <select name=idProducto>
        @isset($productos)            
        @foreach ($productos as $producto)
            <option value="{{ $producto-> id}}">{{ $producto-> modelo}} | ${{ $producto-> precioCompra}} </option>
        @endforeach
    </select> <br />
    @endisset
    Proveedor:
    <select name=idProv>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente-> id}}">{{ $cliente-> nombre}} </option>
        @endforeach
    </select> <br />
    Cantidad: <input type="number" name=cantidad /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')