<h1>Listados de alumnos</h1>
<table width="100%" border ="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>DNI</th>
        <th>Estado</th>
    </tr>
    @foreach ($alumnos as $alumno)
    <tr>
        <td>{{ $alumno->id }}</td>
        <td>{{ $alumno->nombre }}</td>
        <td>{{ $alumno->edad }}</td>
        <td>{{ $alumno->dni }}</td>
        <td>{{ $alumno->relacion->estado }}</td>
    </tr>
    @endforeach
</table>