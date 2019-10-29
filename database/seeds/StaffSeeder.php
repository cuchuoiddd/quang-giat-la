<?php

use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'asd',
            'email' => 'anhtd.dev@gmail.com',
            'password' => '$2y$10$9QGThkmFwnyBc8UGLLBmyOxKO304hvgA9YLzST39qWGBQNzB2hUPe'
        ]);
    }
}
