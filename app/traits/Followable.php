<?php

namespace App\traits;

use App\Models\User;

trait Followable
{
    public function follow(User $user)
    {
        return $this->following()->toggle($user);
    }

    public function isFollowing(User $user)
    {
        return $this->following->where('id', $user->id)->isNotEmpty();
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'following', 'user_id', 'following_user_id');
    }
}
