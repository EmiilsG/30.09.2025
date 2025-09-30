<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create(['title' => 'Pirmais ieraksts', 'content' => 'Saturs pirmajam ierakstam']);
        Post::create(['title' => 'Otrais ieraksts', 'content' => 'Saturs otrajam ierakstam']);
        Post::create(['title' => 'Trešais ieraksts', 'content' => 'Saturs trešajam ierakstam']);
    }
}
