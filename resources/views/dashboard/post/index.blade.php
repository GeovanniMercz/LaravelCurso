@extends('dashboard.master')

@section('contect')
    @include('dashboard.fragment._errors-form')

    <a href="{{ route('post.create')}}" target="blank">Create</a>
   
    <table>
        <thead>
            <tr>
                <td>
                    Id

                </td>
                <td>
                    Title

                </td>
                <td>
                    Posted
                </td>
                <td>
                    Category
                </td>
                <td>
                    Options
                </td>
                <td>

                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>
                        {{ $p->id }}

                    </td>
                    <td>
                        {{ $p->title }}

                    </td>
                    <td>
                        {{ $p->posted }}

                    </td>
                    <td>
                        {{ $p->category->title }}

                    </td>
                    <td>
                        <a href="{{ route('post.edit',$p)}}">Edit</a>
                        <a href="{{ route('post.show',$p)}}">Show</a>
                        <a href="{{ route('post.destroy',$p)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>


    {{ $posts->links() }}
@endsection
