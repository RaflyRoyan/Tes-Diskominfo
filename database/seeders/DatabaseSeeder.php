<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'is_admin' => true,
            'firstname' => 'Rizal',
            'lastname' => 'Lazir',
            'email' => 'rizal@gmail.com',
            'password' => bcrypt('paga4q19'),
            'address' => 'upn',
            'province_id' => '11',
            'province' => 'Jawa Timur',
            'city_id' => '133',
            'city' => 'Kabupaten Gresik',
            'postal_code' => '61354',
            'phone' => '081234567890'
        ]);

        User::create([
            'is_admin' => FALSE,
            'firstname' => 'Dicky',
            'lastname' => 'SM',
            'email' => 'dicky@gmail.com',
            'password' => bcrypt('paga4q19'),
            'address' => 'upn',
            'province_id' => '11',
            'province' => 'Jawa Timur',
            'city_id' => '133',
            'city' => 'Kabupaten Gresik',
            'postal_code' => '61354',
            'phone' => '081234567890'
        ]);

        Category::create([
            'name' => 'Patient',
            'slug' => 'patient'
        ]);
        Category::create([
            'name' => 'Laboratory',
            'slug' => 'laboratory'
        ]);

        Product::create([
            'name' => "Oximeter",
            'category_id' => 1,
            'slug' => 'oximeter',
            'price' => 50000,
            'detail' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint asperiores quod ullam sapiente ducimus ab veritatis natus doloribus praesentium, tempora repellat voluptatem! Nostrum illum ad eaque quis architecto, incidunt voluptatum.Eum, amet? Necessitatibus, minima atque? Dolor accusantium provident vitae adipisci velit dicta porro mollitia cumque consequatur in recusandae nemo, quisquam odit tempora delectus, dolore maxime doloribus suscipit odio asperiores molestiae!',
        ]);
        Product::create([
            'name' => "Thermometer",
            'category_id' => 1,
            'slug' => 'thermometer',
            'price' => 35000,
            'detail' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint asperiores quod ullam sapiente ducimus ab veritatis natus doloribus praesentium, tempora repellat voluptatem! Nostrum illum ad eaque quis architecto, incidunt voluptatum.Eum, amet? Necessitatibus, minima atque? Dolor accusantium provident vitae adipisci velit dicta porro mollitia cumque consequatur in recusandae nemo, quisquam odit tempora delectus, dolore maxime doloribus suscipit odio asperiores molestiae!',
        ]);
        Product::create([
            'name' => "Microscope",
            'category_id' => 2,
            'slug' => 'microscope',
            'price' => 1200000,
            'detail' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint asperiores quod ullam sapiente ducimus ab veritatis natus doloribus praesentium, tempora repellat voluptatem! Nostrum illum ad eaque quis architecto, incidunt voluptatum.Eum, amet? Necessitatibus, minima atque? Dolor accusantium provident vitae adipisci velit dicta porro mollitia cumque consequatur in recusandae nemo, quisquam odit tempora delectus, dolore maxime doloribus suscipit odio asperiores molestiae!',
        ]);
        Product::create([
            'name' => "Flasks",
            'category_id' => 2,
            'slug' => 'flasks',
            'price' => 60000,
            'detail' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint asperiores quod ullam sapiente ducimus ab veritatis natus doloribus praesentium, tempora repellat voluptatem! Nostrum illum ad eaque quis architecto, incidunt voluptatum.Eum, amet? Necessitatibus, minima atque? Dolor accusantium provident vitae adipisci velit dicta porro mollitia cumque consequatur in recusandae nemo, quisquam odit tempora delectus, dolore maxime doloribus suscipit odio asperiores molestiae!',
        ]);
    }
}
