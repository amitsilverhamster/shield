<?php

use Illuminate\Support\Facades\Route;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    $sliders = HomeSlider::where('is_active', true)->orderBy('order')->get();
    return view('home', compact('sliders'));
});

Route::get('/products', function () {
    return view('pages/products/index');
});
Route::get('/products/single', function () {
    return view('pages/products/single-product');
});
Route::get('/blog', function () {
    return view('pages/post/index');
});
Route::get('/blog/single', function () {
    return view('pages/post/single-post');
});
Route::get('/compare', function () {
    return view('pages/compare');
});
// Remove the redundant route
Route::get('/carts', function () {
    return view('pages/shop/index');
    
});
Route::get('/check-out', function () {
    return view('pages/shop/checkout');
});
Route::get('/contact', function () {
    return view('pages/contact');
});

// Forms
Route::post('/contact', [FormsController::class, 'storeContactForm'])->name('contact.storeContactForm');

//  dynamic routes
Route::get('/dynamic', function () {
    $sliders = HomeSlider::where('is_active', true)->orderBy('order')->get();
    $categories = ProductCategory::where('is_active', true)->take(8)->get();
    $allcategories = ProductCategory::where('is_active', true)->get();

    // Get products using the FrontendController method
    $productsController = new FrontendController();
    $productsView = $productsController->productsIndex();
    $products = $productsView->getData()['products']->take(12);

    return view('home-dynamic', compact('sliders', 'categories', 'allcategories', 'products'));
});

Route::get('/dynamic/products',function(){
    $allcategories = ProductCategory::where('is_active', true)->get();
    $categories = ProductCategory::where('is_active', true)->take(8)->get();


    $productsController = new FrontendController();
    $productsView = $productsController->productsIndex();
    $products = $productsView->getData()['products'];
    return view('pages/dynamic/products/index', compact('products','allcategories' ,'categories'));
});
Route::get('/dynamic/products/{slug}',function($slug){
    $productsController = new FrontendController();
    $productsView = $productsController->singleProduct($slug);
    $product = $productsView->getData()['product'];
    return view('pages/dynamic/products/single-product', compact('product'));
});

// Add new route for product category section
Route::get('/product-categories', [FrontendController::class, 'productCategoryIndex']);

// Fix the problematic route - change from ProductController to FrontendController
Route::get('/products/{slug}', [FrontendController::class, 'singleProduct'])->name('products.show');

// Cart Routes
Route::get('/dynamic/carts', function () {
    $cartController = new App\Http\Controllers\CartController();
    $cartData = $cartController->getCartData();
    return view('pages/dynamic/cart/index', $cartData);
});
Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [App\Http\Controllers\CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update', [App\Http\Controllers\CartController::class, 'updateCartQuantity'])->name('cart.update');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'showCart'])->name('cart.show');

// Account
Route::get('/account', function () {
    return view('pages/account');
});

// Oreders list
Route::get('/your-orders', function () {
    return view('pages/your-orders');
});

// user upadete
Route::get('/user-update', function () {
    return view('pages/user-update');
});