<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /*
     * php artisan db:seed --class=PostSeeder
    */
    public function run()
    {
        Post::factory()->withTranslations()->count(1)->create();
    }
}
