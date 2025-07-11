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
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            1 => 
            array (
                'id' => 2,
                'question_id' => 1,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            2 => 
            array (
                'id' => 3,
                'question_id' => 1,
                'option_text' => 'Single responsibility principle',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            3 => 
            array (
                'id' => 4,
                'question_id' => 1,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            4 => 
            array (
                'id' => 5,
                'question_id' => 2,
                'option_text' => 'Decomposing the system into smaller, more manageable modules',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            5 => 
            array (
                'id' => 6,
                'question_id' => 2,
                'option_text' => 'Starting with the lowest-level modules and working upwards',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            6 => 
            array (
                'id' => 7,
                'question_id' => 2,
                'option_text' => 'Creating a detailed plan of the entire system before any coding',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            7 => 
            array (
                'id' => 8,
                'question_id' => 2,
                'option_text' => 'Using a divide-and-conquer approach to solve problems',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            8 => 
            array (
                'id' => 9,
                'question_id' => 3,
                'option_text' => 'Data coupling',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            9 => 
            array (
                'id' => 10,
                'question_id' => 3,
                'option_text' => 'Stamp coupling',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            10 => 
            array (
                'id' => 11,
                'question_id' => 3,
                'option_text' => 'Control coupling',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            11 => 
            array (
                'id' => 12,
                'question_id' => 3,
                'option_text' => 'Common coupling',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            12 => 
            array (
                'id' => 13,
                'question_id' => 4,
                'option_text' => 'Modules are interconnected',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            13 => 
            array (
                'id' => 14,
                'question_id' => 4,
                'option_text' => 'Modules perform a single, well-defined task',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            14 => 
            array (
                'id' => 15,
                'question_id' => 4,
                'option_text' => 'Modules are independent of each other',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            15 => 
            array (
                'id' => 16,
                'question_id' => 4,
                'option_text' => 'Modules are reused throughout the system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            16 => 
            array (
                'id' => 17,
                'question_id' => 5,
                'option_text' => 'Represent the hierarchy of modules in a system',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            17 => 
            array (
                'id' => 18,
                'question_id' => 5,
                'option_text' => 'Specify the data flow between modules',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            18 => 
            array (
                'id' => 19,
                'question_id' => 5,
                'option_text' => 'Depict the control flow of a program',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            19 => 
            array (
                'id' => 20,
                'question_id' => 5,
                'option_text' => 'Design the user interface',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            20 => 
            array (
                'id' => 21,
                'question_id' => 6,
                'option_text' => 'The flow of data through a system',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            21 => 
            array (
                'id' => 22,
                'question_id' => 6,
                'option_text' => 'The relationships between entities in a system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            22 => 
            array (
                'id' => 23,
                'question_id' => 6,
                'option_text' => 'The hierarchy of modules in a system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            23 => 
            array (
                'id' => 24,
                'question_id' => 6,
                'option_text' => 'The control flow of a program',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            24 => 
            array (
                'id' => 25,
                'question_id' => 7,
                'option_text' => 'Liskov substitution principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            25 => 
            array (
                'id' => 26,
                'question_id' => 7,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            26 => 
            array (
                'id' => 27,
                'question_id' => 7,
                'option_text' => 'Open-closed principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            27 => 
            array (
                'id' => 28,
                'question_id' => 7,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            28 => 
            array (
                'id' => 29,
                'question_id' => 8,
                'option_text' => 'To break down a system into smaller, more manageable modules',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            29 => 
            array (
                'id' => 30,
                'question_id' => 8,
                'option_text' => 'To specify the data structures used in a system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            30 => 
            array (
                'id' => 31,
                'question_id' => 8,
                'option_text' => 'To define the interactions between modules',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            31 => 
            array (
                'id' => 32,
                'question_id' => 8,
                'option_text' => 'To identify the constraints of a system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            32 => 
            array (
                'id' => 33,
                'question_id' => 9,
                'option_text' => 'Procedural cohesion',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            33 => 
            array (
                'id' => 34,
                'question_id' => 9,
                'option_text' => 'Communicational cohesion',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            34 => 
            array (
                'id' => 35,
                'question_id' => 9,
                'option_text' => 'Sequential cohesion',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            35 => 
            array (
                'id' => 36,
                'question_id' => 9,
                'option_text' => 'Coincidental cohesion',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            36 => 
            array (
                'id' => 37,
                'question_id' => 10,
                'option_text' => 'To create a system that meets the user requirements',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            37 => 
            array (
                'id' => 38,
                'question_id' => 10,
                'option_text' => 'To optimize the performance of a system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            38 => 
            array (
                'id' => 39,
                'question_id' => 10,
                'option_text' => 'To minimize the maintenance cost of a system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            39 => 
            array (
                'id' => 40,
                'question_id' => 10,
                'option_text' => 'To adhere to a specific programming language',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            40 => 
            array (
                'id' => 41,
                'question_id' => 11,
                'option_text' => 'Adapter',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            41 => 
            array (
                'id' => 42,
                'question_id' => 11,
                'option_text' => 'Factory',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            42 => 
            array (
                'id' => 43,
                'question_id' => 11,
                'option_text' => 'Singleton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            43 => 
            array (
                'id' => 44,
                'question_id' => 11,
                'option_text' => 'Prototype',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            44 => 
            array (
                'id' => 45,
                'question_id' => 12,
                'option_text' => 'To provide a detailed description of the system to be built',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            45 => 
            array (
                'id' => 46,
                'question_id' => 12,
                'option_text' => 'To guide the design process',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            46 => 
            array (
                'id' => 47,
                'question_id' => 12,
                'option_text' => 'To verify that the system meets the user requirements',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            47 => 
            array (
                'id' => 48,
                'question_id' => 12,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            48 => 
            array (
                'id' => 49,
                'question_id' => 13,
                'option_text' => 'Single responsibility principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            49 => 
            array (
                'id' => 50,
                'question_id' => 13,
                'option_text' => 'Open-closed principle',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            50 => 
            array (
                'id' => 51,
                'question_id' => 13,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            51 => 
            array (
                'id' => 52,
                'question_id' => 13,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            52 => 
            array (
                'id' => 53,
                'question_id' => 14,
                'option_text' => 'Cohesion measures the strength of relationships within a module, while coupling measures the strength of relationships between modules.',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            53 => 
            array (
                'id' => 54,
                'question_id' => 14,
                'option_text' => 'Coupling measures the strength of relationships within a module, while cohesion measures the strength of relationships between modules.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            54 => 
            array (
                'id' => 55,
                'question_id' => 14,
                'option_text' => 'Cohesion and coupling are independent concepts.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            55 => 
            array (
                'id' => 56,
                'question_id' => 14,
                'option_text' => 'Cohesion and coupling are synonymous terms.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            56 => 
            array (
                'id' => 57,
                'question_id' => 15,
                'option_text' => 'Content coupling',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            57 => 
            array (
                'id' => 58,
                'question_id' => 15,
                'option_text' => 'Data coupling',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            58 => 
            array (
                'id' => 59,
                'question_id' => 15,
                'option_text' => 'Stamp coupling',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            59 => 
            array (
                'id' => 60,
                'question_id' => 15,
                'option_text' => 'External coupling',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            60 => 
            array (
                'id' => 61,
                'question_id' => 16,
                'option_text' => 'To define the data structures used in a system',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            61 => 
            array (
                'id' => 62,
                'question_id' => 16,
                'option_text' => 'To specify the relationships between entities in a system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            62 => 
            array (
                'id' => 63,
                'question_id' => 16,
                'option_text' => 'To document the design decisions made during the design process',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            63 => 
            array (
                'id' => 64,
                'question_id' => 16,
                'option_text' => 'To generate code from the design specification',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            64 => 
            array (
                'id' => 65,
                'question_id' => 17,
                'option_text' => 'Liskov substitution principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            65 => 
            array (
                'id' => 66,
                'question_id' => 17,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            66 => 
            array (
                'id' => 67,
                'question_id' => 17,
                'option_text' => 'Open-closed principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            67 => 
            array (
                'id' => 68,
                'question_id' => 17,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            68 => 
            array (
                'id' => 69,
                'question_id' => 18,
                'option_text' => 'Structured design emphasizes data flow, while object-oriented design emphasizes object interaction.',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            69 => 
            array (
                'id' => 70,
                'question_id' => 18,
                'option_text' => 'Object-oriented design emphasizes data flow, while structured design emphasizes object interaction.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            70 => 
            array (
                'id' => 71,
                'question_id' => 18,
                'option_text' => 'Structured design and object-oriented design are synonymous terms.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            71 => 
            array (
                'id' => 72,
                'question_id' => 18,
                'option_text' => 'There is no difference between a structured design and an object-oriented design.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            72 => 
            array (
                'id' => 73,
                'question_id' => 19,
                'option_text' => 'Factory',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            73 => 
            array (
                'id' => 74,
                'question_id' => 19,
                'option_text' => 'Singleton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            74 => 
            array (
                'id' => 75,
                'question_id' => 19,
                'option_text' => 'Prototype',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            75 => 
            array (
                'id' => 76,
                'question_id' => 19,
                'option_text' => 'Builder',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            76 => 
            array (
                'id' => 77,
                'question_id' => 20,
                'option_text' => 'To define the overall architecture of the system',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            77 => 
            array (
                'id' => 78,
                'question_id' => 20,
                'option_text' => 'To design the individual modules of the system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            78 => 
            array (
                'id' => 79,
                'question_id' => 20,
                'option_text' => 'To implement the system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            79 => 
            array (
                'id' => 80,
                'question_id' => 20,
                'option_text' => 'To test the system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            80 => 
            array (
                'id' => 81,
                'question_id' => 21,
                'option_text' => 'Liskov substitution principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            81 => 
            array (
                'id' => 82,
                'question_id' => 21,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            82 => 
            array (
                'id' => 83,
                'question_id' => 21,
                'option_text' => 'Open-closed principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            83 => 
            array (
                'id' => 84,
                'question_id' => 21,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            84 => 
            array (
                'id' => 85,
                'question_id' => 22,
                'option_text' => 'To evaluate the quality of a design',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            85 => 
            array (
                'id' => 86,
                'question_id' => 22,
                'option_text' => 'To identify potential risks and issues',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            86 => 
            array (
                'id' => 87,
                'question_id' => 22,
                'option_text' => 'To provide feedback to the design team',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            87 => 
            array (
                'id' => 88,
                'question_id' => 22,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            88 => 
            array (
                'id' => 89,
                'question_id' => 23,
                'option_text' => 'Factory',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            89 => 
            array (
                'id' => 90,
                'question_id' => 23,
                'option_text' => 'Singleton',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            90 => 
            array (
                'id' => 91,
                'question_id' => 23,
                'option_text' => 'Observer',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            91 => 
            array (
                'id' => 92,
                'question_id' => 23,
                'option_text' => 'Builder',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            92 => 
            array (
                'id' => 93,
                'question_id' => 24,
                'option_text' => 'A static design is fixed and does not change at runtime, while a dynamic design can change at runtime.',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            93 => 
            array (
                'id' => 94,
                'question_id' => 24,
                'option_text' => 'A dynamic design is fixed and does not change at runtime, while a static design can change at runtime.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            94 => 
            array (
                'id' => 95,
                'question_id' => 24,
                'option_text' => 'Static and dynamic designs are synonymous terms.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            95 => 
            array (
                'id' => 96,
                'question_id' => 24,
                'option_text' => 'There is no difference between a static design and a dynamic design.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            96 => 
            array (
                'id' => 97,
                'question_id' => 25,
                'option_text' => 'Liskov substitution principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            97 => 
            array (
                'id' => 98,
                'question_id' => 25,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            98 => 
            array (
                'id' => 99,
                'question_id' => 25,
                'option_text' => 'Open-closed principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            99 => 
            array (
                'id' => 100,
                'question_id' => 25,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            100 => 
            array (
                'id' => 101,
                'question_id' => 26,
                'option_text' => 'To provide a set of standards for the design process',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            101 => 
            array (
                'id' => 102,
                'question_id' => 26,
                'option_text' => 'To define the specific technologies and tools to be used in a project',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            102 => 
            array (
                'id' => 103,
                'question_id' => 26,
                'option_text' => 'To document the design decisions made during the design process',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            103 => 
            array (
                'id' => 104,
                'question_id' => 26,
                'option_text' => 'To generate code from the design specification',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            104 => 
            array (
                'id' => 105,
                'question_id' => 27,
                'option_text' => 'Adapter',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            105 => 
            array (
                'id' => 106,
                'question_id' => 27,
                'option_text' => 'Factory',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            106 => 
            array (
                'id' => 107,
                'question_id' => 27,
                'option_text' => 'Proxy',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            107 => 
            array (
                'id' => 108,
                'question_id' => 27,
                'option_text' => 'Builder',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            108 => 
            array (
                'id' => 109,
                'question_id' => 28,
                'option_text' => 'Top-down design starts from the highest-level modules, while bottom-up design starts from the lowest-level modules.',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            109 => 
            array (
                'id' => 110,
                'question_id' => 28,
                'option_text' => 'Bottom-up design starts from the highest-level modules, while top-down design starts from the lowest-level modules.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            110 => 
            array (
                'id' => 111,
                'question_id' => 28,
                'option_text' => 'Top-down and bottom-up design approaches are synonymous terms.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            111 => 
            array (
                'id' => 112,
                'question_id' => 28,
                'option_text' => 'There is no difference between a top-down and a bottom-up design approach.',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            112 => 
            array (
                'id' => 113,
                'question_id' => 29,
                'option_text' => 'Liskov substitution principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            113 => 
            array (
                'id' => 114,
                'question_id' => 29,
                'option_text' => 'Dependency inversion principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            114 => 
            array (
                'id' => 115,
                'question_id' => 29,
                'option_text' => 'Open-closed principle',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            115 => 
            array (
                'id' => 116,
                'question_id' => 29,
                'option_text' => 'Interface segregation principle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            116 => 
            array (
                'id' => 117,
                'question_id' => 30,
                'option_text' => 'To create the design for the system',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            117 => 
            array (
                'id' => 118,
                'question_id' => 30,
                'option_text' => 'To implement the design',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            118 => 
            array (
                'id' => 119,
                'question_id' => 30,
                'option_text' => 'To test the system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            119 => 
            array (
                'id' => 120,
                'question_id' => 30,
                'option_text' => 'To maintain the system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            120 => 
            array (
                'id' => 121,
                'question_id' => 31,
                'option_text' => 'flutter new project',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            121 => 
            array (
                'id' => 122,
                'question_id' => 31,
                'option_text' => 'dart create project',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            122 => 
            array (
                'id' => 123,
                'question_id' => 31,
                'option_text' => 'sdk create project',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            123 => 
            array (
                'id' => 124,
                'question_id' => 31,
                'option_text' => 'android new project',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            124 => 
            array (
                'id' => 125,
                'question_id' => 32,
                'option_text' => 'Material App',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            125 => 
            array (
                'id' => 126,
                'question_id' => 32,
                'option_text' => 'Home',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            126 => 
            array (
                'id' => 127,
                'question_id' => 32,
                'option_text' => 'Scaffold',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            127 => 
            array (
                'id' => 128,
                'question_id' => 32,
                'option_text' => 'AppBar',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            128 => 
            array (
                'id' => 129,
                'question_id' => 33,
                'option_text' => 'TextField',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            129 => 
            array (
                'id' => 130,
                'question_id' => 33,
                'option_text' => 'Text',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            130 => 
            array (
                'id' => 131,
                'question_id' => 33,
                'option_text' => 'Button',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            131 => 
            array (
                'id' => 132,
                'question_id' => 33,
                'option_text' => 'Image',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            132 => 
            array (
                'id' => 133,
                'question_id' => 34,
                'option_text' => 'To add a border to a TextField',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            133 => 
            array (
                'id' => 134,
                'question_id' => 34,
                'option_text' => 'To change the font of a TextField',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            134 => 
            array (
                'id' => 135,
                'question_id' => 34,
                'option_text' => 'To add a label to a TextField',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            135 => 
            array (
                'id' => 136,
                'question_id' => 34,
                'option_text' => 'To add an icon to a TextField',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            136 => 
            array (
                'id' => 137,
                'question_id' => 35,
                'option_text' => 'FloatingActionButton',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            137 => 
            array (
                'id' => 138,
                'question_id' => 35,
                'option_text' => 'RaisedButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            138 => 
            array (
                'id' => 139,
                'question_id' => 35,
                'option_text' => 'FlatButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            139 => 
            array (
                'id' => 140,
                'question_id' => 35,
                'option_text' => 'IconButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            140 => 
            array (
                'id' => 141,
                'question_id' => 36,
                'option_text' => 'Raised buttons have a shadow, while flat buttons do not',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            141 => 
            array (
                'id' => 142,
                'question_id' => 36,
                'option_text' => 'Flat buttons are always rectangular, while raised buttons can be any shape',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            142 => 
            array (
                'id' => 143,
                'question_id' => 36,
                'option_text' => 'Raised buttons are used for primary actions, while flat buttons are used for secondary actions',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            143 => 
            array (
                'id' => 144,
                'question_id' => 36,
                'option_text' => 'Flat buttons have a border, while raised buttons do not',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            144 => 
            array (
                'id' => 145,
                'question_id' => 37,
                'option_text' => 'Snackbar',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            145 => 
            array (
                'id' => 146,
                'question_id' => 37,
                'option_text' => 'Toast',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            146 => 
            array (
                'id' => 147,
                'question_id' => 37,
                'option_text' => 'AlertDialog',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            147 => 
            array (
                'id' => 148,
                'question_id' => 37,
                'option_text' => 'Dialog',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            148 => 
            array (
                'id' => 149,
                'question_id' => 38,
                'option_text' => 'To make a widget occupy the remaining space in a row or column',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            149 => 
            array (
                'id' => 150,
                'question_id' => 38,
                'option_text' => 'To make a widget scroll vertically',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            150 => 
            array (
                'id' => 151,
                'question_id' => 38,
                'option_text' => 'To make a widget resize itself dynamically',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            151 => 
            array (
                'id' => 152,
                'question_id' => 38,
                'option_text' => 'To make a widget change its color on tap',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            152 => 
            array (
                'id' => 153,
                'question_id' => 39,
                'option_text' => 'Switch',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            153 => 
            array (
                'id' => 154,
                'question_id' => 39,
                'option_text' => 'ToggleButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            154 => 
            array (
                'id' => 155,
                'question_id' => 39,
                'option_text' => 'Slider',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            155 => 
            array (
                'id' => 156,
                'question_id' => 39,
                'option_text' => 'Checkbox',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            156 => 
            array (
                'id' => 157,
                'question_id' => 40,
                'option_text' => 'Switches can only have two states, while toggle buttons can have multiple states',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            157 => 
            array (
                'id' => 158,
                'question_id' => 40,
                'option_text' => 'Toggle buttons always have a label, while switches do not',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            158 => 
            array (
                'id' => 159,
                'question_id' => 40,
                'option_text' => 'Switches are always on or off, while toggle buttons can be in an indeterminate state',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            159 => 
            array (
                'id' => 160,
                'question_id' => 40,
                'option_text' => 'Toggle buttons are always rectangular, while switches can be any shape',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            160 => 
            array (
                'id' => 161,
                'question_id' => 41,
                'option_text' => 'ElevatedButton',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            161 => 
            array (
                'id' => 162,
                'question_id' => 41,
                'option_text' => 'FloatingActionButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            162 => 
            array (
                'id' => 163,
                'question_id' => 41,
                'option_text' => 'FlatButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            163 => 
            array (
                'id' => 164,
                'question_id' => 41,
                'option_text' => 'RaisedButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            164 => 
            array (
                'id' => 165,
                'question_id' => 42,
                'option_text' => 'To change the overall appearance of the app',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            165 => 
            array (
                'id' => 166,
                'question_id' => 42,
                'option_text' => 'To add a background color to the app',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            166 => 
            array (
                'id' => 167,
                'question_id' => 42,
                'option_text' => 'To change the font of the app',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            167 => 
            array (
                'id' => 168,
                'question_id' => 42,
                'option_text' => 'To add a navigation bar to the app',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            168 => 
            array (
                'id' => 169,
                'question_id' => 43,
                'option_text' => 'ListView',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            169 => 
            array (
                'id' => 170,
                'question_id' => 43,
                'option_text' => 'GridView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            170 => 
            array (
                'id' => 171,
                'question_id' => 43,
                'option_text' => 'PageView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            171 => 
            array (
                'id' => 172,
                'question_id' => 43,
                'option_text' => 'Carousel',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            172 => 
            array (
                'id' => 173,
                'question_id' => 44,
                'option_text' => 'ListViews display items in a vertical or horizontal list, while GridViews display items in a grid',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            173 => 
            array (
                'id' => 174,
                'question_id' => 44,
                'option_text' => 'GridViews are always scrollable, while ListViews can be either scrollable or non-scrollable',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            174 => 
            array (
                'id' => 175,
                'question_id' => 44,
                'option_text' => 'ListViews have a fixed number of items, while GridViews can have a dynamic number of items',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            175 => 
            array (
                'id' => 176,
                'question_id' => 44,
                'option_text' => 'ListViews are only used for text items, while GridViews can also be used for images and other types of content',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            176 => 
            array (
                'id' => 177,
                'question_id' => 45,
                'option_text' => 'PageView',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            177 => 
            array (
                'id' => 178,
                'question_id' => 45,
                'option_text' => 'Carousel',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            178 => 
            array (
                'id' => 179,
                'question_id' => 45,
                'option_text' => 'ViewPager',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            179 => 
            array (
                'id' => 180,
                'question_id' => 45,
                'option_text' => 'Swiper',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            180 => 
            array (
                'id' => 181,
                'question_id' => 46,
                'option_text' => 'To navigate between different screens in an app',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            181 => 
            array (
                'id' => 182,
                'question_id' => 46,
                'option_text' => 'To add a back button to the app',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            182 => 
            array (
                'id' => 183,
                'question_id' => 46,
                'option_text' => 'To create a custom navigation menu',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            183 => 
            array (
                'id' => 184,
                'question_id' => 46,
                'option_text' => 'To display a loading indicator',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            184 => 
            array (
                'id' => 185,
                'question_id' => 47,
                'option_text' => 'Animation',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            185 => 
            array (
                'id' => 186,
                'question_id' => 47,
                'option_text' => 'AnimatedBuilder',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            186 => 
            array (
                'id' => 187,
                'question_id' => 47,
                'option_text' => 'Tween',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            187 => 
            array (
                'id' => 188,
                'question_id' => 47,
                'option_text' => 'GestureDetector',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            188 => 
            array (
                'id' => 189,
                'question_id' => 48,
                'option_text' => 'Value animators animate a single value, while tween animators animate multiple values',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            189 => 
            array (
                'id' => 190,
                'question_id' => 48,
                'option_text' => 'Tween animators are always linear, while value animators can be any type of animation',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            190 => 
            array (
                'id' => 191,
                'question_id' => 48,
                'option_text' => 'Value animators are more efficient than tween animators',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            191 => 
            array (
                'id' => 192,
                'question_id' => 48,
                'option_text' => 'Tween animators can only be used for colors and translations',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            192 => 
            array (
                'id' => 193,
                'question_id' => 49,
                'option_text' => 'GestureDetector',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            193 => 
            array (
                'id' => 194,
                'question_id' => 49,
                'option_text' => 'PointerListener',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            194 => 
            array (
                'id' => 195,
                'question_id' => 49,
                'option_text' => 'GestureRecognizer',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            195 => 
            array (
                'id' => 196,
                'question_id' => 49,
                'option_text' => 'Gesture',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            196 => 
            array (
                'id' => 197,
                'question_id' => 50,
                'option_text' => 'Tap gestures are single taps, while long press gestures are held down for a period of time',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            197 => 
            array (
                'id' => 198,
                'question_id' => 50,
                'option_text' => 'Long press gestures are always followed by a tap gesture',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            198 => 
            array (
                'id' => 199,
                'question_id' => 50,
                'option_text' => 'Tap gestures can only be used on buttons, while long press gestures can be used on any widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            199 => 
            array (
                'id' => 200,
                'question_id' => 50,
                'option_text' => 'Long press gestures are only supported on Android devices',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            200 => 
            array (
                'id' => 201,
                'question_id' => 51,
                'option_text' => 'CustomScrollView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            201 => 
            array (
                'id' => 202,
                'question_id' => 51,
                'option_text' => 'LayoutBuilder',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            202 => 
            array (
                'id' => 203,
                'question_id' => 51,
                'option_text' => 'Stack',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            203 => 
            array (
                'id' => 204,
                'question_id' => 51,
                'option_text' => 'Row',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            204 => 
            array (
                'id' => 205,
                'question_id' => 52,
                'option_text' => 'Rows display widgets horizontally, while Columns display widgets vertically',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            205 => 
            array (
                'id' => 206,
                'question_id' => 52,
                'option_text' => 'Rows can only contain one child widget, while Columns can contain multiple child widgets',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            206 => 
            array (
                'id' => 207,
                'question_id' => 52,
                'option_text' => 'Columns are always scrollable, while Rows are not',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            207 => 
            array (
                'id' => 208,
                'question_id' => 52,
                'option_text' => 'Rows are only used for text widgets, while Columns can be used for any type of widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            208 => 
            array (
                'id' => 209,
                'question_id' => 53,
                'option_text' => 'Stack',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            209 => 
            array (
                'id' => 210,
                'question_id' => 53,
                'option_text' => 'Positioned',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            210 => 
            array (
                'id' => 211,
                'question_id' => 53,
                'option_text' => 'Align',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            211 => 
            array (
                'id' => 212,
                'question_id' => 53,
                'option_text' => 'Overflow',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            212 => 
            array (
                'id' => 213,
                'question_id' => 54,
                'option_text' => 'To apply a shader to a child widget',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            213 => 
            array (
                'id' => 214,
                'question_id' => 54,
                'option_text' => 'To add a mask to a child widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            214 => 
            array (
                'id' => 215,
                'question_id' => 54,
                'option_text' => 'To create a custom clip path',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            215 => 
            array (
                'id' => 216,
                'question_id' => 54,
                'option_text' => 'To animate a child widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            216 => 
            array (
                'id' => 217,
                'question_id' => 55,
                'option_text' => 'CustomPaint',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            217 => 
            array (
                'id' => 218,
                'question_id' => 55,
                'option_text' => 'Canvas',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            218 => 
            array (
                'id' => 219,
                'question_id' => 55,
                'option_text' => 'Paint',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            219 => 
            array (
                'id' => 220,
                'question_id' => 55,
                'option_text' => 'Path',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            220 => 
            array (
                'id' => 221,
                'question_id' => 56,
                'option_text' => 'Gradients are linear, while radial gradients are circular',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            221 => 
            array (
                'id' => 222,
                'question_id' => 56,
                'option_text' => 'Radial gradients can only have two colors, while gradients can have multiple colors',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            222 => 
            array (
                'id' => 223,
                'question_id' => 56,
                'option_text' => 'Gradients are more efficient than radial gradients',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            223 => 
            array (
                'id' => 224,
                'question_id' => 56,
                'option_text' => 'Radial gradients can only be used for backgrounds',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            224 => 
            array (
                'id' => 225,
                'question_id' => 57,
                'option_text' => 'Transform',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            225 => 
            array (
                'id' => 226,
                'question_id' => 57,
                'option_text' => 'Matrix4',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            226 => 
            array (
                'id' => 227,
                'question_id' => 57,
                'option_text' => 'Offset',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            227 => 
            array (
                'id' => 228,
                'question_id' => 57,
                'option_text' => 'Rotation',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            228 => 
            array (
                'id' => 229,
                'question_id' => 58,
                'option_text' => 'To add semantics to a child widget for accessibility',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            229 => 
            array (
                'id' => 230,
                'question_id' => 58,
                'option_text' => 'To create a custom tooltip',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            230 => 
            array (
                'id' => 231,
                'question_id' => 58,
                'option_text' => 'To change the focus of a child widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            231 => 
            array (
                'id' => 232,
                'question_id' => 58,
                'option_text' => 'To animate a child widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            232 => 
            array (
                'id' => 233,
                'question_id' => 59,
                'option_text' => 'Linux',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            233 => 
            array (
                'id' => 234,
                'question_id' => 59,
                'option_text' => 'Windows',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            234 => 
            array (
                'id' => 235,
                'question_id' => 59,
                'option_text' => 'macOS',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            235 => 
            array (
                'id' => 236,
                'question_id' => 59,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            236 => 
            array (
                'id' => 237,
                'question_id' => 60,
                'option_text' => 'flutter install',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            237 => 
            array (
                'id' => 238,
                'question_id' => 60,
                'option_text' => 'flutter sdk',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            238 => 
            array (
                'id' => 239,
                'question_id' => 60,
                'option_text' => 'pub install flutter',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            239 => 
            array (
                'id' => 240,
                'question_id' => 60,
                'option_text' => 'dart install flutter',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            240 => 
            array (
                'id' => 241,
                'question_id' => 61,
                'option_text' => 'Dart plugin',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            241 => 
            array (
                'id' => 242,
                'question_id' => 61,
                'option_text' => 'Flutter plugin',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            242 => 
            array (
                'id' => 243,
                'question_id' => 61,
                'option_text' => 'Android plugin',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            243 => 
            array (
                'id' => 244,
                'question_id' => 61,
                'option_text' => 'IntelliJ plugin',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            244 => 
            array (
                'id' => 245,
                'question_id' => 62,
                'option_text' => 'To specify the dependencies of the project',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            245 => 
            array (
                'id' => 246,
                'question_id' => 62,
                'option_text' => 'To define the build process',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            246 => 
            array (
                'id' => 247,
                'question_id' => 62,
                'option_text' => 'To configure the user interface',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            247 => 
            array (
                'id' => 248,
                'question_id' => 62,
                'option_text' => 'To store application settings',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            248 => 
            array (
                'id' => 249,
                'question_id' => 63,
                'option_text' => 'React Native',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            249 => 
            array (
                'id' => 250,
                'question_id' => 63,
                'option_text' => 'SwiftUI',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            250 => 
            array (
                'id' => 251,
                'question_id' => 63,
                'option_text' => 'Flutter UI Framework',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            251 => 
            array (
                'id' => 252,
                'question_id' => 63,
                'option_text' => 'UIKit',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            252 => 
            array (
                'id' => 253,
                'question_id' => 64,
                'option_text' => 'Stateless widgets cannot update their state',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            253 => 
            array (
                'id' => 254,
                'question_id' => 64,
                'option_text' => 'Stateful widgets are more efficient',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            254 => 
            array (
                'id' => 255,
                'question_id' => 64,
                'option_text' => 'Stateless widgets are suitable for displaying static content',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            255 => 
            array (
                'id' => 256,
                'question_id' => 64,
                'option_text' => 'Stateful widgets are used for handling user input',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            256 => 
            array (
                'id' => 257,
                'question_id' => 65,
                'option_text' => 'Padding',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            257 => 
            array (
                'id' => 258,
                'question_id' => 65,
                'option_text' => 'Margin',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            258 => 
            array (
                'id' => 259,
                'question_id' => 65,
                'option_text' => 'Container',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            259 => 
            array (
                'id' => 260,
                'question_id' => 65,
                'option_text' => 'Row',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            260 => 
            array (
                'id' => 261,
                'question_id' => 66,
                'option_text' => 'To create the user interface',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            261 => 
            array (
                'id' => 262,
                'question_id' => 66,
                'option_text' => 'To handle user events',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            262 => 
            array (
                'id' => 263,
                'question_id' => 66,
                'option_text' => 'To fetch data from a server',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            263 => 
            array (
                'id' => 264,
                'question_id' => 66,
                'option_text' => 'To perform computations',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            264 => 
            array (
                'id' => 265,
                'question_id' => 67,
                'option_text' => 'Column',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            265 => 
            array (
                'id' => 266,
                'question_id' => 67,
                'option_text' => 'Row',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            266 => 
            array (
                'id' => 267,
                'question_id' => 67,
                'option_text' => 'Grid',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            267 => 
            array (
                'id' => 268,
                'question_id' => 67,
                'option_text' => 'Wrap',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            268 => 
            array (
                'id' => 269,
                'question_id' => 68,
                'option_text' => 'To update the state of a "StatefulWidget"',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            269 => 
            array (
                'id' => 270,
                'question_id' => 68,
                'option_text' => 'To rebuild the user interface',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            270 => 
            array (
                'id' => 271,
                'question_id' => 68,
                'option_text' => 'To handle user gestures',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            271 => 
            array (
                'id' => 272,
                'question_id' => 68,
                'option_text' => 'To fetch data from a network',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            272 => 
            array (
                'id' => 273,
                'question_id' => 69,
                'option_text' => 'http',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            273 => 
            array (
                'id' => 274,
                'question_id' => 69,
                'option_text' => 'async',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            274 => 
            array (
                'id' => 275,
                'question_id' => 69,
                'option_text' => 'dio',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            275 => 
            array (
                'id' => 276,
                'question_id' => 69,
                'option_text' => 'okhttp',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            276 => 
            array (
                'id' => 277,
                'question_id' => 70,
                'option_text' => 'To display a loading indicator while data is being fetched',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            277 => 
            array (
                'id' => 278,
                'question_id' => 70,
                'option_text' => 'To handle HTTP requests',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            278 => 
            array (
                'id' => 279,
                'question_id' => 70,
                'option_text' => 'To parse JSON responses',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            279 => 
            array (
                'id' => 280,
                'question_id' => 70,
                'option_text' => 'To cache data',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            280 => 
            array (
                'id' => 281,
                'question_id' => 71,
                'option_text' => 'Static',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            281 => 
            array (
                'id' => 282,
                'question_id' => 71,
                'option_text' => 'Dynamic',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            282 => 
            array (
                'id' => 283,
                'question_id' => 71,
                'option_text' => 'Both static and dynamic',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            283 => 
            array (
                'id' => 284,
                'question_id' => 71,
                'option_text' => 'None of the above',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            284 => 
            array (
                'id' => 285,
                'question_id' => 72,
                'option_text' => 'To lint and analyze Dart code',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            285 => 
            array (
                'id' => 286,
                'question_id' => 72,
                'option_text' => 'To build and deploy Flutter apps',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            286 => 
            array (
                'id' => 287,
                'question_id' => 72,
                'option_text' => 'To create new Flutter projects',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            287 => 
            array (
                'id' => 288,
                'question_id' => 72,
                'option_text' => 'To run Flutter unit tests',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            288 => 
            array (
                'id' => 289,
                'question_id' => 73,
                'option_text' => 'Flutter Doctor',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            289 => 
            array (
                'id' => 290,
                'question_id' => 73,
                'option_text' => 'Flutter Build',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            290 => 
            array (
                'id' => 291,
                'question_id' => 73,
                'option_text' => 'Flutter Install',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            291 => 
            array (
                'id' => 292,
                'question_id' => 73,
                'option_text' => 'Flutter Run',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            292 => 
            array (
                'id' => 293,
                'question_id' => 74,
                'option_text' => 'Debug builds are optimized for speed, while release builds are optimized for stability',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            293 => 
            array (
                'id' => 294,
                'question_id' => 74,
                'option_text' => 'Release builds include debugging information, while debug builds do not',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            294 => 
            array (
                'id' => 295,
                'question_id' => 74,
                'option_text' => 'Debug builds are not optimized, while release builds are',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            295 => 
            array (
                'id' => 296,
                'question_id' => 74,
                'option_text' => 'Release builds are smaller in size, while debug builds are larger',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            296 => 
            array (
                'id' => 297,
                'question_id' => 75,
                'option_text' => 'redux',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            297 => 
            array (
                'id' => 298,
                'question_id' => 75,
                'option_text' => 'provider',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            298 => 
            array (
                'id' => 299,
                'question_id' => 75,
                'option_text' => 'state_notifier',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            299 => 
            array (
                'id' => 300,
                'question_id' => 75,
                'option_text' => 'bloc',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            300 => 
            array (
                'id' => 301,
                'question_id' => 76,
                'option_text' => 'To notify listeners of state changes',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            301 => 
            array (
                'id' => 302,
                'question_id' => 76,
                'option_text' => 'To manage the state of a widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            302 => 
            array (
                'id' => 303,
                'question_id' => 76,
                'option_text' => 'To handle user gestures',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            303 => 
            array (
                'id' => 304,
                'question_id' => 76,
                'option_text' => 'To fetch data from a server',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            304 => 
            array (
                'id' => 305,
                'question_id' => 77,
                'option_text' => 'AnimationBuilder',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            305 => 
            array (
                'id' => 306,
                'question_id' => 77,
                'option_text' => 'AnimatedBuilder',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            306 => 
            array (
                'id' => 307,
                'question_id' => 77,
                'option_text' => 'AnimatedSwitcher',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            307 => 
            array (
                'id' => 308,
                'question_id' => 77,
                'option_text' => 'ValueListenableBuilder',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            308 => 
            array (
                'id' => 309,
                'question_id' => 78,
                'option_text' => 'To interpolate between two values',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            309 => 
            array (
                'id' => 310,
                'question_id' => 78,
                'option_text' => 'To create custom animations',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            310 => 
            array (
                'id' => 311,
                'question_id' => 78,
                'option_text' => 'To handle user gestures',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            311 => 
            array (
                'id' => 312,
                'question_id' => 78,
                'option_text' => 'To fetch data from a server',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            312 => 
            array (
                'id' => 313,
                'question_id' => 79,
                'option_text' => 'ListView',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            313 => 
            array (
                'id' => 314,
                'question_id' => 79,
                'option_text' => 'GridView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            314 => 
            array (
                'id' => 315,
                'question_id' => 79,
                'option_text' => 'DataTable',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            315 => 
            array (
                'id' => 316,
                'question_id' => 79,
                'option_text' => 'TreeView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            316 => 
            array (
                'id' => 317,
                'question_id' => 80,
                'option_text' => 'To handle user gestures',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            317 => 
            array (
                'id' => 318,
                'question_id' => 80,
                'option_text' => 'To create custom animations',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            318 => 
            array (
                'id' => 319,
                'question_id' => 80,
                'option_text' => 'To manage the state of a widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            319 => 
            array (
                'id' => 320,
                'question_id' => 80,
                'option_text' => 'To fetch data from a server',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            320 => 
            array (
                'id' => 321,
                'question_id' => 81,
                'option_text' => 'intl',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            321 => 
            array (
                'id' => 322,
                'question_id' => 81,
                'option_text' => 'globalize',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            322 => 
            array (
                'id' => 323,
                'question_id' => 81,
                'option_text' => 'l10n',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            323 => 
            array (
                'id' => 324,
                'question_id' => 81,
                'option_text' => 'flutter_localization',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            324 => 
            array (
                'id' => 325,
                'question_id' => 82,
                'option_text' => 'To provide a default material design theme',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            325 => 
            array (
                'id' => 326,
                'question_id' => 82,
                'option_text' => 'To handle routing and navigation',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            326 => 
            array (
                'id' => 327,
                'question_id' => 82,
                'option_text' => 'To manage the state of the app',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            327 => 
            array (
                'id' => 328,
                'question_id' => 82,
                'option_text' => 'To fetch data from a server',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            328 => 
            array (
                'id' => 329,
                'question_id' => 83,
                'option_text' => 'test',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            329 => 
            array (
                'id' => 330,
                'question_id' => 83,
                'option_text' => 'testing',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            330 => 
            array (
                'id' => 331,
                'question_id' => 83,
                'option_text' => 'flutter_test',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            331 => 
            array (
                'id' => 332,
                'question_id' => 83,
                'option_text' => 'assert',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            332 => 
            array (
                'id' => 333,
                'question_id' => 84,
                'option_text' => 'Unit tests test individual units of code, while integration tests test how multiple units of code work together',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            333 => 
            array (
                'id' => 334,
                'question_id' => 84,
                'option_text' => 'Integration tests are faster than unit tests',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            334 => 
            array (
                'id' => 335,
                'question_id' => 84,
                'option_text' => 'Unit tests are more reliable than integration tests',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            335 => 
            array (
                'id' => 336,
                'question_id' => 84,
                'option_text' => 'Integration tests cover more of the codebase than unit tests',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            336 => 
            array (
                'id' => 337,
                'question_id' => 85,
                'option_text' => 'Stack',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            337 => 
            array (
                'id' => 338,
                'question_id' => 85,
                'option_text' => 'Positioned',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            338 => 
            array (
                'id' => 339,
                'question_id' => 85,
                'option_text' => 'Transform',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            339 => 
            array (
                'id' => 340,
                'question_id' => 85,
                'option_text' => 'CustomSingleChildLayout',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            340 => 
            array (
                'id' => 341,
                'question_id' => 86,
                'option_text' => 'To provide data to child widgets',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            341 => 
            array (
                'id' => 342,
                'question_id' => 86,
                'option_text' => 'To handle user gestures',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            342 => 
            array (
                'id' => 343,
                'question_id' => 86,
                'option_text' => 'To create custom animations',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            343 => 
            array (
                'id' => 344,
                'question_id' => 86,
                'option_text' => 'To fetch data from a server',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            344 => 
            array (
                'id' => 345,
                'question_id' => 87,
                'option_text' => 'navigator',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            345 => 
            array (
                'id' => 346,
                'question_id' => 87,
                'option_text' => 'routing',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            346 => 
            array (
                'id' => 347,
                'question_id' => 87,
                'option_text' => 'flutter_router',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            347 => 
            array (
                'id' => 348,
                'question_id' => 87,
                'option_text' => 'router',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            348 => 
            array (
                'id' => 349,
                'question_id' => 88,
                'option_text' => 'To provide a default Cupertino design theme',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:23:13',
                'updated_at' => '2025-01-26 18:23:13',
            ),
            349 => 
            array (
                'id' => 350,
                'question_id' => 88,
                'option_text' => 'To handle routing and navigation',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:13',
                'updated_at' => '2025-01-26 18:23:13',
            ),
            350 => 
            array (
                'id' => 351,
                'question_id' => 88,
                'option_text' => 'To manage the state of the app',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:13',
                'updated_at' => '2025-01-26 18:23:13',
            ),
            351 => 
            array (
                'id' => 352,
                'question_id' => 88,
                'option_text' => 'To fetch data from a server',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:23:13',
                'updated_at' => '2025-01-26 18:23:13',
            ),
            352 => 
            array (
                'id' => 353,
                'question_id' => 89,
                'option_text' => 'Data protection',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            353 => 
            array (
                'id' => 354,
                'question_id' => 89,
                'option_text' => 'Data integration',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            354 => 
            array (
                'id' => 355,
                'question_id' => 89,
                'option_text' => 'Data governance',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            355 => 
            array (
                'id' => 356,
                'question_id' => 89,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            356 => 
            array (
                'id' => 357,
                'question_id' => 90,
                'option_text' => 'Data center',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            357 => 
            array (
                'id' => 358,
                'question_id' => 90,
                'option_text' => 'Data lake',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            358 => 
            array (
                'id' => 359,
                'question_id' => 90,
                'option_text' => 'Database',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            359 => 
            array (
                'id' => 360,
                'question_id' => 90,
                'option_text' => 'Data warehouse',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            360 => 
            array (
                'id' => 361,
                'question_id' => 91,
                'option_text' => 'Magnetic tape',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            361 => 
            array (
                'id' => 362,
                'question_id' => 91,
                'option_text' => 'Optical disc',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            362 => 
            array (
                'id' => 363,
                'question_id' => 91,
                'option_text' => 'Flash memory',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            363 => 
            array (
                'id' => 364,
                'question_id' => 91,
                'option_text' => 'Hard disk drive',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            364 => 
            array (
                'id' => 365,
                'question_id' => 92,
                'option_text' => 'Host bus adapter',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            365 => 
            array (
                'id' => 366,
                'question_id' => 92,
                'option_text' => 'Protocol',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            366 => 
            array (
                'id' => 367,
                'question_id' => 92,
                'option_text' => 'Cache',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            367 => 
            array (
                'id' => 368,
                'question_id' => 92,
                'option_text' => 'RAID',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            368 => 
            array (
                'id' => 369,
                'question_id' => 93,
                'option_text' => 'CPU',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            369 => 
            array (
                'id' => 370,
                'question_id' => 93,
                'option_text' => 'Memory',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            370 => 
            array (
                'id' => 371,
                'question_id' => 93,
                'option_text' => 'Disk controller',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            371 => 
            array (
                'id' => 372,
                'question_id' => 93,
                'option_text' => 'Network card',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            372 => 
            array (
                'id' => 373,
                'question_id' => 94,
                'option_text' => 'To improve data performance',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            373 => 
            array (
                'id' => 374,
                'question_id' => 94,
                'option_text' => 'To protect data from loss',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            374 => 
            array (
                'id' => 375,
                'question_id' => 94,
                'option_text' => 'To increase storage capacity',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            375 => 
            array (
                'id' => 376,
                'question_id' => 94,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            376 => 
            array (
                'id' => 377,
                'question_id' => 95,
                'option_text' => 'RAID 0',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            377 => 
            array (
                'id' => 378,
                'question_id' => 95,
                'option_text' => 'RAID 1',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            378 => 
            array (
                'id' => 379,
                'question_id' => 95,
                'option_text' => 'RAID 5',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            379 => 
            array (
                'id' => 380,
                'question_id' => 95,
                'option_text' => 'RAID 10',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            380 => 
            array (
                'id' => 381,
                'question_id' => 96,
                'option_text' => 'Information lifecycle management',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            381 => 
            array (
                'id' => 382,
                'question_id' => 96,
                'option_text' => 'Data governance',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            382 => 
            array (
                'id' => 383,
                'question_id' => 96,
                'option_text' => 'Data protection',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            383 => 
            array (
                'id' => 384,
                'question_id' => 96,
                'option_text' => 'Data integration',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            384 => 
            array (
                'id' => 385,
                'question_id' => 97,
                'option_text' => 'Scalability',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            385 => 
            array (
                'id' => 386,
                'question_id' => 97,
                'option_text' => 'Data backup',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            386 => 
            array (
                'id' => 387,
                'question_id' => 97,
                'option_text' => 'Cost-effectiveness',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            387 => 
            array (
                'id' => 388,
                'question_id' => 97,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            388 => 
            array (
                'id' => 389,
                'question_id' => 98,
                'option_text' => 'To store frequently accessed data',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            389 => 
            array (
                'id' => 390,
                'question_id' => 98,
                'option_text' => 'To improve data transfer performance',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            390 => 
            array (
                'id' => 391,
                'question_id' => 98,
                'option_text' => 'To protect data from loss',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            391 => 
            array (
                'id' => 392,
                'question_id' => 98,
                'option_text' => 'None of the above',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            392 => 
            array (
                'id' => 393,
                'question_id' => 99,
                'option_text' => 'Hard disk drive',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            393 => 
            array (
                'id' => 394,
                'question_id' => 99,
                'option_text' => 'Optical disc',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            394 => 
            array (
                'id' => 395,
                'question_id' => 99,
                'option_text' => 'Magnetic tape',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            395 => 
            array (
                'id' => 396,
                'question_id' => 99,
                'option_text' => 'Flash memory',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            396 => 
            array (
                'id' => 397,
                'question_id' => 100,
                'option_text' => 'Operating system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            397 => 
            array (
                'id' => 398,
                'question_id' => 100,
                'option_text' => 'Device driver',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            398 => 
            array (
                'id' => 399,
                'question_id' => 100,
                'option_text' => 'Storage management software',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            399 => 
            array (
                'id' => 400,
                'question_id' => 100,
                'option_text' => 'File system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            400 => 
            array (
                'id' => 401,
                'question_id' => 101,
                'option_text' => 'Seek time',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            401 => 
            array (
                'id' => 402,
                'question_id' => 101,
                'option_text' => 'Latency',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            402 => 
            array (
                'id' => 403,
                'question_id' => 101,
                'option_text' => 'Transfer rate',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            403 => 
            array (
                'id' => 404,
                'question_id' => 101,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            404 => 
            array (
                'id' => 405,
                'question_id' => 102,
                'option_text' => 'To read data from the disk into the cache before it is requested by the host',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            405 => 
            array (
                'id' => 406,
                'question_id' => 102,
                'option_text' => 'To write data from the cache to the disk',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            406 => 
            array (
                'id' => 407,
                'question_id' => 102,
                'option_text' => 'To protect data from loss',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            407 => 
            array (
                'id' => 408,
                'question_id' => 102,
                'option_text' => 'To improve data security',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            408 => 
            array (
                'id' => 409,
                'question_id' => 103,
                'option_text' => 'DAS',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            409 => 
            array (
                'id' => 410,
                'question_id' => 103,
                'option_text' => 'SAN',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            410 => 
            array (
                'id' => 411,
                'question_id' => 103,
                'option_text' => 'NAS',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            411 => 
            array (
                'id' => 412,
                'question_id' => 103,
                'option_text' => 'Cloud storage',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            412 => 
            array (
                'id' => 413,
                'question_id' => 104,
                'option_text' => 'Backup',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            413 => 
            array (
                'id' => 414,
                'question_id' => 104,
                'option_text' => 'Data migration',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            414 => 
            array (
                'id' => 415,
                'question_id' => 104,
                'option_text' => 'Data replication',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            415 => 
            array (
                'id' => 416,
                'question_id' => 104,
                'option_text' => 'Data synchronization',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            416 => 
            array (
                'id' => 417,
                'question_id' => 105,
                'option_text' => 'Full backup',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            417 => 
            array (
                'id' => 418,
                'question_id' => 105,
                'option_text' => 'Incremental backup',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            418 => 
            array (
                'id' => 419,
                'question_id' => 105,
                'option_text' => 'Differential backup',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            419 => 
            array (
                'id' => 420,
                'question_id' => 105,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            420 => 
            array (
                'id' => 421,
                'question_id' => 106,
                'option_text' => 'To reduce the amount of storage space required',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            421 => 
            array (
                'id' => 422,
                'question_id' => 106,
                'option_text' => 'To improve data security',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            422 => 
            array (
                'id' => 423,
                'question_id' => 106,
                'option_text' => 'To speed up data transfer',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            423 => 
            array (
                'id' => 424,
                'question_id' => 106,
                'option_text' => 'To protect data from loss',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            424 => 
            array (
                'id' => 425,
                'question_id' => 107,
                'option_text' => 'Improved storage performance',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            425 => 
            array (
                'id' => 426,
                'question_id' => 107,
                'option_text' => 'Increased storage capacity',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            426 => 
            array (
                'id' => 427,
                'question_id' => 107,
                'option_text' => 'Reduced storage costs',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            427 => 
            array (
                'id' => 428,
                'question_id' => 107,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            428 => 
            array (
                'id' => 429,
                'question_id' => 108,
                'option_text' => 'Fibre Channel',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            429 => 
            array (
                'id' => 430,
                'question_id' => 108,
                'option_text' => 'Ethernet',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            430 => 
            array (
                'id' => 431,
                'question_id' => 108,
                'option_text' => 'iSCSI',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            431 => 
            array (
                'id' => 432,
                'question_id' => 108,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            432 => 
            array (
                'id' => 433,
                'question_id' => 109,
                'option_text' => 'SAS drive',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            433 => 
            array (
                'id' => 434,
                'question_id' => 109,
                'option_text' => 'SATA drive',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            434 => 
            array (
                'id' => 435,
                'question_id' => 109,
                'option_text' => 'NVMe drive',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            435 => 
            array (
                'id' => 436,
                'question_id' => 109,
                'option_text' => 'SCSI drive',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            436 => 
            array (
                'id' => 437,
                'question_id' => 110,
                'option_text' => 'Data striping',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            437 => 
            array (
                'id' => 438,
                'question_id' => 110,
                'option_text' => 'Data mirroring',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            438 => 
            array (
                'id' => 439,
                'question_id' => 110,
                'option_text' => 'Data replication',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            439 => 
            array (
                'id' => 440,
                'question_id' => 110,
                'option_text' => 'Data deduplication',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            440 => 
            array (
                'id' => 441,
                'question_id' => 111,
                'option_text' => 'Faster data transfer rates',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            441 => 
            array (
                'id' => 442,
                'question_id' => 111,
                'option_text' => 'Lower power consumption',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            442 => 
            array (
                'id' => 443,
                'question_id' => 111,
                'option_text' => 'Increased durability',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            443 => 
            array (
                'id' => 444,
                'question_id' => 111,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            444 => 
            array (
                'id' => 445,
                'question_id' => 112,
                'option_text' => 'To manage data storage operations',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            445 => 
            array (
                'id' => 446,
                'question_id' => 112,
                'option_text' => 'To connect storage devices to a host computer',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            446 => 
            array (
                'id' => 447,
                'question_id' => 112,
                'option_text' => 'To protect data from loss',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            447 => 
            array (
                'id' => 448,
                'question_id' => 112,
                'option_text' => 'To improve data security',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            448 => 
            array (
                'id' => 449,
                'question_id' => 113,
                'option_text' => 'JBOD',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            449 => 
            array (
                'id' => 450,
                'question_id' => 113,
                'option_text' => 'RAID',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            450 => 
            array (
                'id' => 451,
                'question_id' => 113,
                'option_text' => 'SAN',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            451 => 
            array (
                'id' => 452,
                'question_id' => 113,
                'option_text' => 'None of the above',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            452 => 
            array (
                'id' => 453,
                'question_id' => 114,
                'option_text' => 'Data encryption',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            453 => 
            array (
                'id' => 454,
                'question_id' => 114,
                'option_text' => 'Data integrity',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            454 => 
            array (
                'id' => 455,
                'question_id' => 114,
                'option_text' => 'Data authentication',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            455 => 
            array (
                'id' => 456,
                'question_id' => 114,
                'option_text' => 'Data security',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            456 => 
            array (
                'id' => 457,
                'question_id' => 115,
                'option_text' => 'Implement strong access controls',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            457 => 
            array (
                'id' => 458,
                'question_id' => 115,
                'option_text' => 'Use data encryption',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            458 => 
            array (
                'id' => 459,
                'question_id' => 115,
                'option_text' => 'Regularly back up data',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            459 => 
            array (
                'id' => 460,
                'question_id' => 115,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            460 => 
            array (
                'id' => 461,
                'question_id' => 116,
                'option_text' => 'To store and analyze large amounts of data',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            461 => 
            array (
                'id' => 462,
                'question_id' => 116,
                'option_text' => 'To provide data for reporting and decision-making',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            462 => 
            array (
                'id' => 463,
                'question_id' => 116,
                'option_text' => 'To protect data from loss',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            463 => 
            array (
                'id' => 464,
                'question_id' => 116,
                'option_text' => 'A and B',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            464 => 
            array (
                'id' => 465,
                'question_id' => 117,
                'option_text' => 'Descriptive analytics',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            465 => 
            array (
                'id' => 466,
                'question_id' => 117,
                'option_text' => 'Predictive analytics',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            466 => 
            array (
                'id' => 467,
                'question_id' => 117,
                'option_text' => 'Prescriptive analytics',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            467 => 
            array (
                'id' => 468,
                'question_id' => 117,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            468 => 
            array (
                'id' => 469,
                'question_id' => 118,
                'option_text' => 'To discover patterns and insights in data',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            469 => 
            array (
                'id' => 470,
                'question_id' => 118,
                'option_text' => 'To predict future outcomes',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            470 => 
            array (
                'id' => 471,
                'question_id' => 118,
                'option_text' => 'To improve decision-making',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            471 => 
            array (
                'id' => 472,
                'question_id' => 118,
                'option_text' => 'All of the above',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            472 => 
            array (
                'id' => 473,
                'question_id' => 119,
                'option_text' => 'TextField',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            473 => 
            array (
                'id' => 474,
                'question_id' => 119,
                'option_text' => 'Text',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            474 => 
            array (
                'id' => 475,
                'question_id' => 119,
                'option_text' => 'Button',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            475 => 
            array (
                'id' => 476,
                'question_id' => 119,
                'option_text' => 'CheckBox',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            476 => 
            array (
                'id' => 477,
                'question_id' => 120,
                'option_text' => 'Text',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            477 => 
            array (
                'id' => 478,
                'question_id' => 120,
                'option_text' => 'TextField',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            478 => 
            array (
                'id' => 479,
                'question_id' => 120,
                'option_text' => 'FlatButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            479 => 
            array (
                'id' => 480,
                'question_id' => 120,
                'option_text' => 'IconButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            480 => 
            array (
                'id' => 481,
                'question_id' => 121,
                'option_text' => 'RaisedButton',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            481 => 
            array (
                'id' => 482,
                'question_id' => 121,
                'option_text' => 'FlatButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            482 => 
            array (
                'id' => 483,
                'question_id' => 121,
                'option_text' => 'ElevatedButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            483 => 
            array (
                'id' => 484,
                'question_id' => 121,
                'option_text' => 'FloatingActionButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            484 => 
            array (
                'id' => 485,
                'question_id' => 122,
                'option_text' => 'FlatButton',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            485 => 
            array (
                'id' => 486,
                'question_id' => 122,
                'option_text' => 'RaisedButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            486 => 
            array (
                'id' => 487,
                'question_id' => 122,
                'option_text' => 'ElevatedButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            487 => 
            array (
                'id' => 488,
                'question_id' => 122,
                'option_text' => 'ToggleButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            488 => 
            array (
                'id' => 489,
                'question_id' => 123,
                'option_text' => 'Snackbar',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            489 => 
            array (
                'id' => 490,
                'question_id' => 123,
                'option_text' => 'Dialog',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            490 => 
            array (
                'id' => 491,
                'question_id' => 123,
                'option_text' => 'BottomSheet',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            491 => 
            array (
                'id' => 492,
                'question_id' => 123,
                'option_text' => 'Toast',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            492 => 
            array (
                'id' => 493,
                'question_id' => 124,
                'option_text' => 'Switch',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            493 => 
            array (
                'id' => 494,
                'question_id' => 124,
                'option_text' => 'ToggleButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            494 => 
            array (
                'id' => 495,
                'question_id' => 124,
                'option_text' => 'Checkbox',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            495 => 
            array (
                'id' => 496,
                'question_id' => 124,
                'option_text' => 'Slider',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            496 => 
            array (
                'id' => 497,
                'question_id' => 125,
                'option_text' => 'ToggleButton',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            497 => 
            array (
                'id' => 498,
                'question_id' => 125,
                'option_text' => 'Switch',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            498 => 
            array (
                'id' => 499,
                'question_id' => 125,
                'option_text' => 'Checkbox',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            499 => 
            array (
                'id' => 500,
                'question_id' => 125,
                'option_text' => 'Radio',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
        ));
        \DB::table('options')->insert(array (
            0 => 
            array (
                'id' => 501,
                'question_id' => 126,
                'option_text' => 'FlatButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            1 => 
            array (
                'id' => 502,
                'question_id' => 126,
                'option_text' => 'RaisedButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            2 => 
            array (
                'id' => 503,
                'question_id' => 126,
                'option_text' => 'FloatingActionButton',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            3 => 
            array (
                'id' => 504,
                'question_id' => 126,
                'option_text' => 'ToggleButton',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            4 => 
            array (
                'id' => 505,
                'question_id' => 127,
                'option_text' => 'Widget tree',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            5 => 
            array (
                'id' => 506,
                'question_id' => 127,
                'option_text' => 'Layout',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            6 => 
            array (
                'id' => 507,
                'question_id' => 127,
                'option_text' => 'Container',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            7 => 
            array (
                'id' => 508,
                'question_id' => 127,
                'option_text' => 'Scaffold',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            8 => 
            array (
                'id' => 509,
                'question_id' => 128,
                'option_text' => 'Stateless',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            9 => 
            array (
                'id' => 510,
                'question_id' => 128,
                'option_text' => 'Stateful',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            10 => 
            array (
                'id' => 511,
                'question_id' => 128,
                'option_text' => 'Intermediate',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            11 => 
            array (
                'id' => 512,
                'question_id' => 128,
                'option_text' => 'None of the above',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            12 => 
            array (
                'id' => 513,
                'question_id' => 129,
                'option_text' => 'text',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            13 => 
            array (
                'id' => 514,
                'question_id' => 129,
                'option_text' => 'data',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            14 => 
            array (
                'id' => 515,
                'question_id' => 129,
                'option_text' => 'value',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            15 => 
            array (
                'id' => 516,
                'question_id' => 129,
                'option_text' => 'content',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            16 => 
            array (
                'id' => 517,
                'question_id' => 130,
                'option_text' => 'color',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            17 => 
            array (
                'id' => 518,
                'question_id' => 130,
                'option_text' => 'fontColor',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            18 => 
            array (
                'id' => 519,
                'question_id' => 130,
                'option_text' => 'textColor',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            19 => 
            array (
                'id' => 520,
                'question_id' => 130,
                'option_text' => 'style',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            20 => 
            array (
                'id' => 521,
                'question_id' => 131,
                'option_text' => 'fontSize',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            21 => 
            array (
                'id' => 522,
                'question_id' => 131,
                'option_text' => 'textSize',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            22 => 
            array (
                'id' => 523,
                'question_id' => 131,
                'option_text' => 'size',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            23 => 
            array (
                'id' => 524,
                'question_id' => 131,
                'option_text' => 'height',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            24 => 
            array (
                'id' => 525,
                'question_id' => 132,
                'option_text' => 'align',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            25 => 
            array (
                'id' => 526,
                'question_id' => 132,
                'option_text' => 'alignment',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            26 => 
            array (
                'id' => 527,
                'question_id' => 132,
                'option_text' => 'position',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            27 => 
            array (
                'id' => 528,
                'question_id' => 132,
                'option_text' => 'direction',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            28 => 
            array (
                'id' => 529,
                'question_id' => 133,
                'option_text' => 'Container',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            29 => 
            array (
                'id' => 530,
                'question_id' => 133,
                'option_text' => 'Layout',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            30 => 
            array (
                'id' => 531,
                'question_id' => 133,
                'option_text' => 'Scaffold',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            31 => 
            array (
                'id' => 532,
                'question_id' => 133,
                'option_text' => 'Widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            32 => 
            array (
                'id' => 533,
                'question_id' => 134,
                'option_text' => 'height',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            33 => 
            array (
                'id' => 534,
                'question_id' => 134,
                'option_text' => 'width',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            34 => 
            array (
                'id' => 535,
                'question_id' => 134,
                'option_text' => 'size',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            35 => 
            array (
                'id' => 536,
                'question_id' => 134,
                'option_text' => 'padding',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            36 => 
            array (
                'id' => 537,
                'question_id' => 135,
                'option_text' => 'width',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            37 => 
            array (
                'id' => 538,
                'question_id' => 135,
                'option_text' => 'height',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            38 => 
            array (
                'id' => 539,
                'question_id' => 135,
                'option_text' => 'size',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            39 => 
            array (
                'id' => 540,
                'question_id' => 135,
                'option_text' => 'margin',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            40 => 
            array (
                'id' => 541,
                'question_id' => 136,
                'option_text' => 'color',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            41 => 
            array (
                'id' => 542,
                'question_id' => 136,
                'option_text' => 'backgroundColor',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            42 => 
            array (
                'id' => 543,
                'question_id' => 136,
                'option_text' => 'backColor',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            43 => 
            array (
                'id' => 544,
                'question_id' => 136,
                'option_text' => 'bgColor',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            44 => 
            array (
                'id' => 545,
                'question_id' => 137,
                'option_text' => 'padding',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            45 => 
            array (
                'id' => 546,
                'question_id' => 137,
                'option_text' => 'margin',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            46 => 
            array (
                'id' => 547,
                'question_id' => 137,
                'option_text' => 'inset',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            47 => 
            array (
                'id' => 548,
                'question_id' => 137,
                'option_text' => 'offset',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            48 => 
            array (
                'id' => 549,
                'question_id' => 138,
                'option_text' => 'padding',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            49 => 
            array (
                'id' => 550,
                'question_id' => 138,
                'option_text' => 'margin',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            50 => 
            array (
                'id' => 551,
                'question_id' => 138,
                'option_text' => 'inset',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            51 => 
            array (
                'id' => 552,
                'question_id' => 138,
                'option_text' => 'offset',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            52 => 
            array (
                'id' => 553,
                'question_id' => 139,
                'option_text' => 'ListView',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            53 => 
            array (
                'id' => 554,
                'question_id' => 139,
                'option_text' => 'GridView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            54 => 
            array (
                'id' => 555,
                'question_id' => 139,
                'option_text' => 'Column',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            55 => 
            array (
                'id' => 556,
                'question_id' => 139,
                'option_text' => 'Row',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            56 => 
            array (
                'id' => 557,
                'question_id' => 140,
                'option_text' => 'items',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            57 => 
            array (
                'id' => 558,
                'question_id' => 140,
                'option_text' => 'data',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            58 => 
            array (
                'id' => 559,
                'question_id' => 140,
                'option_text' => 'children',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            59 => 
            array (
                'id' => 560,
                'question_id' => 140,
                'option_text' => 'elements',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            60 => 
            array (
                'id' => 561,
                'question_id' => 141,
                'option_text' => 'ListView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            61 => 
            array (
                'id' => 562,
                'question_id' => 141,
                'option_text' => 'GridView',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            62 => 
            array (
                'id' => 563,
                'question_id' => 141,
                'option_text' => 'Column',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            63 => 
            array (
                'id' => 564,
                'question_id' => 141,
                'option_text' => 'Row',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            64 => 
            array (
                'id' => 565,
                'question_id' => 142,
                'option_text' => 'columnCount',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            65 => 
            array (
                'id' => 566,
                'question_id' => 142,
                'option_text' => 'rowCount',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            66 => 
            array (
                'id' => 567,
                'question_id' => 142,
                'option_text' => 'numColumns',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            67 => 
            array (
                'id' => 568,
                'question_id' => 142,
                'option_text' => 'numRows',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            68 => 
            array (
                'id' => 569,
                'question_id' => 143,
                'option_text' => 'ListView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            69 => 
            array (
                'id' => 570,
                'question_id' => 143,
                'option_text' => 'GridView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            70 => 
            array (
                'id' => 571,
                'question_id' => 143,
                'option_text' => 'Column',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            71 => 
            array (
                'id' => 572,
                'question_id' => 143,
                'option_text' => 'Row',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            72 => 
            array (
                'id' => 573,
                'question_id' => 144,
                'option_text' => 'mainAxisAlignment',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            73 => 
            array (
                'id' => 574,
                'question_id' => 144,
                'option_text' => 'crossAxisAlignment',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            74 => 
            array (
                'id' => 575,
                'question_id' => 144,
                'option_text' => 'alignment',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            75 => 
            array (
                'id' => 576,
                'question_id' => 144,
                'option_text' => 'position',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            76 => 
            array (
                'id' => 577,
                'question_id' => 145,
                'option_text' => 'ListView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            77 => 
            array (
                'id' => 578,
                'question_id' => 145,
                'option_text' => 'GridView',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            78 => 
            array (
                'id' => 579,
                'question_id' => 145,
                'option_text' => 'Column',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            79 => 
            array (
                'id' => 580,
                'question_id' => 145,
                'option_text' => 'Row',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            80 => 
            array (
                'id' => 581,
                'question_id' => 146,
                'option_text' => 'mainAxisAlignment',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            81 => 
            array (
                'id' => 582,
                'question_id' => 146,
                'option_text' => 'crossAxisAlignment',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            82 => 
            array (
                'id' => 583,
                'question_id' => 146,
                'option_text' => 'alignment',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            83 => 
            array (
                'id' => 584,
                'question_id' => 146,
                'option_text' => 'position',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            84 => 
            array (
                'id' => 585,
                'question_id' => 147,
                'option_text' => 'App',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            85 => 
            array (
                'id' => 586,
                'question_id' => 147,
                'option_text' => 'Scaffold',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            86 => 
            array (
                'id' => 587,
                'question_id' => 147,
                'option_text' => 'Container',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            87 => 
            array (
                'id' => 588,
                'question_id' => 147,
                'option_text' => 'Widget',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            88 => 
            array (
                'id' => 589,
                'question_id' => 148,
                'option_text' => 'title',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            89 => 
            array (
                'id' => 590,
                'question_id' => 148,
                'option_text' => 'text',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            90 => 
            array (
                'id' => 591,
                'question_id' => 148,
                'option_text' => 'label',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            91 => 
            array (
                'id' => 592,
                'question_id' => 148,
                'option_text' => 'heading',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            92 => 
            array (
                'id' => 593,
                'question_id' => 149,
                'option_text' => 'Flash memory',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            93 => 
            array (
                'id' => 594,
                'question_id' => 149,
                'option_text' => 'Hard disk drive',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            94 => 
            array (
                'id' => 595,
                'question_id' => 149,
                'option_text' => 'Solid-state drive',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            95 => 
            array (
                'id' => 596,
                'question_id' => 149,
                'option_text' => 'Cloud storage',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            96 => 
            array (
                'id' => 597,
                'question_id' => 150,
                'option_text' => 'Redundant Array of Independent Drives',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            97 => 
            array (
                'id' => 598,
                'question_id' => 150,
                'option_text' => 'Random Array of Isolated Disks',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            98 => 
            array (
                'id' => 599,
                'question_id' => 150,
                'option_text' => 'Redundant Array of Interchangeable Disks',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            99 => 
            array (
                'id' => 600,
                'question_id' => 150,
                'option_text' => 'Random Array of Individual Drives',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            100 => 
            array (
                'id' => 601,
                'question_id' => 151,
                'option_text' => 'Archiving',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            101 => 
            array (
                'id' => 602,
                'question_id' => 151,
                'option_text' => 'Backup',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            102 => 
            array (
                'id' => 603,
                'question_id' => 151,
                'option_text' => 'Mirroring',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            103 => 
            array (
                'id' => 604,
                'question_id' => 151,
                'option_text' => 'Replication',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            104 => 
            array (
                'id' => 605,
                'question_id' => 152,
                'option_text' => 'Data overload',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            105 => 
            array (
                'id' => 606,
                'question_id' => 152,
                'option_text' => 'Data security',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            106 => 
            array (
                'id' => 607,
                'question_id' => 152,
                'option_text' => 'Data governance',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            107 => 
            array (
                'id' => 608,
                'question_id' => 152,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            108 => 
            array (
                'id' => 609,
                'question_id' => 153,
                'option_text' => 'Magnetic, optical, solid-state',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            109 => 
            array (
                'id' => 610,
                'question_id' => 153,
                'option_text' => 'Optical, magnetic, solid-state',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            110 => 
            array (
                'id' => 611,
                'question_id' => 153,
                'option_text' => 'Solid-state, magnetic, optical',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            111 => 
            array (
                'id' => 612,
                'question_id' => 153,
                'option_text' => 'Optical, solid-state, magnetic',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            112 => 
            array (
                'id' => 613,
                'question_id' => 154,
                'option_text' => 'Controller, media, and actuator',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            113 => 
            array (
                'id' => 614,
                'question_id' => 154,
                'option_text' => 'Read/write heads, media, and spindle',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            114 => 
            array (
                'id' => 615,
                'question_id' => 154,
                'option_text' => 'Controller, read/write heads, and spindle',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            115 => 
            array (
                'id' => 616,
                'question_id' => 154,
                'option_text' => 'Actuator, media, and read/write heads',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            116 => 
            array (
                'id' => 617,
                'question_id' => 155,
                'option_text' => 'Seek time',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            117 => 
            array (
                'id' => 618,
                'question_id' => 155,
                'option_text' => 'Data transfer rate',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            118 => 
            array (
                'id' => 619,
                'question_id' => 155,
                'option_text' => 'Access time',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            119 => 
            array (
                'id' => 620,
                'question_id' => 155,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            120 => 
            array (
                'id' => 621,
                'question_id' => 156,
                'option_text' => 'Bus interface, memory controller, and CPU',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            121 => 
            array (
                'id' => 622,
                'question_id' => 156,
                'option_text' => 'CPU, memory controller, and disk interface',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            122 => 
            array (
                'id' => 623,
                'question_id' => 156,
                'option_text' => 'Bus interface, CPU, and disk interface',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            123 => 
            array (
                'id' => 624,
                'question_id' => 156,
                'option_text' => 'Memory controller, disk interface, and CPU',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            124 => 
            array (
                'id' => 625,
                'question_id' => 157,
                'option_text' => 'Host system',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            125 => 
            array (
                'id' => 626,
                'question_id' => 157,
                'option_text' => 'Storage devices',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            126 => 
            array (
                'id' => 627,
                'question_id' => 157,
                'option_text' => 'Storage management software',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            127 => 
            array (
                'id' => 628,
                'question_id' => 157,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            128 => 
            array (
                'id' => 629,
                'question_id' => 158,
                'option_text' => 'Creation, storage, access, and deletion',
                'is_correct' => 1,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            129 => 
            array (
                'id' => 630,
                'question_id' => 158,
                'option_text' => 'Creation, storage, access, and modification',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            130 => 
            array (
                'id' => 631,
                'question_id' => 158,
                'option_text' => 'Access, storage, deletion, and creation',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            131 => 
            array (
                'id' => 632,
                'question_id' => 158,
                'option_text' => 'Access, modification, creation, and storage',
                'is_correct' => 0,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            132 => 
            array (
                'id' => 633,
                'question_id' => 159,
                'option_text' => '10',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            133 => 
            array (
                'id' => 634,
                'question_id' => 159,
                'option_text' => '12',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            134 => 
            array (
                'id' => 635,
                'question_id' => 159,
                'option_text' => '14',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            135 => 
            array (
                'id' => 636,
                'question_id' => 159,
                'option_text' => '16',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            136 => 
            array (
                'id' => 637,
                'question_id' => 160,
                'option_text' => '15',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            137 => 
            array (
                'id' => 638,
                'question_id' => 160,
                'option_text' => '25',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            138 => 
            array (
                'id' => 639,
                'question_id' => 160,
                'option_text' => '30',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            139 => 
            array (
                'id' => 640,
                'question_id' => 160,
                'option_text' => '35',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            140 => 
            array (
                'id' => 641,
                'question_id' => 161,
                'option_text' => '35',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            141 => 
            array (
                'id' => 642,
                'question_id' => 161,
                'option_text' => '40',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            142 => 
            array (
                'id' => 643,
                'question_id' => 161,
                'option_text' => '45',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            143 => 
            array (
                'id' => 644,
                'question_id' => 161,
                'option_text' => '50',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            144 => 
            array (
                'id' => 645,
                'question_id' => 162,
                'option_text' => '60',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            145 => 
            array (
                'id' => 646,
                'question_id' => 162,
                'option_text' => '65',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            146 => 
            array (
                'id' => 647,
                'question_id' => 162,
                'option_text' => '70',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            147 => 
            array (
                'id' => 648,
                'question_id' => 162,
                'option_text' => '75',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            148 => 
            array (
                'id' => 649,
                'question_id' => 163,
                'option_text' => '75',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            149 => 
            array (
                'id' => 650,
                'question_id' => 163,
                'option_text' => '80',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            150 => 
            array (
                'id' => 651,
                'question_id' => 163,
                'option_text' => '85',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            151 => 
            array (
                'id' => 652,
                'question_id' => 163,
                'option_text' => '90',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            152 => 
            array (
                'id' => 653,
                'question_id' => 164,
                'option_text' => '8',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            153 => 
            array (
                'id' => 654,
                'question_id' => 164,
                'option_text' => '10',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            154 => 
            array (
                'id' => 655,
                'question_id' => 164,
                'option_text' => '15',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            155 => 
            array (
                'id' => 656,
                'question_id' => 164,
                'option_text' => '20',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            156 => 
            array (
                'id' => 657,
                'question_id' => 165,
                'option_text' => '14',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            157 => 
            array (
                'id' => 658,
                'question_id' => 165,
                'option_text' => '24',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            158 => 
            array (
                'id' => 659,
                'question_id' => 165,
                'option_text' => '40',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            159 => 
            array (
                'id' => 660,
                'question_id' => 165,
                'option_text' => '60',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            160 => 
            array (
                'id' => 661,
                'question_id' => 166,
                'option_text' => '20',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            161 => 
            array (
                'id' => 662,
                'question_id' => 166,
                'option_text' => '30',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            162 => 
            array (
                'id' => 663,
                'question_id' => 166,
                'option_text' => '40',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            163 => 
            array (
                'id' => 664,
                'question_id' => 166,
                'option_text' => '50',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            164 => 
            array (
                'id' => 665,
                'question_id' => 167,
                'option_text' => '26',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            165 => 
            array (
                'id' => 666,
                'question_id' => 167,
                'option_text' => '36',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            166 => 
            array (
                'id' => 667,
                'question_id' => 167,
                'option_text' => '46',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            167 => 
            array (
                'id' => 668,
                'question_id' => 167,
                'option_text' => '56',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            168 => 
            array (
                'id' => 669,
                'question_id' => 168,
                'option_text' => '32',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            169 => 
            array (
                'id' => 670,
                'question_id' => 168,
                'option_text' => '42',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            170 => 
            array (
                'id' => 671,
                'question_id' => 168,
                'option_text' => '52',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            171 => 
            array (
                'id' => 672,
                'question_id' => 168,
                'option_text' => '62',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            172 => 
            array (
                'id' => 673,
                'question_id' => 169,
                'option_text' => '25',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            173 => 
            array (
                'id' => 674,
                'question_id' => 169,
                'option_text' => '30',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            174 => 
            array (
                'id' => 675,
                'question_id' => 169,
                'option_text' => '35',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            175 => 
            array (
                'id' => 676,
                'question_id' => 169,
                'option_text' => '40',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            176 => 
            array (
                'id' => 677,
                'question_id' => 170,
                'option_text' => '15',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            177 => 
            array (
                'id' => 678,
                'question_id' => 170,
                'option_text' => '25',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            178 => 
            array (
                'id' => 679,
                'question_id' => 170,
                'option_text' => '35',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            179 => 
            array (
                'id' => 680,
                'question_id' => 170,
                'option_text' => '45',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            180 => 
            array (
                'id' => 681,
                'question_id' => 171,
                'option_text' => '30',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            181 => 
            array (
                'id' => 682,
                'question_id' => 171,
                'option_text' => '35',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            182 => 
            array (
                'id' => 683,
                'question_id' => 171,
                'option_text' => '40',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            183 => 
            array (
                'id' => 684,
                'question_id' => 171,
                'option_text' => '45',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            184 => 
            array (
                'id' => 685,
                'question_id' => 172,
                'option_text' => '20',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            185 => 
            array (
                'id' => 686,
                'question_id' => 172,
                'option_text' => '30',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            186 => 
            array (
                'id' => 687,
                'question_id' => 172,
                'option_text' => '40',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            187 => 
            array (
                'id' => 688,
                'question_id' => 172,
                'option_text' => '50',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            188 => 
            array (
                'id' => 689,
                'question_id' => 173,
                'option_text' => '40',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            189 => 
            array (
                'id' => 690,
                'question_id' => 173,
                'option_text' => '45',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            190 => 
            array (
                'id' => 691,
                'question_id' => 173,
                'option_text' => '50',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            191 => 
            array (
                'id' => 692,
                'question_id' => 173,
                'option_text' => '55',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            192 => 
            array (
                'id' => 693,
                'question_id' => 174,
                'option_text' => '25',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            193 => 
            array (
                'id' => 694,
                'question_id' => 174,
                'option_text' => '35',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            194 => 
            array (
                'id' => 695,
                'question_id' => 174,
                'option_text' => '45',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            195 => 
            array (
                'id' => 696,
                'question_id' => 174,
                'option_text' => '55',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            196 => 
            array (
                'id' => 697,
                'question_id' => 175,
                'option_text' => '50',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            197 => 
            array (
                'id' => 698,
                'question_id' => 175,
                'option_text' => '55',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            198 => 
            array (
                'id' => 699,
                'question_id' => 175,
                'option_text' => '60',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            199 => 
            array (
                'id' => 700,
                'question_id' => 175,
                'option_text' => '65',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            200 => 
            array (
                'id' => 701,
                'question_id' => 176,
                'option_text' => '30',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            201 => 
            array (
                'id' => 702,
                'question_id' => 176,
                'option_text' => '40',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            202 => 
            array (
                'id' => 703,
                'question_id' => 176,
                'option_text' => '50',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            203 => 
            array (
                'id' => 704,
                'question_id' => 176,
                'option_text' => '60',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            204 => 
            array (
                'id' => 705,
                'question_id' => 177,
                'option_text' => '60',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            205 => 
            array (
                'id' => 706,
                'question_id' => 177,
                'option_text' => '65',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            206 => 
            array (
                'id' => 707,
                'question_id' => 177,
                'option_text' => '70',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            207 => 
            array (
                'id' => 708,
                'question_id' => 177,
                'option_text' => '75',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            208 => 
            array (
                'id' => 709,
                'question_id' => 178,
                'option_text' => '35',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            209 => 
            array (
                'id' => 710,
                'question_id' => 178,
                'option_text' => '45',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            210 => 
            array (
                'id' => 711,
                'question_id' => 178,
                'option_text' => '55',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            211 => 
            array (
                'id' => 712,
                'question_id' => 178,
                'option_text' => '65',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            212 => 
            array (
                'id' => 713,
                'question_id' => 179,
                'option_text' => '10',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            213 => 
            array (
                'id' => 714,
                'question_id' => 179,
                'option_text' => '12',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            214 => 
            array (
                'id' => 715,
                'question_id' => 179,
                'option_text' => '14',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            215 => 
            array (
                'id' => 716,
                'question_id' => 179,
                'option_text' => '16',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            216 => 
            array (
                'id' => 717,
                'question_id' => 180,
                'option_text' => '21',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            217 => 
            array (
                'id' => 718,
                'question_id' => 180,
                'option_text' => '22',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            218 => 
            array (
                'id' => 719,
                'question_id' => 180,
                'option_text' => '23',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            219 => 
            array (
                'id' => 720,
                'question_id' => 180,
                'option_text' => '24',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            220 => 
            array (
                'id' => 721,
                'question_id' => 181,
                'option_text' => '23',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            221 => 
            array (
                'id' => 722,
                'question_id' => 181,
                'option_text' => '24',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            222 => 
            array (
                'id' => 723,
                'question_id' => 181,
                'option_text' => '25',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            223 => 
            array (
                'id' => 724,
                'question_id' => 181,
                'option_text' => '26',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            224 => 
            array (
                'id' => 725,
                'question_id' => 182,
                'option_text' => '33',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            225 => 
            array (
                'id' => 726,
                'question_id' => 182,
                'option_text' => '34',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            226 => 
            array (
                'id' => 727,
                'question_id' => 182,
                'option_text' => '35',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            227 => 
            array (
                'id' => 728,
                'question_id' => 182,
                'option_text' => '36',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            228 => 
            array (
                'id' => 729,
                'question_id' => 183,
                'option_text' => '35',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            229 => 
            array (
                'id' => 730,
                'question_id' => 183,
                'option_text' => '36',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            230 => 
            array (
                'id' => 731,
                'question_id' => 183,
                'option_text' => '37',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            231 => 
            array (
                'id' => 732,
                'question_id' => 183,
                'option_text' => '38',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            232 => 
            array (
                'id' => 733,
                'question_id' => 184,
                'option_text' => '46',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            233 => 
            array (
                'id' => 734,
                'question_id' => 184,
                'option_text' => '47',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            234 => 
            array (
                'id' => 735,
                'question_id' => 184,
                'option_text' => '48',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            235 => 
            array (
                'id' => 736,
                'question_id' => 184,
                'option_text' => '49',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            236 => 
            array (
                'id' => 737,
                'question_id' => 185,
                'option_text' => '54',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            237 => 
            array (
                'id' => 738,
                'question_id' => 185,
                'option_text' => '55',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            238 => 
            array (
                'id' => 739,
                'question_id' => 185,
                'option_text' => '56',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            239 => 
            array (
                'id' => 740,
                'question_id' => 185,
                'option_text' => '57',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            240 => 
            array (
                'id' => 741,
                'question_id' => 186,
                'option_text' => '62',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            241 => 
            array (
                'id' => 742,
                'question_id' => 186,
                'option_text' => '63',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            242 => 
            array (
                'id' => 743,
                'question_id' => 186,
                'option_text' => '64',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            243 => 
            array (
                'id' => 744,
                'question_id' => 186,
                'option_text' => '65',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            244 => 
            array (
                'id' => 745,
                'question_id' => 187,
                'option_text' => '70',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            245 => 
            array (
                'id' => 746,
                'question_id' => 187,
                'option_text' => '71',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            246 => 
            array (
                'id' => 747,
                'question_id' => 187,
                'option_text' => '72',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            247 => 
            array (
                'id' => 748,
                'question_id' => 187,
                'option_text' => '73',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            248 => 
            array (
                'id' => 749,
                'question_id' => 188,
                'option_text' => '78',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            249 => 
            array (
                'id' => 750,
                'question_id' => 188,
                'option_text' => '79',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            250 => 
            array (
                'id' => 751,
                'question_id' => 188,
                'option_text' => '80',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            251 => 
            array (
                'id' => 752,
                'question_id' => 188,
                'option_text' => '81',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            252 => 
            array (
                'id' => 753,
                'question_id' => 189,
                'option_text' => '8',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            253 => 
            array (
                'id' => 754,
                'question_id' => 189,
                'option_text' => '10',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            254 => 
            array (
                'id' => 755,
                'question_id' => 189,
                'option_text' => '12',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            255 => 
            array (
                'id' => 756,
                'question_id' => 189,
                'option_text' => '14',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            256 => 
            array (
                'id' => 757,
                'question_id' => 190,
                'option_text' => '6',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            257 => 
            array (
                'id' => 758,
                'question_id' => 190,
                'option_text' => '8',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            258 => 
            array (
                'id' => 759,
                'question_id' => 190,
                'option_text' => '9',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            259 => 
            array (
                'id' => 760,
                'question_id' => 190,
                'option_text' => '10',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            260 => 
            array (
                'id' => 761,
                'question_id' => 191,
                'option_text' => '10',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            261 => 
            array (
                'id' => 762,
                'question_id' => 191,
                'option_text' => '11',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            262 => 
            array (
                'id' => 763,
                'question_id' => 191,
                'option_text' => '13',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            263 => 
            array (
                'id' => 764,
                'question_id' => 191,
                'option_text' => '14',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            264 => 
            array (
                'id' => 765,
                'question_id' => 192,
                'option_text' => '9',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            265 => 
            array (
                'id' => 766,
                'question_id' => 192,
                'option_text' => '10',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            266 => 
            array (
                'id' => 767,
                'question_id' => 192,
                'option_text' => '11',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            267 => 
            array (
                'id' => 768,
                'question_id' => 192,
                'option_text' => '12',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            268 => 
            array (
                'id' => 769,
                'question_id' => 193,
                'option_text' => '11',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            269 => 
            array (
                'id' => 770,
                'question_id' => 193,
                'option_text' => '12',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            270 => 
            array (
                'id' => 771,
                'question_id' => 193,
                'option_text' => '13',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            271 => 
            array (
                'id' => 772,
                'question_id' => 193,
                'option_text' => '14',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            272 => 
            array (
                'id' => 773,
                'question_id' => 194,
                'option_text' => '8',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            273 => 
            array (
                'id' => 774,
                'question_id' => 194,
                'option_text' => '9',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            274 => 
            array (
                'id' => 775,
                'question_id' => 194,
                'option_text' => '10',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            275 => 
            array (
                'id' => 776,
                'question_id' => 194,
                'option_text' => '11',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            276 => 
            array (
                'id' => 777,
                'question_id' => 195,
                'option_text' => '9',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            277 => 
            array (
                'id' => 778,
                'question_id' => 195,
                'option_text' => '10',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            278 => 
            array (
                'id' => 779,
                'question_id' => 195,
                'option_text' => '11',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            279 => 
            array (
                'id' => 780,
                'question_id' => 195,
                'option_text' => '12',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            280 => 
            array (
                'id' => 781,
                'question_id' => 196,
                'option_text' => '9',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            281 => 
            array (
                'id' => 782,
                'question_id' => 196,
                'option_text' => '10',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            282 => 
            array (
                'id' => 783,
                'question_id' => 196,
                'option_text' => '11',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            283 => 
            array (
                'id' => 784,
                'question_id' => 196,
                'option_text' => '12',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            284 => 
            array (
                'id' => 785,
                'question_id' => 197,
                'option_text' => '8',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            285 => 
            array (
                'id' => 786,
                'question_id' => 197,
                'option_text' => '9',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            286 => 
            array (
                'id' => 787,
                'question_id' => 197,
                'option_text' => '10',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            287 => 
            array (
                'id' => 788,
                'question_id' => 197,
                'option_text' => '11',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            288 => 
            array (
                'id' => 789,
                'question_id' => 198,
                'option_text' => '9',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            289 => 
            array (
                'id' => 790,
                'question_id' => 198,
                'option_text' => '10',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            290 => 
            array (
                'id' => 791,
                'question_id' => 198,
                'option_text' => '11',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            291 => 
            array (
                'id' => 792,
                'question_id' => 198,
                'option_text' => '12',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            292 => 
            array (
                'id' => 793,
                'question_id' => 199,
                'option_text' => '20',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            293 => 
            array (
                'id' => 794,
                'question_id' => 199,
                'option_text' => '25',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            294 => 
            array (
                'id' => 795,
                'question_id' => 199,
                'option_text' => '30',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            295 => 
            array (
                'id' => 796,
                'question_id' => 199,
                'option_text' => '35',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            296 => 
            array (
                'id' => 797,
                'question_id' => 200,
                'option_text' => '1',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            297 => 
            array (
                'id' => 798,
                'question_id' => 200,
                'option_text' => '2',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            298 => 
            array (
                'id' => 799,
                'question_id' => 200,
                'option_text' => '3',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            299 => 
            array (
                'id' => 800,
                'question_id' => 200,
                'option_text' => '4',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            300 => 
            array (
                'id' => 801,
                'question_id' => 201,
                'option_text' => 'Cirrus',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            301 => 
            array (
                'id' => 802,
                'question_id' => 201,
                'option_text' => 'Stratus',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            302 => 
            array (
                'id' => 803,
                'question_id' => 201,
                'option_text' => 'Cumulus',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            303 => 
            array (
                'id' => 804,
                'question_id' => 201,
                'option_text' => 'Rectangular',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            304 => 
            array (
                'id' => 805,
                'question_id' => 202,
                'option_text' => 'London',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            305 => 
            array (
                'id' => 806,
                'question_id' => 202,
                'option_text' => 'Paris',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            306 => 
            array (
                'id' => 807,
                'question_id' => 202,
                'option_text' => 'Rome',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            307 => 
            array (
                'id' => 808,
                'question_id' => 202,
                'option_text' => 'Madrid',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            308 => 
            array (
                'id' => 809,
                'question_id' => 203,
                'option_text' => 'Coal',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            309 => 
            array (
                'id' => 810,
                'question_id' => 203,
                'option_text' => 'Natural gas',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            310 => 
            array (
                'id' => 811,
                'question_id' => 203,
                'option_text' => 'Wind',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            311 => 
            array (
                'id' => 812,
                'question_id' => 203,
                'option_text' => 'Nuclear power',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            312 => 
            array (
                'id' => 813,
                'question_id' => 204,
                'option_text' => 'Usability',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            313 => 
            array (
                'id' => 814,
                'question_id' => 204,
                'option_text' => 'Adaptability',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            314 => 
            array (
                'id' => 815,
                'question_id' => 204,
                'option_text' => 'Completeness',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            315 => 
            array (
                'id' => 816,
                'question_id' => 204,
                'option_text' => 'Rigidity',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            316 => 
            array (
                'id' => 817,
                'question_id' => 205,
                'option_text' => 'A fully functional prototype is developed early in the process.',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            317 => 
            array (
                'id' => 818,
                'question_id' => 205,
                'option_text' => 'Requirements are defined in detail before prototyping begins.',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            318 => 
            array (
                'id' => 819,
                'question_id' => 205,
                'option_text' => 'Feedback from users is used to refine the requirements.',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            319 => 
            array (
                'id' => 820,
                'question_id' => 205,
                'option_text' => 'The prototype is the final product.',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            320 => 
            array (
                'id' => 821,
                'question_id' => 206,
                'option_text' => 'Modularity',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            321 => 
            array (
                'id' => 822,
                'question_id' => 206,
                'option_text' => 'Cohesion',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            322 => 
            array (
                'id' => 823,
                'question_id' => 206,
                'option_text' => 'Coupling',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            323 => 
            array (
                'id' => 824,
                'question_id' => 206,
                'option_text' => 'Abstraction',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            324 => 
            array (
                'id' => 825,
                'question_id' => 207,
                'option_text' => 'Breaking the system down into smaller and smaller components.',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            325 => 
            array (
                'id' => 826,
                'question_id' => 207,
                'option_text' => 'Starting with the most detailed level of design and working up.',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            326 => 
            array (
                'id' => 827,
                'question_id' => 207,
                'option_text' => 'Combining individual components into larger units.',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            327 => 
            array (
                'id' => 828,
                'question_id' => 207,
                'option_text' => 'Using a combination of top-down and bottom-up approaches.',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            328 => 
            array (
                'id' => 829,
                'question_id' => 208,
                'option_text' => 'The control flow of a system',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            329 => 
            array (
                'id' => 830,
                'question_id' => 208,
                'option_text' => 'The data that flows through a system',
                'is_correct' => 1,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            330 => 
            array (
                'id' => 831,
                'question_id' => 208,
                'option_text' => 'The structure of a system',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            331 => 
            array (
                'id' => 832,
                'question_id' => 208,
                'option_text' => 'The components of a system',
                'is_correct' => 0,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            332 => 
            array (
                'id' => 833,
                'question_id' => 209,
                'option_text' => 'Production orientation',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            333 => 
            array (
                'id' => 834,
                'question_id' => 209,
                'option_text' => 'Market orientation',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            334 => 
            array (
                'id' => 835,
                'question_id' => 209,
                'option_text' => 'Human resource orientation',
                'is_correct' => 1,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            335 => 
            array (
                'id' => 836,
                'question_id' => 209,
                'option_text' => 'Sales orientation',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            336 => 
            array (
                'id' => 837,
                'question_id' => 210,
                'option_text' => 'What the product can do for the customer',
                'is_correct' => 1,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            337 => 
            array (
                'id' => 838,
                'question_id' => 210,
                'option_text' => 'How the product is made',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            338 => 
            array (
                'id' => 839,
                'question_id' => 210,
                'option_text' => 'The price of the product',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            339 => 
            array (
                'id' => 840,
                'question_id' => 210,
                'option_text' => 'The competition\'s offerings',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            340 => 
            array (
                'id' => 841,
                'question_id' => 211,
                'option_text' => 'Competitors',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            341 => 
            array (
                'id' => 842,
                'question_id' => 211,
                'option_text' => 'Government regulations',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            342 => 
            array (
                'id' => 843,
                'question_id' => 211,
                'option_text' => 'Economic conditions',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            343 => 
            array (
                'id' => 844,
                'question_id' => 211,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            344 => 
            array (
                'id' => 845,
                'question_id' => 212,
                'option_text' => 'Using multiple communication channels in a coordinated way',
                'is_correct' => 1,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            345 => 
            array (
                'id' => 846,
                'question_id' => 212,
                'option_text' => 'Focusing on a single communication channel',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            346 => 
            array (
                'id' => 847,
                'question_id' => 212,
                'option_text' => 'Advertising only in traditional media',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            347 => 
            array (
                'id' => 848,
                'question_id' => 212,
                'option_text' => 'Using social media to reach customers',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            348 => 
            array (
                'id' => 849,
                'question_id' => 213,
                'option_text' => 'Generating revenue',
                'is_correct' => 1,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            349 => 
            array (
                'id' => 850,
                'question_id' => 213,
                'option_text' => 'Developing new products',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            350 => 
            array (
                'id' => 851,
                'question_id' => 213,
                'option_text' => 'Managing customer relationships',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            351 => 
            array (
                'id' => 852,
                'question_id' => 213,
                'option_text' => 'Promoting the company',
                'is_correct' => 0,
                'created_at' => '2025-01-28 08:55:46',
                'updated_at' => '2025-01-28 08:55:46',
            ),
            352 => 
            array (
                'id' => 853,
                'question_id' => 214,
                'option_text' => 'Product development',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            353 => 
            array (
                'id' => 854,
                'question_id' => 214,
                'option_text' => 'Sales promotion',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            354 => 
            array (
                'id' => 855,
                'question_id' => 214,
                'option_text' => 'Customer satisfaction',
                'is_correct' => 1,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            355 => 
            array (
                'id' => 856,
                'question_id' => 214,
                'option_text' => 'Profit maximization',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            356 => 
            array (
                'id' => 857,
                'question_id' => 215,
                'option_text' => 'Market research, strategy development, implementation, and evaluation',
                'is_correct' => 1,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            357 => 
            array (
                'id' => 858,
                'question_id' => 215,
                'option_text' => 'Product development, pricing, distribution, and advertising',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            358 => 
            array (
                'id' => 859,
                'question_id' => 215,
                'option_text' => 'Customer acquisition, customer retention, and customer loyalty',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            359 => 
            array (
                'id' => 860,
                'question_id' => 215,
                'option_text' => 'Marketing research, planning, execution, and control',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            360 => 
            array (
                'id' => 861,
                'question_id' => 216,
                'option_text' => 'Production orientation',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            361 => 
            array (
                'id' => 862,
                'question_id' => 216,
                'option_text' => 'Product orientation',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            362 => 
            array (
                'id' => 863,
                'question_id' => 216,
                'option_text' => 'Sales orientation',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            363 => 
            array (
                'id' => 864,
                'question_id' => 216,
                'option_text' => 'Market orientation',
                'is_correct' => 1,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            364 => 
            array (
                'id' => 865,
                'question_id' => 217,
                'option_text' => 'Product, price, promotion, and process',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            365 => 
            array (
                'id' => 866,
                'question_id' => 217,
                'option_text' => 'Product, price, place, and promotion',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            366 => 
            array (
                'id' => 867,
                'question_id' => 217,
                'option_text' => 'Product, place, price, and people',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            367 => 
            array (
                'id' => 868,
                'question_id' => 217,
                'option_text' => 'Product, place, price, and promotion',
                'is_correct' => 1,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            368 => 
            array (
                'id' => 869,
                'question_id' => 218,
                'option_text' => 'Customer acquisition',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            369 => 
            array (
                'id' => 870,
                'question_id' => 218,
                'option_text' => 'Customer retention',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            370 => 
            array (
                'id' => 871,
                'question_id' => 218,
                'option_text' => 'Customer loyalty',
                'is_correct' => 0,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            371 => 
            array (
                'id' => 872,
                'question_id' => 218,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            372 => 
            array (
                'id' => 873,
                'question_id' => 219,
                'option_text' => 'Installing Android Studio',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            373 => 
            array (
                'id' => 874,
                'question_id' => 219,
                'option_text' => 'Installing the Flutter SDK',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            374 => 
            array (
                'id' => 875,
                'question_id' => 219,
                'option_text' => 'Configuring environment variables',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            375 => 
            array (
                'id' => 876,
                'question_id' => 219,
                'option_text' => 'Installing a web browser',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            376 => 
            array (
                'id' => 877,
                'question_id' => 220,
                'option_text' => 'Kotlin',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            377 => 
            array (
                'id' => 878,
                'question_id' => 220,
                'option_text' => 'Swift',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            378 => 
            array (
                'id' => 879,
                'question_id' => 220,
                'option_text' => 'Dart',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            379 => 
            array (
                'id' => 880,
                'question_id' => 220,
                'option_text' => 'Java',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            380 => 
            array (
                'id' => 881,
                'question_id' => 221,
                'option_text' => 'Kotlin plugin',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            381 => 
            array (
                'id' => 882,
                'question_id' => 221,
                'option_text' => 'Flutter and Dart plugin',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            382 => 
            array (
                'id' => 883,
                'question_id' => 221,
                'option_text' => 'Swift plugin',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            383 => 
            array (
                'id' => 884,
                'question_id' => 221,
                'option_text' => 'Java FX plugin',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            384 => 
            array (
                'id' => 885,
                'question_id' => 222,
                'option_text' => 'Widgets',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            385 => 
            array (
                'id' => 886,
                'question_id' => 222,
                'option_text' => 'Activities',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            386 => 
            array (
                'id' => 887,
                'question_id' => 222,
                'option_text' => 'Fragments',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            387 => 
            array (
                'id' => 888,
                'question_id' => 222,
                'option_text' => 'View Controllers',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            388 => 
            array (
                'id' => 889,
                'question_id' => 223,
                'option_text' => 'Flutter Engine',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            389 => 
            array (
                'id' => 890,
                'question_id' => 223,
                'option_text' => 'Flutter Framework',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            390 => 
            array (
                'id' => 891,
                'question_id' => 223,
                'option_text' => 'Dart VM',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            391 => 
            array (
                'id' => 892,
                'question_id' => 223,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            392 => 
            array (
                'id' => 893,
                'question_id' => 224,
                'option_text' => '15',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            393 => 
            array (
                'id' => 894,
                'question_id' => 224,
                'option_text' => '14',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            394 => 
            array (
                'id' => 895,
                'question_id' => 224,
                'option_text' => '12',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            395 => 
            array (
                'id' => 896,
                'question_id' => 224,
                'option_text' => '10',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            396 => 
            array (
                'id' => 897,
                'question_id' => 225,
                'option_text' => '24',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            397 => 
            array (
                'id' => 898,
                'question_id' => 225,
                'option_text' => '10',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            398 => 
            array (
                'id' => 899,
                'question_id' => 225,
                'option_text' => '20',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            399 => 
            array (
                'id' => 900,
                'question_id' => 225,
                'option_text' => '12',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            400 => 
            array (
                'id' => 901,
                'question_id' => 226,
                'option_text' => '9',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            401 => 
            array (
                'id' => 902,
                'question_id' => 226,
                'option_text' => '8',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            402 => 
            array (
                'id' => 903,
                'question_id' => 226,
                'option_text' => '7',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            403 => 
            array (
                'id' => 904,
                'question_id' => 226,
                'option_text' => '6',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            404 => 
            array (
                'id' => 905,
                'question_id' => 227,
                'option_text' => '20',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            405 => 
            array (
                'id' => 906,
                'question_id' => 227,
                'option_text' => '27',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            406 => 
            array (
                'id' => 907,
                'question_id' => 227,
                'option_text' => '18',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            407 => 
            array (
                'id' => 908,
                'question_id' => 227,
                'option_text' => '24',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            408 => 
            array (
                'id' => 909,
                'question_id' => 228,
                'option_text' => '7',
                'is_correct' => 1,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            409 => 
            array (
                'id' => 910,
                'question_id' => 228,
                'option_text' => '6',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            410 => 
            array (
                'id' => 911,
                'question_id' => 228,
                'option_text' => '5',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            411 => 
            array (
                'id' => 912,
                'question_id' => 228,
                'option_text' => '4',
                'is_correct' => 0,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            412 => 
            array (
                'id' => 913,
                'question_id' => 229,
                'option_text' => 'Product',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            413 => 
            array (
                'id' => 914,
                'question_id' => 229,
                'option_text' => 'Price',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            414 => 
            array (
                'id' => 915,
                'question_id' => 229,
                'option_text' => 'Promotion',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            415 => 
            array (
                'id' => 916,
                'question_id' => 229,
                'option_text' => 'Profit',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            416 => 
            array (
                'id' => 917,
                'question_id' => 230,
                'option_text' => 'Capturing marketing insights',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            417 => 
            array (
                'id' => 918,
                'question_id' => 230,
                'option_text' => 'Connecting with customers',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            418 => 
            array (
                'id' => 919,
                'question_id' => 230,
                'option_text' => 'Building customer relationships',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            419 => 
            array (
                'id' => 920,
                'question_id' => 230,
                'option_text' => 'Capturing customer value',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            420 => 
            array (
                'id' => 921,
                'question_id' => 231,
                'option_text' => 'Production orientation',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            421 => 
            array (
                'id' => 922,
                'question_id' => 231,
                'option_text' => 'Product orientation',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            422 => 
            array (
                'id' => 923,
                'question_id' => 231,
                'option_text' => 'Selling orientation',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            423 => 
            array (
                'id' => 924,
                'question_id' => 231,
                'option_text' => 'Marketing orientation',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            424 => 
            array (
                'id' => 925,
                'question_id' => 232,
                'option_text' => 'Competitors',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            425 => 
            array (
                'id' => 926,
                'question_id' => 232,
                'option_text' => 'Customers',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            426 => 
            array (
                'id' => 927,
                'question_id' => 232,
                'option_text' => 'Economic conditions',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            427 => 
            array (
                'id' => 928,
                'question_id' => 232,
                'option_text' => 'Suppliers',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            428 => 
            array (
                'id' => 929,
                'question_id' => 233,
                'option_text' => 'Targeting',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            429 => 
            array (
                'id' => 930,
                'question_id' => 233,
                'option_text' => 'Positioning',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            430 => 
            array (
                'id' => 931,
                'question_id' => 233,
                'option_text' => 'Segmenting',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            431 => 
            array (
                'id' => 932,
                'question_id' => 233,
                'option_text' => 'Diversifying',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            432 => 
            array (
                'id' => 933,
                'question_id' => 234,
                'option_text' => 'Awareness',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            433 => 
            array (
                'id' => 934,
                'question_id' => 234,
                'option_text' => 'Consideration',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            434 => 
            array (
                'id' => 935,
                'question_id' => 234,
                'option_text' => 'Purchase',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            435 => 
            array (
                'id' => 936,
                'question_id' => 234,
                'option_text' => 'Production',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            436 => 
            array (
                'id' => 937,
                'question_id' => 235,
                'option_text' => 'Customer acquisition',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            437 => 
            array (
                'id' => 938,
                'question_id' => 235,
                'option_text' => 'Customer retention',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            438 => 
            array (
                'id' => 939,
                'question_id' => 235,
                'option_text' => 'Customer churn',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            439 => 
            array (
                'id' => 940,
                'question_id' => 235,
                'option_text' => 'Customer downsizing',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            440 => 
            array (
                'id' => 941,
                'question_id' => 236,
                'option_text' => 'Competitor\'s strengths',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            441 => 
            array (
                'id' => 942,
                'question_id' => 236,
                'option_text' => 'Competitor\'s weaknesses',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            442 => 
            array (
                'id' => 943,
                'question_id' => 236,
                'option_text' => 'Customer complaints',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            443 => 
            array (
                'id' => 944,
                'question_id' => 236,
                'option_text' => 'Competitor\'s strategies',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            444 => 
            array (
                'id' => 945,
                'question_id' => 237,
                'option_text' => 'Marketing research',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            445 => 
            array (
                'id' => 946,
                'question_id' => 237,
                'option_text' => 'Consumer behaviour',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            446 => 
            array (
                'id' => 947,
                'question_id' => 237,
                'option_text' => 'Organizational behaviour',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            447 => 
            array (
                'id' => 948,
                'question_id' => 237,
                'option_text' => 'Market demand',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            448 => 
            array (
                'id' => 949,
                'question_id' => 238,
                'option_text' => 'New task',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            449 => 
            array (
                'id' => 950,
                'question_id' => 238,
                'option_text' => 'Straight re-buy',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            450 => 
            array (
                'id' => 951,
                'question_id' => 238,
                'option_text' => 'Impulse buying',
                'is_correct' => 1,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            451 => 
            array (
                'id' => 952,
                'question_id' => 238,
                'option_text' => 'Modified re-buy',
                'is_correct' => 0,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            452 => 
            array (
                'id' => 953,
                'question_id' => 239,
                'option_text' => 'Cross-platform development',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            453 => 
            array (
                'id' => 954,
                'question_id' => 239,
                'option_text' => 'Hot reloading',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            454 => 
            array (
                'id' => 955,
                'question_id' => 239,
                'option_text' => 'Native performance',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            455 => 
            array (
                'id' => 956,
                'question_id' => 239,
                'option_text' => 'Extensive documentation',
                'is_correct' => 1,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            456 => 
            array (
                'id' => 957,
                'question_id' => 240,
                'option_text' => 'MaterialApp',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            457 => 
            array (
                'id' => 958,
                'question_id' => 240,
                'option_text' => 'StatelessWidget',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            458 => 
            array (
                'id' => 959,
                'question_id' => 240,
                'option_text' => 'State',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            459 => 
            array (
                'id' => 960,
                'question_id' => 240,
                'option_text' => 'BuildContext',
                'is_correct' => 1,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            460 => 
            array (
                'id' => 961,
                'question_id' => 241,
                'option_text' => '.dart',
                'is_correct' => 1,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            461 => 
            array (
                'id' => 962,
                'question_id' => 241,
                'option_text' => '.fl',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            462 => 
            array (
                'id' => 963,
                'question_id' => 241,
                'option_text' => '.java',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            463 => 
            array (
                'id' => 964,
                'question_id' => 241,
                'option_text' => '.xml',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            464 => 
            array (
                'id' => 965,
                'question_id' => 242,
                'option_text' => 'flutter install',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            465 => 
            array (
                'id' => 966,
                'question_id' => 242,
                'option_text' => 'dart install',
                'is_correct' => 1,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            466 => 
            array (
                'id' => 967,
                'question_id' => 242,
                'option_text' => 'android studio install',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            467 => 
            array (
                'id' => 968,
                'question_id' => 242,
                'option_text' => 'npm install',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            468 => 
            array (
                'id' => 969,
                'question_id' => 243,
                'option_text' => 'To define the project\'s dependencies',
                'is_correct' => 1,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            469 => 
            array (
                'id' => 970,
                'question_id' => 243,
                'option_text' => 'To specify the project\'s build configuration',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            470 => 
            array (
                'id' => 971,
                'question_id' => 243,
                'option_text' => 'To define the application\'s UI layout',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            471 => 
            array (
                'id' => 972,
                'question_id' => 243,
                'option_text' => 'To store the project\'s source code',
                'is_correct' => 0,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            472 => 
            array (
                'id' => 973,
                'question_id' => 244,
                'option_text' => 'To diagnose environmental conditions',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            473 => 
            array (
                'id' => 974,
                'question_id' => 244,
                'option_text' => 'To monitor the health of medical staff',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            474 => 
            array (
                'id' => 975,
                'question_id' => 244,
                'option_text' => 'To identify pathogens causing infection',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            475 => 
            array (
                'id' => 976,
                'question_id' => 244,
                'option_text' => 'To assess the cleanliness of the hospital',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            476 => 
            array (
                'id' => 977,
                'question_id' => 245,
                'option_text' => 'Environmental sampling',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            477 => 
            array (
                'id' => 978,
                'question_id' => 245,
                'option_text' => 'Blood culture',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            478 => 
            array (
                'id' => 979,
                'question_id' => 245,
                'option_text' => 'Air quality testing',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            479 => 
            array (
                'id' => 980,
                'question_id' => 245,
                'option_text' => 'Soil analysis',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            480 => 
            array (
                'id' => 981,
                'question_id' => 246,
                'option_text' => 'To assess the effectiveness of hospital cleaning protocols',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            481 => 
            array (
                'id' => 982,
                'question_id' => 246,
                'option_text' => 'To track the spread of diseases within a population',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            482 => 
            array (
                'id' => 983,
                'question_id' => 246,
                'option_text' => 'To evaluate the performance of medical staff',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            483 => 
            array (
                'id' => 984,
                'question_id' => 246,
                'option_text' => 'To monitor the quality of medical equipment',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            484 => 
            array (
                'id' => 985,
                'question_id' => 247,
                'option_text' => 'Environmental scientist',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            485 => 
            array (
                'id' => 986,
                'question_id' => 247,
                'option_text' => 'Medical microbiologist',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            486 => 
            array (
                'id' => 987,
                'question_id' => 247,
                'option_text' => 'Civil engineer',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            487 => 
            array (
                'id' => 988,
                'question_id' => 247,
                'option_text' => 'IT specialist',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            488 => 
            array (
                'id' => 989,
                'question_id' => 248,
                'option_text' => 'Learning to operate heavy machinery',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            489 => 
            array (
                'id' => 990,
                'question_id' => 248,
                'option_text' => 'Mastering public speaking skills',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            490 => 
            array (
                'id' => 991,
                'question_id' => 248,
                'option_text' => 'Understanding proper specimen collection and handling techniques',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            491 => 
            array (
                'id' => 992,
                'question_id' => 248,
                'option_text' => 'Developing software for data analysis',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            492 => 
            array (
                'id' => 993,
                'question_id' => 249,
                'option_text' => 'Water samples',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            493 => 
            array (
                'id' => 994,
                'question_id' => 249,
                'option_text' => 'Urine samples',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            494 => 
            array (
                'id' => 995,
                'question_id' => 249,
                'option_text' => 'Plant tissue',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            495 => 
            array (
                'id' => 996,
                'question_id' => 249,
                'option_text' => 'Concrete samples',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            496 => 
            array (
                'id' => 997,
                'question_id' => 250,
                'option_text' => 'To ensure the specimen is aesthetically pleasing',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            497 => 
            array (
                'id' => 998,
                'question_id' => 250,
                'option_text' => 'To prevent misidentification and mix-ups',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            498 => 
            array (
                'id' => 999,
                'question_id' => 250,
                'option_text' => 'To increase the specimen\'s shelf life',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            499 => 
            array (
                'id' => 1000,
                'question_id' => 250,
                'option_text' => 'To reduce the cost of specimen analysis',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
        ));
        \DB::table('options')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'question_id' => 251,
                'option_text' => 'Spatula',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            1 => 
            array (
                'id' => 1002,
                'question_id' => 251,
                'option_text' => 'Syringe',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            2 => 
            array (
                'id' => 1003,
                'question_id' => 251,
                'option_text' => 'Hammer',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            3 => 
            array (
                'id' => 1004,
                'question_id' => 251,
                'option_text' => 'Screwdriver',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            4 => 
            array (
                'id' => 1005,
                'question_id' => 252,
                'option_text' => 'The color of the specimen container',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            5 => 
            array (
                'id' => 1006,
                'question_id' => 252,
                'option_text' => 'Maintaining the chain of custody',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            6 => 
            array (
                'id' => 1007,
                'question_id' => 252,
                'option_text' => 'The brand of the laboratory equipment',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            7 => 
            array (
                'id' => 1008,
                'question_id' => 252,
                'option_text' => 'The temperature of the room where the specimen is collected',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            8 => 
            array (
                'id' => 1009,
                'question_id' => 253,
                'option_text' => 'Immediately discarding the specimen',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            9 => 
            array (
                'id' => 1010,
                'question_id' => 253,
                'option_text' => 'Storing the specimen at room temperature',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            10 => 
            array (
                'id' => 1011,
                'question_id' => 253,
            'option_text' => 'Using personal protective equipment (PPE)',
                'is_correct' => 1,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            11 => 
            array (
                'id' => 1012,
                'question_id' => 253,
                'option_text' => 'Sharing the specimen with unauthorized personnel',
                'is_correct' => 0,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            12 => 
            array (
                'id' => 1013,
                'question_id' => 254,
                'option_text' => 'A native Android development framework',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            13 => 
            array (
                'id' => 1014,
                'question_id' => 254,
                'option_text' => 'A cross-platform framework for building mobile apps',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            14 => 
            array (
                'id' => 1015,
                'question_id' => 254,
                'option_text' => 'A programming language for developing web applications',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            15 => 
            array (
                'id' => 1016,
                'question_id' => 254,
                'option_text' => 'A cloud computing platform',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            16 => 
            array (
                'id' => 1017,
                'question_id' => 255,
                'option_text' => 'Java',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            17 => 
            array (
                'id' => 1018,
                'question_id' => 255,
                'option_text' => 'Kotlin',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            18 => 
            array (
                'id' => 1019,
                'question_id' => 255,
                'option_text' => 'Dart',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            19 => 
            array (
                'id' => 1020,
                'question_id' => 255,
                'option_text' => 'Python',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            20 => 
            array (
                'id' => 1021,
                'question_id' => 256,
                'option_text' => 'Fast development',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            21 => 
            array (
                'id' => 1022,
                'question_id' => 256,
                'option_text' => 'High performance',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            22 => 
            array (
                'id' => 1023,
                'question_id' => 256,
                'option_text' => 'Native-like UI',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            23 => 
            array (
                'id' => 1024,
                'question_id' => 256,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            24 => 
            array (
                'id' => 1025,
                'question_id' => 257,
                'option_text' => 'Android Studio',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            25 => 
            array (
                'id' => 1026,
                'question_id' => 257,
                'option_text' => 'Xcode',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            26 => 
            array (
                'id' => 1027,
                'question_id' => 257,
                'option_text' => 'Visual Studio',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            27 => 
            array (
                'id' => 1028,
                'question_id' => 257,
                'option_text' => 'A text editor',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            28 => 
            array (
                'id' => 1029,
                'question_id' => 258,
            'option_text' => 'Model-View-Controller (MVC)',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            29 => 
            array (
                'id' => 1030,
                'question_id' => 258,
                'option_text' => 'Reactive Programming',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            30 => 
            array (
                'id' => 1031,
                'question_id' => 258,
                'option_text' => 'State Management',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            31 => 
            array (
                'id' => 1032,
                'question_id' => 258,
                'option_text' => 'Dependency Injection',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            32 => 
            array (
                'id' => 1033,
                'question_id' => 259,
                'option_text' => 'To define project dependencies',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            33 => 
            array (
                'id' => 1034,
                'question_id' => 259,
                'option_text' => 'To configure project settings',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            34 => 
            array (
                'id' => 1035,
                'question_id' => 259,
                'option_text' => 'To define the application\'s main class',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            35 => 
            array (
                'id' => 1036,
                'question_id' => 259,
                'option_text' => 'To store user data',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            36 => 
            array (
                'id' => 1037,
                'question_id' => 260,
                'option_text' => 'Material App',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            37 => 
            array (
                'id' => 1038,
                'question_id' => 260,
                'option_text' => 'Scaffold',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            38 => 
            array (
                'id' => 1039,
                'question_id' => 260,
                'option_text' => 'Container',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            39 => 
            array (
                'id' => 1040,
                'question_id' => 260,
                'option_text' => 'Text',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            40 => 
            array (
                'id' => 1041,
                'question_id' => 261,
                'option_text' => 'A set of UI components',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            41 => 
            array (
                'id' => 1042,
                'question_id' => 261,
                'option_text' => 'A programming language',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            42 => 
            array (
                'id' => 1043,
                'question_id' => 261,
                'option_text' => 'A development tool',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            43 => 
            array (
                'id' => 1044,
                'question_id' => 261,
                'option_text' => 'A library for data manipulation',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            44 => 
            array (
                'id' => 1045,
                'question_id' => 262,
                'option_text' => 'Button',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            45 => 
            array (
                'id' => 1046,
                'question_id' => 262,
                'option_text' => 'RaisedButton',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            46 => 
            array (
                'id' => 1047,
                'question_id' => 262,
                'option_text' => 'FloatingActionButton',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            47 => 
            array (
                'id' => 1048,
                'question_id' => 262,
                'option_text' => 'IconButton',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            48 => 
            array (
                'id' => 1049,
                'question_id' => 263,
                'option_text' => 'A widget that manages navigation between screens',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            49 => 
            array (
                'id' => 1050,
                'question_id' => 263,
                'option_text' => 'A class for storing user preferences',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            50 => 
            array (
                'id' => 1051,
                'question_id' => 263,
                'option_text' => 'A library for accessing the device\'s hardware',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            51 => 
            array (
                'id' => 1052,
                'question_id' => 263,
                'option_text' => 'A tool for debugging Flutter applications',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            52 => 
            array (
                'id' => 1053,
                'question_id' => 264,
                'option_text' => 'List',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            53 => 
            array (
                'id' => 1054,
                'question_id' => 264,
                'option_text' => 'ListView',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            54 => 
            array (
                'id' => 1055,
                'question_id' => 264,
                'option_text' => 'GridView',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            55 => 
            array (
                'id' => 1056,
                'question_id' => 264,
                'option_text' => 'DataTable',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            56 => 
            array (
                'id' => 1057,
                'question_id' => 265,
                'option_text' => 'Asynchronous programming',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            57 => 
            array (
                'id' => 1058,
                'question_id' => 265,
                'option_text' => 'Data manipulation',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            58 => 
            array (
                'id' => 1059,
                'question_id' => 265,
                'option_text' => 'Network communication',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            59 => 
            array (
                'id' => 1060,
                'question_id' => 265,
                'option_text' => 'File I/O',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            60 => 
            array (
                'id' => 1061,
                'question_id' => 266,
                'option_text' => 'Widget',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            61 => 
            array (
                'id' => 1062,
                'question_id' => 266,
                'option_text' => 'StatefulWidget',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            62 => 
            array (
                'id' => 1063,
                'question_id' => 266,
                'option_text' => 'StatelessWidget',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            63 => 
            array (
                'id' => 1064,
                'question_id' => 266,
                'option_text' => 'RenderObjectWidget
**Answer: B or C**

**Question 14:**
What is the "BuildContext" in Flutter?
(A) A global variable that provides context to widgets
(B) A widget that manages state
(C) A library for accessing the device\'s location
(D) A tool for profiling Flutter applications',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            64 => 
            array (
                'id' => 1065,
                'question_id' => 267,
                'option_text' => 'TextField',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            65 => 
            array (
                'id' => 1066,
                'question_id' => 267,
                'option_text' => 'InputText',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            66 => 
            array (
                'id' => 1067,
                'question_id' => 267,
                'option_text' => 'EditText',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            67 => 
            array (
                'id' => 1068,
                'question_id' => 267,
                'option_text' => 'TextInputLayout',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            68 => 
            array (
                'id' => 1069,
                'question_id' => 268,
                'option_text' => 'A class for managing state',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            69 => 
            array (
                'id' => 1070,
                'question_id' => 268,
                'option_text' => 'A library for data manipulation',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            70 => 
            array (
                'id' => 1071,
                'question_id' => 268,
                'option_text' => 'A widget that provides access to shared data',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            71 => 
            array (
                'id' => 1072,
                'question_id' => 268,
                'option_text' => 'A tool for testing Flutter applications',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            72 => 
            array (
                'id' => 1073,
                'question_id' => 269,
                'option_text' => 'Drawer',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            73 => 
            array (
                'id' => 1074,
                'question_id' => 269,
                'option_text' => 'AppBar',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            74 => 
            array (
                'id' => 1075,
                'question_id' => 269,
                'option_text' => 'BottomNavigationBar',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            75 => 
            array (
                'id' => 1076,
                'question_id' => 269,
                'option_text' => 'Navigator',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            76 => 
            array (
                'id' => 1077,
                'question_id' => 270,
                'option_text' => 'A class that defines the application\'s theme',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            77 => 
            array (
                'id' => 1078,
                'question_id' => 270,
                'option_text' => 'A widget that manages state',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            78 => 
            array (
                'id' => 1079,
                'question_id' => 270,
                'option_text' => 'A library for accessing the device\'s camera',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            79 => 
            array (
                'id' => 1080,
                'question_id' => 270,
                'option_text' => 'A tool for debugging Flutter applications',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            80 => 
            array (
                'id' => 1081,
                'question_id' => 271,
                'option_text' => 'FloatingActionButton',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            81 => 
            array (
                'id' => 1082,
                'question_id' => 271,
                'option_text' => 'IconButton',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            82 => 
            array (
                'id' => 1083,
                'question_id' => 271,
                'option_text' => 'RaisedButton',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            83 => 
            array (
                'id' => 1084,
                'question_id' => 271,
                'option_text' => 'Button',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            84 => 
            array (
                'id' => 1085,
                'question_id' => 272,
                'option_text' => 'To update the state of a widget',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            85 => 
            array (
                'id' => 1086,
                'question_id' => 272,
                'option_text' => 'To create a new widget',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            86 => 
            array (
                'id' => 1087,
                'question_id' => 272,
                'option_text' => 'To access the device\'s sensors',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            87 => 
            array (
                'id' => 1088,
                'question_id' => 272,
                'option_text' => 'To debug Flutter applications',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            88 => 
            array (
                'id' => 1089,
                'question_id' => 273,
                'option_text' => 'CustomPaint',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            89 => 
            array (
                'id' => 1090,
                'question_id' => 273,
                'option_text' => 'Canvas',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            90 => 
            array (
                'id' => 1091,
                'question_id' => 273,
                'option_text' => 'Paint',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            91 => 
            array (
                'id' => 1092,
                'question_id' => 273,
                'option_text' => 'RenderObject',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            92 => 
            array (
                'id' => 1093,
                'question_id' => 274,
                'option_text' => 'A class that manages assets',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            93 => 
            array (
                'id' => 1094,
                'question_id' => 274,
                'option_text' => 'A widget that displays assets',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            94 => 
            array (
                'id' => 1095,
                'question_id' => 274,
                'option_text' => 'A library for accessing the device\'s location',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            95 => 
            array (
                'id' => 1096,
                'question_id' => 274,
                'option_text' => 'A tool for testing Flutter applications',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            96 => 
            array (
                'id' => 1097,
                'question_id' => 275,
                'option_text' => 'Snackbar',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            97 => 
            array (
                'id' => 1098,
                'question_id' => 275,
                'option_text' => 'Toast',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            98 => 
            array (
                'id' => 1099,
                'question_id' => 275,
                'option_text' => 'Notification',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            99 => 
            array (
                'id' => 1100,
                'question_id' => 275,
                'option_text' => 'Dialog',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            100 => 
            array (
                'id' => 1101,
                'question_id' => 276,
                'option_text' => 'A widget that listens for gestures',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            101 => 
            array (
                'id' => 1102,
                'question_id' => 276,
                'option_text' => 'A class that manages state',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            102 => 
            array (
                'id' => 1103,
                'question_id' => 276,
                'option_text' => 'A library for accessing the device\'s microphone',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            103 => 
            array (
                'id' => 1104,
                'question_id' => 276,
                'option_text' => 'A tool for profiling Flutter applications',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            104 => 
            array (
                'id' => 1105,
                'question_id' => 277,
                'option_text' => 'ListView.builder',
                'is_correct' => 1,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            105 => 
            array (
                'id' => 1106,
                'question_id' => 277,
                'option_text' => 'List.builder',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            106 => 
            array (
                'id' => 1107,
                'question_id' => 277,
                'option_text' => 'GridView.builder',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            107 => 
            array (
                'id' => 1108,
                'question_id' => 277,
                'option_text' => 'DataView.builder',
                'is_correct' => 0,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            108 => 
            array (
                'id' => 1109,
                'question_id' => 278,
                'option_text' => 'Java',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            109 => 
            array (
                'id' => 1110,
                'question_id' => 278,
                'option_text' => 'Swift',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            110 => 
            array (
                'id' => 1111,
                'question_id' => 278,
                'option_text' => 'Dart',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            111 => 
            array (
                'id' => 1112,
                'question_id' => 278,
                'option_text' => 'Kotlin',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            112 => 
            array (
                'id' => 1113,
                'question_id' => 279,
                'option_text' => 'Microsoft',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            113 => 
            array (
                'id' => 1114,
                'question_id' => 279,
                'option_text' => 'Apple',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            114 => 
            array (
                'id' => 1115,
                'question_id' => 279,
                'option_text' => 'Google',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            115 => 
            array (
                'id' => 1116,
                'question_id' => 279,
                'option_text' => 'Facebook',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            116 => 
            array (
                'id' => 1117,
                'question_id' => 280,
                'option_text' => 'It allows you to test your app on multiple devices simultaneously.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            117 => 
            array (
                'id' => 1118,
                'question_id' => 280,
                'option_text' => 'It enables you to see changes to your code almost instantly without restarting the app.',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            118 => 
            array (
                'id' => 1119,
                'question_id' => 280,
                'option_text' => 'It automatically fixes bugs in your code.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            119 => 
            array (
                'id' => 1120,
                'question_id' => 280,
                'option_text' => 'It optimizes your code for performance.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            120 => 
            array (
                'id' => 1121,
                'question_id' => 281,
                'option_text' => 'Uses native UI components for each platform.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            121 => 
            array (
                'id' => 1122,
                'question_id' => 281,
                'option_text' => 'Relies heavily on JavaScript for rendering.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            122 => 
            array (
                'id' => 1123,
                'question_id' => 281,
                'option_text' => 'Everything is a Widget.',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            123 => 
            array (
                'id' => 1124,
                'question_id' => 281,
                'option_text' => 'Code is written in XML format',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            124 => 
            array (
                'id' => 1125,
                'question_id' => 282,
                'option_text' => 'flutter create project',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            125 => 
            array (
                'id' => 1126,
                'question_id' => 282,
                'option_text' => 'flutter new-project',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            126 => 
            array (
                'id' => 1127,
                'question_id' => 282,
                'option_text' => 'flutter create',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            127 => 
            array (
                'id' => 1128,
                'question_id' => 282,
                'option_text' => 'flutter create app',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            128 => 
            array (
                'id' => 1129,
                'question_id' => 283,
                'option_text' => 'Flutter SDK',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            129 => 
            array (
                'id' => 1130,
                'question_id' => 283,
                'option_text' => 'Native compilers for target platform',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            130 => 
            array (
                'id' => 1131,
                'question_id' => 283,
                'option_text' => 'Operating system compiler',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            131 => 
            array (
                'id' => 1132,
                'question_id' => 283,
                'option_text' => 'Flutter CLI',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            132 => 
            array (
                'id' => 1133,
                'question_id' => 284,
                'option_text' => 'Stateless Widget',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            133 => 
            array (
                'id' => 1134,
                'question_id' => 284,
                'option_text' => 'Stateful Widget',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            134 => 
            array (
                'id' => 1135,
                'question_id' => 284,
                'option_text' => 'Container Widget',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            135 => 
            array (
                'id' => 1136,
                'question_id' => 284,
                'option_text' => 'Functional Widget',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            136 => 
            array (
                'id' => 1137,
                'question_id' => 285,
                'option_text' => 'It contains the main code of the application.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            137 => 
            array (
                'id' => 1138,
                'question_id' => 285,
                'option_text' => 'It defines the UI layout of the application.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            138 => 
            array (
                'id' => 1139,
                'question_id' => 285,
                'option_text' => 'It manages project dependencies, assets, and other configurations.',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            139 => 
            array (
                'id' => 1140,
                'question_id' => 285,
                'option_text' => 'It handles the routing and navigation of the application.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            140 => 
            array (
                'id' => 1141,
                'question_id' => 286,
                'option_text' => 'Margin',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            141 => 
            array (
                'id' => 1142,
                'question_id' => 286,
                'option_text' => 'Space',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            142 => 
            array (
                'id' => 1143,
                'question_id' => 286,
                'option_text' => 'Padding',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            143 => 
            array (
                'id' => 1144,
                'question_id' => 286,
                'option_text' => 'Container',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            144 => 
            array (
                'id' => 1145,
                'question_id' => 287,
                'option_text' => 'Manages the application\'s state.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            145 => 
            array (
                'id' => 1146,
                'question_id' => 287,
                'option_text' => 'Creates native UI components.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            146 => 
            array (
                'id' => 1147,
                'question_id' => 287,
                'option_text' => 'It is responsible for rasterizing widgets to the screen.',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            147 => 
            array (
                'id' => 1148,
                'question_id' => 287,
                'option_text' => 'Handles network requests.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            148 => 
            array (
                'id' => 1149,
                'question_id' => 288,
                'option_text' => 'flutter build',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            149 => 
            array (
                'id' => 1150,
                'question_id' => 288,
                'option_text' => 'flutter run',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            150 => 
            array (
                'id' => 1151,
                'question_id' => 288,
                'option_text' => 'flutter deploy',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            151 => 
            array (
                'id' => 1152,
                'question_id' => 288,
                'option_text' => 'flutter start',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            152 => 
            array (
                'id' => 1153,
                'question_id' => 289,
                'option_text' => 'Synchronous programming',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            153 => 
            array (
                'id' => 1154,
                'question_id' => 289,
                'option_text' => 'Using callbacks',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            154 => 
            array (
                'id' => 1155,
                'question_id' => 289,
                'option_text' => 'Using Future and async/await',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            155 => 
            array (
                'id' => 1156,
                'question_id' => 289,
                'option_text' => 'Using timers',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            156 => 
            array (
                'id' => 1157,
                'question_id' => 290,
                'option_text' => 'To update the UI with new data.',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            157 => 
            array (
                'id' => 1158,
                'question_id' => 290,
                'option_text' => 'To dispose of the widget and release its resources.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            158 => 
            array (
                'id' => 1159,
                'question_id' => 290,
                'option_text' => 'To initialize the state of the widget.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            159 => 
            array (
                'id' => 1160,
                'question_id' => 290,
                'option_text' => 'To define the layout of the widget.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            160 => 
            array (
                'id' => 1161,
                'question_id' => 291,
                'option_text' => 'Render images on the screen',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            161 => 
            array (
                'id' => 1162,
                'question_id' => 291,
                'option_text' => 'Detect user gestures like taps, swipes, and long presses',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            162 => 
            array (
                'id' => 1163,
                'question_id' => 291,
                'option_text' => 'Arrange widgets in a row or column',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            163 => 
            array (
                'id' => 1164,
                'question_id' => 291,
                'option_text' => 'Create animations',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            164 => 
            array (
                'id' => 1165,
                'question_id' => 292,
            'option_text' => 'mainApp()',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            165 => 
            array (
                'id' => 1166,
                'question_id' => 292,
            'option_text' => 'start()',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            166 => 
            array (
                'id' => 1167,
                'question_id' => 292,
            'option_text' => 'runApp()',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            167 => 
            array (
                'id' => 1168,
                'question_id' => 292,
            'option_text' => 'main()',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            168 => 
            array (
                'id' => 1169,
                'question_id' => 293,
                'option_text' => 'Text',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            169 => 
            array (
                'id' => 1170,
                'question_id' => 293,
                'option_text' => 'Image',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            170 => 
            array (
                'id' => 1171,
                'question_id' => 293,
                'option_text' => 'Row',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            171 => 
            array (
                'id' => 1172,
                'question_id' => 293,
                'option_text' => 'Button',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            172 => 
            array (
                'id' => 1173,
                'question_id' => 294,
                'option_text' => 'In the Program Files folder',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            173 => 
            array (
                'id' => 1174,
                'question_id' => 294,
                'option_text' => 'Anywhere, as long as you add it to your system\'s PATH environment variable.',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            174 => 
            array (
                'id' => 1175,
                'question_id' => 294,
                'option_text' => 'In the Android SDK directory.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            175 => 
            array (
                'id' => 1176,
                'question_id' => 294,
                'option_text' => 'Inside the project directory',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            176 => 
            array (
                'id' => 1177,
                'question_id' => 295,
                'option_text' => 'It is the basic building blocks of Flutter UI.',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            177 => 
            array (
                'id' => 1178,
                'question_id' => 295,
                'option_text' => 'It is an animation controller.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            178 => 
            array (
                'id' => 1179,
                'question_id' => 295,
                'option_text' => 'It is a specific type of platform.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            179 => 
            array (
                'id' => 1180,
                'question_id' => 295,
                'option_text' => 'It is used to change the color of application.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            180 => 
            array (
                'id' => 1181,
                'question_id' => 296,
                'option_text' => 'APK',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            181 => 
            array (
                'id' => 1182,
                'question_id' => 296,
                'option_text' => 'AAB',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            182 => 
            array (
                'id' => 1183,
                'question_id' => 296,
                'option_text' => 'IPA',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            183 => 
            array (
                'id' => 1184,
                'question_id' => 296,
                'option_text' => 'EXE',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            184 => 
            array (
                'id' => 1185,
                'question_id' => 297,
                'option_text' => 'Flutter',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            185 => 
            array (
                'id' => 1186,
                'question_id' => 297,
                'option_text' => 'Dart',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            186 => 
            array (
                'id' => 1187,
                'question_id' => 297,
                'option_text' => 'Both Dart and Flutter',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            187 => 
            array (
                'id' => 1188,
                'question_id' => 297,
                'option_text' => 'Java',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            188 => 
            array (
                'id' => 1189,
                'question_id' => 298,
                'option_text' => 'To initialize the widget\'s state.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            189 => 
            array (
                'id' => 1190,
                'question_id' => 298,
                'option_text' => 'To define the widget\'s properties.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            190 => 
            array (
                'id' => 1191,
                'question_id' => 298,
                'option_text' => 'To describe the part of the user interface represented by this widget.',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            191 => 
            array (
                'id' => 1192,
                'question_id' => 298,
                'option_text' => 'To handle user input events.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            192 => 
            array (
                'id' => 1193,
                'question_id' => 299,
                'option_text' => 'Column',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            193 => 
            array (
                'id' => 1194,
                'question_id' => 299,
                'option_text' => 'Row',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            194 => 
            array (
                'id' => 1195,
                'question_id' => 299,
                'option_text' => 'ListView',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            195 => 
            array (
                'id' => 1196,
                'question_id' => 299,
                'option_text' => 'Stack',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            196 => 
            array (
                'id' => 1197,
                'question_id' => 300,
                'option_text' => 'android/app/build.gradle',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            197 => 
            array (
                'id' => 1198,
                'question_id' => 300,
                'option_text' => 'android/setting.gradle',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            198 => 
            array (
                'id' => 1199,
                'question_id' => 300,
                'option_text' => 'android/app/src/main/AndroidManifest.xml',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            199 => 
            array (
                'id' => 1200,
                'question_id' => 300,
                'option_text' => 'All of the above',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            200 => 
            array (
                'id' => 1201,
                'question_id' => 301,
                'option_text' => 'Allow user to set a specific key in its device for security',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            201 => 
            array (
                'id' => 1202,
                'question_id' => 301,
                'option_text' => 'Are interfaces used for debugging.',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            202 => 
            array (
                'id' => 1203,
                'question_id' => 301,
                'option_text' => 'Help Flutter identify Widgets.',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            203 => 
            array (
                'id' => 1204,
                'question_id' => 301,
                'option_text' => 'Are the widgets unique name',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            204 => 
            array (
                'id' => 1205,
                'question_id' => 302,
                'option_text' => 'Framework',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            205 => 
            array (
                'id' => 1206,
                'question_id' => 302,
                'option_text' => 'Engine',
                'is_correct' => 1,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            206 => 
            array (
                'id' => 1207,
                'question_id' => 302,
                'option_text' => 'Widget Tree',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            207 => 
            array (
                'id' => 1208,
                'question_id' => 302,
                'option_text' => 'Render Tree',
                'is_correct' => 0,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            208 => 
            array (
                'id' => 1209,
                'question_id' => 303,
                'option_text' => 'Fault → Error → Failure',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            209 => 
            array (
                'id' => 1210,
                'question_id' => 303,
                'option_text' => 'Error → Fault → Failure',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            210 => 
            array (
                'id' => 1211,
                'question_id' => 303,
                'option_text' => 'Failure → Fault → Error',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            211 => 
            array (
                'id' => 1212,
                'question_id' => 303,
                'option_text' => 'Failure → Error → Fault',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            212 => 
            array (
                'id' => 1213,
                'question_id' => 304,
                'option_text' => 'A method to measure test coverage',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            213 => 
            array (
                'id' => 1214,
                'question_id' => 304,
                'option_text' => 'A mechanism to predict expected outcomes',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            214 => 
            array (
                'id' => 1215,
                'question_id' => 304,
                'option_text' => 'A tool to automate test execution',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            215 => 
            array (
                'id' => 1216,
                'question_id' => 304,
                'option_text' => 'A technique to identify test cases',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            216 => 
            array (
                'id' => 1217,
                'question_id' => 305,
                'option_text' => 'Equivalence partitioning',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            217 => 
            array (
                'id' => 1218,
                'question_id' => 305,
                'option_text' => 'Boundary value analysis',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            218 => 
            array (
                'id' => 1219,
                'question_id' => 305,
                'option_text' => 'Decision table',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            219 => 
            array (
                'id' => 1220,
                'question_id' => 305,
                'option_text' => 'Code review',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            220 => 
            array (
                'id' => 1221,
                'question_id' => 306,
                'option_text' => 'Statement coverage',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            221 => 
            array (
                'id' => 1222,
                'question_id' => 306,
                'option_text' => 'Boundary value analysis',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            222 => 
            array (
                'id' => 1223,
                'question_id' => 306,
                'option_text' => 'Decision table',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            223 => 
            array (
                'id' => 1224,
                'question_id' => 306,
                'option_text' => 'Equivalence partitioning',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            224 => 
            array (
                'id' => 1225,
                'question_id' => 307,
                'option_text' => 'Confirmation bias',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            225 => 
            array (
                'id' => 1226,
                'question_id' => 307,
                'option_text' => 'Pessimism',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            226 => 
            array (
                'id' => 1227,
                'question_id' => 307,
                'option_text' => 'Developer\'s ego',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            227 => 
            array (
                'id' => 1228,
                'question_id' => 307,
                'option_text' => 'Test environment',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            228 => 
            array (
                'id' => 1229,
                'question_id' => 308,
                'option_text' => 'Statement coverage',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            229 => 
            array (
                'id' => 1230,
                'question_id' => 308,
                'option_text' => 'Path testing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            230 => 
            array (
                'id' => 1231,
                'question_id' => 308,
                'option_text' => 'Equivalence partitioning',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            231 => 
            array (
                'id' => 1232,
                'question_id' => 308,
                'option_text' => 'Mutation testing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            232 => 
            array (
                'id' => 1233,
                'question_id' => 309,
                'option_text' => 'Boundary value analysis',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            233 => 
            array (
                'id' => 1234,
                'question_id' => 309,
                'option_text' => 'State transition testing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            234 => 
            array (
                'id' => 1235,
                'question_id' => 309,
                'option_text' => 'Basis path testing',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            235 => 
            array (
                'id' => 1236,
                'question_id' => 309,
                'option_text' => 'Cause-effect graphing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            236 => 
            array (
                'id' => 1237,
                'question_id' => 310,
                'option_text' => 'System testing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            237 => 
            array (
                'id' => 1238,
                'question_id' => 310,
                'option_text' => 'Acceptance testing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            238 => 
            array (
                'id' => 1239,
                'question_id' => 310,
                'option_text' => 'Integration testing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            239 => 
            array (
                'id' => 1240,
                'question_id' => 310,
                'option_text' => 'Unit testing',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            240 => 
            array (
                'id' => 1241,
                'question_id' => 311,
                'option_text' => 'Unit testing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            241 => 
            array (
                'id' => 1242,
                'question_id' => 311,
                'option_text' => 'Integration testing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            242 => 
            array (
                'id' => 1243,
                'question_id' => 311,
                'option_text' => 'Regression testing',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            243 => 
            array (
                'id' => 1244,
                'question_id' => 311,
                'option_text' => 'System testing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            244 => 
            array (
                'id' => 1245,
                'question_id' => 312,
                'option_text' => 'They always pass',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            245 => 
            array (
                'id' => 1246,
                'question_id' => 312,
                'option_text' => 'They are designed to find faults',
                'is_correct' => 1,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            246 => 
            array (
                'id' => 1247,
                'question_id' => 312,
                'option_text' => 'They cover all possible inputs',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            247 => 
            array (
                'id' => 1248,
                'question_id' => 312,
                'option_text' => 'They are designed to prove the software is correct',
                'is_correct' => 0,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            248 => 
            array (
                'id' => 1249,
                'question_id' => 313,
                'option_text' => 'Data redundancy',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            249 => 
            array (
                'id' => 1250,
                'question_id' => 313,
                'option_text' => 'Easy data access',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            250 => 
            array (
                'id' => 1251,
                'question_id' => 313,
                'option_text' => 'Increased storage capacity',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            251 => 
            array (
                'id' => 1252,
                'question_id' => 313,
                'option_text' => 'Quick data processing',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            252 => 
            array (
                'id' => 1253,
                'question_id' => 314,
                'option_text' => 'Creation, Storage, Use, Sharing, Deletion',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            253 => 
            array (
                'id' => 1254,
                'question_id' => 314,
                'option_text' => 'Use, Creation, Sharing, Storage, Deletion',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            254 => 
            array (
                'id' => 1255,
                'question_id' => 314,
                'option_text' => 'Sharing, Creation, Use, Storage, Deletion',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            255 => 
            array (
                'id' => 1256,
                'question_id' => 314,
                'option_text' => 'Creation, Use, Sharing, Storage, Deletion',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            256 => 
            array (
                'id' => 1257,
                'question_id' => 315,
                'option_text' => 'Disk controller',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            257 => 
            array (
                'id' => 1258,
                'question_id' => 315,
                'option_text' => 'Cache memory',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            258 => 
            array (
                'id' => 1259,
                'question_id' => 315,
                'option_text' => 'Storage interface',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            259 => 
            array (
                'id' => 1260,
                'question_id' => 315,
                'option_text' => 'File system',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            260 => 
            array (
                'id' => 1261,
                'question_id' => 316,
                'option_text' => 'RAID 0',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            261 => 
            array (
                'id' => 1262,
                'question_id' => 316,
                'option_text' => 'RAID 1',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            262 => 
            array (
                'id' => 1263,
                'question_id' => 316,
                'option_text' => 'RAID 5',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            263 => 
            array (
                'id' => 1264,
                'question_id' => 316,
                'option_text' => 'RAID 6',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            264 => 
            array (
                'id' => 1265,
                'question_id' => 317,
                'option_text' => 'Striped across multiple disks',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            265 => 
            array (
                'id' => 1266,
                'question_id' => 317,
                'option_text' => 'Mirrored across multiple disks',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            266 => 
            array (
                'id' => 1267,
                'question_id' => 317,
                'option_text' => 'Striped with parity',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            267 => 
            array (
                'id' => 1268,
                'question_id' => 317,
                'option_text' => 'Striped with double parity',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            268 => 
            array (
                'id' => 1269,
                'question_id' => 318,
                'option_text' => 'RAID 0',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            269 => 
            array (
                'id' => 1270,
                'question_id' => 318,
                'option_text' => 'RAID 1',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            270 => 
            array (
                'id' => 1271,
                'question_id' => 318,
                'option_text' => 'RAID 5',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            271 => 
            array (
                'id' => 1272,
                'question_id' => 318,
                'option_text' => 'RAID 6',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            272 => 
            array (
                'id' => 1273,
                'question_id' => 319,
                'option_text' => 'To increase storage capacity',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            273 => 
            array (
                'id' => 1274,
                'question_id' => 319,
                'option_text' => 'To manage data redundancy',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            274 => 
            array (
                'id' => 1275,
                'question_id' => 319,
                'option_text' => 'To optimize data storage and retrieval',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            275 => 
            array (
                'id' => 1276,
                'question_id' => 319,
                'option_text' => 'To provide data encryption',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            276 => 
            array (
                'id' => 1277,
                'question_id' => 320,
                'option_text' => 'Disk controller',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            277 => 
            array (
                'id' => 1278,
                'question_id' => 320,
                'option_text' => 'File system',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            278 => 
            array (
                'id' => 1279,
                'question_id' => 320,
                'option_text' => 'Cache memory',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            279 => 
            array (
                'id' => 1280,
                'question_id' => 320,
                'option_text' => 'Storage interface',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            280 => 
            array (
                'id' => 1281,
                'question_id' => 321,
                'option_text' => 'Read/write head',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            281 => 
            array (
                'id' => 1282,
                'question_id' => 321,
                'option_text' => 'Cache memory',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            282 => 
            array (
                'id' => 1283,
                'question_id' => 321,
                'option_text' => 'Storage interface',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            283 => 
            array (
                'id' => 1284,
                'question_id' => 321,
                'option_text' => 'File system',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            284 => 
            array (
                'id' => 1285,
                'question_id' => 322,
                'option_text' => 'RAID 0',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            285 => 
            array (
                'id' => 1286,
                'question_id' => 322,
                'option_text' => 'RAID 1',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            286 => 
            array (
                'id' => 1287,
                'question_id' => 322,
                'option_text' => 'RAID 5',
                'is_correct' => 0,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            287 => 
            array (
                'id' => 1288,
                'question_id' => 322,
                'option_text' => 'RAID 6',
                'is_correct' => 1,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            288 => 
            array (
                'id' => 1289,
                'question_id' => 323,
                'option_text' => 'To provide computational power for a local network',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            289 => 
            array (
                'id' => 1290,
                'question_id' => 323,
                'option_text' => 'To provide dedicated file-based storage for a network',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            290 => 
            array (
                'id' => 1291,
                'question_id' => 323,
                'option_text' => 'To act as a network router',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            291 => 
            array (
                'id' => 1292,
                'question_id' => 323,
                'option_text' => 'To provide network printing services',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            292 => 
            array (
                'id' => 1293,
                'question_id' => 324,
                'option_text' => 'Greater computational power',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            293 => 
            array (
                'id' => 1294,
                'question_id' => 324,
                'option_text' => 'Lower cost and simpler management',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            294 => 
            array (
                'id' => 1295,
                'question_id' => 324,
                'option_text' => 'Higher level of customization',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            295 => 
            array (
                'id' => 1296,
                'question_id' => 324,
                'option_text' => 'More versatile application support',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            296 => 
            array (
                'id' => 1297,
                'question_id' => 325,
                'option_text' => 'Block level',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            297 => 
            array (
                'id' => 1298,
                'question_id' => 325,
                'option_text' => 'Bit level',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            298 => 
            array (
                'id' => 1299,
                'question_id' => 325,
                'option_text' => 'Byte level',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            299 => 
            array (
                'id' => 1300,
                'question_id' => 325,
                'option_text' => 'File level',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            300 => 
            array (
                'id' => 1301,
                'question_id' => 326,
                'option_text' => 'CPU',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            301 => 
            array (
                'id' => 1302,
                'question_id' => 326,
            'option_text' => 'Memory (RAM)',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            302 => 
            array (
                'id' => 1303,
                'question_id' => 326,
            'option_text' => 'Network Interface Card (NIC)',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            303 => 
            array (
                'id' => 1304,
                'question_id' => 326,
            'option_text' => 'Graphics Processing Unit (GPU)',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            304 => 
            array (
                'id' => 1305,
                'question_id' => 327,
                'option_text' => 'SMTP',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            305 => 
            array (
                'id' => 1306,
                'question_id' => 327,
                'option_text' => 'FTP',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            306 => 
            array (
                'id' => 1307,
                'question_id' => 327,
                'option_text' => 'NFS',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            307 => 
            array (
                'id' => 1308,
                'question_id' => 327,
                'option_text' => 'HTTP',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            308 => 
            array (
                'id' => 1309,
                'question_id' => 328,
                'option_text' => 'Data is addressed by its physical location on the storage device.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            309 => 
            array (
                'id' => 1310,
                'question_id' => 328,
                'option_text' => 'Data is addressed by its content hash or identifier.',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            310 => 
            array (
                'id' => 1311,
                'question_id' => 328,
                'option_text' => 'Data is addressed by a user-defined file name.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            311 => 
            array (
                'id' => 1312,
                'question_id' => 328,
                'option_text' => 'Data is addressed by its creation date.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            312 => 
            array (
                'id' => 1313,
                'question_id' => 329,
                'option_text' => 'Frequently modified data',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            313 => 
            array (
                'id' => 1314,
                'question_id' => 329,
                'option_text' => 'Transactional data',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            314 => 
            array (
                'id' => 1315,
                'question_id' => 329,
                'option_text' => 'Fixed content and archives',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            315 => 
            array (
                'id' => 1316,
                'question_id' => 329,
                'option_text' => 'Real-time data streams',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            316 => 
            array (
                'id' => 1317,
                'question_id' => 330,
                'option_text' => 'Data deduplication',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            317 => 
            array (
                'id' => 1318,
                'question_id' => 330,
                'option_text' => 'Data integrity verification',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            318 => 
            array (
                'id' => 1319,
                'question_id' => 330,
                'option_text' => 'High performance for transactional workloads',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            319 => 
            array (
                'id' => 1320,
                'question_id' => 330,
                'option_text' => 'Support for complex database operations',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            320 => 
            array (
                'id' => 1321,
                'question_id' => 331,
                'option_text' => 'The client application',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            321 => 
            array (
                'id' => 1322,
                'question_id' => 331,
                'option_text' => 'The storage device controller',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            322 => 
            array (
                'id' => 1323,
                'question_id' => 331,
                'option_text' => 'The CAS system itself',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            323 => 
            array (
                'id' => 1324,
                'question_id' => 331,
                'option_text' => 'The network switch',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            324 => 
            array (
                'id' => 1325,
                'question_id' => 332,
                'option_text' => 'By providing its physical storage location',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            325 => 
            array (
                'id' => 1326,
                'question_id' => 332,
                'option_text' => 'By providing its content address',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            326 => 
            array (
                'id' => 1327,
                'question_id' => 332,
                'option_text' => 'By providing its file name',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            327 => 
            array (
                'id' => 1328,
                'question_id' => 332,
                'option_text' => 'By providing its creation date',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            328 => 
            array (
                'id' => 1329,
                'question_id' => 333,
                'option_text' => 'More complex to manage and configure',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            329 => 
            array (
                'id' => 1330,
                'question_id' => 333,
                'option_text' => 'Easier to manage and configure',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            330 => 
            array (
                'id' => 1331,
                'question_id' => 333,
                'option_text' => 'Equally complex to manage and configure',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            331 => 
            array (
                'id' => 1332,
                'question_id' => 333,
                'option_text' => 'Not manageable at all',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            332 => 
            array (
                'id' => 1333,
                'question_id' => 334,
                'option_text' => 'A full desktop OS like Windows or MacOS',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            333 => 
            array (
                'id' => 1334,
                'question_id' => 334,
                'option_text' => 'A stripped-down embedded OS optimized for file sharing',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            334 => 
            array (
                'id' => 1335,
                'question_id' => 334,
                'option_text' => 'A Mainframe OS',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            335 => 
            array (
                'id' => 1336,
                'question_id' => 334,
                'option_text' => 'A supercomputer OS',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            336 => 
            array (
                'id' => 1337,
                'question_id' => 335,
                'option_text' => 'SMB/CIFS',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            337 => 
            array (
                'id' => 1338,
                'question_id' => 335,
                'option_text' => 'AFP',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            338 => 
            array (
                'id' => 1339,
                'question_id' => 335,
                'option_text' => 'iSCSI',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            339 => 
            array (
                'id' => 1340,
                'question_id' => 335,
                'option_text' => 'NFS',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            340 => 
            array (
                'id' => 1341,
                'question_id' => 336,
                'option_text' => 'Processing complex calculations',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            341 => 
            array (
                'id' => 1342,
                'question_id' => 336,
                'option_text' => 'Rendering video',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            342 => 
            array (
                'id' => 1343,
                'question_id' => 336,
                'option_text' => 'Reading and writing files over the network',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            343 => 
            array (
                'id' => 1344,
                'question_id' => 336,
                'option_text' => 'Hosting virtual machines',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            344 => 
            array (
                'id' => 1345,
                'question_id' => 337,
                'option_text' => 'To increase the processing speed of active data.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            345 => 
            array (
                'id' => 1346,
                'question_id' => 337,
                'option_text' => 'To store infrequently accessed data for long-term preservation.',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            346 => 
            array (
                'id' => 1347,
                'question_id' => 337,
                'option_text' => 'To improve network bandwidth.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            347 => 
            array (
                'id' => 1348,
                'question_id' => 337,
                'option_text' => 'To delete unused data.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            348 => 
            array (
                'id' => 1349,
                'question_id' => 338,
                'option_text' => 'Fast access to frequently changing data.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            349 => 
            array (
                'id' => 1350,
                'question_id' => 338,
                'option_text' => 'Guaranteed data integrity and authenticity.',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            350 => 
            array (
                'id' => 1351,
                'question_id' => 338,
                'option_text' => 'Low initial cost.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            351 => 
            array (
                'id' => 1352,
                'question_id' => 338,
                'option_text' => 'Simple scalability for small amounts of data.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            352 => 
            array (
                'id' => 1353,
                'question_id' => 339,
                'option_text' => 'It is used to calculate the content address.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            353 => 
            array (
                'id' => 1354,
                'question_id' => 339,
                'option_text' => 'It is stored separately from the data and contains information about the data.',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            354 => 
            array (
                'id' => 1355,
                'question_id' => 339,
                'option_text' => 'It is not used in CAS systems.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            355 => 
            array (
                'id' => 1356,
                'question_id' => 339,
                'option_text' => 'It dictates the physical location of the data.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            356 => 
            array (
                'id' => 1357,
                'question_id' => 340,
                'option_text' => 'Content that changes frequently',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            357 => 
            array (
                'id' => 1358,
                'question_id' => 340,
            'option_text' => 'Content that is write-once, read-many (WORM)',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            358 => 
            array (
                'id' => 1359,
                'question_id' => 340,
                'option_text' => 'Content that is stored temporarily.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            359 => 
            array (
                'id' => 1360,
                'question_id' => 340,
                'option_text' => 'Content that is compressed.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            360 => 
            array (
                'id' => 1361,
                'question_id' => 341,
                'option_text' => 'Storage of physical objects like hard drives.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            361 => 
            array (
                'id' => 1362,
                'question_id' => 341,
                'option_text' => 'Storage where data is managed as discrete units called objects, each with its own metadata and unique identifier.',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            362 => 
            array (
                'id' => 1363,
                'question_id' => 341,
                'option_text' => 'A method of storing data sequentially on magnetic tape.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            363 => 
            array (
                'id' => 1364,
                'question_id' => 341,
                'option_text' => 'A type of RAM.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            364 => 
            array (
                'id' => 1365,
                'question_id' => 342,
                'option_text' => 'High performance for transactional databases.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            365 => 
            array (
                'id' => 1366,
                'question_id' => 342,
                'option_text' => 'Scalability and cost-effectiveness for large amounts of unstructured data.',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            366 => 
            array (
                'id' => 1367,
                'question_id' => 342,
                'option_text' => 'Low latency access to small files.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            367 => 
            array (
                'id' => 1368,
                'question_id' => 342,
                'option_text' => 'Complex data indexing capabilities.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            368 => 
            array (
                'id' => 1369,
                'question_id' => 343,
                'option_text' => 'CPU',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            369 => 
            array (
                'id' => 1370,
                'question_id' => 343,
            'option_text' => 'Network Interface Card (NIC)',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            370 => 
            array (
                'id' => 1371,
                'question_id' => 343,
            'option_text' => 'Hard Disk Drive (HDD)',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            371 => 
            array (
                'id' => 1372,
                'question_id' => 343,
            'option_text' => 'Power Supply Unit (PSU)',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            372 => 
            array (
                'id' => 1373,
                'question_id' => 344,
                'option_text' => 'Write Once, Read Many',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            373 => 
            array (
                'id' => 1374,
                'question_id' => 344,
                'option_text' => 'Write Over, Replace Memory',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            374 => 
            array (
                'id' => 1375,
                'question_id' => 344,
                'option_text' => 'Wide Open Read Mode',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            375 => 
            array (
                'id' => 1376,
                'question_id' => 344,
                'option_text' => 'Wireless Optical Reading Mechanism',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            376 => 
            array (
                'id' => 1377,
                'question_id' => 345,
                'option_text' => 'The physical address of a file on a storage device.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            377 => 
            array (
                'id' => 1378,
                'question_id' => 345,
                'option_text' => 'A fixed-size value calculated from the contents of a file.',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            378 => 
            array (
                'id' => 1379,
                'question_id' => 345,
                'option_text' => 'The name of a file.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            379 => 
            array (
                'id' => 1380,
                'question_id' => 345,
                'option_text' => 'The creation date of a file.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            380 => 
            array (
                'id' => 1381,
                'question_id' => 346,
                'option_text' => 'Centralized storage',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            381 => 
            array (
                'id' => 1382,
                'question_id' => 346,
                'option_text' => 'File sharing',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            382 => 
            array (
                'id' => 1383,
                'question_id' => 346,
                'option_text' => 'Data backup',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            383 => 
            array (
                'id' => 1384,
                'question_id' => 346,
                'option_text' => 'High-performance computing',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            384 => 
            array (
                'id' => 1385,
                'question_id' => 347,
                'option_text' => 'To provide high-speed data processing.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            385 => 
            array (
                'id' => 1386,
                'question_id' => 347,
                'option_text' => 'To ensure data integrity and long-term data retention.',
                'is_correct' => 1,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            386 => 
            array (
                'id' => 1387,
                'question_id' => 347,
                'option_text' => 'To optimize network bandwidth utilization.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            387 => 
            array (
                'id' => 1388,
                'question_id' => 347,
                'option_text' => 'To reduce the cost of storage hardware.',
                'is_correct' => 0,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            388 => 
            array (
                'id' => 1389,
                'question_id' => 348,
                'option_text' => 'To use only one marketing channel for consistency',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:11',
                'updated_at' => '2025-06-03 18:36:11',
            ),
            389 => 
            array (
                'id' => 1390,
                'question_id' => 348,
                'option_text' => 'To deliver a clear, consistent, and compelling message about the organization and its brands',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:11',
                'updated_at' => '2025-06-03 18:36:11',
            ),
            390 => 
            array (
                'id' => 1391,
                'question_id' => 348,
                'option_text' => 'To maximize the advertising budget without regard for other marketing functions',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:11',
                'updated_at' => '2025-06-03 18:36:11',
            ),
            391 => 
            array (
                'id' => 1392,
                'question_id' => 348,
                'option_text' => 'To isolate marketing functions into separate departments',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:11',
                'updated_at' => '2025-06-03 18:36:11',
            ),
            392 => 
            array (
                'id' => 1393,
                'question_id' => 349,
                'option_text' => 'Building brand awareness',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:11',
                'updated_at' => '2025-06-03 18:36:11',
            ),
            393 => 
            array (
                'id' => 1394,
                'question_id' => 349,
                'option_text' => 'Generating immediate sales',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            394 => 
            array (
                'id' => 1395,
                'question_id' => 349,
                'option_text' => 'Reducing production costs',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            395 => 
            array (
                'id' => 1396,
                'question_id' => 349,
                'option_text' => 'Creating a favorable brand image',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            396 => 
            array (
                'id' => 1397,
                'question_id' => 350,
                'option_text' => 'Advertising',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            397 => 
            array (
                'id' => 1398,
                'question_id' => 350,
                'option_text' => 'Public Relations',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            398 => 
            array (
                'id' => 1399,
                'question_id' => 350,
                'option_text' => 'Sales Promotion',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            399 => 
            array (
                'id' => 1400,
                'question_id' => 350,
                'option_text' => 'Personal Selling',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            400 => 
            array (
                'id' => 1401,
                'question_id' => 351,
                'option_text' => 'To directly persuade consumers to buy a product',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            401 => 
            array (
                'id' => 1402,
                'question_id' => 351,
                'option_text' => 'To manage and maintain a positive image and relationships with the public',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            402 => 
            array (
                'id' => 1403,
                'question_id' => 351,
                'option_text' => 'To solely focus on crisis management',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            403 => 
            array (
                'id' => 1404,
                'question_id' => 351,
                'option_text' => 'To create catchy jingles for advertising campaigns',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            404 => 
            array (
                'id' => 1405,
                'question_id' => 352,
                'option_text' => 'Allocating sales territories',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            405 => 
            array (
                'id' => 1406,
                'question_id' => 352,
                'option_text' => 'Predicting future sales revenue',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            406 => 
            array (
                'id' => 1407,
                'question_id' => 352,
                'option_text' => 'Setting sales quotas for individual salespeople',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            407 => 
            array (
                'id' => 1408,
                'question_id' => 352,
                'option_text' => 'Motivating the sales team through incentives',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            408 => 
            array (
                'id' => 1409,
                'question_id' => 353,
                'option_text' => 'Determining the advertising budget',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            409 => 
            array (
                'id' => 1410,
                'question_id' => 353,
                'option_text' => 'Selecting appropriate distribution channels',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            410 => 
            array (
                'id' => 1411,
                'question_id' => 353,
                'option_text' => 'Setting product pricing',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            411 => 
            array (
                'id' => 1412,
                'question_id' => 353,
                'option_text' => 'Developing new product features',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            412 => 
            array (
                'id' => 1413,
                'question_id' => 354,
                'option_text' => 'Wholesaling',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            413 => 
            array (
                'id' => 1414,
                'question_id' => 354,
                'option_text' => 'Manufacturing',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            414 => 
            array (
                'id' => 1415,
                'question_id' => 354,
                'option_text' => 'Retailing',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            415 => 
            array (
                'id' => 1416,
                'question_id' => 354,
                'option_text' => 'Warehousing',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            416 => 
            array (
                'id' => 1417,
                'question_id' => 355,
                'option_text' => 'Product development',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            417 => 
            array (
                'id' => 1418,
                'question_id' => 355,
                'option_text' => 'Supply chain management',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            418 => 
            array (
                'id' => 1419,
                'question_id' => 355,
                'option_text' => 'Inventory management',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            419 => 
            array (
                'id' => 1420,
                'question_id' => 355,
                'option_text' => 'Financial accounting',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            420 => 
            array (
                'id' => 1421,
                'question_id' => 356,
                'option_text' => 'Mass marketing',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            421 => 
            array (
                'id' => 1422,
                'question_id' => 356,
                'option_text' => 'Direct marketing',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            422 => 
            array (
                'id' => 1423,
                'question_id' => 356,
                'option_text' => 'Indirect marketing',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            423 => 
            array (
                'id' => 1424,
                'question_id' => 356,
                'option_text' => 'Viral marketing',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            424 => 
            array (
                'id' => 1425,
                'question_id' => 357,
                'option_text' => 'It always involves a retail store',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            425 => 
            array (
                'id' => 1426,
                'question_id' => 357,
                'option_text' => 'It relies heavily on intermediaries',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            426 => 
            array (
                'id' => 1427,
                'question_id' => 357,
                'option_text' => 'It seeks a direct and measurable response from customers',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            427 => 
            array (
                'id' => 1428,
                'question_id' => 357,
                'option_text' => 'It only uses traditional advertising channels',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            428 => 
            array (
                'id' => 1429,
                'question_id' => 358,
                'option_text' => 'To close the sale immediately',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            429 => 
            array (
                'id' => 1430,
                'question_id' => 358,
                'option_text' => 'To identify the customer\'s needs',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            430 => 
            array (
                'id' => 1431,
                'question_id' => 358,
                'option_text' => 'To make the initial connection and build rapport with the prospect',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            431 => 
            array (
                'id' => 1432,
                'question_id' => 358,
                'option_text' => 'To handle objections and concerns',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            432 => 
            array (
                'id' => 1433,
                'question_id' => 359,
                'option_text' => 'Coupons',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            433 => 
            array (
                'id' => 1434,
                'question_id' => 359,
                'option_text' => 'Public Service Announcements',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            434 => 
            array (
                'id' => 1435,
                'question_id' => 359,
                'option_text' => 'Contests',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            435 => 
            array (
                'id' => 1436,
                'question_id' => 359,
                'option_text' => 'Samples',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            436 => 
            array (
                'id' => 1437,
                'question_id' => 360,
                'option_text' => 'To limit the amount of product sold',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            437 => 
            array (
                'id' => 1438,
                'question_id' => 360,
                'option_text' => 'To provide a performance target for salespeople',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            438 => 
            array (
                'id' => 1439,
                'question_id' => 360,
                'option_text' => 'To increase production costs',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            439 => 
            array (
                'id' => 1440,
                'question_id' => 360,
                'option_text' => 'To decrease marketing spend',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            440 => 
            array (
                'id' => 1441,
                'question_id' => 361,
                'option_text' => 'Wholesaler',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            441 => 
            array (
                'id' => 1442,
                'question_id' => 361,
                'option_text' => 'Advertisement',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            442 => 
            array (
                'id' => 1443,
                'question_id' => 361,
                'option_text' => 'Sales Promotion',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            443 => 
            array (
                'id' => 1444,
                'question_id' => 361,
                'option_text' => 'Public Relations',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            444 => 
            array (
                'id' => 1445,
                'question_id' => 362,
                'option_text' => 'Selling',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            445 => 
            array (
                'id' => 1446,
                'question_id' => 362,
                'option_text' => 'Distribution',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            446 => 
            array (
                'id' => 1447,
                'question_id' => 362,
                'option_text' => 'Buying',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            447 => 
            array (
                'id' => 1448,
                'question_id' => 362,
                'option_text' => 'Inventory',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            448 => 
            array (
                'id' => 1449,
                'question_id' => 363,
                'option_text' => 'Increasing product prices',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            449 => 
            array (
                'id' => 1450,
                'question_id' => 363,
                'option_text' => 'Improving customer satisfaction',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            450 => 
            array (
                'id' => 1451,
                'question_id' => 363,
                'option_text' => 'Reducing the number of employees',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            451 => 
            array (
                'id' => 1452,
                'question_id' => 363,
                'option_text' => 'Decreasing store hours',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            452 => 
            array (
                'id' => 1453,
                'question_id' => 364,
                'option_text' => 'Higher reach than advertising',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            453 => 
            array (
                'id' => 1454,
                'question_id' => 364,
                'option_text' => 'Ability to personalize communication',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            454 => 
            array (
                'id' => 1455,
                'question_id' => 364,
                'option_text' => 'Lower marketing spend than advertising',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            455 => 
            array (
                'id' => 1456,
                'question_id' => 364,
                'option_text' => 'Increased Brand awareness',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            456 => 
            array (
                'id' => 1457,
                'question_id' => 365,
                'option_text' => 'Television advertising',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            457 => 
            array (
                'id' => 1458,
                'question_id' => 365,
                'option_text' => 'Social Media posting',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            458 => 
            array (
                'id' => 1459,
                'question_id' => 365,
                'option_text' => 'Email marketing',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            459 => 
            array (
                'id' => 1460,
                'question_id' => 365,
                'option_text' => 'Billboards',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            460 => 
            array (
                'id' => 1461,
                'question_id' => 366,
                'option_text' => 'End the conversation',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            461 => 
            array (
                'id' => 1462,
                'question_id' => 366,
                'option_text' => 'Present the product\'s features and benefits',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            462 => 
            array (
                'id' => 1463,
                'question_id' => 366,
                'option_text' => 'Offer a discount',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            463 => 
            array (
                'id' => 1464,
                'question_id' => 366,
                'option_text' => 'Ask for a referral',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            464 => 
            array (
                'id' => 1465,
                'question_id' => 367,
                'option_text' => 'The methods of promoting its products',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            465 => 
            array (
                'id' => 1466,
                'question_id' => 367,
                'option_text' => 'The company\'s choice of advertising agencies',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            466 => 
            array (
                'id' => 1467,
                'question_id' => 367,
                'option_text' => 'The way it makes its products available to customers',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            467 => 
            array (
                'id' => 1468,
                'question_id' => 367,
                'option_text' => 'Its pricing and discounts',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            468 => 
            array (
                'id' => 1469,
                'question_id' => 368,
                'option_text' => 'Sales promotions',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            469 => 
            array (
                'id' => 1470,
                'question_id' => 368,
                'option_text' => 'Public relations',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            470 => 
            array (
                'id' => 1471,
                'question_id' => 368,
                'option_text' => 'Advertising',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            471 => 
            array (
                'id' => 1472,
                'question_id' => 368,
                'option_text' => 'Direct selling',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            472 => 
            array (
                'id' => 1473,
                'question_id' => 369,
                'option_text' => 'Sales Management',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            473 => 
            array (
                'id' => 1474,
                'question_id' => 369,
                'option_text' => 'Advertising',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            474 => 
            array (
                'id' => 1475,
                'question_id' => 369,
                'option_text' => 'Distribution',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            475 => 
            array (
                'id' => 1476,
                'question_id' => 369,
                'option_text' => 'Public Relations',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            476 => 
            array (
                'id' => 1477,
                'question_id' => 370,
                'option_text' => 'Promoting directly to customers',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            477 => 
            array (
                'id' => 1478,
                'question_id' => 370,
                'option_text' => 'Promoting to retailers and wholesalers',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            478 => 
            array (
                'id' => 1479,
                'question_id' => 370,
                'option_text' => 'Promoting to internal employees',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            479 => 
            array (
                'id' => 1480,
                'question_id' => 370,
                'option_text' => 'Promoting to stakeholders',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            480 => 
            array (
                'id' => 1481,
                'question_id' => 371,
                'option_text' => 'Promoting directly to customers',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            481 => 
            array (
                'id' => 1482,
                'question_id' => 371,
                'option_text' => 'Promoting to retailers and wholesalers',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            482 => 
            array (
                'id' => 1483,
                'question_id' => 371,
                'option_text' => 'Promoting to internal employees',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            483 => 
            array (
                'id' => 1484,
                'question_id' => 371,
                'option_text' => 'Promoting to stakeholders',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            484 => 
            array (
                'id' => 1485,
                'question_id' => 372,
                'option_text' => 'To increase sales',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            485 => 
            array (
                'id' => 1486,
                'question_id' => 372,
                'option_text' => 'To manage the company\'s image',
                'is_correct' => 1,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            486 => 
            array (
                'id' => 1487,
                'question_id' => 372,
                'option_text' => 'To manage the company\'s brand',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            487 => 
            array (
                'id' => 1488,
                'question_id' => 372,
                'option_text' => 'To create advertisements',
                'is_correct' => 0,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            488 => 
            array (
                'id' => 1489,
                'question_id' => 373,
                'option_text' => 'To prevent all disruptions to business operations',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            489 => 
            array (
                'id' => 1490,
                'question_id' => 373,
                'option_text' => 'To minimize the impact of disruptions and ensure business operations can continue or resume quickly',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            490 => 
            array (
                'id' => 1491,
                'question_id' => 373,
                'option_text' => 'To maximize profits during a disruption',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            491 => 
            array (
                'id' => 1492,
                'question_id' => 373,
                'option_text' => 'To eliminate the need for IT support',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            492 => 
            array (
                'id' => 1493,
                'question_id' => 374,
                'option_text' => 'Planning and Design',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            493 => 
            array (
                'id' => 1494,
                'question_id' => 374,
                'option_text' => 'Implementation',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            494 => 
            array (
                'id' => 1495,
                'question_id' => 374,
                'option_text' => 'Testing and Maintenance',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            495 => 
            array (
                'id' => 1496,
                'question_id' => 374,
                'option_text' => 'Market Analysis',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            496 => 
            array (
                'id' => 1497,
                'question_id' => 375,
            'option_text' => 'RTO (Recovery Time Objective)',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            497 => 
            array (
                'id' => 1498,
                'question_id' => 375,
            'option_text' => 'RPO (Recovery Point Objective)',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:42',
                'updated_at' => '2025-06-03 20:15:42',
            ),
            498 => 
            array (
                'id' => 1499,
                'question_id' => 375,
            'option_text' => 'MTBF (Mean Time Between Failures)',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            499 => 
            array (
                'id' => 1500,
                'question_id' => 375,
            'option_text' => 'MTTR (Mean Time To Repair)',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
        ));
        \DB::table('options')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'question_id' => 376,
                'option_text' => 'Identifying potential threats to the organization',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            1 => 
            array (
                'id' => 1502,
                'question_id' => 376,
                'option_text' => 'Determining the financial and operational impact of disruptions',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            2 => 
            array (
                'id' => 1503,
                'question_id' => 376,
                'option_text' => 'Selecting the appropriate backup technology',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            3 => 
            array (
                'id' => 1504,
                'question_id' => 376,
                'option_text' => 'Implementing security measures',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            4 => 
            array (
                'id' => 1505,
                'question_id' => 377,
                'option_text' => 'Redundancy',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            5 => 
            array (
                'id' => 1506,
                'question_id' => 377,
                'option_text' => 'Cost optimization',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            6 => 
            array (
                'id' => 1507,
                'question_id' => 377,
                'option_text' => 'System complexity',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            7 => 
            array (
                'id' => 1508,
                'question_id' => 377,
                'option_text' => 'Limited accessibility',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            8 => 
            array (
                'id' => 1509,
                'question_id' => 378,
                'option_text' => 'Qualitative Analysis',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            9 => 
            array (
                'id' => 1510,
                'question_id' => 378,
                'option_text' => 'Quantitative Analysis',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            10 => 
            array (
                'id' => 1511,
                'question_id' => 378,
                'option_text' => 'Root Cause Analysis',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            11 => 
            array (
                'id' => 1512,
                'question_id' => 378,
                'option_text' => 'Impact Analysis',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            12 => 
            array (
                'id' => 1513,
                'question_id' => 379,
                'option_text' => 'To improve system performance',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            13 => 
            array (
                'id' => 1514,
                'question_id' => 379,
                'option_text' => 'To provide a copy of data for recovery in case of data loss or corruption',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            14 => 
            array (
                'id' => 1515,
                'question_id' => 379,
                'option_text' => 'To encrypt sensitive information',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            15 => 
            array (
                'id' => 1516,
                'question_id' => 379,
                'option_text' => 'To prevent unauthorized access to the network',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            16 => 
            array (
                'id' => 1517,
                'question_id' => 380,
                'option_text' => 'Cost of storage',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            17 => 
            array (
                'id' => 1518,
                'question_id' => 380,
                'option_text' => 'Backup window',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            18 => 
            array (
                'id' => 1519,
                'question_id' => 380,
                'option_text' => 'Security of the backup media',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            19 => 
            array (
                'id' => 1520,
                'question_id' => 380,
                'option_text' => 'Ease of restoration',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            20 => 
            array (
                'id' => 1521,
                'question_id' => 381,
                'option_text' => 'The type of storage media used for backups',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            21 => 
            array (
                'id' => 1522,
                'question_id' => 381,
            'option_text' => 'The level of detail at which data can be restored (e.g., file-level, image-level)',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            22 => 
            array (
                'id' => 1523,
                'question_id' => 381,
                'option_text' => 'The speed of the backup process',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            23 => 
            array (
                'id' => 1524,
                'question_id' => 381,
                'option_text' => 'The cost of the backup solution',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            24 => 
            array (
                'id' => 1525,
                'question_id' => 382,
                'option_text' => 'Minimizing the backup window',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            25 => 
            array (
                'id' => 1526,
                'question_id' => 382,
                'option_text' => 'Restoring data to a usable state as quickly and efficiently as possible',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            26 => 
            array (
                'id' => 1527,
                'question_id' => 382,
                'option_text' => 'Preventing data loss from occurring in the first place',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            27 => 
            array (
                'id' => 1528,
                'question_id' => 382,
                'option_text' => 'Reducing the cost of data storage',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            28 => 
            array (
                'id' => 1529,
                'question_id' => 383,
                'option_text' => 'Backing up to a local hard drive',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            29 => 
            array (
                'id' => 1530,
                'question_id' => 383,
                'option_text' => 'Backing up to a USB drive stored in the same building',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            30 => 
            array (
                'id' => 1531,
                'question_id' => 383,
                'option_text' => 'Backing up to a cloud storage service',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            31 => 
            array (
                'id' => 1532,
                'question_id' => 383,
                'option_text' => 'Backing up to a tape drive in the server room',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            32 => 
            array (
                'id' => 1533,
                'question_id' => 384,
                'option_text' => 'Incremental Backup',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            33 => 
            array (
                'id' => 1534,
                'question_id' => 384,
                'option_text' => 'Differential Backup',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            34 => 
            array (
                'id' => 1535,
                'question_id' => 384,
                'option_text' => 'Full Backup',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            35 => 
            array (
                'id' => 1536,
                'question_id' => 384,
                'option_text' => 'Synthetic Full Backup',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            36 => 
            array (
                'id' => 1537,
                'question_id' => 385,
                'option_text' => 'Faster restore times',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            37 => 
            array (
                'id' => 1538,
                'question_id' => 385,
                'option_text' => 'Simpler restoration process',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            38 => 
            array (
                'id' => 1539,
                'question_id' => 385,
                'option_text' => 'Smaller backup size and faster backup times',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            39 => 
            array (
                'id' => 1540,
                'question_id' => 385,
                'option_text' => 'Higher data integrity',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            40 => 
            array (
                'id' => 1541,
                'question_id' => 386,
                'option_text' => 'Peer-to-peer',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            41 => 
            array (
                'id' => 1542,
                'question_id' => 386,
                'option_text' => 'Client-server',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            42 => 
            array (
                'id' => 1543,
                'question_id' => 386,
                'option_text' => 'Mesh',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            43 => 
            array (
                'id' => 1544,
                'question_id' => 386,
                'option_text' => 'Ring',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            44 => 
            array (
                'id' => 1545,
                'question_id' => 387,
                'option_text' => 'Replication',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            45 => 
            array (
                'id' => 1546,
                'question_id' => 387,
                'option_text' => 'Snapshots',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            46 => 
            array (
                'id' => 1547,
                'question_id' => 387,
                'option_text' => 'Mirroring',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            47 => 
            array (
                'id' => 1548,
                'question_id' => 387,
                'option_text' => 'Virtualization',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            48 => 
            array (
                'id' => 1549,
                'question_id' => 388,
                'option_text' => 'To create backups for long-term storage',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            49 => 
            array (
                'id' => 1550,
                'question_id' => 388,
                'option_text' => 'To provide real-time or near real-time data mirroring for failover purposes',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            50 => 
            array (
                'id' => 1551,
                'question_id' => 388,
                'option_text' => 'To improve system performance',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            51 => 
            array (
                'id' => 1552,
                'question_id' => 388,
                'option_text' => 'To reduce storage costs',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            52 => 
            array (
                'id' => 1553,
                'question_id' => 389,
                'option_text' => 'Backs up only the data that has changed since the last full backup.',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            53 => 
            array (
                'id' => 1554,
                'question_id' => 389,
                'option_text' => 'Backs up all data regardless of changes.',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            54 => 
            array (
                'id' => 1555,
                'question_id' => 389,
                'option_text' => 'Backs up only the data that has changed since the last incremental backup.',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            55 => 
            array (
                'id' => 1556,
                'question_id' => 389,
                'option_text' => 'Does not require a full backup.',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            56 => 
            array (
                'id' => 1557,
                'question_id' => 390,
                'option_text' => 'Deleting the backup files',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            57 => 
            array (
                'id' => 1558,
                'question_id' => 390,
                'option_text' => 'Verifying the data integrity and functionality',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            58 => 
            array (
                'id' => 1559,
                'question_id' => 390,
                'option_text' => 'Changing the backup schedule',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            59 => 
            array (
                'id' => 1560,
                'question_id' => 390,
                'option_text' => 'Ignoring any error messages',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            60 => 
            array (
                'id' => 1561,
                'question_id' => 391,
                'option_text' => 'Lower initial costs compared to on-premise solutions',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            61 => 
            array (
                'id' => 1562,
                'question_id' => 391,
                'option_text' => 'More control over the physical security of the data',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            62 => 
            array (
                'id' => 1563,
                'question_id' => 391,
                'option_text' => 'Faster restore times in all scenarios',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            63 => 
            array (
                'id' => 1564,
                'question_id' => 391,
                'option_text' => 'No dependence on network connectivity',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            64 => 
            array (
                'id' => 1565,
                'question_id' => 392,
                'option_text' => 'A storage location for backup tapes',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            65 => 
            array (
                'id' => 1566,
                'question_id' => 392,
                'option_text' => 'A fully equipped alternate facility ready to take over operations immediately',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            66 => 
            array (
                'id' => 1567,
                'question_id' => 392,
                'option_text' => 'A data center with limited equipment that requires significant setup time',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            67 => 
            array (
                'id' => 1568,
                'question_id' => 392,
                'option_text' => 'A designated area for employees to gather during an emergency',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            68 => 
            array (
                'id' => 1569,
                'question_id' => 393,
                'option_text' => 'To identify security vulnerabilities',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            69 => 
            array (
                'id' => 1570,
                'question_id' => 393,
                'option_text' => 'To ensure that backups are restorable and meet RTO/RPO requirements',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            70 => 
            array (
                'id' => 1571,
                'question_id' => 393,
                'option_text' => 'To optimize the backup window',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            71 => 
            array (
                'id' => 1572,
                'question_id' => 393,
                'option_text' => 'To reduce storage costs',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            72 => 
            array (
                'id' => 1573,
                'question_id' => 394,
                'option_text' => 'Cost',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            73 => 
            array (
                'id' => 1574,
                'question_id' => 394,
                'option_text' => 'Performance',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            74 => 
            array (
                'id' => 1575,
                'question_id' => 394,
                'option_text' => 'Scalability',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            75 => 
            array (
                'id' => 1576,
                'question_id' => 394,
                'option_text' => 'The color of the storage devices',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            76 => 
            array (
                'id' => 1577,
                'question_id' => 395,
                'option_text' => 'To improve system performance',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            77 => 
            array (
                'id' => 1578,
                'question_id' => 395,
                'option_text' => 'To store data that is no longer actively used but needs to be retained for compliance or historical purposes',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            78 => 
            array (
                'id' => 1579,
                'question_id' => 395,
                'option_text' => 'To provide real-time data replication',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            79 => 
            array (
                'id' => 1580,
                'question_id' => 395,
                'option_text' => 'To reduce the risk of data loss',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            80 => 
            array (
                'id' => 1581,
                'question_id' => 396,
                'option_text' => 'Prevention',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            81 => 
            array (
                'id' => 1582,
                'question_id' => 396,
                'option_text' => 'Avoidance',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            82 => 
            array (
                'id' => 1583,
                'question_id' => 396,
                'option_text' => 'Mitigation',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            83 => 
            array (
                'id' => 1584,
                'question_id' => 396,
                'option_text' => 'Relocation',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:43',
                'updated_at' => '2025-06-03 20:15:43',
            ),
            84 => 
            array (
                'id' => 1585,
                'question_id' => 397,
                'option_text' => 'Mean Time To Restore',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:44',
                'updated_at' => '2025-06-03 20:15:44',
            ),
            85 => 
            array (
                'id' => 1586,
                'question_id' => 397,
                'option_text' => 'Maximum Time To Recovery',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:44',
                'updated_at' => '2025-06-03 20:15:44',
            ),
            86 => 
            array (
                'id' => 1587,
                'question_id' => 397,
                'option_text' => 'Mean Time To Repair',
                'is_correct' => 1,
                'created_at' => '2025-06-03 20:15:44',
                'updated_at' => '2025-06-03 20:15:44',
            ),
            87 => 
            array (
                'id' => 1588,
                'question_id' => 397,
                'option_text' => 'Minimum Time To Respond',
                'is_correct' => 0,
                'created_at' => '2025-06-03 20:15:44',
                'updated_at' => '2025-06-03 20:15:44',
            ),
        ));
        
        
    }
}