@include('templates/header')


    <h1>Alta de Categoria</h1>

    @isset($creado)
        <h2>Categoria creada</h2>
    @endisset
    
    <form action="/categoriasalta" method="post">
    
    @csrf

    Nombre: <input type="text" name=nombre /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')