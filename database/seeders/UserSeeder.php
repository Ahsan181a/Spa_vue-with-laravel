<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::create([
            'name'=>'Ahsan Habib',
            'email'=>'ahsanbondhan@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
