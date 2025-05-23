<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'status'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function subSubCategories()
    {
        return $this->hasMany(SubSubCategory::class, 'sub_category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'sub_category_id');
    }
}
