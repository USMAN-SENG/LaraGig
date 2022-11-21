<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listings extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
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

    // Relationship with the users table , each list belong to 1 user
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
