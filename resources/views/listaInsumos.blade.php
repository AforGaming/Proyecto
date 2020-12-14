@include('templates/header')

<h1>Lista de Insumos</h1>

    @foreach ($insumos as $p)


    <b> ID: {{ $p-> id}} | Modelo: {{ $p-> modelo}} | Categoria: {{ $p-> categoria}} | Proveedor: {{ $p-> proveedor}} </b> <br />


    @endforeach

@include('templates/footer')
