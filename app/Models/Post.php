<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['body', 'user_id'];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

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
