<?php

namespace Database\Seeders;

use App\Models\CategoryModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_title' => 'Informatique',
                'category_description' => 'Ordinateurs, périphériques et accessoires.'
            ],
            [
                'category_title' => 'Maison et jardin',
                'category_description' => 'Mobilier et décoration pour la maison et le jardin.'
            ],
            [
                'category_title' => 'Mode',
                'category_description' => 'Vêtements, chaussures et accessoires de mode.'
            ],
            [
                'category_title' => 'Sports et loisirs',
                'category_description' => 'Equipements sportifs',
            ],
        ];

        foreach ($categories as $category) {
            CategoryModel::create([
                'id_category' => \Str::uuid(), // generate a unique UUID
                'category_title' => $category['category_title'],
                'slug' => \Str::slug($category['category_title']), //slugify the name
                'category_description' => $category['category_description'],
            ]);
        }
    }
}
