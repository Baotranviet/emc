<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => User::MALE,
            'birthdate' => '1999-08-14',
            'address' => 'Califonia American',
            'phone' => '0123456789',
            'role' => 1,
        ]);

        factory(User::class, 50)->create();
    }
}
