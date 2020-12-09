@include('templates/header')


    <h1>Alta de Empleado</h1>
    
    @isset($creado)
        <h2>Empleado creado</h2>
    @endisset

    <form action="/alta" method="post">
    
    @csrf

    CI: <input type="text" name=ci /> <br />
    Nombre: <input type="text" name=nombre /> <br />
    Apellido: <input type="text" name=apellido /> <br />
    Mail: <input type="text" name=mail /> <br />
    Fecha de ingreso: <input type="text" name=fechaIngreso /> <br />
    Fecha de nacimiento: <input type="text" name=fechaNacimiento /> <br />
    Localidad: <input type="text" name=localidad /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')
