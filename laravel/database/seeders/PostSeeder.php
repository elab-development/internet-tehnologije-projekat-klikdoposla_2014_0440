<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Post::truncate();
        $user = User::factory()->create();
        //$array=explode(" ",$user->name);
        //$prezime = $array[1];
        //$ime = $array[0];
        Post::create([
            "name"=>"Naslov 1",
            "text"=> "ovo je neki tekst",
            "datum_objave"=>"2022-07-07",
            "profile_id"=> "2",
            "user_id"=> $user->id,
        ]);
    }
}
