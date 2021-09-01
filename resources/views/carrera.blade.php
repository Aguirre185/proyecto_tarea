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
            <td>nombre de la carrera</td>
            <td>resolicion</td>
        </tr>
        @foreach($dato as $value)
        <tr><td>{{$value->idcarrera}}</td>
                <td>{{$value->carrera}}</td>
                <td>{{$value->resolucion}}</td>
    </tr>
        
        @endforeach
    </table>
</body>
</html>