<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comercios Aprobados y Rechazados</title>
    <style>
        /* Reset básico para márgenes */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
        }
        
        /* Contenedor principal con márgenes */
        .contenedor-principal {
            width: 94%;
            margin: 20px auto;
            padding: 0;
        }
        
        /* Estilos para los títulos */
        h1, h2 {
            color: #2c3e50;
            margin-left: 10px;
        }
        
        h1 {
            font-size: 18px;
            text-align: center;
            margin-bottom: 25px;
        }
        
        h2 {
            font-size: 14px;
            border-bottom: 1px solid #3498db;
            padding-bottom: 5px;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        
        /* Estilos para tablas */
        .tabla-contenedor {
            width: 100%;
            overflow-x: auto;
            margin-bottom: 30px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
            table-layout: fixed;
        }
        
        th, td {
            border: 1px solid #dddddd;
            padding: 8px 10px;
            text-align: left;
            word-wrap: break-word;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        /* Ajustes específicos de columnas */
        .col-nombre {
            width: 22%;
        }
        
        .col-responsable {
            width: 15%;
        }
        
        .col-telefono {
            width: 12%;
        }
        
        .col-rfc {
            width: 13%;
        }
        
        .col-direccion {
            width: 25%;
        }
        
        .col-email {
            width: 13%;
        }
        
        /* Pie de página */
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 10px;
            color: #7f8c8d;
        }
        
        /* Ajustes para impresión */
        @media print {
            body {
                padding: 0;
                margin: 0;
            }
            
            .contenedor-principal {
                width: 100%;
                margin: 0;
                padding: 0.5cm;
            }
            
            table {
                font-size: 10pt;
            }
            
            h2 {
                page-break-after: avoid;
            }
            
            .tabla-contenedor {
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <div class="contenedor-principal">
        <h1>Reporte de Comercios - Aprobados y Rechazados</h1>
        
        <h2>Comercios Aprobados</h2>
        <div class="tabla-contenedor">
            <table>
                <thead>
                    <tr>
                        <th class="col-nombre">Nombre del comercio</th>
                        <th class="col-responsable">Responsable</th>
                        <th class="col-telefono">Teléfono</th>
                        <th class="col-rfc">RFC</th>
                        <th class="col-direccion">Dirección</th>
                        <th class="col-email">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comerciosAprobados as $comer)
                    <tr>
                        <td>{{ $comer->nombre_comercio }}</td>
                        <td>{{ $comer->nombre_contacto }}</td>
                        <td>{{ $comer->telefono }}</td>
                        <td>{{ $comer->rfc_comercio }}</td>
                        <td>{{ $comer->direccion }}</td>
                        <td>{{ $comer->eMail }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <h2>Comercios Rechazados</h2>
        <div class="tabla-contenedor">
            <table>
                <thead>
                    <tr>
                        <th class="col-nombre">Nombre del comercio</th>
                        <th class="col-responsable">Responsable</th>
                        <th class="col-telefono">Teléfono</th>
                        <th class="col-rfc">RFC</th>
                        <th class="col-direccion">Dirección</th>
                        <th class="col-email">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comerciosRechazados as $comer)
                    <tr>
                        <td>{{ $comer->nombre_comercio }}</td>
                        <td>{{ $comer->nombre_contacto }}</td>
                        <td>{{ $comer->telefono }}</td>
                        <td>{{ $comer->rfc_comercio }}</td>
                        <td>{{ $comer->direccion }}</td>
                        <td>{{ $comer->eMail }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="footer">
            Reporte generado el {{ date('d/m/Y H:i') }} | © CANACO Servytur Merida
        </div>
    </div>
</body>
</html>