<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory as Faker;

class GenerateStudents extends Command
{
    protected $signature = 'generate:students';
    protected $description = 'Generate CSV file with student data';

    public function handle()
    {
        $faker = Faker::create();

        $studentsData = [];
        for ($i = 0; $i < 100; $i++) {
            $studentsData[] = [
                'Name' => $faker->name,
                'Email' => $faker->email,
                'Password' => $faker->password,
            ];
        }

        $csvFileName = 'storage/app/students_data.csv';
        $csvFile = fopen($csvFileName, 'w');
        fputcsv($csvFile, array_keys($studentsData[0])); // Write header

        foreach ($studentsData as $student) {
            fputcsv($csvFile, $student);
        }

        fclose($csvFile);

        $this->info("CSV file '{$csvFileName}' created successfully.");
    }
}