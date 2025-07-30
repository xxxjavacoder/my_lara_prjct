<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /** @use HasFactory<\Database\Factories\PostsFactory> */
    use HasFactory;
    protected $table = 'posts';
    public function index() {
        $posts = Posts::all();

        return view('news.index', ['posts' => $posts]);
    }

    public function show($id) {
        $post = Posts::find($id);

        if (!$post) {
            abort(404);
        }

        return view('news.show', ['post' => $post]);
    }
}
