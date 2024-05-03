<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_one',
        'photo_two',
        'photo_three',
        'photo_four',
        'name',
        'description',
        'sub_category_id',
        'price',
        'stock_quantity',
        'discount',


    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function  users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function subCategory(): BelongsTo
    {
        return  $this ->belongsTo(SubCategory::class);
    }
    public  function  productItems():HasMany
    {
        return $this->hasMany(ProductItem::class);
    }

}
