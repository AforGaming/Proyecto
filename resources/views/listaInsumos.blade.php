@include('templates/header')

<h1>Lista de Insumos</h1>

<b><a href=/insumosaltaa>Crear nuevo insumo</a> | <a href="reportestock"> PDF </a> </b>  <br /> <br />



    @foreach ($insumos as $p)


    <b> ID: {{ $p-> id}} | Modelo: {{ $p-> modelo}} | Categoria: {{ $p-> categoria}} | Precio de Compra: {{ $p-> precioCompra}} | Precio de Venta: {{ $p-> precioVenta}} | Cantidad: {{ $p-> cantidad}} </b> <br />


    @endforeach

@include('templates/footer')
