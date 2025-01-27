<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define subjects to be seeded
        $subjects = [
            'MEDICAL MICROBIOLOGY-II',
            'HAEMATOLOGY-IV',
            'MEDICAL PHARMACOLOGY',
            'BIOCHEMISTRY(Metabolism & Molecular Diagnosis)',
            'INTRODUCTORY HISTOPATHOLOGY-II'
        ];

        // Loop through each subject and insert into the database if it doesn't already exist
        foreach ($subjects as $subjectName) {
            // Check if the subject already exists
            if (!Subject::where('name', $subjectName)->exists()) {
                Subject::create([
                    'user_id' => 2, // Always user_id = 2
                    'name' => $subjectName,
                ]);
            } else {
                // Optional: You can log a message or just skip if the subject already exists
                // \Log::info("Subject '{$subjectName}' already exists.");
            }
        }
    }

    // php artisan db:seed --class=SubjectSeeder

}
