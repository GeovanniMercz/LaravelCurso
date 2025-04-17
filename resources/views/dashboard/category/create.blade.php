@extends('dashboard.master')

@section('contect')

    @include('dashboard.fragment._errors-form')

        <form action="{{route(name: 'category.store')}}" method="post">
            @include('dashboard.category._form' , ['task'=>'create'])
    </form>
@endsection
