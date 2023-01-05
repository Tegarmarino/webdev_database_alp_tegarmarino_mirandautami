<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Member::factory(100)->create();


        $this->call([
            // WriterSeeder::class,
            // BookSeeder::class,
            UserSeeder::class
        ]);

        // // Disable Foreign key check for this connection before running seeders
        // DatabaseSeeder::statement('SET FOREIGN_KEY_CHECKS=0;');

        // $this->call('UserTableSeeder');
        // // ...

        // // FOREIGN_KEY_CHECKS is supposed to only apply to a single
        // // connection and reset itself but I like to explicitly
        // // undo what I've done for clarity
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // // \App\Models\User::factory(10)->create();

        // // \App\Models\User::factory()->create([
        // //     'name' => 'Test User',
        // //     'email' => 'test@example.com',
        // // ]);
    }
}
