<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      User::factory()->count(10)->create();

      collect([
        [
          'name' => 'Elfan',
          'username' => 'elfanhrsp',
          'email' => 'elfan@app.com',
          'password' => bcrypt('password'),
          'email_verified_at' => now(),
        ],
        [
          'name' => 'Teguh',
          'username' => 'teguhafrsnyh',
          'email' => 'teguh@app.com',
          'password' => bcrypt('password'),
          'email_verified_at' => now(),
        ]
      ])->each(function($user) {
        User::create($user);
      });
    }
}
