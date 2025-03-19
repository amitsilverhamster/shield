<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\ProductCategory;

class FrontendController extends Controller
{
    // Home Slider
    public function sliderIndex()
    {
        $sliders = HomeSlider::where('is_active', true)
            ->orderBy('order')
            ->get();
        return view('component.home-slider', compact('sliders'));
    }

    // product category section home page
    public function productCategoryIndex()
    {
        $categories = ProductCategory::where('is_active', true)
            ->withCount('products')
            ->take(8)
            ->get();
        return view('section.dynamic.product-category-section', compact('categories'));
    }
    // product category 
    public function allProductCategory()
    {
        $allcategories = ProductCategory::where('is_active', true)
            ->withCount('products')
            ->get();
        return view('section.dynamic.product-section', compact('allcategories'));
    }
    // product section 
    public function productsIndex()
    {
        $products = Product::where('is_active', true)
            ->get();
        // dd($products);

        $products = $products->map(function ($product) {
            // Parse price data from JSON if needed
            $priceData = is_string($product->price) ? json_decode($product->price, true) : $product->price;
            // Default price values
            $price = 0;
            $oldPrice = 0;

            // Find the pricing for qty=1
            if (is_array($priceData)) {
                foreach ($priceData as $priceTier) {
                    if (isset($priceTier['qty']) && $priceTier['qty'] == '1') {
                        $price = $priceTier['sale_price'] ?? 0;
                        $oldPrice = $priceTier['regular_price'] ?? $price;
                        break;
                    }
                }
            }

            // Get category slugs for filtering
            $categories = ['all'];
            if (!empty($product->category_ids) && is_array($product->category_ids)) {
                $productCategories = ProductCategory::whereIn('id', $product->category_ids)->pluck('slug')->toArray();
                $categories = array_merge($categories, $productCategories);
            }

            // Determine if product is new
            $isNew = $product->created_at->diffInDays(now()) <= 30;

            return [
                'id' => $product->id,
                'image' => $product->getDefaultImage() ?: 'img/placeholder.webp',
                'label' => $isNew ? 'New' : null,
                'name' => $product->name,
                'sku' => $product->sku,
                'price' => $price,
                'oldPrice' => $oldPrice,
                'category' => $categories,
                'slug' => $product->slug
            ];
        });

        $categories = ProductCategory::where('is_active', true)->get();

        return view('sections.dynamic.product-section', compact('products', 'categories'));
    }

    // single products base on slug
    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();

        // Get related products from the same categories
        $relatedProducts = collect();

        if ($product && !empty($product->category_ids)) {
            $relatedProducts = Product::where('is_active', true)
                ->whereJsonContains('category_ids', $product->category_ids)
                ->where('id', '!=', $product->id)
                ->take(4)
                ->get();
        }

        return view('pages.dynamic.products.single-product', compact('product', 'relatedProducts'));
    }
}
