<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'description'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
