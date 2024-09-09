<?php

namespace Database\Seeders;
use App\Models\Profile;
use App\Models\User;
use App\Models\Post;

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
        Profile::truncate();
        User::factory(3)->create();
        $user = User::factory()->create();
        $k =  Profile::create([
            "website"=>"linkedin.com/sandra",
            "status"=>"Junior Developer",
            "skills"=>"Java, Python",
            "company"=>"FIS",
            "location"=>"Beograd",
            "bio"=>"Apsolvent u potrazi za novim poslom",
            "githubusername"=>"sandra1",
            "experience"=>"1 godina u FIS-u",
            "education"=>"ETF",
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Post::create([
            "name"=>$ime,
            "text"=> $prezime,
            "datum_objave"=>"2022-08-08",
            //"vreme"=>"20:00",
            //"studio"=> "Helena",
            "profile_id"=> $k->id,
            "user_id"=> $user->id,
        ]);
    }
}
