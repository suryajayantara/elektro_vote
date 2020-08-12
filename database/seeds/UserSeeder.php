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
        $admin = User::create([
            'name' => 'Adnya Pramesti',
            'email' => 'adnyapramesti@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $User = User::create([
            'name' => 'Arya Chandrayana',
            'email' => '1915323005',
            'password' => bcrypt('12345678')
        ]);

        $User->assignRole('mahasiswa');
    }
}
