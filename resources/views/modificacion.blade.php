@include('templates/header')


    <h1>Modificacion de Persona</h1>
    
    @isset($modificado)
        <h2>Usuario {{ $modificado }} modificado</h2>
    @endisset

    @isset($persona)

        <form action="/modificacion" method="post">
        
            @csrf

            ID: <input type="text" name=id value={{ $persona->id }} readonly /> <br />
            Ci: <input type="text" name=ci value={{ $persona->ci }} /> <br />
            Nombre: <input type="text" name=nombre value={{ $persona->nombre  }} /> <br />
            Apellido: <input type="text" name=apellido value={{ $persona->apellido }} /> <br />
            Mail: <input type="text" name=mail value={{ $persona->mail }} /> <br />
            Celular: <input type="text" name=celular value={{ $persona->celular }} /> <br />
            fechaIngreso: <input type="text" name=fechaIngreso value={{ $persona->fechaIngreso }} /> <br />
            fechaNacimiento: <input type="text" name=fechaNacimiento value={{ $persona->fechaNacimiento }} /> <br />
            Localidad: <input type="text" name=localidad value={{ $persona->localidad }} /> <br />
            <input type="submit"> </input>
        </form>

        @endisset

@include('templates/footer')
