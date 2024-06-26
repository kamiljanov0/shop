<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected  $fillable = [
        'body',
        'post_id',
        'users_id',

    ];
    public function posts()
    {
       return $this->belongsTo(Post::class);
    }
    public function user()
    {
     return   $this->belongsTo(User::class,'users_id','id');
    }
}
