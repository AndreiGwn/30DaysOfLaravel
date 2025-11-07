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
}
