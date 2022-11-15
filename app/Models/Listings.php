<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'logo',
        'tags',
        'company',
        'location',
        'email',
        'website',
        'description',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false)  // in there is no tag search, don't do anything
        {
            $query->where('tags', 'like', '%' . request('tag') . '%'); //tags is column in the table , % means any string
        }

        if ($filters['search'] ?? false)  // in there is no search, don't do anything
        {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->orWhere('location', 'like', '%' . request('search') . '%');
            // when user search, it will check the word from multiple column. title,description , tags
        }
    }
}
