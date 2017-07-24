<?php

use Illuminate\Database\Seeder;
use App\Filter;
class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filter::create([
            'name'=>'GPS'
        ]);
        Filter::create([
            'name'=>'design'
        ]);
        Filter::create([
            'name'=>'android'
        ]);
        Filter::create([
            'name'=>'web'
        ]);
    }
}
