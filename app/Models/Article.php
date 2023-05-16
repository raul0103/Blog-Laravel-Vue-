<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'image', 'body'];
    protected $casts = ['published_at' => 'date'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function stats()
    {
        return $this->hasOne(Stat::class);
    }

    public function simpleBody()
    {
        return Str::limit($this->body, 100, '...');
    }

    public function createdForHumans()
    {
        return $this->published_at->diffForHumans();
    }

    public function scopeLastLimit($query, $limit)
    {
        return $query->with('stats', 'tags')->orderBy('created_at', 'desc')->limit($limit)->get();
    }
}
