<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Static data for demonstration purposes
    private static $jobs = [
        1 => [
            'id' => 1,
            'title' => 'Laravel Developer',
            'salary' => '$50,000',
            'company' => 'Tech Corp',
            'location' => 'Remote',
            'description' => 'We are looking for a skilled Laravel developer to join our team. You will be responsible for developing web applications using the Laravel framework, working with MySQL databases, and collaborating with our frontend team.'
        ],
        2 => [
            'id' => 2,
            'title' => 'Frontend Developer',
            'salary' => '$45,000',
            'company' => 'Design Studio',
            'location' => 'New York',
            'description' => 'Join our creative team as a Frontend Developer. You will work with modern JavaScript frameworks like Vue.js and React, create beautiful user interfaces, and ensure excellent user experience across all devices.'
        ],
        3 => [
            'id' => 3,
            'title' => 'Full Stack Developer',
            'salary' => '$60,000',
            'company' => 'StartupXYZ',
            'location' => 'San Francisco',
            'description' => 'We need a versatile Full Stack Developer who can work on both frontend and backend technologies. You will help us scale our platform using Laravel, Vue.js, and modern development practices.'
        ],
        4 => [
            'id' => 4,
            'title' => 'PHP Developer',
            'salary' => '$42,000',
            'company' => 'WebAgency',
            'location' => 'Austin',
            'description' => 'Looking for a PHP Developer to maintain and enhance our client websites. Experience with WordPress, Laravel, and MySQL required. Great opportunity for career growth.'
        ]
    ];

    /**
     * Get all jobs
     */
    public static function getAllJobs()
    {
        return collect(self::$jobs)->values();
    }

    /**
     * Find a job by ID
     */
    public static function findJob($id)
    {
        return self::$jobs[$id] ?? null;
    }

    /**
     * Search jobs by title
     */
    public static function search($term)
    {
        return collect(self::$jobs)
            ->filter(function ($job) use ($term) {
                return str_contains(strtolower($job['title']), strtolower($term)) ||
                       str_contains(strtolower($job['company']), strtolower($term));
            })
            ->values();
    }

    /**
     * Get jobs by location
     */
    public static function getByLocation($location)
    {
        return collect(self::$jobs)
            ->filter(function ($job) use ($location) {
                return str_contains(strtolower($job['location']), strtolower($location));
            })
            ->values();
    }
}
