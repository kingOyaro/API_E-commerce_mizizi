<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => 249999,
            'description' => 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is. Add matter family active mutual put wishes happen. '
        ]);

        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => 249999,
            'description' => 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is. Add matter family active mutual put wishes happen. '
        ]);

        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => 249999,
            'description' => 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is. Add matter family active mutual put wishes happen. '
        ]);

        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => 249999,
            'description' => 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is. Add matter family active mutual put wishes happen. '
        ]);

        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'laptop-5',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => 249999,
            'description' => 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is. Add matter family active mutual put wishes happen. '
        ]);

        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'laptop-6',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => 249999,
            'description' => 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is. Add matter family active mutual put wishes happen. '
        ]);

        Product::create([
            'name' => 'HP pavilion gaming',
            'slug' => 'hp-pavilion-gaming',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 109999,
            'description' => 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is. Add matter family active mutual put wishes happen. '
        ]);

        Product::create([
            'name' => 'HP ENVY',
            'slug' => 'hp-envy',
            'details' => '15 inch, 1TB SSD, 8GB RAM',
            'price' => 129999,
            'description' => 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is. Add matter family active mutual put wishes happen. '
        ]);
    }
}
