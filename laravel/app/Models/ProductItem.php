<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductItem extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','television', 'computer_items', 'notebook', 'smartphone', 'furniture', 'beauty', 'books'];

    protected $casts = [
        'television' => 'array',
        'computer_items' => 'array',
        'notebook' => 'array',
        'smartphone' => 'array',
        'furniture' => 'array',
        'beauty' => 'array',
        'books' => 'array'
    ];



    public static function store($data)
    {
        return self::create($data);
    }

    public  function  product():BelongsTo
    {
       return $this->belongsTo(Product::class);
    }
}
