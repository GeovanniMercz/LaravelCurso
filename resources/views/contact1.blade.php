<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <H1>
        Contact One
        <br>
        {{ $name }}
    </H1>
    @if ($name != 'Geovanni')
        Tu nombre no es Geovanni
    @else
        <H2>
            Tu nombre es Geovanni
        </H2>
    @endif
    <ul>
        @foreach ([1, 2, 3, 4, 5] as $item)
        <li>
            {{ $item }}
        </li>
        @endforeach
    </ul>
</body>

</html>
