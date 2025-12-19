<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $q = $request->query('q');
    $category = $request->query('category');
    $main = $request->query('main');

    $results = SubSubCategory::with(['subCategory.mainProduct'])
        ->when($q, function ($query) use ($q) {
            $query->where(function ($b) use ($q) {
                $b->where('name', 'LIKE', "%{$q}%")
                  ->orWhere('description', 'LIKE', "%{$q}%")
                  ->orWhere('technical_parameters', 'LIKE', "%{$q}%");
            });
        })
        ->when($category, function ($query) use ($category) {
            $query->whereHas('subCategory', function ($b) use ($category) {
                $b->where('category', $category);
            });
        })
        ->when($main, function ($query) use ($main) {
            $query->whereHas('subCategory.mainProduct', function ($b) use ($main) {
                $b->where('slug', $main);
            });
        })
        ->paginate(2)
        ->withQueryString();

    return view('search.results', compact('results', 'q', 'category', 'main'));
}

}

