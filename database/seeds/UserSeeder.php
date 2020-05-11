<?php

use App\User;
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
        User::create([
            'name' => 'Midori Kocak',
            'email' => 'mtkocak@gmail.com',
            'about' => 'İnsanlara yardım etmeyi seven bilgisayar mühendisi',
            'password' => bcrypt('password'),
        ]);
    }
}
