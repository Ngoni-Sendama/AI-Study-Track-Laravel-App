<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exams')->delete();
        
        \DB::table('exams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["Working with UI Widget : \\tunderstanding widget tree, types of widgets, working with widgets such,as Text, text field, flat button, raised button, snack bar, switch, toggle button, elevated button","Introduction to Flutter : \\tinstallation, installing Android Studio, installing Flutter and Dart plugin on,Android Studio, flutter architecture"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 25,
                'created_at' => '2025-01-26 18:15:15',
                'updated_at' => '2025-01-26 18:44:09',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'subject_id' => 2,
                'topics' => '["Software design : \\tdesign principles, modularity, top-down and bottom-up strategies, coupling,,cohesion, structure charts specification, data flow diagram"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 36.666666666667,
                'created_at' => '2025-01-26 18:15:33',
                'updated_at' => '2025-01-27 16:31:07',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'subject_id' => 3,
                'topics' => '["Information storage and Management : \\tInformation Storage, Evolution of Storage Technology,and Architecture, Key challenges in Managing Information, Information Lifecycle,Storage System Environment : \\tComponents of Storage System Environment, Disk Drive,Components, Disk Drive Performance, Logical components of the Host"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 0,
                'created_at' => '2025-01-26 18:15:41',
                'updated_at' => '2025-01-26 18:26:26',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["Introduction to Flutter : \\tinstallation, installing Android Studio, installing Flutter and Dart plugin on,Android Studio, flutter architecture"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 24.137931034483,
                'created_at' => '2025-01-26 18:22:43',
                'updated_at' => '2025-01-26 18:38:17',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["Working with UI Widget : \\tunderstanding widget tree, types of widgets, working with widgets such,as Text, text field, flat button, raised button, snack bar, switch, toggle button, elevated button"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 33.333333333333,
                'created_at' => '2025-01-26 18:28:30',
                'updated_at' => '2025-01-26 18:36:50',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'subject_id' => 3,
                'topics' => '["Information storage and Management : \\tInformation Storage, Evolution of Storage Technology,and Architecture, Key challenges in Managing Information, Information Lifecycle,Storage System Environment : \\tComponents of Storage System Environment, Disk Drive,Components, Disk Drive Performance, Logical components of the Host"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 20,
                'created_at' => '2025-01-26 18:39:10',
                'updated_at' => '2025-01-26 18:40:22',
            ),
            6 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["Sum of two numbers only","Multiplication of two single numbers"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 35,
                'created_at' => '2025-01-27 17:15:09',
                'updated_at' => '2025-01-27 17:17:50',
            ),
            7 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["addition of two numbers"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 30,
                'created_at' => '2025-01-27 17:19:15',
                'updated_at' => '2025-01-27 17:21:28',
            ),
            8 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'subject_id' => 2,
                'topics' => '["Sum of two numbers, single digits"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 40,
                'created_at' => '2025-01-27 17:24:24',
                'updated_at' => '2025-01-27 17:25:04',
            ),
            9 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'subject_id' => 2,
                'topics' => '["Sum of two single digits numbers"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 100,
                'created_at' => '2025-01-27 17:32:34',
                'updated_at' => '2025-01-27 17:33:11',
            ),
            10 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'subject_id' => 3,
                'topics' => '["Sum of two numbers, different answers and complex questions."]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 50,
                'created_at' => '2025-01-27 17:36:03',
                'updated_at' => '2025-01-27 17:44:28',
            ),
            11 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'subject_id' => 2,
                'topics' => '["I - Introduction to software engineering : \\tproblem domain, software engineering challenges,,software engineering approach,Process models : \\tdesired characteristics of software process, waterfall model, prototyping model,,iterative development","III - Software design : \\tdesign principles, modularity, top-down and bottom-up strategies, coupling,,cohesion, structure charts specification, data flow diagram"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 60,
                'created_at' => '2025-01-27 17:45:44',
                'updated_at' => '2025-01-27 17:46:22',
            ),
            12 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'subject_id' => 10,
                'topics' => '["I - Introduction to marketing management : \\tmarketing concept, marketing process, marketing,planning, types of orientations, marketing mix, new marketing horizons,Marketing environment and customer value : \\tmicro and macro environment, customer life cycle,,customer value and value maximization strategies, customer acquisition and customer retention,,customer loyalty, framework for competitive analysis","IV - Communication value : \\tintegrated marketing communications, advertising management, sales,promotion and public relations, managing the sales function, managing the distribution function, retail,management, direct marketing and sales pitch"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 20,
                'created_at' => '2025-01-28 08:55:10',
                'updated_at' => '2025-01-28 08:56:09',
            ),
            13 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'subject_id' => 11,
                'topics' => '["I - Introduction to marketing management : \\tmarketing concept, marketing process, marketing,planning, types of orientations, marketing mix, new marketing horizons,Marketing environment and customer value : \\tmicro and macro environment, customer life cycle,,customer value and value maximization strategies, customer acquisition and customer retention,,customer loyalty, framework for competitive analysis","V - Create sustainable competitive value and growth : \\tcustomer relationship management,,marketing organisation, marketing strategy, marketing performance and control, rural marketing and,green marketing"]',
                'notes' => '[]',
                'date' => '2025-01-31 15:37:06',
                'marks' => 40,
                'created_at' => '2025-01-28 10:07:10',
                'updated_at' => '2025-01-28 10:15:16',
            ),
            14 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["I - Introduction to Flutter : \\tinstallation, installing Android Studio, installing Flutter and Dart plugin on,Android Studio, flutter architecture"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 100,
                'created_at' => '2025-01-28 14:16:02',
                'updated_at' => '2025-01-28 14:17:30',
            ),
            15 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["Sum of 3 numbers","product of 2 numbers"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 80,
                'created_at' => '2025-01-28 14:20:04',
                'updated_at' => '2025-01-28 14:21:01',
            ),
            16 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'subject_id' => 11,
                'topics' => '["I - Introduction to marketing management : \\tmarketing concept, marketing process, marketing,planning, types of orientations, marketing mix, new marketing horizons,Marketing environment and customer value : \\tmicro and macro environment, customer life cycle,,customer value and value maximization strategies, customer acquisition and customer retention,,customer loyalty, framework for competitive analysis","II - Marketing research & consumer behaviour : \\tsegmenting, targeting and positioning, marketing,research and information systems, marketing metrics and demand forecasting, consumer behaviour,,organizational buying behaviour"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 50,
                'created_at' => '2025-01-28 15:44:20',
                'updated_at' => '2025-01-28 16:32:21',
            ),
            17 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["I - Introduction to Flutter : \\tinstallation, installing Android Studio, installing Flutter and Dart plugin on,Android Studio, flutter architecture"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => NULL,
                'created_at' => '2025-01-29 18:48:53',
                'updated_at' => '2025-01-29 18:48:53',
            ),
            18 => 
            array (
                'id' => 20,
                'user_id' => 2,
                'subject_id' => 4,
                'topics' => '["Unit 2 - Specimen collection- Specimen collection from patients, clinics and hospitals. Specimen collection for epidemiological investigations. Training of medical microbiologist to handle epidemics."]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => NULL,
                'created_at' => '2025-01-29 18:58:45',
                'updated_at' => '2025-01-29 18:58:45',
            ),
            19 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'subject_id' => 3,
                'topics' => '["I - Information storage and Management : \\tInformation Storage, Evolution of Storage Technology,and Architecture, Key challenges in Managing Information, Information Lifecycle,Storage System Environment : \\tComponents of Storage System Environment, Disk Drive,Components, Disk Drive Performance, Logical components of the Host","II - Data Protection : \\tRAID Implementation, RAID Array Components, RAID Levels 0, 1, 3, 4, 5, 6 and,RAID levels Comparison,Intelligent Storage System : \\tComponents of Intelligent Storage System, Intelligent Storage Array"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 40,
                'created_at' => '2025-01-30 17:04:44',
                'updated_at' => '2025-04-11 10:42:21',
            ),
            20 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["I - Introduction to Flutter : \\tinstallation, installing Android Studio, installing Flutter and Dart plugin on,Android Studio, flutter architecture"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 20.833333333333,
                'created_at' => '2025-01-30 17:45:03',
                'updated_at' => '2025-01-30 17:45:54',
            ),
            21 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'subject_id' => 1,
                'topics' => '["I - Introduction to Flutter : \\tinstallation, installing Android Studio, installing Flutter and Dart plugin on,Android Studio, flutter architecture"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => NULL,
                'created_at' => '2025-04-11 08:55:53',
                'updated_at' => '2025-04-11 08:55:53',
            ),
            22 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'subject_id' => 2,
                'topics' => '["V - Testing : \\terror fault and failure, test oracles, test cases, test criteria, psychology of testing, blackbox,testing, whitebox testing, levels of testing"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => NULL,
                'created_at' => '2025-04-11 09:13:29',
                'updated_at' => '2025-04-11 09:13:29',
            ),
            23 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'subject_id' => 3,
                'topics' => '["IV - Network Attached Storage : \\tGeneral purpose servers vs NAS devices, Benefits of NAS, NAS File,I\\/O, Components of NAS, NAS Implementations, File Sharing protocols, NAS I\\/O operations,Content Addressed Storage : \\tFixed content and archives, Types of archives, Features and benefits,,CAS Architecture, Object storage and retrieval"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => NULL,
                'created_at' => '2025-05-28 13:46:09',
                'updated_at' => '2025-05-28 13:46:09',
            ),
            24 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'subject_id' => 11,
                'topics' => '["IV - Communication value : \\tintegrated marketing communications, advertising management, sales,promotion and public relations, managing the sales function, managing the distribution function, retail,management, direct marketing and sales pitch"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => 76,
                'created_at' => '2025-06-03 18:35:39',
                'updated_at' => '2025-06-03 19:06:04',
            ),
            25 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'subject_id' => 11,
                'topics' => '["V - Business Continuity : \\tInformation availability, Business Continuity terminology, Planning lifecycle,,Failure analysis, Business impact analysis and backup technologies,Backup and Recovery : \\tBackup purpose, Backup consideration, Granularity, Recovery,considerations, Methods and process, Backup and restore operations, Backup topologies and,technologies"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => NULL,
                'created_at' => '2025-06-03 20:12:17',
                'updated_at' => '2025-06-03 20:12:17',
            ),
            26 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'subject_id' => 2,
                'topics' => '["IV - Coding : \\tprogramming principles and guidelines, common coding errors, structured programming,,information hiding, programming practices, coding standards, coding process"]',
                'notes' => '[]',
                'date' => NULL,
                'marks' => NULL,
                'created_at' => '2025-06-09 17:09:33',
                'updated_at' => '2025-06-09 17:09:33',
            ),
        ));
        
        
    }
}