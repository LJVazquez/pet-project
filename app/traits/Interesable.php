<?php

namespace App\traits;

use App\Models\User;

trait Interesable
{
    public function interest(User $user)
    {
        return $this->interesteds()->toggle($user);
    }

    public function interesteds()
    {
        return $this->belongsToMany(User::class, 'adopts');
    }

    public function isUserInterested(User $user)
    {
        return $this->interesteds->where('id', $user->id)->isNotEmpty();
    }
}
