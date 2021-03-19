<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\traits\Interesable;

class Post extends Model
{
    protected $fillable = ['body', 'user_id', 'image'];

    use HasFactory;
    use Interesable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImage()
    {
        return asset("/storage/$this->image");
    }
}
