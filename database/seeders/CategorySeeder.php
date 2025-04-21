<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); //Para que no exista restriccion o problemas al momento de querer borrar los registros con la llave foranea 
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1'); //Se vuelve a habilitar la funcion de la llave foranea 

        
        for ($i=0; $i < 21; $i++) { 
            Category::create(
                [
                'title' => "Category $i",
                'slug' => "Category-$i"
                ]
                );
        }
    }
}
