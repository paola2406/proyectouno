<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tareas</h1>
    <a href="/tarea/create">Crear nueva tarea</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Tarea</th>
            <th>Descripcion</th>
            <th>Tipo</th>
            <th>Acciones</th>


        </tr>

    @foreach ($tareas as $tarea)
        <tr>
            <td>{{$tarea->id}}</td>
            <td>{{$tarea->tareas}}</td>
            <td>{{$tarea->descripcion}}</td>
            <td>{{$tarea->tipo}}</td>
            <td>
                <a href="tarea/{{ $tarea->id }}">Ver detalle</a>
                <a href="tarea/{{ $tarea->id }}/edit">Editar</a>
                <br>
                <form action="tarea/{{ $tarea->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>

            </td>

        </tr>
    @endforeach
    </table>
</body>
</html>
