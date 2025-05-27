<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ganadores Aprobados</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Lista de Ganadores Aprobados</h2>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Comercio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ganadores as $g)
                @php $p = $g->participante; @endphp
                <tr>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->apellidos }}</td>
                    <td>{{ $p->telefono }}</td>
                    <td>{{ $p->eMail }}</td>
                    <td>{{ $p->comercio->nombre_comercio ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>