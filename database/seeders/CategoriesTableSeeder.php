<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
            'name'        => 'Politica',
            'description' => 'Lorem picsum',
            ],
            
            [
            'name'        => 'Informatica',
            'description' => 'Lorem picsum',
            ],

            [
            'name'        => 'Scuola',
            'description' => 'Lorem picsum',
            ],

            [
            'name'        => 'Attualità',
            'description' => 'Lorem picsum',
            ],

            [
            'name'        => 'Cronaca',
            'description' => 'Lorem picsum',
            ],

            [
            'name'        => 'Cucina',
            'description' => 'Lorem picsum',
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
