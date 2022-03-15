<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Agregar Tarea</h1>

     @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($tarea)
        <form action="/tarea/{{$tarea->id}}" method="POST">
        @method('PATCH')
    @else
        <form action="/tarea" method="POST">
    @endisset

        @csrfisset($tarea)
        <label for="tarea">Nombre de la tarea: </label><br>
        <input type="text" name="tarea" value={{isset($tarea)?$tarea->tareas : ''}}>
        <br>
        <label for="descripcion">descripcion </label><br>
        <textarea name="descripcion" id="descripcion" cols="10" row="5">
            {{isset($tarea)? $tarea->descripcion : ''}}
    </textarea>
        <br>
        <label for="tipo">categoria</label><br>
        <select name="tipo" id="tipo">
            <option value="escuela"{{isset($tarea)&&$tarea->tipo=='Escuela'?'selected':''}}>Escuela</option>
            <option value="Trabajo"{{isset($tarea)&&$tarea->tipo=='Trabajo'?'selected':''}}>Trabajo</option>
        </select>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
