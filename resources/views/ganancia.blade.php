@include('templates/header')

    <form action="/reportesganancias" method="post">
    
    @csrf

    Dia: <input type="number" name=dia /> <br />
    Mes: <input type="number" name=mes /> <br />
    Anio: <input type="number" name=anio /> <br />
    <input type="submit" />   
    </form>

@include('templates/footer')