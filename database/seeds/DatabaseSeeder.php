<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>env('MAIL_NAME_ADMIN'),
            'email'=>env('MAIL_ADMIN'),
            'password'=>env('PASSWORD_ADMIN')
        ]);
         //$this->call(UsersTableSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(FilterSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TeamSeeder::class);
    }
}
