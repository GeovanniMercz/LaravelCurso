@if ($errors->any())
@foreach ($errors->all() as $e)
    <div>
        <ul>
            <li>
                {{$e}}
            </li>
        </ul>
    </div>
@endforeach
    
@endif