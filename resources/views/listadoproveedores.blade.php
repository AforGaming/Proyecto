@include('templates/header')

<h1>Lista de Proveedores</h1>

<b><a href=/proveedoresalta>Agregar nuevo Proveedor</a></b> <br /> <br />
    @foreach ($proveedores as $prov)


    <b> ID: {{ $prov-> id}} | RUT: {{ $prov-> rut}} | Nombre: {{ $prov-> nombre}} | Mail: {{ $prov-> mail}} | Dir facturacion: {{ $prov-> dirFacturacion}} | Dir fisica: {{ $prov-> dirFisica}}
        <a href="/proveedoresmod/{{ $prov-> id}}"> Modificar </a> <a href="/proveedoresbaja/{{ $prov-> id}}"> Eliminar </b> <br />


    @endforeach

@include('templates/footer')
