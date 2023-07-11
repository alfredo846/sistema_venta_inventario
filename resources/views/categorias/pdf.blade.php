<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/estilospdf.css') }}">
    <title>Categorias PDF</title>
    
</head>

<body>

    @include('layouts.partialspdf.header')
  

    <main>
        <h2> <span>Categoría de productos </span>
            <div class="time">
                <h5>{{ $date }} {{ $hora }}&nbsp;&nbsp;&nbsp;</h5>
            </div>
        </h2>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Estado</th>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>
                            {{ $categoria->nombre }}
                        </td>
                        <td>
                            Activo
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
   
    @include('layouts.partialspdf.footer')
</body>

</html>
