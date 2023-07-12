<table class="table table-striped" style="width:100%;">
    <thead>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <th hidden></th>
            <th hidden></th>
            <th hidden></th>
            <th hidden></th>
            <th hidden></th>
            <th hidden></th>
            <th style="background-color:#033175; align:right; color:white;">Fecha: {{ $date }}</th>
        </tr>
        <tr></tr>
        <tr>
            <th hidden></th>
            <th colspan="6" style="background-color:#033175; color:white; text-align:center;">
                CATEGORIAS DE LOS PRODUCTOS</th>
        </tr>
        <tr>
            <th hidden></th>
            <th style="background-color:#eaeaea; color:black; text-align:center;">Id</th>
            <th style="background-color:#eaeaea; color:black; text-align:center;">Categoría</th>
            <th style="background-color:#eaeaea; color:black; text-align:center;">Imagen</th>
            <th style="background-color:#eaeaea; color:black; text-align:center;">Estado</th>
            <th style="background-color:#eaeaea; color:black; text-align:center;">Fecha de creación</th>
            <th style="background-color:#eaeaea; color:black; text-align:center;">Fecha de edición</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td hidden></td>
                <td style="text-align:left">{{ $categoria->categoria_id }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->imagen }}</td>
                <td>Activo</td>
                <td>{{ $categoria->created_at }}</td>
                <td>{{ $categoria->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
