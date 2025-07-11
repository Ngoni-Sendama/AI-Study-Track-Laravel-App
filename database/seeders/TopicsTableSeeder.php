<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('topics')->delete();
        
        \DB::table('topics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subject_id' => 1,
                'unit' => 'I',
                'topics' => 'Introduction to Flutter : 	installation, installing Android Studio, installing Flutter and Dart plugin on,Android Studio, flutter architecture',
                'created_at' => '2025-01-26 18:14:23',
                'updated_at' => '2025-01-26 18:14:23',
            ),
            1 => 
            array (
                'id' => 2,
                'subject_id' => 1,
                'unit' => 'II',
                'topics' => 'Working with UI Widget : 	understanding widget tree, types of widgets, working with widgets such,as Text, text field, flat button, raised button, snack bar, switch, toggle button, elevated button',
                'created_at' => '2025-01-26 18:14:23',
                'updated_at' => '2025-01-26 18:14:23',
            ),
            2 => 
            array (
                'id' => 3,
                'subject_id' => 1,
                'unit' => 'III',
                'topics' => 'Flutter components : 	layouts, types of layout widget, gesture control, state management, applying,animation, animation based classes',
                'created_at' => '2025-01-26 18:14:23',
                'updated_at' => '2025-01-26 18:14:23',
            ),
            3 => 
            array (
                'id' => 4,
                'subject_id' => 1,
                'unit' => 'IV',
                'topics' => 'Packages : 	packages, creating and importing packages, types of packages, dart package, flutter,plugin package',
                'created_at' => '2025-01-26 18:14:23',
                'updated_at' => '2025-01-26 18:14:23',
            ),
            4 => 
            array (
                'id' => 5,
                'subject_id' => 1,
                'unit' => 'V',
                'topics' => 'Introduction to Dart programming : 	basics of dart programming, data types, operators and,decision making statements, string operations, control structures, functions and types of functions,,lambda function',
                'created_at' => '2025-01-26 18:14:23',
                'updated_at' => '2025-01-26 18:14:23',
            ),
            5 => 
            array (
                'id' => 6,
                'subject_id' => 1,
                'unit' => 'VI',
            'topics' => 'Classes in Flutter : 	classes, dart constructors, static keyword, this keyword, deployment of,application, integrating app with firebase,Text Books	:,1	. 	FLUTTER  (ENGLISH, PAPERBACK, HOSSEINI POUYA) by HOSSEINI POUYA, PAPERBACK,Reference	s	:,1	. 	FLUTTER BETTER PERFORMANCE BOOK A BASIC TO ADVANCE BOOK FOR,ARCHITECTURE,PRACTICAL PROJECT OF MOBILE APP DEVELOPMENT APPROACH OF,PROGRAMMING WITH IMAGES ALL CONCEPTS AND NECESSARY TOPICS by LIVRE,,PAPERBACK,CO4 :: 	develop hybrid applications using flutter components,Through this course students should be able to,L:	2   	T:	0   	P:	4    	Credits	:	4,Practical,•	Implementing user interface using widgets,•	Implementing various flutter components.,•	Implementing packages in flutter,•	Implementing dart programming constructs.,•	Implementing dart programming control structure.,•	Implementing string operations in dart programming.,•	Implementing list operations in dart programming.,•	Implementing functions in dart programming,•	Implementing the concept of classes in dart programming,List of Practicals / Experiments:,Session  20	24	-	25                  Page:	1	/	2,,Session  20	24	-	25                  Page:	2	/	2',
                'created_at' => '2025-01-26 18:14:23',
                'updated_at' => '2025-01-26 18:14:23',
            ),
            6 => 
            array (
                'id' => 7,
                'subject_id' => 2,
                'unit' => 'I',
                'topics' => 'Introduction to software engineering : 	problem domain, software engineering challenges,,software engineering approach,Process models : 	desired characteristics of software process, waterfall model, prototyping model,,iterative development',
                'created_at' => '2025-01-26 18:14:32',
                'updated_at' => '2025-01-26 18:14:32',
            ),
            7 => 
            array (
                'id' => 8,
                'subject_id' => 2,
                'unit' => 'II',
                'topics' => 'Software requirements analysis and specification : 	need for SRS, requirement process,,requirement gathering, problem analysis, types of requirements, characteristics of SRS, components,of SRS, structure of a requirements document',
                'created_at' => '2025-01-26 18:14:32',
                'updated_at' => '2025-01-26 18:14:32',
            ),
            8 => 
            array (
                'id' => 9,
                'subject_id' => 2,
                'unit' => 'III',
                'topics' => 'Software design : 	design principles, modularity, top-down and bottom-up strategies, coupling,,cohesion, structure charts specification, data flow diagram',
                'created_at' => '2025-01-26 18:14:32',
                'updated_at' => '2025-01-26 18:14:32',
            ),
            9 => 
            array (
                'id' => 10,
                'subject_id' => 2,
                'unit' => 'IV',
                'topics' => 'Coding : 	programming principles and guidelines, common coding errors, structured programming,,information hiding, programming practices, coding standards, coding process',
                'created_at' => '2025-01-26 18:14:32',
                'updated_at' => '2025-01-26 18:14:32',
            ),
            10 => 
            array (
                'id' => 11,
                'subject_id' => 2,
                'unit' => 'V',
                'topics' => 'Testing : 	error fault and failure, test oracles, test cases, test criteria, psychology of testing, blackbox,testing, whitebox testing, levels of testing',
                'created_at' => '2025-01-26 18:14:32',
                'updated_at' => '2025-01-26 18:14:32',
            ),
            11 => 
            array (
                'id' => 12,
                'subject_id' => 2,
                'unit' => 'VI',
                'topics' => 'Software testing process : 	test plan, test case specifications, test case execution and analysis,,defect logging and tracking,Software maintenance and metrics : 	types of maintenance, COCOMO, function point metric, types,of maintenance, COCOMO, function point metric',
                'created_at' => '2025-01-26 18:14:32',
                'updated_at' => '2025-01-30 17:01:19',
            ),
            12 => 
            array (
                'id' => 13,
                'subject_id' => 3,
                'unit' => 'I',
                'topics' => 'Information storage and Management : 	Information Storage, Evolution of Storage Technology,and Architecture, Key challenges in Managing Information, Information Lifecycle,Storage System Environment : 	Components of Storage System Environment, Disk Drive,Components, Disk Drive Performance, Logical components of the Host',
                'created_at' => '2025-01-26 18:14:52',
                'updated_at' => '2025-01-26 18:14:52',
            ),
            13 => 
            array (
                'id' => 14,
                'subject_id' => 3,
                'unit' => 'II',
                'topics' => 'Data Protection : 	RAID Implementation, RAID Array Components, RAID Levels 0, 1, 3, 4, 5, 6 and,RAID levels Comparison,Intelligent Storage System : 	Components of Intelligent Storage System, Intelligent Storage Array',
                'created_at' => '2025-01-26 18:14:52',
                'updated_at' => '2025-01-26 18:14:52',
            ),
            14 => 
            array (
                'id' => 15,
                'subject_id' => 3,
                'unit' => 'III',
                'topics' => 'Direct Attached Storage : 	DAS and its Types, Benefits and Limitations, Disk Drive Interfaces,,Introduction to Parallel SCSI,Storage Area Networks : 	Fibre Channel, Storage Area Networks and its Evolution, FC Connectivity,,Fibre Channel ports, Fibre Channel Architecture, Zoning and FC Topologies',
                'created_at' => '2025-01-26 18:14:52',
                'updated_at' => '2025-01-26 18:14:52',
            ),
            15 => 
            array (
                'id' => 16,
                'subject_id' => 3,
                'unit' => 'IV',
                'topics' => 'Network Attached Storage : 	General purpose servers vs NAS devices, Benefits of NAS, NAS File,I/O, Components of NAS, NAS Implementations, File Sharing protocols, NAS I/O operations,Content Addressed Storage : 	Fixed content and archives, Types of archives, Features and benefits,,CAS Architecture, Object storage and retrieval',
                'created_at' => '2025-01-26 18:14:52',
                'updated_at' => '2025-01-26 18:14:52',
            ),
            16 => 
            array (
                'id' => 17,
                'subject_id' => 3,
                'unit' => 'V',
                'topics' => 'Business Continuity : 	Information availability, Business Continuity terminology, Planning lifecycle,,Failure analysis, Business impact analysis and backup technologies,Backup and Recovery : 	Backup purpose, Backup consideration, Granularity, Recovery,considerations, Methods and process, Backup and restore operations, Backup topologies and,technologies',
                'created_at' => '2025-01-26 18:14:52',
                'updated_at' => '2025-01-26 18:14:52',
            ),
            17 => 
            array (
                'id' => 18,
                'subject_id' => 3,
                'unit' => 'VI',
                'topics' => 'Local Replication : 	Source and target, Uses of local replicas, Data consistency, Local replication,technologies, Restore and restart considerations,Managing the Storage Infrastructure : 	Monitoring storage infrastructure, Storage management,activities, Management challenges, Developing an ideal solution,Text Books	:,1	. 	INFORMATION STORAGE AND MANAGEMENT by EMC EDUCATION SERVICES, G.,SOMASUNDARAM AND ALOK SRIVASTAVA, WILEY,Reference	s	:,1	. 	BUILDING STORAGE NETWORKS by MARC FARLEY, MCGRAW HILL EDUCATION,2	. 	STORAGE AREA NETWORK FUNDAMENTALS by MEETA GUPTA, PEARSON,CO4 :: 	analyze storage infrastructure and management activities,Through this course students should be able to,L:	3   	T:	0   	P:	0    	Credits	:	3,Session  20	24	-	25                  Page:	1	/	2,,Session  20	24	-	25                  Page:	2	/	2',
                'created_at' => '2025-01-26 18:14:52',
                'updated_at' => '2025-01-26 18:14:52',
            ),
            18 => 
            array (
                'id' => 19,
                'subject_id' => 4,
                'unit' => 'Unit 1',
                'topics' => 'Quality control Specimen collection- The role of Laboratory in the diagnosis and control of infections Management and quality control of medical microbiology laboratory.
',
                'created_at' => '2025-01-27 05:22:54',
                'updated_at' => '2025-01-27 05:22:54',
            ),
            19 => 
            array (
                'id' => 20,
                'subject_id' => 4,
                'unit' => 'Unit 2',
                'topics' => 'Specimen collection- Specimen collection from patients, clinics and hospitals. Specimen collection for epidemiological investigations. Training of medical microbiologist to handle epidemics.
',
                'created_at' => '2025-01-27 05:26:30',
                'updated_at' => '2025-01-27 05:26:30',
            ),
            20 => 
            array (
                'id' => 21,
                'subject_id' => 4,
                'unit' => 'Unit 3',
                'topics' => 'Specimen examination- Morphology, Staining, Cultural Character of Bacteria, Selective cultural medians, identifications by special tests, biochemical reactions and sero-typing of :- Gram’s positive cocci:- Cluster forming, chain forming and diplo cocci. Neisseria, Bordetella and Haemophilus.
',
                'created_at' => '2025-01-27 05:26:57',
                'updated_at' => '2025-01-27 05:26:57',
            ),
            21 => 
            array (
                'id' => 22,
                'subject_id' => 4,
                'unit' => 'Unit 4',
                'topics' => 'Bacteriology- Morphology, Staining, Cultural Character, Selective cultural medias, identification by special tests and biochemical reactions of:-
a) Corynebacterium
b) Mycrobacterium
c) Atypical Mycrobacterium',
    'created_at' => '2025-01-27 05:27:15',
    'updated_at' => '2025-01-27 05:27:15',
),
22 => 
array (
    'id' => 23,
    'subject_id' => 4,
    'unit' => 'Unit 5',
    'topics' => 'Bacteriology- Morphology, Staining, Cultural Character, Selective cultural medias, identification by special tests and biochemical reactions of:-
a) Anthrax bacillus
b) Brucella
c) Yersenia and Pasteurella',
'created_at' => '2025-01-27 05:27:31',
'updated_at' => '2025-01-27 05:27:31',
),
23 => 
array (
'id' => 24,
'subject_id' => 4,
'unit' => 'Unit 6',
'topics' => 'Bacteriology- Morphology, Staining, Cultural Character, Selective cultural medias, identification by special tests and biochemical reactions of:-
a) Anthrax bacillus
b) Brucella
c) Yersenia and Pasteurella',
'created_at' => '2025-01-27 05:27:52',
'updated_at' => '2025-01-27 05:27:52',
),
24 => 
array (
'id' => 31,
'subject_id' => 11,
'unit' => 'I',
'topics' => 'Introduction to marketing management : 	marketing concept, marketing process, marketing,planning, types of orientations, marketing mix, new marketing horizons,Marketing environment and customer value : 	micro and macro environment, customer life cycle,,customer value and value maximization strategies, customer acquisition and customer retention,,customer loyalty, framework for competitive analysis',
'created_at' => '2025-01-28 10:04:17',
'updated_at' => '2025-01-28 10:04:17',
),
25 => 
array (
'id' => 32,
'subject_id' => 11,
'unit' => 'II',
'topics' => 'Marketing research & consumer behaviour : 	segmenting, targeting and positioning, marketing,research and information systems, marketing metrics and demand forecasting, consumer behaviour,,organizational buying behaviour',
'created_at' => '2025-01-28 10:04:17',
'updated_at' => '2025-01-28 10:04:17',
),
26 => 
array (
'id' => 33,
'subject_id' => 11,
'unit' => 'III',
'topics' => 'Creating value : 	product management, new product decisions, brand management and decisions,,customer service, price setting policy, pricing strategies',
'created_at' => '2025-01-28 10:04:17',
'updated_at' => '2025-01-28 10:04:17',
),
27 => 
array (
'id' => 34,
'subject_id' => 11,
'unit' => 'IV',
'topics' => 'Communication value : 	integrated marketing communications, advertising management, sales,promotion and public relations, managing the sales function, managing the distribution function, retail,management, direct marketing and sales pitch',
'created_at' => '2025-01-28 10:04:17',
'updated_at' => '2025-01-28 10:04:17',
),
28 => 
array (
'id' => 35,
'subject_id' => 11,
'unit' => 'V',
'topics' => 'Create sustainable competitive value and growth : 	customer relationship management,,marketing organisation, marketing strategy, marketing performance and control, rural marketing and,green marketing',
'created_at' => '2025-01-28 10:04:17',
'updated_at' => '2025-01-28 10:04:17',
),
29 => 
array (
'id' => 36,
'subject_id' => 11,
'unit' => 'VI',
'topics' => 'AI and digital marketing : 	content marketing, video Marketing, search engine optimization, pay per,click, email marketing, affiliate marketing, social media marketing, artificial Intelligence (AI),applications in marketing',
'created_at' => '2025-01-28 10:04:17',
'updated_at' => '2025-01-28 10:05:58',
),
));
        
        
    }
}