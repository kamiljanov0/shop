<?php
use App\Models\Category;
use App\Models\Product;

function getCategories(){
    return Category::all();
}
function getProducts(){
    return Product::latest()->limit(8)->get();
}

?>
