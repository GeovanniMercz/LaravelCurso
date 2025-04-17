@extends('dashboard.master')

@section('contect')

    @include('dashboard.fragment._errors-form')

        <form action="{{route(name: 'post.store')}}" method="post">
            @include('dashboard.post._form' , ['task'=>'create'])
    </form>
@endsection
