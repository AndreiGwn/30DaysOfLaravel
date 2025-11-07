<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/jobs', function () {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Laravel Developer',
            'salary' => '$50,000',
            'company' => 'Tech Corp',
            'location' => 'Remote'
        ],
        [
            'id' => 2,
            'title' => 'Frontend Developer',
            'salary' => '$45,000',
            'company' => 'Design Studio',
            'location' => 'New York'
        ],
        [
            'id' => 3,
            'title' => 'Full Stack Developer',
            'salary' => '$60,000',
            'company' => 'StartupXYZ',
            'location' => 'San Francisco'
        ]
    ];
    
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        1 => [
            'id' => 1,
            'title' => 'Laravel Developer',
            'salary' => '$50,000',
            'company' => 'Tech Corp',
            'location' => 'Remote',
            'description' => 'We are looking for a skilled Laravel developer to join our team. You will be responsible for developing web applications using the Laravel framework.'
        ],
        2 => [
            'id' => 2,
            'title' => 'Frontend Developer',
            'salary' => '$45,000',
            'company' => 'Design Studio',
            'location' => 'New York',
            'description' => 'Join our creative team as a Frontend Developer. You will work with modern JavaScript frameworks and create beautiful user interfaces.'
        ],
        3 => [
            'id' => 3,
            'title' => 'Full Stack Developer',
            'salary' => '$60,000',
            'company' => 'StartupXYZ',
            'location' => 'San Francisco',
            'description' => 'We need a versatile Full Stack Developer who can work on both frontend and backend technologies to help us scale our platform.'
        ]
    ];
    
    $job = $jobs[$id] ?? null;
    
    if (!$job) {
        abort(404);
    }
    
    return view('jobs.show', ['job' => $job]);
});