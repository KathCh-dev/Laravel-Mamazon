<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        $catMode = $categories[];

        $products = [
            'Electronique' => [
                [
                    'product_title' => 'Ordinateur',
                    'product_description' => 'Un ordinateur qui a certaines capacités dû au matériel qu il contient. Convient au travail comme au loisir.',
                    'price' => '800',
                ],
            ],

            'Vêtements' => [
                [
                    'product_title' => 'Pull',
                    'product_description' => 'Un pull. Choisissez la couleur qui vous plaît... ou pas.',
                    'price' => '39.99',
                ],
            ],

            'Maison et jardin' => [
                [
                    'product_title' => 'Pelle',
                    'product_description' => 'Une pelle, petite ou non, mais très solide. Vous pouvez vous en servir pour creuser afin d enterrer ce que (qui) bon vous semble',
                    'price' => '24.90',
                ],
            ],
        ];

        foreach($categories as $category){
            foreach ($products[$category->name] as $product) {
                Product::create([
                    'id_product' => \Str::uuid(),
                    'product_title' => $product['product_title'],
                    'slug' => \Str::slug($product['product_title']),
                    'product_description' => $product['product_description'],
                    'price' => $product['price'],
                    'id_category' => $category->category_id,
                ]);
            }
        }
    }
}
