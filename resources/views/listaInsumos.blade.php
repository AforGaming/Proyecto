@include('templates/header')

<h1>Lista de Insumos</h1>

<b><a href=/insumosalta>Agregar nuevo Insumo</a></b> <br /> <br />
    @foreach ($insumos as $p)


    <b> ID: {{ $p-> id}} | Modelo: {{ $p-> modelo}} | Categoria {{ $p-> categoria}} | Proveedor {{ $p-> proveedor}} </b> 


    @endforeach

@include('templates/footer')
