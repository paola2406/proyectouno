<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Informacion de la Tarea</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tarea</th>
            <th>Descripcion</th>
            <th>Tipo</th>

        </tr>
        <tr>
            <td>{{$tarea->id}}</td>
            <td>{{$tarea->tareas}}</td>
            <td>{{$tarea->descripcion}}</td>
            <td>{{$tarea->tipo}}</td>
        </tr>
    </table>
</body>
</html>
