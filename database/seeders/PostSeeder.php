<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); //Para que no exista restriccion o problemas al momento de querer borrar los registros con la llave foranea 
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1'); //Se vuelve a habilitar la funcion de la llave foranea 

        for ($i=0; $i < 30; $i++) { 
            $c = Category::inRandomOrder()->first();

            $title = Str::random(20);

            Post::create([
                'title'=> $title,
                'slug'=> Str::slug($title),
                'content'=> "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt est voluptatibus incidunt ullam dignissimos. Assumenda delectus asperiores aut. Tempora nam itaque a architecto error enim, magnam culpa quisquam quod vitae.</p>",
                'category_id'=> $c->id,
                'description'=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt est voluptatib",
                'posted'=> "yes",
            ]);
        }
    }
}
 