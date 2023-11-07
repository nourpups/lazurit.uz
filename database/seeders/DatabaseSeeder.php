<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->create([
                'name' => 'Admin',
                'is_admin' => 1,
                'phone' => '+998888000106',
                'password' => bcrypt('admina')
        ]);

        $this->call([
            CategorySeeder::class,
//            ProductSeeder::class
        ]);
    }
}
