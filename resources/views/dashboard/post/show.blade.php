@extends('dashboard.master')

@section('contect')
    <h1>
        {{ $post->title }}
    </h1>
    <div>
        {{ $post->description }}
    </div>
    <div>
        {{ $post->content }}
    </div>
    <span>
        {{ $post->posted }}
    </span>
    <div>
        {{ $post->category->title }}
    </div>
    <img src=" /uploads/posts/{{ $post->image }}" style="width: 250px" alt="{{$post->title}}">
    {{ $post->image }}
@endsection
