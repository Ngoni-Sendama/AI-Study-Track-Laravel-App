<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'super_admin',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'student',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 05:03:07',
                'updated_at' => '2025-01-27 05:03:07',
            ),
        ));
        
        
    }
}