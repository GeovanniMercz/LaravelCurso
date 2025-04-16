@extends('dashboard.master')

@section('contect')

    @include('dashboard.fragment._errors-form')


    

        <form action="{{route(name: 'post.store')}}" method="post">



        @csrf

        <div class="    ">
            <label for="">Title</label>
            <input type="text" name="title">
        </div>

      <div>
        <label for="">Slug</label>
        <input type="text" name="slug">
      </div>

      <div>
        <label for="">Content</label>
        <textarea name="content"></textarea>

      </div>

      <div>
        <label for="">Category</label>
        <select name="category_id">
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
      </div>

     

       
       <div>
        <label for="">Description</label>
        <textarea name="description"></textarea>
       </div>

    <div>
        <label for="">Posted</label>
        <select name="posted">
            <option value="yes">YES</option>
            <option value="not">NO</option>

        </select>
    </div>

    



        <button type="submit">Send</button>


    </form>
@endsection
