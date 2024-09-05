<?php

namespace Database\Seeders;

use App\Models\JobListing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobListing::truncate();
        JobListing::insert([
            [
                'title' => 'Software Engineer',
                'description' => 'Develop and maintain software applications',
                'location' => 'Lagos',
                'salary' => 50000000,
                'category' => 'IT',
                'company' => 'TechCo',
                'has_commission' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Marketing Manager',
                'description' => 'Plan and execute marketing campaigns',
                'location' => 'Abuja',
                'salary' => 40000000,
                'category' => 'Marketing',
                'company' => 'AdvertCo',
                'has_commission' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Scientist',
                'description' => 'Analyze and interpret complex data',
                'location' => 'Remote',
                'salary' => 60000000,
                'category' => 'Data Science',
                'company' => 'DataCorp',
                'has_commission' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Developer',
                'description' => 'Build and maintain websites',
                'location' => 'Lagos',
                'salary' => 35000000,
                'category' => 'IT',
                'company' => 'WebMasters',
                'has_commission' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sales Representative',
                'description' => 'Generate leads and close sales',
                'location' => 'Port Harcourt',
                'salary' => 25000000,
                'category' => 'Sales',
                'company' => 'SalesGen',
                'has_commission' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
