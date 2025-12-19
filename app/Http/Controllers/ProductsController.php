<?php

namespace App\Http\Controllers;

use App\Models\MainProduct;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Show all main products (Products Page)
     */
    public function index()
    {
        $mainProducts = MainProduct::with('subCategories')->get();
        return view('products.index', compact('mainProducts'));
    }

    /**
     * Show a single main product → list sub categories
     */
    public function showMain($mainSlug)
    {
        $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();

        // Get sub-categories with sub-sub count
        $subCategories = $mainProduct->subCategories()->withCount('subSubCategories')->get();

        // Get unique categories from sub-categories for filter buttons
        $categories = $subCategories->pluck('category')   // extract 'category' column
            ->filter()                                     // remove null/empty
            ->unique()                                     // only unique
            ->values();                                    // reindex

        return view('products.main', compact('mainProduct', 'subCategories', 'categories'));
    }
    /**
     * Show sub category → list its sub-sub categories (with pagination)
     */
    public function showSub($mainSlug, $subSlug)
    {
        // Get main product
        $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();

        // Get sub category (WITHOUT loading subSubCategories here)
        $subCategory = SubCategory::where('slug', $subSlug)
            ->where('main_product_id', $mainProduct->id)
            ->firstOrFail();

        // ✅ Paginate sub-sub categories
        $subSubCategories = $subCategory->subSubCategories()->paginate(12);

        return view('products.sub', [
            'mainProduct'       => $mainProduct,
            'subCategory'       => $subCategory,
            'subSubCategories'  => $subSubCategories,
            'mainSlug'          => $mainSlug,
        ]);
    }


    /**
     * Show a single sub-sub category (final product page)
     */
    public function showSubSub($mainSlug, $subSlug, $subSubSlug)
    {
        $subSubCategory = SubSubCategory::where('slug', $subSubSlug)
            ->whereHas('subCategory', function ($q) use ($subSlug, $mainSlug) {
                $q->where('slug', $subSlug)
                    ->whereHas('mainProduct', function ($q2) use ($mainSlug) {
                        $q2->where('slug', $mainSlug);
                    });
            })
            ->with('subCategory.mainProduct')
            ->firstOrFail();

        $mainProduct = $subSubCategory->subCategory->mainProduct;
        $subCategory = $subSubCategory->subCategory;

        // 🔥 Safe handling for array or string
        $detailImages = [];

        $value = $subSubCategory->detail_images;

        // If already array:
        if (is_array($value)) {
            $detailImages = $value;
        }
        // If JSON string:
        elseif (is_string($value)) {
            $decoded = json_decode($value, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $detailImages = $decoded;
            }
        }

        return view('products.subsub', compact(
            'subSubCategory',
            'mainProduct',
            'subCategory',
            'detailImages'
        ));
    }
}
