<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Post::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Arianto',
            'username' => 'arianto-510',
            'email' => 'arianto@usn.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Muhammad Al-Qurnadi',
            'username' => 'nadiqurnadi',
            'email' => 'nadiqurnadi09@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul satu',
            'slug' => 'judul-satu',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem libero commodi repudiandae incidunt voluptas necessitatibus autem consequuntur expedita aperiam ipsam vero tempora, sed maxime suscipit molestias, amet voluptatem eos nam!'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 2,
            'title' => 'Judul Dua',
            'slug' => 'judul-dua',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem libero commodi repudiandae incidunt voluptas necessitatibus autem consequuntur expedita aperiam ipsam vero tempora, sed maxime suscipit molestias, amet voluptatem eos nam!'
        ]);

        Post::create([
            'category_id' => 3,
            'user_id' => 1,
            'title' => 'Judul Tiga',
            'slug' => 'judul-tiga',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, necessitatibus ex autem nisi minima totam voluptates quae atque facilis officiis? Vero totam similique voluptates repellat saepe, fugiat aliquid suscipit assumenda ea earum ipsum cum sit ex eos architecto culpa, facere consequuntur mollitia beatae sunt non, aspernatur dolores nulla. Enim est libero itaque necessitatibus ratione repudiandae, inventore cum laudantium nihil officiis sit distinctio voluptatibus accusamus molestias quam pariatur aut mollitia amet magni minima impedit asperiores expedita! Vero quas nobis ad aperiam expedita voluptate nostrum inventore sunt explicabo quam repellendus esse cupiditate laborum maxime rerum beatae, architecto molestias, eos reiciendis cum natus hic facere eligendi! Distinctio asperiores optio voluptatum eaque minima, quidem labore possimus incidunt tempora officia, vitae maiores a officiis impedit.'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 2,
            'title' => 'Judul Empat',
            'slug' => 'judul-empat',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, necessitatibus ex autem nisi minima totam voluptates quae atque facilis officiis? Vero totam similique voluptates repellat saepe, fugiat aliquid suscipit assumenda ea earum ipsum cum sit ex eos architecto culpa, facere consequuntur mollitia beatae sunt non, aspernatur dolores nulla. Enim est libero itaque necessitatibus ratione repudiandae, inventore cum laudantium nihil officiis sit distinctio voluptatibus accusamus molestias quam pariatur aut mollitia amet magni minima impedit asperiores expedita! Vero quas nobis ad aperiam expedita voluptate nostrum inventore sunt explicabo quam repellendus esse cupiditate laborum maxime rerum beatae, architecto molestias, eos reiciendis cum natus hic facere eligendi! Distinctio asperiores optio voluptatum eaque minima, quidem labore possimus incidunt tempora officia, vitae maiores a officiis impedit.'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 1,
            'title' => 'Judul Lima',
            'slug' => 'judul-lima',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem libero commodi repudiandae incidunt voluptas necessitatibus autem consequuntur expedita aperiam ipsam vero tempora, sed maxime suscipit molestias, amet voluptatem eos nam!'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Networking',
            'slug' => 'networking'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
    }
}
