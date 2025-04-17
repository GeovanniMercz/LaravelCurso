@csrf

<div class="">
    <label for="">Title</label>
    <input type="text" name="title" value="{{ old('title', $category->title) }}">
</div>

<div>
    <label for="">Slug</label>
    <input type="text" name="slug"value="{{ old('slug', $category->slug) }}">
</div>


<button type="submit">
    Send
</button>
