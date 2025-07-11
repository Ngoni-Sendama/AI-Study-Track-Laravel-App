<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question_id' => 1,
                'option_text' => 'Open-closed principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            1 => 
            array (
                'id' => 2,
                'question_id' => 1,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            2 => 
            array (
                'id' => 3,
                'question_id' => 1,
                'option_text' => 'Single responsibility principle',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            3 => 
            array (
                'id' => 4,
                'question_id' => 1,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            4 => 
            array (
                'id' => 5,
                'question_id' => 2,
                'option_text' => 'Decomposing the system into smaller, more manageable modules',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            5 => 
            array (
                'id' => 6,
                'question_id' => 2,
                'option_text' => 'Starting with the lowest-level modules and working upwards',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            6 => 
            array (
                'id' => 7,
                'question_id' => 2,
                'option_text' => 'Creating a detailed plan of the entire system before any coding',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            7 => 
            array (
                'id' => 8,
                'question_id' => 2,
                'option_text' => 'Using a divide-and-conquer approach to solve problems',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            8 => 
            array (
                'id' => 9,
                'question_id' => 3,
                'option_text' => 'Data coupling',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            9 => 
            array (
                'id' => 10,
                'question_id' => 3,
                'option_text' => 'Stamp coupling',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            10 => 
            array (
                'id' => 11,
                'question_id' => 3,
                'option_text' => 'Control coupling',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            11 => 
            array (
                'id' => 12,
                'question_id' => 3,
                'option_text' => 'Common coupling',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            12 => 
            array (
                'id' => 13,
                'question_id' => 4,
                'option_text' => 'Modules are interconnected',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            13 => 
            array (
                'id' => 14,
                'question_id' => 4,
                'option_text' => 'Modules perform a single, well-defined task',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            14 => 
            array (
                'id' => 15,
                'question_id' => 4,
                'option_text' => 'Modules are independent of each other',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            15 => 
            array (
                'id' => 16,
                'question_id' => 4,
                'option_text' => 'Modules are reused throughout the system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            16 => 
            array (
                'id' => 17,
                'question_id' => 5,
                'option_text' => 'Represent the hierarchy of modules in a system',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            17 => 
            array (
                'id' => 18,
                'question_id' => 5,
                'option_text' => 'Specify the data flow between modules',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            18 => 
            array (
                'id' => 19,
                'question_id' => 5,
                'option_text' => 'Depict the control flow of a program',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            19 => 
            array (
                'id' => 20,
                'question_id' => 5,
                'option_text' => 'Design the user interface',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            20 => 
            array (
                'id' => 21,
                'question_id' => 6,
                'option_text' => 'The flow of data through a system',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            21 => 
            array (
                'id' => 22,
                'question_id' => 6,
                'option_text' => 'The relationships between entities in a system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            22 => 
            array (
                'id' => 23,
                'question_id' => 6,
                'option_text' => 'The hierarchy of modules in a system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            23 => 
            array (
                'id' => 24,
                'question_id' => 6,
                'option_text' => 'The control flow of a program',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            24 => 
            array (
                'id' => 25,
                'question_id' => 7,
                'option_text' => 'Liskov substitution principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            25 => 
            array (
                'id' => 26,
                'question_id' => 7,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            26 => 
            array (
                'id' => 27,
                'question_id' => 7,
                'option_text' => 'Open-closed principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            27 => 
            array (
                'id' => 28,
                'question_id' => 7,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            28 => 
            array (
                'id' => 29,
                'question_id' => 8,
                'option_text' => 'To break down a system into smaller, more manageable modules',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            29 => 
            array (
                'id' => 30,
                'question_id' => 8,
                'option_text' => 'To specify the data structures used in a system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            30 => 
            array (
                'id' => 31,
                'question_id' => 8,
                'option_text' => 'To define the interactions between modules',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            31 => 
            array (
                'id' => 32,
                'question_id' => 8,
                'option_text' => 'To identify the constraints of a system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            32 => 
            array (
                'id' => 33,
                'question_id' => 9,
                'option_text' => 'Procedural cohesion',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            33 => 
            array (
                'id' => 34,
                'question_id' => 9,
                'option_text' => 'Communicational cohesion',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            34 => 
            array (
                'id' => 35,
                'question_id' => 9,
                'option_text' => 'Sequential cohesion',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            35 => 
            array (
                'id' => 36,
                'question_id' => 9,
                'option_text' => 'Coincidental cohesion',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            36 => 
            array (
                'id' => 37,
                'question_id' => 10,
                'option_text' => 'To create a system that meets the user requirements',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            37 => 
            array (
                'id' => 38,
                'question_id' => 10,
                'option_text' => 'To optimize the performance of a system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            38 => 
            array (
                'id' => 39,
                'question_id' => 10,
                'option_text' => 'To minimize the maintenance cost of a system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            39 => 
            array (
                'id' => 40,
                'question_id' => 10,
                'option_text' => 'To adhere to a specific programming language',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            40 => 
            array (
                'id' => 41,
                'question_id' => 11,
                'option_text' => 'Adapter',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            41 => 
            array (
                'id' => 42,
                'question_id' => 11,
                'option_text' => 'Factory',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            42 => 
            array (
                'id' => 43,
                'question_id' => 11,
                'option_text' => 'Singleton',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            43 => 
            array (
                'id' => 44,
                'question_id' => 11,
                'option_text' => 'Prototype',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            44 => 
            array (
                'id' => 45,
                'question_id' => 12,
                'option_text' => 'To provide a detailed description of the system to be built',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            45 => 
            array (
                'id' => 46,
                'question_id' => 12,
                'option_text' => 'To guide the design process',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            46 => 
            array (
                'id' => 47,
                'question_id' => 12,
                'option_text' => 'To verify that the system meets the user requirements',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            47 => 
            array (
                'id' => 48,
                'question_id' => 12,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            48 => 
            array (
                'id' => 49,
                'question_id' => 13,
                'option_text' => 'Single responsibility principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            49 => 
            array (
                'id' => 50,
                'question_id' => 13,
                'option_text' => 'Open-closed principle',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            50 => 
            array (
                'id' => 51,
                'question_id' => 13,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            51 => 
            array (
                'id' => 52,
                'question_id' => 13,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            52 => 
            array (
                'id' => 53,
                'question_id' => 14,
                'option_text' => 'Cohesion measures the strength of relationships within a module, while coupling measures the strength of relationships between modules.',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            53 => 
            array (
                'id' => 54,
                'question_id' => 14,
                'option_text' => 'Coupling measures the strength of relationships within a module, while cohesion measures the strength of relationships between modules.',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            54 => 
            array (
                'id' => 55,
                'question_id' => 14,
                'option_text' => 'Cohesion and coupling are independent concepts.',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            55 => 
            array (
                'id' => 56,
                'question_id' => 14,
                'option_text' => 'Cohesion and coupling are synonymous terms.',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            56 => 
            array (
                'id' => 57,
                'question_id' => 15,
                'option_text' => 'Content coupling',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            57 => 
            array (
                'id' => 58,
                'question_id' => 15,
                'option_text' => 'Data coupling',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            58 => 
            array (
                'id' => 59,
                'question_id' => 15,
                'option_text' => 'Stamp coupling',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            59 => 
            array (
                'id' => 60,
                'question_id' => 15,
                'option_text' => 'External coupling',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            60 => 
            array (
                'id' => 61,
                'question_id' => 16,
                'option_text' => 'To define the data structures used in a system',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            61 => 
            array (
                'id' => 62,
                'question_id' => 16,
                'option_text' => 'To specify the relationships between entities in a system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            62 => 
            array (
                'id' => 63,
                'question_id' => 16,
                'option_text' => 'To document the design decisions made during the design process',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            63 => 
            array (
                'id' => 64,
                'question_id' => 16,
                'option_text' => 'To generate code from the design specification',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            64 => 
            array (
                'id' => 65,
                'question_id' => 17,
                'option_text' => 'Liskov substitution principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            65 => 
            array (
                'id' => 66,
                'question_id' => 17,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            66 => 
            array (
                'id' => 67,
                'question_id' => 17,
                'option_text' => 'Open-closed principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            67 => 
            array (
                'id' => 68,
                'question_id' => 17,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            68 => 
            array (
                'id' => 69,
                'question_id' => 18,
                'option_text' => 'Structured design emphasizes data flow, while object-oriented design emphasizes object interaction.',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            69 => 
            array (
                'id' => 70,
                'question_id' => 18,
                'option_text' => 'Object-oriented design emphasizes data flow, while structured design emphasizes object interaction.',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            70 => 
            array (
                'id' => 71,
                'question_id' => 18,
                'option_text' => 'Structured design and object-oriented design are synonymous terms.',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            71 => 
            array (
                'id' => 72,
                'question_id' => 18,
                'option_text' => 'There is no difference between a structured design and an object-oriented design.',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            72 => 
            array (
                'id' => 73,
                'question_id' => 19,
                'option_text' => 'Factory',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            73 => 
            array (
                'id' => 74,
                'question_id' => 19,
                'option_text' => 'Singleton',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            74 => 
            array (
                'id' => 75,
                'question_id' => 19,
                'option_text' => 'Prototype',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            75 => 
            array (
                'id' => 76,
                'question_id' => 19,
                'option_text' => 'Builder',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            76 => 
            array (
                'id' => 77,
                'question_id' => 20,
                'option_text' => 'To define the overall architecture of the system',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            77 => 
            array (
                'id' => 78,
                'question_id' => 20,
                'option_text' => 'To design the individual modules of the system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            78 => 
            array (
                'id' => 79,
                'question_id' => 20,
                'option_text' => 'To implement the system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            79 => 
            array (
                'id' => 80,
                'question_id' => 20,
                'option_text' => 'To test the system',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            80 => 
            array (
                'id' => 81,
                'question_id' => 21,
                'option_text' => 'Liskov substitution principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            81 => 
            array (
                'id' => 82,
                'question_id' => 21,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            82 => 
            array (
                'id' => 83,
                'question_id' => 21,
                'option_text' => 'Open-closed principle',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            83 => 
            array (
                'id' => 84,
                'question_id' => 21,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            84 => 
            array (
                'id' => 85,
                'question_id' => 22,
                'option_text' => 'To evaluate the quality of a design',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            85 => 
            array (
                'id' => 86,
                'question_id' => 22,
                'option_text' => 'To identify potential risks and issues',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            86 => 
            array (
                'id' => 87,
                'question_id' => 22,
                'option_text' => 'To provide feedback to the design team',
                'is_correct' => 0,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            87 => 
            array (
                'id' => 88,
                'question_id' => 22,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
        ));
        
        
    }
}