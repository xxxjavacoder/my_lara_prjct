<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function edit(User $user, Post $post) {
        return $post->user->is($user);
    }
}
