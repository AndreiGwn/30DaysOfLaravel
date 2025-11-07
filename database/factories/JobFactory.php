<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobTitles = [
            'Laravel Developer',
            'Frontend Developer', 
            'Full Stack Developer',
            'PHP Developer',
            'Backend Developer',
            'DevOps Engineer',
            'Software Engineer',
            'Web Developer',
            'Mobile Developer',
            'Data Analyst',
            'Product Manager',
            'UI/UX Designer',
            'System Administrator',
            'Database Administrator',
            'QA Engineer'
        ];

        $companies = [
            'Tech Corp',
            'Design Studio',
            'StartupXYZ',
            'WebAgency',
            'Cloud Solutions',
            'Digital Innovations',
            'Code Factory',
            'Future Systems',
            'Pixel Perfect',
            'Data Dynamics',
            'Agile Solutions',
            'Creative Labs'
        ];

        $locations = [
            'Remote',
            'New York',
            'San Francisco',
            'Austin',
            'Boston',
            'Seattle',
            'Chicago',
            'Miami',
            'Denver',
            'Portland',
            'Atlanta',
            'Los Angeles'
        ];

        return [
            'title' => $this->faker->randomElement($jobTitles),
            'salary' => '$' . $this->faker->numberBetween(35, 120) . ',000',
            'location' => $this->faker->randomElement($locations),
            'company' => $this->faker->randomElement($companies),
            'description' => $this->faker->paragraphs(3, true),
            'user_id' => \App\Models\User::factory()
        ];
    }
}
