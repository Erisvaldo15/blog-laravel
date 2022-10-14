<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }

    public static function search($search) {
        return self::where("title", "like", "%{$search}%")
                ->orWhere("content", "like", "%{$search}%")
                ->with(['user', 'comment'])
                ->paginate(6);
    }   
    
}