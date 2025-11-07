<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'job_listings';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'salary',
        'location',
        'company',
        'description'
    ];

    /**
     * Get all jobs (for backwards compatibility)
     */
    public static function getAllJobs()
    {
        return static::all();
    }

    /**
     * Find a job by ID (for backwards compatibility)
     */
    public static function findJob($id)
    {
        return static::find($id);
    }

    /**
     * Search jobs by title or company
     */
    public static function search($term)
    {
        return static::where('title', 'like', "%{$term}%")
            ->orWhere('company', 'like', "%{$term}%")
            ->orWhere('location', 'like', "%{$term}%")
            ->get();
    }

    /**
     * Get jobs by location
     */
    public static function getByLocation($location)
    {
        return static::where('location', $location)->get();
    }
}
