@extends('master')

@section('contect')
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
@endsection