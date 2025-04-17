<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::paginate(3); //Busca el registro en la base de datos con el ID que se pone como parametro 
        return view('dashboard/post/index', compact('posts'));



        // $post = Post::find(1)->delete(); //Borra el registro de la base de datos con el ID que se le manda 

        // $post -> update(  //Se actualiza la informacion dependiendo del ID que tenga la variable de $post
        //     [
        //         'title' => 'test title new 2',
        //         'slug' => 'test slug new',
        //         'content' => 'test content new',
        //         'category_id' => 1,
        //         'description' => 'test description new',
        //         'image' => 'test image new',
        //     ]
        // );

        // $post = Post::create( //Crea un registro en la tabla de post con todas sus columnas 
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'content' => 'test content',
        //         'category_id' => 1,
        //         'description' => 'test description',
        //         'posted' => 'not',
        //         'image' => 'test image',
        //     ]
        // );





    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::pluck('id', 'title');
        $post = new Post();
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        Post::create($request->validated());
        return to_route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {

        $data = $request->validated();
        //Image
        if(isset($data['image'])){
        $data['image'] = $filename = time().'.'.$data['image']->extension();

        $request ->image->move(public_path('uploads/posts'),$filename);
        }
        //Image
        $post->update($data);
        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
