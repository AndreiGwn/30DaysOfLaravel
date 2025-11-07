<?php

use App\Models\Job;
use App\Models\User;

test('can view jobs page', function () {
    $response = $this->get('/jobs');
    $response->assertStatus(200);
    $response->assertSee('Job Listings');
});

test('can create job when authenticated', function () {
    $user = User::factory()->create();
    
    $this->actingAs($user)
        ->post('/jobs', [
            'title' => 'Test Developer',
            'salary' => '$50,000',
            'location' => 'Remote',
            'company' => 'Test Company',
            'description' => 'This is a test job description for our automated test.'
        ])
        ->assertRedirect('/jobs')
        ->assertSessionHas('success');
    
    $this->assertDatabaseHas('job_listings', [
        'title' => 'Test Developer',
        'company' => 'Test Company',
        'user_id' => $user->id
    ]);
});

test('cannot create job when not authenticated', function () {
    $this->post('/jobs', [
        'title' => 'Test Developer',
        'salary' => '$50,000',
        'location' => 'Remote',
        'company' => 'Test Company',
        'description' => 'This is a test job description.'
    ])->assertRedirect('/login');
});

test('job validation works', function () {
    $user = User::factory()->create();
    
    $this->actingAs($user)
        ->post('/jobs', [
            'title' => '', // Empty title should fail
            'salary' => '',
            'location' => '',
            'company' => '',
            'description' => ''
        ])
        ->assertSessionHasErrors(['title', 'salary', 'location', 'company', 'description']);
});

test('can view individual job', function () {
    $job = Job::factory()->create();
    
    $response = $this->get("/jobs/{$job->id}");
    $response->assertStatus(200);
    $response->assertSee($job->title);
});

test('api returns jobs in json format', function () {
    Job::factory()->count(3)->create();
    
    $response = $this->get('/api/jobs');
    $response->assertStatus(200);
    $response->assertJsonStructure([
        'success',
        'data' => [
            'data' => [
                '*' => ['id', 'title', 'company', 'location', 'salary', 'description']
            ]
        ],
        'message'
    ]);
});
