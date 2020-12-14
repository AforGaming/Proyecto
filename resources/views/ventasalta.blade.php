@include('templates/header')


    <h1>Alta de Ventas</h1>

    @isset($creado)
        <h2>Venta realizada</h2>
    @endisset
    
    <form action="/ventasalta" method="post">
    
    @csrf

    Insumo:
    <select name=idProducto>
        @isset($insumos)            
        @foreach ($insumos as $insumo)
            <option value="{{ $insumo-> id}}">{{ $insumo-> id}} </option> 
        @endforeach
    </select> <br />
    @endisset
    Empleado:
    <select name=ci>
        @isset($empleados)            
        @foreach ($empleados as $empleado)
            <option value="{{ $empleado-> id}}">{{ $empleado-> ci}} </option> 
        @endforeach
    </select> <br />
    @endisset
    @endauth
    Fecha de Venta: <input type="text" name=fechaVenta /> <br />
    Importe: <input type="text" name=importe /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')