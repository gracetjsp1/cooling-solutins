<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\MainProduct;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Support\Facades\File;

class CreateProductFolders extends Command
{
    protected $signature = 'products:create-folders';
    protected $description = 'Create folders for main products, sub categories, and sub-sub categories using slugs';

    public function handle()
    {
        // Base folder
        $basePath = public_path('uploads/products');

        // Ensure base directory exists
        if (!File::exists($basePath)) {
            File::makeDirectory($basePath, 0755, true);
        }

        // Get all products with relations
        $mainProducts = MainProduct::with('subCategories.subSubCategories')->get();

        foreach ($mainProducts as $main) {

            // -------- MAIN PRODUCT FOLDER --------
            $mainFolder = $basePath . '/' . $main->slug;

            if (!File::exists($mainFolder)) {
                File::makeDirectory($mainFolder, 0755, true);
                $this->info("Created: {$mainFolder}");
            }

            foreach ($main->subCategories as $sub) {

                // -------- SUB CATEGORY FOLDER --------
                $subFolder = $mainFolder . '/' . $sub->slug;

                if (!File::exists($subFolder)) {
                    File::makeDirectory($subFolder, 0755, true);
                    $this->info("Created: {$subFolder}");
                }

                foreach ($sub->subSubCategories as $subSub) {

                    // -------- SUB-SUB CATEGORY FOLDER --------
                    $subSubFolder = $subFolder . '/' . $subSub->slug;

                    if (!File::exists($subSubFolder)) {
                        File::makeDirectory($subSubFolder, 0755, true);
                        $this->info("Created: {$subSubFolder}");
                    }
                }
            }
        }

        $this->info('All folders created successfully using slugs!');
    }
}
