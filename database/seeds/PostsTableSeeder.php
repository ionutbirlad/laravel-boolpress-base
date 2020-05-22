<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {
          $post = new Post();
          $post->author = $faker->name();
          $post->title = $faker->sentence(6, true);
          $post->img = 'https://picsum.photos/500/400';
          $post->body = $faker->paragraph(6, true);
          $post->location = $faker->city();
          $post->published = rand(0, 1);
          $now = Carbon::now()->format('Y-m-d-H-i-s');
          $post->slug = Str::slug($post->title , '-') . $now;
          $post->save();
        }
    }
}
