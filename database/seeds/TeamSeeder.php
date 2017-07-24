<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name'=>'Tom Rensed',
            'position'=>'Chief Executive Officer',
            'img'=>'team_pic1.jpg',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
            'twitter'=>'http://twitter.com/',
            'google_plus'=>'http://google.com'
        ]);
        Team::create([
            'name'=>'Kathren Mory',
            'position'=>'Vice President',
            'img'=>'team_pic2.jpg',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
            'facebook'=>'http://facebook.com/'
        ]);
        Team::create([
            'name'=>'Lancer Jack',
            'position'=>'Senior Manager',
            'img'=>'team_pic3.jpg',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',
            'facebook'=>'http://facebook.com/',
            'twitter'=>'http://twitter.com/'
        ]);
    }
}
