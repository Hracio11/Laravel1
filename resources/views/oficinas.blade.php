<h1>OFICINAS</h1>
<table width="100%" border ="1">
    <tr>
        <th>Codigo de oficina</th>
        <th>ciudad</th>
        <th>Celular</th>
        <th>addressLine1</th>
        <th>addressLine2</th>
        <th>Estado</th>
        <th>Pais</th>
        <th>Codigo postal</th>
        <th>Territorio</th>
    </tr>
    @foreach ($office as $oficina)
    <tr>
        <td>{{ $oficina ->officeCode }}</td>
        <td>{{ $oficina ->city }}</td>
        <td>{{ $oficina ->phone }}</td>
        <td>{{ $oficina ->addressLine1 }}</td>
        <td>{{ $oficina ->addressLine2 }}</td>
        <td>{{ $oficina ->state }}</td>
        <td>{{ $oficina ->country }}</td>
        <td>{{ $oficina ->postalCode }}</td>
        <td>{{ $oficina ->territory }}</td>
    </tr>
    @endforeach
</table>