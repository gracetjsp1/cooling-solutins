<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MainProduct extends Model
{
    protected $fillable = ['name','slug','icon_image','icon_alt','main_image','main_alt','home_image','home_alt','banner_image','banner_alt','description','seo_title','seo_keywords','seo_description'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    // auto-slug (if you want)
    public static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name);
            }
        });
    }
}