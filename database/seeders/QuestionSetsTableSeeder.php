<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('question_sets')->delete();
        
        \DB::table('question_sets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'exam_id' => 2,
                'created_at' => '2025-01-26 18:16:45',
                'updated_at' => '2025-01-26 18:16:45',
            ),
            1 => 
            array (
                'id' => 2,
                'exam_id' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            2 => 
            array (
                'id' => 3,
                'exam_id' => 4,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            3 => 
            array (
                'id' => 4,
                'exam_id' => 3,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            4 => 
            array (
                'id' => 5,
                'exam_id' => 5,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            5 => 
            array (
                'id' => 6,
                'exam_id' => 6,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            6 => 
            array (
                'id' => 7,
                'exam_id' => 8,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            7 => 
            array (
                'id' => 8,
                'exam_id' => 9,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            8 => 
            array (
                'id' => 9,
                'exam_id' => 10,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            9 => 
            array (
                'id' => 10,
                'exam_id' => 11,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            10 => 
            array (
                'id' => 11,
                'exam_id' => 12,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            11 => 
            array (
                'id' => 12,
                'exam_id' => 13,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            12 => 
            array (
                'id' => 13,
                'exam_id' => 14,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            13 => 
            array (
                'id' => 14,
                'exam_id' => 15,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            14 => 
            array (
                'id' => 15,
                'exam_id' => 16,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            15 => 
            array (
                'id' => 16,
                'exam_id' => 17,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            16 => 
            array (
                'id' => 17,
                'exam_id' => 18,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            17 => 
            array (
                'id' => 18,
                'exam_id' => 19,
                'created_at' => '2025-01-29 18:56:41',
                'updated_at' => '2025-01-29 18:56:41',
            ),
            18 => 
            array (
                'id' => 19,
                'exam_id' => 20,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            19 => 
            array (
                'id' => 20,
                'exam_id' => 22,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            20 => 
            array (
                'id' => 21,
                'exam_id' => 23,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            21 => 
            array (
                'id' => 22,
                'exam_id' => 24,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            22 => 
            array (
                'id' => 23,
                'exam_id' => 21,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            23 => 
            array (
                'id' => 24,
                'exam_id' => 25,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            24 => 
            array (
                'id' => 25,
                'exam_id' => 26,
                'created_at' => '2025-06-03 18:36:11',
                'updated_at' => '2025-06-03 18:36:11',
            ),
            25 => 
            array (
                'id' => 26,
                'exam_id' => 27,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
        ));
        
        
    }
}