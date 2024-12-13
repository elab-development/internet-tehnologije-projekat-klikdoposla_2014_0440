<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
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

        Profile::create([
            "website"=>"linkedin.com/ana",
            "status"=>"Intern",
            "skills"=>"PHP, React",
            "company"=>"Microsoft",
            "location"=>"Beograd",
            "bio"=>"Student u potrazi za zaposlenjem",
            "githubusername"=>"ana1",
            "experience"=>"3 meseca prakse u Microsoft-u",
            "education"=>"FON",
        ]);
    }
}
