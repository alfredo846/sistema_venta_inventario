<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/estilospdf.css') }}">
    <title>Your Company | Categorias PDF</title>
</head>

<body>
    <header>
        <img src="{{ public_path('img/logo.png') }}" alt="logo-company" id="logo-companya">
        <h1>Your Company Your Comany</h1>
        <img src="{{ public_path('img/logo.png') }}" alt="logo-compania" id="logo-companyb">
       
        <div class="time">
            <h5>Fecha de impresión&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
            <h5> {{ $date }}
                {{ $hora }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
        </div>
        <br>
        <div class="time2">
            <br>&nbsp; <h2>Listado de categorias</h2>  
        </div>
    </header> 

    <footer>
        <img src="{{ public_path('img/logo.png') }}" id="logo-companyfooter" alt="imagotipo-company">
        <div class="time">
            <h5> correo @gmail.com</h5>
        </div>
    </footer>
    <main>
        <div class="container">
            <table class="table table-striped">
                <div class="time">
                    <h5> Company@2023</h5>
                </div>
                <thead>
                    <th>Categoría</th>
                    <th>Estado</th>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>
                                {{ $categoria->nombre }}
                            </td>
                            <td class="activo">
                                Activo
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(270, 820, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
    	</script>
</body>

</html>
