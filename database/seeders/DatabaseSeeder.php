<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      $user = new User();
      $user->name = 'admin';
      $user->email = 'admin@admin';
      $user->password = bcrypt('123');
      $user->isAdmin = 1;
      $user->save();

    }
}
