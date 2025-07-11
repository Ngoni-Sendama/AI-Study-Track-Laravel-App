<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ngoni',
                'email' => 'ngoni@gmail.com',
                'email_verified_at' => '2025-01-26 18:12:55',
                'password' => '$2y$12$eLeuPRG4ip6k1nOxzFWcvuxGTDa6lbM8IQ6LKV56XNgtqsM5MOAIy',
                'remember_token' => 'oEwhmFuDlagVZXdCfkBOaHlJ8vZtz9vWx7X3L0Q6tzi733NfKqMy0Q5XcDwM',
                'created_at' => '2025-01-26 18:12:55',
                'updated_at' => '2025-01-26 18:12:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Shalom',
                'email' => 'shalom@gmail.com',
                'email_verified_at' => '2025-01-26 18:12:55',
                'password' => '$2y$12$0Nw3i39lNXP0mVeZ9nUNZu3XTGps.6NzahaPAlJ//Ffy0NTqry3.2',
                'remember_token' => 'I5LHjU0ruLx9Io5PTOdihv05TJYIy8UKMlyVZGCuAJMfwfxKTgcK9KMksaeF',
                'created_at' => '2025-01-26 18:12:55',
                'updated_at' => '2025-01-26 18:12:55',
            ),
        ));
        
        
    }
}