@include('templates/header')

<h1>Lista de Categorias</h1>

<b><a href=/categoriasalta>Agregar nueva Categoria</a></b> <br /> <br />


    @foreach ($categorias as $cat)


    <b> Nombre: {{ $cat-> nombre}} </b> <br />

    @endforeach

@include('templates/footer')