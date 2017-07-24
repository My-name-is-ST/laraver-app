<?php

use Illuminate\Database\Seeder;
use App\Portfolio;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Portfolio::create([
            'name'=>'Style App',
            'filter_id'=>'1',
            'img'=>'portfolio_pic1.jpg',
            'link'=>'http://site.com/',
        ]);
        Portfolio::create([
            'name'=>'Finance App',
            'filter_id'=>'1',
            'img'=>'portfolio_pic2.jpg',
            'link'=>'#',
        ]);
        Portfolio::create([
            'name'=>'Concept',
            'filter_id'=>'2',
            'img'=>'portfolio_pic3.jpg',
            'link'=>'#',
        ]);
        Portfolio::create([
            'name'=>'Shopping',
            'filter_id'=>'3',
            'img'=>'portfolio_pic4.jpg',
            'link'=>'#',
        ]);
        Portfolio::create([
            'name'=>'Managment',
            'filter_id'=>'2',
            'img'=>'portfolio_pic5.jpg',
            'link'=>'#',
        ]);
        Portfolio::create([
            'name'=>'iPhone',
            'filter_id'=>'4',
            'img'=>'portfolio_pic6.jpg',
            'link'=>'http://iphone.com/',
        ]);
        Portfolio::create([
            'name'=>'Nexus Phone',
            'filter_id'=>'4',
            'img'=>'portfolio_pic7.jpg',
            'link'=>'#',
        ]);
        Portfolio::create([
            'name'=>'Android',
            'filter_id'=>'3',
            'img'=>'portfolio_pic8.jpg',
            'link'=>'http://android.ru/',
        ]);
    }
}
