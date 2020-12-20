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
            <option value="{{ $insumo-> id}}">{{ $insumo-> modelo}} | ${{ $insumo-> precioVenta}} </option> 
        @endforeach
    </select> <br />
    @endisset
    Empleado:
    <select name=idEmpleado>
        @isset($empleados)            
        @foreach ($empleados as $empleado)
            <option value="{{ $empleado-> id}}">{{ $empleado-> ci}} </option> 
        @endforeach
    </select> <br />
    @endisset
    Cantidad: <input type="number" name=cantidad /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')