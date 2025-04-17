@csrf

<div class="">
    <label for="">Title</label>
    <input type="text" name="title" value="{{ $post->title }}">
</div>

<div>
    <label for="">Slug</label>
    <input type="text" name="slug"value="{{ $post->slug }}">
</div>

<div>
    <label for="">Content</label>
    <textarea name="content">{{ $post->content }}</textarea>

</div>

<div>
    <label for="">Category</label>
    <select name="category_id">
        @foreach ($categories as $title => $id)
            <option {{ $post->category->id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label for="">Description</label>
    <textarea name="description">{{ $post->description }}</textarea>
</div>

<div>
    <label for="">Posted</label>
    <select name="posted">
        <option {{ $post->posted == 'yes' ? 'selected' : '' }} value="yes">YES</option>
        <option {{ $post->posted == 'not' ? 'selected' : '' }} value="not">NO</option>

    </select>
</div>

<button type="submit">
    Send
</button>
