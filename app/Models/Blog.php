<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',               // Blog title
        'slug',                // Unique URL slug
        'image',               // Blog main image
        'image_alt',           // Image alt text
        'publishedDate',       // Published date
        'open_graph',          // Open Graph meta info (optional)
        'content',             // LongText blog content
        'seo_title',           // SEO title
        'seo_keywords',        // SEO keywords
        'seo_description'      // SEO description
    ];

    // Optional: accessor for formatted published date
    public function getFormattedDateAttribute()
    {
        return \Carbon\Carbon::parse($this->publishedDate)->format('F d, Y');
    }
}
