<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'product_id');
    }

    public function meta()
    {
        return $this->hasOne(ProductMeta::class, 'product_id');
    }
}
