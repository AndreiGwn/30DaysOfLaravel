<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create([
            'title' => 'Laravel Developer',
            'salary' => '$50,000',
            'company' => 'Tech Corp',
            'location' => 'Remote',
            'description' => 'We are looking for a skilled Laravel developer to join our team. You will be responsible for developing web applications using the Laravel framework, working with MySQL databases, and collaborating with our frontend team.'
        ]);

        Job::create([
            'title' => 'Frontend Developer',
            'salary' => '$45,000',
            'company' => 'Design Studio',
            'location' => 'New York',
            'description' => 'Join our creative team as a Frontend Developer. You will work with modern JavaScript frameworks like Vue.js and React, create beautiful user interfaces, and ensure excellent user experience across all devices.'
        ]);

        Job::create([
            'title' => 'Full Stack Developer',
            'salary' => '$60,000',
            'company' => 'StartupXYZ',
            'location' => 'San Francisco',
            'description' => 'We need a versatile Full Stack Developer who can work on both frontend and backend technologies. You will help us scale our platform using Laravel, Vue.js, and modern development practices.'
        ]);

        Job::create([
            'title' => 'PHP Developer',
            'salary' => '$42,000',
            'company' => 'WebAgency',
            'location' => 'Austin',
            'description' => 'Looking for a PHP Developer to maintain and enhance our client websites. Experience with WordPress, Laravel, and MySQL required. Great opportunity for career growth.'
        ]);

        Job::create([
            'title' => 'DevOps Engineer',
            'salary' => '$70,000',
            'company' => 'Cloud Solutions',
            'location' => 'Remote',
            'description' => 'Seeking a DevOps Engineer to manage our cloud infrastructure and implement CI/CD pipelines using AWS, Docker, and Kubernetes.'
        ]);
    }
}
