<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'alias'=>'IPhone',
            'icon'=>'client_logo1.png',
            'link'=>'#'
        ]);
        Client::create([
            'alias'=>'Android',
            'icon'=>'client_logo2.png',
            'link'=>'http://android.com/'
        ]);
        Client::create([
            'alias'=>'Samsung',
            'icon'=>'client_logo4.png',
            'link'=>'http://samsung.com/'
        ]);
        Client::create([
            'alias'=>'Microsoft',
            'icon'=>'client_logo5.png',
            'link'=>'http://microsoft.com/'
        ]);
    }
}
