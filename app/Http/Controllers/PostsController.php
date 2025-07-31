<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index() {
        $posts = Posts::all();

        return view('forum.index', ['posts' => $posts]);
    }

    public function show(Posts $post) {
        if (!$post) {
            abort(404);
        }

        return view('forum.show', ['post' => $post]);
    }

    public function create() {
        return view('forum.create');
    }

    public function store() {
        request()->validate([
            'title' => ['required',  'min:3', 'max:20'],
            'description' => ['required',  'min:20', 'max:255']
        ]);

        Posts::create([
            'title' => request('title'),
            'description' => request('description'),
            'user_id' => Auth::user()->id
        ]);

        return redirect('/forum');
    }

    public function edit(Posts $post) {
        return view('forum.edit', ['post' => $post]);
    }

    public function update(Posts $post) {

        $attr = request()->validate([
            'title' => ['required',  'min:3', 'max:20'],
            'description' => ['required',  'min:20', 'max:255']
        ]);

        $post->update($attr);

        return redirect('/forum');
    }

    public function destroy(Posts $post) {
        $post->delete();

        return redirect('/forum');
    }
}
