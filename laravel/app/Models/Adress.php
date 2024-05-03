<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adress extends Model
{
    use HasFactory;

    protected $table='addresses';
    protected $fillable=['user_id','number','city','district','street','postal_code'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);

    }
}
