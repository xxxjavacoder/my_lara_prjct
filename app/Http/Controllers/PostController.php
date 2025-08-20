<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(5);

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        request()->validate([
            'title' => ['required',  'min:3', 'max:20'],
            'description' => ['required',  'min:20', 'max:255']
        ]);

//        $post = Auth::user()->posts()->create([
//            'title' => request()->safe(['title']),
//            'description' => request('description')
//        ]);

        $post = Post::make([
            'title' => request('title'),
            'description' => request('description')
        ]);

        $post->user()->associate(Auth::user());
        $post->save();

        return redirect('/posts');
    }

    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post) {

        $attr = request()->validate([
            'title' => ['min:3', 'max:20'],
            'description' => ['min:20', 'max:255']
        ]);

        $post->update($attr);

        return redirect('/posts');
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect('/posts');
    }
}
