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
            <td>id semestre </td>
            <td>id especialidad</td>
            <td>orden</td>
            <td> unidad didactica</td>
            <td>credito</td>
            <td>id tipo de unidad</td>
            <td>hora t</td>
            <td>hora D</td>
        </tr>
        @foreach($dato as $value)
        <tr><td>{{$value->idunidad_didactica}}</td>
                <td>{{$value->idsemestre}}</td>
                <td>{{$value->idespecialidad}}</td>
                <td>{{$value->orden}}</td>
                <td>{{$value->unidad_didactica_descripcion}}</td>
                <td>{{$value->credito}}</td>
                <td>{{$value->idtipo_unidad}}</td>
                <td>{{$value->hora_t}}</td>
                <td>{{$value->hora_p}}</td>
    </tr>
        
        @endforeach
    </table>
</body>
</html>