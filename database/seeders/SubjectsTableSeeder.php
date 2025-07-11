<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'name' => 'CAP486',
                'syllabus' => '{"88f3435d-a5b4-4897-a71d-23697785e59a":"syllabus\\/CAP486 MOBILE APP DEVELOPMENT WITH FLUTTER.pdf"}',
                'created_at' => '2025-01-26 18:14:23',
                'updated_at' => '2025-01-30 16:47:09',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'name' => 'CAP314 PRINCIPLES OF SOFTWARE ENGINEERING',
                'syllabus' => 'syllabus/CAP314 PRINCIPLES OF SOFTWARE ENGINEERING.pdf',
                'created_at' => '2025-01-26 18:14:32',
                'updated_at' => '2025-01-26 18:14:32',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'name' => 'Information Storage and Management Lab',
                'syllabus' => 'syllabus/CAP663 INFORMATION STORAGE AND MANAGEMENT.pdf',
                'created_at' => '2025-01-26 18:14:52',
                'updated_at' => '2025-01-26 18:14:52',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'name' => 'MEDICAL MICROBIOLOGY-II',
                'syllabus' => NULL,
                'created_at' => '2025-01-27 05:22:54',
                'updated_at' => '2025-01-27 05:22:54',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'name' => 'HAEMATOLOGY-IV',
                'syllabus' => NULL,
                'created_at' => '2025-01-27 05:28:54',
                'updated_at' => '2025-01-27 05:28:54',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'name' => 'MEDICAL PHARMACOLOGY',
                'syllabus' => NULL,
                'created_at' => '2025-01-27 05:29:08',
                'updated_at' => '2025-01-27 05:29:08',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 2,
            'name' => 'BIOCHEMISTRY(Metabolism & Molecular Diagnosis)',
                'syllabus' => NULL,
                'created_at' => '2025-01-27 05:29:24',
                'updated_at' => '2025-01-27 05:29:24',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 2,
                'name' => 'INTRODUCTORY HISTOPATHOLOGY-II ',
                'syllabus' => NULL,
                'created_at' => '2025-01-27 05:29:36',
                'updated_at' => '2025-01-27 05:29:36',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 2,
                'name' => 'INTRODUCTORY HISTOPATHOLOGY-II',
                'syllabus' => NULL,
                'created_at' => '2025-01-27 18:49:25',
                'updated_at' => '2025-01-27 18:49:25',
            ),
            9 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'name' => 'Marketing',
                'syllabus' => 'syllabus/MKT201 PRINCIPLES OF MARKETING.pdf',
                'created_at' => '2025-01-28 10:04:17',
                'updated_at' => '2025-01-28 10:04:17',
            ),
        ));
        
        
    }
}