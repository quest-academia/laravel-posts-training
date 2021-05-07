<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            
        DB::table('users')->insert([
        
        'name' => 'user'.(string)$i,
        'email' => 'user'.(string)$i."@example.com",
        'password' => Hash::make('password'. $i),
        'created_at' => now(),
        'updated_at' => now(),

        ]);
        
        }
    }
}
