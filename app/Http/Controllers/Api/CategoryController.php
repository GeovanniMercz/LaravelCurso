<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class CategoryController extends Controller
{

    public function index()
    {
        return response()->json(
            Category::paginate(3)
        );
    }
    public function all()
    {
        return response()->json(
            Category::get()
        );
    }


    public function store(StoreRequest $request)
    {
        return response()->json(Category::create($request->validated()));
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }


    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json("OK");
    }
    public function posts(Category $category)
    {
        $posts = Post::with("category")
            ->where("category_id", $category->id)
            ->get();
    
        return response()->json($posts);
    }
    
}
