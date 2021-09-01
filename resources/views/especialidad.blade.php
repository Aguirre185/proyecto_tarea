<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
        <tr>
            <td>codigo</td>
            <td>id de la carrera</td>
            <td>descripcion de especialidad</td>
            <td>menciones</td>
        </tr>
        @foreach($dato as $value)
        <tr><td>{{$value->idespecialidad}}</td>
                <td>{{$value->idcarrera}}</td>
                <td>{{$value->descripcion_especialidad}}</td>
                <td>{{$value->mencion}}</td>
    </tr>
        
        @endforeach
    </table>
</body>
</html>