<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Odila Noura',
            'username' => 'odilanoura',
            'email' => 'odilanoura@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Nadya Pinky',
        //     'email' => 'pinkynadya@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Framework App',
        //     'slug' => 'framework-app',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur architecto sint corporis fugit perferendis.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste quos mollitia unde tempore laboriosam deleniti explicabo voluptatem ab quaerat possimus laborum temporibus fugit veniam eum officia, minima culpa rem labore et natus recusandae magnam, cum pariatur! Quidem eos voluptates tenetur error! Fugit, eligendi quasi similique maiores omnis nihil dolore esse nisi aliquam error, impedit ratione accusamus incidunt harum commodi debitis eius. Voluptate optio deleniti doloremque adipisci cum nemo deserunt repudiandae quisquam? Aspernatur reprehenderit fuga sequi tenetur maiores omnis necessitatibus exercitationem sapiente hic iste cum, modi accusantium veritatis, debitis iusto! Tempore repudiandae harum expedita, illum commodi inventore quos ut. Dolore, error.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Framework App Kedua',
        //     'slug' => 'framework-app-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur architecto sint corporis fugit perferendis.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste quos mollitia unde tempore laboriosam deleniti explicabo voluptatem ab quaerat possimus laborum temporibus fugit veniam eum officia, minima culpa rem labore et natus recusandae magnam, cum pariatur! Quidem eos voluptates tenetur error! Fugit, eligendi quasi similique maiores omnis nihil dolore esse nisi aliquam error, impedit ratione accusamus incidunt harum commodi debitis eius. Voluptate optio deleniti doloremque adipisci cum nemo deserunt repudiandae quisquam? Aspernatur reprehenderit fuga sequi tenetur maiores omnis necessitatibus exercitationem sapiente hic iste cum, modi accusantium veritatis, debitis iusto! Tempore repudiandae harum expedita, illum commodi inventore quos ut. Dolore, error.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Framework App Ketiga',
        //     'slug' => 'framework-app-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur architecto sint corporis fugit perferendis.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste quos mollitia unde tempore laboriosam deleniti explicabo voluptatem ab quaerat possimus laborum temporibus fugit veniam eum officia, minima culpa rem labore et natus recusandae magnam, cum pariatur! Quidem eos voluptates tenetur error! Fugit, eligendi quasi similique maiores omnis nihil dolore esse nisi aliquam error, impedit ratione accusamus incidunt harum commodi debitis eius. Voluptate optio deleniti doloremque adipisci cum nemo deserunt repudiandae quisquam? Aspernatur reprehenderit fuga sequi tenetur maiores omnis necessitatibus exercitationem sapiente hic iste cum, modi accusantium veritatis, debitis iusto! Tempore repudiandae harum expedita, illum commodi inventore quos ut. Dolore, error.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Framework App Keempat',
        //     'slug' => 'framework-app-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur architecto sint corporis fugit perferendis.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste quos mollitia unde tempore laboriosam deleniti explicabo voluptatem ab quaerat possimus laborum temporibus fugit veniam eum officia, minima culpa rem labore et natus recusandae magnam, cum pariatur! Quidem eos voluptates tenetur error! Fugit, eligendi quasi similique maiores omnis nihil dolore esse nisi aliquam error, impedit ratione accusamus incidunt harum commodi debitis eius. Voluptate optio deleniti doloremque adipisci cum nemo deserunt repudiandae quisquam? Aspernatur reprehenderit fuga sequi tenetur maiores omnis necessitatibus exercitationem sapiente hic iste cum, modi accusantium veritatis, debitis iusto! Tempore repudiandae harum expedita, illum commodi inventore quos ut. Dolore, error.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
