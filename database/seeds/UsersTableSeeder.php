<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'test@gmail.com',
            'password' => Hash::make('testing'),
        ]);

        factory(User::class, 5)->create([
            'password' => Hash::make(Str::random(15)),
        ]);
    }
}
