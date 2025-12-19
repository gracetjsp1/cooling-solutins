<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class SubSubCategory extends Model
{
     protected $fillable = [
        'sub_category_id',
        'name',
        'slug',
        'small_description',
        'image_sub_sub_category',
        'image_sub_sub_category_alt',
        'image_detail',
        'image_detail_alt',
        'features',
        'description_heading',
        'description',
        'technical_parameters_heading',
        'technical_parameters',
        'detail_images_heading',
        'detail_images',
        'seo_title',
        'seo_keywords',
        'seo_description'
    ];

    protected $casts = [
        'detail_images' => 'array', // ✅ KEEP ONLY THIS
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    // easy accessor to get main product via relations
    public function mainProduct()
    {
        return $this->hasOneThrough(
            MainProduct::class,
            SubCategory::class,
            'id', // subcategory id
            'id', // main product id
            'sub_category_id', // local key on this table
            'main_product_id'  // local key on subcategories table
        );
    }
}