<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'published',
        'published_at'
    ];

    protected $casts = [
        'published' => 'boolean',
        'published_at' => 'datetime'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (!$post->slug) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
}
