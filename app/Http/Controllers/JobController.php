<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class JobController extends Controller
{
    /**
     * Display a listing of jobs
     */
    public function index()
    {
        $cacheKey = 'jobs.page.' . request('page', 1);
        
        $jobs = Cache::remember($cacheKey, now()->addMinutes(5), function () {
            return Job::with('user')->latest()->paginate(10);
        });
        
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
        
        if ($term) {
            $jobs = Job::with('user')
                ->where('title', 'like', "%{$term}%")
                ->orWhere('company', 'like', "%{$term}%")
                ->orWhere('location', 'like', "%{$term}%")
                ->latest()
                ->paginate(10)
                ->appends(request()->query());
        } else {
            $jobs = Job::with('user')->latest()->paginate(10);
        }
        
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

        $validatedData['user_id'] = Auth::id();

        Job::create($validatedData);

        return redirect('/jobs')->with('success', 'Job listing created successfully!');
    }

    /**
     * API: Get all jobs as JSON
     */
    public function apiIndex()
    {
        $jobs = Job::with('user')->latest()->paginate(10);
        
        return response()->json([
            'success' => true,
            'data' => $jobs,
            'message' => 'Jobs retrieved successfully'
        ]);
    }

    /**
     * API: Get single job as JSON
     */
    public function apiShow($id)
    {
        $job = Job::with('user')->find($id);
        
        if (!$job) {
            return response()->json([
                'success' => false,
                'message' => 'Job not found'
            ], 404);
        }
        
        return response()->json([
            'success' => true,
            'data' => $job,
            'message' => 'Job retrieved successfully'
        ]);
    }
}
