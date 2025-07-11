<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question_set_id' => 1,
                'question_text' => 'Which design principle emphasizes creating modules that are loosely coupled and highly cohesive?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            1 => 
            array (
                'id' => 2,
                'question_set_id' => 1,
                'question_text' => 'Top-down design involves:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            2 => 
            array (
                'id' => 3,
                'question_set_id' => 1,
                'question_text' => 'Which type of coupling occurs when changes in one module require changes in many other modules?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            3 => 
            array (
                'id' => 4,
                'question_set_id' => 1,
                'question_text' => 'Cohesion refers to the degree to which:',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            4 => 
            array (
                'id' => 5,
                'question_set_id' => 1,
                'question_text' => 'A structure chart is used to:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            5 => 
            array (
                'id' => 6,
                'question_set_id' => 1,
            'question_text' => 'A data flow diagram (DFD) shows:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            6 => 
            array (
                'id' => 7,
                'question_set_id' => 1,
                'question_text' => 'Which design principle states that a module should only depend on stable abstractions, not concrete implementations?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            7 => 
            array (
                'id' => 8,
                'question_set_id' => 1,
                'question_text' => 'What is the purpose of functional decomposition?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            8 => 
            array (
                'id' => 9,
                'question_set_id' => 1,
                'question_text' => 'Which type of cohesion occurs when modules share common data?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            9 => 
            array (
                'id' => 10,
                'question_set_id' => 1,
                'question_text' => 'What is the main goal of software design?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            10 => 
            array (
                'id' => 11,
                'question_set_id' => 1,
                'question_text' => 'Which design pattern is used to allow multiple classes to access the same interface?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            11 => 
            array (
                'id' => 12,
                'question_set_id' => 1,
                'question_text' => 'What is the role of a specification in software design?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            12 => 
            array (
                'id' => 13,
                'question_set_id' => 1,
                'question_text' => 'Which design principle emphasizes designing for change by isolating volatile parts of a system?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            13 => 
            array (
                'id' => 14,
                'question_set_id' => 1,
                'question_text' => 'What is the difference between cohesion and coupling?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            14 => 
            array (
                'id' => 15,
                'question_set_id' => 1,
                'question_text' => 'Which type of coupling occurs when a module accesses the private data of another module?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            15 => 
            array (
                'id' => 16,
                'question_set_id' => 1,
                'question_text' => 'What is the purpose of a data dictionary?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            16 => 
            array (
                'id' => 17,
                'question_set_id' => 1,
                'question_text' => 'Which design principle states that a module should not know about the details of the modules it uses?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            17 => 
            array (
                'id' => 18,
                'question_set_id' => 1,
                'question_text' => 'What is the difference between a structured design and an object-oriented design?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            18 => 
            array (
                'id' => 19,
                'question_set_id' => 1,
                'question_text' => 'Which design pattern is used to create objects without specifying the exact class of the object to be created?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            19 => 
            array (
                'id' => 20,
                'question_set_id' => 1,
                'question_text' => 'What is the role of a software architect in the design process?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            20 => 
            array (
                'id' => 21,
                'question_set_id' => 1,
                'question_text' => 'Which design principle emphasizes the importance of using well-defined and consistent interfaces?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            21 => 
            array (
                'id' => 22,
                'question_set_id' => 1,
                'question_text' => 'What is the purpose of a design review?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            22 => 
            array (
                'id' => 23,
                'question_set_id' => 1,
                'question_text' => 'Which design pattern is used to provide a single point of access to a global resource?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            23 => 
            array (
                'id' => 24,
                'question_set_id' => 1,
                'question_text' => 'What is the difference between a static design and a dynamic design?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            24 => 
            array (
                'id' => 25,
                'question_set_id' => 1,
                'question_text' => 'Which design principle emphasizes the importance of designing for testability?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            25 => 
            array (
                'id' => 26,
                'question_set_id' => 1,
                'question_text' => 'What is the purpose of a design guideline?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            26 => 
            array (
                'id' => 27,
                'question_set_id' => 1,
                'question_text' => 'Which design pattern is used to decouple the implementation of a class from its interface?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            27 => 
            array (
                'id' => 28,
                'question_set_id' => 1,
                'question_text' => 'What is the difference between a top-down and a bottom-up design approach?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            28 => 
            array (
                'id' => 29,
                'question_set_id' => 1,
                'question_text' => 'Which design principle emphasizes the importance of designing for extensibility?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            29 => 
            array (
                'id' => 30,
                'question_set_id' => 1,
                'question_text' => 'What is the role of a software designer in the software development process?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:16:46',
                'updated_at' => '2025-01-26 18:16:46',
            ),
            30 => 
            array (
                'id' => 31,
                'question_set_id' => 2,
                'question_text' => 'Which command is used to create a new Flutter project?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            31 => 
            array (
                'id' => 32,
                'question_set_id' => 2,
                'question_text' => 'What is the root widget in a Flutter app?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            32 => 
            array (
                'id' => 33,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to display text?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            33 => 
            array (
                'id' => 34,
                'question_set_id' => 2,
                'question_text' => 'What is the purpose of the InputDecoration widget?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            34 => 
            array (
                'id' => 35,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to create a floating action button?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            35 => 
            array (
                'id' => 36,
                'question_set_id' => 2,
                'question_text' => 'What is the difference between a raised button and a flat button?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            36 => 
            array (
                'id' => 37,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to display a snackbar?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            37 => 
            array (
                'id' => 38,
                'question_set_id' => 2,
                'question_text' => 'What is the purpose of the Expanded widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            38 => 
            array (
                'id' => 39,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to switch between two possible states?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            39 => 
            array (
                'id' => 40,
                'question_set_id' => 2,
                'question_text' => 'What is the difference between a switch and a toggle button?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            40 => 
            array (
                'id' => 41,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to create an elevated button?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            41 => 
            array (
                'id' => 42,
                'question_set_id' => 2,
                'question_text' => 'What is the purpose of the Theme widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            42 => 
            array (
                'id' => 43,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to create a list of items?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            43 => 
            array (
                'id' => 44,
                'question_set_id' => 2,
                'question_text' => 'What is the difference between a ListView and a GridView?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            44 => 
            array (
                'id' => 45,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to create a page view?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            45 => 
            array (
                'id' => 46,
                'question_set_id' => 2,
                'question_text' => 'What is the purpose of the Navigator widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            46 => 
            array (
                'id' => 47,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to create a custom animation?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            47 => 
            array (
                'id' => 48,
                'question_set_id' => 2,
                'question_text' => 'What is the difference between a value animator and a tween animator?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            48 => 
            array (
                'id' => 49,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to detect gestures?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            49 => 
            array (
                'id' => 50,
                'question_set_id' => 2,
                'question_text' => 'What is the difference between a tap gesture and a long press gesture?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            50 => 
            array (
                'id' => 51,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to create a custom layout?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            51 => 
            array (
                'id' => 52,
                'question_set_id' => 2,
                'question_text' => 'What is the difference between a Row and a Column?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            52 => 
            array (
                'id' => 53,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to create a stack of widgets?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            53 => 
            array (
                'id' => 54,
                'question_set_id' => 2,
                'question_text' => 'What is the purpose of the ShaderMask widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            54 => 
            array (
                'id' => 55,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to create a custom paint?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            55 => 
            array (
                'id' => 56,
                'question_set_id' => 2,
                'question_text' => 'What is the difference between a gradient and a radial gradient?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            56 => 
            array (
                'id' => 57,
                'question_set_id' => 2,
                'question_text' => 'Which widget is used to create a custom transform?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            57 => 
            array (
                'id' => 58,
                'question_set_id' => 2,
                'question_text' => 'What is the purpose of the Semantics widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:20:08',
                'updated_at' => '2025-01-26 18:20:08',
            ),
            58 => 
            array (
                'id' => 59,
                'question_set_id' => 3,
                'question_text' => 'Which operating system is required to run Android Studio?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            59 => 
            array (
                'id' => 60,
                'question_set_id' => 3,
                'question_text' => 'What is the terminal command to install Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            60 => 
            array (
                'id' => 61,
                'question_set_id' => 3,
                'question_text' => 'Which plugin is used to integrate Flutter into Android Studio?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            61 => 
            array (
                'id' => 62,
                'question_set_id' => 3,
                'question_text' => 'What is the purpose of the "pubspec.yaml" file in a Flutter project?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            62 => 
            array (
                'id' => 63,
                'question_set_id' => 3,
                'question_text' => 'Which framework is used for building the user interface in Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            63 => 
            array (
                'id' => 64,
                'question_set_id' => 3,
                'question_text' => 'What is the difference between a "StatelessWidget" and a "StatefulWidget"?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            64 => 
            array (
                'id' => 65,
                'question_set_id' => 3,
                'question_text' => 'Which widget is used to add padding to a child widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            65 => 
            array (
                'id' => 66,
                'question_set_id' => 3,
                'question_text' => 'What is the purpose of the "Build" method in a Flutter widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            66 => 
            array (
                'id' => 67,
                'question_set_id' => 3,
                'question_text' => 'Which widget is used to organize child widgets horizontally?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            67 => 
            array (
                'id' => 68,
                'question_set_id' => 3,
                'question_text' => 'What is the "setState" method used for?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            68 => 
            array (
                'id' => 69,
                'question_set_id' => 3,
                'question_text' => 'Which package is used for networking in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            69 => 
            array (
                'id' => 70,
                'question_set_id' => 3,
                'question_text' => 'What is the "FutureBuilder" widget used for?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            70 => 
            array (
                'id' => 71,
                'question_set_id' => 3,
                'question_text' => 'Which type system does Flutter use?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            71 => 
            array (
                'id' => 72,
                'question_set_id' => 3,
                'question_text' => 'What is the purpose of the "dartanalyzer" tool?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            72 => 
            array (
                'id' => 73,
                'question_set_id' => 3,
                'question_text' => 'Which tool is used for packaging and deploying Flutter apps?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            73 => 
            array (
                'id' => 74,
                'question_set_id' => 3,
                'question_text' => 'What is the difference between a "debug" and a "release" build in Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            74 => 
            array (
                'id' => 75,
                'question_set_id' => 3,
                'question_text' => 'Which package is used for managing state in Flutter?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            75 => 
            array (
                'id' => 76,
                'question_set_id' => 3,
                'question_text' => 'What is the purpose of the "ChangeNotifier" class?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            76 => 
            array (
                'id' => 77,
                'question_set_id' => 3,
                'question_text' => 'Which widget is used to create custom animations in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            77 => 
            array (
                'id' => 78,
                'question_set_id' => 3,
                'question_text' => 'What is the "Tween" class used for in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            78 => 
            array (
                'id' => 79,
                'question_set_id' => 3,
                'question_text' => 'Which widget is used to create interactive lists in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            79 => 
            array (
                'id' => 80,
                'question_set_id' => 3,
                'question_text' => 'What is the purpose of the "GestureDetector" widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            80 => 
            array (
                'id' => 81,
                'question_set_id' => 3,
                'question_text' => 'Which package is used for internationalization in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            81 => 
            array (
                'id' => 82,
                'question_set_id' => 3,
                'question_text' => 'What is the purpose of the "MaterialApp" widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            82 => 
            array (
                'id' => 83,
                'question_set_id' => 3,
                'question_text' => 'Which package is used for testing in Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            83 => 
            array (
                'id' => 84,
                'question_set_id' => 3,
                'question_text' => 'What is the difference between a "unit test" and an "integration test"?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            84 => 
            array (
                'id' => 85,
                'question_set_id' => 3,
                'question_text' => 'Which widget is used to create custom layouts in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            85 => 
            array (
                'id' => 86,
                'question_set_id' => 3,
                'question_text' => 'What is the "InheritedWidget" class used for?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            86 => 
            array (
                'id' => 87,
                'question_set_id' => 3,
                'question_text' => 'Which package is used for routing and navigation in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:12',
                'updated_at' => '2025-01-26 18:23:12',
            ),
            87 => 
            array (
                'id' => 88,
                'question_set_id' => 3,
                'question_text' => 'What is the purpose of the "CupertinoTheme" widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:23:13',
                'updated_at' => '2025-01-26 18:23:13',
            ),
            88 => 
            array (
                'id' => 89,
                'question_set_id' => 4,
                'question_text' => 'Which of the following is a key challenge in managing information?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            89 => 
            array (
                'id' => 90,
                'question_set_id' => 4,
                'question_text' => 'What is the term for the physical location where data is stored?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            90 => 
            array (
                'id' => 91,
                'question_set_id' => 4,
                'question_text' => 'Which type of storage technology uses solid-state media to store data?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            91 => 
            array (
                'id' => 92,
                'question_set_id' => 4,
                'question_text' => 'What is the name of the interface between the host and the storage system?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            92 => 
            array (
                'id' => 93,
                'question_set_id' => 4,
                'question_text' => 'Which component of a host computer is responsible for controlling data transfer between the host and the storage system?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            93 => 
            array (
                'id' => 94,
                'question_set_id' => 4,
                'question_text' => 'What is the purpose of a raid array?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            94 => 
            array (
                'id' => 95,
                'question_set_id' => 4,
                'question_text' => 'Which RAID level provides the highest level of data protection?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            95 => 
            array (
                'id' => 96,
                'question_set_id' => 4,
                'question_text' => 'What is the term for the process of managing the flow of data throughout its lifecycle?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            96 => 
            array (
                'id' => 97,
                'question_set_id' => 4,
                'question_text' => 'Which of the following is a benefit of cloud storage?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            97 => 
            array (
                'id' => 98,
                'question_set_id' => 4,
                'question_text' => 'What is the purpose of a storage system cache?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            98 => 
            array (
                'id' => 99,
                'question_set_id' => 4,
                'question_text' => 'Which type of storage is typically used for long-term data storage?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            99 => 
            array (
                'id' => 100,
                'question_set_id' => 4,
                'question_text' => 'What is the name of the software that manages the storage system?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            100 => 
            array (
                'id' => 101,
                'question_set_id' => 4,
                'question_text' => 'Which of the following is a metric for measuring disk drive performance?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            101 => 
            array (
                'id' => 102,
                'question_set_id' => 4,
                'question_text' => 'What is the purpose of a prefetch operation?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            102 => 
            array (
                'id' => 103,
                'question_set_id' => 4,
                'question_text' => 'Which storage system architecture provides the best scalability?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            103 => 
            array (
                'id' => 104,
                'question_set_id' => 4,
                'question_text' => 'What is the term for the process of copying data from a primary storage location to a secondary location?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            104 => 
            array (
                'id' => 105,
                'question_set_id' => 4,
                'question_text' => 'Which of the following is a type of data backup?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:13',
                'updated_at' => '2025-01-26 18:26:13',
            ),
            105 => 
            array (
                'id' => 106,
                'question_set_id' => 4,
                'question_text' => 'What is the purpose of data deduplication?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            106 => 
            array (
                'id' => 107,
                'question_set_id' => 4,
                'question_text' => 'Which of the following is a benefit of using a storage virtualization layer?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            107 => 
            array (
                'id' => 108,
                'question_set_id' => 4,
                'question_text' => 'What is the name of the protocol used to connect storage devices to a host computer?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            108 => 
            array (
                'id' => 109,
                'question_set_id' => 4,
                'question_text' => 'Which type of disk drive is typically used in high-performance computing environments?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            109 => 
            array (
                'id' => 110,
                'question_set_id' => 4,
                'question_text' => 'What is the term for the process of dividing data into multiple blocks?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            110 => 
            array (
                'id' => 111,
                'question_set_id' => 4,
            'question_text' => 'Which of the following is a benefit of using solid-state drives (SSDs)?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            111 => 
            array (
                'id' => 112,
                'question_set_id' => 4,
                'question_text' => 'What is the purpose of a storage controller?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            112 => 
            array (
                'id' => 113,
                'question_set_id' => 4,
                'question_text' => 'Which of the following is a type of storage array?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            113 => 
            array (
                'id' => 114,
                'question_set_id' => 4,
                'question_text' => 'What is the name of the technology used to protect data from unauthorized access?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            114 => 
            array (
                'id' => 115,
                'question_set_id' => 4,
                'question_text' => 'Which of the following is a best practice for data security?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            115 => 
            array (
                'id' => 116,
                'question_set_id' => 4,
                'question_text' => 'What is the purpose of a data warehouse?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            116 => 
            array (
                'id' => 117,
                'question_set_id' => 4,
                'question_text' => 'Which of the following is a type of data analytics?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            117 => 
            array (
                'id' => 118,
                'question_set_id' => 4,
                'question_text' => 'What is the purpose of data mining?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:26:14',
                'updated_at' => '2025-01-26 18:26:14',
            ),
            118 => 
            array (
                'id' => 119,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to display a single line of read-only text?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            119 => 
            array (
                'id' => 120,
                'question_set_id' => 5,
                'question_text' => 'What widget allows the user to input text?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            120 => 
            array (
                'id' => 121,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to create a raised button with a shadow?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            121 => 
            array (
                'id' => 122,
                'question_set_id' => 5,
                'question_text' => 'What widget is used to create a flat button with no shadow?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            122 => 
            array (
                'id' => 123,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to display a simple message to the user?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            123 => 
            array (
                'id' => 124,
                'question_set_id' => 5,
                'question_text' => 'What widget is used to create a switch that can be toggled between two states?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            124 => 
            array (
                'id' => 125,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to create a toggle button that can be pressed to select and unselect an option?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            125 => 
            array (
                'id' => 126,
                'question_set_id' => 5,
                'question_text' => 'What widget is used to create a button with a circular shape?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            126 => 
            array (
                'id' => 127,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to represent a hierarchy of widgets?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            127 => 
            array (
                'id' => 128,
                'question_set_id' => 5,
                'question_text' => 'What type of widget is a Text widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            128 => 
            array (
                'id' => 129,
                'question_set_id' => 5,
                'question_text' => 'Which property is used to set the text of a Text widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            129 => 
            array (
                'id' => 130,
                'question_set_id' => 5,
                'question_text' => 'What property is used to set the color of a Text widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            130 => 
            array (
                'id' => 131,
                'question_set_id' => 5,
                'question_text' => 'Which property is used to set the size of a Text widget?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            131 => 
            array (
                'id' => 132,
                'question_set_id' => 5,
                'question_text' => 'What property is used to set the alignment of a Text widget?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            132 => 
            array (
                'id' => 133,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to wrap a widget in a container with a fixed height and width?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            133 => 
            array (
                'id' => 134,
                'question_set_id' => 5,
                'question_text' => 'What property is used to set the height of a Container widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            134 => 
            array (
                'id' => 135,
                'question_set_id' => 5,
                'question_text' => 'Which property is used to set the width of a Container widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            135 => 
            array (
                'id' => 136,
                'question_set_id' => 5,
                'question_text' => 'What property is used to set the background color of a Container widget?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            136 => 
            array (
                'id' => 137,
                'question_set_id' => 5,
                'question_text' => 'Which property is used to set the padding around the content of a Container widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            137 => 
            array (
                'id' => 138,
                'question_set_id' => 5,
                'question_text' => 'What property is used to set the margin around the content of a Container widget?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            138 => 
            array (
                'id' => 139,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to create a layout that scrolls vertically?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            139 => 
            array (
                'id' => 140,
                'question_set_id' => 5,
                'question_text' => 'What property is used to specify the data source for a ListView widget?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            140 => 
            array (
                'id' => 141,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to create a layout that scrolls horizontally?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            141 => 
            array (
                'id' => 142,
                'question_set_id' => 5,
                'question_text' => 'What property is used to specify the number of columns in a GridView widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            142 => 
            array (
                'id' => 143,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to create a layout that aligns its children vertically?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            143 => 
            array (
                'id' => 144,
                'question_set_id' => 5,
                'question_text' => 'What property is used to specify the main axis alignment for a Column widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            144 => 
            array (
                'id' => 145,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to create a layout that aligns its children horizontally?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            145 => 
            array (
                'id' => 146,
                'question_set_id' => 5,
                'question_text' => 'What property is used to specify the main axis alignment for a Row widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            146 => 
            array (
                'id' => 147,
                'question_set_id' => 5,
                'question_text' => 'Which widget is used to create a scaffold that provides a basic structure for a Flutter app?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            147 => 
            array (
                'id' => 148,
                'question_set_id' => 5,
                'question_text' => 'What property is used to specify the title of a Scaffold widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:29:06',
                'updated_at' => '2025-01-26 18:29:06',
            ),
            148 => 
            array (
                'id' => 149,
                'question_set_id' => 6,
                'question_text' => 'Which of the following is a type of magnetic storage device?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            149 => 
            array (
                'id' => 150,
                'question_set_id' => 6,
                'question_text' => 'RAID stands for:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            150 => 
            array (
                'id' => 151,
                'question_set_id' => 6,
                'question_text' => 'The process of moving infrequently accessed data from primary storage to secondary storage is called:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            151 => 
            array (
                'id' => 152,
                'question_set_id' => 6,
                'question_text' => 'Which of the following is a key challenge in managing information?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            152 => 
            array (
                'id' => 153,
                'question_set_id' => 6,
                'question_text' => 'The evolution of storage technology includes the following phases:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            153 => 
            array (
                'id' => 154,
                'question_set_id' => 6,
                'question_text' => 'A disk drive consists of the following logical components:',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            154 => 
            array (
                'id' => 155,
                'question_set_id' => 6,
                'question_text' => 'Which of the following is a parameter used to evaluate disk drive performance?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            155 => 
            array (
                'id' => 156,
                'question_set_id' => 6,
                'question_text' => 'The host system\'s logical components include:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            156 => 
            array (
                'id' => 157,
                'question_set_id' => 6,
                'question_text' => 'Which of the following is a component of the storage system environment?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            157 => 
            array (
                'id' => 158,
                'question_set_id' => 6,
                'question_text' => 'The information lifecycle includes the following stages:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-26 18:39:30',
                'updated_at' => '2025-01-26 18:39:30',
            ),
            158 => 
            array (
                'id' => 159,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 5 and 7?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            159 => 
            array (
                'id' => 160,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 10 and 15?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            160 => 
            array (
                'id' => 161,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 20 and 25?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            161 => 
            array (
                'id' => 162,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 30 and 35?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            162 => 
            array (
                'id' => 163,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 40 and 45?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            163 => 
            array (
                'id' => 164,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 5 and 3?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            164 => 
            array (
                'id' => 165,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 10 and 4?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            165 => 
            array (
                'id' => 166,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 15 and 5?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            166 => 
            array (
                'id' => 167,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 20 and 6?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            167 => 
            array (
                'id' => 168,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 25 and 7?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            168 => 
            array (
                'id' => 169,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 10 and 20?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            169 => 
            array (
                'id' => 170,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 5 and 10?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            170 => 
            array (
                'id' => 171,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 15 and 25?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            171 => 
            array (
                'id' => 172,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 10 and 15?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            172 => 
            array (
                'id' => 173,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 20 and 30?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            173 => 
            array (
                'id' => 174,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 5 and 20?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            174 => 
            array (
                'id' => 175,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 25 and 35?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            175 => 
            array (
                'id' => 176,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 10 and 25?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            176 => 
            array (
                'id' => 177,
                'question_set_id' => 7,
                'question_text' => 'What is the sum of 30 and 40?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            177 => 
            array (
                'id' => 178,
                'question_set_id' => 7,
                'question_text' => 'What is the product of 5 and 30?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:16:27',
                'updated_at' => '2025-01-27 17:16:27',
            ),
            178 => 
            array (
                'id' => 179,
                'question_set_id' => 8,
                'question_text' => 'What is the sum of 5 and 7?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            179 => 
            array (
                'id' => 180,
                'question_set_id' => 8,
                'question_text' => 'What is the result of 12 plus 11?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            180 => 
            array (
                'id' => 181,
                'question_set_id' => 8,
                'question_text' => 'What is the total of 15 and 10?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            181 => 
            array (
                'id' => 182,
                'question_set_id' => 8,
                'question_text' => 'What is the sum of 20 and 15?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            182 => 
            array (
                'id' => 183,
                'question_set_id' => 8,
                'question_text' => 'What is the total of 25 and 12?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            183 => 
            array (
                'id' => 184,
                'question_set_id' => 8,
                'question_text' => 'What is the sum of 30 and 18?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            184 => 
            array (
                'id' => 185,
                'question_set_id' => 8,
                'question_text' => 'What is the total of 35 and 21?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            185 => 
            array (
                'id' => 186,
                'question_set_id' => 8,
                'question_text' => 'What is the sum of 40 and 24?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            186 => 
            array (
                'id' => 187,
                'question_set_id' => 8,
                'question_text' => 'What is the total of 45 and 27?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            187 => 
            array (
                'id' => 188,
                'question_set_id' => 8,
                'question_text' => 'What is the sum of 50 and 30?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:19:38',
                'updated_at' => '2025-01-27 17:19:38',
            ),
            188 => 
            array (
                'id' => 189,
                'question_set_id' => 9,
                'question_text' => 'What is the sum of 4 and 6?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            189 => 
            array (
                'id' => 190,
                'question_set_id' => 9,
                'question_text' => 'What is the sum of 7 and 2?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            190 => 
            array (
                'id' => 191,
                'question_set_id' => 9,
                'question_text' => 'What is the sum of 5 and 9?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            191 => 
            array (
                'id' => 192,
                'question_set_id' => 9,
                'question_text' => 'What is the sum of 3 and 8?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            192 => 
            array (
                'id' => 193,
                'question_set_id' => 9,
                'question_text' => 'What is the sum of 6 and 7?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:24:41',
                'updated_at' => '2025-01-27 17:24:41',
            ),
            193 => 
            array (
                'id' => 194,
                'question_set_id' => 10,
                'question_text' => 'Find the sum of 4 and 6:',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            194 => 
            array (
                'id' => 195,
                'question_set_id' => 10,
                'question_text' => 'What is the sum of 2 and 8?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            195 => 
            array (
                'id' => 196,
                'question_set_id' => 10,
                'question_text' => 'Find the sum of 5 and 5:',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            196 => 
            array (
                'id' => 197,
                'question_set_id' => 10,
                'question_text' => 'What is the sum of 3 and 7?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            197 => 
            array (
                'id' => 198,
                'question_set_id' => 10,
                'question_text' => 'Find the sum of 1 and 9:',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:32:51',
                'updated_at' => '2025-01-27 17:32:51',
            ),
            198 => 
            array (
                'id' => 199,
                'question_set_id' => 11,
                'question_text' => 'What is the sum of 10 and 15?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            199 => 
            array (
                'id' => 200,
                'question_set_id' => 11,
                'question_text' => 'What is the value of x in the equation 2x + 5 = 11?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            200 => 
            array (
                'id' => 201,
                'question_set_id' => 11,
                'question_text' => 'Which of the following is not a type of cloud?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            201 => 
            array (
                'id' => 202,
                'question_set_id' => 11,
                'question_text' => 'What is the capital of France?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            202 => 
            array (
                'id' => 203,
                'question_set_id' => 11,
                'question_text' => 'Which of the following is a renewable energy source?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:42:55',
                'updated_at' => '2025-01-27 17:42:55',
            ),
            203 => 
            array (
                'id' => 204,
                'question_set_id' => 12,
                'question_text' => 'Which of the following is NOT a desired characteristic of a software process?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            204 => 
            array (
                'id' => 205,
                'question_set_id' => 12,
                'question_text' => 'In the prototyping model:',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            205 => 
            array (
                'id' => 206,
                'question_set_id' => 12,
                'question_text' => 'Which design principle states that modules should be independent and loosely coupled?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:46:04',
                'updated_at' => '2025-01-27 17:46:04',
            ),
            206 => 
            array (
                'id' => 207,
                'question_set_id' => 12,
                'question_text' => 'The top-down design strategy involves:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            207 => 
            array (
                'id' => 208,
                'question_set_id' => 12,
                'question_text' => 'A data flow diagram is used to represent:',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-27 17:46:05',
                'updated_at' => '2025-01-27 17:46:05',
            ),
            208 => 
            array (
                'id' => 214,
                'question_set_id' => 14,
                'question_text' => 'Which of the following is the core concept of marketing management?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            209 => 
            array (
                'id' => 215,
                'question_set_id' => 14,
                'question_text' => 'The marketing process involves which of the following steps?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            210 => 
            array (
                'id' => 216,
                'question_set_id' => 14,
                'question_text' => 'Which type of marketing orientation focuses on creating products that meet the specific needs of individual customers?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            211 => 
            array (
                'id' => 217,
                'question_set_id' => 14,
                'question_text' => 'The marketing mix refers to the combination of which elements?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            212 => 
            array (
                'id' => 218,
                'question_set_id' => 14,
                'question_text' => 'Which of the following is a key component of customer value maximization strategies?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 10:08:56',
                'updated_at' => '2025-01-28 10:08:56',
            ),
            213 => 
            array (
                'id' => 219,
                'question_set_id' => 15,
                'question_text' => 'Which of the following is NOT a step in installing Flutter?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            214 => 
            array (
                'id' => 220,
                'question_set_id' => 15,
                'question_text' => 'What is the primary programming language used with Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            215 => 
            array (
                'id' => 221,
                'question_set_id' => 15,
                'question_text' => 'Which plugin needs to be installed in Android Studio to enable Flutter development?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            216 => 
            array (
                'id' => 222,
                'question_set_id' => 15,
                'question_text' => 'What is the core of Flutter\'s declarative UI structure?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            217 => 
            array (
                'id' => 223,
                'question_set_id' => 15,
                'question_text' => 'Which of the following is a key component of Flutter\'s architecture?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:16:29',
                'updated_at' => '2025-01-28 14:16:29',
            ),
            218 => 
            array (
                'id' => 224,
                'question_set_id' => 16,
                'question_text' => 'If you have three numbers: 5, 7, and 3, what is their sum?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            219 => 
            array (
                'id' => 225,
                'question_set_id' => 16,
                'question_text' => 'What is the product of the numbers 4 and 6?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            220 => 
            array (
                'id' => 226,
                'question_set_id' => 16,
                'question_text' => 'If the sum of three numbers is 21 and two of the numbers are 8 and 5, what is the third number?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            221 => 
            array (
                'id' => 227,
                'question_set_id' => 16,
                'question_text' => 'What is the product of the numbers 9 and 3?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            222 => 
            array (
                'id' => 228,
                'question_set_id' => 16,
                'question_text' => 'If the sum of three numbers is 18 and two of the numbers are 7 and 4, what is the third number?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 14:20:20',
                'updated_at' => '2025-01-28 14:20:20',
            ),
            223 => 
            array (
                'id' => 229,
                'question_set_id' => 17,
                'question_text' => 'Which of the following is NOT a part of the marketing mix?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            224 => 
            array (
                'id' => 230,
                'question_set_id' => 17,
                'question_text' => 'What is the final step in the marketing process?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            225 => 
            array (
                'id' => 231,
                'question_set_id' => 17,
                'question_text' => 'Which orientation focuses on making superior products?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            226 => 
            array (
                'id' => 232,
                'question_set_id' => 17,
                'question_text' => 'Which of the following is a macro environmental factor?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            227 => 
            array (
                'id' => 233,
                'question_set_id' => 17,
                'question_text' => 'What is the process of dividing a market into distinct groups of buyers called?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            228 => 
            array (
                'id' => 234,
                'question_set_id' => 17,
                'question_text' => 'Which of the following is NOT a stage in the customer life cycle?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            229 => 
            array (
                'id' => 235,
                'question_set_id' => 17,
                'question_text' => 'Which strategy focuses on keeping customers by offering them more value?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            230 => 
            array (
                'id' => 236,
                'question_set_id' => 17,
                'question_text' => 'Which of the following is NOT a part of the framework for competitive analysis?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            231 => 
            array (
                'id' => 237,
                'question_set_id' => 17,
                'question_text' => 'What is the study of people, and organizations buy and dispose of goods, services, experiences called?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            232 => 
            array (
                'id' => 238,
                'question_set_id' => 17,
                'question_text' => 'Which of the following is NOT a type of organizational buying behaviour?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-28 16:23:23',
                'updated_at' => '2025-01-28 16:23:23',
            ),
            233 => 
            array (
                'id' => 239,
                'question_set_id' => 18,
                'question_text' => 'Which of the following is NOT a key benefit of Flutter?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            234 => 
            array (
                'id' => 240,
                'question_set_id' => 18,
                'question_text' => 'Which component serves as the foundation for building Flutter widgets?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            235 => 
            array (
                'id' => 241,
                'question_set_id' => 18,
                'question_text' => 'What is the recommended file extension for Dart files in Flutter projects?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            236 => 
            array (
                'id' => 242,
                'question_set_id' => 18,
                'question_text' => 'Which command is used to install the Flutter SDK?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            237 => 
            array (
                'id' => 243,
                'question_set_id' => 18,
                'question_text' => 'What is the role of the "pubspec.yaml" file in Flutter projects?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 18:56:42',
                'updated_at' => '2025-01-29 18:56:42',
            ),
            238 => 
            array (
                'id' => 244,
                'question_set_id' => 19,
                'question_text' => 'What is the primary purpose of specimen collection from patients in a clinical setting?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            239 => 
            array (
                'id' => 245,
                'question_set_id' => 19,
                'question_text' => 'Which of the following is a common method of specimen collection in hospitals?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            240 => 
            array (
                'id' => 246,
                'question_set_id' => 19,
                'question_text' => 'What is the role of specimen collection in epidemiological investigations?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            241 => 
            array (
                'id' => 247,
                'question_set_id' => 19,
                'question_text' => 'Which professional is typically trained to handle epidemics and specimen collection?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            242 => 
            array (
                'id' => 248,
                'question_set_id' => 19,
                'question_text' => 'What is a crucial aspect of training for medical microbiologists handling epidemics?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            243 => 
            array (
                'id' => 249,
                'question_set_id' => 19,
                'question_text' => 'Which type of specimen is commonly collected from clinics for diagnostic purposes?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            244 => 
            array (
                'id' => 250,
                'question_set_id' => 19,
                'question_text' => 'What is the importance of proper labeling in specimen collection?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            245 => 
            array (
                'id' => 251,
                'question_set_id' => 19,
                'question_text' => 'Which tool is commonly used for collecting blood specimens?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            246 => 
            array (
                'id' => 252,
                'question_set_id' => 19,
                'question_text' => 'What is a key consideration when collecting specimens for epidemiological investigations?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            247 => 
            array (
                'id' => 253,
                'question_set_id' => 19,
                'question_text' => 'Which of the following is a standard procedure for handling specimens collected from patients with infectious diseases?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-29 19:03:49',
                'updated_at' => '2025-01-29 19:03:49',
            ),
            248 => 
            array (
                'id' => 254,
                'question_set_id' => 20,
                'question_text' => 'What is Flutter?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            249 => 
            array (
                'id' => 255,
                'question_set_id' => 20,
                'question_text' => 'Which of the following is the programming language used in Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            250 => 
            array (
                'id' => 256,
                'question_set_id' => 20,
                'question_text' => 'What is the main advantage of Flutter?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            251 => 
            array (
                'id' => 257,
                'question_set_id' => 20,
                'question_text' => 'To install Flutter, you need:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            252 => 
            array (
                'id' => 258,
                'question_set_id' => 20,
                'question_text' => 'What is the Flutter architecture based on?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            253 => 
            array (
                'id' => 259,
                'question_set_id' => 20,
                'question_text' => 'What is the purpose of the "pubspec.yaml" file in a Flutter project?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            254 => 
            array (
                'id' => 260,
                'question_set_id' => 20,
                'question_text' => 'Which widget is responsible for the application\'s user interface?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            255 => 
            array (
                'id' => 261,
                'question_set_id' => 20,
                'question_text' => 'What is the "Material" design system in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            256 => 
            array (
                'id' => 262,
                'question_set_id' => 20,
                'question_text' => 'Which widget is used to create a button in Flutter?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            257 => 
            array (
                'id' => 263,
                'question_set_id' => 20,
                'question_text' => 'What is the "Navigator" in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            258 => 
            array (
                'id' => 264,
                'question_set_id' => 20,
                'question_text' => 'Which widget is used to create a list in Flutter?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            259 => 
            array (
                'id' => 265,
                'question_set_id' => 20,
                'question_text' => 'What is the "dart:async" library used for in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            260 => 
            array (
                'id' => 266,
                'question_set_id' => 20,
                'question_text' => 'Which widget is used to create a custom widget in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            261 => 
            array (
                'id' => 267,
                'question_set_id' => 20,
                'question_text' => 'Which widget is used to create a text field in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            262 => 
            array (
                'id' => 268,
                'question_set_id' => 20,
                'question_text' => 'What is the "Provider" in Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            263 => 
            array (
                'id' => 269,
                'question_set_id' => 20,
                'question_text' => 'Which widget is used to create a navigation drawer in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            264 => 
            array (
                'id' => 270,
                'question_set_id' => 20,
                'question_text' => 'What is the "ThemeData" in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            265 => 
            array (
                'id' => 271,
                'question_set_id' => 20,
                'question_text' => 'Which widget is used to create a floating action button in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            266 => 
            array (
                'id' => 272,
                'question_set_id' => 20,
                'question_text' => 'What is the "setState" method used for in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            267 => 
            array (
                'id' => 273,
                'question_set_id' => 20,
                'question_text' => 'Which widget is used to create a custom paint in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            268 => 
            array (
                'id' => 274,
                'question_set_id' => 20,
                'question_text' => 'What is the "AssetBundle" in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            269 => 
            array (
                'id' => 275,
                'question_set_id' => 20,
                'question_text' => 'Which widget is used to create a snackbar in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            270 => 
            array (
                'id' => 276,
                'question_set_id' => 20,
                'question_text' => 'What is the "GestureDetector" in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            271 => 
            array (
                'id' => 277,
                'question_set_id' => 20,
                'question_text' => 'Which widget is used to create a list view builder in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-01-30 17:45:37',
                'updated_at' => '2025-01-30 17:45:37',
            ),
            272 => 
            array (
                'id' => 278,
                'question_set_id' => 21,
                'question_text' => 'Which programming language is primarily used for Flutter development?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            273 => 
            array (
                'id' => 279,
                'question_set_id' => 21,
                'question_text' => 'Flutter is a UI toolkit developed by:',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            274 => 
            array (
                'id' => 280,
                'question_set_id' => 21,
                'question_text' => 'What is the primary advantage of Flutter\'s "hot reload" feature?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            275 => 
            array (
                'id' => 281,
                'question_set_id' => 21,
                'question_text' => 'Which of the following is a key feature of Flutter\'s architecture?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            276 => 
            array (
                'id' => 282,
                'question_set_id' => 21,
                'question_text' => 'Which of the following is the command to create a new Flutter project?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            277 => 
            array (
                'id' => 283,
                'question_set_id' => 21,
                'question_text' => 'Which tool is used for building and testing Flutter apps?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            278 => 
            array (
                'id' => 284,
                'question_set_id' => 21,
                'question_text' => 'Which of the following is NOT a widget type in Flutter?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:18',
                'updated_at' => '2025-04-11 08:56:18',
            ),
            279 => 
            array (
                'id' => 285,
                'question_set_id' => 21,
                'question_text' => 'What is the purpose of the `pubspec.yaml` file in a Flutter project?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            280 => 
            array (
                'id' => 286,
                'question_set_id' => 21,
                'question_text' => 'Which widget is used to add padding around another widget in Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            281 => 
            array (
                'id' => 287,
                'question_set_id' => 21,
                'question_text' => 'What is the role of the Flutter Engine?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            282 => 
            array (
                'id' => 288,
                'question_set_id' => 21,
                'question_text' => 'What is the command to run a Flutter app on a connected device or emulator?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            283 => 
            array (
                'id' => 289,
                'question_set_id' => 21,
                'question_text' => 'Which of the following is the best way to handle asynchronous operations in Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            284 => 
            array (
                'id' => 290,
                'question_set_id' => 21,
            'question_text' => 'What is the purpose of the `setState()` method in a Stateful Widget?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            285 => 
            array (
                'id' => 291,
                'question_set_id' => 21,
                'question_text' => 'What is the function of a GestureDetector widget?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            286 => 
            array (
                'id' => 292,
                'question_set_id' => 21,
                'question_text' => 'Which is the main function in Dart that starts the Flutter app?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            287 => 
            array (
                'id' => 293,
                'question_set_id' => 21,
                'question_text' => 'Which of the following is a layout widget in Flutter?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            288 => 
            array (
                'id' => 294,
                'question_set_id' => 21,
                'question_text' => 'Where would you typically place the Flutter SDK after downloading it?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            289 => 
            array (
                'id' => 295,
                'question_set_id' => 21,
                'question_text' => 'What does "Widget" mean in Flutter?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            290 => 
            array (
                'id' => 296,
                'question_set_id' => 21,
                'question_text' => 'The process of building Flutter for release requires to select a target. which one is not considered a target to release a Flutter Application?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            291 => 
            array (
                'id' => 297,
                'question_set_id' => 21,
                'question_text' => 'Which plugin is required to be install on Android Studio to work with Flutter development?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            292 => 
            array (
                'id' => 298,
                'question_set_id' => 21,
            'question_text' => 'What is the purpose of the `build()` method in a Flutter widget?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            293 => 
            array (
                'id' => 299,
                'question_set_id' => 21,
                'question_text' => 'Which widget allows you to create a scrollable list of items?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            294 => 
            array (
                'id' => 300,
                'question_set_id' => 21,
                'question_text' => 'Which file contains platform specific configurations for Android Flutter project?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            295 => 
            array (
                'id' => 301,
                'question_set_id' => 21,
                'question_text' => 'In Flutter, what is the purpose of keys?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            296 => 
            array (
                'id' => 302,
                'question_set_id' => 21,
                'question_text' => 'Which component of Flutter directly communicates with the underlying operating system?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 08:56:19',
                'updated_at' => '2025-04-11 08:56:19',
            ),
            297 => 
            array (
                'id' => 303,
                'question_set_id' => 22,
                'question_text' => 'What is the correct sequence of events in software testing?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            298 => 
            array (
                'id' => 304,
                'question_set_id' => 22,
                'question_text' => 'Which of the following is a test oracle?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            299 => 
            array (
                'id' => 305,
                'question_set_id' => 22,
                'question_text' => 'Which of the following is NOT a type of test case?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            300 => 
            array (
                'id' => 306,
                'question_set_id' => 22,
                'question_text' => 'Which of the following is a test criterion?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            301 => 
            array (
                'id' => 307,
                'question_set_id' => 22,
                'question_text' => 'Which of the following is NOT a psychological factor that affects testing?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            302 => 
            array (
                'id' => 308,
                'question_set_id' => 22,
                'question_text' => 'Which of the following is a black-box testing technique?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            303 => 
            array (
                'id' => 309,
                'question_set_id' => 22,
                'question_text' => 'Which of the following is a white-box testing technique?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            304 => 
            array (
                'id' => 310,
                'question_set_id' => 22,
                'question_text' => 'Which level of testing is typically performed first?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            305 => 
            array (
                'id' => 311,
                'question_set_id' => 22,
                'question_text' => 'Which of the following is NOT a level of testing?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            306 => 
            array (
                'id' => 312,
                'question_set_id' => 22,
                'question_text' => 'Which of the following is a characteristic of good test cases?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 09:25:17',
                'updated_at' => '2025-04-11 09:25:17',
            ),
            307 => 
            array (
                'id' => 313,
                'question_set_id' => 23,
                'question_text' => 'Which of the following is a key challenge in managing information?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            308 => 
            array (
                'id' => 314,
                'question_set_id' => 23,
                'question_text' => 'What is the typical sequence of the information lifecycle?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            309 => 
            array (
                'id' => 315,
                'question_set_id' => 23,
                'question_text' => 'Which component regulates data transfer between the computer\'s RAM and the storage device?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            310 => 
            array (
                'id' => 316,
                'question_set_id' => 23,
                'question_text' => 'Which RAID level provides data striping without redundancy?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            311 => 
            array (
                'id' => 317,
                'question_set_id' => 23,
                'question_text' => 'In a RAID 1 configuration, data is:',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            312 => 
            array (
                'id' => 318,
                'question_set_id' => 23,
                'question_text' => 'Which RAID level uses block-level striping with distributed parity?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            313 => 
            array (
                'id' => 319,
                'question_set_id' => 23,
                'question_text' => 'What is the primary function of an intelligent storage system?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            314 => 
            array (
                'id' => 320,
                'question_set_id' => 23,
                'question_text' => 'Which of the following is a logical component of the host in a storage system environment?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            315 => 
            array (
                'id' => 321,
                'question_set_id' => 23,
                'question_text' => 'Which of the following is a key component of a disk drive?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            316 => 
            array (
                'id' => 322,
                'question_set_id' => 23,
                'question_text' => 'Which RAID level provides data striping with double parity?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-04-11 10:42:07',
                'updated_at' => '2025-04-11 10:42:07',
            ),
            317 => 
            array (
                'id' => 323,
                'question_set_id' => 24,
            'question_text' => 'What is the primary function of a Network Attached Storage (NAS) device?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            318 => 
            array (
                'id' => 324,
                'question_set_id' => 24,
                'question_text' => 'Which of the following is generally considered a benefit of using a NAS device compared to a general-purpose server for file sharing?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            319 => 
            array (
                'id' => 325,
                'question_set_id' => 24,
                'question_text' => 'In a NAS environment, file I/O operations are typically handled at the:',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            320 => 
            array (
                'id' => 326,
                'question_set_id' => 24,
                'question_text' => 'Which component is NOT typically found within a NAS device?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            321 => 
            array (
                'id' => 327,
                'question_set_id' => 24,
                'question_text' => 'Which of the following is a common file sharing protocol used by NAS devices?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:14',
                'updated_at' => '2025-05-28 13:47:14',
            ),
            322 => 
            array (
                'id' => 328,
                'question_set_id' => 24,
            'question_text' => 'What is the key characteristic of Content Addressed Storage (CAS)?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            323 => 
            array (
                'id' => 329,
                'question_set_id' => 24,
                'question_text' => 'Which type of data is most suitable for storage in a CAS system?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            324 => 
            array (
                'id' => 330,
                'question_set_id' => 24,
                'question_text' => 'Which of the following is a feature or benefit of CAS?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            325 => 
            array (
                'id' => 331,
                'question_set_id' => 24,
                'question_text' => 'In a CAS architecture, what is responsible for calculating the content address of a stored object?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            326 => 
            array (
                'id' => 332,
                'question_set_id' => 24,
                'question_text' => 'How is an object typically retrieved from a CAS system?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            327 => 
            array (
                'id' => 333,
                'question_set_id' => 24,
                'question_text' => 'Compared to a general purpose server, a NAS device is typically:',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            328 => 
            array (
                'id' => 334,
                'question_set_id' => 24,
                'question_text' => 'A NAS device commonly uses what type of operating system?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            329 => 
            array (
                'id' => 335,
                'question_set_id' => 24,
                'question_text' => 'Which of the following is NOT a common file sharing protocol used on NAS devices?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            330 => 
            array (
                'id' => 336,
                'question_set_id' => 24,
                'question_text' => 'What is a common I/O operation performed by a NAS device?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            331 => 
            array (
                'id' => 337,
                'question_set_id' => 24,
                'question_text' => 'What is the main purpose of archiving data?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            332 => 
            array (
                'id' => 338,
                'question_set_id' => 24,
            'question_text' => 'Which of these is a key advantage of Content Addressed Storage (CAS)?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            333 => 
            array (
                'id' => 339,
                'question_set_id' => 24,
            'question_text' => 'What is the role of metadata in Content Addressed Storage (CAS)?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            334 => 
            array (
                'id' => 340,
                'question_set_id' => 24,
                'question_text' => 'Which of the following is a characteristic of "fixed content" in the context of CAS?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            335 => 
            array (
                'id' => 341,
                'question_set_id' => 24,
                'question_text' => 'What is object storage, as related to CAS?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            336 => 
            array (
                'id' => 342,
                'question_set_id' => 24,
                'question_text' => 'What is a key advantage of using object storage?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            337 => 
            array (
                'id' => 343,
                'question_set_id' => 24,
                'question_text' => 'Which component handles the network connectivity for a NAS device?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            338 => 
            array (
                'id' => 344,
                'question_set_id' => 24,
                'question_text' => 'What does the acronym WORM stand for in the context of CAS?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            339 => 
            array (
                'id' => 345,
                'question_set_id' => 24,
                'question_text' => 'What is a \'content hash\'?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            340 => 
            array (
                'id' => 346,
                'question_set_id' => 24,
                'question_text' => 'Which of the following is NOT a benefit of using a NAS device?',
                'correct_answer' => 'D',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            341 => 
            array (
                'id' => 347,
                'question_set_id' => 24,
                'question_text' => 'What is the primary goal of CAS architecture?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-05-28 13:47:15',
                'updated_at' => '2025-05-28 13:47:15',
            ),
            342 => 
            array (
                'id' => 348,
                'question_set_id' => 25,
            'question_text' => 'What is the primary goal of integrated marketing communications (IMC)?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:11',
                'updated_at' => '2025-06-03 18:36:11',
            ),
            343 => 
            array (
                'id' => 349,
                'question_set_id' => 25,
                'question_text' => 'Which of the following is NOT a common objective of advertising?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:11',
                'updated_at' => '2025-06-03 18:36:11',
            ),
            344 => 
            array (
                'id' => 350,
                'question_set_id' => 25,
                'question_text' => 'Which element of the promotional mix involves short-term incentives to encourage the purchase or sale of a product or service?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            345 => 
            array (
                'id' => 351,
                'question_set_id' => 25,
            'question_text' => 'What is the main goal of Public Relations (PR)?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            346 => 
            array (
                'id' => 352,
                'question_set_id' => 25,
                'question_text' => 'In the context of managing the sales function, what does \'sales forecasting\' primarily involve?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            347 => 
            array (
                'id' => 353,
                'question_set_id' => 25,
                'question_text' => 'Which of the following is a key decision area in managing the distribution function?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            348 => 
            array (
                'id' => 354,
                'question_set_id' => 25,
                'question_text' => 'What is the term for the activities involved in selling goods or services directly to final consumers for their personal, non-business use?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            349 => 
            array (
                'id' => 355,
                'question_set_id' => 25,
                'question_text' => 'Which of the following is a key function of retail management?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            350 => 
            array (
                'id' => 356,
                'question_set_id' => 25,
                'question_text' => 'Which marketing approach relies on communicating directly with individual customers or carefully targeted sets of customers, often on a one-to-one, interactive basis?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            351 => 
            array (
                'id' => 357,
                'question_set_id' => 25,
                'question_text' => 'Which of the following is a key characteristic of direct marketing?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            352 => 
            array (
                'id' => 358,
                'question_set_id' => 25,
                'question_text' => 'In a sales pitch, what is the purpose of the "approach" stage?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            353 => 
            array (
                'id' => 359,
                'question_set_id' => 25,
                'question_text' => 'Which of the following is NOT typically considered a type of sales promotion?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            354 => 
            array (
                'id' => 360,
                'question_set_id' => 25,
                'question_text' => 'What is the purpose of setting sales quotas?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            355 => 
            array (
                'id' => 361,
                'question_set_id' => 25,
                'question_text' => 'Which of these is a type of distribution channel?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            356 => 
            array (
                'id' => 362,
                'question_set_id' => 25,
                'question_text' => 'What is the term for when a retailer purchases goods from a supplier?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            357 => 
            array (
                'id' => 363,
                'question_set_id' => 25,
                'question_text' => 'What is a key focus of retail management in the area of customer service?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            358 => 
            array (
                'id' => 364,
                'question_set_id' => 25,
                'question_text' => 'What is a key advantage of direct marketing for businesses?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            359 => 
            array (
                'id' => 365,
                'question_set_id' => 25,
                'question_text' => 'Which of the following is an example of a direct marketing communication channel?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            360 => 
            array (
                'id' => 366,
                'question_set_id' => 25,
                'question_text' => 'In a sales pitch, what should a salesperson do after identifying the customer\'s needs?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            361 => 
            array (
                'id' => 367,
                'question_set_id' => 25,
                'question_text' => 'What does a company\'s distribution strategy involve?',
                'correct_answer' => 'C',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            362 => 
            array (
                'id' => 368,
                'question_set_id' => 25,
                'question_text' => 'Which promotional strategy involves generating a buzz through word-of-mouth marketing?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            363 => 
            array (
                'id' => 369,
                'question_set_id' => 25,
                'question_text' => 'Which function focuses on building relationships with customers to create loyalty?',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            364 => 
            array (
                'id' => 370,
                'question_set_id' => 25,
                'question_text' => 'A pull promotional strategy focuses on:',
                'correct_answer' => 'A',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            365 => 
            array (
                'id' => 371,
                'question_set_id' => 25,
                'question_text' => 'A push promotional strategy focuses on:',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
            366 => 
            array (
                'id' => 372,
                'question_set_id' => 25,
                'question_text' => 'What is the primary purpose of public relations?',
                'correct_answer' => 'B',
                'deleted_at' => NULL,
                'created_at' => '2025-06-03 18:36:12',
                'updated_at' => '2025-06-03 18:36:12',
            ),
        ));
        
        
    }
}