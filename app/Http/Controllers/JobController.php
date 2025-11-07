<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of jobs
     */
    public function index()
    {
        $jobs = Job::getAllJobs();
        
        return view('jobs.index', ['jobs' => $jobs]);
    }

    /**
     * Display the specified job
     */
    public function show($id)
    {
        $job = Job::findJob($id);
        
        if (!$job) {
            abort(404);
        }
        
        return view('jobs.show', ['job' => $job]);
    }

    /**
     * Search for jobs
     */
    public function search(Request $request)
    {
        $term = $request->query('q');
        $jobs = $term ? Job::search($term) : Job::getAllJobs();
        
        return view('jobs.index', [
            'jobs' => $jobs,
            'searchTerm' => $term
        ]);
    }

    /**
     * Show the form for creating a new job
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created job in storage
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'string', 'max:100'],
            'location' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'min:10']
        ]);

        Job::create($validatedData);

        return redirect('/jobs')->with('success', 'Job listing created successfully!');
    }
}
