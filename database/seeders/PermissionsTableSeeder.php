<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'view_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'view_any_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'create_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'update_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'restore_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'restore_any_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'replicate_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'reorder_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'delete_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'delete_any_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'force_delete_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'force_delete_any_activitylog',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'view_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'view_any_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'create_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'update_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'restore_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'restore_any_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'replicate_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'reorder_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'delete_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'delete_any_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'force_delete_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'force_delete_any_exam',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'view_role',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'view_any_role',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'create_role',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'update_role',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'delete_role',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'delete_any_role',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'view_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'view_any_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'create_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'update_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'restore_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'restore_any_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'replicate_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'reorder_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'delete_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'delete_any_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'force_delete_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'force_delete_any_subject',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'page_EditProfilePage',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'page_ExamAnswer',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'page_ExamWriting',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'widget_StatsOverview',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'widget_ExamsPerfomance',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'widget_SyllabusCompletion',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:18:32',
                'updated_at' => '2025-01-27 04:18:32',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'view_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'view_any_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'create_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'update_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'restore_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'restore_any_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'replicate_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'reorder_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'delete_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'delete_any_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'force_delete_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'force_delete_any_user',
                'guard_name' => 'web',
                'created_at' => '2025-01-27 04:41:30',
                'updated_at' => '2025-01-27 04:41:30',
            ),
        ));
        
        
    }
}