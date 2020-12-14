@include('templates/header')


    <h1>Baja de Persona</h1>
    
    @isset($eliminado)
        <h2>Usuario {{ $eliminado }} eliminado</h2>
    @endisset

    @isset($persona)

        <form action="/baja" method="post">
        
            @csrf

            ID: <input type="text" name=id value={{ $persona->id }} readonly /> <br />
            Ci: <input type="text" name=ci value={{ $persona->ci }} readonly /> <br />
            Nombre: <input type="text" name=nombre value={{ $persona->nombre  }} readonly /> <br />
            Apellido: <input type="text" name=apellido value={{ $persona->apellido }} readonly /> <br />
            Mail: <input type="text" name=mail value={{ $persona->mail }} readonly /> <br />
            fechaIngreso: <input type="text" name=fechaIngreso value={{ $persona->fechaIngreso }} readonly /> <br />
            fechaNacimiento: <input type="text" name=fechaNacimiento value={{ $persona->fechaNacimiento }} readonly /> <br />
            Localidad: <input type="text" name=localidad value={{ $persona->localidad }} readonly /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')
