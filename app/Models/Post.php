<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $casts = [
        'habilitated' => 'boolean'
    ];
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
